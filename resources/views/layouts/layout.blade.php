<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title & Meta -->
    <title>Mashuper - @yield('title')</title>

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->

    <link href="/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Le favicon -->
    <link rel="shortcut icon" href="/favicon.ico" />

</head>

<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://mashuper.com">Mashuper</a>
            <a href="/mashups/create" id="create-mashup-header" class="btn btn-info btn-small">Create mashup &raquo;</a>
            <div class="nav-collapse collapse" id="main-menu">
                <ul class="nav pull-right" id="main-menu-right">
                    <li><a href="/mashups">Mashups</a></li>
                    <li><a href="/concepts">Concepts</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-content">
        @yield('content')
    </div>

    <div style="clear:both;">&nbsp;</div>
    <footer id="footer">
        <div class="text-right">Este es un proyecto de <a href="http://ojoven.es" target="_blank">ojoven.es</a> para <a href="http://creemos.org" target="_blank">Creemos.org</a></div>
    </footer>
</div> <!-- /container -->

<div id="media-mobile"></div>
</body>

<script type="text/javascript">
    urlBase = "<?php echo ""; ?>";
    pathImg = "<?php echo ""; ?>";
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