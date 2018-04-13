<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
	<script>
		$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
	</script>
<style>
	div.pane {
	width: 1000px;
	margin: 0px auto;
	}
	@import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400);
		* {
		  margin: 0;
		  padding: 0;
		}
		html, body {
		  height: 100%;
		}
		section {
		  position: relative;
		  width: 100%;
		  height: 100%;
		}
		section::after {
		  position: absolute;
		  bottom: 0;
		  left: 0;
		  content: '';
		  width: 100%;
		  height: 80%;
		  background: -webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.8) 100%);
		  background: linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.8) 100%);
		}
		section h1 {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  z-index: 2;
		  -webkit-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  color: #fff;
		  font : normal 300 64px/1 'Josefin Sans', sans-serif;
		  text-align: center;
		  white-space: nowrap;
		}

		#section01 { background: url(https://i1.trekearth.com/photos/59762/img_0788.jpg) center center / cover no-repeat;}
		#section02 { background: url(https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/t/5771d8932e69cf73977b0bef/1467078805482/10461362_335777573236981_6941763225512855302_n.jpg) center center / cover no-repeat;}
		#section03 { background: url(https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/575a51ee45bf214ad4d1578e/575a540060b5e91314ef0d48/1465537538052/spicychicken.jpg?format=500w) center center / cover no-repeat;}
		#section04 { background: url(https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/575a51ee45bf214ad4d1578e/575a53fe60b5e91314ef0d38/1465537536979/waffle2.jpg?format=500w) center center / cover no-repeat;}
		#section05 { background: url(https://search.chow.com/thumbnail/640/0/www.chowstatic.com/assets/2014/11/31178_slow_cooker_pork_ramen_3000.jpg) center center / cover no-repeat;}
		#section06 { background: url(http://s3.amazonaws.com/finecooking.s3.tauntonclud.com/app/uploads/2018/01/03133110/65_ChashuRamen_WIDE.jpg) center center / cover no-repeat;}
		#section07 { background: url(https://media.blueapron.com/recipes/124/square_newsletter_images/20141219-2008-36-5366/124_hi_res.jpg) center center / cover no-repeat;}
		#section08 { background: url(https://cdn.pixabay.com/photo/2017/04/04/00/36/japanese-food-2199962_960_720.jpg) center center / cover no-repeat;}
		#section09 { background: url(http://www.japanesefoodreport.com/photos/chickennanban.JPG) center center / cover no-repeat;}
		#section10 { background: url(http://static.t13.cl/images/sizes/1200x675/1501268218-ramen.jpg) center center / cover no-repeat;}

		#thanks {
		  background-color: #fff;
		}
		#thanks::after {
		  content: none;
		}
		#thanks div {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  z-index: 2;
		  -webkit-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		#thanks h2 {
		  margin-bottom: 60px;
		  color: #333;
		  font : normal 300 64px/1 'Josefin Sans', sans-serif;
		  text-align: center;
		  white-space: nowrap;
		}
		#thanks p {
		  color: #333;
		  font : normal 400 20px/1 'Josefin Sans', sans-serif;
		}
		#thanks p a {
		  color: #333;
		  text-decoration: none;
		  transition: color .3s;
		}
		#thanks p a:hover {
		  color: #888;
		}
		.demo a {
		  position: absolute;
		  bottom: 20px;
		  left: 50%;
		  z-index: 2;
		  display: inline-block;
		  -webkit-transform: translate(0, -50%);
		  transform: translate(0, -50%);
		  color: #fff;
		  font : normal 400 20px/1 'Josefin Sans', sans-serif;
		  letter-spacing: .1em;
		  text-decoration: none;
		  transition: opacity .3s;
		}
		.demo a:hover {
		  opacity: .5;
		}



		#section01 a {
		  padding-top: 60px;
		}
		#section01 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 24px;
		  height: 24px;
		  margin-left: -12px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  box-sizing: border-box;
		}



		#section02 a {
		  padding-top: 60px;
		}
		#section02 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 46px;
		  height: 46px;
		  margin-left: -23px;
		  border: 1px solid #fff;
		  border-radius: 100%;
		  box-sizing: border-box;
		}
		#section02 a span::after {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  content: '';
		  width: 16px;
		  height: 16px;
		  margin: -12px 0 0 -8px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  box-sizing: border-box;
		}



		#section03 a {
		  padding-top: 60px;
		}
		#section03 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 46px;
		  height: 46px;
		  margin-left: -23px;
		  border: 1px solid #fff;
		  border-radius: 100%;
		  box-sizing: border-box;
		}
		#section03 a span::after {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  content: '';
		  width: 16px;
		  height: 16px;
		  margin: -12px 0 0 -8px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  box-sizing: border-box;
		}
		#section03 a span::before {
		  position: absolute;
		  top: 0;
		  left: 0;
		  z-index: -1;
		  content: '';
		  width: 44px;
		  height: 44px;
		  box-shadow: 0 0 0 0 rgba(255,255,255,.1);
		  border-radius: 100%;
		  opacity: 0;
		  -webkit-animation: sdb03 3s infinite;
		  animation: sdb03 3s infinite;
		  box-sizing: border-box;
		}
		@-webkit-keyframes sdb03 {
		  0% {
		    opacity: 0;
		  }
		  30% {
		    opacity: 1;
		  }
		  60% {
		    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
		    opacity: 0;
		  }
		  100% {
		    opacity: 0;
		  }
		}
		@keyframes sdb03 {
		  0% {
		    opacity: 0;
		  }
		  30% {
		    opacity: 1;
		  }
		  60% {
		    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
		    opacity: 0;
		  }
		  100% {
		    opacity: 0;
		  }
		}



		#section04 a {
		  padding-top: 60px;
		}
		#section04 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 24px;
		  height: 24px;
		  margin-left: -12px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  -webkit-animation: sdb04 2s infinite;
		  animation: sdb04 2s infinite;
		  box-sizing: border-box;
		}
		@-webkit-keyframes sdb04 {
		  0% {
		    -webkit-transform: rotate(-45deg) translate(0, 0);
		  }
		  20% {
		    -webkit-transform: rotate(-45deg) translate(-10px, 10px);
		  }
		  40% {
		    -webkit-transform: rotate(-45deg) translate(0, 0);
		  }
		}
		@keyframes sdb04 {
		  0% {
		    transform: rotate(-45deg) translate(0, 0);
		  }
		  20% {
		    transform: rotate(-45deg) translate(-10px, 10px);
		  }
		  40% {
		    transform: rotate(-45deg) translate(0, 0);
		  }
		}



		#section05 a {
		  padding-top: 70px;
		}
		#section05 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 24px;
		  height: 24px;
		  margin-left: -12px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  -webkit-animation: sdb05 1.5s infinite;
		  animation: sdb05 1.5s infinite;
		  box-sizing: border-box;
		}
		@-webkit-keyframes sdb05 {
		  0% {
		    -webkit-transform: rotate(-45deg) translate(0, 0);
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    -webkit-transform: rotate(-45deg) translate(-20px, 20px);
		    opacity: 0;
		  }
		}
		@keyframes sdb05 {
		  0% {
		    transform: rotate(-45deg) translate(0, 0);
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    transform: rotate(-45deg) translate(-20px, 20px);
		    opacity: 0;
		  }
		}



		#section06 a {
		  padding-top: 70px;
		}
		#section06 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 24px;
		  height: 24px;
		  margin-left: -12px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotateZ(-45deg);
		  transform: rotateZ(-45deg);
		  -webkit-animation: sdb06 1.5s infinite;
		  animation: sdb06 1.5s infinite;
		  box-sizing: border-box;
		}
		@-webkit-keyframes sdb06 {
		  0% {
		    -webkit-transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    -webkit-transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
		    opacity: 0;
		  }
		}
		@keyframes sdb06 {
		  0% {
		    transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
		    opacity: 0;
		  }
		}



		#section07 a {
		  padding-top: 80px;
		}
		#section07 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 24px;
		  height: 24px;
		  margin-left: -12px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  -webkit-animation: sdb07 2s infinite;
		  animation: sdb07 2s infinite;
		  opacity: 0;
		  box-sizing: border-box;
		}
		#section07 a span:nth-of-type(1) {
		  -webkit-animation-delay: 0s;
		  animation-delay: 0s;
		}
		#section07 a span:nth-of-type(2) {
		  top: 16px;
		  -webkit-animation-delay: .15s;
		  animation-delay: .15s;
		}
		#section07 a span:nth-of-type(3) {
		  top: 32px;
		  -webkit-animation-delay: .3s;
		  animation-delay: .3s;
		}
		@-webkit-keyframes sdb07 {
		  0% {
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0;
		  }
		}
		@keyframes sdb07 {
		  0% {
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0;
		  }
		}



		#section08 a {
		  padding-top: 60px;
		}
		#section08 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 30px;
		  height: 50px;
		  margin-left: -15px;
		  border: 2px solid #fff;
		  border-radius: 50px;
		  box-sizing: border-box;
		}
		#section08 a span::before {
		  position: absolute;
		  top: 10px;
		  left: 50%;
		  content: '';
		  width: 6px;
		  height: 6px;
		  margin-left: -3px;
		  background-color: #fff;
		  border-radius: 100%;
		  box-sizing: border-box;
		}



		#section09 a {
		  padding-top: 80px;
		}
		#section09 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 30px;
		  height: 50px;
		  margin-left: -15px;
		  border: 2px solid #fff;
		  border-radius: 50px;
		  box-sizing: border-box;
		}
		#section09 a span::before {
		  position: absolute;
		  top: 10px;
		  left: 50%;
		  content: '';
		  width: 6px;
		  height: 6px;
		  margin-left: -3px;
		  background-color: #fff;
		  border-radius: 100%;
		  box-sizing: border-box;
		}
		#section09 a span::after {
		  position: absolute;
		  bottom: -18px;
		  left: 50%;
		  width: 18px;
		  height: 18px;
		  content: '';
		  margin-left: -9px;
		  border-left: 1px solid #fff;
		  border-bottom: 1px solid #fff;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  box-sizing: border-box;
		}



		#section10 a {
		  padding-top: 60px;
		}
		#section10 a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 30px;
		  height: 50px;
		  margin-left: -15px;
		  border: 2px solid #fff;
		  border-radius: 50px;
		  box-sizing: border-box;
		}
		#section10 a span::before {
		  position: absolute;
		  top: 10px;
		  left: 50%;
		  content: '';
		  width: 6px;
		  height: 6px;
		  margin-left: -3px;
		  background-color: #fff;
		  border-radius: 100%;
		  -webkit-animation: sdb10 2s infinite;
		  animation: sdb10 2s infinite;
		  box-sizing: border-box;
		}
		@-webkit-keyframes sdb10 {
		  0% {
		    -webkit-transform: translate(0, 0);
		    opacity: 0;
		  }
		  40% {
		    opacity: 1;
		  }
		  80% {
		    -webkit-transform: translate(0, 20px);
		    opacity: 0;
		  }
		  100% {
		    opacity: 0;
		  }
		}
		@keyframes sdb10 {
		  0% {
		    transform: translate(0, 0);
		    opacity: 0;
		  }
		  40% {
		    opacity: 1;
		  }
		  80% {
		    transform: translate(0, 20px);
		    opacity: 0;
		  }
		  100% {
		    opacity: 0;
		  }
		}
	</style>

