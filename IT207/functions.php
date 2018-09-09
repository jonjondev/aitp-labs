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