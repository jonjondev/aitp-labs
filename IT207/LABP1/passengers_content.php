<!--
part2_content.php
Jonathan Moallem 10/17/2018

The LABP1 part2 setup page content. For being called and displayed by a layout.
-->
<?php
define('BUS_CAPACITY', 35);
define('CAR_CAPACITY', 6);

$passengers = @$_POST['passengers'];

function display_option($number) {
    $string = "";
    for ($i = 0; $i < $number; $i++) {
        $string .= "o ";
    }
    return $string;
}
?>
<form action='./passengers.php' method='post'>
    <div class="labp1-outer-box">
        <h4 class="labp1-box-title">
            <?php echo $passengers ? "Passenger Distribution" : "Passenger Distribution Results"; ?>
        </h4>
        <div class="labp1-inner-box">
            <div class="labp1-inner-box-content">
                <br />
                <?php if ($passengers) {
                    echo "<p>$passengers passengers need transportation:</p>";
                    $bus_ontake = round($passengers/BUS_CAPACITY, 2) % 10;
                    $left_over = $passengers % BUS_CAPACITY;
                    $car_ontake = round($left_over/CAR_CAPACITY, 2) % 10;
                    $left_over = $left_over % CAR_CAPACITY;
                    echo "<p>$bus_ontake Busses Needed</p>";
                    echo display_option($bus_ontake);
                    echo "<p>$car_ontake Cars Needed</p>";
                    echo display_option($car_ontake);
                    echo "<p>$left_over Passengers left over</p>";
                    echo display_option($left_over);
                } else { ?>
                    <span>Total Number of Passengers:</span>
                    <input type="text" name="passengers" />
                    <br />
                <?php } ?>
                <br />
            </div>
        </div>
        <?php
        if ($passengers) {
            echo "<p>Legend: Passengers per Bus = 35 | per Car = 6</p>";
        }
        else {
            echo "<input type='submit' />";
        }
        ?>
    </div>
</form>
<br />
<br />
<?php
if ($passengers) {
    echo "<p>", date("H:i M d, Y T", getlastmod()), " | <a href='./passengers.php'>Return to form page</a></p>";
}
else {
    echo "<p><a href='./index.php'>Proceed to part 1</a></p>";
}
?>