<!DOCTYPE html>
<html>
<head>
	<title>Promise Car :: Location de voitures à Casablanca</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	
	<meta name="description" content="Promise car location des voitures sur casablanca maroc sidi bernoussi" />

	<meta property="og:title" content="Promise car location des voitures sur casablanca maroc sidi bernoussi" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.promise.com" />
	<meta property="og:image" content="http://promisecar.com/images/logo_promise_car.png" />


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


<script type="text/javascript"></script>

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div id="band">
		<img src="images/logo_promise_car.png" class="logo">
	</div>


<div class="container">

<?php

	if (isset($_POST['nom'])) {

		// Get data from the form
		$name 		= 		$_POST['nom'];		
		$prenom 	= 		$_POST['prenom'];		
		$age 		= 		$_POST['age'];
		$telephone 	= 		$_POST['telephone'];
		$voiture 	=		$_POST['voiture'];
		$datedebut 	= 		$_POST['datedebut'];
		$datefin 	= 		$_POST['datefin'];
		$email 		= 		$_POST['email'];

		// Send Elements

		
	     $to      = 'contact@promisecar.com';
	     $subject = 'Résérvation';
	     $message = '
	    <div style="font-family: calibri;font-size: 16px;">
	    
	    <br />	

			<div style="
			overflow: hidden;
			background: red;
			height: 23px;
			line-height: 24px;
			text-align: center;
			color: #fff;
			box-shadow: 0px 0px 2px 5px #eee;
			border: 1px solid #fff;" >

		     Résérvation  de : <b>'.$voiture.'</b>
		     </div>

		<br />
		     Informations
		<br /> <br />

			<div style="
			overflow: hidden;						
			line-height: 21px;"

			     Nom : '.$name.'<br />
			     Prénom : '.$prenom.'<br />
			     Age : '.$age.'<br />
			     Téléphone : '.$telephone.'<br />
			     Voiture : '.$voiture.'<br />
			     Date debut : '.$datedebut.'<br />
			     Date fin : '.$datefin.'<br />
			     Email : '.$email.'<br />

		     </div>

		</div>
	     ';

    

	     $headers = 'From: reservation@promisecar.com' . "\r\n" .
	     'Reply-To: '.$email . "\r\n" .
	     'X-Mailer: PHP/' . phpversion();

		// HTML Version
		     $headers .= 'MIME-Version: 1.0' . "\r\n";
		     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	     mail($to, $subject, $message, $headers);

	?>

	<div class="alert alert-warning alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <strong>Envoyé!</strong> Votre message a été envoyé avec succès
	</div>

	<?php

	}

?>



	<div class="wrapper">

		<div class="left-side left">

			<h1>Réservation en ligne</h1>

			<h1>Notes sur la réservation</h1>

			<p>La durée de location se calcule par tranche de 24 heures, depuis l'heure de mise à disposition du véhicule. Nos tarif sont exprimée en DH / Euro.</p>

			<h2>Nos tarifs incluants:</h2>

			<ul class="my-liste">
				<li>Kilométrage illimité</li>
				<li>Assurance tous risques</li>
				<li>Livraison Aeroport</li>
				<li>Deuxième conducteur</li>
				<li>Véhicules récents</li>
			</ul>


			<h1>Formulaire de réservation</h1>

			<form action="index.php" method="post">
				<table class="form" id="form">	

					<tr>
						<td>Nom</td>
						<td><input type="texte" name="nom" class="form-control" id="nom" ></td>
					</tr>

					<tr>
						<td>Prénom</td>
						<td><input type="text" class="form-control" name="prenom" id="prenom"></td>
					</tr>				

					<tr>
						<td>Age</td>
						<td><input type="text" class="form-control" name="age" id="age"></td>
					</tr>

					<tr>
						<td>Téléphone</td>
						<td><input type="text" class="form-control" name="telephone" id="telephone"></td>
					</tr>

					<tr>
						<td>Voiture</td>
						<td>
							<select class="form-control" name="voiture" id="voiture">
							  <option>Hyundai i10</option>
							  <option>Hyundai i20</option>
							  <option>Hyundai i30</option>
							  <option>Dacia Logan Essence</option>
							  <option>Dacia Logan Diesel</option>
							  <option>KIA Picanto</option>
							  <option>Fiat Punto</option>
							  <option>Fiat Panda</option>
							</select>	
						</td>
					</tr>

					<tr>
						<td>Date début</td>
						<td>							
			
			                <div class="input-group date form_datetime" data-date="2013-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
			                    <input name="datedebut" id="datedebut" class="form-control" size="16" type="text" value="" readonly>
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
			                </div>
							<input type="hidden" id="dtp_input1" value="" />
            

						</td>
					</tr>

																																	<tr>
					<td>Date fin</td>
						<td>
							<div name="date-fin" class="input-group date form_datetime" data-date="2013-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
			                    <input name="datefin" id="datefin" class="form-control" size="16" type="text" value="" readonly>
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
			                </div>
							<input type="hidden" id="dtp_input1" value="" />
						</td>
					</tr>

					<tr>
						<td>E-mail</td>
						<td><input type="email" name="email" id="email" class="form-control"></td>
					</tr>

					<tr>
						<td colspan="2"><br />
							<input type='submit' class="btn btn-default right" value='Envoyer'> </td>
					</tr>
					
				</table>


					
			</form>


		</div>




		<div class="right-side right">
			<div class="block">
				<div class="dacia"></div>
				<div class="stump"></div>
				<p>
					Radio/CD, Air conditionné, ABS, 2 Airbags et Direction Assistée.
				</p>

				<h1>Caractéristiques : </h1>

				<ul class="my-liste">
					<li>Vitesse automatique : <b>Non</b></li>
					<li>Climatisation : <b>Oui</b></li>
					<li>Nombre de porte : <b>5</b></li>
					<li>Nombre de personnes : <b>5</b></li>
				</ul>

			</div>

			<div class="facebook">
				<div class="fb-like-box" data-href="https://www.facebook.com/promisecar" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
			</div>
		</div>

	</div>




</div>


<br />

	<div id="footer">	

		<p class="bigger">
			Pour toute information ou réservation notre service commercial est à votre disposition au :
			<br/>
			GSM : +212 6 76 45 82 79  -  Tél.: +212 5 22 75 86 86
			<br/>
			E-mail : <a href="mailto:contact@promisecar.com">contact@promisecar.com</a>
		</p>
	


	</div>	


<script type="text/javascript" src="js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>	
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>



</body>

</html>
