<!DOCTYPE html>
<html>
<head>
	<title>SemaPhone HUAWEI</title>
	<link rel="stylesheet" type="text/css" href="source/css/style.css">
	<link href="source/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="source/css/grayscale.min.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	 <script>
      $(document).ready(function(){
        // Set trigger and container variables
        var trigger = $('#pnav  a'),
            container = $('#content');

        // Fire on click
        trigger.on('click', function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');

          // Load target page into container
          container.load(target + '.php');

          // Stop normal link behavior
          return false;
        });
      });
    </script>
</head>
<body>
	<div id="header">
					<ul>
  						<li><a href="#top">Home</a></li>
  						<li><a href="#produk">Produk</a></li>
  						<li><a href="#outlet">Outlet</a></li>
  						<li><a href="#about">About</a></li>
					</ul>
	</div>
	<div class="content" id="top" style="padding-top:130px; color:black; font-size:15px;"><marquee><h2>SELAMAT DATANG,<?php echo $_POST["name"]; ?>!<br>
 Your mail is <?php echo $_POST["email"]; ?>.</h2></marquee></div>
	<div class="content" id="produk">
			<div class="dropdown">
 				<button class="dropbtn">Product Menu</button>
  					<div class="dropdown-content" id="pnav">
    					<a href="#" data-target="HuaweiPSlider">P SERIES</a>
    					<a href="#" data-target="HuaweiYslider">Y SERIES</a>
    					<a href="#" data-target="HuaweiHSlider">HONOR SERIES</a>
  					</div>
			</div>
			<div id="content">
				<?php include 'produk.php'; ?>
			</div>
	</div>
	<div class="content" id="outlet">
		<div class="outlet" id="box"></div>

    <script>
      function initMap() {
				// map option
        var Semarang= {
          zoom:14,
          center:{lat: -6.990496, lng: 110.422940}
        }
				//new map
        var map = new
        google.maps.Map(document.getElementById('box'), Semarang);

				//marker
				var marker = new google.maps.Marker({
					position:{lat: -6.988654,lng:110.423266},
					map:map,
				});

				var plaza = new google.maps.Marker({
					position:{lat: -6.990446,lng:110.424115},
					map:map,
				});
				//info window
				var infoWindowCL = new google.maps.InfoWindow({
					content:'Jaka Cell Citra mall lt.Dasar<br>Semarang Sinar Mas Cell 3 Citraland Mall Lt. Dasar no 74'
				});

				var infoWindowPlaza = new google.maps.InfoWindow({
					content:'Semarang Sinar Mas Cell 1 Plaza Simpang Lima Lt.Dasar<br>Semarang Sinar Mas Cell 2 Plaza Simpang Lima Lt.1<br>Semarang Sentra Cell Plaza Simpang Lima Lt.1 no.155<br>Semarang SMS Shop 1 Plaza Simpang Lima Lt.Dasar<br>Semarang SMS Shop 2 Plaza Simpang Lima Lt.Dasar<br>Semarang SMS Shop 3 Plaza Simpang Lima Lt.1'
				});

				marker.addListener('click', function(){
					infoWindowCL.open(map, marker);
				});

				plaza.addListener('click', function(){
					infoWindowPlaza.open(map, plaza);
				});
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDisjqCjXSpis85yutWz2w8Mnf0rt1blM&callback=initMap">
    </script>
		</script>
	</div>
	<div class="content" id="about">
		<section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact SemaPhone</h2>
            <p>Feel free to leave us a comment, and if u want to contact us, click on the Social Media below
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/baihaqilp" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/BlackrockDigital/startbootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google+</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

	</div>
</body>
</html>
