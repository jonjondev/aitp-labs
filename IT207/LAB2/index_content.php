<!--
index_content.php
Jonathan Moallem 10/03/2018

The LAB2 setup page content. For being called and displayed by a layout.
-->
<?php
function get_time_select_box($day_index) {
    echo "<select multiple class='lab2-time-select' name='day_{$day_index}[]'>
            <option value='07:00'>7:00am</option>
            <option value='07:30'>7:30am</option>
            <option value='08:00'>7:00am</option>
            <option value='08:30'>8:30am</option>
            <option value='09:00'>9:00am</option>
            <option value='09:30'>9:30am</option>
            <option value='10:00'>10:00am</option>
            <option value='10:30'>10:30am</option>
            <option value='11:00'>11:00am</option>
            <option value='11:30'>11:30am</option>
            <option value='12:00'>12:00pm</option>
            <option value='12:30'>12:30pm</option>
            <option value='13:00'>1:00pm</option>
            <option value='13:30'>1:30pm</option>
            <option value='14:00'>2:00pm</option>
            <option value='14:30'>2:30pm</option>
            <option value='15:00'>3:00pm</option>
            <option value='15:30'>3:30pm</option>
            <option value='16:00'>4:00pm</option>
            <option value='16:30'>4:30pm</option>
            <option value='17:00'>5:00pm</option>
            <option value='17:30'>5:30pm</option>
            <option value='18:00'>6:00pm</option>
            <option value='18:30'>6:30pm</option>
            <option value='19:00'>7:00pm</option>
            <option value='19:30'>7:30pm</option>
            <option value='20:00'>8:00pm</option>
            <option value='20:30'>8:30pm</option>
            <option value='21:00'>9:00pm</option>
            <option value='21:30'>9:30pm</option>
            <option value='22:00'>10:00pm</option>
        </select>";
}

?>

<div class="lab2-container">
    <div class="lab2-cal-header">
        <h1 class="title-text">Office Hours Setup Form</h1>
    </div>
    <div class="lab2-day-boxes">
        <div class="lab2-time-box">
            <p class="day-text">Monday</p>
        </div>
        <div class="lab2-time-box">
            <p class="day-text">Tuesday</p>
        </div>
        <div class="lab2-time-box">
            <p class="day-text">Wednesday</p>
        </div>
        <div class="lab2-time-box">
            <p class="day-text">Thursday</p>
        </div>
        <div class="lab2-time-box">
            <p class="day-text">Friday</p>
        </div>
    </div>
    <form action='./calendar.php' method='post'>
        <div class="lab2-date-boxes">
            <div class='lab2-time-box'>
                <div class='lab2-date-box-inner'>
                    <?php
                    get_time_select_box(1);
                    ?>
                </div>
            </div>
            <div class='lab2-time-box'>
                <div class='lab2-date-box-inner'>
                    <?php
                    get_time_select_box(2);
                    ?>
                </div>
            </div>
            <div class='lab2-time-box'>
                <div class='lab2-date-box-inner'>
                    <?php
                    get_time_select_box(3);
                    ?>
                </div>
            </div>
            <div class='lab2-time-box'>
                <div class='lab2-date-box-inner'>
                    <?php
                    get_time_select_box(4);
                    ?>
                </div>
            </div>
            <div class='lab2-time-box'>
                <div class='lab2-date-box-inner'>
                    <?php
                    get_time_select_box(5);
                    ?>
                </div>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="Clear" />
            <input type="submit" />
        </div>
    </form>
</div>