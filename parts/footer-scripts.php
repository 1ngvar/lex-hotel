<script>
    (function($) {
        // You are free to use $ instead of JQuery



        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());


        // Disable Carousel on extra large screens – never needed it in the first place anyway
        function checkPosition() {
            if (window.matchMedia('(min-width: 1800px)').matches) {
                // console.log($(window).width());
                $('#carousel').attr('data-ride', 'none');
            }
        }
        checkPosition();






    })( jQuery );
</script>
