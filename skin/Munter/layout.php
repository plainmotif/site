<!doctype html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?= $this->config->siteName; ?>: <?= $this->meta->title; ?></title>
    <meta name="description" content="<?= $this->meta->description; ?>" />
    <meta name="keywords" content="<?= $this->meta->keywords; ?>">
    <meta property="og:title" content="<?= $this->config->siteName; ?>: <?= $this->meta->title; ?>">
    <link rel="stylesheet" type="text/css" href="/skin/Munter/css/bootstrap.min.css">
    <link rel="stylesheet" href="/skin/Munter/fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/skin/Munter/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/skin/Munter/font/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/skin/Munter/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/skin/Munter/css/style.css">
    <!-- jquery needed for forms -->
    <script type="text/javascript" src="/skin/shared/js/jquery-2.1.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="prefetch" href="/skin/Munter/images/zoom.png">
</head>

<body>
    <div class="navbar navbar-fixed-top" data-activeslide="1">
        <?= $this->renderContent('nav'); ?>
    </div>
    <div id="arrows">
        <div id="arrow-up" class="disabled"></div>
        <div id="arrow-down"></div>
        <div id="arrow-left" class="disabled visible-lg"></div>
        <div id="arrow-right" class="disabled visible-lg"></div>
    </div>
    <div class="slide story" id="slide-1" data-slide="1">
        <?= $this->renderContent('home'); ?>
    </div>
    <div class="slide story" id="slide-2" data-slide="2">
        <?= $this->renderContent('about'); ?>
    </div>
    <div class="slide story" id="slide-3" data-slide="3">
       <?= $this->renderContent('portfolio'); ?>
    </div>
    <div class="slide story" id="slide-4" data-slide="4">
        <?= $this->renderContent('process'); ?>
    </div>
    <div class="slide story" id="slide-5" data-slide="5">
        <?= $this->renderContent('clients'); ?>
    </div>
    <div class="slide story" id="slide-6" data-slide="6">
        <?= $this->renderContent('contact'); ?>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    Copyright &copy; <?= date('Y'); ?> Plainmotif Limited | 
                    Design by <a href="http://www.blacktie.co">BlackTie</a> | 
                    Home image by <a href="http://tumblr.unsplash.com/post/73463740348/download-by-monika-majkowska">Monika Majkowska</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="/skin/Munter/js/bootstrap.min.js"></script>
    <script src="/skin/Munter/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/skin/Munter/fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
    <script src="/skin/Munter/js/script.js"></script>
    <script>
        $(document).ready(function(e) {
            var lis = $('.nav > li');
            menu_focus( lis[0], 1 );
            $(".fancybox").fancybox({
                padding: 10,
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    </script>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
      _paq.push(["setCookieDomain", "*.plainmotif.co.uk"]);
      _paq.push(["setDomains", ["*.plainmotif.co.uk"]]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u=(("https:" == document.location.protocol) ? "https" : "http") + "://plainmotif.co.uk/stats/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="http://plainmotif.co.uk/stats/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
    <script type="text/javascript">var RumID = 3708;</script><script type="text/javascript" async src="https://ec01c392919812c4f818-79afe539d963810002081e6e2a51e67e.ssl.cf2.rackcdn.com/Embed.js"></script>

</body>
</html>