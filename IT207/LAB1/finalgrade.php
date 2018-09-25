<!--
finalgrade.php
Jonathan Moallem 09/09/2018

The page definition for the LAB1 final grade page. Calls the layout, and tells it to load the final grade page content.
-->
<?php
$page_title = "IT 207 Final Grade Determiner";
$page_name = "./finalgrade_content.php";
$css_path = "styles.css";
# Set default relative directory for testing
$current_relative_dir = "..";
include("../layout.php");
?>