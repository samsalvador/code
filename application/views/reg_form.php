<html>
	<head>
		<title>Menu</title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>acript/script.js"></script>
			<style>
					div.pane {
					width: 1000px;
					margin: 0px auto;
					}
					body { 
					  background: url(https://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/t/5771d8932e69cf73977b0bef/1467078805482/10461362_335777573236981_6941763225512855302_n.jpg) no-repeat center center fixed; 
					  -webkit-background-size: cover;
					  -moz-background-size: cover;
					  -o-background-size: cover;
					  background-size: cover;
					}
					.display-3{
                		font-size: 80px;
                		margin-top: 240px;
                		font-weight: bold;
                		font-family: sans-serif;
                	}
                	div.gallery {
					    margin: 150px;
					    border: 1px solid #ccc;
					    float: left;
					    width: 380px;
					    margin-right: auto;
					    margin-left:auto;

					}

					div.gallery:hover {
					    border: 1px solid #777;
					}

					div.gallery img {
					    width: 100%;
					    height: auto;

					}

					div.desc {
					    padding: 15px;
					    text-align: center;
					}	
		</style>
	</head>
	<body>

			<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="padding-left:140px;height:90px">
				  <a class="navbar-brand" href="/code/index.php"><img src="http://static1.squarespace.com/static/531c07b6e4b04c1bc678e0e6/t/5771d811e58c622f5581d8dd/1517514907424/?format=1500w" style="height: 70px; width: 180px"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarColor01">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="/cidemo">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="/cidemo/index.php/menu">Menu</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="section02">Order Now</a>
				      </li>
				    </ul>
				  </div>
			</nav>

			<CENTER><strong><h1 class="display-3" style="color:white;">MENU</h1></strong></CENTER>

	<div class="jumbotron" style="margin-top:280px;margin-bottom: -20px")>
				<br><br><br><br><br><br><br><br><br><br><br>
		 <CENTER>
		 	<div class="row">
		 		<div style="text-align: center;margin-top: -140;margin-right: 0px;margin-left:470px">	
		  			<h1 style="font-size:50px;font-family: sans-serif;">Order Now</h1>			
					<div id="message"></div>
					<hr>
						<?php
							echo "<h3>Payment</h3>";
							echo form_open('form/data_submitted');
							$options = array(
								'Cash on Delivery' => 'Cash on Delivery',
								'Credit/Debit Card' => 'Credit/Debit Card',
								'Paypal' => 'Paypal',
								'E-wallet' => 'E-wallet',
							);
							echo "<div class='drop_pos'>";
							echo form_dropdown('Department', $options, 'Computer Science Engineering', 'class="dropdown_box1"');
							if (isset($result)) {
								$db_value = array();

							foreach ($result as $value) {
								$db_value[] = $value;
							}
							$single_sel = $db_value[0];
							//Converting string to array
							$mul_selection = unserialize($db_value[1]);
						}
						if (isset($single_sel)) {
							echo "<hr>";
							echo "<p><b>You have selected :</b>&nbsp;&nbsp;";
							echo "<ul>";
							echo "<li>" . $single_sel . "</li>";
						}
							echo "</p>";
							echo "</ul>";
							echo "</div>";
							echo "<hr/>";
						?>
					<?php
						echo "<h3>Ramen</h3>";
						$options = array(
							'$3.99 Shoyu Ramen' => '$3.99  Shoyu Ramen  ',
							'$5.99 Miso Ramen' => '$5.99  Miso Ramen  ',
							'$2.99 Chashu Ramen' => '$2.99  Chashu Ramen  ',
							'$6.99 Beef Ramen' => '$6.99  Beef Ramen  ',
							'$3.99 Braised Pork Ramen' => '$3.99  Braised Pork Ramen  ',
							'$5.99 Shiitake Ramen' => '$5.99 Shiitake Ramen  '
						);
						$selected = array('Shoyu Ramen','Shiitake Ramen');
							echo "<div class='drop_pos'>";
							echo "<p><font color='grey'><b>Tip:</b></font>&nbsp;&nbsp;<b>(To Select Multiple Order Press ctrl+left click)</b></p>";
							echo form_dropdown('Technical_skills[]', $options, $selected, 'class="dropdown_box2"');
						if (isset($mul_selection)) {
							echo "<hr>";
							echo "<p><b>Your Order:</b>";
							echo "<ul>";
						foreach ($mul_selection as $value) {
							echo "<li>" . $value . "</li>";

						}
						}
						echo "</ul>";
						echo "</p>";
						echo "</div>";
					?>
					<hr>
					<div id="form_button">
						<?php echo form_submit('submit', 'submit', 'class="submit"'); ?>
					</div>
						<?php echo form_close(); ?>
				</div>
			</div>		
		</CENTER>
				
	</div>
	
	</body>
</html>