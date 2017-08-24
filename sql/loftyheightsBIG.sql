-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2017 at 11:14 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ezshocom_loftyheightsFINAL`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE IF NOT EXISTS `apartments` (
  `IDapt` int(6) unsigned NOT NULL,
  `apt` varchar(7) DEFAULT NULL,
  `bdrms` int(1) DEFAULT NULL,
  `baths` float DEFAULT NULL,
  `rent` int(5) DEFAULT NULL,
  `sqft` int(4) DEFAULT NULL,
  `floor` int(2) DEFAULT NULL,
  `isAvail` tinyint(1) DEFAULT NULL,
  `aptDesc` varchar(1500) DEFAULT NULL,
  `bldgID` int(2) DEFAULT NULL,
  `aptTitle` varchar(500) DEFAULT NULL,
  `aptPic1` varchar(100) NOT NULL,
  `aptPic2` varchar(100) NOT NULL,
  `aptPic3` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`IDapt`, `apt`, `bdrms`, `baths`, `rent`, `sqft`, `floor`, `isAvail`, `aptDesc`, `bldgID`, `aptTitle`, `aptPic1`, `aptPic2`, `aptPic3`) VALUES
(1, '18-J', 0, 1, 4345, 1234, 18, 1, 'This is a great find--a cozy yet spacious newly renovated apt with high ceilings, latest appliances, granite countertops, hardwood floors, fantastic floor to ceiling windows in the great room with views of the nearby park. Contemporary open plan design.', 6, 'Newly renovated studio with great view', 'MistyHillsApt1.jpg', 'MistyHillsApt2.jpg', 'ClaringtonCornersApt3.jpg'),
(2, '16-H', 1, 1, 3395, 999, 16, 1, 'This is a great find--large, newly renovated 1-bdrm, with high ceilings, latest appliances, granite countertops, hardwood floors, fantastic floor to ceiling windows in the great room with views of the nearby park. Contemporary open plan design.', 6, 'Huge one-bedroom with the floor space of a two-bedroom', 'MistyHillsApt1.jpg', 'MistyHillsApt2.jpg', 'RiveGaucheApt1.jpg'),
(3, '12A', 0, 1, 2895, 460, 12, 1, 'Don''t miss out on this very affordable and cozy studio in an elevator building. Features efficiency kitchen and sleeping loft  with 10 foot ceilings to maximize living space. Southern exposure for hours of cheery sunlight each day. Access to rooftop shared space', 6, 'Economical studio in elevator building--a real gem!', 'MistyHillsApt1.jpg', 'MistyHillsApt2.jpg', 'ClaringtonCornersApt3.jpg\n'),
(6, '6H', 2, 2.5, 5295, 1150, 6, 1, 'Clarington Corners, a stately pre-war building in the heart of midtown, is home to some of Manhattan''s most beautifully appointed luxury apartments. The classic pre-war residences of Clarington Corners provide tenants with 9'' high ceilings, restored plaster moldings and beams, marble baths, entry foyers and many closets including huge walk-ins. Wausau thermo-pane windows for superior sound insulation. Many homes also offer separate service entrances, wood burning fireplaces with marble hearths a', 2, 'Clarington Corners, a stately pre-war building in the heart of midtown, is home to some of Manhattan''s most beautifully appointed luxury apartments. The classic pre-war residences of Clarington Corners provide tenants with 9'' high ceilings, restored ', 'ClaringtonCornersApt1.jpg', 'ClaringtonCornersApt2.jpg', 'ClaringtonCornersApt3.jpg'),
(7, '4B', 1, 1, 2995, 888, 4, 1, 'One bedroom one bath luxury loft with private balconyHaverford Place is a I7-story luxury apartment building located along 3rd Avenue bordering the charming neighborhood of Gramercy. \n', 3, 'One bedroom one bath luxury loft with private balcony', 'HaverfordPlaceApt1.jpg', 'HaverfordPlaceApt2.jpg', 'ClaringtonCornersApt3.jpg'),
(8, '11E', 0, 1, 2250, 760, 11, 1, 'Spacious Studio Loft with newly renovated kitchen and bath.', 3, 'Spacious Studio with newly renovated kitchen and bath. Airy, well-lit loft. Haverford Place is a I7-story luxury apartment building located along 3rd Avenue bordering the charming neighborhood of Gramercy. The building offers a wide selection of spacious studio, one and convertible two bedroom layouts.', 'HaverfordPlaceApt1.jpg', 'HaverfordPlaceApt2.jpg', 'RiveGaucheApt3.jpg'),
(9, '10-J', 1, 1, 2995, 777, 10, 1, 'One bedroom one bath luxury loft with new kitchen and bath. Located in the heart of midtown Manhattan in famed, tree-lined Misty Hills, Mandrake Manor at 333 East 33rd Street, is a 24-story luxury rental apartment house offering spacious studio, one-bedroom and convertible two-bedroom apartments. Many of these dramatic homes offer spectacular East River and skyline views while several upper floor residences also feature real wood-burning fireplaces. Kitchens feature wood cabinetry with granite c', 7, 'One bedroom one bath luxury loft with new kitchen and bath', 'ClaringtonCornersApt2.jpg\n', 'ClaringtonCornersApt2.jpg\n', 'ChelseaTerracesApt2.jpg'),
(10, '3-G', 2, 1.5, 4567, 876, 3, 1, 'Village Greens is a landmark prewar commercial building that has been converted into 31 luxury apartments. The building''s distinctive facade, unique apartments and an ideal Greenwich Village location have made it one of the neighborhood''s most desirable rental residences. The building offers oversized loft-style studio, one and two bedroom apartments. Some of the residences are duplexes, including duplex penthouse apartments with huge terraces. All apartments enjoy original 13'' high ceilings; ma', 12, 'Two bedroom gem, don''t let it get away!', 'VillageGreensApt1.jpg', 'VillageGreensApt2.jpg', 'VillageGreensApt3.jpg'),
(12, 'PHD', 2, 1.5, 5995, 1111, 0, 1, 'Village Greens is a landmark prewar commercial building that has been converted into 31 luxury apartments. The building''s distinctive facade, unique apartments and an ideal Greenwich Village location have made it one of the neighborhood''s most desirable rental residences. The building offers oversized loft-style studio, one and two bedroom apartments. Some of the residences are duplexes, including duplex penthouse apartments with huge terraces. All apartments enjoy original 13'' high ceilings; ma', 12, '2-Bedroom 1.5 Bath Luxury Apt', 'VillageGreensApt1.jpg', 'VillageGreensApt2.jpg', 'VillageGreensApt3.jpg\n'),
(34, '14C', 3, 2.5, 8575, 1270, 14, 1, 'Huge and luxurious, do not miss out on this newly renovated huge Huge and luxurious newly renovated three bedrooom two and a half bath jewel of an a living space\n bath with large, modern eat-in kitchen and balcony; master suite with jacuzzi and walk-in closet', 13, 'Huge and luxurious newly renovated three bedrooom two and a half bath jewel of an a living space\n', 'WestbrookManorApt1.jpg', 'WestbrookManorApt2.jpg', 'WestbrookManorApt3.jpg'),
(13, 'N14-A', 2, 2, 4195, 1040, 14, 1, 'Riverview is one of Manhattan''s signature luxury rental residences. The building''s unique U shaped design maximizes views from its twin tower pinnacles and creates a distinctive presence on the East River skyline. Occupying the entire block from 34th to 35th Streets, 1st Avenue to the FDR Drive at the East River, Riverview apartments offer condominium-quality features such as marble baths, greenhouse windows, eat-in kitchens with solid cherry wood cabinetry, wood-burning fireplaces and both balc', 8, 'Riverview is one of Manhattan signature luxury rental residences. The building\n unique U shaped design maximizes views from its twin tower pinnacles and creates a distinctive presence on the East River skyline. Occupying the entire block from 34th', 'RiverviewApt1.jpg', 'RiverviewApt2.jpg', 'ClaringtonCornersApt2.jpg'),
(15, 'N7-H', 1, 1, 2695, 750, 7, 1, 'Riverview is one of Manhattan''s signature luxury rental residences. The building''s unique U shaped design maximizes views from its twin tower pinnacles and creates a distinctive presence on the East River skyline. Occupying the entire block from 34th to 35th Streets, 1st Avenue to the FDR Drive at the East River, Riverview apartments offer condominium-quality features such as marble baths, greenhouse windows, eat-in kitchens with solid cherry wood cabinetry, wood-burning fireplaces and both balc', 8, 'Riverview is one of Manhattan''s signature luxury rental residences. The building''s unique U shaped design maximizes views from its twin tower pinnacles and creates a distinctive presence on the East River skyline. Occupying the entire block from 34th', 'RiverviewApt1.jpg', 'RiverviewApt2.jpg', 'ClaringtonCornersApt2.jpg'),
(16, 'S15-C', 2, 1.5, 4444, 888, 15, 1, 'Riverview is one of Manhattan''s signature luxury rental residences. The building''s unique U shaped design maximizes views from its twin tower pinnacles and creates a distinctive presence on the East River skyline. Occupying the entire block from 34th to 35th Streets, 1st Avenue to the FDR Drive at the East River, Riverview apartments offer condominium-quality features such as marble baths, greenhouse windows, eat-in kitchens with solid cherry wood cabinetry, wood-burning fireplaces and both balc', 8, 'Riverview is one of Manhattan''s signature luxury rental residences. The building''s unique U shaped design maximizes views from its twin tower pinnacles and creates a distinctive presence on the East River skyline. Occupying the entire block from 34th', 'RiverviewApt1.jpg', 'RiverviewApt2.jpg', 'ClaringtonCornersApt2.jpg'),
(17, '3-J', 0, 1, 2350, 820, 3, 1, 'Soho Lofts, located on East Houston and Elizabeth Streets, is a 12-story, luxury rental property set in the heart of Manhattan''s most energetic and vital neighborhood. Offering a variety of unique studio, one and two bedroom layouts, Soho Lofts''s superior apartment amenities include 9', 10, 'Soho Lofts, located on East Houston and Elizabeth Streets, is a 12-story, luxury rental property set in the heart of Manhattan''s most energetic and vital neighborhood. Offering a variety of unique studio, one and two bedroom layouts, Soho Lofts''s sup', 'SohoLoftsApt1.jpg', 'SohoLoftsApt2.jpg', 'ChelseaTerracesApt1.jpg'),
(18, 'PHJ', 2, 2, 5995, 1111, 0, 1, 'Soho Lofts, located on East Houston and Elizabeth Streets, is a 12-story, luxury rental property set in the heart of Manhattan''s most energetic and vital neighborhood. Offering a variety of unique studio, one and two bedroom layouts, Soho Lofts''s superior apartment amenities include 9', 10, 'Soho Lofts, located on East Houston and Elizabeth Streets, is a 12-story, luxury rental property set in the heart of Manhattan''s most energetic and vital neighborhood. Offering a variety of unique studio, one and two bedroom layouts, Soho Lofts''s sup', 'SohoLoftsApt1.jpg', 'SohoLoftsApt2.jpg', 'ChelseaTerracesApt1.jpg'),
(19, '3-F', 1, 1, 2225, 740, 3, 1, 'Located between Avenues B and C at Houston Street in the East Village, BC670 offers studio and one bedroom apartments which feature 9'' ceilings, unobstructed views of the Manhattan skyline and open kitchens with birch shaker cabinets and built-in dining counters. Top floor residences have wood-burning fireplaces and skylights. BC670 was one of the first apartment buildings in Manhattan to offer high speed Internet access via coaxial cable modems, affording faster than T-1 access at a substantial', 13, 'Located between Avenues B and C at Houston Street in the East Village, BC670 offers studio and one bedroom apartments which feature 9'' ceilings, unobstructed views of the Manhattan skyline and open kitchens with birch shaker cabinets and built-in din', 'WestbrookManorApt1.jpg', 'WestbrookManorApt2.jpg', 'WestbrookManorApt3.jpg'),
(20, '12-B', 1, 1, 2750, 777, 12, 0, 'Opened in the spring of 2004, Sierra Nevada East is located in TriBeCa, which is one of Downtown New York''s most sought-after residential neighborhoods. Located at Broadway between Worth Street and Catherine Lane, Sierra Nevada East offers a variety of one, two and three bedroom layouts. Sierra Nevada East residences offer 9'' ceilings and contemporary kitchens featuring large granite dining counters with cherry finish birch cabinetry. Many apartments enjoy spectacular views of the historic Clock', 9, 'Opened in the spring of 2004, Sierra Nevada East is located in TriBeCa, which is one of Downtown New York''s most sought-after residential neighborhoods. Located at Broadway between Worth Street and Catherine Lane, Sierra Nevada East offers a variety ', 'SierraNevadaEastApt1.jpg', 'RiveGaucheApt2.jpg\n', 'ChelseaTerracesApt1.jpg'),
(21, 'PHB', 3, 2.5, 8995, 1234, 0, 1, 'Opened in the spring of 2004, Sierra Nevada East is located in TriBeCa, which is one of Downtown New York''s most sought-after residential neighborhoods. Located at Broadway between Worth Street and Catherine Lane, Sierra Nevada East offers a variety of one, two and three bedroom layouts. Sierra Nevada East residences offer 9'' ceilings and contemporary kitchens featuring large granite dining counters with cherry finish birch cabinetry. Many apartments enjoy spectacular views of the historic Clock', 9, 'Opened in the spring of 2004, Sierra Nevada East is located in TriBeCa, which is one of Downtown New York''s most sought-after residential neighborhoods. Located at Broadway between Worth Street and Catherine Lane, Sierra Nevada East offers a variety ', 'SierraNevadaEastApt1.jpg', 'RiveGaucheApt2.jpg\n', 'ChelseaTerracesApt1.jpg'),
(22, '9-C', 1, 1, 2395, 777, 9, 1, 'One bedroom one bath luxury loft with private balcony. Walk in closet in bedroom. Hardwood floors throughout. Skylight (this is the top floor of the building). Original architectural detailing but with modern amenities.. Private balcony and rooftop access--you have it all!', 1, 'One bedroom one bath luxury loft with private balcony', 'ChelseaTerracesApt1.jpg', 'ChelseaTerracesApt2.jpg', 'ChelseaTerracesApt3.jpg'),
(23, '11-A', 2, 2, 3895, 1100, 11, 1, 'Chelsea Piers, Chelsea Market, Chelsea Antiques, and now, Chelsea Terraces. Enjoy the City''s best lifestyle choices from cutting- edge galleries, antique shops, restaurants, boutiques, gourmet food stores, to flea markets in close proximity to the highly anticipated Chelsea High Line. Here you can experience it all with Herald Square just to the East, the New Times Square to the North and the sprawling Hudson River to the West. Herald Square presents outstanding shopping choices from Macy''s to M', 1, 'Chelsea Piers, Chelsea Market, Chelsea Antiques.and now, Chelsea Terraces. Enjoy the City''s best lifestyle choices from cutting- edge galleries, antique shops, restaurants, boutiques, gourmet food stores, to flea markets in close proximity to the hig', 'ChelseaTerracesApt1.jpg\n', 'ChelseaTerracesApt2.jpg', 'ChelseaTerracesApt3.jpg'),
(24, '107/#8', 1, 1, 2395, 999, 4, 1, 'Orange Mews apartments are located between Spring and Prince Streets in the heart of SoHo, one of New York''s most vibrant neighborhoods. The Mews is comprised of ten individual four and five story buildings on a tree-lined street, modernized to provide classic residential living environments in studio, one and two bedroom layouts. A total of 155 residences in Orange Mews attract Manhattan''s young artists and professionals. The complex has an interior courtyard leading to three of the buildings, ', 11, 'Orange Mews apartments are located between Spring and Prince Streets in the heart of SoHo, one of New York''s most vibrant neighborhoods. The Mews is comprised of ten individual four and five story buildings on a tree-lined street, modernized to provi', 'OrangeMewsApt1.jpg', 'OrangeMewsApt2.jpg', 'HaverfordPlace1.jpg'),
(25, '113/AR', 0, 1, 1550, 555, 4, 1, '2-Bedroom 1.5 Bath Luxury Apt. Orange Mews apartments are located between Spring and Prince Streets in the heart of SoHo, one of New York''s most vibrant neighborhoods. The Mews is comprised of ten individual four and five story buildings on a tree-lined street, modernized to provide classic residential living environments in studio, one and two bedroom layouts. A total of 155 residences in Orange Mews attract Manhattan''s young artists and professionals. The complex has an interior courtyard leading to three of the buildings, ', 11, 'Fantastic Studio Loft Apt', 'OrangeMewsApt1.jpg', 'OrangeMewsApt2.jpg', 'HaverfordPlace1.jpg'),
(26, '219/3-D', 1, 1, 2350, 777, 3, 1, 'One bedroom one bath with full amenities', 4, 'One bedroom one bath with full amenities including marble bathroom tiles, stainless steel appliances and walk in closet', 'RiveGaucheApt1.jpg', 'RiveGaucheApt2.jpg', 'RiveGaucheApt3.jpg'),
(27, '205/2-D', 2, 1.5, 3300, 888, 2, 1, 'Two bedroom one-and-a-half bath with newly renovated bathroom, spacious eat-in kitchen with bar counter overlooking living room.', 4, 'Two bedroom one-and-a-half bath\n\n', 'RiveGaucheApt1.jpg', 'RiveGaucheApt2jpg', 'RiveGaucheApt3jpg'),
(28, '221/4-B', 1, 1, 1995, 777, 4, 1, 'New Amsterdam West is comprised of ten adjacent, 6-story elevator buildings located in the fashionable Upper East Side neighborhood of Lenox Hill. Situated on the quiet, residential, double-width, tree-lined block between 2nd and 3rd Avenues, New Amsterdam West offers a variety of residences from studio to three-bedroom and duplex apartments. Most have been upgraded with granite kitchens, marble bathrooms, custom closets and other amenities. Some top floor apartments feature real wood-burning fi', 5, 'New Amsterdam West is comprised of ten adjacent, 6-story elevator buildings located in the fashionable Upper East Side neighborhood of Lenox Hill. Situated on the quiet, residential, double-width, tree-lined block between 2nd and 3rd Avenues, New Ams', 'NewAmsterdamApt1.jpg', 'NewAmsterdamApt2.jpg', 'RiveGaucheApt3.jpg'),
(29, '12G', 2, 1.5, 2750, 888, 12, 1, 'Lovely 2 bedroom with high ceilings and great view of nearby Bryant Park.', 5, '2 bedroom overlooing Bryant Park', 'NewAmsterdamApt1.jpg', 'NewAmsterdamApt2.jpg', 'RiveGaucheApt3.jpg'),
(30, '6D', 0, 1, 1950, 600, 6, 0, 'Spacious studio loft with floor to ceiling window view of leafy Hello Park. Newly renovated kitchen', 5, 'Spacious Studio loft overlooking Hello Park', 'NewAmsterdamApt1.jpg\n', 'NewAmsterdamApt2.jpg', 'RiveGaucheApt1.jpg'),
(4, '5A', 2, 1.5, 3895, 1060, 5, 1, 'Luxurious, spacious, well-lit two-bedroom with floor-to-ceiling south facing windows. Newly remodeled kitchen with granite counter tops and stainless steel appliances.', 6, 'Luxurious and spacious two-bedroom', 'MistyHillsApt1.jpg', 'MistyHillsApt2.jpg\n', 'ClaringtonCornersApt3.jpg\n'),
(5, '3H', 2, 1.5, 4295, 950, 3, 1, 'Clarington Corners, a stately pre-war building in the heart of midtown, is home to some of Manhattan''s most beautifully appointed luxury apartments. The classic pre-war residences of Clarington Corners provide tenants with 9'' high ceilings, restored plaster moldings and beams, marble baths, entry foyers and many closets including huge walk-ins. Wausau thermo-pane windows for superior sound insulation. Many homes also offer separate service entranceas, wood burning fireplaces with marble herths a', 2, 'Newly Renovated Two-Bedroom in Historic Building', 'ClaringtonCornersApt1.jpg', 'ClaringtonCornersApt2.jpg', 'ClaringtonCornersApt3.jpg'),
(11, '4C', 2, 1.5, 3575, 1270, 4, 1, 'Huge and luxurious, do not miss out on this newly renovated huge 2-bedrooom 1.5 bath with large, modern eat-in kitchen and balcony; master suite with jacuzzi and walk-in closet', 13, 'Huge and luxurious newly renovated 2-bedrooom 1.5 bath', 'WestbrookManorApt1.jpg', 'WestbrookManorApt2.jpg', 'WestbrookManorApt3.jpg'),
(14, '8H', 3, 2, 5700, 1750, 8, 1, '3-Bedroom 2-Bath apartment in one of Manhattan''s signature luxury rental residences. This apartment has it all--granite counter tops, Italian porcelain tile on walls in kitchen and bath, Viking 6-burner range, Subzero stainless fridge, rooftop access and private balcony. Views of the Manhattan skyline looking south. Great natural light with no blocking buildings.', 8, '3-Bedroom 2-Bath apartment in Luxury building', 'RiverviewApt1.jpg', 'RiverviewApt2.jpg', 'ClaringtonCornersApt2.jpg'),
(35, '4C', 2, 1.5, 3575, 1270, 4, 1, 'Huge and luxurious, do not miss out on this newly renovated huge 2-bedrooom 1.5 bath with large, modern eat-in kitchen and balcony; master suite with jacuzzi and walk-in closet', 12, 'Huge and luxurious newly renovated 2-bedrooom 1.5 bath', 'WestbrookManorApt1.jpg', 'WestbrookManorApt2.jpg', 'WestbrookManorApt3.jpg'),
(37, '11G', 0, 1.5, 2345, 1234, 11, 1, 'This giant Studio Loft boasts 1.5 baths, hardwood floors throughout, newly renovated eat-in kitchen, high ceilings in Luxury Building/', 4, 'Giant Studio Loft in Luxury Building', '', '', ''),
(38, '6C', 2, 1, 2588, 1010, 6, 0, 'This Nice 2 bedroom boasts granite countertops, hardwood floors throughout, newly renovated eat-in kitchen, high ceilings in Luxury Building.', 7, 'Nice 2 bedroom in Luxury Building', '', '', ''),
(39, '6C', 2, 1, 2588, 1010, 6, 0, 'This Nice 2 bedroom boasts granite countertops, hardwood floors throughout, newly renovated eat-in kitchen, high ceilings in Luxury Building.', 7, 'Nice 2 bedroom in Luxury Building', '', '', ''),
(40, '6C', 2, 1, 2588, 1010, 6, 0, 'This Nice 2 bedroom boasts granite countertops, hardwood floors throughout, newly renovated eat-in kitchen, high ceilings in Luxury Building.', 7, 'Nice 2 bedroom in Luxury Building', '', '', ''),
(41, '6C', 2, 1, 2588, 1010, 0, 0, 'This Nice 2 bedroom boasts granite countertops, hardwood floors throughout, newly renovated eat-in kitchen, high ceilings in Luxury Building.', 7, 'Nice 2 bedroom in Luxury Building', '', '', ''),
(42, '7A', 0, 1, 2345, 777, 7, 1, 'This Gorgeous Studio with High Ceilings has floor-to-ceiling windows overlooking Central Park.', 5, 'Gorgeous Studio with High Ceilings', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `IDblog` int(5) NOT NULL,
  `blogMbrID` int(6) NOT NULL,
  `blogTitle` varchar(250) NOT NULL,
  `blogBlurb` varchar(200) NOT NULL,
  `blogEntry` varchar(25000) NOT NULL,
  `blogDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`IDblog`, `blogMbrID`, `blogTitle`, `blogBlurb`, `blogEntry`, `blogDateTime`) VALUES
