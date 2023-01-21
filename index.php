<?php

$titre = "Accueil";

// On inclut le header
include("includes/header.php");


// On inclut la navbar
include("includes/navbar.php");

?>

<section class="presentation first">
				<div class="product-presentation">
					<h1>Vivez une experience sensationnel</h1>
					<p>
					Une simple voiture telecommandé ? Non. C'est LA voiture télécommandé. Doté de tout type de capteur, vous avez la possibilité de consulté depuis n'importe quel appareil vos performance réalisé avec la voiture.
					</p>
					<button>En savoir plus</button>
					<div class="small-images">
						<div class="small">
							<img
								src="image/face_voiture.png"
							/>
						</div>
            <div class="small">
							<img
								src="image/cote_voiture.png"
							/>
						</div>
						<div class="small">
							<img
								src="image/dessus_voiture.png"
							/>
						</div>
					</div>
				</div>
				<div class="image-presentation">
					<img
						src="image/voiture.png"
					/>
				</div>
			</section>

    </header>

    <section class="presentation second">
			<div class="product-presentation">
				<p class="new">Ce qui rend le projet unique</p>
				<h1>Plus de 4 moyens de transmissions</h1>
				<p>
				Ce projet très ambitieux comporte de nombreux systèmes de communications dont la 433Mhz, 2G, Bluetooth ainsi que les sockets. Ce qui permet d'avoir la certitude que les informations récoltés par nos différents capteurs arrive à destination.
				</p>
				<button>Voir les spécifications</button>
			</div>
			<div class="image-presentation">
				<img
					src="image/telecommande.png"
				/>
			</div>
		</section>


<?php

//On se connecte a la BDD
include("connect.php");

// On inclut le footer
include("includes/footer.php");

?>