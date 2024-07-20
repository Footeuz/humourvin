<?php
define('URL', 'https://humourvin.fr/');

$menu=array();
$menu[0] = array('link' => URL, 'text' => 'Accueil');
$menu[1] = array('link' => 'programme', 'text' => 'Programme');
$menu[2] = array('link' => 'billetterie', 'text' => 'Billetterie');
$menu[4] = array('link' => 'precedentes-editions', 'text' => 'Précédentes éditions');
$menu[9] = array('link' => 'tremplin', 'text' => 'Tremplin');
$menu[5] = array('link' => 'videos', 'text' => 'Vidéos');
$menu[6] = array('link' => 'partenaires', 'text' => 'Partenaires');
$menu[8] = array('link' => 'devenir-benevole', 'text' => 'Devenir Bénévole');
$menu[3] = array('link' => 'presse', 'text' => 'Espace presse');
$menu[7] = array('link' => 'contact', 'text' => 'Contact');
//$menu[10] = array();

$vignerons=array();
$vignerons[]='A venir !';
/*$vignerons[]='Bourgueil > Domaine Lamé Delisle Boucard & Frédéric Arlettaz';
$vignerons[]='Champagne > Domaine Mongery';
$vignerons[]='Châteaumeillant > Domaine Roux';
$vignerons[]='Côtes de la Charité > Domaine de la coquillerie';
$vignerons[]='Côtes d’Auvergne > Domaine Stéphane Bonjean';
$vignerons[]='Luberon > Domaine de la Citadelle';
$vignerons[]='Menetou-Salon/Valençay > Domaine Minchin';
$vignerons[]='Minervois > Domaine du Somail';
$vignerons[]='Quincy > Domaine de l’Epine';
$vignerons[]='Quincy/Reuilly > Domaine Tatin';
$vignerons[]='Reuilly > Domaine Claude Lafond';
$vignerons[]='Reuilly > Domaine de la Pagerie';
$vignerons[]='Saint-Pourçain > Domaine Jean Wambergue';
$vignerons[]='Sancerre > Domaine Vincent Grall';
$vignerons[]='Saumur > Domaine Fabien Duveau';
$vignerons[]='Vouvray > Domaine du Mouton Noir';*/

$partenaire=array();
$partenaire[] = array('link' => 'https://ville-bourges.fr', 'image' => './assets/partners/logo-villedeBourges.jpg', 'text' => 'Partenaire Ville de Bourges');
$partenaire[] = array('link' => 'https://www.departement18.fr/', 'image' => './assets/partners/logo-Cher.jpg', 'text' => 'Partenaire Département du Cher');
$partenaire[] = array('link' => 'https://www.centre-valdeloire.fr/', 'image' => './assets/partners/logo-RegionCVDL.jpg', 'text' => 'Partenaire Région Centre Val de Loire');
$partenaire[] = array('link' => 'https://www.nouvelles-renaissances.com/', 'image' => './assets/partners/logo-renaissances.jpg', 'text' => 'Partenaire Renaissances');
$partenaire[] = array('link' => 'https://www.bourgesberrytourisme.com', 'image' => './assets/partners/logo-BourgesBerryTourisme.jpg', 'text' => 'Partenaire Bourges Berry Tourisme');
$partenaire[] = array('link' => '', 'image' => './assets/partners/logo-Heltis.jpg', 'text' => 'Partenaire Heltis');
$partenaire[] = array('link' => 'https://wallstreetenglish.fr/ecoles/cours-anglais-bourges/', 'image' => './assets/partners/logo-WSE.jpg', 'text' => 'Partenaire Wall Street English Bourges');
$partenaire[] = array('link' => 'https://www.creditmutuel.fr', 'image' => './assets/partners/logo-CreditMutuel.jpg', 'text' => 'Partenaire Crédit Mutuel');
$partenaire[] = array('link' => 'https://www.cogep.fr', 'image' => './assets/partners/logo-Cogep.jpg', 'text' => 'Partenaire Cogep');
$partenaire[] = array('link' => 'https://www.youtube.com/watch?v=lXcg2vwWBuw', 'image' => './assets/partners/logo-MMA.jpg', 'text' => 'Partenaire MMA Sebastien Cowet');
$partenaire[] = array('link' => 'https://lespetitsplatsdubourbon.com/', 'image' => './assets/partners/logo-ppb.jpg', 'text' => 'Partenaire Petits plats de Bourbon');
$partenaire[] = array('link' => 'https://www.lamerepoule.fun/', 'image' => './assets/partners/logo-LaMerePoule.jpg', 'text' => 'Partenaire La Mère Poule');
$partenaire[] = array('link' => 'https://www.boulangeriepatisseriedesmarronniers.fr/', 'image' => './assets/partners/logo-boulangerie.jpg', 'text' => 'Partenaire Boulangerie les maronniers');
$partenaire[] = array('link' => 'https://www.hotel-bourbon.fr/', 'image' => './assets/partners/logo-Mercure.jpg', 'text' => 'Partenaire Mercure');
$partenaire[] = array('link' => 'https://www.francebleu.fr/berry', 'image' => './assets/partners/logo-FBBerry.jpg', 'text' => 'Partenaire France Bleu Berry');
$partenaire[] = array('link' => 'https://librairix.com', 'image' => './assets/partners/logo-librairix.jpg', 'text' => 'Partenaire Librairix');
$partenaire[] = array('link' => 'https://www.jcdecaux.fr', 'image' => './assets/partners/logo-jcdecaux.jpg', 'text' => 'Partenaire JC Decaux');


