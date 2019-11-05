<?php require_once('./includes/connect.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio :: NSoulaimana</title>
	<link rel="icon" type="image/png" href="./img/website/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900|Indie+Flower&display=swap&subset=latin-ext" rel="stylesheet">

</head>
<body>
	<main>
		<header>
			<div class="opacity"></div>
			<div id="title">
				<a href="#"><img src="./img/website/logo.png"></a>
				<h1>NADJI SOULAIMANA</h1>
				<h2>Developpeur Web Junior</h2>
			</div>
		</header>
		<div class="opp">
			<div class="opp_"></div>
		</div>
			<div class="navbar">
				<div class="toggle_btn">
					<span></span>
				</div>
				<a href="#"><h2>FHU</h2></a>
			</div>
			<nav class="twonav">
				<a href="#"><img class="nav_logo" src="./img/website/logo.png"></a>
				<ul>
					<a class="option_a" href="#pres"><li>PRESENTATION</li></a>
					<a class="option_b" href="#techno"><li>TECHNOS</li></a>
					<a class="option_c" href="#project"><li>PROJET</li></a>
					<a class="option_d" href="#propos"><li>A PROPOS</li></a>
					<a class="option_e" href="#contact_res"><li>CONTACT</li></a>
				</ul>
				<div>
					<a href=""><img src="./img/website/logo.png"></a>
					<h4>© COPYRIGHT 2019</h4>
				</div>
			</nav>
		<!-- PRESENTATION -->
		<section id="pres">
			<h2 class="h">PRESENTATION</h2>
			<article class="verse">
				<div class="verse_">
					<div>	
						<p>
							Je m'appelle Soulaimana Nadji, j'ai 22 ans et originaire de l'Île de la Réunion.
						</p>
						<p>
							Ayant toujours été attiré par l'informatique, je suis actuellement en réorientation professionnelle et c'est donc tout naturellement que je me suis tourné vers le developpement web.
							Ainsi, je me forme actuellement et recherche un stage pour valider mon titre professionnel de niveau BAC+2 reconnu par la RNCP.
						</p>
					</div>
					<a class="button_" target="_blank" href="./files/cv_nsoulaimana.pdf">Telecharger mon CV</a>
				</div>
				<img src="./img/website/tech.jpg"> <!-- snap.jpg -->
			</article>
			<article class="reverse">
				<div>
					<h2>SIMPLON</h2>
					<h3>Qu'est-ce que Simplon ?</h3>
					<p>
						Simplon.co, créé en 2013, est un réseau de fabriques solidaires et inclusives qui propose des formations gratuites aux métiers du numérique. Implantés un peu partout en France et à l’étranger, nous aimons révéler les talents éloignés de l’emploi ou issus de territoires en difficulté avec un objectif de parité hommes-femmes.
					</p>

					<h3> Formation Dev Web : Une journée type ?</h3>
					<p>
						La journée commence généralement par une veille informatique.
						Puis, continue sur de la théorie
						L'après-midi, on se focalise généralement sur des projets.
					</p>
				</div>
				<a target="_blank" href="https://simplon.co/"><img src="./img/website/simplon.png"></a>
		</section>
		<!-- LES TECHNOS -->
		<section id="techno">
			<h2 class="h">TECHNO</h2>
			<article>
				<div class="tec">
					<div>
						<img title="HTML" alt="LOGO HTML" src="./img/techno/html.png">
						<div class="back_"><span>90%</span>
							<div class="back html"></div>
						</div>
					</div>
					<div>
						<img title="CSS" alt="LOGO CSS" src="./img/techno/css.png">
						<div class="back_"><span>70%</span>
							<div class="back css"></div>
						</div>
					</div>
				</div>

				<div class="tec">
					<div>
						<img title="PHP" alt="LOGO PHP" src="./img/techno/php.png">
						<div class="back_"><span>60%</span>
							<div class="back php"></div>
						</div>
					</div>
					<div>
						<img title="JS" alt="LOGO JS" src="./img/techno/js.png">
						<div class="back_"><span>20%</span>
							<div class="back js"></div>
						</div>
					</div>
				</div>
				<div class="tec">
					<div>
						<img title="WORDPRESS" alt="LOGO WORDPRESS" src="./img/techno/wordpress.png">
						<div class="back_"><span>50%</span>
							<div class="back wp"></div>
						</div>
					</div>
					<div>
						<img title="SYMFONY" alt="LOGO SYMFONY" src="./img/techno/php.png">
						<div class="back_"><span>10%</span>
							<div class="back php"></div>
						</div>
					</div>
				</div>
				<div class="tec">
					<div>
						<img title="SQL" alt="LOGO SQL" src="./img/techno/sql.png">
						<div class="back_"><span>60%</span>
							<div class="back sql"></div>
						</div>
					</div>
					<div>
						<img title="WORDPRESS" alt="LOGO WORDPRESS" src="./img/techno/wordpress.png">
						<div class="back_"><span>50%</span>
							<div class="back wp"></div>
						</div>
					</div>
				</div>
			</article>
			<div class="opquast">
				<img src="./img/techno/opquast.png">
				<div>
					<p>Des bonnes pratiques utilisées par la communauté des meilleurs professionnels du secteur</p>
					<p>Une certification de compétences officielle, reconnue à l’inventaire national des certifications professionnelle et déjà suivie par des milliers de certifiés</p>
					<p>Un écosystème d’agences, d’écoles, de centres de formation et d’entreprises qui appliquent les bonnes pratiques et améliorent le Web.</p>
				</div>
			</div>
		</section>
		<!-- CREATION -->
		<section id="project">
			<h2 class="h">PROJET</h2>
			<article>
					<?php

						$sql = "SELECT * FROM project";
						$select = mysqli_query($cnx, $sql);
						
						while($s = mysqli_fetch_assoc($select)){
					?>
					<div class="proj">
						<div class="proj_">
							<div class="view"><p>CLIQUER ICI POUR VOIR +</p></div>
							<a target="_blank" href="./files/<?php echo $s['ddl']; ?>">
									<img title="" alt="Logo de projet : <?php echo $s['description'];?>" src="./img/project/<?php echo $s['url']; ?>">
							</a>
						</div>
						<div class="_proj">
							<h3><?php echo $s['name']; ?></h3>
							<p><?php echo $s['description']; ?><a target="_blank" href="<?php echo $s['git'];?>">Lien Git</a></p>
						</div>
						
					</div>
					<?php
						}
					?>
			</article>
		</section>
		<section id="propos">
			<h2 class="h">A PROPOS</h2>
			<article>
				<p>Je m'appelle Soulaimana Nadji, j'ai 22 ans et originaire de l'Île de la Réunion. Ayant toujours été attiré par l'informatique, je suis actuellement en réorientation professionnelle et c'est donc tout naturellement que je me suis tourné vers le developpement web. Ainsi, je me forme actuellement et recherche un stage pour valider mon titre professionnel de niveau BAC+2 reconnu par la RNCP.</p>
			</article>
			<article>
				<h2>PASSIONS</h2>
				<h3>DESSIN</h3>
				<div>
					<a href="./img/about_me/glav.jpg" target="_blank"><img src="./img/about_me/glav.jpg"></a>
					<a href="./img/about_me/glav.jpg" target="_blank"><img src="./img/about_me/glav.jpg"></a>
					<a href="./img/about_me/glav.jpg" target="_blank"><img src="./img/about_me/glav.jpg"></a>
					<a href="./img/about_me/glav.jpg" target="_blank"><img src="./img/about_me/glav.jpg"></a>
				</div>
			</article>
		</section>
		<!-- CONTACT + RESEAUX SOCIAUX -->
		<section id="contact_res">
			<div class="res_contact">
				<!-- Substitut Contact -->
					<div class="res_cont">
						<img src="./img/website/tof.png">
						<div>
							<h3>CONTACT</h3>
							<a alt="nadji.soulaimana@gmail.com" href="mailto:nadji.soulaimana@gmail.com"><img src="./img/website/gmail.png"></a>
							<a alt="07.66.13.29.28" href="tel:+33766132928"><img src="./img/website/phone.png"></a>
						</div>
					</div>
				<!-- RESEAUX SOCIAUX -->
				<div id="network">
					<h2>ME REJOINDRE</h2>
					<div>
						<figure>
							<a target="_blank" href="https://www.linkedin.com/in/nadji-soulaimana-362b6a18a/"><img src="./img/social_network/linkedin.png"></a>
							<a target="_blank" href="https://www.linkedin.com/in/nadji-soulaimana-362b6a18a/"><figcaption>LinkedIn</figcaption></a>
						</figure>
						<figure>
							<a target="_blank" href="https://www.facebook.com/profile.php?id=100019787359421"><img src="./img/social_network/facebook.png"></a>
							<a target="_blank" href="https://www.facebook.com/profile.php?id=100019787359421"><figcaption>Facebook</figcaption></a>
						</figure>
						<figure>
							<a target="_blank" href=""><img src="./img/social_network/github.png"></a>					
							<a target="_blank" href=""><figcaption>Github</figcaption></a>
						</figure>
						<figure>
							<a target="_blank" href=""><img src="./img/social_network/twitter.png"></a>						
							<a target="_blank" href=""><figcaption>Twitter</figcaption></a>
						</figure>
					</div>
				</div>
			</div>
		</section>
		<section>
			<?php echo $msg; ?>
			<form method="POST" action="mail.php">
				<input type="text" name="firstname" placeholder="Prenom"><br/>
				<input type="text" name="lastname" placeholder="Nom"><br/>
				<input type="text" name="email" placeholder="Email"><br/>
				<input type="text" name="subject" placeholder="Sujet"><br/>
				<textarea name="message" placeholder="Votre message ..."></textarea><br/>
				<input type="submit" name="submit" value="Envoyer">
			</form>
		</section>
	</main>
	<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>