</head>
<body>
<section id="section01" class="demo">
	   <CENTER>
  <strong><h1>The Ramen Shop</h1></strong>

  <a href="#section02"><span></span>Ramens</a>

	</CENTER>
</section>
 



<div class="jumbotron" style="margin-top:10px;margin-bottom: -20px")>
	<br><br><br><br><br><br><br><br><br><br><br>
  <CENTER><div class="row">
 			<div style="text-align: center;margin-top: -140;margin-right: 200px;margin-left:200px">	
  			<h1 style="font-size:50px;font-family: sans-serif;">RESPECT FOR TRADITION</h1>
			<h4 style="padding:30px">We follow the same principles as a ramen shop in Japan however we are not looking to replicate their flavour, but create our own.<br><br>
			We made our noodles in house in the style of traditional chukamen, using only flour and alkaline water.</h4>
			<hr>
			<h1> Menu </h1>

				<center>
					<div class="row">
					<div class="col-sm6">
				<div class="form-group" style="margin-top: 50px;width:300px;padding:10px">
					 <hr>
			      <label for="exampleSelect2"><h3>Ramens</h3></label>
			      <select multiple="" class="form-control" id="exampleSelect2">
			        <option>Tonkotsu $13</option>			        
			        <option>Spicy Tonkotsu $14.5</option>
			        <option>Spicy Chicken $14.5</option>
			        <option>Lemon Chicken $16.5</option>
			        <option>Shoyu Shiitake $13</option>
			      </select>
			    </div>
			     <hr>
			</div>
			<div class="col-sm6">
			    <div class="form-group" style="margin-top: 50px;width:300px;padding:10px">
			    	 <hr>
			      <label for="exampleSelect2"><h3>Snacks</h3></label>
			      <select multiple="" class="form-control" id="exampleSelect2">
			        <option>Sesame Crisps $3.5</option>			        
			        <option>Fresh Veg & Wasabi Mayo $4.5</option>
			        <option>Spicy Chicken $14.5</option>
			        <option>Lemon Chicken $16.5</option>
			        <option>Shoyu Shiitake $13</option>
			      </select>
			    </div>	
			     <hr>
			  </div>
			  	<div class="col-sm6">

			    <div class="form-group" style="margin-top: 50px;width:300px;padding:10px">
			    	 <hr>
			      <label for="exampleSelect2"><h3>Rice Bowls</h3></label>
			      <select multiple="" class="form-control" id="exampleSelect2">
			        <option>Braised Pork & Kimchi $13.5</option>			        
			        <option>Spicy Chicken Mince & Egg $13.5</option>
			        <option>Tofu, Mixed Mushroom & Eggplant (v*) $12.5</option>
			        <option>Lemon Chicken $16.5</option>
			        <option>Shoyu Shiitake $13</option>
			      </select>

			    </div>	
			    <hr>
			  </div>
			  </div>  
			  	<button type="button" class="btn btn-primary btn-lg"><h6 style="color:white" btn-link" onclick="window.location.href='/code/menu.php'">Order Now</h6></button>
			    <center>
			</div>

			
		</div>
	</CENTER>
	
