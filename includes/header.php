<!DOCTYPE>
<html lang="pt-br">
<head>

	<title>Thiago Corbalan Design for Multi-Plataform</title>

	<!-- META TAFS -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   	<meta http-equiv="content-language" content="pt-br" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Thiago Corbalan">
    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <base href="<?php echo $url_base; ?>">
    
    <!-- FavIcon Tamanho -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    
    <!-- CSS -->
    <link rel="stylesheet" media="screen" type="text/css" href="css/reset.css" />

    <link rel="stylesheet" media="screen" type="text/css" href="css/padrao.css" />
    
    
    
    <!--[if IE 6]>
    <meta HTTP-EQUIV="Refresh" CONTENT="0; URL=lte_ie6.html">
    <![endif]-->
    
    <!--[if IE 7]>
    <link rel="stylesheet" media="screen" type="text/css" href="css/ie7.css"/>
    <![endif]-->
    
    <!--[if IE]>
    <link rel="stylesheet" media="screen" type="text/css" href="css/ie.css"/>
    <![endif]-->  


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    
    
    <!-- JavaScripts -->
    
    <!-- jQuerys -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    
    <?php if($_SERVER['PHP_SELF'] !== "/thankyou.php"): ?>
    <script> dataLayer = [];</script>
    <?php else: ?>
    <script> 
        var tripValue = document.URL.match(/price=([^&]+)/)[1];
        dataLayer = [{'tripValue': tripValue}];
    </script>
    <?php endif; ?>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P3CT67G');</script>
<!-- End Google Tag Manager -->

</head>