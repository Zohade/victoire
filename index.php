<?php
	if(isset($_POST['comment']) and isset($_POST['mail']))
	{
		$mail="styvoben24@gmail.com";
		$comment=nl2br(htmlspecialchars($_POST['comment']));
		if(filter_var($mail, FILTER_VALIDATE_EMAIL))
		{
			$to='zohadestyve@gmail.com';
			$subject='Commentaire sur Victoire Perles';
			$header="Content-Type: text/plain; charset=utf-8\r\n";
			$header .="From:".$mail."\r\n";
			mail($to, $subject,$comment,$header);	
		?> 
		<script> 
				alert('Votre commentaire a été bien enrégistré. Nous en tiendrons compte très prochainement ');
		</script>
		<?php
		}else {
			?> 
		<script> 
				alert('Votre adresse mail est invalide');
		</script>
		<?php
		}
	}else
	{
		?> 
		<script> 
				alert('Il se pourrait que votre commentaire soit vide');
		</script>
		<?php
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>La Victoire <strong>perles</strong></title>
	<link rel="stylesheet" type="text/css" href="victoire.css">
	<link rel="stylesheet" media="screen and (max-width:
	1280px)" href="petite_resolution.css" />
</head>
<body class="container">
	<div id="no1">Victoire Perles
	<nav>
		<ul>
			<li>Perles design <img src="image/rectangle.png" alt="photo"></li>
			<li>Coliers <img src="image/rectangle.png" alt="photo"></li>
			<li>Chaussures <img src="image/rectangle.png" alt="photo"></li>
			<li>Sacs</li>
		</ul>
	</nav>
</div>
	<header>
		<br><p class="bann"></p>
		 <div id="banni"><img src="image/tete2.png"></div><br>
	</header>
	<section>
		<article>
			<p> " Un look sans accessoires est comme un plat sans épices,
				 c'est gauche! 
			L'accessoires est tout sauf accessoires. 
			Les accessoires sont les élements incontournables d'une tenue 
			réussie : des boucles d'oreilles, un sac, des bijoux en perles 
			intensifient un look et le rendent unique. Au poignet, autour du 
			cou ou sur la tête, les accessoires de mode en perles se déclinent 
			et se multiplient au rytme des saisons et de nos envies".
			 <strong>La VICTOIRE PERLES </strong>vous propose tous les<strong> 
				accessoires en perles pour hommes, femmes et enfants </strong>à
				 des prix forfaitaires et raisonnables</p>
		</article>
	</section>
	<section>
		<p><img src="image/photo.png"></p>
				
		<figure class="disposition">
			<a  href="image/1.jpg"><img class="item1" src="image/1gr.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/photo6gr.jpg"><img class="item2" src="image/photo6.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/3.jpg"><img src="image/3gr.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/4.jpg"><img src="image/4gr.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/chas.jpg"><img src="image/photo2.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/2.jpg"><img src="image/2gr.jpg" alt="photo" title="cliquer pour aggrandir"></a>
		</figure>
		<div class="voir"><a href="victoire2.php">Voir plus</a>...</div><br>
	</section>
	<section>
		<p><img src="image/sac.png" alt="photo"></p>
	    		
        <figure>
        	<a href="image/sac3gr.jpg"><img src="image/sac3.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/5.jpg"><img src="image/5gr.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/photo.jpg"><img src="image/sac4.jpg"alt="photo"></a>
			<a href="image/7.jpg"><img src="image/7gr.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/sac2gr.jpg"><img src="image/sac2.jpg"alt="photo" title="cliquer pour aggrandir"></a>
			<a href="image/6.jpg"><img src="image/6gr.jpg" alt="photo" title="cliquer pour aggrandir"></a>
        </figure>
        <div class="voir"><a href="victoire3.php">Voir plus</a>...</div>
        <br>
        <br>
        <br>
	</section>

	<div class="abonne"> Abonnez-vous à notre page facebook pour ne rater aucune nouveauté <br><a href="https://www.facebook.com/profile.php?id=100068765543085"><img src="image/abonne_modi.png"></a></div>
	
	<form action="" method="post">
		<label for="mail"> Votre adresse mail</label><br>
		<input type="mail" name="mail" id="mail" placeholder="victoireperle@gmail.com" autofocus required><br>
		<label for="comment"> Veillez donner vos impression sur VICTOIRE PERLES <br></label>
		<textarea name="comment" id="comment" cols="50" rows="10" placeholder="Votre commentaire" required>
		</textarea><br>
		<input id="envoyer" type="image" src="image/envoyer.png" alt="Soumettre votre avis">
	</form>

    <footer> <br/>
    	 <aside> LA VICTOIRE PERLES est située au Sud du Bénin </aside>
    	 <p>Pour toutes informations supplémentaires ou pour passer
			 vos commande, contactez-nous <br/><a href="tel:+0022964366159">
		<img src="image/callicone.png" alt="photo" title="+0022964366159" >
	</a> <a href=" mailto:zohadestyve@gmail.com"><img src="image/mailicone.png" 
		alt="photo" title="zohadestyve@gmail.com"></a>
		 <a href="https://wa.me/+22991612590" > <img src="image/whaicone.png"
		 alt="photo" title="+0022991612590"></a> 
		 <a href="https://www.facebook.com/profile.php?id=100068765543085"> 
		<img src="image/fbicone.png" alt="photo" title="Victoire perles"></a>
	</p><br/>
    	 Copyright Victoire Perles - Tous droits réservés<br /> 
		 Design by<a href="https://www.facebook.com/youssouf.adam.180625" id="design" title="profile facebook">Youssouf ADAM</a>
    </footer>
</body>
</html>
