<?php require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php')?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/res/css/style.css">
	</head>
	<body>
		<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php") ?>

		<div class="content">
			<div class="map">
				<span class="tooltip" id="tip">Tooltip</span>

				<?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"]."/res/svg/illustrator_map.svg"); ?>
			</div>
				<div class="graph">
					<h2 id="sideheader"> Please select a province </h2>
						<div class="weatherdata">
							<div id="weatherpicture"> <img src="/res/img/Zon.png" ></div>
							<div id="weathertemperature"> <h1> 9° <br></h1> </div>
							<div class="weatherinfo"> <h3> Rainfall = 20% </h3><h3> Wind speed = 5 </h3> </div>
						</div>

         		</div>
			</div>
        <script src="/res/js/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script type="text/javascript" src="/res/js/map.js" ></script>
		<script type="text/javascript" src="/res/js/currentweather.js" ></script>
	</body>
	</html>