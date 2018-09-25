<!--
sidebar.php
Jonathan Moallem 09/11/2018

An include containing the layout sidebar content.
-->

<div class="col-left">
    <div class="col-left-content">
        <br />
        <div class="text-center">
            <?php
                echo "<a href='$current_relative_dir/'>Home</a>";
            ?>
        </div>
        <br />
        <h3 class="no-line-height">Lab Assignments</h3>
        <ul>
            <?php
            # Display four assignment links from a loop
            for ($i = 1; $i <= 4; $i++) {
                # Make item display inside <li></li> tags
                echo list_itemify("<a href='$current_relative_dir/LAB$i'>Assignment $i</a>");
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