(function($) {

    $.fn.helloWorld = function()
    {

      return  this.each( function() 
        {
           $(this).text("Here comes plugin!");
        });

    }

}(jQuery));
