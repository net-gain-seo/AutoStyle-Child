</main>
<footer class="site-footer">
    <div class="container">

      <div class="row d-flex flex-row justify-content-end align-items-end padding40">
        <div class="footer-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '' ) ); ?>
        </div>
      </div>

      <div class="row d-flex flex-row justify-content-between align-items-end padding40">
        <div class="col lg-4 col-md-5 col-sm-12 col-12 align-self-end">
          <div class="socialalign">
            <a href="https://www.facebook.com/DocuVault-Delaware-Valley-LLC-142445592435008/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FacebookIcon.png" class="socialicon" width="55"></a>
            <a href="https://twitter.com/DocuVaultDV" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/TwitterIcon.png" class="socialicon" width="55"></a>
            <a href="https://www.linkedin.com/company/984618/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/LinkedinIcon.png" class="socialicon" width="55"></a>
          </div>

          <div class="copyright">
              © 2018 Auto Style <span>|</span> <a href="http://localhost:81/autostyle/privacy-policy/" class="privacy">Privacy Policy</a>
          </div>
        </div>

        <div class="col lg-4 col-md-4 col-sm-12 col-12 align-self-end">
          <div class="f-item contact align-self-end">
            <h5 class="whiteText">Auto Style</h5>
              <p>Call: 888-456-7899<br>
                123 Fast Street, This Town, ON L4N 6E5
              </p>
          </div>
        </div>
      </div>

    </div>
</footer>
<a href="#" class="scrollToTop">&uarr;</a>
<!--
<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popover-header">
                <h3 class="modal-title title">Request a Quote</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php/// echo do_shortcode( '[contact-form-7 id="301" title="Popup Form"]' ); ?>
            </div>
        </div>
    </div>
</div>
-->
<!-- Google Code for Remarketing Tag -->

<div id="openNavOverlay"></div>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>
</div>
</body>
</html>
