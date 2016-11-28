--
-- Base de datos: `pananabe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `genero` set('hombre','mujer') NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `genero`, `nombre`) VALUES
(1, 'hombre', 'Hombre'),
(2, 'mujer', 'Mujer'),
(3, 'mujer', 'Bikini'),
(4, 'mujer', 'Entera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `permiso` varchar(100) NOT NULL,
  `key` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `permiso`, `key`) VALUES
(1, 'Tareas de administracion', 'admin_access'),
(2, 'Agregar Posts', 'nuevo_post'),
(3, 'Editar Posts', 'editar_post'),
(4, 'Eliminar Posts', 'eliminar_post');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_role`
--

CREATE TABLE `permisos_role` (
  `role` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos_role`
--

INSERT INTO `permisos_role` (`role`, `permiso`, `valor`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(3, 2, 1),
(3, 3, 1),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_usuario`
--

CREATE TABLE `permisos_usuario` (
  `usuario` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda`
--

CREATE TABLE `prenda` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(450) NOT NULL,
  `temporada` int(4) NOT NULL,
  `precio` int(110) NOT NULL DEFAULT '0',
  `S` int(20) NOT NULL DEFAULT '0',
  `M` int(20) NOT NULL DEFAULT '0',
  `L` int(20) NOT NULL DEFAULT '0',
  `XL` int(20) NOT NULL DEFAULT '0',
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `foto_frente` varchar(120) NOT NULL,
  `foto_atras` varchar(120) NOT NULL,
  `foto_perfil` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prenda`
--

INSERT INTO `prenda` (`id`, `nombre`, `descripcion`, `temporada`, `precio`, `S`, `M`, `L`, `XL`, `estado`, `foto_frente`, `foto_atras`, `foto_perfil`) VALUES
(1, 'Traje Floral', 'Colores cálidos y pasteles hacen del traje Floral una genuina combinación entre las hojas verdes de palmera y flores rojas Jamaiquinas, inspiradas en las playas paradisíacas, dándole un estilo propio alegre y único para vestir en esta estación tan esperada que es el verano.', 2016, 690, 5, 5, 5, 5, 1, 'upl_583caf54a8c19.jpg', 'upl_583caf5a45161.jpg', 'upl_583caf5d7fe2e.jpg'),
(2, 'Traje Tiras Celeste', 'Inspirados en un modelo clásico, como el océano, el mar azul y la frescura que nos transmiten, diseñamos el Traje Tiras Celeste, con una sutil combinación de tonos pasteles como el Celeste y Blanco, logrando un equilibrio entre si, junto a una sensación de pureza y libertad diseñamos este autentico traje de baño.', 2016, 690, 5, 5, 5, 5, 1, 'upl_583caf8b474a8.jpg', 'upl_583caf8eefef0.jpg', 'upl_583caf958cef8.jpg'),
(3, 'Traje Colorado y Beige', 'Lineas coloradas y naturales, totalmente descontracturadas, alternadas entre si, colocadas unas entre otras, marcando una actitud veraniega, hacen de este autentico traje de baño Colorado y Baige un diseño alegre, original y mas que exclusivo por su modelo único en esta paleta de tonalidades.', 2016, 690, 5, 5, 5, 5, 1, 'upl_583cb017e538d.jpg', 'upl_583cb01c94a68.jpg', 'upl_583cb0242c9af.jpg'),
(4, 'Traje Lunares', 'Puntos por aquí puntos por allá, ninguno es igual ! con esta actitud, utilizando toda la paleta de colores combinados entre si, sin que ninguno se alinee al otro, así de simple, relajada y descontracturado nació nuestro tan apreciado y minuciosamente pensado Traje Lunares, pura onda veraniega.', 2016, 690, 5, 5, 5, 5, 1, 'upl_583cb13b32c59.jpg', 'upl_583cb1416f12b.jpg', 'upl_583cb14446edb.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda_a_categoria`
--

CREATE TABLE `prenda_a_categoria` (
  `id` int(11) NOT NULL,
  `id_prenda` int(50) NOT NULL,
  `id_categoria` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prenda_a_categoria`
--

INSERT INTO `prenda_a_categoria` (`id`, `id_prenda`, `id_categoria`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_role`, `role`) VALUES
(1, 'Administrador'),
(2, 'Gestor'),
(3, 'Editor'),
(4, 'Registrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date_created` date NOT NULL,
  `area_phone_code` int(11) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `document_number` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `codigo` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `pass`, `email`, `role`, `estado`, `fecha`, `codigo`) VALUES
(1, 'nombre1', 'admin', 'd1b254c9620425f582e27f0044be34bee087d8b4', 'admin@admin.adm', 1, 1, '0000-00-00 00:00:00', 1963007335),
(2, 'usuario1', 'usuario1', 'd1b254c9620425f582e27f0044be34bee087d8b4', 'usuario1@user.com', 2, 1, '2012-03-21 20:53:07', 1963007335),
(3, 'usuario2', 'usuario2', 'd1b254c9620425f582e27f0044be34bee087d8b4', 'usuario2@user.com', 3, 1, '2012-03-21 20:57:01', 1963007335);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_user` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `cant` int(5) NOT NULL DEFAULT '1',
  `talle` set('S','M','L','XL') NOT NULL,
  `precio` double NOT NULL,
  `id_prenda` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `permisos_role`
--
ALTER TABLE `permisos_role`
  ADD UNIQUE KEY `role` (`role`,`permiso`);

--
-- Indices de la tabla `permisos_usuario`
--
ALTER TABLE `permisos_usuario`
  ADD UNIQUE KEY `usuario` (`usuario`,`permiso`);

--
-- Indices de la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prenda_a_categoria`
--
ALTER TABLE `prenda_a_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `document_number` (`document_number`),
  ADD KEY `email_2` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `prenda`
--
ALTER TABLE `prenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `prenda_a_categoria`
--
ALTER TABLE `prenda_a_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