(1, 1, 'Lofty Ambitions: Creating the Perfect Loft Space', 'Blurby blurb Lofty Ambitions: Creating the Perfect Loft Space', '<p>For interior designers, when a potential client informs them just how much they like their style, and that they would like to incorporate it into their own home, it''s like winning the interior design lottery. This dream situation happened to me, an Atlanta-based interior designer; in January 2009 a young couple answered an ad I placed on their building''s hallway message board in regard to vintage furniture I was selling. The couple, Jeremy and Amanda, own and operate a hauling company located about 90 minutes outside of Atlanta.\r\n</p>\r\n<p>\r\nDue to their hectic, loud and physically exhausting work weeks, they decided to turn two small lofts in an ultra-modern, glass-and-concrete high-rise into one large, open and airy two-story loft where they could escape on weekends. In addition to their own rest and relaxation needs, the loft, located in an urban area known as\r\n            Midtown, was also intended as event space, whether for TV and/or music video shoots, or for parties and celebrations\r\n            in need of an urban, contemporary setting with a penthouse-like feel.\r\n         </p> \r\n         <p>\r\n            After meeting the couple for the first time in my previous loft, as I was selling furniture to make room\r\n            for new pieces in my recently purchased house, we instantly hit it off. As Jeremy looked around, he quickly\r\n            inquired as to what things in the loft were available for purchase, from sofas and coffee tables to area rugs\r\n            and art. Eager to pare back my overabundance of sleek, modern, chrome pieces to make room for more Danish modern\r\n            decor in my new house, I quickly made a list of everything Jeremy and Amanda wanted, then got to pricing it\r\n            all out. Before I could even come to a number, the couple asked me to also bid on designing their newly renovated\r\n            loft, not only with items from my old loft, but with new, custom pieces as well.\r\n         </p>\r\n', '2015-06-28 15:21:21'),
(2, 1, 'Featured Neighborhood: SoHo', 'Blurby blurb: Lofty Ambitions: Creating the Perfect Loft Space', '<p>\r\nSoHo comprises the area south of Houston Street, west of Lafayette Street, north of Canal Street, and to the east of either theHuson River, Sixth Avenue, or West Broadway, depending on who you ask. While distinct, it shares many characteristics with its downtown neighbors: Greenwich Village to the north, Tribeca to the south and west, and Nolita to the east. An attraction in its own right, SoHo is in many ways the Midtown of Downtown, with packed streets, high-end shopping, and expensive real estate. Much of the area is now a historic district to preserve its unique character, but that hasn&#146;t stopped it from continually ranking as one of New York City&#146;s trendiest neighborhoods in the minds of locals and visitors alike.\r\n</p>\r\n\r\n<p>\r\nSoHo is often thought of as the poster neighborhood for urban regeneration. Originally a manufacturing area for much of the early-to-mid 20th century, SoHo became a haven for artists looking for inexpensive lofts to rent as limited residential space in the city made housing unaffordable. Saved through strong community activism from being torn down to create a highway across Lower Manhattan, it has since transformed and is now appreciated for its wealth of cast iron architecture on a scale found in few other places in the world.\r\n</p>\r\n\r\n<p>\r\nTo see what SoHo has become -- no longer the neighborhood of sweatshops, but instead a shopping mecca -- is essentially a study in contradictions. Some of New York City&#146;s richer residents pay top dollar to live in cast iron penthouses, while attempts to keep the artistic presence of the area intact have lead to what are essentially artist quotas in residential buildings. Formerly desolate streets are now crowded with visitors seeking the quintessential city experience. Perhaps it is these layers of society that keep people coming back, or maybe it&#146;s the architecture. Either way, SoHo will continue to be fashionable for years to come, bringing with it new residents who wish to keep the city one step ahead.\r\n</p>', '2015-06-28 16:13:20'),
(3, 1, 'How Much Money Do House Flippers Make?', 'Blurby blurb: How Much Money Do House Flippers Make?', '<p>How much money do house flippers make? According to RealtyTracs Quarterly Home Flipping Report, investors make a gross profit of $65,993 per flip.</p>\r\n\r\n<p>With the United States real estate market heating up, many people are getting into flipping houses. Cities with the highest number of flips include Detroit, Los Angeles, Memphis, and Miami. Cities with the highest profit on flips include St. Louis, Jacksonville, and Chicago, according to the report.</p>\r\n\r\n<h3>How to Find Discount Properties</h3>\r\n\r\n<p>The first step to flipping a house is finding a discount property. The goal is to buy low and sell high and keep repair costs to a minimum. Fortunately you can find bargain properties in just about every town and city in the U.S.</p>\r\n\r\n<p>For example, if you live near the Tampa, Florida area, you will find dozens of foreclosure houses listed for under $10,000. Many house rehabbers find undervalued houses by looking for foreclosures/bank owned properties - also called REO houses. Banks have carrying costs on any house in their inventory. Carrying costs include insuranace, taxes, and property maintenance. As a result, banks are often very motivated to get rid of their housing inventory - even if they have to sell it at a discount.</p>\r\n\r\n<p>HUD houses, which are foreclosed homes with an FHA backed mortgage, are also a source of bargain properties. HUD publishes all its houses on a website which makes it easy for investors to look for potential deals.\r\n</p>\r\n<p>\r\nHow to Get Funding for Your Flip If you do not have a lot of start up capital to work with, you can still get into flipping houses. You can access to funding to flip houses so that you use only a fraction of your own money.\r\n</p>\r\n\r\n<p>\r\nOne way to use other people''s money to flip houses is to get a Hard Money Loan. A Hard Money Lender is an individual, or a group of wealthy individuals, who lend money for the purpose of rehabbing houses. It is a short term loan you repay monthly with the balance paid in full when the house is sold.\r\n</p>\r\n\r\n<p>\r\nGetting a hard money loan is easier than getting a loan from a bank. There is less paperwork and your credit history is not as big of a factor. Often you can receive the funds in 48 to 72 hours. Some Hard Money Lenders provide funding without checking your income or your credit report.\r\n</p>\r\n\r\n<p>\r\nUsing hard money will reduce your overall profit because you pay interest and points on the loan. However, it is a good strategy to use if you do not have funds set aside - or prefer not to put your own money at risk.\r\n</p>', '2015-06-28 16:40:00'),
(6, 2, 'Flipper''s Paradise: "Show Me the Money!"', 'Blurby blurb: Blurby blurb: ', '<p>How much money do house flippers make? According to RealtyTrac''s Quarterly Home Flipping Report, investors make a gross profit of $65,993 per flip.\r\n</p>\r\n\r\n<p>\r\nWith the United States real estate market heating up, many people are getting into flipping houses. Cities with the highest number of flips include Detroit, Los Angeles, Memphis, and Miami. Cities with the highest profit on flips include St. Louis, Jacksonville, and Chicago, according to the report.\r\n</p>\r\n\r\n<h3>How to Find Discount Properties</h3>\r\n\r\n<p>\r\nThe first step to flipping a house is finding a discount property. The goal is to buy low and sell high and keep repair costs to a minimum. Fortunately you can find bargain properties in just about every town and city in the U.S.\r\n</p>\r\n\r\n\r\n<p>\r\nFor example, if you live near the Tampa, Florida area, you will find dozens of foreclosure houses listed for under $10,000.\r\nMany house rehabbers find undervalued houses by looking for foreclosures/bank owned properties - also called "REO" houses. Banks have carrying costs on any house in their inventory. Carrying costs include insurnace, taxes, and property maintenance. As a result, banks are often very motivated to get rid of their housing inventory - even if they have to sell it at a discount.\r\n</p>\r\n\r\n<p>\r\nHUD houses, which are foreclosed homes with an FHA backed mortgage, are also a source of bargain properties. HUD publishes all its houses on a website which makes it easy for investors to look for potential deals.\r\n</p>\r\n\r\n<p>\r\nHow to Get Funding for Your Flip If you do not have a lot of start up capital to work with, you can still get into flipping houses. You can access to funding to flip houses so that you use only a fraction of your own money.\r\n</p>\r\n\r\n<p>\r\nOne way to use other people''s money to flip houses is to get a "Hard Money Loan". A "Hard Money Lender" is an individual, or a group of wealthy individuals, who lend money for the purpose of rehabbing houses. It is a short term loan you repay monthly with the balance paid in full when the house is sold.\r\n</p>\r\n\r\n<p>\r\nGetting a hard money loan is easier than getting a loan from a bank. There is less paperwork and your credit history is not as big of a factor. Often you can receive the funds in 48 to 72 hours. Some Hard Money Lenders provide funding without checking your income or your credit report.\r\n</p>\r\n\r\n<p>\r\nUsing hard money will reduce your overall profit because you pay interest and points on the loan. However, it is a good strategy to use if you do not have funds set aside - or prefer not to put your own money at risk.\r\n</p>', '2015-06-28 16:47:25'),
(7, 2, 'This Blog CMS is Really Cool', '', '<p>This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool.</p>\r\n<p>All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy.</p>\r\n<p>This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool.</p>\r\n<p>All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy.</p>\r\n<p>This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool. This Blog CMS is Really Cool.</p>\r\n<p>All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy. All work and no play makes Jack a dull boy.</p>', '2015-06-28 18:20:11'),
(8, 1, 'Thank you for taking Level 1 & 2 Web Dev', '', 'Hope you enjoyed the class. Let''s keep in touch.', '2015-06-28 21:54:42'),
(18, 1, 'gy jhg', 'dfhj huiyiu', 'weree ggj', '2015-07-04 17:20:56'),
(19, 1, 'Plok', 'Blok', 'Mok', '2015-07-04 17:21:57'),
(20, 1, 'Plok', 'Blok', '<span style="font-size: 10pt; font-weight: bold;">Mokmjkljh </span><span style="font-size: 10pt; font-weight: normal; background-color: rgb(255, 153, 0);">kkjhkj</span><div style="font-size: 10pt; font-weight: normal;"><span style="background-color: rgb(255, 153, 0);"><br></span></div><!--BLOG IMAGE & CAPTION CODE START--><span style="font-size: 10pt;"><img src="http://ez-sho.com/WebDev-Netcom-Level1-Level3-2015/images/oscar.png" alt="Oscar Madisoy"></span><div><span style="font-size: 10pt;">jhuig gkyhjggjh</span><br><span class="blogImgCapt" style="font-weight: normal; font-size: x-large;">Oscar Madisoy</span><!--BLOG IMAGE & CAPTION CODE END--></div>', '2015-07-04 17:23:16'),
(21, 1, 'The Making of a jQuery Mashup', 'How I integrated CLEditor and jCarouselLite into the Blog CMS', '<span style="font-style: normal; font-weight: normal; font-family: ''Arial Black''; background-color: rgb(51, 255, 51);">Level 3 - Lesson 30: Blog CMS 2.0</span><div style="font-family: Arial, Verdana; font-size: 10pt;"><span style="font-style: normal; font-weight: normal;">Hello, my name is </span><span style="font-style: normal; font-weight: bold;">Brian McClain</span>. The impressive-looking &nbsp;text toolbar you see above is courtesy of the<span style="font-style: normal; font-weight: bold; background-color: rgb(255, 255, 102);"> CLEditor</span>, a jQuery plugin. The image gallery (slideshow) at right is<span style="font-style: normal; font-weight: bold; background-color: rgb(255, 255, 102);"> jCarouselLite</span>, another jQuery widget. In this Lesson 30, we use <span style="font-style: normal; font-weight: bold;">PHP </span>and <span style="font-style: normal; font-weight: bold;">Javascript </span>to create a jQuery <span style="font-weight: bold;">mashup:</span>&nbsp;clicking an image in the slideshow adds the pic to this textarea,<span style="font-style: italic;"> like so:</span><div style="font-style: normal; font-weight: normal;"><br></div><!--BLOG IMAGE & CAPTION CODE START--><img src="http://ez-sho.com/WebDev-Netcom-Level1-Level3-2015/images/max.jpg" alt="Max"><br><span class="blogImgCapt" style="font-style: normal; font-weight: normal;">Max</span><!--BLOG IMAGE & CAPTION CODE END--></div>', '2015-07-04 19:51:39'),
(22, 1, '', '', '', '2015-07-04 19:51:52'),
(23, 1, 'The Making of a jQuery Mashup', 'How I integrated CLEditor and jCarouselLite into the Blog CMS', '<span style="font-style: normal; font-weight: normal; font-family: ''Arial Black''; background-color: rgb(51, 255, 51);">Level 3 - Lesson 30: Blog CMS 2.0</span><div style="font-family: Arial, Verdana; font-size: 10pt;"><span style="font-style: normal; font-weight: normal;">Hello, my name is </span><span style="font-style: normal; font-weight: bold;">Brian McClain</span>. The impressive-looking &nbsp;text toolbar you see above is courtesy of the<span style="font-style: normal; font-weight: bold; background-color: rgb(255, 255, 102);"> CLEditor</span>, a jQuery plugin. The image gallery (slideshow) at right is<span style="font-style: normal; font-weight: bold; background-color: rgb(255, 255, 102);"> jCarouselLite</span>, another jQuery widget. In this Lesson 30, we use <span style="font-style: normal; font-weight: bold;">PHP </span>and <span style="font-style: normal; font-weight: bold;">Javascript </span>to create a jQuery <span style="font-weight: bold;">mashup:</span>&nbsp;clicking an image in the slideshow adds the pic to this textarea,<span style="font-style: italic;"> like so:</span><div style="font-style: normal; font-weight: normal;"><br></div><!--BLOG IMAGE & CAPTION CODE START--><img src="http://ez-sho.com/WebDev-Netcom-Level1-Level3-2015/images/max.jpg" alt="Max"><br><span class="blogImgCapt" style="font-style: normal; font-weight: normal;">Max</span><!--BLOG IMAGE & CAPTION CODE END--></div>', '2015-07-04 19:52:24'),
(24, 1, 'Hosteria San Luis', 'working hancienda ranch in the Andes', '', '2015-07-07 19:26:03'),
(25, 1, 'Hacienda San Luis', 'Great Escape in the Andes', '', '2015-07-07 19:29:50'),
(26, 1, '', '', '', '2015-07-07 19:33:46'),
(27, 1, 'HSL', 'Andes', '', '2015-07-07 19:43:10'),
(28, 1, 'lhjk', 'uygt', '', '2015-07-07 19:45:12'),
(29, 1, 'PHP', 'fun', '', '2015-07-07 19:48:20'),
(30, 1, 'oiuytgf', 'kijhg', '', '2015-07-07 19:55:52'),
(31, 1, 'iuthf', '9i8ut', '', '2015-07-07 20:25:17'),
(32, 1, 'oiu', 'poiuy', '', '2015-07-07 20:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
  `IDbldg` int(2) NOT NULL,
  `bldgName` varchar(30) NOT NULL,
  `hoodID` int(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `floors` int(2) NOT NULL,
  `isDoorman` tinyint(1) NOT NULL,
  `isElevator` tinyint(1) NOT NULL,
  `isPets` tinyint(1) NOT NULL,
  `yearBuilt` year(4) NOT NULL,
  `bldgPic` varchar(45) NOT NULL,
  `isFireplace` tinyint(1) NOT NULL,
  `isParking` tinyint(1) NOT NULL,
  `bldgDesc` varchar(500) NOT NULL,
  `isGym` tinyint(1) NOT NULL,
  `bldgPic1` varchar(100) NOT NULL,
  `bldgPic2` varchar(100) NOT NULL,
  `bldgPic3` varchar(100) NOT NULL,
  `bldgPic4` varchar(100) NOT NULL,
  `bldgPic5` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`IDbldg`, `bldgName`, `hoodID`, `address`, `phone`, `email`, `floors`, `isDoorman`, `isElevator`, `isPets`, `yearBuilt`, `bldgPic`, `isFireplace`, `isParking`, `bldgDesc`, `isGym`, `bldgPic1`, `bldgPic2`, `bldgPic3`, `bldgPic4`, `bldgPic5`) VALUES
(1, 'Chelsea Terraces', 1, '363 West 30th Street', 2125551234, 'info@mansionsintheskyrealty.com', 11, 1, 1, 1, 1977, 'ChelseaTerraces.jpg', 1, 1, 'Chelsea Terraces is located in New York City''s famed Chelsea district, between midtown and the West Village', 1, 'ChelseaTerracesBldg1.jpg', 'ChelseaTerracesBldg2.jpg', 'ChelseaTerracesBldg3.jpg', 'ChelseaTerracesBldg4.jpg', 'ChelseaTerracesBldg5.jpg'),
(2, 'Clarington Corners', 2, '101 West 59th Street', 2124567845, 'info@mansionsintheskyrealty.com', 7, 0, 1, 0, 1977, 'ClaringtonCorners.jpg', 0, 0, 'Clarington Corners is the coolest place at right angles in the whole city! Clearly it''s Clarington!', 0, 'ClaringtonCornersBldg1.jpg', 'ClaringtonCornersBldg2.jpg', 'ClaringtonCornersBldg3.jpg', 'ClaringtonCornersBldg4.jpg', 'ClaringtonCornersBldg5.jpg'),
(3, 'Haverford Place', 3, '55 55th Street', 2147483647, 'info@mansionsintheskyrealty.com', 9, 0, 1, 1, 1980, 'HaverfordPlace.jpg', 0, 0, 'Ya havta have Haverford Place on your list of must have dwelling spaces in this city. What else has to be said? Reserve your Place now!  ', 0, 'HaverfordPlaceBldg1.jpg', 'HaverfordPlaceBldg2.jpg', 'HaverfordPlaceBldg3.jpg', 'HaverfordPlaceBldg4.jpg', 'HaverfordPlaceBldg5.jpg'),
(4, 'Rive Gauche', 4, '450 West 15th Street', 2125553456, 'info@mansionsintheskyrealty.com', 11, 1, 1, 0, 1967, 'RiveGauche.jpg', 1, 0, 'The Rive Gauche is just as hip as Paris'' Left Bank and since the name is French, you know it must be tres chic. Don''t be gauche--reserve your apartment here today.', 0, 'RiveGaucheBldg1.jpg', 'RiveGaucheBldg2.jpg', 'RiveGaucheBldg3.jpg', 'RiveGaucheBldg4.jpg', 'RiveGaucheBldg5.jpg'),
(6, 'Misty Hills', 2, '121 34th Street', 2125556565, 'info@mansionsintheskyrealty.com', 13, 1, 0, 0, 1955, 'MistyHills.jpg', 1, 0, 'Don''t "miss" your chance to live in this great building. Head for the hills! You''ll be misty eyed when you find out what sweet rental deals we have in store for you.', 0, 'MistyHillsBldg1.jpg', 'MistyHillsBldg2.jpg', 'MistyHillsBldg3.jpg', 'MistyHillsBldg4.jpg', 'MistyHillsBldg5.jpg'),
(7, 'Mandrake Manor', 3, '22 22nd Street', 2125554532, 'info@mansionsintheskyrealty.com', 9, 1, 1, 1, 2001, 'MandrakeManor.jpg', 1, 1, 'The Mandrake Manor is between Park and Lexington Avenues, is a 21-story luxury apartment building offering residences ranging in size from studios to convertible three bedrooms. Many apartments feature amenities such as ', 0, 'MandrakeManorBldg1.jpg', 'MandrakeManorBldg2.jpg', 'MandrakeManorBldg3.jpg', 'MandrakeManorBldg4.jpg', 'MandrakeManorBldg5.jpg'),
(5, 'New Amsterdam West', 1, '644 22nd Street', 2125553423, 'info@mansionsintheskyrealty.com', 9, 1, 1, 1, 2010, 'NewAmsterdamWest.jpg', 0, 0, 'New! We just got an elevator and a doorman!! PLUS Pets now welcome! And we have parking for all!! New Amsterdam West is the exact opposite of Old Amsterdam East, but in a good way. New York used to be called New Amsterdam, until they decided to change the name to match the name of the state and also because it was too long of a name to fit on many cocktail napkins and bar coasters. Things are better now. Come rent an apartment here.', 1, 'NewAmsterdamWestBldg1.jpg', 'NewAmsterdamWestBldg2.jpg', 'NewAmsterdamWestBldg3.jpg', 'NewAmsterdamWestBldg4.jpg', 'NewAmsterdamWestBldg5.jpg'),
(9, 'Sierra Nevada East', 1, '99 9th Street', 2125556967, 'info@mansionsintheskyrealty.com', 0, 0, 0, 1, 2001, 'SierraNevadaEast.jpg', 1, 1, 'Sierra Nevada--you''ve tried the beer, now try the living space. We guarantee it will make you feel just as happy with much fewer calories.', 0, 'SierraNevadaEastBldg1.jpg', 'SierraNevadaEastBldg2.jpg', 'SierraNevadaEastBldg3.jpg', 'SierraNevadaEastBldg4.jpg', 'SierraNevadaEastBldg5.jpg'),
(8, 'Riverview', 4, '222 33rd Street', 2123456754, 'info@mansionsintheskyrealty.com', 19, 1, 1, 0, 2000, 'Riverview.jpg', 0, 0, 'Riverview affords beautiful views of a towering steel and glass facade that, when the light is just right, reflects the sky in this way that sort of looks like rippling water, like a river. It''s pretty cool sometimes. You should check it out. Rent with us and don''t take the name so literally. ', 0, 'RiverviewBldg1.jpg', 'RiverviewBldg2.jpg', 'RiverviewBldg3.jpg', 'RiverviewBldg4.jpg', 'RiverviewBldg5.jpg'),
(10, 'Soho Lofts', 2, '99 99th Street', 2121234564, 'info@mansionsintheskyrealth.com', 11, 1, 1, 0, 1988, 'SohoLofts.jpg', 0, 1, 'Soho Lofts is a chic, hip happening place that doubles evenings as a municipal court of justice. Save 5% on your rent when you volunteer for jury duty.', 0, 'SohoLoftsBldg1.jpg', 'SohoLoftsBldg2.jpg', 'SohoLoftsBldg3.jpg', 'SohoLoftsBldg4.jpg', 'SohoLoftsBldg5.jpg'),
(11, 'Orange Mews', 3, '111 Sullivan Street', 2125556767, 'info@mansionsintheskyrealty.com', 7, 1, 1, 1, 1955, 'OrangeMews.jpg', 0, 1, 'Sullivan Mews''s distinctive name is easy to remember and very simple for cats to pronounce. Come rent an apartment here in NYC''s most pet friendly building.', 1, 'OrangeMewsBldg1.jpg', 'OrangeMewsBldg2.jpg', 'OrangeMewsBldg3.jpg', 'OrangeMewsBldg4.jpg', 'OrangeMewsBldg5.jpg'),
(12, 'Village Greens', 4, '450 Sixth Avenue', 2125554321, 'info@mansionsintheskyrealty.com', 9, 1, 0, 1, 1967, 'VillageGreens.jpg', 0, 1, 'It''s not a village. It''s in a gigantic city, actually. And it''s not that green. Mostly gray and cement colored. But the name is catchy, so we''re keeping it. Rent here, but be prepared to pay a lot of green.', 1, 'VillageGreensBldg1.jpg', 'VillageGreensBldg2.jpg', 'VillageGreensBldg3.jpg', 'VillageGreensBldg4.jpg', 'VillageGreensBldg5.jpg'),
(13, 'Westbrook Manor', 1, '424 West End Avenue', 2125554326, 'info@mansionsintheskyrealty.com', 11, 0, 0, 1, 1978, 'WestbrookManor.jpg', 0, 1, 'The brook is actually a culvert, but it''s still a great place to live just west many places to the east.', 0, 'WestbrookManorBldg1.jpg', 'WestbrookManorBldg2.jpg', 'WestbrookManorBldg3.jpg', 'WestbrookManorBldg4.jpg', 'WestbrookManorBldg5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `IDmbr` int(6) NOT NULL,
  `mbrFirstName` varchar(15) NOT NULL,
  `mbrLastName` varchar(15) NOT NULL,
  `mbrEmail` varchar(50) NOT NULL,
  `mbrUsername` varchar(15) NOT NULL,
  `mbrPassword` varchar(15) NOT NULL,
  `mbrJoinTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`IDmbr`, `mbrFirstName`, `mbrLastName`, `mbrEmail`, `mbrUsername`, `mbrPassword`, `mbrJoinTime`) VALUES
(1, 'Brian', 'McClain', 'brianmccln@yahoo.com', 'BrianMc', 'Php$123', '2015-06-25 20:07:30'),
(2, 'Tom', 'Seaver', 'tom@mets.com', 'TomMets', 'Mets1969', '2015-06-25 21:24:48'),
(3, 'Willie', 'Mays', 'wili@sfgiants.com', 'Will24', 'SayHey1', '2015-06-25 21:50:37'),
(4, 'Hank', 'Aaron', 'ha@braves.co', 'Hammer', 'Braves44', '2015-06-26 13:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `neighborhoods`
--

CREATE TABLE IF NOT EXISTS `neighborhoods` (
  `IDhood` int(2) NOT NULL,
  `hoodName` varchar(35) NOT NULL,
  `hoodDesc` varchar(500) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neighborhoods`
--

INSERT INTO `neighborhoods` (`IDhood`, `hoodName`, `hoodDesc`) VALUES
(1, 'Chelsea', 'Chelsea: Chelsea is a neighborhood on the West Side of the borough of Manhattan in New York City. The neighborhood is primarily residential, with a mix of tenements, apartment blocks, city housing projects, townhouses and renovated rowhouses. Chelsea takes its name from the estate and Georgian-style house of retired British Major Thomas Clarke, who obtained the property when he bought the farm of Jacob Somerindyck in 1750. '),
(2, 'Chinatown', 'Chinatown: With an estimated population of 90,000 to 100,000 people, Manhattan''s Chinatown is also one of the oldest ethnic Chinese enclaves outside of Asia. It is located in the borough of Manhattan in New York City, USA, bordering the Lower East Side to its east and Little Italy to its north.'),
(3, 'Soho', 'SoHo: SoHo  is a neighborhood in Lower Manhattan, New York City, notable for being the location of many artists'' lofts and art galleries, and also, more recently, for the wide variety of stores and shops ranging from trendy boutiques to outlets of upscale national and international chain stores.'),
(4, 'Tribeca', 'Tribeca: The Tribeca name came to be applied to the area south of Canal Street, between Broadway and West Street, extending south to Chambers Street. The area was among the first residential neighborhoods developed in New York beyond the boundaries of the city during colonial times, with residential development beginning in the late 18th century.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`IDapt`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`IDblog`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`IDbldg`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`IDmbr`);

--
-- Indexes for table `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD PRIMARY KEY (`IDhood`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `IDapt` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `IDblog` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `IDbldg` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `IDmbr` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `neighborhoods`
--
ALTER TABLE `neighborhoods`
  MODIFY `IDhood` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
