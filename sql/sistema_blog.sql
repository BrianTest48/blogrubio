-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2024 a las 05:12:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Cómo cultivar un jardín de hierbas en casa', 'Consejos para tener éxito con tu jardín de hierbas', '2024-02-22 03:06:53', 'El cultivo de hierbas en casa es una actividad gratificante que no solo te proporciona hierbas frescas para cocinar, sino que también puede mejorar el aspecto de tu hogar y tu salud. En este artículo, exploraremos algunos consejos prácticos para cultivar un jardín de hierbas en casa.', '1.jpg'),
(2, '10 consejos para mejorar tu productividad', 'Consejos prácticos para aumentar tu eficiencia en el trabajo', '2024-02-22 03:31:03', 'Mejorar la productividad es clave para lograr el éxito en cualquier área de la vida. En este artículo, compartiremos diez consejos efectivos para ayudarte a maximizar tu tiempo y energía, y así alcanzar tus metas con mayor facilidad.', '2.jpg'),
(3, 'Recetas saludables para el desayuno', 'Ideas deliciosas y nutritivas para comenzar el día', '2024-02-22 03:06:53', 'El desayuno es la comida más importante del día, y es crucial elegir opciones saludables que te brinden la energía necesaria para enfrentar tus actividades diarias. Descubre en este artículo algunas recetas deliciosas y nutritivas para un desayuno equilibrado.', '1.jpg'),
(4, 'Consejos para mejorar tu técnica de fotografía', 'Cómo capturar imágenes impresionantes', '2024-02-22 03:31:08', 'La fotografía es una forma de arte que requiere habilidad técnica y creatividad. Si estás buscando mejorar tus habilidades fotográficas, este artículo te ofrece una serie de consejos prácticos que te ayudarán a capturar imágenes impresionantes.', '3.jpg'),
(5, 'Los beneficios de la meditación diaria', 'Cómo la meditación puede transformar tu vida', '2024-02-22 03:06:53', 'La meditación es una práctica antigua que ofrece una amplia gama de beneficios para la salud mental, emocional y física. En este artículo, exploraremos los numerosos beneficios de incorporar la meditación a tu rutina diaria.', '1.jpg'),
(6, 'Ideas para decorar tu hogar con plantas', 'Cómo agregar un toque verde a tu espacio', '2024-02-22 03:31:12', 'Las plantas son una excelente manera de agregar vida y color a cualquier hogar. Ya sea que tengas espacio al aire libre o vivas en un apartamento pequeño, aquí encontrarás ideas creativas para decorar tu hogar con plantas.', '2.jpg'),
(7, 'Consejos para mantener un estilo de vida saludable', 'Pequeños cambios que marcan la diferencia', '2024-02-22 03:31:16', 'Adoptar un estilo de vida saludable es fundamental para tu bienestar general. En este artículo, compartiremos algunos consejos prácticos que te ayudarán a mantener hábitos saludables y sentirte mejor en tu día a día.', '3.jpg'),
(8, 'Destinos de viaje imperdibles para el próximo año', 'Explora nuevos lugares y culturas', '2024-02-22 03:06:53', 'Viajar es una experiencia enriquecedora que te permite descubrir nuevas culturas, tradiciones y paisajes. Si estás buscando inspiración para tus próximas vacaciones, no te pierdas esta lista de destinos de viaje imperdibles para el próximo año.', '1.jpg'),
(9, 'Cómo planificar una fiesta temática exitosa', 'Consejos para organizar un evento inolvidable', '2024-02-22 03:31:19', 'Las fiestas temáticas son una excelente manera de celebrar ocasiones especiales y crear recuerdos duraderos con amigos y familiares. En este artículo, te ofrecemos consejos prácticos para planificar y ejecutar una fiesta temática exitosa.', '2.jpg'),
(10, 'Consejos para mejorar tu concentración', 'Cómo mantener el enfoque en un mundo lleno de distracciones', '2024-02-22 03:06:53', 'En la era digital actual, mantener la concentración puede ser todo un desafío. Si te encuentras luchando por mantener el enfoque en tus tareas diarias, estos consejos prácticos te serán de gran ayuda.', '1.jpg'),
(11, 'Recetas fáciles y deliciosas para preparar en casa', 'Ideas creativas para cocinar comidas sabrosas', '2024-02-22 03:31:25', 'Cocinar en casa no tiene por qué ser complicado. Con estas recetas fáciles y deliciosas, podrás preparar comidas deliciosas y nutritivas en poco tiempo y con ingredientes simples.', '3.jpg'),
(12, 'Consejos para mejorar tu salud mental', 'Cómo cuidar tu bienestar emocional', '2024-02-22 03:06:53', 'La salud mental es tan importante como la salud física, pero a menudo se pasa por alto. En este artículo, compartiremos algunos consejos prácticos para mejorar tu salud mental y cuidar tu bienestar emocional.', '1.jpg'),
(13, 'Ideas para hacer ejercicio en casa', 'Cómo mantenerte activo sin ir al gimnasio', '2024-02-22 03:31:28', 'Hacer ejercicio regularmente es fundamental para mantener una buena salud física y mental. Si no puedes ir al gimnasio o prefieres hacer ejercicio en casa, aquí encontrarás algunas ideas para mantenerte activo y en forma.', '2.jpg'),
(14, 'Consejos para mejorar tu habilidad de escritura', 'Cómo convertirte en un mejor escritor', '2024-02-22 03:06:53', 'La escritura es una habilidad invaluable que se aplica en muchos aspectos de la vida, tanto personal como profesionalmente. Si estás buscando mejorar tu habilidad de escritura, estos consejos te ayudarán a perfeccionar tu técnica y a expresarte con mayor claridad.', '1.jpg'),
(15, 'Cómo organizar tu tiempo de manera efectiva', 'Consejos prácticos para aumentar tu productividad', '2024-02-22 03:31:32', 'Organizar tu tiempo de manera efectiva es clave para lograr tus metas y reducir el estrés. En este artículo, compartiremos algunas estrategias y herramientas que te ayudarán a maximizar tu tiempo y alcanzar un mayor nivel de productividad.', '3.jpg'),
(16, 'Recetas reconfortantes para días lluviosos', 'Platos calientes y deliciosos para disfrutar en casa', '2024-02-22 03:06:53', 'Los días lluviosos son perfectos para quedarse en casa y disfrutar de comidas reconfortantes. Desde sopas calientes hasta guisos abundantes, aquí encontrarás recetas deliciosas para disfrutar en los días más grises.', '1.jpg'),
(17, 'Cómo mejorar tus habilidades de comunicación', 'Consejos para ser un mejor comunicador', '2024-02-22 03:06:53', 'La comunicación efectiva es esencial en todos los aspectos de la vida, desde las relaciones personales hasta el éxito profesional. En este...', '1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
