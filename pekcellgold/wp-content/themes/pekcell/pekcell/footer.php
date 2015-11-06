<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pekcell
 */
?>
	<footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <ul>
              <li><a href="http://networksoft.mx/pekcellgold/">INICIO</a></li>
              <li><a href="http://networksoft.mx/pekcellgold/pinkost">PINKOST</a></li>
              <li><a href="http://networksoft.mx/pekcellgold/kostable">KOSTABLE</a></li>
              <li><a href="http://networksoft.mx/pekcellgold/gamekost">GAMEKOST</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul>
              <li><a href="http://networksoft.mx/pekcellgold/vpskost">VPSKOST</a></li>
              <li><a href="http://networksoft.mx/pekcellgold/appkost">APPKOST</a></li>
              <li><a href="http://networksoft.mx/pekcellgold/oficina-virtual">OFICINA VIRTUAL</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <div class="logo">
              <img width="100px" height="100px" src="<?php echo get_template_directory_uri(); ?>/images/LogoPekCell.png">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form">
              <h4>Ingrese a su Oficina Virtual</h4>
              <form>
                <input class="form-control" placeholder="Usuario">
                <input class="form-control" type="password" placeholder="Contraseña">
                <div class="button">
                  <button class="btn">Entrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </footer>
    <div class="row copyrights">
      <div class="col-sm-6 text-left">
        <p>© Pekcell Group Enterprise 2015 </p>
      </div>
      <div class="col-sm-6 text-right">
        
      </div>
    </div>
    <script src="http://networksoft.mx/pekcellgold/wp-content/themes/pekcell/pekcell/scripts/vendor.js"></script>
    <script src="http://networksoft.mx/pekcellgold/wp-content/themes/pekcell/pekcell/scripts/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
    </script>
<?php wp_footer(); ?>
</body>
</html>