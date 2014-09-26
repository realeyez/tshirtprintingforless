(function ($) {

    $(window).load(function() {

    //alert('3');
        $( ".cart-blocker" ).mouseover(function( event ) {
            var el = $(this);
            if ($('.file-widget .file').length == 1) {
                el.remove();
            }
            event.preventDefault();
        });
        $( ".cart-blocker" ).click(function() {
            alert('Please upload your artwork to buy this product');
        });


        /*$("form").submit(function(e){
            alert('submit intercepted');
            e.preventDefault(e);
        });*/

       // Drujax.setHandler(function(data,path){

        //})

       /* Drujax.setHandler(function(data, path){


            $("#drujax-main").animate({
                    opacity:1
                },
                500,
                function(){
                    for(var i in data.content){
                        $(i).html(data.content[i]);
                    }
                    $(this).animate({opacity:1},500);
                });
       });


*/

        $('.dropdown-toggle').click(function() {
            window.location = $(this).attr('href');
        });

        $(".horizontal-tabs-list").addClass("nav nav-tabs");

        $(".horizontal-tabs-list li.selected").addClass("active");

        $(".horizontal-tabs-list li a").click(function(e) {

            $(".horizontal-tabs-list li").removeClass("active");

            $(this).parent().addClass("active");

            e.preventDefault();

        });




        $('a.toggle-code').on('click', function() {

            alert('asdfasd');

            var link = $(this);
            var el = $($(this).data('source'));

            if (el.hasClass('hide'))
            {
                link.text('(hide source)');
                return el.removeClass('hide');
            }

            link.text('(show source)');
            return el.addClass('hide');
        });


        Waves.displayEffect();

    });


    
})(jQuery);

