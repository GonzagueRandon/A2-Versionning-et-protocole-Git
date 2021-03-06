<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Soundcloud</title>
  <meta name="keywords" content="Web, Attraction, Space Mountain 2, sensation forte, DISNEYLAND, Paris, HTML,CSS,JavaScript, fête foraine,Parc d'attraction, réferencement ">
  <meta name="author" content="Devwen Corp">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body>


  <!-- Navbar -->



<div class="top-titre">
    <div class="container">
        <div class="row">
            <div class="titretop ">
              <h2>Contact</h2>
          </div>
      </div>
  </div>
</div>

<!-- Formulaire de Contact -->

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>We are listening to you</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">
                                                Subject</label>
                                                <select id="subject" name="subject" class="form-control" required="required">
                                                    <option value="na" selected="">Choose One:</option>
                                                    <option value="service">General Customer Service</option>
                                                    <option value="suggestions">Suggestions</option>
                                                    <option value="product">Product Support</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Message</label>
                                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                    placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                                    Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <form>
                                        <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                                        <address>
                                            <strong>IIM, Inc.</strong><br>
                                            Pôle universitaire Léonard-de-Vinci <br>
                                            12, avenue Léonard-de-Vinci<br>
                                            Courbevoie, 92400<br>
                                            <abbr title="Phone">
                                                Tel:</abbr>
                                                0606060606
                                            </address>
                                            <address>
                                                <strong>Adam Benhaddou</strong><br>
                                                <a href="mailto:#">SoundCloud</a>
                                            </address>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- /.Formulaire de CONTACT -->




                  </body>
                  </html>