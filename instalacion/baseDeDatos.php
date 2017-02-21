<?php

class Create_database
{
    protected $pdo;
     Public $host;
     public $user;
     public $password;

    
    public function __construct($host,$user,$password)
    {    
        $this->pdo = new PDO('mysql:host='.$host.';', $user, $password);
    }
    //creamos la base de datos y las tablas que necesitemos
    public function my_db()
    {
        //creamos la base de datos si no existe
        $crear_db = $this->pdo->prepare('CREATE DATABASE IF NOT EXISTS calid COLLATE utf8_spanish_ci');
        $crear_db->execute();

        //decimos que queremos usar la tabla que acabamos de crear
        if($crear_db):
            $use_db = $this->pdo->prepare('USE calid');
            $use_db->execute();
        endif;

        //si se ha creado la base de datos y estamos en uso de ella creamos las tablas
        if($use_db):
            //creamos la tabla Categorias
            $crear_tb_users = $this->pdo->prepare('
						CREATE TABLE `categorias` (
  `id` int(8) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, \'Al\'),
(2, \'Frecuente\'),
(8, \'Catgoria_1\'),
(10, \'Catgoria_2\'),
(13, \'Prueba\');');
           
         endif;
            //creamos la tabla posts
 


   $crear_tb_users->execute();

   
    }
    public function clie(){

      $crear_tb_posts = $this->pdo->prepare('
          CREATE TABLE `clientes` (
  `id` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `categoria_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `telefono`, `correo_electronico`, `categoria_id`) VALUES
(2, \'Sayda\', \'Perez Lara\', \'1213313232\', \'sayda_71@hotmail.com\', 2),
(3, \'Damian\', \'Perez Lara\', \'12321321\', \'dami@gmail.com\', 2),
(4, \'dsd\', \'fsf\', \'123\', \'dwe@dwefe.com\', 1)

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);');
            $crear_tb_posts->execute();
       

    }
}
//ejecutamos la función my_db para crear nuestra bd y las tablas

?>