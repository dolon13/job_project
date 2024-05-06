<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    #countdown {
        font-size: 24px;
        font-weight: bold;
        position: fixed;
        top: 0;
        right: 50px;
    }
</style>
<body>
    <div class="container">
        <h1>Quiz</h1>
        <p id="countdown"></p>
        <form action="check.php" method="POST" class="quiz-form" id="quizForm">
            <?php
                session_start();
                $id = $_SESSION['jobid'];
                include("conn.php");
                $query = "SELECT `question`, `A`, `B`, `C`, `D`, `ans` FROM `question` WHERE circularId = '$id'";
                $run = mysqli_query($conn, $query);
                $i = 0;
                $_SESSION['tq'] = 0;
                while($row = mysqli_fetch_assoc($run)){
            ?>
                <div class="question">
                    <p class="question-text"><?php echo $row['question'] ?></p>
                    <ul class="options">
                        <li>
                            <input type="radio" name="<?php echo $i.'ans' ?>" id="ans<?php echo $i ?>_A" value="<?php echo $row['A']; ?>">
                            <label for="ans<?php echo $i ?>_A"><?php echo $row['A']; ?></label>
                        </li>
                        <li>
                            <input type="radio" name="<?php echo $i.'ans' ?>" id="ans<?php echo $i ?>_B" value="<?php echo $row['B']; ?>">
                            <label for="ans<?php echo $i ?>_B"><?php echo $row['B']; ?></label>
                        </li>
                        <li>
                            <input type="radio" name="<?php echo $i.'ans' ?>" id="ans<?php echo $i ?>_C" value="<?php echo $row['C']; ?>">
                            <label for="ans<?php echo $i ?>_C"><?php echo $row['C']; ?></label>
                        </li>
                        <li>
                            <input type="radio" name="<?php echo $i.'ans' ?>" id="ans<?php echo $i ?>_D" value="<?php echo $row['D']; ?>">
                            <label for="ans<?php echo $i ?>_D"><?php echo $row['D']; ?></label>
                        </li>
                    </ul>
                    <input type="hidden" name="<?php echo $i.'cans' ?>" value="<?php echo $row['ans']; ?>">
                </div>
            <?php
                $i++;
                $_SESSION['tq']++;
                } 
            ?>
            <input type="submit" value="Submit" name="submit" class="submit-button" id="submit">
        </form>
    </div>
    <script>
// Set the countdown time in seconds
var countdownTime = 600; // 5 minutes

// Get the countdown element
var countdownElement = document.getElementById('countdown');

// Get the form element
var form = document.getElementById('quizForm');
let submit = document.getElementById('submit');

// Function to submit the form
function submitForm() {
    form.submit();
}
// Function to update the countdown
function updateCountdown() {
    var minutes = Math.floor(countdownTime / 60);
    var seconds = countdownTime % 60;
    // Add leading zero if seconds is less than 10
    seconds = seconds < 10 ? '0' + seconds : seconds;
    // Update the countdown element
    countdownElement.textContent = minutes + ':' + seconds;
}

// Start the countdown
var countdownInterval = setInterval(function() {
    countdownTime--;
    if (countdownTime <= 0) {
        clearInterval(countdownInterval);
        // Call a function or submit a form when the countdown reaches zero
        // Here, I'm just logging a message
        submit.click();
    }
    updateCountdown(); // Update the countdown display
}, 1000); // Update the countdown every second
document.addEventListener('visibilitychange', function() {
	if(document.hidden){
        submit.click();
    }
});
</script>
</body>
</html>
