<div class="lab1-container">
    <?php
    define('DECIMAL_PLACES', 2);
    define('PERCENT_DIVISOR', 100);

    function get_percentage($earned, $maximum) {
        return ($earned / $maximum) * PERCENT_DIVISOR;
    }

    function get_weighted_percentage($percentage, $weight) {
        return ($weight * $percentage) / PERCENT_DIVISOR;
    }

    $participation_percentage = get_percentage(
        $_POST['earnedParticipation'], $_POST['maxParticipation']);
    $participation_weighted = get_weighted_percentage($participation_percentage, 
        $_POST['weightParticipation']);
    echo "<p>You earned a ", round($participation_percentage, DECIMAL_PLACES),"% for Participation, with a weighted value of ", round($participation_weighted, DECIMAL_PLACES), "%</p>";

    $quiz_percentage = get_percentage(
        $_POST['earnedQuiz'], $_POST['maxQuiz']);
    $quiz_weighted = get_weighted_percentage($quiz_percentage, 
        $_POST['weightQuiz']);
    echo "<p>You earned a ", round($quiz_percentage, DECIMAL_PLACES),"% for the Quizzes, with a weighted value of ", round($quiz_weighted, DECIMAL_PLACES), "%</p>";

    $lab_percentage = get_percentage(
        $_POST['earnedLab'], $_POST['maxLab']);
    $lab_weighted = get_weighted_percentage($lab_percentage, 
        $_POST['weightLab']);
    echo "<p>You earned a ", round($lab_percentage, DECIMAL_PLACES),"% for the Lab Assignments, with a weighted value of ", round($lab_weighted, DECIMAL_PLACES), "%</p>";

    $practicum_percentage = get_percentage(
        $_POST['earnedPracticum'], $_POST['maxPracticum']);
    $practicum_weighted = get_weighted_percentage($practicum_percentage, 
        $_POST['weightPracticum']);
    echo "<p>You earned a ", round($practicum_percentage, DECIMAL_PLACES),"% for the Practica, with a weighted value of ", round($practicum_weighted, DECIMAL_PLACES), "%</p>";

    $summed_marks = $participation_weighted + $quiz_weighted + $lab_weighted + $practicum_weighted;

    define('D_GRADE', 60);
    define('C_GRADE', 70);
    define('Cp_GRADE', 75);
    define('B_GRADE', 80);
    define('Bp_GRADE', 85);
    define('A_GRADE', 90);
    define('Ap_GRADE', 95);

    $letter_grade = $summed_marks >= D_GRADE ? "D" : "F";
    $letter_grade = $summed_marks >= C_GRADE ? "C" : $letter_grade;
    $letter_grade = $summed_marks >= Cp_GRADE ? "C+" : $letter_grade;
    $letter_grade = $summed_marks >= B_GRADE ? "B" : $letter_grade;
    $letter_grade = $summed_marks >= Bp_GRADE ? "B+" : $letter_grade;
    $letter_grade = $summed_marks >= A_GRADE ? "A" : $letter_grade;
    $letter_grade = $summed_marks >= Ap_GRADE ? "A+" : $letter_grade;

    echo "<p class='bolded'>Your final grade is a ", round($summed_marks, DECIMAL_PLACES),"%, which is a ", $letter_grade, ".</p>";
    ?>
</div>