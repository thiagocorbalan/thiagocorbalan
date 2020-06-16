<?php
	require_once("includes/config.php");
	include "includes/header.php";
?>
<script type="text/javascript" src="js/libs/snap.svg.js"></script>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3CT67G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!--[if IE 7]>
		<?php include "atualize/barra_atualize.html"; ?>
	<![endif]-->

	
	<div id="container">
	    <a class="btn btn-primary" href="destination.php#switzerland"
	    onclick="dataLayer.push({
	        'tripCategory': 'skiing',
	        'tripLocation': 'Switzerland'});"> Details Switzerland</a> <br />
	        
	<a class="btn btn-primary" href="destination.php#puertorico"
	    onclick="dataLayer.push({
	        'tripCategory': 'scuba-snorkeling',
	        'tripLocation': 'Puerto Rico'});"> Details Puerto Rico</a> <br />
	        
	<a class="btn btn-primary" href="destination.php#providence"
	    onclick="dataLayer.push({
	        'tripCategory': 'bacon',
	        'tripLocation': 'Providence'});"> Details Providence</a>
	        
	        
	 
		<svg id="logo" class="pabsolute"></svg>

		<svg id="linhas1" class="pabsolute"></svg>
		<svg id='linhas2' class="pabsolute"></svg>

		
		
		<a href="./checkout.php" class='btn booknow btn-primary'>Book now</a>
	</div>
	
	



</body>

</html>