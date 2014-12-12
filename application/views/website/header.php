<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>Blenders Pride Fashion Tour 2014. Taste Life In Style.</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("webassets");?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url("webassets");?>/css/style1.css" rel="stylesheet">
    <link href="<?php echo base_url("webassets");?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url("webassets");?>/css/mobile.css" rel="stylesheet">
    <link href="<?php echo base_url("webassets");?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url("webassets");?>/fonts/flaticon.css" rel="stylesheet">
<!--    <link href="<?php echo base_url("webassets");?>/css/dropzone.css" rel="stylesheet">-->
    <link rel="shortcut icon" href="<?php echo base_url("webassets");?>/img/logo.png" type="image/x-icon">




<!-- For image drop down upload -->
<script src="<?php echo base_url("webassets");?>/js/jquery.min.js"></script>

<?php if($page=='index') { ?>
<link href="<?php echo base_url("webassets");?>/css/style-tejas.css" rel="stylesheet">
<script src="<?php echo base_url("webassets");?>/js/pace.js"></script>
<script src="<?php echo base_url("webassets");?>/js/init.js"></script>
<?php } ?>


<script src="<?php echo base_url("webassets");?>/js/smooth-scroll.min.js"></script>

<!--<script src="<?php echo base_url("webassets");?>/js/dropzone.js"></script>-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    <link rel="stylesheet" type="text/css" href="<?php echo base_url("webassets");?>/css/component.css" />
    <script src="<?php echo base_url("webassets");?>/js/modernizr.custom.js"></script>
    
    

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url("webassets");?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<!--facebook integration-->


    <script>
        var site_url="<?php echo site_url();?>";
        var base_url="<?php echo base_url();?>";
        window.twttr = (function (d, s, id) {
            var t, js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
            return window.twttr || (t = {
                _e: [],
                ready: function (f) {
                    t._e.push(f)
                }
            });
        }(document, "script", "twitter-wjs"));
    </script>


</head>

<body id="top">
