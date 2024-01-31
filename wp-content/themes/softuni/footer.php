 <!-- Footer -->
 <footer>
            
    <div class="row">

        <div class="container">
            <div class="col-md-4">
            <?php 
                if ( is_active_sidebar( 'footer-1' ) ) {
                    get_sidebar( 'footer-1' );
                }
            ?>
                
        </div>        
        <div class="col-md-6 col-md-offset-3 text-center">
            <?php 
                if ( is_active_sidebar( 'footer-2' ) ) {
                    get_sidebar( 'footer-2' );
                }
            ?>
            
        </div>
        <div class="col-md-6 col-md-offset-3 text-center">
            <hr>
            <p>Copyright &copy; <a href="https://themewagon.com/">Themewagon</a>  2014</p>
            <div class="top-scroll">
                <a href="#top"><i class="fa fa-arrow-circle-up scroll"></i></a>
            </div>
        </div>
    </div>
</footer>
        <!-- /Footer -->

    <?php wp_footer(); ?>
 
    </body>
    </html>
