<?php

class usuariosController extends administradorController
{
    private $_usuarios;
	private $_aclm;

    public function __construct(){
        parent::__construct();
        $this->_usuarios = $this->loadModel('user');
		$this->_aclm = $this->loadModel('acl');
    }

	public function index(){
        if(Session::get('autenticado')){
            $this->redireccionar('administrador');
        }

        $this->_view->assign('titulo', 'Iniciar Sesion');

        if($this->getInt('enviar') == 1){

			//usar array_merge para --- ver tambien application/Registry
            $this->_view->assign('datos', $_POST);

            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_error', 'Debe introducir su nombre de usuario');
                $this->_view->renderizar('index','login');
                exit;
            }

            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->renderizar('index','login');
                exit;
            }

            $row = $this->_usuarios->getUsuarioLogin(
                    $this->getAlphaNum('usuario'),
                    $this->getSql('pass')
                    );

            if(!$row){
                $this->_view->assign('_error', 'Usuario y/o password incorrectos');
                $this->_view->renderizar('index','login');
                exit;
            }

            if($row['estado'] != 1){
                $this->_view->assign('_error', 'Este usuario no esta habilitado');
                $this->_view->renderizar('index','login');
                exit;
            }

            Session::set('autenticado', true);
            Session::set('level', $row['role']);
            Session::set('usuario', $row);
            Session::set('id_usuario', $row['id']);
            Session::set('tiempo', time());

