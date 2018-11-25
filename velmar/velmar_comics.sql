-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2018 a las 14:46:37
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `velmar_comics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(11) NOT NULL,
  `usAdmin` varchar(10) NOT NULL,
  `pwdAdmin` varchar(33) NOT NULL,
  `emailAdmin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `usAdmin`, `pwdAdmin`, `emailAdmin`) VALUES
(1, 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'juan@juan.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `Comentario` text NOT NULL,
  `nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `idProducto`, `Comentario`, `nombre`) VALUES
(3, 1, '1', 'pepe'),
(4, 9, '1', 'pepe'),
(6, 1, 'sss', 'pepe'),
(7, 1, 'pepep', 'pepe'),
(8, 1, 'ppasd\r\nepapspd\r\nadsadm', 'pepe'),
(9, 1, 'muy buen comic', 'a'),
(10, 9, 'excelente', 'a'),
(11, 1, 'interesante', 'a'),
(12, 1, 'ss', 'a'),
(13, 1, 'ss', 'a'),
(14, 1, 'ss', 'a'),
(15, 5, 'muy buen comic', 'a'),
(16, 1, 'pepe', 'a'),
(17, 1, 'pepe', 'a'),
(18, 1, 'pepep', 'a'),
(19, 1, 'pepep', 'a'),
(20, 1, 'pepe', 'a'),
(21, 1, 'pepe', 'a'),
(22, 1, 'pepe', 'a'),
(23, 1, 'pepe', 'a'),
(24, 1, 'pepe', 'a'),
(25, 1, 'pepe', 'a'),
(26, 1, 'pepe', 'a'),
(27, 1, 'pepe', 'a'),
(28, 1, 'pepe', 'a'),
(29, 1, 'pepe', 'a'),
(30, 1, 'pepe', 'a'),
(31, 1, 'pepe', 'a'),
(32, 1, 'pepe', 'a'),
(33, 1, 'pepe', 'a'),
(34, 1, 'pepe', 'a'),
(35, 1, 'pepe', 'a'),
(36, 1, 'pep', 'a'),
(37, 1, 'pep', 'a'),
(38, 1, 'pep', 'a'),
(39, 9, 'shshsh', 'a'),
(40, 13, 'muy bueno', 'a'),
(41, 1, 'me encanana', 'w'),
(42, 1, 'akja', 'pepe2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nomPro` varchar(100) NOT NULL,
  `Descripcion` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nomPro`, `Descripcion`, `imagen`) VALUES
(1, 'New Mutants: Dead Souls (Trade Paperback)', 'Collects New Mutants: Dead Souls #1-6. They aren’t the X-Men-in-training anymore! The New Mutants are launching themselves headfirst into some of the creepiest corners of the Marvel Universe, going on the missions no one else will. But does they know what they’re really hunting for? The enigmatic Magik leads Wolfsbane, Rictor, Boom-Boom and Strong Guy into battle with paranormal threats that might just tear them apart! Braving an Arctic research base where everyone has mysteriously died! Helping a scared boy alone in the woods! Attempting to save a crashing plane…with the passengers trying to stop them! Breaking into Doctor Strange’s Sanctum Sanctorum! And attending a funeral…for one of their own! All the while, the New Mutants wonder what their true mission is — and what they finally discover will shake them to their core!', 'http://i.annihil.us/u/prod/marvel/i/mg/c/50/5bb7c9a25cb92/portrait_incredible.jpg'),
(2, 'New Mutants: Dead Souls (2018) #6', 'The shocking conclusion is here! Magik and the New Mutants have been wondering what their true mission is, and what they discover will shake them to their core! Secrets will be revealed…questions will be answered…and it will be the worst thing that’s ever happened to them.', 'http://i.annihil.us/u/prod/marvel/i/mg/c/d0/5b7ed43fb89d1/portrait_incredible.jpg'),
(3, 'New Mutants: Dead Souls (2018) #5', 'BREAKING AND ENTERING AT THE SANCTUM SANCTORUM! THE NEW MUTANTS are going to rob the house of the one guy you probably shouldn’t rob. But is what lurks inside DOCTOR STRANGE’s lair more than they bargained for? Nightmares, evil spirits, dark magic and...questionable leftovers?!', 'http://i.annihil.us/u/prod/marvel/i/mg/2/00/5b3feab1d5c8b/portrait_incredible.jpg'),
(4, 'New Mutants: Dead Souls (2018) #4', 'FUNERAL FOR A NEW MUTANT! Following the tragic events of last issue, THE NEW MUTANTS come together to bury one of their own. Can the team put aside their differences long enough to avenge their fallen teammate, or will this loss tear them apart? Featuring guest appearances by all your favorite X-MEN characters as they come to say goodbye... Or do they?', 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/5b1704783b89b/portrait_incredible.jpg'),
(5, 'New Mutants: Dead Souls (2018) #3', 'Flying is the worst, but just imagine flying as a New Mutant! The team has five minutes to save a plane from crashing into a mountain…and it certainly doesn’t help that all the passengers are trying to stop them, too!', 'http://i.annihil.us/u/prod/marvel/i/mg/f/b0/5aea2f5c749fd/portrait_incredible.jpg'),
(6, 'New Mutants: Dead Souls (2018) #2', 'THE NEW MUTANTS head to an arctic research base where everyone has died under mysterious circumstances. But while they hunt for answers, something is hunting them. Plus, a scared boy in the woods comes face-to-face with a familiar face from the NEW MUTANTS’ past. And it doesn’t go well.', 'http://i.annihil.us/u/prod/marvel/i/mg/f/10/5abd64dca6c54/portrait_incredible.jpg'),
(7, 'New Mutants: Demon Bear (Trade Paperback)', 'Collects New Mutants (1983) #18-20, X-Force (1991) #99 material from X-Force (2008) #7-10. The visionary talents of writer Chris Claremont and legendary illustrator Bill Sienkiewicz bring the Demon Bear that has haunted Danielle Moonstar’s dreams to horrifying life! It took her parents, and now it has returned for Dani — and only the combined efforts of her fellow New Mutants can stop it from finishing the job! Sink your teeth into a true classic! Then, Dani’s nightmare returns years later as San Francisco — and her new team X-Force, come under attack from a similarly unholy ursine!', 'http://i.annihil.us/u/prod/marvel/i/mg/c/70/5ab57eb25a9f4/portrait_incredible.jpg'),
(8, 'New Mutants Epic Collection: Curse of the Valkyries (Trade Paperback)', 'Collects X-Terminators #1-4, New Mutants (1983) #71-85. From the horror of Limbo to the glory of Asgard! As the fires of Inferno burn, the New Mutants must escape Magik\'s dark domain - but that leaves the way open for S\'ym and his demons to invade Earth! Luckily, X-Factor\'s former wards, the X-Terminators, are on the scene! Can Rusty, Skids, Boom-Boom, Rictor, Artie, Leech and Wiz Kid help the New Mutants repel an army of demons and save Magik\'s soul? Then, when Hela\'s evil spell corrupts Mirage\'s Valkyrie side, Doctor Strange lends a magical hand! But to cure Mirage completely, the New Mutants must travel to Asgard, home of the mighty Norse gods! The trouble is, Hela is scheming to murder Odin and conquer Asgard! Will a handful of mortal mutants be enough to defeat the Goddess of Death?', 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/5a8f28dd5170a/portrait_incredible.jpg'),
(9, 'Cable (2017) #154', 'GIDEON: LAST OF THE EXTERNALS? Is the enemy of my enemy truly my friend? CABLE and the NEWER MUTANTS are about to find out. Can GIDEON kill the last of the EXTERNALS, becoming one of the most powerful beings in the MARVEL U? What\'s up with BLINK?! Whose side is she really on?', 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/5a7b4c737a28c/portrait_incredible.jpg'),
(10, 'New Mutants by Zeb Wells: The Complete Collection (Trade Paperback)', 'Cannonball, Dani Moonstar, Karma, Sunspot, Magma and Magik have put the band back together — just don\'t call them the New Mutants! They might not live to be old mutants, either, when one of the most powerful threats they ever faced returns: Legion! Speaking of comebacks, the dead just won\'t stay that way as the shocking events of Necrosha hit home — and Doug Ramsey and Warlock return! As the New Mutants struggle to rediscover the strong bond they shared as teenagers, a new enemy arrives to tear them apart! The team\'s past returns to haunt them as they\'re dragged into the hellish dimension of Limbo, but will the secret they uncover there lead to the fall of the New Mutants? Collects New Mutants (2009) #1-11, #15-21 and material from X-Necrosha #1 and Marvel Spotlight: New Mutants.', 'http://i.annihil.us/u/prod/marvel/i/mg/7/00/5a7b6c5475c87/portrait_incredible.jpg'),
(11, 'Color Your Own X-Men: The New Mutants (Trade Paperback)', 'Choose your hues for the New Mutants! They’re the next generation of X-Men, and there’s one thing they need to learn: Life spent fighting for Xavier’s dream sure is colorful! Now it falls to you to teach that lesson, with all the pens, pencils and crayons you can get your hands on! These Children of the Atom are here in black and white, ready for you to put them in their classic black-and-yellows — and maybe even some of their more adventurous costumes! All your favorites are featured in awesome artwork by Marvel greats, waiting for you to unleash their glorious potential. Have a blast with Cannonball and a howling good time with Wolfsbane! Make a Mirage with Dani Moonstar and unleash every color under the Sunspot! Their future is in your hands — so it’s time to work your Magik!', 'http://i.annihil.us/u/prod/marvel/i/mg/c/50/5a7b6c78abe14/portrait_incredible.jpg'),
(12, 'New Mutants: Back to School - The Complete Collection (Trade Paperback)', 'Collects New Mutants (2003) #1-13 and material from X-Men Unlimited (1993) #42-43. Dani Moonstar, Karma and Wolfsbane — the former X-Men-in-training who helped define a generation — are back to pass their wisdom on to the next one! But how will the New Mutants react to Professor X’s up-and-coming students, who think of them as “Old Mutants”? Find out as a new class debuts at the Xavier School — including Prodigy, Wallflower, Wither, Surge, Elixir, Wind Dancer and more! They may be the future of their species — if they can survive threats like the Reavers and the hate group Purity! As the latest squad comes into its own, the originals settle into new roles as mentors — but will Wolfsbane’s desire to regain her powers cause her to cross a line? Plus: Legendary NEW MUTANTS creative team Chris Claremont and Bill Sienkiewicz return for an original class reunion!', 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/5a612c5ac05d7/portrait_incredible.jpg'),
(13, 'X-Men: Legion - Shadow King Rising (Trade Paperback)', 'Collects New Mutants (1983) #26-28, 44; Uncanny X-Men (1981) #253-255, 278-280; X-Factor (1986) #69-70. David Haller is no ordinary mutant. Son of Charles Xavier, founder of the X-Men, David’s incredible mental powers fractured his mind — and now, each of his personalities controls a different ability! And they’re not all friendly, as Xavier and the New Mutants find out the hard way! But as Legion struggles to control the chaos in his head, he attracts the attention of one of Xavier’s oldest and most malevolent foes: Amahl Farouk, the Shadow King, who’s secretly been stalking and manipulating the X-Men and their allies. When the Shadow King sinks his hooks deep into David’s mind, will two teams of X-Men be enough to defeat him — or will David be the key to the villain’s ultimate victory?', 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/5a568a8f41a5d/portrait_incredible.jpg'),
(14, 'Loki: Journey into Mystery by Kieron Gillen (Hardcover)', 'Kieron Gillen\'s complete epic! The god of lies has been reborn, but will young Loki be Asgard\'s savior? For when Earth is gripped by Fear Itself, ancient prophecy says only Thor can stop the monstrous threat of the Serpent - but the plan is doomed to fail without help from Loki. Will the trickster find redemption - or damn himself for eternity? Either way, a Nightmare lies in wait hoping to rule the world - and Loki will have to risk everything on his craziest scheme of all! Plus: a forgotten hero returns, the New Mutants lend a hand, Captain Britain needs help with a godly war, and Hela sets her sights on the Holy Grail! But will all the nine worlds end in Surtur\'s fire? COLLECTING: JOURNEY INTO MYSTERY #622-645, EXILED #1, NEW MUTANTS #42-43, THE MIGHTY THOR #18-21.', 'http://i.annihil.us/u/prod/marvel/i/mg/8/20/597b83f88df78/portrait_incredible.jpg'),
(15, 'New Mutants Epic Collection: Renewal (Trade Paperback)', 'Meet the future of the X-Men! Karma. Wolfsbane. Sunspot. Cannonball. Moonstar. They\'re teenagers, thrown together by the X-gene that makes them different. Follow the adventures of these young mutants from Karma\'s first meeting with Spider-Man and the Fantastic Four to their early days at the Xavier School! The New Mutants\' on-the-job training begins in earnest with battles against Sentinels, the Silver Samurai, Viper and the Hellfire Club; a team-up with Spidey and Cloak and Dagger — and the team gets a taste of life as X-Men in a disturbing encounter with the Brood! Plus: Meet fiery new recruit Magma, and discover how Colossus\'s sister, Illyana, became the demon sorceress known as Magik! Collects Marvel Graphic Novel #4, New Mutants (1983) #1-12, Uncanny X-Men (1981) #167, Marvel Team-Up Annual #6, Magik (1983) #1-4 and material from Marvel Team-Up (1972) #100.', 'http://i.annihil.us/u/prod/marvel/i/mg/8/f0/58b9a31027cbc/portrait_incredible.jpg'),
(16, 'New Mutants (2009) #47', '<ul><li>The Hellions return in &ldquo;Fear The Future&rdquo; part 1!</li><li>The New Mutants thought they&rsquo;d defeated their most unexpected foe, but they will soon learn that while you can change the future, but you can never escape it!</li><li>The shocking story that (yeah, we&rsquo;re saying it) will change the New Mutants as you know them!</li></ul>', 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/5a09d4293a17e/portrait_incredible.jpg'),
(17, 'New Mutants (2009) #44', 'Guest-starring the Defenders! Dr. Strange\'s team protects humanity from the impossible...so what does this uber powerful group want with the New Mutants?', 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/5155d57cc5415/portrait_incredible.jpg'),
(18, 'New Mutants (2009) #43', 'The Asgardians are depowered and the only thing standing between them and certain death are the New Mutants! Will the team find a way to repower the Asgardians or die trying?', 'http://i.annihil.us/u/prod/marvel/i/mg/3/90/5155d56f0d951/portrait_incredible.jpg'),
(19, 'Journey Into Mystery (2011) #638', 'Gods have been made mortal, and mutants are their only hope for survival! And with undead cannibals on the loose, San Francisco is turned inside out by forbidden magic!', 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/5a81f44e5bc75/portrait_incredible.jpg'),
(20, 'New Mutants (2009) #42', 'The story of mutant vs. magic continues! With the Asgardians made into mortals, mutants may be the only chance they have for survival. As forbidden magic rips across San Francisco, the New Mutants stand alone against a pack of undead cannibals!', 'http://i.annihil.us/u/prod/marvel/i/mg/6/80/5155d5639ec2b/portrait_incredible.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(33) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `password`, `nombre`, `email`) VALUES
(2, 'pepe', '3691308f2a4c2f6983f2880d32e29c84', 'manuel', 'zambrana2613@gmail.com'),
(3, 'a', '0cc175b9c0f1b6a831c399e269772661', 'manuel', 'zambrana2613@gmail.com'),
(4, 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'manuel', 'zambrana2613@gmail.com'),
(5, 'antonio', '4a181673429f0b6abbfd452f0f3b5950', 'antonio', 'antonio@antonio.com'),
(6, 'pepe2', '0cc175b9c0f1b6a831c399e269772661', 'manuel', 'zambrana2613@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `FK_PersonOrder` (`idProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
