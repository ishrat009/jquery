(function($) {


//keyword "fn" is a namespace provided for plugins within the jQuery library
    $.fn.helloWorld = function()
    {

      return  this.each( function() 
        {
           $(this).text("Here comes plugin!");
        });

    }

}(jQuery));
