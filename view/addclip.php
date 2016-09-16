   
      <body>
       
        <link rel="stylesheet" href="view/css/main.css">
    <link rel="stylesheet" href="view/css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="view/css/libs/animate.css">
	<link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css">    
	<?php include '_topbar.php'; ?>
	<div class="row" style="background-color: #333;margin:0">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="topbar" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 text-center">
                        <a href="index.php" class="logo"><i class="fa fa-soundcloud"></i></a>
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <a href="logout.php" class="btn">Déconnexion</a>
                        <a href="contact.php" class="btn"> contact</a>
                        <a href="edit_image.php" class="btn">Profil</a>
                        <a href="add_music.php" class="btn"><i class="fa fa-plus"></i> Ajouter une musique</a>
                        <a href="addclip.php" class="btn"><i class="fa fa-plus"></i> Ajouter un clip</a>
                        <a href="dashboard.php" class="btn"> Ma playlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="musicfeed">
					<h1><i class="fa fa-plus"></i> Ajouter un clip</h1>
					<div class="block animated fadeInDown">
						<div class="row">
							<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
								<?php
								if(isset($error) && !empty($error)){
                                        echo '
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										'.$error.'
									</div>';
								}
								?>
								<form action="add_music.php" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title">Titre du clip</label>
										<input type="text" name="title" class="form-control">
									</div>
									<div class="form-group">
										<label for="file">Clip</label>
										<input type="file" name="music">
										<p>
											Extensions autorisées : .avi, 
										</p>
									</div>
									<p class="clearfix"><button type="submit" class="valid pull-right"><i class="fa fa-check"></i>Envoyer</button></p>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include '_footer.php';
?>