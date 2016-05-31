<?php

require('../../config.php');
require_once($CFG->dirroot . '/user/editlib.php');

$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("Espace Tutorat");
$PAGE->set_heading("Espace Tutorat");
$PAGE->set_url($CFG->wwwroot.'/tutoring.php');

echo $OUTPUT->header();
echo "Bienvenue dans votre espace tutorat";
?>
<div id="tutoringSpace">
			<div class="">
			<br><button>Faire une demande de tutorat</button>
			</div>
			
</div>			
			<?php
//connexion DB

$DBhost = $CFG->dbhost;
$DBuser = $CFG->dbuser;
$DBpassword = $CFG->dbpass;
$DBname = $CFG->dbname;
$mdlUserId = $USER->id;


		$connexion = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);
        $requete = "select * from mdl_user where idappliant = '$mdlUserId' ";
        $result = mysqli_query($connexion, $requete);
        
		if (mysqli_num_rows($result)> 0)
 
        {
            echo "Vous avez plusieurs demandes en cours";
        }
        
		else
        {
            echo "<br>Aucune demande en cours<br>";
        }
		
		
		
echo $OUTPUT->footer();
?>
