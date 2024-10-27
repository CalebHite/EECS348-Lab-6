<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<form method="post">
    <label>Enter a number: </label>
    <input type="number" name="number" min="1" required>
    <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["number"]);

    echo "<h2>Multiplication Table of $num</h2>";
    echo "<table>";

    echo "<tr><th>*</th>";
    for ($i = 1; $i <= $num; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $num; $i++) {
        echo "<tr><th>$i</th>"; // Row index
        for ($j = 1; $j <= $num; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
