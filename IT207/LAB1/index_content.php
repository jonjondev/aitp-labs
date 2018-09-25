<!--
index_content.php
Jonathan Moallem 09/09/2018

The LAB1 page content. For being called and displayed by a layout.
-->
<title>IT 207 Final Grade Determiner</title>
<div class="lab1-container">
    <?php
        echo "<form action='./finalgrade.php' method='post'>";
    ?>
        <h3>Participation</h3>
        Earned: <input type="text" name="earnedParticipation" />
        Max: <input type="text" name="maxParticipation" />
        Weight (percentage): <input type="text" name="weightParticipation" />
        <h3>Quizzes</h3>
        Earned: <input type="text" name="earnedQuiz" />
        Max: <input type="text" name="maxQuiz" />
        Weight (percentage): <input type="text" name="weightQuiz" />
        <h3>Lab Assignments</h3>
        Earned: <input type="text" name="earnedLab" />
        Max: <input type="text" name="maxLab" />
        Weight (percentage): <input type="text" name="weightLab" />
        <h3>Practica</h3>
        Earned: <input type="text" name="earnedPracticum" />
        Max: <input type="text" name="maxPracticum" />
        Weight (percentage): <input type="text" name="weightPracticum" />
        <br /><br />
        <input type="submit" />
    </form>
</div>