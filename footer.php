

        </div><!-- /site-content -->

        <div id="up" class="up">
            ^
        </div>

        <footer>
          <div class="footer__top">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                    <?php if( is_active_sidebar('sidebar-footer-1') ) :?>
                    <ul class="widget-position">
                        <?php dynamic_sidebar('sidebar-footer-1'); ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if( is_active_sidebar('sidebar-footer-2') ) :?>
                        <ul class="widget-position">
                            <?php dynamic_sidebar('sidebar-footer-2'); ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if( is_active_sidebar('sidebar-footer-3') ) :?>
                        <ul class="widget-position">
                            <?php dynamic_sidebar('sidebar-footer-3'); ?>
                        </ul>
                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div><!-- /.footer__top -->

          <div class="footer__bottom">
              <div class="container">
                  Copyright
              </div>
          </div>
        </footer><!-- /footer -->

        <div class="site-cache" id="site-cache"></div>
      </div><!-- /pusher -->
    </div><!-- /wrapper -->
    <?php wp_footer(); ?>

  </body>
</html>
