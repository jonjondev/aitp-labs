<!--
layout.php
Jonathan Moallem 09/10/2018

The site layout, which loads content from a folder specified by the calling page.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Not A Real Webpage</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <?php
        # Set default relative directory for testing
        $current_relative_dir = "./";
        # Check if current environment is production
        if ($_SERVER['HTTP_HOST'] != "localhost:3000") {
            # Simplify directory address for production
            $current_relative_dir = $page_name != "." ? ".." : ".";
        }
        # Link to stylesheet based on env
        echo "<link rel='stylesheet' href='$current_relative_dir/styles.css' />";
        # Requires a file that defines a number of variables
        require 'vars.php';
        # Requires a file that defines a number of user-defined functions
        require 'functions.php';
        ?>
    </head>
    <body>
        <div class="col-container">
            <div class="col-left">
                <div class="col-left-content">
                    <br />
                    <h3 class="no-line-height">Lab Assignments</h3>
                    <ul>
                        <?php
                        # Display four assignment links from a loop
                        for ($i = 1; $i <= 4; $i++) {
                            # Make item display inside <li></li> tags
                            echo list_itemify("<a href='./LAB$i'>Assignment $i</a>");
                        }
                        ?>
                    </ul>
                    <br />
                    <h3 class="no-line-height">Lab Practica</h3>
                    <ul>
                        <?php
                        # Display two practicum links from a loop
                        for ($i = 1; $i <= 2; $i++) {
                            # Make item display inside <li></li> tags
                            echo list_itemify("<a href='./LABP$i'>Practicum $i</a>");
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-right">
                <?php
                # Display the content header
                require("$current_relative_dir/layouts/header.php");
                ?>
                <div class="body-section">
                    <div class="body-section-content">
                        <?php
                        # Display the selected page content
                        include("$page_name/content.php");
                        ?>
                    </div>
                </div>
                <?php
                # Display the content footer
                require("$current_relative_dir/layouts/footer.php");
                ?>
            </div>
        </div>
    </body>
</html>