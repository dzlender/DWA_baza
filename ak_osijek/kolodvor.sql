-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 05:00 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kolodvor`
--

-- --------------------------------------------------------

--
-- Table structure for table `cijene_linija`
--

CREATE TABLE IF NOT EXISTS `cijene_linija` (
  `idLinije` int(11) DEFAULT NULL,
  `redovna` int(11) DEFAULT NULL,
  `povratna` int(11) DEFAULT NULL,
  `djaci_studenti` int(11) DEFAULT NULL,
  `umirovljenici` int(11) DEFAULT NULL,
  `branitelji` int(11) DEFAULT NULL,
  `nezaposleni` int(11) DEFAULT NULL,
  `novinari` int(11) DEFAULT NULL,
  `djeca_5_do_10` int(11) DEFAULT NULL,
  `djeca_do_4` int(11) DEFAULT NULL,
  KEY `idLinije` (`idLinije`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `cijene_linija`
--

INSERT INTO `cijene_linija` (`idLinije`, `redovna`, `povratna`, `djaci_studenti`, `umirovljenici`, `branitelji`, `nezaposleni`, `novinari`, `djeca_5_do_10`, `djeca_do_4`) VALUES
(1, 143, 257, 100, 100, 107, 114, 114, 72, 29),
(2, 144, 259, 101, 101, 108, 115, 115, 72, 29),
(3, 140, 252, 98, 98, 105, 112, 112, 70, 28),
(4, 144, 259, 101, 101, 108, 115, 115, 72, 29),
(5, 131, 236, 92, 92, 98, 105, 105, 66, 26),
(6, 143, 257, 100, 100, 107, 114, 114, 72, 29),
(7, 144, 259, 101, 101, 108, 115, 115, 72, 29),
(8, 131, 236, 92, 92, 98, 105, 105, 66, 26),
(9, 144, 259, 101, 101, 108, 115, 115, 72, 29),
(10, 210, 378, 147, 147, 158, 168, 168, 105, 42),
(11, 210, 378, 147, 147, 158, 168, 168, 105, 42),
(12, 200, 360, 140, 140, 150, 1601, 160, 100, 40),
(13, 176, 317, 123, 123, 132, 141, 141, 88, 35),
(14, 176, 317, 123, 123, 132, 141, 141, 88, 35);

-- --------------------------------------------------------

--
-- Table structure for table `jezik`
--

CREATE TABLE IF NOT EXISTS `jezik` (
  `naziv` varchar(30) COLLATE utf8_croatian_ci NOT NULL DEFAULT '',
  `hrv` varchar(400) COLLATE utf8_croatian_ci DEFAULT NULL,
  `eng` varchar(400) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`naziv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `jezik`
--

