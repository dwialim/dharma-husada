<!DOCTYPE HTML>
<html>
<head>
	<title>Fullscreen Image Zoom and Pan with Jquery</title>
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
	<link href="{{asset('src/css/jquery.pan.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>

	<h1>Fullscreen Image Zoom and Pan with Jquery</h1>

	<p>click on images below</p>

	<hr />

	<h3>This image needs zoom and is included inside a div with a data-big attribute. Since it's a div you can click anywhere, even not in the image:</h3>
	<div class="pan" data-big="img/big1.jpg">
		<img src="{{asset('src/img/small1.jpg')}}" title="Click to zoom" />
	</div>
	<h3>This one is inside a link with a title and a target. The image is limited in size with CSS, so it needs a zoom:</h3>
	<a href="https://github.com/jmalarcon/jquery.pan" title="Visit the project's repo" target="_blank">
		<img class="pan" style="max-width:150px;" src="{{asset('src/img/big2.jpg')}}" title="Click to zoom" />
	</a>

	<h3>This one is small and no zoom is needed, so it does nothing despite being in the selection:</h3>
	<img class="pan" style="max-width:150px;" src="{{asset('src/img/small2.jpg')}}" title="Not zoom needed for this one" />

	<h3>Another couple of images, one without and the other with a wrapping link:</h3>
	<img class="pan" data-big="img/big3.jpg" src="{{asset('src/img/small3.jpg')}}"/>
	<a class="pan" data-big="img/big4.jpg" href="https://www.campusmvp.es" title="Los mejores cursos online para programadores" target="_blank">
		<img src="{{asset('src/img/small4.jpg')}}" title="Click to zoom" />
	</a>

	<h3>These three are all inside the same link. Only two need zoom, but all get the zoom applied <br>because the wrapping element is selected for zoom & pan.<br>They zoom independently but all use the common link in the viewer to navigate to the original URL:</h3>
	<a class="pan" href="https://github.com/jmalarcon/jquery.pan" target="_blank" title="Visit repo">
		<img data-big="img/big5.jpg" src="{{asset('src/img/small5.jpg')}}"/>
		<img src="{{asset('src/img/small3.jpg')}}" title="This one doesn't need a zoom"/>
		<img src="{{asset('src/img/big6.jpg')}}" style="max-width: 150px;"/>
	</a>

	<h3>This one is a single image, with its size limited by CSS:</h3>
	<img class="pan" src="{{asset('src/img/big6.jpg')}}" style="max-width: 150px;"/>

	<div id="dynImg">
		<h3>This image is dynamically loaded by JavaScript code <strong>after</strong> the zoom/pan has been already applied to the images included in the document:</h3>
	</div>

	<p>All images from <a href="http://www.freeimages.com/" target="_blank">freeimages.com</a></p>

	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="{{asset('src/js/jquery.pan.js')}}"></script>
	<script type="text/javascript">

		var options = {
			showRotationControls : true,    //If the rotation controls should be shown
			minLoadingTime: 200, //The minimum amount of time in ms the loading animation should be shown (by default it shows the images immediately)
			wheelZoomSpeed: 100, //The speed of the zoom when using the mouse wheel
		};

		$(window).on('load', function() {
			$(".pan").pan(options).each(function() {
				$(this).attr('title', 'CLICK TO ZOOM')
			})

			//Test for dynamically add a new image and apply the zoom/pan to it
			var nImg = document.createElement("img");
			nImg.onload = function(){
				console.log("Image loaded");
				$(this).pan();
			};

			nImg.setAttribute("width", "150");
			nImg.src = "src/img/big3.jpg";
			console.log(nImg)
			document.getElementById("dynImg").appendChild(nImg);
		});

	</script>

</body>