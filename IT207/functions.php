<!--
functions.php
Jonathan Moallem 09/09/2018

This contains a number of useful user-defined functions for the application.
-->
<?php
/* 
 * Formats content with <li></li> tags around it.
 * @param - $content: String
 * @return - the formatted content: String
 */
function list_itemify($content) {
    return "<li>$content</li>";
}
?>