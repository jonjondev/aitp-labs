<!--
calendar_content.php
Jonathan Moallem 10/11/2018

The LAB2 calendar page content. For being called and displayed by a layout.
-->
<?php
define('APPOINTMENTS_KEY', 'appointments');
define('STUDENT_NAME_KEY', 'studentName');
define('STUDENT_EMAIL_KEY', 'studentEmail');
define('PROFESSOR_EMAIL_KEY', 'euyar@masonlive.gmu.edu');

$appointments_key = APPOINTMENTS_KEY;
$student_name_key = STUDENT_NAME_KEY;
$student_email_key = STUDENT_EMAIL_KEY;

$student_email = $_POST[$student_email_key];
if ($student_email) {
    $student_name = $_POST[$student_name_key];
    $body = "$student_name has booked appointments with you. Consult the office hours signup page for more information";
    $headers = "From: $student_email";
    $title = "New Appointment Booking: $student_name";
    echo mail(PROFESSOR_EMAIL_KEY, $title, $body, $headers) ? "Email successfully sent from $student_email" : "There was an issue sending your email";
}
?>
<div class="lab2-container">
    <form action='./calendar.php' method='post'>
        <div class="lab2-cal-header">
            <h1 class="title-text">Student Hours Signup</h1>
            <div>
                <?php
                echo "<span>Student Name:</span> <input type='text' name='$student_name_key' />";
                echo "<span>Student Email:</span> <input type='text' name='$student_email_key' />";
                ?>
                <input type="submit" />
                <input type="reset" value="Clear" />
            </div>
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
            function get_appointment_controls($date, $events) {
                $return_string = "<div class='appointment-controls'>";
                if ($events) {
                    foreach ($events as $time) {
                        $checkbox_value = $date.'-'.$time;
                        $appointments = $_POST[$appointments_key];
                        if ($appointments && in_array($checkbox_value, $appointments)) {
                            $student_name = $_POST[$student_name_key];
                            $return_string .= "<span class='appointment-text'>
                                $time - $student_name</span><br />";
                        }
                        else {
                            $return_string .= "<input type='checkbox' 
                                                      name='{$appointments_key}[]' 
                                                      value='$checkbox_value' />
                                <label for='time'>$time</label>
                                <br />";
                        }
                    }
                }
                $return_string .= "</div>";
                return $return_string;
            }

            function make_date_box($date, $events) {
                $appointment_controls = get_appointment_controls($date, $events);
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
                $current_day = date("$i-m-Y");
                $week_day = date('w', strtotime($current_day));
                $day_events = $_POST["day_$week_day"];
                make_date_box($i, $day_events);
            }

            for ($i = 1; $i <= 5; $i++) {
                if ($_POST["day_$i"]) {
                    foreach($_POST["day_$i"] as $value) {
                        echo "<input type='hidden' name='day_{$i}[]' value='$value'>";
                    }
                }
            }
            ?>
        </div>
    </form>
</div>