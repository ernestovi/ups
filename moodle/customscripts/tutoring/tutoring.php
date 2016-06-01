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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>


<h3>Dépôts de demandes/d'offres</h3>
<div id="tutoringSpace">
		<div id="demandOfferSpace">
			
			
			<?php
//connexion DB

$DBhost = $CFG->dbhost;
$DBuser = $CFG->dbuser;
$DBpassword = $CFG->dbpass;
$DBname = $CFG->dbname;
$mdlUserId = $USER->id;

		$connexion = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);
        $requestVerifDemand = "select * from mdl_tutelage_application where idappliant = '$mdlUserId' ";
        $resultRequestVerifDemand = mysqli_query($connexion, $requestVerifDemand);
        
		if (mysqli_num_rows($resultRequestVerifDemand)> 0)
 
        {
            ?>Vous avez effectué plusieurs dépôts :<br><?php
			 $requestListDemand = "select id,applicationdate,requesttype,status from mdl_tutelage_application where idappliant = '$mdlUserId'";
			 $resultRequestListDemand = mysqli_query($connexion, $requestListDemand);
			 
			 while ($row = mysqli_fetch_assoc($resultRequestListDemand)) {
				echo " #".$row["id"]." Dépôt d'une ".$row["requesttype"]." le ".$row["applicationdate"]." - ".$row["status"]."</br>";
			 }
			
        }
        
		else
        {
            ?><br>Vous n'avez fait aucune demande<br><?php
        }
		
?>	
			<br><button id="showDepositionForm">Faire une demande ou une offre de tutorat</button>
			
			<div id="depositionForm">
			<button id="closeForm">Fermer le formulaire</button>
			<br><form method="post">
				Je dépose une : <input type="radio" name="deposition" value="demande"> Demande
										<input type="radio" name="deposition" value="offre"> Offre<br>
				
				
				<br>Choix du domaine de compétences : <br>
				<input type="radio" name="domain" value="4"> Journalisme<br>
				<input type="radio" name="domain" value="6"> Administration<br>
				<input type="radio" name="domain" value="5"> Droit<br>
				<input type="radio" name="domain" value="1"> Architecture et Urbanisme<br>
				<input type="radio" name="domain" value="3"> Art<br>
				<input type="radio" name="domain" value="7"> Informatique<br>
				
				<br>En réponse à la déposition (choisir l'identifiant d'une des dépositions <a href="#listTutelage">listées ci-dessous</a>) : <br>
				<input type="text" name="idApplication"/> <br>
				
				<br>Motivations :<br>
				<textarea name="details" rows="10" cols="80"></textarea>
				
				<br>
				<input type="submit" name="send" value="Envoyer"/>
			
			</form>
			</div>
			
		<script>
			$('#depositionForm').hide();	
			
			$("#showDepositionForm").click(function(){
				$('#depositionForm').show();
			});
			
			$("#closeForm").click(function(){
				$('#depositionForm').hide();

			});			
		</script>	
			<?php
			
			if(isset($_POST['send'])){
				$idAppliant = $mdlUserId;
				$depositionType = $_POST['deposition'];
				$requestDetail = $_POST['details'];
				$applicationDate = date("Y-m-d");
				$idDomain = $_POST['domain'];
				$status = "envoyee";
				$inResponseAt = $_POST['idApplication'];
				
				$requestSendDeposition = "INSERT INTO mdl_tutelage_application (idappliant,requesttype,requestdetail,applicationdate,iddomain,status,inresponseat) VALUES ('$idAppliant','$depositionType','$requestDetail','$applicationDate','$idDomain','$status','$inResponseAt')";
				$resultRequestSendDeposition = mysqli_query($connexion, $requestSendDeposition);
				if ($resultRequestSendDeposition)
				{
					echo "Votre requête a été envoyée avec succès"; ?>
					<script>	
					$('#depositionForm').hide();
					</script>
					<?php
				}
				else{
					echo "Erreur, merci de réessayer";
				}
			}
			
			?>
	</div>
<!--	
<div id="listTutelage">

<br><h3>Liste des demandes de tutorat envoyées :</h3><br>
/*

	$requestListTutelage = "select * from mdl_tutelage_application where requesttype = 'demande' and status = 'envoyee'";
	$resultRequestListTutelage = mysqli_query($connexion, $requestListTutelage);
			 
	while ($row2 = mysqli_fetch_assoc($resultRequestListTutelage)) {
		echo " #".$row2["id"]." ".$row2["requesttype"]." du ".$row2["applicationdate"]."</br>";
	}
	
	*/

</div>	-->

<div id="listTutelage2">

<br><h3>Liste des offres de tutorat disponibles :</h3><br>
<?php

	$requestListTutelage2 = "select * from mdl_tutelage_application where requesttype = 'offre' and status = 'envoyee'";
	$resultRequestListTutelage2 = mysqli_query($connexion, $requestListTutelage2);
			 
	while ($row3 = mysqli_fetch_assoc($resultRequestListTutelage2)) {
		echo " #".$row3["id"]." ".$row3["requesttype"]." du ".$row3["applicationdate"]."</br>";
	}
	
	
?>
</div>	
	
</div>			

<?php	
		
echo $OUTPUT->footer();
?>