</div>


<section id="section02" class="demo">
  <h1>Menu</h1>
  <a href="#section03"><span></span>Scroll</a>
</section>
<section id="section03" class="demo">
  <h1>Lemon Chicken</h1>
  <a href="#section04"><span></span>Scroll</a>
</section>
<section id="section04" class="demo">
  <h1>Pork Ramen</h1>
  <a href="#section05"><span></span>Scroll</a>
</section>
<section id="section05" class="demo">
  <h1>Chashu Ramen</h1>
  <a href="#section06"><span></span>Scroll</a>
</section>
<section id="section06" class="demo">
  <h1>Braised Pork Belly Ramen</h1>
  <a href="#section07"><span></span>Scroll</a>
</section>
<section id="section07" class="demo">
  <h1>Miso Ramen</h1>
  <a href="#section08"><span></span><span></span><span></span>Scroll</a>
</section>
<section id="section08" class="demo">
  <h1>Beef Ramen</h1>
  <a href="#section09"><span></span>Scroll</a>
</section>
<section id="section09" class="demo">
  <h1>Shoyu Ramen</h1>
  <a href="#section10"><span></span>Scroll</a>
</section>
<section id="section10" class="demo">
  <h1>King Ramen</h1>
  <a href="#thanks"><span></span>Scroll</a>
