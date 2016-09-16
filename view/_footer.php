	<!-- Javascript Libs -->
	<script src="view/js/libs/jquery-2.1.0.min.js"></script>
	<script src="view/js/libs/bootstrap.min.js"></script>
	<script src="view/js/libs/midway.min.js"></script>

	<script src="view/js/main.js"></script>
<link rel="stylesheet" href="../view/css/main.css">
	<?php if(basename($_SERVER['PHP_SELF']) == 'dashboard.php'){ ?>
	<audio preload></audio>

	<script src="view/js/libs/audiojs/audio.min.js"></script>
	<script>
		$(function() {
			// Setup the player to autoplay the next track
			var a = audiojs.createAll({
				trackEnded: function() {
					var next = $('.playing').next();
					if (!next.length) next = $('#musicfeed .music').first();
					next.addClass('playing').siblings().removeClass('playing');
					audio.load(next.attr('data-src'));
					audio.play();
				}
			});

			// Load in the first track
			var audio = a[0];

			// Load in a track on click
			$('#musicfeed .music').click(function(e) {
				$(this).addClass('playing').siblings().removeClass('playing');
				audio.load($(this).attr('data-src'));
				audio.play();
			})
		});
	</script>
	<?php } ?>

<<<<<<< HEAD

</body>

=======
<a style="margin-left: 50%;">
       <a href="https://www.facebook.com/">
<img src="images/FBlogo.jpg "  style="width:50px;height:50px; "/>
</a>
      <a href="https://www.twitter.com/">
<img src="images/TWlogo.jpg "  style="width:50px;height:50px;"/>
</a>
      <a href="https://www.instagram.com/">
<img src="images/INSTAlogo.jpg " style="width:50px;height:50px;"/>
</a>
</a>
     

</body>



    

>>>>>>> cb0bad18fa3705ba0c95ad50906bee2887c20d4a
</html>