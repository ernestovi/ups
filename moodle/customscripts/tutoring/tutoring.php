<?php

require('../../config.php');
require_once($CFG->dirroot . '/user/editlib.php');

$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("Espace Tutorat");
$PAGE->set_heading("Espace Tutorat");
$PAGE->set_url($CFG->wwwroot.'/tutoring.php');

echo $OUTPUT->header();
?>

<h3>Vous pouvez faire une demande ou bien candidater pour devenir tuteur</h3>
<div id="tutoringSpace">
		<div class="demandSpace">
			
			
			<?php
//connexion DB

$DBhost = $CFG->dbhost;
$DBuser = $CFG->dbuser;
$DBpassword = $CFG->dbpass;
$DBname = $CFG->dbname;
$mdlUserId = $USER->id;
$requestType = "demande";

		$connexion = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);
        $requestVerifDemand = "select * from mdl_tutelage_application where idappliant = '$mdlUserId' ";
        $resultRequestVerifDemand = mysqli_query($connexion, $requestVerifDemand);
        
		if (mysqli_num_rows($resultRequestVerifDemand)> 0)
 
        {
            ?>Vous avez plusieurs demandes en cours :<?php
			 $requestListDemand = "select id,applicationdate from mdl_tutelage_application where idappliant = '$mdlUserId' and requesttype = '$requestType' ";
			 $resultRequestListDemand = mysqli_query($connexion, $requestListDemand);
			 $listDemand = mysqli_fetch_assoc($resultRequestListDemand);
			 echo 'Demande numéro #'.$listDemand['id'].' du '.$listDemand['applicationdate'];
			
        }
        
		else
        {
            ?><br>Vous n'avez aucune demande en cours<br><?php
        }
		
?>	
			<br><button>Faire une demande ou une offre de tutorat</button>
			<div id="deposition"><br><form method="post">
				Je dépose une : <input type="radio" name="deposition" value="demande"> Demande
										<input type="radio" name="deposition" value="offre"> Offre<br>
				
				
				<br>Choix du domaine de compétences : <br>
				<input type="radio" name="domain" value="4"> Journalisme<br>
				<input type="radio" name="domain" value="6"> Administration<br>
				<input type="radio" name="domain" value="5"> Droit<br>
				<input type="radio" name="domain" value="1"> Architecture et Urbanisme<br>
				<input type="radio" name="domain" value="3"> Art<br>
				<input type="radio" name="domain" value="7"> Informatique<br>
				
				<br>Motivations :<br>
				<textarea name="details" rows="10" cols="80"></textarea>
				
				<br>
				<input type="submit" name="send" value="Envoyer"/>
			
			</form>
			</div>
			
			<?php
			
			if(isset($_POST['send'])){
			$idAppliant = $mdlUserId;
			$depositionType = $_POST['deposition'];
			$requestDetail = $_POST['details'];
			$applicationDate = date("Y-m-d");
			$idDomain = $_POST['domain'];
			$status = "envoyée";
			
			$requestSendDeposition = "INSERT INTO mdl_tutelage_application (idappliant,requesttype,requestdetail,applicationdate,iddomain,status) VALUES ('$idAppliant','$depositionType','$requestDetail','$applicationDate','$idDomain','$status')";
			$resultRequestSendDeposition = mysqli_query($connexion, $requestSendDeposition);
			if ($resultRequestSendDeposition)
			{
				echo "Votre requête a été envoyée";
			}
			else{
				echo "Erreur, merci de réessayer";
			}
			}
			?>
	</div>
</div>			

<?php	
		
echo $OUTPUT->footer();
?>
