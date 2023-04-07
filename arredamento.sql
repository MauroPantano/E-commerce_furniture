-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 13, 2020 alle 12:07
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arredamento`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aggiornamento_cliente`
--

CREATE TABLE `aggiornamento_cliente` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aggiornamento_cliente`
--

INSERT INTO `aggiornamento_cliente` (`ID`, `email`) VALUES
(1, 'prova@alice.it'),
(2, 'abc@hotmail.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `compra`
--

CREATE TABLE `compra` (
  `ID` int(11) NOT NULL,
  `Utente` varchar(50) NOT NULL,
  `Mobile` varchar(5) NOT NULL,
  `Conferma` int(11) NOT NULL,
  `Quantita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `compra`
--

INSERT INTO `compra` (`ID`, `Utente`, `Mobile`, `Conferma`, `Quantita`) VALUES
(26, 'maurizio96010@gmail.com', 'A74C7', 1, 0),
(27, 'maurizio96010@gmail.com', 'AK23A', 1, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `elenco_nazioni_sql`
--

CREATE TABLE `elenco_nazioni_sql` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(47) DEFAULT NULL,
  `Prezzo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `elenco_nazioni_sql`
--

INSERT INTO `elenco_nazioni_sql` (`ID`, `Nome`, `Prezzo`) VALUES
(1, 'Afghanistan', 14.74),
(2, 'Albania', 10.38),
(3, 'Algeria', 4.65),
(4, 'Andorra', 6.56),
(5, 'Angola', 12.62),
(6, 'Anguilla', 3.76),
(7, 'Antartide', 9.95),
(8, 'Antigua e Barbuda', 15.29),
(9, 'Arabia Saudita', 7),
(10, 'Argentina', 7.54),
(11, 'Armenia', 7.43),
(12, 'Aruba', 8.14),
(13, 'Australia', 0.34),
(14, 'Austria', 3.01),
(15, 'Azerbaigian', 14.85),
(16, 'Bahamas', 16.1),
(17, 'Bahrein', 8.89),
(18, 'Bangladesh', 10.26),
(19, 'Barbados', 6.02),
(20, 'Belgio', 0.72),
(21, 'Belize', 12.71),
(22, 'Benin', 6.25),
(23, 'Bermuda', 14.35),
(24, 'Bhutan', 7.59),
(25, 'Bielorussia', 10.7),
(26, 'Birmania', 2.59),
(27, 'Bolivia', 8.61),
(28, 'Bosnia ed Erzegovina', 8.19),
(29, 'Botswana', 19.8),
(30, 'Brasile', 2.11),
(31, 'Brunei', 14.95),
(32, 'Bulgaria', 14.23),
(33, 'Burkina Faso', 16.46),
(34, 'Burundi', 19.52),
(35, 'Cambogia', 4.75),
(36, 'Camerun', 1.2),
(37, 'Canada', 2.29),
(38, 'Capo Verde', 0.83),
(39, 'Ciad', 1.52),
(40, 'Cile', 17.34),
(41, 'Cina', 0.77),
(42, 'Cipro', 11.7),
(43, 'Citt', 2.91),
(44, 'Colombia', 19.29),
(45, 'Comore', 1.76),
(46, 'Corea del Nord', 14),
(47, 'Corea del Sud', 6.35),
(48, 'Costa d\'Avorio', 3.79),
(49, 'Costa Rica', 1.07),
(50, 'Croazia', 5.95),
(51, 'Cuba', 7.52),
(52, 'Cura', 1.07),
(53, 'Danimarca', 1.52),
(54, 'Dominica', 0.82),
(55, 'Ecuador', 8.29),
(56, 'Egitto', 4.15),
(57, 'El Salvador', 15.66),
(58, 'Emirati Arabi Uniti', 16.37),
(59, 'Eritrea', 0.86),
(60, 'Estonia', 12.89),
(61, 'Etiopia', 17.72),
(62, 'Figi', 13.51),
(63, 'Filippine', 16.19),
(64, 'Finlandia', 2.4),
(65, 'Francia', 13.65),
(66, 'Gabon', 16.6),
(67, 'Gambia', 10.3),
(68, 'Georgia', 0.54),
(69, 'Georgia del Sud e isole Sandwich meridionali', 9.22),
(70, 'Germania', 1.43),
(71, 'Ghana', 13.46),
(72, 'Giamaica', 1.07),
(73, 'Giappone', 10.2),
(74, 'Gibilterra', 0.57),
(75, 'Gibuti', 13.59),
(76, 'Giordania', 15.01),
(77, 'Grecia', 5.48),
(78, 'Grenada', 11.61),
(79, 'Groenlandia', 8.32),
(80, 'Guadalupa', 11.83),
(81, 'Guam', 16.65),
(82, 'Guatemala', 4.69),
(83, 'Guernsey', 9.36),
(84, 'Guinea', 7.46),
(85, 'Guinea-Bissau', 16.07),
(86, 'Guinea Equatoriale', 11.91),
(87, 'Guyana', 12.38),
(88, 'Guyana francese', 6.39),
(89, 'Haiti', 2.02),
(90, 'Honduras', 8.6),
(91, 'Hong Kong', 15.14),
(92, 'India', 15.74),
(93, 'Indonesia', 19.5),
(94, 'Iran', 11.96),
(95, 'Iraq', 1.71),
(96, 'Irlanda', 6.4),
(97, 'Islanda', 7.17),
(98, 'Isola Bouvet', 9.31),
(99, 'Isola di Man', 3.71),
(100, 'Isola di Natale', 4.76),
(101, 'Isola Norfolk', 19.01),
(102, 'Isole ', 18.34),
(103, 'Isole BES', 8.78),
(104, 'Isole Cayman', 5.95),
(105, 'Isole Cocos (Keeling)', 2.37),
(106, 'Isole Cook', 2.67),
(107, 'F', 18.29),
(108, 'Isole Falkland', 4.99),
(109, 'Isole Heard e McDonald', 12.77),
(110, 'Isole Marianne Settentrionali', 17.06),
(111, 'Isole Marshall', 2.97),
(112, 'Isole minori esterne degli Stati Uniti', 19.06),
(113, 'Isole Pitcairn', 15.95),
(114, 'Isole Salomone', 18.96),
(115, 'Isole Vergini britanniche', 7.27),
(116, 'Isole Vergini americane', 5.03),
(117, 'Israele', 17.87),
(118, 'Italia', 16.33),
(119, 'Jersey', 12.88),
(120, 'Kazakistan', 8.03),
(121, 'Kenya', 15.3),
(122, 'Kirghizistan', 8.09),
(123, 'Kiribati', 4.08),
(124, 'Kuwait', 15.37),
(125, 'Laos', 18.37),
(126, 'Lesotho', 9.05),
(127, 'Lettonia', 16.5),
(128, 'Libano', 0.98),
(129, 'Liberia', 0.03),
(130, 'Libia', 3.46),
(131, 'Liechtenstein', 8.33),
(132, 'Lituania', 15.85),
(133, 'Lussemburgo', 3.31),
(134, 'Macao', 16.81),
(135, 'Macedonia', 5.13),
(136, 'Madagascar', 18.11),
(137, 'Malawi', 16.49),
(138, 'Malesia', 3.43),
(139, 'Maldive', 19.5),
(140, 'Mali', 3.83),
(141, 'Malta', 13.31),
(142, 'Marocco', 2.15),
(143, 'Martinica', 3.12),
(144, 'Mauritania', 14.5),
(145, 'Mauritius', 16.46),
(146, 'Mayotte', 17.01),
(147, 'Messico', 7.45),
(148, 'Micronesia', 6.59),
(149, 'Moldavia', 15.42),
(150, 'Mongolia', 0.59),
(151, 'Montenegro', 14.38),
(152, 'Montserrat', 17.6),
(153, 'Mozambico', 15.18),
(154, 'Namibia', 13.1),
(155, 'Nauru', 15),
(156, 'Nepal', 19.96),
(157, 'Nicaragua', 10.66),
(158, 'Niger', 18.4),
(159, 'Nigeria', 17.38),
(160, 'Niue', 3.12),
(161, 'Norvegia', 10.85),
(162, 'Nuova Caledonia', 15.47),
(163, 'Nuova Zelanda', 2.64),
(164, 'Oman', 9.3),
(165, 'Paesi Bassi', 18.14),
(166, 'Pakistan', 0.1),
(167, 'Palau', 1.78),
(168, 'Palestina', 7.59),
(169, 'Panam', 7.41),
(170, 'Papua Nuova Guinea', 3.1),
(171, 'Paraguay', 14.42),
(172, 'Per', 3.06),
(173, 'Polinesia Francese', 15.69),
(174, 'Polonia', 10.49),
(175, 'Porto Rico', 7.42),
(176, 'Portogallo', 10.63),
(177, 'Monaco', 9.73),
(178, 'Qatar', 4.67),
(179, 'Regno Unito', 15.45),
(180, 'RD del Congo', 8.52),
(181, 'Rep. Ceca', 12.81),
(182, 'Rep. Centrafricana', 18.33),
(183, 'Rep. del Congo', 1.09),
(184, 'Rep. Dominicana', 16.3),
(185, 'Riunione', 7.36),
(186, 'Romania', 14.41),
(187, 'Ruanda', 2.79),
(188, 'Russia', 13.49),
(189, 'Sahara Occidentale', 1.21),
(190, 'Saint Kitts e Nevis', 4.82),
(191, 'Santa Lucia', 4.84),
(192, 'Sant\'Elena, Ascensione e Tristan da Cunha', 7.07),
(193, 'Saint Vincent e Grenadine', 7.53),
(194, 'Saint-Barth', 8.03),
(195, 'Saint-Martin', 17.05),
(196, 'Saint-Pierre e Miquelon', 4.49),
(197, 'Samoa', 14.75),
(198, 'Samoa Americane', 13.1),
(199, 'San Marino', 8.54),
(200, 'S', 6.01),
(201, 'Senegal', 5.21),
(202, 'Serbia', 4.53),
(203, 'Seychelles', 10.42),
(204, 'Sierra Leone', 6.73),
(205, 'Singapore', 8.24),
(206, 'Sint Maarten', 11.48),
(207, 'Siria', 19.9),
(208, 'Slovacchia', 19.31),
(209, 'Slovenia', 10.85),
(210, 'Somalia', 11.77),
(211, 'Spagna', 17.1),
(212, 'Sri Lanka', 8.93),
(213, 'Stati Uniti', 0.28),
(214, 'Sudafrica', 4.38),
(215, 'Sudan', 0.97),
(216, 'Sudan del Sud', 0.3),
(217, 'Suriname', 19.65),
(218, 'Svalbard e Jan Mayen', 7.15),
(219, 'Svezia', 3.73),
(220, 'Svizzera', 14.84),
(221, 'Swaziland', 16.73),
(222, 'Taiwan', 14.85),
(223, 'Tagikistan', 17.23),
(224, 'Tanzania', 1.58),
(225, 'Terre australi e antartiche francesi', 16.61),
(226, 'Territorio britannico dell\'oceano Indiano', 16.5),
(227, 'Thailandia', 19.96),
(228, 'Timor Est', 3.95),
(229, 'Togo', 16.58),
(230, 'Tokelau', 3.23),
(231, 'Tonga', 10.88),
(232, 'Trinidad e Tobago', 15.24),
(233, 'Tunisia', 3.31),
(234, 'Turchia', 18.14),
(235, 'Turkmenistan', 11.96),
(236, 'Turks e Caicos', 18.44),
(237, 'Tuvalu', 6.39),
(238, 'Ucraina', 5.6),
(239, 'Uganda', 17.69),
(240, 'Ungheria', 9.58),
(241, 'Uruguay', 11.28),
(242, 'Uzbekistan', 10.32),
(243, 'Vanuatu', 13.21),
(244, 'Venezuela', 8.36),
(245, 'Vietnam', 10.48),
(246, 'Wallis e Futuna', 3.94),
(247, 'Yemen', 8.82),
(248, 'Zambia', 16.21),
(249, 'Zimbabwe', 0.39);

-- --------------------------------------------------------

--
-- Struttura della tabella `mobile`
--

CREATE TABLE `mobile` (
  `ID` varchar(5) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Stile` varchar(50) NOT NULL,
  `Colore` varchar(50) NOT NULL,
  `Disponibilita` varchar(50) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Prezzo` float NOT NULL,
  `Immagine` varchar(50) NOT NULL,
  `Immagine_reverse` varchar(50) NOT NULL,
  `Quantita` int(11) NOT NULL,
  `Descrizione` text NOT NULL,
  `Venduto` int(11) NOT NULL,
  `Cuore` int(11) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `mobile`
--

INSERT INTO `mobile` (`ID`, `Nome`, `Marca`, `Stile`, `Colore`, `Disponibilita`, `Categoria`, `Prezzo`, `Immagine`, `Immagine_reverse`, `Quantita`, `Descrizione`, `Venduto`, `Cuore`, `Data`) VALUES
('A74C7', 'Comodino vintage', 'Kalenji', 'Classico', 'Camoscio', 'Disponibile', 'Camera da letto', 480, 'comodino.png', 'comodino-reverse.png', 3, 'Questo comodino dispone di due spazi per riporre gli oggetti. Il primo è il cassetto nella parte superiore, e il secondo è una mensola nella parte inferiore.', 26, 7, '2018-05-20'),
('AK23A', 'Divano Chesterfield', 'Chesterfield', 'Minimalista', 'Grigio', 'Disponibile', 'Soggiorno', 89.99, 'divano.png', 'divano-reverse.png', 8, 'Questo comodo divano a 2 posti dal design semplice è un arredo perfetto per ogni soggiorno in stile moderno e scandinavo. Imbottito in resistente tessuto in elegante color grigio scuro che si abbina a varie tonalità di un interno, dai toni audaci ai pastelli. Spessi e comodi cuscini e alti braccioli garantiscono il massimo comfort.', 16, 5, '2020-03-10'),
('AZ09F', 'Poltrona vintage in velluto LYDIA', 'LYDIA', 'Industriale', 'Verde', 'Disponibile', 'Studio', 89.99, 'poltrona2.png', 'poltrona-reverse.png', 15, 'La poltrona LYDIA è perfetta per un arredo vintage così come per un arredo classico chic. Le linee generose offrono una comoda seduta. La struttura della poltrona è in legno di eucalipto.', 1, 4, '2018-12-12'),
('B78NH', 'Letto Brimnes', 'Brimnes', 'Coloniale', 'Nero', 'Disponibile', 'Camera da letto', 247, 'letto.png', 'letto-reverse.png', 8, 'Un letto dal design lineare, in impiallacciatura di legno. Puoi collocarlo contro la parete o anche al centro della stanza. Gli spaziosi contenitori sono facili da estrarre, grazie alle rotelle.', 0, 3, '2020-01-29'),
('BX39E', 'Poltrona RE MAGIS', 'Magis', 'Classico', 'Rosso', 'Disponibile', 'Soggiorno', 805, 'poltronaRe.png', 'poltronaRe-reverse.png', 3, 'Creazione onirica, questa magnifica poltrona XXL di ispirazione ‘Reggenza’ è un vero trono barocco e maestoso che ci porta nell’universo stravagante del geniale Mendini. Realizzata interamente in polietilene, Magis Proust è una vera prodezza tecnologica, vista la sua dimensione e la complessità dei suoi ornamenti. La sua personalità forte e carismatica si esprimono attraverso questa associazione di uno stile ‘Reggenza’ e un materiale ultramoderno.', 1, 2, '2019-09-23'),
('EX78M', 'Armadio 3 ante con specchio', 'Brimnes', 'Classico', 'Marrone', 'Disponibile', 'Camera da letto', 1300, 'armadio2.png', 'armadio2-reverse.png', 6, 'Questo armadio moderno ed elegante offre, grazie alle 3 porte e 2 scaffali, molto spazio per i tuoi vestiti, le tue scarpe o altri oggetti del tuo piacimento. Si adatta a quasi tutti mobili della tua casa. Un vero e proprio eye-catcher per ogni camera da letto.', 0, 0, '2020-02-15'),
('FS98P', 'Poltrona in velluto rosso', 'Trapezium', 'Classico', 'Rosso', 'Disponibile', 'Soggiorno', 499, 'poltrona3.png', 'poltrona-reverse.png', 5, 'La poltrona in tessuto rosso Trapezium è una poltrona dallo stile vintage, con la spalliera che ricorda una conchiglia, semplice ma d\'effetto: collocata in un living, con il giusto spirito e la giusta ironia, diventerà un pezzo di design, un mobile unico per la vostra casa.', 30, 0, '2019-06-10'),
('HD891', 'Scrivania ELY11 5 cassetti quercia', 'ELY11', 'Eclettico', 'Grano', 'Disponibile', 'Cameretta', 125.99, 'scrivania-mini.png', 'scrivania-reverse.png', 11, 'Moderna nel colore, elegante nella forma, la linea Ely si distingue anche grazie alla sua maniglia in metallo che contrasta e regala allo stesso tempo un punto luce al mobile stesso.', 0, 0, '2018-11-22'),
('JG19K', 'Sedia gaming Origin', 'Origin', 'Minimalista', 'Nero', 'Disponibile', 'Cameretta', 89.99, 'sedia-gaming.png', 'sedia-gaming-reverse.png', 8, 'Questa poltrona da ufficio è perfetta per chi lavora alla scrivania per tante ore. Lo schienale reclinabile ed ergonomico aiuta a mantenere una postura comoda e corretta. Grazie al suo aspetto moderno legato ad un’alta funzionalità, questa sedia è un’ottima scelta per il tuo ufficio.', 9, 0, '2020-03-25'),
('LF56C', 'Tavolo antico', 'Neiden', 'Classico', 'Marrone', 'Disponibile', 'Soggiorno', 287.5, 'tavolo.png', 'tavolo-reverse.png', 5, 'Tavolino da salotto dal gusto classico: le gambe curvate sono realizzate in faggio massello, mentre le sponde e il telaio sono in nobilitato.', 17, 0, '2018-07-08'),
('LV56A', 'Divano angolare in tessuto grigio', 'Roset', 'Minimalista', 'Grigio', 'Disponibile', 'Soggiorno', 600, 'divanoRoset.png', 'divanoRoset-reverse.png', 3, 'Questo divano è molto stabile e molto facile da pulire. La sua penisola è stata appositamente studiata per non occupare tanto spazio nei vostri ambienti, ma al contempo fornire un\'ampia seduta. Con questo arredo il comfort è più che garantito, non solo per la qualità della seduta, ma anche per i splendidi cuscini che riceverete nel set e per i comodi poggiabraccia.', 0, 1, '2019-12-27'),
('QJ48L', 'Porta TV Temis', 'Temis', 'Minimalista', 'Grano', 'Disponibile', 'Studio', 70, 'porta-tv2.png', 'porta-tv2-reverse.png', 20, 'Il mobile porta TV Temis è la soluzione ottimale per il soggiorno ! Può contenere tutti i vostri accessori multimediali, ma anche libri e riviste... si adatta ad ogni esigenza ! Perfettamente studiato per accogliere il vostro televisore, può anche essere usato come consolle bassa in camera da letto o nello studio.', 0, 0, '2019-05-09'),
('V84NM', 'Poltrona Roset con poggiapiedi', 'Roset', 'Industriale', 'Grigio', 'Disponibile', 'Soggiorno', 160.5, 'poltrona.png', 'poltrona-reverse.png', 8, 'Elegante poltrona dal design ergonomico e moderno, ideale per l’uso in casa o in ufficio. l rivestimento in tessuto di lino traspirante è resistente all’usura e piacevole al tatto. Imbottita con spugna ad alta densità per una seduta piacevole e comoda.', 21, 0, '2019-08-20');

-- --------------------------------------------------------

--
-- Struttura della tabella `problema`
--

CREATE TABLE `problema` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Soggetto` varchar(100) NOT NULL,
  `Messaggio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `problema`
--

INSERT INTO `problema` (`ID`, `Nome`, `Email`, `Telefono`, `Soggetto`, `Messaggio`) VALUES
(3, 'Franco', 'franco23@gmail.com', '3387689652', 'Prova', 'Ho riscontrato un problema...'),
(4, 'fwefwe', 'fwfewfwef@fwfw.it', 'wfewffw', 'fwewfw', 'wfewfwefwf');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensione`
--

CREATE TABLE `recensione` (
  `Utente` varchar(50) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Mobile` varchar(5) NOT NULL,
  `Commento` text NOT NULL,
  `Valutazione` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `recensione`
--

INSERT INTO `recensione` (`Utente`, `Nome`, `Mobile`, `Commento`, `Valutazione`) VALUES
('maurizio96010@gmail.com', 'Giuseppe', 'AK23A', 'Eccellente!!!', 5),
('maurizio96010@gmail.com', 'Mauro', 'B78NH', 'Ottimo prodotto !!', 5),
('maurizio96010@gmail.com', 'Mauro99', 'FS98P', 'Ottimo prodotto materiale resistente colore conforme a foto', 4),
('salvo@gmail.com', 'Salvo', 'AK23A', 'Ottimo prodotto !!', 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `sconto`
--

CREATE TABLE `sconto` (
  `COD` varchar(12) NOT NULL,
  `Percentuale` int(11) NOT NULL,
  `Scadenza` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `sconto`
--

INSERT INTO `sconto` (`COD`, `Percentuale`, `Scadenza`) VALUES
('AT34UGN9P22K', 40, '2020-12-25'),
('BT14XLN9P95N', 25, '2021-03-07');

-- --------------------------------------------------------

--
-- Struttura della tabella `soddisfa`
--

CREATE TABLE `soddisfa` (
  `Utente` varchar(50) NOT NULL,
  `Mobile` varchar(5) NOT NULL,
  `Cuore` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `soddisfa`
--

INSERT INTO `soddisfa` (`Utente`, `Mobile`, `Cuore`) VALUES
('fede@gmail.com', 'A74C7', 1),
('fede@gmail.com', 'AK23A', 1),
('fede@gmail.com', 'AZ09F', 1),
('fede@gmail.com', 'B78NH', 1),
('fede@gmail.com', 'BX39E', 1),
('franco@alice.it', 'A74C7', 1),
('franco@alice.it', 'AK23A', 1),
('franco@alice.it', 'AZ09F', 1),
('franco@alice.it', 'B78NH', 1),
('maurizio96010@gmail.com', 'A74C7', 1),
('maurizio96010@gmail.com', 'AK23A', 1),
('maurizio96010@gmail.com', 'AZ09F', 1),
('pippo@gmail.com', 'A74C7', 1),
('pippo@gmail.com', 'AK23A', 1),
('pippo@gmail.com', 'AZ09F', 1),
('pippo@gmail.com', 'B78NH', 1),
('pippo@gmail.com', 'BX39E', 1),
('pippo@gmail.com', 'LV56A', 1),
('prova@gmail.com', 'A74C7', 1),
('salvo@gmail.com', 'A74C7', 1),
('salvo@gmail.com', 'AK23A', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `subisce`
--

CREATE TABLE `subisce` (
  `Mobile` varchar(5) NOT NULL,
  `Sconto` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `Email` varchar(50) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Cellulare` varchar(10) NOT NULL,
  `Via` varchar(50) NOT NULL,
  `Numero_civico` varchar(4) NOT NULL,
  `Citta` varchar(50) NOT NULL,
  `Comune` varchar(50) NOT NULL,
  `Data` date NOT NULL,
  `Carta_di_credito` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`Email`, `Nome`, `Cognome`, `Password`, `Cellulare`, `Via`, `Numero_civico`, `Citta`, `Comune`, `Data`, `Carta_di_credito`) VALUES
('fede@gmail.com', 'Federico', '', 'ciao1234', '', '', '', 'Sortino', 'Siracusa', '0000-00-00', ''),
('franco@alice.it', 'franco', '', 'pippo', '', '', '', 'Siracusa', 'Siracusa', '0000-00-00', ''),
('helloworld@hotmail.it', 'ProvaFinale', '', 'prova', '', '', '', 'Siracusa', 'Siracusa', '0000-00-00', ''),
('maurizio96010@gmail.com', 'Maurizio', 'Pantano', 'qwerty', '3884582706', 'Umberto', '11', 'Canicattini Bagni', 'Siracusa', '2005-06-17', 'ABDHFK89KDOL'),
('pippo@gmail.com', 'filippo', '', 'ciao', '', '', '', 'Palazzolo Acreide', 'Siracusa', '0000-00-00', ''),
('prova123@hotmail.it', 'prova123', '', 'provaprova', '', '', '', 'Augusta', 'Siracusa', '0000-00-00', ''),
('prova@gmail.com', 'prova', '', 'abc99', '', '', '', 'Canicattini Bagni', 'Siracusa', '0000-00-00', ''),
('salvo@gmail.com', 'Salvatore', '', '123454321', '', '', '', 'Canicattini Bagni', 'Siracusa', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `utilizza`
--

CREATE TABLE `utilizza` (
  `Utente` varchar(50) NOT NULL,
  `Sconto` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aggiornamento_cliente`
--
ALTER TABLE `aggiornamento_cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Utente` (`Utente`),
  ADD KEY `Mobile` (`Mobile`);

--
-- Indici per le tabelle `elenco_nazioni_sql`
--
ALTER TABLE `elenco_nazioni_sql`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `problema`
--
ALTER TABLE `problema`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `recensione`
--
ALTER TABLE `recensione`
  ADD PRIMARY KEY (`Utente`,`Mobile`),
  ADD KEY `Mobile` (`Mobile`);

--
-- Indici per le tabelle `sconto`
--
ALTER TABLE `sconto`
  ADD PRIMARY KEY (`COD`);

--
-- Indici per le tabelle `soddisfa`
--
ALTER TABLE `soddisfa`
  ADD PRIMARY KEY (`Utente`,`Mobile`),
  ADD KEY `Mobile` (`Mobile`);

--
-- Indici per le tabelle `subisce`
--
ALTER TABLE `subisce`
  ADD PRIMARY KEY (`Mobile`,`Sconto`),
  ADD KEY `Sconto` (`Sconto`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Email`);

--
-- Indici per le tabelle `utilizza`
--
ALTER TABLE `utilizza`
  ADD KEY `Utente` (`Utente`),
  ADD KEY `Sconto` (`Sconto`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `aggiornamento_cliente`
--
ALTER TABLE `aggiornamento_cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `compra`
--
ALTER TABLE `compra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT per la tabella `problema`
--
ALTER TABLE `problema`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`Utente`) REFERENCES `utente` (`Email`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`Mobile`) REFERENCES `mobile` (`ID`);

--
-- Limiti per la tabella `recensione`
--
ALTER TABLE `recensione`
  ADD CONSTRAINT `recensione_ibfk_1` FOREIGN KEY (`Utente`) REFERENCES `utente` (`Email`),
  ADD CONSTRAINT `recensione_ibfk_2` FOREIGN KEY (`Mobile`) REFERENCES `mobile` (`ID`);

--
-- Limiti per la tabella `soddisfa`
--
ALTER TABLE `soddisfa`
  ADD CONSTRAINT `soddisfa_ibfk_1` FOREIGN KEY (`Utente`) REFERENCES `utente` (`Email`),
  ADD CONSTRAINT `soddisfa_ibfk_2` FOREIGN KEY (`Mobile`) REFERENCES `mobile` (`ID`);

--
-- Limiti per la tabella `subisce`
--
ALTER TABLE `subisce`
  ADD CONSTRAINT `subisce_ibfk_1` FOREIGN KEY (`Mobile`) REFERENCES `mobile` (`ID`),
  ADD CONSTRAINT `subisce_ibfk_2` FOREIGN KEY (`Sconto`) REFERENCES `sconto` (`COD`);

--
-- Limiti per la tabella `utilizza`
--
ALTER TABLE `utilizza`
  ADD CONSTRAINT `utilizza_ibfk_1` FOREIGN KEY (`Utente`) REFERENCES `utente` (`Email`),
  ADD CONSTRAINT `utilizza_ibfk_2` FOREIGN KEY (`Sconto`) REFERENCES `sconto` (`COD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
