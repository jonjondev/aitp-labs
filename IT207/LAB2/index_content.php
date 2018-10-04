<!--
index_content.php
Jonathan Moallem 09/09/2018

The LAB2 page content. For being called and displayed by a layout.
-->
<div class="lab2-container">
    <div class="lab2-cal-header">
        <h1 class="title-text">Student Hours Signup</h1>
        <form action='./meme.php' method='post'>
            <div>
                <span>Student Name:</span> <input type="text" name="studentName" />
                <span>Student Email:</span> <input type="text" name="studentEmail" />
                <input type="submit" />
                <input type="submit" value="Clear" />
            </div>
        </form>
        <h4 class="title-text">
            <?php
            echo date('F, Y')
            ?>
        </h4>
    </div>
    <div class="lab2-day-boxes">
        <div class="lab2-day-box">
            <p class="day-text">Sunday</p>
        </div>
        <div class="lab2-day-box">
            <p class="day-text">Monday</p>
        </div>
        <div class="lab2-day-box">
            <p class="day-text">Tuesday</p>
        </div>
        <div class="lab2-day-box">
            <p class="day-text">Wednesday</p>
        </div>
        <div class="lab2-day-box">
            <p class="day-text">Thursday</p>
        </div>
        <div class="lab2-day-box">
            <p class="day-text">Friday</p>
        </div>
        <div class="lab2-day-box">
            <p class="day-text">Saturday</p>
        </div>
    </div>
    <div class="lab2-date-boxes">
        <?php
        function get_appointment_controls() {
            return "<div class='appointment-controls'>
                        <input type='checkbox' name='time' />
                        <label for='time'>7:00am</label>
                        <br />
                        <span class='appointment-text'>7:30am - Jon</span>
                        <br />
                    </div>";
        }

        function make_date_box($date) {
            $appointment_controls = get_appointment_controls();
            echo "<div class='lab2-date-box'>
                    <div class='lab2-date-box-inner'>
                        <p class='date-text'>$date</p>
                        $appointment_controls
                    </div>
                </div>";
        }

        function make_blank_box() {
            echo "<div class='lab2-date-box'></div>";
        }

        $number_of_days = date('t');
        $first_day = date('01-m-Y');
        $offset = date('w', strtotime($first_day));

        for ($i = 0; $i < $offset; $i++) {
            make_blank_box();
        }

        for ($i = 1; $i <= $number_of_days; $i++) {
            make_date_box($i);
        }
        ?>
    </div>
</div>