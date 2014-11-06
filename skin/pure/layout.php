<!DOCTYPE html>
<html lang="en" class="">
<head>
    <title><?= $this->config->siteName; ?>: <?= $this->meta->title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $this->meta->description; ?>"/>
    <link rel="stylesheet" type="text/css" href="/skin/shared/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="/skin/shared/font/lato/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="/skin/shared/font/bowlby-one/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="/skin/shared/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/skin/pure/css/main.css" rel="stylesheet"/>
    <script src="/skin/shared/js/jquery-2.1.1.min.js"></script>
    <script src="/skin/pure/js/script-pre.js"></script>
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/skin/glasgowphp/images/g-shield-2-small.png" alt="Glasgow PHP logo" class="logo"/>
                    <h1><?= $this->config->siteName; ?></h1>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <?= $this->navigation->render(); ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="main-wrapper">
        <div class="container main">
            <div class="content-left">
<?php
            if ($this->getPage()->getPath() === 'index') {
                $page = $this->newsUpcoming->findNextPost();

                if (!$page) {
                    $page = $this->getPage();
                }

                echo $this->partial($page->getPath(), 'index.php', false);
            } else {
                echo '<div class="container-box">';
                    echo '<h1>'.$this->meta->title.'</h1>';

                if (isset($this->meta->subtitle)) {
                    echo '<h2>'.$this->meta->subtitle.'</h2>';
                }
                    echo '<div class="content-box">';

                    if (!isset($this->meta->hideMetaBox) || !$this->meta->hideMetaBox) {
?>
                        <div class="box-meta">
                            <p>Date: <?= $this->meta->date; ?></p>
                        </div>
<?php
                    }
                        echo $this->content;
                    echo '</div>';
                echo '</div>';
            }
?>
            </div>
            <div class="content-right">
                <div class="container-box">
                    <h1 class="side-box">Highlight Area</h1>
                    <div class="box-sponsor">
                        <?= $this->renderContent('sponsors/plainmotif'); ?>
                    </div>
                </div>
                <div class="container-box">
                    <h1 class="side-box">Latest on Twitter</h1>
                    <div class="box-sponsor twitter-widget">
                        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mizzencms" data-widget-id="530357913907240960">Tweets by @mizzencms</a>
                        <script>
                            !function(d,s,id){
                                var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                                if(!d.getElementById(id)){
                                    js=d.createElement(s);
                                    js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js,fjs);
                                }
                            }(document,"script","twitter-wjs");
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="footer" class="footer">
        <div class="container">
            <p>&copy; MizzenCMS <?= date('Y'); ?></p>
        </div>
    </div>
    <script src="/skin/shared/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/skin/pure/js/script-post.js"></script>
</body>
</html>
