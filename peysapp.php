<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>
    <form method="post">
    <label for="range">Select Photo Size:</label>
    <input type="range" min="150" max="650" step="50" name="range">
    <br>
    
    <label for="">Select Border Color:</label>
    <input type="color" name="bcolor" value="#FF000F">
    <input type="submit" id="Process" name="btnProcess">
    <br>
    
    <?php
        $width = 150;
        $bcolor = $_POST['bcolor'];
        if (isset($_POST['btnProcess'])) {
            $width = $_POST['range'];
        }
        echo '<img src="romnet.jpg.jpg" width="'.$width.'" style="border-style: solid; border-color: '. $bcolor.';">';
    ?>
</body>
</html>

