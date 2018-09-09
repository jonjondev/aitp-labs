<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>A Webpage</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <link rel="stylesheet" href="/IT207/styles.css" />
        <?php
        # Requires a file that defines a number of variables
        require 'vars.php';
        # Requires a file that defines a number of user-defined functions
        require 'functions.php';
        ?>
    </head>
    <body>
        <div class="col-container">
            <div class="col col-left">
                <div class="container">
                    <br />
                    <h3 class="no-line-height">Lab Assignments</h3>
                    <ul>
                        <?php
                        # Display four assignment links from a loop
                        for ($i = 1; $i <= 4; $i++) {
                            echo list_itemify("<a href='/IT207/LAB$i'>Assignment $i</a>");
                        }
                        ?>
                    </ul>
                    <br />
                    <h3 class="no-line-height">Lab Practica</h3>
                    <ul>
                        <?php
                        for ($i = 1; $i <= 2; $i++) {
                            echo list_itemify("<a href='/IT207/LABP$i'>Practicum $i</a>");
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col col-right">
                <div class="header-section">
                    <div class="header-section-inner-box">
                        <div class="header-section-inner-box-left text-center minimal-padding">
                            <h3>Course Title, Section, Semester</h3>
                            <h3 class="unbolded">Instructor's Name</h3>
                            <h3 class="unbolded">University Name</h3>
                        </div>
                        <div class="header-section-inner-box-right text-center minimal-padding">
                            <h3 >Your Name</h3>
                            <h3 class="unbolded">
                                <?php
                                # Create mailto link for email
                                $mailto_link = "mailto:" . $user_email;
                                # Display mailto link
                                echo "<a href='$mailto_link'>$user_email</a>"

                                ?>
                            </h3>
                            <h3>
                                <span>Last Modified:</span>
                                <span class="unbolded">Time Date Zone</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="body-section">
                    <div class="body-content">
                        <h3>Lab Content</h3>
                    </div>
                </div>
                <div class="footer-section">
                    <h3 class="text-center">Copyright Content</h3>
                </div>
            </div>
        </div>
    </body>
</html>