$auteurs=array();
$auteurs[]='A venir !';
/*$auteurs[]='Maurice Barthélémy';
$auteurs[]='Christine Berrou';
$auteurs[]='Olivier Besseron';
$auteurs[]='Marc Chalvin';
$auteurs[]='Sandra Colombo';
$auteurs[]='Benoît Franquebalme';
$auteurs[]='Heckle Freux';
$auteurs[]='Jean-Pierre Gilbert';
$auteurs[]='Pascal Gros';
$auteurs[]='Marie Guibourt';
$auteurs[]='L’Abbé';
$auteurs[]='Lapin illustrateur';
$auteurs[]='Raynal Pellicer';
$auteurs[]='Piston magazine';
$auteurs[]='Marcelle Ratafia';
$auteurs[]='Sanaga';
$auteurs[]='Chloé Verlach';*/


if (isset($_REQUEST['artist_slug'])) {
    $artist_slug = $_REQUEST['artist_slug'];
    switch ($artist_slug) {
        case 'demanche':
            $artist['name'] = 'Arnaud Demanche';
            $artist['picture'] = 'Arnaud-Demanche.jpg';
            $artist['website'] = 'https://arnauddemanche.fr';
            $artist['date'] = 'Vendredi 06 décembre 2024 - 20h30';
            $artist['place'] = 'Théâtre Jacques Coeur';
            $artist['rs_facebook'] = 'https://www.facebook.com/ArnaudDemanchePage';
            $artist['rs_instagram'] = 'https://www.instagram.com/arnauddemanche/';
            $artist['rs_youtube'] = 'https://www.youtube.com/channel/UC8-xeUF3sXerirWvgobhz7g';
            $artist['rs_x'] = 'https://x.com/ArnaudDemanche';
            $artist['video'] = 'https://www.youtube.com/embed/bf3_Og-VNOw?si=6HsLcVsJSTZn00tz';
            break;
        case 'noens':
            $artist['name'] = 'Simon Noens';
            $artist['picture'] = 'Simon-Noens.jpg';
            $artist['website'] = '';
            $artist['date'] = 'Prix du Jury & Public du <a href="./tremplin">tremplin</a> 2023</p><p>Jeudi 05 décembre 2024 - 20h00';
            $artist['place'] = 'Théâtre Jacques Coeur';
            $artist['rs_facebook'] = 'https://www.facebook.com/simon.noens/?locale=fr_FR';
            $artist['rs_instagram'] = '';
            $artist['rs_youtube'] = '';
            $artist['rs_x'] = '';
            $artist['video'] = 'https://www.youtube.com/embed/3c_7jDYd21c?si=cCs9PJM6VZ0KJZ6w';
            break;
        case 'santini':
            $artist['name'] = 'Julien Santini';
            $artist['picture'] = 'Julien-Santini.jpg';
            $artist['website'] = 'https://santinicomedy.com';
            $artist['date'] = 'Samedi 07 décembre 2024 - 20h30';
            $artist['place'] = 'Théâtre Jacques Coeur';
            $artist['rs_facebook'] = 'https://www.facebook.com/profile.php?id=100006084285483';
            $artist['rs_instagram'] = 'https://www.instagram.com/julien.santini/';
            $artist['rs_youtube'] = '';
            $artist['rs_x'] = '';
            $artist['video'] = 'https://www.youtube.com/embed/H2KONBv6280?si=6efv8pl8Ea277kRf';
            break;
        case 'tranie':
            $artist['name'] = 'Benjamin Tranie';
            $artist['picture'] = 'Benjamin-Tranie.jpg';
            $artist['website'] = '';
            $artist['date'] = 'Dimanche 08 décembre 2024 - 19h00';
            $artist['place'] = 'Théâtre Jacques Coeur';
            $artist['rs_facebook'] = 'https://www.facebook.com/BenjTranie';
            $artist['rs_instagram'] = '';
            $artist['rs_youtube'] = 'https://www.youtube.com/channel/UCHuVA3VartthDrmZ7mjPsUA';
            $artist['rs_x'] = '';
            $artist['video'] = 'https://www.youtube.com/embed/ztQz1409EUs?si=X7jj-1vktTAw6Rgt';
            break;
        default:
            $artist['name'] = '';
            $artist['picture'] = '';
            $artist['website'] = '';
            $artist['date'] = '';
            $artist['place'] = '';
            $artist['rs_facebook'] = '';
            $artist['rs_instagram'] = '';
            $artist['rs_youtube'] = '';
            $artist['rs_x'] = '';
            $artist['video'] = '';
            break;
    }
}