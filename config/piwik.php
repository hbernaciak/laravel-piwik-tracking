<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Piwik Host
    |--------------------------------------------------------------------------
    */

    'host' => '//www.stats.creneo.pl/',

    /*
    |--------------------------------------------------------------------------
    | Site Id
    |--------------------------------------------------------------------------
    */

    'siteId' => 4,

    /*
    |--------------------------------------------------------------------------
    | Piwik tracking code
    |--------------------------------------------------------------------------
    */

    'code' => '
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push([\'trackPageView\']);
  _paq.push([\'enableLinkTracking\']);
  (function() {
    var u="{{HOST}}";
    _paq.push([\'setTrackerUrl\', u+\'piwik.php\']);
    _paq.push([\'setSiteId\', {{SITEID}}]);
    var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
    g.type=\'text/javascript\'; g.async=true; g.defer=true; g.src=u+\'piwik.js\'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="{{HOST}}piwik.php?idsite=4" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
'

];
