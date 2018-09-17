<!--
layout.php
Jonathan Moallem 09/10/2018

The site layout, which loads content from a folder specified by the calling page.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            <?php
            echo $page_title;
            ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <?php
        # Set default relative directory for testing
        $current_relative_dir = $page_name != "./home.php" ? ".." : ".";
        # Check if current environment is production
        $prod = $_SERVER['HTTP_HOST'] != "localhost:3000";
        # Link to stylesheet based on env
        echo "<link rel='stylesheet' href='", $prod ? $current_relative_dir : ".", "/styles/styles.css' />";
        # Requires a file that defines a number of variables
        require 'vars.php';
        # Requires a file that defines a number of user-defined functions
        require 'functions.php';
        ?>
    </head>
    <body>
        <div class="col-container">
            <?php
            # Display the content sidebar
            require("$current_relative_dir/layouts/sidebar.php");
            ?>
            <div class="col-right">
                <?php
                # Display the content header
                require("$current_relative_dir/layouts/header.php");
                ?>
                <div class="body-section">
                    <div class="body-section-content">
                        <?php
                        # Display the selected page content
                        include("$page_name");
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