<html>
	<?php
		function raiseState() {
			$myfile = fopen("state.txt", "r") or die("Unable to open file!");
			$state = fread($myfile,filesize("state.txt"));
			fclose($myfile);
			$myfile = fopen("state.txt", "w") or die("Unable to open file!");
			fwrite($myfile, $state+1);
			fclose($myfile);
		}
		function lowerState() {
			$myfile = fopen("state.txt", "r") or die("Unable to open file!");
			$state = fread($myfile,filesize("state.txt"));
			fclose($myfile);
			$myfile = fopen("state.txt", "w") or die("Unable to open file!");
			$newstate = $state-1;
			if ($state =! 0) {fwrite($myfile, $newstate);}
			fclose($myfile);
		}
  
		if (isset($_GET['raise'])) {
			raiseState();
		}
		if (isset($_GET['lower'])) {
			lowerState();
		}
	?>
	<head>
		<style>
			.LeftDiv {
				position: absolute;
				margin-left: 0px;
				width: 50%;
				height: 100%;
				background-color: blue;
			}
          	.RightDiv {
				margin-left: auto;
				margin-right: 0px;
				width: 50%;
				height: 100%;
				background-color: lightblue;
			}
			.LeftArrow {
				margin-top: 20%;
				margin-left: 10px;
			}
          	.RightArrow {
				margin-left: auto;
				margin-right: 10px;
			}
		</style>
	</head>
	<body>
		<div class="LeftDiv" onclick="location.href='?lower=true';">
			<h1 class="leftArrow">ARROW</h1>
		</div>
		<div class="RightDiv" onclick="location.href='?raise=true';">
			<h1 class="RightArrow">ARROW</h1>
		</div>
	</body>
</html>