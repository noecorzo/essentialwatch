
        $(document).ready(function(){
            $('#buttonLogIn').click(function(e){

                $('header > div > div').toggleClass('visible');
//                $('#buttonLogIn').hide();
            });
    $( ".hamburgerClose" ).hide();
    $( ".hamburger" ).click(function() {
    $( ".menu" ).slideToggle( "slow", function() {
        $( ".hamburger" ).hide();
        $( ".hamburgerClose" ).show();
    });
});
    $( ".hamburgerClose" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburgerClose" ).hide();
            $( ".hamburger" ).show();
        });
    });
});
