<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="copyright col text-center py-3">
                <img src="<?php echo THEME_URL?>/img/LEX_trend-hotel_gold.png" alt="logo">
                <p> Copyright &copy; <span id="year"></span><br/>
                    Усі права захищені
                </p>
            </div>
        </div>
    </div>
</footer>

<!--  BOOKING MODAL – Should go into miscellaneous template part -->
<div class="modal fade text-dark" id="booking-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Забронювати онлайн</h5>
                <button class="close" data-dismiss="modal"></button>
                <span>&times;</span>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<!--  BOOKING MODAL -->

<?php get_template_part('parts/footer-scripts'); ?>

<?php wp_footer(); ?>
</body>

</html>
