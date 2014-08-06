<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>jQuery HeatMap</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="A heat map with jQuery" />
        <meta name="keywords" content="jquery, heatmap" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
		<style>
		*{
			margin:0;
			padding:0;
		}
		body{
			background:#fff url(bg.png) repeat top left;
			font-family:arial;
		}
		.title{
			background:transparent url(heatMap.png) no-repeat top left;
			width:461px;
			height:136px;
			
		}
		.analyze{
			background-color: #2474c1;
			border:2px solid #fff;
			color:#fff;
			font-size:12px;
			cursor:pointer;
			padding:5px 15px;
			margin:10px;
			-moz-border-radius:20px;
			-webkit-border-radius:20px;
			border-radius:20px;
			font-weight:bold;
		}
		.back{
			position:absolute;
			top:400px;
			left:20px;
			background:transparent url(back.png) no-repeat top left;
			width:165px;
			height:31px;
		}
		</style>
    </head>
    <body>
		<div class="title"></div>
		<div><a href="http://tympanus.net/codrops/2010/02/08/a-jquery-heat-map" class="back"></a></div>
		<span style="position:absolute" class="analyze" id="analyze">Analyze</span>
		<div class="overlay" id="overlay" style="display:none;"></div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script>
			$(function() {
				$(document).bind({
					'click'	: function(event){
						var $target = $(event.target);
						if($target.hasClass('analyze')||$target.hasClass('overlay')) return;

						$('BODY').append($('<div/>', {
								css: {
									left			: event.pageX-10,
									top				: event.pageY-10,
									display			: 'none'
								},
								className			: 'dot'
						}));
					}
				});
				$('#analyze').bind({
					'click'	: function(event){
						$('#overlay').fadeIn();
						$('.dot').fadeIn();
					}
				});
				$('#overlay').bind({
					'click'	: function(event){
						$('#overlay').fadeOut();
						$('.dot').fadeOut();
					}
				});
			});
        </script>
    </body>
</html>