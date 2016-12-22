<?php require('config/settings.php'); ?>
<!doctype html>
<!--[if lt IE 7 ]><html itemscope itemtype="http://schema.org/Product" id="ie6" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie7" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie8" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie9" class="ie" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 9]><!-->
<html itemscope itemtype="http://schema.org/Product" lang="en-US" prefix="og: http://ogp.me/ns#"><!--<![endif]-->
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <title>omgitskristy</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Favicons -->
    <!-- <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="http://scotch.io/favicon.ico"> -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel|Roboto:100">
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One"> -->
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <?php

    include('nav.php');

    if(isset($_GET['page'])){
        if($_GET['page'] == 'portfolio' || $_GET['page'] == 'about'){
            include ('templates/grid.php');
        }elseif($_GET['page'] == 'contact'){
            include('templates/contact.php');
        }else{
            include('templates/project.php');
        }
    }else{
            include('templates/grid.php');
        }

    ?>

    </div> 

    <!-- <div class="col-12"><p>12</p></div>

    <div class="col-12">
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
    </div>

    <div class="col-12">
        <div class="col-2"><p>2</p></div>
        <div class="col-2"><p>2</p></div>
        <div class="col-2"><p>2</p></div>
        <div class="col-2"><p>2</p></div>
        <div class="col-2"><p>2</p></div>
        <div class="col-2"><p>2</p></div>
    </div>

    <div class="col-12">
        <div class="col-3"><p>3</p></div>
        <div class="col-3"><p>3</p></div>
        <div class="col-3"><p>3</p></div>
        <div class="col-3"><p>3</p></div>
    </div>

    <div class="col-12">
        <div class="col-4"><p>4</p></div>
        <div class="col-4"><p>4</p></div>
        <div class="col-4"><p>4</p></div>
    </div>

    <div class="col-12">
        <div class="col-5"><p>5</p></div>
        <div class="col-5"><p>5</p></div>
        <div class="col-2"><p>2</p></div>
    </div>

    <div class="col-12">
        <div class="col-6"><p>6</p></div>
        <div class="col-6"><p>6</p></div>
    </div>

    <div class="col-12">
        <div class="col-7"><p>7</p></div>
        <div class="col-5"><p>5</p></div>
    </div>

    <div class="col-12">
        <div class="col-4"><p>4</p></div>
        <div class="col-8"><p>8</p></div>
    </div>

    <div class="col-12">
        <div class="col-9"><p>9</p></div>
        <div class="col-3"><p>3</p></div>
    </div>

    <div class="col-12">
        <div class="col-10"><p>10</p></div>
        <div class="col-1"><p>1</p></div>
        <div class="col-1"><p>1</p></div>
    </div>

    <div class="col-12">
        <div class="col-11"><p>11</p></div>
        <div class="col-1"><p>1</p></div>
    </div> -->

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/28dc6ef705.js"></script>

</body>
</html>
