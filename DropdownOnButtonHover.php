<!DOCTYPE html>
<html>
	<head>
		<title>Image Hover</title>
		<style type="text/css">	

			.all{
				display: inline-block;
				position: relative;
			}
			.dropButton{
				background-color: #888;
				padding: 10px;
				border: none;
				border-radius: 10px;
				width: 150px;
			}
			.hiddenDept{
				display: none;
				position: absolute;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
				min-width: 150px;

			}
			
			.hiddenDept a{
				text-decoration: none;
				display: block;
				padding: 10px;

				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
			}
			
			.hiddenDept a:hover{
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
			}
			.all:hover .hiddenDept{
				display: block;
			}	

		</style>
	</head>
	<body>
		<div class="all">
			<button class="dropButton">Department</button>
			<div class="hiddenDept">
				<a href="#">Computer</a>
				<a href="#">IT</a>
				<a href="#">Chemical</a>
				<a href="#">Electrical</a>
				<a href="#">Mechanical</a>
				
			</div>
		</div>
	</body>
</html>
