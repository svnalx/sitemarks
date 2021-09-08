<?php 
include ($_SERVER['DOCUMENT_ROOT'] . '/sitemarks/vars.php'); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"  />
    <meta name="author" content="Alex Crist">
	<meta name="keywords" content="bookmarks, organization">
	<meta name="description" content="Mark websites for later. Keep them organized with a familiar directory and table view.">
	<meta name="robots" content="all">
	<meta name="copyright" content="Alex Crist">
    <link 
    rel="shortcut icon" 
    href="<?php echo $GLOBALS['site'] . "/images/favicon.png";?>" />
    <title>SiteMarks | Mark websites for later.</title>

    <?php 
    include ($_SERVER['DOCUMENT_ROOT'] . '/sitemarks/styles/STYLES.php'); 
    ?>

</head>  
<body>  
    
<div id="page-container"> 

    <header>

      <a href="<?php echo $GLOBALS['site-index'] . "browse";?>">
        <img src="<?php echo $GLOBALS['site'] . "images/logos/logo-full-transparent.png";?>" />
      </a>
      <a class="by-line" href="https://alex-crist.com" target="_blank">By Alex Crist</a>

    </header>

    <!-- MAIN -------->
    <main class="main">