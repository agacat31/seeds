<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		    <!-- Footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row list-footer-container">
              <div class="col-sm-4 footer-item-content">
                <h4>Seeds</h4>
                <ul class="list-footer">
                  <li class="list-footer-item">
                    <a href="<?php echo esc_url( home_url( '/white-paper' ) ); ?>">White Paper</a>
                  </li>
                  <li class="list-footer-item">
                    <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Gallery</a>
                  </li>
                  <li class="list-footer-item">
                    <a href="<?php echo esc_url( home_url( '/documentation' ) ); ?>">Documentation</a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-4 footer-item-content">
                <h4>Company</h4>
                <ul class="list-footer">
                  <li class="list-footer-item">
                    <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a>
                  </li>
                  <li class="list-footer-item">
                    <a href="#">Terms &amp; Privacy</a>
                  </li>
                  <li class="list-footer-item">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a>
                  </li>
                  <li class="list-footer-item">
                    <a href="#">Help</a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-4 footer-item-content">
                <h4>Follow Us</h4>
                <div class="copyright-container">
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-logo-container text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/footer-logo.png" />
            </div>
          </div>
        </div>
      </div>
    </footer>

  <div class="scroll-top-wrapper">
    <a class="scroll-top js-scroll-trigger" href="#page-top"><i class="fa fa-angle-up"></i></a>
  </div>

  <!-- Plugin JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/images-gallery/masonry.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/images-gallery/imagesloaded.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/images-gallery/classie.js"></script>
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/images-gallery/AnimOnScroll.js"></script> -->

  <!-- Custom scripts -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/js/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/js/jquery.lazy.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/js/scripts.min.js"></script>

</body>

</html>
