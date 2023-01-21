<?php

// On va chercher les erreurs dans la BDD mais tout d'abbord on s'y connecter
require_once("connect.php");

//On ecrit la requete
$sql = "SELECT * FROM run ORDER BY id DESC";

// On execute la requete
$requete = $bdd->query($sql);

// On recupere les donnees
$articles = $requete->fetchAll();

// on definit le titre
$titre = "Statistiques";

// On inclut le header
include("includes/header.php");


// On inclut la navbar
include("includes/navbar.php");

?>

<section class="presentation first">
				<div class="product-presentation">
					<h1>Performance et efficacité.</h1>
					<h1>Comme en F1.</h1>
					<div class="image-presentation">
					<img
						src="image/cote_voiture.png"
					/>
				</div>
			</section>

    </header>

    <section class="presentation second">
			<div class="product-presentation">
				<p class="new">Accès au données</p>
				<h1>Graphique des données récoltes</h1>
				<br>

        <table>
            <thead>
                <th>Run</th>
                <th>Date</th>
                <th>Détails</th>
            </thead>
            <tbody>
            <?php foreach($articles as $article): ?>
            <tr>
                <td><?php echo strip_tags($article['id']); ?></td>
                <td><?php $date = $article['Date']; $date_1 = explode(".", $date); echo date("d-m-Y H:i:s", intval($date_1[0])); ?></td>
                <td><a href="stats.php?id=<?= $article["id"]?>" style="text-decoration: none; color: #ccc;">Acceder au détails</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </tr>
        </table>


			</div>

		</section>



<?php


// On inclut le footer
include("includes/footer.php");

?>