INSERT INTO `jezik` (`naziv`, `hrv`, `eng`) VALUES
('adresa', 'Adresa:', 'Address:'),
('adresaVrijednost', 'Bartola Kašića 70, 31000 Osijek', 'Bartola Kašića 70, 31000 Osijek'),
('branitelji', 'branitelji', 'war veterans'),
('cijene', 'cijene', 'prices'),
('datum', 'Datum: &nbsp;', 'Date: &nbsp;'),
('djaciStudenti', 'đaci i studenti', 'pupils, students, undergraduates'),
('djeca5_10', 'djeca od 5 do 10 god', 'children 5 to 10 years'),
('djecaDo4', 'djeca do 4 god', 'children 4 or younger'),
('dobrodošli', 'Dobro došli na službene stranice Autobusnog kolodvora Osijek', 'Welcome to the official pages of the Osijek Bus Terminal'),
('dolazak', '&nbsp; - Dolazak', '&nbsp; - Arrival'),
('dolazak1', 'Dolazak', 'Arrival'),
('ime', 'Ime: ', 'Name: '),
('karte', 'Karte', 'Tickets'),
('kontaktiUsluge', 'Kontakti - Usluge', 'Contacts - Services'),
('korisničkoIme', 'Korisničko ime', 'Username'),
('kupi', 'Kupi', 'Buy'),
('lozinka', 'Lozinka', 'Password'),
('mail', 'E-mail: ', 'E-mail: '),
('naslov', 'Autobusni kolodvor Osijek', 'Osijek Bus Terminal'),
('naslovna', 'Naslovna', 'Home'),
('netočniPodaci', 'Netočno korisničko ime ili lozinka.', 'Incorrect username or password.'),
('nezaposleni', 'nezaposleni', 'unemployed'),
('novinari', 'novinari', 'press'),
('novosti', 'Novosti', 'News'),
('oKolodvoru', 'O kolodvoru', 'Bus Terminal Info'),
('oKolodvoru1', 'Novoizgrađeni autobusni kolodvor u Osijeku svečano je otvoren 03.06. 2011. godine, dok je sa radom krenuo 06.06. 2011. godine.\r\nSmješten je u ulici Bartola Kašića br. 70 u neposrednoj blizini starog autobusnog kolodvora i drugih oblika prijevoza (gradski prijevoz, taxi služba i željeznički kolodvor).', 'The newly built bus terminal in Osijek was formally opened on 3rd June 2011, but it was not in function till 6th June 2011. It is situated on Bartol Kašić Street 70, in the vicinity of the old bus station and other means of transport (urban transport, taxi service and the railway station).'),
('oKolodvoru2', 'Autobusni kolodvor Osijek opremljen je A kategorijom po propisanim pravilnicima te ima 16 odlazno-dolaznih perona koji omogućavaju nesmetani tok putnika i autobusa za sve oblike linijskog i povremenog prijevoza, kao i drugih usluga koje korisnici koriste na samom autobusnom kolodvoru.', 'Osijek Bus Terminal is equipped with category A of the required regulations and has 16 departure-arrival platforms which provide a continuous flow of passengers and buses for all modes of line and intermitted transport, as well as other services needed by passengers at the terminal.'),
('polasciDolasci', 'Polasci - Dolasci', 'Departures - Arrivals'),
('polazak', 'Polazak - &nbsp;', 'Departure - &nbsp;'),
('polazak1', 'Polazak', 'Departure'),
('poruka1', 'Nakon unosa podataka i provjere njihove valjanosti, preostaje Vam još samo osobno odobriti sustav u Vašoj banci te na taj način autorizirati Autobusni kolodvor Osijek za novčane transakcije pri online kupovini karata.', 'After entering the data and after checking it''s authenticity, you still need to authorize Osijek Bus Terminal for online money transactions at your bank.'),
('poruka2', 'Hvala na povjerenju!\r\n<br>Želimo Vam ugodnu vožnju :)', 'Thank you for using our service!<br>We wish you a safe and pleasant ride :)'),
('poslano', 'Podaci su proslijeđeni na provjeru. Dobit ćete odgovor na mail u roku 24 sata.', 'Data being authenticated. The results will be sent to your e-mail address in the next 24 hours.'),
('pošalji', 'Pošalji', 'Send'),
('povratnaKarta', 'povratna', 'return ticket'),
('prazniPodaci', 'Morate unijeti korisničko ime i lozinku.', 'Enter your username and password'),
('prezime', 'Prezime: ', 'Surname: '),
('prijevoznik', 'Prijevoznik', 'Carrier'),
('račun', 'Broj kartice/računa: ', 'Account number: '),
('radnoVrijeme', 'Radno vrijeme:', 'Business hours:'),
('radnoVrijemeVrijednost', 'pon - ned: &nbsp; 00:00 – 24:00', 'Mon - Sun: &nbsp; 00:00 – 24:00'),
('redovnaKarta', 'redovna', 'regular'),
('registracija1', 'Kako bi koristili sustav potrebno je biti registriran na stranice Autobusnog kolodvora Osijek.', 'If you would like to use our online ticket purchasing system, you have to register as a member of Bus Terminal Osijek''s web pages.'),
('registracija2', 'Link za registraciju', 'Registration link'),
('registracija3', 'Svoju putnu kartu za linije koje polaze s Autobusnog kolodvora možete kupiti na našoj web stranici korištenjem sustava na poveznici „Polasci Dolasci“. Sustav prikazuje opciju kupnje putem interneta samo za vozne redove autobusa čije vrijeme polaska nije manje od 3 sata prije kupnje.', 'For buses departing from Osijek Bus Terminal, tickets can be bought on our web site by clicking “Departures-Arrival” link. Online purchase is not available for departures that leave within next 3 hours, so in those cases there will be no “Buy” link displayed.'),
('registracija4', 'Klikom na link „cijene“ pored autobusne linije otvara se prozor s ponudom različitih cijena za pojedine kategorije. Klikom na link „Kupi“ pored pojedine kategorije, odabirete kartu za navedene kategoriju i odabranu liniju. ', 'By clicking the "prices" link next to bus line, a window with different price categories opens up. By clicking the "Buy" link next to the wanted category, you choose to buy the ticket for the selected category.'),
('registracija5', 'Ako u traženom autobusu ima slobodnih mjesta te je na registriranoj kartici iznos cijene karte, taj iznos se skida, a na upisanu adresu elektroničke pošte stiže potvrda o plaćanju te kupon - bar kod.  Putna karta preuzima se na blagajnama Autobusnog kolodvora od 0 do 24 sata, najkasnije 30 minuta prije polaska autobusa uz predočenje kupona s bar kodom.', 'If there are still seats available for the bus in question, and there is enough to cover the price on your registered credit card, the price amount is deduced from your account and a message about the purchase with a unic ID is sent to your e-mail address. The ticket must be claimed at the terminal''s register, at least half an hour before the bus departures, by using the recieved unic ID.  '),
('registracija6', 'Jedan registrirani korisnik, može imati rezervaciju na maksimalno 4 karte.', 'A registered user can hold a reservation for a maximum of 4 tickets.'),
('registracija7', 'Sve informacije i pomoć pri kupnji karte putem Interneta mogu se dobiti pozivom na broj telefona 01/6686-390 i/ili slanjem upita na akosijek@podrska.hr, u vremenu od 6 do 22 sata.', 'For any information or help needed to buy a ticket, you can call the phone number 01/6686-390 or send an e-mail to akosijek@podrska.hr, between 6am and 10pm.'),
('traži', 'Traži', 'Search'),
('ulaz', 'Ulaz', 'Log in'),
('ulazGost', 'Uđi kao gost', 'Enter as guest'),
('umirovljenici', 'umirovljenici', 'pensioners'),
('vrijemeDolaska', 'Vrijeme dolaska', 'Arrival time'),
('vrijemePolaska', 'Vrijeme polaska', 'Departure time');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `korisnik` varchar(100) COLLATE utf8_croatian_ci NOT NULL DEFAULT '',
  `lozinka` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`korisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnik`, `lozinka`) VALUES
