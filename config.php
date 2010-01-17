<?php
/* phpcv - PHP Curriculum Vitae 0.1
 * Made by Pierre Mavro
*/

///////////////////////////////
// All versions (first part) //
///////////////////////////////
$my_name = "Prenom Nom";
$my_mail = "my@mail.fr";
$my_birth_day = "1";
$my_birth_month = "1";
$my_birth_year = "2000";
$secret = "mysecret";

///////////////
// Languages //
///////////////

//
// French Version
//
if ($lang == 'fr')
{
    // <br /> has been added because of bug with wkhtmltopdf on letter-spacing
	$role = "Mon titre";
	$title = "$my_name | $role | $my_mail";
	$personnal_infos = array(
		"Mail : <a href=\"mailto:$my_mail\">$my_mail</a>");
	$personnal_infos_full = array(
		"<img src=\"myphoto.jpg\">Ma Photo</img>",
		birth_years_old($my_birth_day,$my_birth_month,$my_birth_year) . ' ans',
		"Tel : 01.01.01.01.01");
	$profile_title = "Profile";
	$profile_desc = "Description de mon profile";
	$aim_title = "Objectif";
	$aim_desc = "Description de mon objectif";
	$skills_name = "Compétences";
	$first_skill = "1ère compétence";
	$first_skill_desc = "Description de ma première compétence";
	$second_skill = "2ème compétence";
	$second_skill_desc = "Description de ma deuxième compétence";
	$third_skill = "3ème compétence";
	$third_skill_desc = "Description de ma troisème compétence";
	$knowledges_title = "Connaissances";
	$experience_title = "Expérience";
	$all_jobs = array(
		array(
			"Job2 - Nom de la société",
			"Mon titre",
			"20xx-" . date('Y'),
			"Description du travail effectué dans cette société"),
		array(
			"Job1 - Nom de la société",
			"Mon titre",
			"19xx-20xx",
			"Description du travail effectué dans cette société")
		);
	$education_title = "Formations";
	$all_education = array(
		array(
			"Formation 1"),
		array(
			"Formation 2",
			"Détail 1",
			"Détail 2"),
		array(
			"Diplôme d'école")
	);
	$others_title = "Divers";
	$all_others = array(
		array(
			"Divers 1",
			"Descriptif...",
			"Fin du descriptif"),
		array(
			"Divers 2",
			"Descriptif :")
	);
	$hobby_title = "Loisirs";
	$hobby_list = array(
		"1er loisir",
		"2ème loisir");
}
else
//
// English Version
//
{
    // <br /> has been added because of bug with wkhtmltopdf on letter-spacing
	$role = "My title";
	$title = "$my_name | $role | $my_mail";
	$personnal_infos = array(
		"Mail : <a href=\"mailto:$my_mail\">$my_mail</a>");
	$personnal_infos_full = array(
		"<img src=\"myphoto.jpg\">My Photo</img>",
		birth_years_old($my_birth_day,$my_birth_month,$my_birth_year) . ' years old',
		"Tel : 01.01.01.01.01");
	$profile_title = "Profile";
	$profile_desc = "Profile's description";
	$aim_title = "Aim";
	$aim_desc = "Aim's description";
	$skills_name = "Skills";
	$first_skill = "1st skill";
	$first_skill_desc = "1st skill description";
	$second_skill = "2nd skill";
	$second_skill_desc = "2nd skill description";
	$third_skill = "3rd skill";
	$third_skill_desc = "3rd skill description";
	$knowledges_title = "Knowledges";
	$experience_title = "Experiences";
	$all_jobs = array(
		array(
			"Job2 - Society name",
			"My title",
			"20xx-" . date('Y'),
			"Job accomplished in this society"),
		array(
			"Job1 - Society name",
			"My title",
			"19xx-20xx",
			"Job accomplished in this society")
		);
	$education_title = "Education";
	$all_education = array(
		array(
			"Training 2"),
		array(
			"Training 1",
			"Detail 1",
			"Detail 2"),
		array(
			"School diploma")
	);
	$others_title = "Others";
	$all_others = array(
		array(
			"Other 1",
			"Description...",
			"Ending description"),
		array(
			"Other 2",
			"Descriptiion :")
	);
	$hobby_title = "Hobbies";
	$hobby_list = array(
		"1st hobby",
		"2nd hobby");
}

//////////////////////////////
// All versions (last part) //
//////////////////////////////

// Knowledges
$first_knowledges = array(
	"Tic",
	"Tac",
	"Toc"
	);
$second_knowledges = array(
	"Foo",
	"Bar"
	);
$third_knowledges = array(
	"Plic",
	"Plac",
	"Ploc"
	);

// Set list array for others
$others_list = array(
	"1 other",
	"2 other",
	"3 other",
	"4 other",
	"5 other",
	"6 other",
	"7 other");

//////////////////
// PDF settings //
//////////////////

// wkhtmltopdf binary path
$wkhtmltopdf_bin = "/usr/bin/wkhtmltopdf";
// Options
$options = "--no-background -B 10";
// URL to cv.php
$site = "http://www.mycvsite.fr/cv.php";
// Destination where to stock file (prefer tempory filesystem if possible)
$pdf_destination = "/tmp";
// PDF file name when downloaded
$pdf_filename = "";

?>
