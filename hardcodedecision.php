<?php
// Hardcoded grade value
$grade = 92;

if ($grade >= 75) {
    echo "Congratulations, you passed!" . "<br>";
    if ($grade >= 90) {
        echo " With Honors!";
    }
} else {
    echo "Unfortunately, you did not pass.";
}

?>
