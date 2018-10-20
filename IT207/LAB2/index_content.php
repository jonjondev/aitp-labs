<!--
index_content.php
Jonathan Moallem 10/03/2018

The LAB2 setup page content. For being called and displayed by a layout.
-->
<?php
function get_time_select_box($day_index) {
    echo "<select multiple class='lab2-time-select' name='day_{$day_index}[]'>
            <option value='7:00am'>7:00am</option>
            <option value='7:30am'>7:30am</option>
            <option value='8:00am'>8:00am</option>
            <option value='8:30am'>8:30am</option>
            <option value='9:00am'>9:00am</option>
            <option value='9:30am'>9:30am</option>
            <option value='10:00am'>10:00am</option>
            <option value='10:30am'>10:30am</option>
            <option value='11:00am'>11:00am</option>
            <option value='11:30am'>11:30am</option>
            <option value='12:00pm'>12:00pm</option>
            <option value='12:30pm'>12:30pm</option>
            <option value='1:00pm'>1:00pm</option>
            <option value='1:30pm'>1:30pm</option>
            <option value='2:00pm'>2:00pm</option>
            <option value='2:30pm'>2:30pm</option>
            <option value='3:00pm'>3:00pm</option>
            <option value='3:30pm'>3:30pm</option>
            <option value='4:00pm'>4:00pm</option>
            <option value='4:30pm'>4:30pm</option>
            <option value='5:00pm'>5:00pm</option>
            <option value='5:30pm'>5:30pm</option>
            <option value='6:00pm'>6:00pm</option>
            <option value='6:30pm'>6:30pm</option>
            <option value='7:00pm'>7:00pm</option>
            <option value='7:30pm'>7:30pm</option>
            <option value='8:00pm'>8:00pm</option>
            <option value='8:30pm'>8:30pm</option>
            <option value='9:00pm'>9:00pm</option>
            <option value='9:30pm'>9:30pm</option>
            <option value='10:00pm'>10:00pm</option>
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