            $this->redireccionar('administrador');
        }

        $this->_view->setJs(array('login'));
        $this->_view->setCss(array('login'));
        $this->_view->renderizar('index','');
    }

    public function cerrar(){
        Session::destroy();
        $this->redireccionar('administrador');
    }

	public function registro(){
        if(!Session::get('autenticado')){
			$this->redireccionar('administrador');
		}

		$this->_acl->acceso('control_usuarios');

		$this->_view->assign('roles', $this->_aclm->getRoles());
        $this->_view->assign('titulo', 'Registro');

        if($this->getInt('enviar') == 1){ //Si recibo los datos creo el nuevo usuario
            $this->_view->assign('datos', $_POST);

			if($this->getInt('rol') == 0){
                $this->_view->assign('_error', 'Debe seleccionar un Rol de permisos.');
                $this->_view->renderizar('nuevo', '');
                exit;
            }

            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_error', 'Debe introducir su nombre usuario');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

            if($this->_usuarios->verificarUsuario($this->getAlphaNum('usuario'))){
                $this->_view->assign('_error', 'El usuario ' . $this->getAlphaNum('usuario') . ' ya existe');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

            if(!$this->validarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'La direccion de email es inv&aacute;lida');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

            if($this->_usuarios->verificarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'Esta direccion de correo ya esta registrada');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

			if(!$this->getTexto('nombre')){
                $this->_view->assign('_error', 'Debe introducir su nombre');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

			if(!$this->getTexto('apellido')){
                $this->_view->assign('_error', 'Debe introducir su apellido');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

			if(!$this->getDni('dni')){
                $this->_view->assign('_error', 'No es un numero de DNI valido');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

            if($this->getPostParam('pass') != $this->getPostParam('confirmar')){
                $this->_view->assign('_error', 'Los passwords no coinciden');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

			$datos['usuario'] = $this->getAlphaNum('usuario');
			$datos['email'] = $this->getPostParam('email');
			$datos['nombre'] = $this->getTexto('nombre');
			$datos['apellido'] = $this->getTexto('apellido');
			$datos['dni'] = $this->getDni('dni');
			$datos['password'] = $this->getPostParam('confirmar');
			$datos['rol'] = $this->getInt('rol');
            $this->_usuarios->registrarUsuario($datos);

            $usuario = $this->_usuarios->verificarUsuario($this->getAlphaNum('usuario'));

            if(!$usuario){
                $this->_view->assign('_error', 'Error al registrar el usuario');
                $this->_view->renderizar('registro', 'registro');
                exit;
            }

			/* CUANDO SE DESEA USAR LA ACTIVACION DE CUENTA POR CORREO

			$this->getLibrary('class.phpmailer');
            $mail = new PHPMailer();

            $mail->From = 'www.mvc.dlancedu.com';
            $mail->FromName = 'Tutorial MVC';
            $mail->Subject = 'Activacion de cuenta de usuario';
            $mail->Body = 'Hola <strong>' . $this->getSql('nombre') . '</strong>,' .
                        '<p>Se ha registrado en www.mvc.dlancedu.com para activar ' .
                        'su cuenta haga clic sobre el siguiente enlace:<br>' .
                        '<a href="' . BASE_URL .'registro/activar/' .
                        $usuario['id'] . '/' . $usuario['codigo'] . '">' .
                        BASE_URL .'registro/activar/' .
                        $usuario['id'] . '/' . $usuario['codigo'] .'</a>' ;

            $mail->AltBody = 'Su servidor de correo no soporta html';
            $mail->AddAddress($this->getPostParam('email'));
            $mail->Send();

			$this->_view->assign('datos', false);
            $this->_view->assign('_mensaje', 'Registro Completado, revise su email para activar su cuenta'); */

			$this->activar($usuario['id'],$usuario['codigo']);
			$this->_view->assign('datos', false);
            $this->_view->assign('_mensaje', 'Registro Completado exitosamente');
        }

        $this->_view->renderizar('registro', 'registro');
    }

    public function activar($id, $codigo){
        if(!$this->filtrarInt($id) || !$this->filtrarInt($codigo)){
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('activar', 'registro');
            exit;
            }

        $row = $this->_usuarios->getUsuarioByCodigo(
                            $this->filtrarInt($id),
                            $this->filtrarInt($codigo)
                            );

        if(!$row){
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        if($row['estado'] == 1){
            $this->_view->assign('_error', 'Esta cuenta ya ha sido activada');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        $this->_usuarios->activarUsuario(
                            $this->filtrarInt($id),
                            $this->filtrarInt($codigo)
                            );

        $row = $this->_usuarios->getUsuarioByCodigo(
                            $this->filtrarInt($id),
                            $this->filtrarInt($codigo)
                            );

        if($row['estado'] == 0){
            $this->_view->assign('_error', 'No se ha podido activar la cuenta');
            $this->_view->renderizar('registro', 'registro');
            exit;
        }

        /*$this->_view->assign('_mensaje', 'Su cuenta ha sido activada');
        $this->_view->renderizar('activar', 'registro');*/
    }

    public function listado(){

		if(!Session::get('autenticado')){
			$this->redireccionar('administrador');
		}
		$this->_acl->acceso('control_usuarios');

        $this->_view->assign('titulo', 'Usuarios');
		$this->_view->assign('marcado', '');
        $this->_view->assign('usuarios', $this->_usuarios->getUsuarios());
        $this->_view->renderizar('listado', 'usuarios');
    }

    public function permisos($usuarioID){

		if(!Session::get('autenticado')){
			$this->redireccionar('administrador');
		}

		$this->_acl->acceso('super_usuario');

        $id = $this->filtrarInt($usuarioID);

        if(!$id){
            $this->redireccionar('usuarios');
        }

        if($this->getInt('guardar') == 1){
            $values = array_keys($_POST);
            $replace = array();
            $eliminar = array();

            for($i = 0; $i < count($values); $i++){
                if(substr($values[$i],0,5) == 'perm_'){
                    $permiso = (strlen($values[$i]) - 5);

                    if($_POST[$values[$i]] == 'x'){
                        $eliminar[] = array(
                            'usuario' => $id,
                            'permiso' => substr($values[$i], -$permiso)
                        );
                    }
                    else{
                        if($_POST[$values[$i]] == 1){
                            $v = 1;
                        }
                        else{
                            $v = 0;
                        }

                        $replace[] = array(
                            'usuario' => $id,
                            'permiso' => substr($values[$i], -$permiso),
                            'valor' => $v
                        );
                    }
                }
            }

            for($i = 0; $i < count($eliminar); $i++){
                $this->_usuarios->eliminarPermiso(
                        $eliminar[$i]['usuario'],
                        $eliminar[$i]['permiso']);
            }

            for($i = 0; $i < count($replace); $i++){
                $this->_usuarios->editarPermiso(
                        $replace[$i]['usuario'],
                        $replace[$i]['permiso'],
                        $replace[$i]['valor']);
            }
        }

        $permisosUsuario = $this->_usuarios->getPermisosUsuario($id);
        $permisosRole = $this->_usuarios->getPermisosRole($id);

        if(!$permisosUsuario || !$permisosRole){
            $this->redireccionar('usuarios');
        }

        $this->_view->assign('titulo', 'Permisos de usuario');
		$this->_view->assign('marcado', '');
        $this->_view->assign('permisos', array_keys($permisosUsuario));
        $this->_view->assign('usuario', $permisosUsuario);
        $this->_view->assign('role', $permisosRole);
        $this->_view->assign('info', $this->_usuarios->getUsuario($id));

        $this->_view->renderizar('permisos', 'usuarios');
    }

	public function eliminar($id_user){
		if(!Session::get('autenticado')){
			$this->redireccionar('administrador');
		}

		if($id_user == 1 or $id_user == $this->_current_user['id']){
			$this->redireccionar('administrador');
		}
		$this->_acl->acceso('control_usuarios');

		$this->_usuarios->eliminar(array(id_user => $id_user)); //Este si

		$this->redireccionar('administrador/usuarios/listado');

	}

	public function perfil($id_user){
		if(!Session::get('autenticado')){
			$this->redireccionar('administrador');
		}

		$current = $this->current_user();
		if($id_user != $current['id']){
			$this->redireccionar('administrador');
		}

		$this->_acl->acceso('control_perfil');

        $id = $this->filtrarInt($id_user);
        if(!$id){
            $this->redireccionar('administrador');
        }

		$usuario = $this->_usuarios->getUsuario($id);
		if(!$usuario){
			$this->redireccionar('administrador');
		}

		$this->_view->assign('usuario', $usuario);
		$this->_view->assign('titulo', 'Permisos de usuario');

		if($this->getInt('guardar') == 1){

			if($usuario['pass'] != (Hash::getHash('sha1', $this->getPostParam('passActual') , HASH_KEY))){
				$this->_view->assign('_error', 'La contraseña ingresada no es correcta');
                $this->_view->renderizar('perfil', '');
                exit;
			}

			if(!$this->getSql('passNueva')){
                $this->_view->assign('_error', 'Debe introducir su contraseña');
                $this->_view->renderizar('perfil', '');
                exit;
            }

			if($this->getPostParam('passNueva') != $this->getPostParam('passConfirmar')){
                $this->_view->assign('_error', 'Los contraseñas no coinciden');
                $this->_view->renderizar('perfil', '');
                exit;
            }

			$datos['password'] = $this->getPostParam('passConfirmar');
            if($this->_usuarios->editarUser($id,$datos)){
				$this->_view->assign('_error', 'Hubo un error al actualizar los datos.');
                $this->_view->renderizar('perfil', '');
                exit;
			} else {
				$this->_view->assign('_mensaje', 'Se actualizaron los datos del perfil.');
			}
		}
		$this->_view->renderizar('perfil', 'usuarios');
	}


}

?>
