<!--
index_content.php
Jonathan Moallem 10/03/2018

The LAB2 setup page content. For being called and displayed by a layout.
-->
<div class="lab2-container">
    <div class="lab2-cal-header">
        <h1 class="title-text">Office Hours Setup Form</h1>
    </div>
    <div class="lab2-day-boxes">
        <div class="lab2-time-box">
            <p class="day-text"><b>Day:</b></p>
        </div>
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
    <div class="lab2-date-boxes">
        <div class='lab2-date-box'>
            <div class='lab2-date-box-inner'>
                <p>Time:</p>
            </div>
        </div>
        <div class='lab2-time-box'>
            <div class='lab2-date-box-inner'>
                <p>Time:</p>
            </div>
        </div>
        <div class='lab2-time-box'>
            <div class='lab2-date-box-inner'>
                <p>Time:</p>
            </div>
        </div>
        <div class='lab2-time-box'>
            <div class='lab2-date-box-inner'>
                <p>Time:</p>
            </div>
        </div>
        <div class='lab2-time-box'>
            <div class='lab2-date-box-inner'>
                <p>Time:</p>
            </div>
        </div>
        <div class='lab2-time-box'>
            <div class='lab2-date-box-inner'>
                <p>Time:</p>
            </div>
        </div>
    </div>
    <form action='./calendar.php' method='post' class="text-center">
        <div>
            <input type="submit" value="Clear" />
            <input type="submit" />
        </div>
    </form>
</div>