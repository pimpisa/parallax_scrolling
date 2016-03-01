<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Parallax Scrolling using Javascript</title>
		<script type="text/javascript">
			var ypos,image;
			function parallax(){
				ypos = window.pageYOffset;
				image = document.getElementById('image');
				image.style.top = ypos * .4 + 'px';
			}
			window.addEventListener('scroll',parallax)
		</script>		
		<style type="text/css">
			*{
				margin:0px;
				padding:0px;				
			}
			#image {
				position:relative;
				z-index:-1;				
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
				position:relative;
				z-index:1;				
			}
		</style>
	</head>
	<body>
		<img id="image" src="images/main_bg1.jpg">
		<div id="content">
		    <img id="image" src="images/main_bg2.jpg">
		</div>
	</body>
</html>