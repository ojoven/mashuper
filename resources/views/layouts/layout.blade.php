<?php
use \App\Models\User;
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Title & Meta -->
    <title>Mashuper - @yield('title')</title>

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/css/style.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Le favicon -->
    <link rel="shortcut icon" href="/favicon.ico" />

</head>

<body>

    <!-- HEADER -->
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Mashuper</a>
                <button data-target="#navbar-main" data-toggle="collapse" type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar-main" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/mashups/create">Create mashup &raquo;</a></li>
                    <li><a href="/mashups/random">See Mashup &raquo;</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <?php if ($user = User::isUserLogged()) { ?>
                        <li class="dropdown">
                            <a href="#" class="header-user dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo str_replace("_normal.",".",$user->profile_image_url); ?>" />
                                <span><?php echo $user->screen_name; ?></span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/twitter/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li><a href="/twitter/login">Login with Twitter</a></li>
                    <?php } ?>
                </ul>

            </div>
        </div>
    </div>

    <!-- CONTAINER -->
    <div class="container">
        <div class="container-content">
            @yield('content')
        </div>

        <div style="clear:both;">&nbsp;</div>
    </div>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="text-right">Este es un proyecto de <a href="http://ojoven.es" target="_blank">ojoven.es</a> para <a href="http://creemos.org" target="_blank">Creemos.org</a></div>
    </footer>

    <div id="media-mobile"></div>

</body>


<script type="text/javascript">
    urlBase = "<?php echo URL::to('/'); ?>";
    pathImg = "<?php echo URL::to('/images'); ?>";
</script>

<!-- Le javascript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/jquery.color.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-19697350-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</html>