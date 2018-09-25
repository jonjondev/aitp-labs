<div class="lab1-container">
    <?php
    function get_percentage($earned, $maximum) {
        return ($earned / $maximum) * 100;
    }

    function get_weighted_percentage($percentage, $weight) {
        return ($weight * $percentage) / 100;
    }

    $participation_percentage = get_percentage(
        $_POST['earnedParticipation'], $_POST['maxParticipation']);
    $participation_weighted = get_weighted_percentage($participation_percentage, 
        $_POST['weightParticipation']);
    echo "<p>You earned a ", round($participation_percentage, 2),"% for Participation, with a weighted value of ", round($participation_weighted, 2), "%</p>";

    $quiz_percentage = get_percentage(
        $_POST['earnedQuiz'], $_POST['maxQuiz']);
    $quiz_weighted = get_weighted_percentage($quiz_percentage, 
        $_POST['weightQuiz']);
    echo "<p>You earned a ", round($quiz_percentage, 2),"% for the Quizzes, with a weighted value of ", round($quiz_weighted, 2), "%</p>";

    $lab_percentage = get_percentage(
        $_POST['earnedLab'], $_POST['maxLab']);
    $lab_weighted = get_weighted_percentage($lab_percentage, 
        $_POST['weightLab']);
    echo "<p>You earned a ", round($lab_percentage, 2),"% for the Lab Assignments, with a weighted value of ", round($lab_weighted, 2), "%</p>";

    $practicum_percentage = get_percentage(
        $_POST['earnedPracticum'], $_POST['maxPracticum']);
    $practicum_weighted = get_weighted_percentage($practicum_percentage, 
        $_POST['weightPracticum']);
    echo "<p>You earned a ", round($practicum_percentage, 2),"% for the Practica, with a weighted value of ", round($practicum_weighted, 2), "%</p>";
    ?>
</div>