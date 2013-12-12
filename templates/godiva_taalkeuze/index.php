<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/godiva.css" type="text/css" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js">
<script type="text/javascript" src="<?php echo $this->baseurl ?>/scripts/transition.js"></script>
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

<!--<body class="taalkeuze" style="background:url(images/stories/<?php echo($background);?>) top center no-repeat;">-->
<body class="taalkeuze" >
	<!-- start godiva taalkeuze template -->

	<!-- start wrapper -->
		<div id="wrapper">

			<!-- start content -->
				<div id="content">
		        	<span style="display:none"><jdoc:include type="component" /></span>

               		<jdoc:include type="modules" name="lang" style="none" />

					<span class="clear"></span>
				</div>
			<!-- einde content -->

		</div>
	<!-- einde wrapper -->
</body>
</html>
