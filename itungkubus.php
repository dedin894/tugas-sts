<!DOCTYPE html>
<html>
<head>
    <title>Hitung Volume Kubus</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
    <h3>Hitung Volume Kubus</h3>
    <form method="post">
        Sisi kubus: <input type="number" name="sisi" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisi = $_POST['sisi'];
        $volume = pow($sisi, 3);
        echo "<p>Volume kubus dengan sisi $sisi adalah: <b>$volume</b></p>";
    }
    ?>
</div>
</body>
</html>