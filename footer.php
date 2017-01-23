

        </div><!-- /site-content -->

        <div id="up" class="up">
            ^
        </div>

        <footer>
          <div class="footer__top">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                    <?php if( is_active_sidebar('sidebar-1') ) :?>
                    <ul class="widget-position">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="col-md-4"><h2>Lorem ipsum</h2> dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="col-md-4"><h2>Lorem ipsum dolor sit amet</h2> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              </div>
            </div>
          </div><!-- /.footer__top -->

          <div class="footer__bottom">
            Copyright
          </div>
        </footer><!-- /footer -->

        <div class="site-cache" id="site-cache"></div>
      </div><!-- /pusher -->
    </div><!-- /wrapper -->
    <?php wp_footer(); ?>

  </body>
</html>
