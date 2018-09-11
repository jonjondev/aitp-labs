<!--
header.php
Jonathan Moallem 09/11/2018

An include containing the layout header content.
-->
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