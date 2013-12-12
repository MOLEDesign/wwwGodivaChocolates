<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

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
<script type="text/javascript" src="http://start.insites.eu/wpm.aspx?P=811401&C=48&L=3&LQ=9"></script>
<script type="text/javascript" language="javascript">

</script>

    <script type="text/javascript">
        var _gaq = _gaq || [];

        _gaq.push(["_setAccount", "UA-1193437-26"]);
        _gaq.push(["_trackPageview"]);
        _gaq.push(['_trackPageLoadTime']);

        (function() {
            var ga = document.createElement("script");
            ga.type = "text/javascript";
            ga.async = true;
            ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

<script type="text/javascript" src="http://m.godiva.be/resources/js/mobile_redirect.js"> </script>
<script>
     SA.redirection_mobile ({
        noredirection_param:"fullsite",
        mobile_scheme:"http",
        tablet_redirection: true,
        mobile_url : "m.godiva.be"
    });
</script>

<?php
	/* start background image */
		$itemID = JRequest::getVar('Itemid');

		$background_query = mysql_query("SELECT * FROM godiva_backgrounds WHERE itemid = '".$itemID."' ORDER BY RAND() LIMIT 1");

		if(mysql_num_rows($background_query) != 0)
		{
           $background_row = mysql_fetch_assoc($background_query);
		   $background = "backgrounds/".$background_row['background'];

		   ?>
		   	<script type="text/javascript" language="javascript">
              var opacity_bg = <?php echo($background_row['opacity']); ?> ;
			</script>
		   <?
		}
		else
		{
			$background = "bg_start.jpg";
		   ?>
		   	<script type="text/javascript" language="javascript">
              var opacity_bg = 80 ;
			</script>
		   <?
		}
	/* einde background image */
?>


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
</head>
<!--<body style="background:url(images/stories/<?php echo($background);?>) top center no-repeat;" class="content_full_right">-->
<body class="content_full_right <?php echo $this->language; ?>">
	<!-- start godiva full right template -->

	<!-- start wrapper -->
		<div id="wrapper">

			<!-- start mainmenu -->
				<div id="mainnav">
					<!-- start logo -->
						<div class="logo">
                        	<a href="index.php"><img src="images/logo.png" /></a>
						</div>
					<!-- einde logo -->
					<div class="wrapper">
                		<jdoc:include type="modules" name="menu" style="none" />
					</div>
				</div>
			<!-- einde mainmenu -->

			<!-- start content -->
				<div id="content">
					<div class="wrapper">
							<div class="opacity_layer"></div>

							<div class="content_right_container">
						    	<jdoc:include type="modules" name="pageTitle" style="none" />


								<div class="submenu"><jdoc:include type="modules" name="submenu" style="none" /></div>
								<div id="content_scrollable" class="scroll-pane">
						
	                    			<div class="block_left" class="scroll-pane"><jdoc:include type="modules" name="block_left" style="none" /></div>
	
			
									<div class="content_wrapper" class="scroll-pane">
							        	<jdoc:include type="component" />
									</div>
								</div>
							</div>
 
					</div>
				</div>
			<!-- einde content -->

		</div>
	<!-- einde wrapper -->		<!-- start bottommenu -->		<div id="bottommenu">			<div class="wrapper">				<img src="images/logo_bottom.png"/>				<jdoc:include type="modules" name="bottommenu" style="none" />			</div>		</div>	<!-- einde bottommenu -->
</body>
</html>