('aanic', '827ccb0eea8a706c4c34a16891f84e7b'),
('jsimic', '01cfcd4f6b8770febfb40cb906715822');

-- --------------------------------------------------------

--
-- Table structure for table `kupljeno`
--

CREATE TABLE IF NOT EXISTS `kupljeno` (
  `korisnik` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `linija` int(11) DEFAULT NULL,
  `kategorija` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vrijeme` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linije`
--

CREATE TABLE IF NOT EXISTS `linije` (
  `id` int(11) NOT NULL DEFAULT '0',
  `polazak` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `dolazak` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `prijevoznik` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `linije`
--

INSERT INTO `linije` (`id`, `polazak`, `dolazak`, `prijevoznik`) VALUES
(1, 'Osijek', 'Zagreb', 'Panturist'),
(2, 'Osijek', 'Zagreb', 'Čazmatrans Nova'),
(3, 'Osijek', 'Zagreb', 'Panoramabus'),
(4, 'Osijek', 'Zagreb', 'Čazmatrans Vukovar'),
(5, 'Osijek', 'Zagreb', 'Autotrans'),
(6, 'Zagreb', 'Osijek', 'Panturist'),
(7, 'Zagreb', 'Osijek', 'Čazmatrans Nova'),
(8, 'Zagreb', 'Osijek', 'Autotrans'),
(9, 'Zagreb', 'Osijek', 'Čazmatrans Vukovar'),
(10, 'Osijek', 'Zadar', 'Imotski - Panturist'),
(11, 'Zadar', 'Osijek', 'Imotski - Panturist'),
(12, 'Zadar', 'Osijek', 'Čazmatrans Nova'),
(13, 'Osijek', 'Beograd', 'Lasta - Šidexpres'),
(14, 'Beograd', 'Osijek', 'Lasta - Šidexpres');

-- --------------------------------------------------------

--
-- Table structure for table `provjera_korisnika`
--

CREATE TABLE IF NOT EXISTS `provjera_korisnika` (
  `ime` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `prezime` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `racun` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vremena_linija`
--

CREATE TABLE IF NOT EXISTS `vremena_linija` (
  `idLinije` int(11) DEFAULT NULL,
  `vrijemePolaska` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vrijemeDolaska` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL,
  `zadnjiDatum` date DEFAULT NULL,
  KEY `idLinije` (`idLinije`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vremena_linija`
--

INSERT INTO `vremena_linija` (`idLinije`, `vrijemePolaska`, `vrijemeDolaska`, `zadnjiDatum`) VALUES
(1, '6:15', '10:30', '2016-09-30'),
(1, '10:00', '14:00', '2016-09-30'),
(1, '14:00', '18:00', '2016-09-30'),
(2, '08:00', '12:20', '2016-09-30'),
(2, '16:00', '20:00', '2016-09-30'),
(3, '09:35', '14:55', '2016-09-30'),
(2, '12:00', '16:20', '2016-09-30'),
(4, '17:30', '22:00', '2016-09-30'),
(5, '21:00', '1:00', '2016-09-30'),
(6, '17:30', '22:00', '2016-09-30'),
(7, '17:30', '22:00', '2016-09-30'),
(8, '17:30', '22:00', '2016-09-30'),
(9, '17:30', '22:00', '2016-09-30'),
(10, '17:30', '22:00', '2016-09-30'),
(11, '17:30', '22:00', '2016-09-30'),
(12, '17:30', '22:00', '2016-09-30'),
(13, '17:30', '22:00', '2016-09-30'),
(14, '17:30', '22:00', '2016-09-30');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cijene_linija`
--
ALTER TABLE `cijene_linija`
  ADD CONSTRAINT `cijene_linija_ibfk_1` FOREIGN KEY (`idLinije`) REFERENCES `linije` (`id`);

--
-- Constraints for table `vremena_linija`
--
ALTER TABLE `vremena_linija`
  ADD CONSTRAINT `vremena_linija_ibfk_1` FOREIGN KEY (`idLinije`) REFERENCES `linije` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
