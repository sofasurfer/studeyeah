    <div class="jumbotron footer">
      <h1></h1>
    </div>
    <footer>         
      <p><a href="https://www.sofasurfer.org" target="_blank" title="Built by SofaSurfer">Built by SofaSurfer</a></p>
    </footer>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://www.sofasurfer.org/stream/assets/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://www.sofasurfer.org/stream/assets/bcSwipe/jquery.bcSwipe.min.js"></script>    
    <?= js('assets/js/main.js') ?>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//piwik.sofasurfer.org/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '28']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Piwik Code -->
</body>
</html>