</section>
<section id="thanks">
  <div>
    <h2>Hungry Yet?</h2>
    			  	<button type="button" class="btn btn-primary btn-lg"><h6 style="color:white" btn-link" onclick="window.location.href='http://localhost/cidemo/index.php/form/form_dropdown'">Order Now</h6></button>
  </div>
</section>
		<!--
		<div class="row">
			<div class="gallery" >
			  <a target="_blank" href="fjords.jpg">
			    <img src="https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/575a51ee45bf214ad4d1578e/575a540060b5e91314ef0d48/1465537538052/spicychicken.jpg?format=500w" alt="Fjords" width="500" height="300">
			  </a>

			</div>

			<div class="gallery">
			  <a target="_blank" href="forest.jpg">
			    <img src="https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/575a51ee45bf214ad4d1578e/575a540045bf214ad4d15dd0/1465537539431/shiotonkotsu.jpg?format=500w" alt="Forest" width="300" height="200">
			  </a>

			</div>

			<div class="gallery">
			  <a target="_blank" href="lights.jpg">
			    <img src="https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/575a51ee45bf214ad4d1578e/575a53fe60b5e91314ef0d38/1465537536979/waffle2.jpg?format=500w" alt="Northern Lights" width="300" height="200">
			  </a>

			</div>

			<div class="gallery">
			  <a target="_blank" href="forest.jpg">
			   <img src="https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/575a51ee45bf214ad4d1578e/575a540045bf214ad4d15dd0/1465537539431/shiotonkotsu.jpg?format=500w" alt="Forest" width="300" height="200">
			  </a>
			</div>


	</div>
	<center>
		  <p class="lead">
		    <a class="btn btn-primary btn-lg" href="#" role="button">Order Now</a>
		  </p>
		</center>
		<br>
		<br>
	-->
</body>
</html>

