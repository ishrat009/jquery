<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>jQuery HeatMap</title>
        
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
		
    </head>
    <body>
		<div class="title"></div>
		<span style="position:absolute" class="analyze" id="analyze">Analyze Heat for Hit</span>
		<div class="overlay" id="overlay" style="display:none;"></div>
        <script type="text/javascript" 
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
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