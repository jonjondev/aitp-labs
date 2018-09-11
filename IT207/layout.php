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
                <div class="header-section">
                    <div class="header-section-inner-box">
                        <div class="header-section-inner-box-left text-center minimal-padding">
                            <h4>
                                <?php
                                # Add all items to an array backwards
                                $display_info_items = array($semester_taken, 
                                    "Section $course_section", $course_title, "BAD_DATA");
                                # Remove last item from the array
                                array_pop($display_info_items);
                                # Reverse the order of items in the array
                                $display_info_items = array_reverse($display_info_items);
                                # Display items as a comma-separated list
                                echo join(", ", $display_info_items);
                                ?>
                            </h4>
                            <h4 class="unbolded">
                                <?php
                                # Get a subsring that does not include underscores
                                # (see vars.php for original form)
                                echo substr($instructor_name, 3, 10);
                                ?>
                            </h4>
                            <h4 class="unbolded">
                                <?php
                                # Upcase the string
                                # (see vars.php for original form)
                                echo ucwords($university_name)
                                ?>
                            </h4>
                        </div>
                        <div class="header-section-inner-box-right text-center minimal-padding">
                            <h4>
                                <?php
                                # Remove middle name from display
                                # (see vars.php for original form)
                                echo str_replace(" David ", " ", $user_name);
                                ?>
                            </h4>
                            <h4 class="unbolded">
                                <?php
                                # Create mailto link for email
                                $mailto_link = "mailto:" . $user_email;
                                # Display mailto link
                                echo "<a href='$mailto_link'>$user_email</a>"

                                ?>
                            </h4>
                            <h4>
                                <span>Last Modified:</span>
                                <span class="unbolded">
                                    <?php
                                    # Sets PHP to use EST/EDT timezones
                                    date_default_timezone_set('US/Eastern');
                                    # Outputs the page's last modification time
                                    echo date("H:i M d, Y T", getlastmod());
                                    ?>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
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