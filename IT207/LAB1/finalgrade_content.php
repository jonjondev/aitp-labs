<div class="lab1-container">
    <?php
    function get_percentage($earned, $maximum) {
        return ($earned / $maximum) * 100;
    }

    function get_weighted_percentage($percentage, $weight) {
        return ($weight * $percentage);
    }

    $participation_percentage = get_percentage(
        $_POST['earnedParticipation'], $_POST['maxParticipation']);
    $participation_weighted = get_weighted_percentage($participation_percentage, 
        $_POST['weightParticipation']);
    echo "<p>You earned a ", round($participation_percentage, 2),"% for Participation, with a weighted value of ", round($participation_weighted, 2), "%</p>";
    ?>
</div>