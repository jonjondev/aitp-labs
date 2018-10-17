<!--
index_content.php
Jonathan Moallem 10/17/2018

The LABP1 setup page content. For being called and displayed by a layout.
-->
<?php
define('DECIMAL_PLACES', 2);
define('TRAIN_PRICE', 1);
define('TRUCK_PRICE', 3);
define('CAR_PRICE', 7);

$weight = @$_POST['weight'];
$trainMiles = @$_POST['train'];
$truckMiles = @$_POST['truck'];
$carMiles = @$_POST['car'];

function get_price($miles, $centsValue) {
    return $miles * $centsValue;
}

function cents_to_dollars($cents) {
    return $cents / 100;
}
?>
<form action='./index.php' method='post'>
    <div class="labp1-outer-box">
        <h4 class="labp1-box-title">
            <?php echo $weight ? "Total Shipment Cost" : "Cost of Package Delivery"; ?>
        </h4>
        <div class="labp1-inner-box">
            <div class="labp1-inner-box-content">
                <br />
                <?php if ($weight) {
                    echo "<p>For a $weight pound package, it is estimated that:</p>";

                    if ($trainMiles) {
                        echo "<p>$", number_format(cents_to_dollars(get_price($trainMiles, TRAIN_PRICE)), DECIMAL_PLACES), " Train freight cost</p>";
                    }

                    if ($truckMiles) {
                        echo "<p>$", number_format(cents_to_dollars(get_price($truckMiles, TRUCK_PRICE)), DECIMAL_PLACES), " Truck freight cost</p>";
                    }

                    if ($carMiles) {
                        echo "<p>$", number_format(cents_to_dollars(get_price($carMiles, CAR_PRICE)), DECIMAL_PLACES), " Car freight cost</p>";
                    }
                } else { ?>
                    <span>Weight:</span>
                    <input type="text" name="weight" />
                    <span>Pounds</span>
                    <br />
                    <span>By Train:</span>
                    <input type="text" name="train" />
                    <span>miles</span>
                    <br />
                    <span>By Truck:</span>
                    <input type="text" name="truck" />
                    <span>miles</span>
                    <br />
                    <span>By Car:</span>
                    <input type="text" name="car" />
                    <span>miles</span>
                    <br />
                <?php } ?>
                <br />
            </div>
        </div>
        <?php
        if ($weight) {
            $total_cents = get_price($trainMiles, TRAIN_PRICE) + get_price($truckMiles, TRUCK_PRICE) + get_price($carMiles, CAR_PRICE);
            echo "Total shipping charges: $", number_format(cents_to_dollars($total_cents), DECIMAL_PLACES);
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
if ($weight) {
    echo "<p>", date("H:i M d, Y T", getlastmod()), " | <a href='./'>Return to form page</a></p>";
}
else {
    echo "<p><a href='./passengers.php'>Proceed to part 2</a></p>";
}
?>