<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Checker</title>
</head>
<body>
    <form method="post">
        Enter your grade: <input type="number" name="grade" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = $_POST['grade'];

        if ($grade >= 90) {
            echo "With Honors.";
        } elseif ($grade >= 75) {
            echo "Passed";
        } else {
            echo "Failed";
        }
    }
    ?>
</body>
</html>
