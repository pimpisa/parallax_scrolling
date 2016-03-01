<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Parallax Scrolling using Javascript</title>
		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript">
			
			
		</script>		
		<style type="text/css">
			*{
				margin:0px;
				padding:0px;				
			}
			#image {
				position:relative;
				Z-index:-1;				
			}
			img#image{
				height:auto;
				width:100%;
			}
			#content{
				height:750px;
				width:100%;
				margin-top:-10px;
				background-color:#4dbbac;
				position:relativel
				z-index:1;				
			}
		</style>
	</head>
	<body>
		<img id="image" src="images/main_bg1.jpg">
		<div id="content">
			
		</div>
	</body>
</html>