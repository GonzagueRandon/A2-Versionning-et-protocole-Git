<?php session_start(); ?>
<div class="row" style="background-color: #333;margin:0">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="topbar" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 text-center">
						<a href="index.php" class="logo"><i class="fa fa-soundcloud"></i></a>
						
					</div>
					<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">

						<a href="contact.php" class="btn">Contact</a>
                        <a href="edit_image.php" class="btn">Profil</a>

						
						

                        <?php    if (isset($_SESSION["id_member"])) {
                        ?>
                        <a href="login.php" class="btn">Se connecter</a>
                        <a href="register.php" class="btn">S'inscrire</a>
                        <?php
                        }
                        else {                x
                        ?>   
                        
                        <a href="logout.php" class="btn">Se déconnecter</a> 

                        <?php
                        }
                        ?>
						<a href="add_music.php" class="btn"><i class="fa fa-plus"></i> Ajouter une musique</a>
						<a href="addclip.php" class="btn"><i class="fa fa-plus"></i> Ajouter un clip</a>
						<a href="dashboard.php" class="btn"><i class="fa fa-plus"></i> Playlist</a>
						<a href="dashboard.php" class="btn">Accueil</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>