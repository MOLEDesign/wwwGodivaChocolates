<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/godiva.css" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->baseurl ?>/jScrollPane.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js">
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/transition.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/bottom_menu.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/content.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/timeline.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/jScrollPane.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/empty_subnav.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/jquery.ez-bg-resize.js"></script>


<script type="text/javascript" src="http://m.godiva.be/resources/js/mobile_redirect.js"> </script>
<script>
     SA.redirection_mobile ({
        noredirection_param:"fullsite",
        mobile_scheme:"http",
        tablet_redirection: true,
        mobile_url : "m.godiva.be"
    });
</script>





<script>
 		var $resize_2 = jQuery.noConflict();
		$resize_2(document).ready(function() {
			$resize_2("body").ezBgResize({
				img     : "images/stories/<?php echo($background); ?>",
				opacity : 1,
				center  : true
			});
		
		});
	</script>


<script type="text/javascript" src="http://start.insites.eu/wpm.aspx?P=811401&C=48&L=3&LQ=9"></script>


<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/swfobject.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/flippingbook.js"></script>

<style>div.submenu ul li:last-child{width:151px;}
.slideshow {padding-right:20px;}
.nl-nl div#bottommenu ul {margin-right:120px;}
.nl-nl div#bottommenu ul li {margin-right:8px;}
.nl-nl #bottommenu .wrapper {position:relative;}
.nl-nl #bottommenu img {position:absolute; right:0; top:0;}
.nl-nl div#bottommenu ul li a {letter-spacing:1px;}
ul.products li { text-transform: none; }
ul.categories li { height: 170px; }
</style>

<?php
						$menus      = &JSite::getMenu();
						$menu      = $menus->getActive();
						$pageclass   = "";
								 
						if (is_object( $menu )){
						$params = new JParameter( $menu->params );
						$pageclass = $params->get( 'pageclass_sfx' );
						}   
?>


</head>
<!--<body style="background:url(images/stories/<?php echo($background);?>) top center no-repeat;" class="content_full">-->
<body class="content_full <?php echo $this->language; ?>">
	<!-- start godiva full template -->



    <div id="bottommenu">
        <div class="wrapper" style="width:1000px;">
            <img src="images/logo_bottom.png"/>
            <jdoc:include type="modules" name="bottommenu" style="none" />
        </div>
    </div>
</body>
</html>