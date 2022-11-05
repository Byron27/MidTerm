<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Vendo Machine</H1>
    <form method="post">
        <input type="checkbox" name="cbdrinks[]" id="chkCoke" value="Coke"> <label for="cbdrinks">Coke - &#8369; 15</label><br>
        <input type="checkbox" name="cbdrinks[]" id="chkSprite" value="Sprite"> <label for="cbdrinks">Sprite - &#8369; 20</label><br>
        <input type="checkbox" name="cbdrinks[]" id="chkRoyal" value="Royal"> <label for="cbdrinks">Royal - &#8369; 20</label><br>
        <input type="checkbox" name="cbdrinks[]" id="chkPepsi" value="Pepsi"> <label for="cbdrinks">Pepsi - &#8369; 15</label><br>
        <input type="checkbox" name="cbdrinks[]" id="chkMountaindew" value="Mountain Dew"> <label for="cbdrinks">Mountain Dew - &#8369; 20</label><br>
        <label for="size">size:</label>
            <select name="size" id="size">
                <option value="Regular"> Regular</option>
                <option value="Up-Size">Up-Size (Add &#8369;5)</option>
                <option value="Jumbo">Jumbo (Add &#8369;10)</option>
            </select>
        <label for="">Quantity:</label>
        <input type="number" name="quantity" min="1" max="100"value="1">
        <input type="submit" name="btnProcess" value="Process">
    <hr>
    <?php
        if (isset ($_POST['btnProcess']) && isset($_POST['cbdrinks'])) {
            $arrdrinks = $_POST['cbdrinks'];
            $size = $_POST['size'];
            $quantity = $_POST['quantity'];
            echo '<h3>Purchase Summary:</h3>';
            $addon = 0;
            if ($size == 'Regular') {
                $addon = 0;
            }
            elseif ($size == 'Up-Size') {
                $addon = 5;
            }
            elseif ($size == 'Jumbo') {
                $addon = 10;
            }
            $piece = 'Piece';
            if ($quantity > 1) {
                $piece = 'Pieces';
            }
            $totalnum = count($arrdrinks)*$quantity;
            $price = 0;
            $totalprice = 0;
            $i = 0;
            do {
                if ($arrdrinks[$i] == 'Coke') {
                    $price = (15*$quantity) + ($addon*$quantity);
                    $totalprice = $totalprice + $price ;
                }
                elseif ($arrdrinks[$i] == 'Sprite') {
                    $price = (20*$quantity) + ($addon*$quantity);
                    $totalprice = $totalprice + $price ;
                }
                elseif ($arrdrinks[$i] == 'Royal') {
                    $price = (20*$quantity) + ($addon*$quantity);
                    $totalprice = $totalprice + $price ;
                }
                elseif ($arrdrinks[$i] == 'Pepsi') {
                    $price = (15*$quantity) + ($addon*$quantity);
                    $totalprice = $totalprice + $price ;
                }
                elseif ($arrdrinks[$i] == 'Mountain Dew') {
                    $price = (20*$quantity) + ($addon*$quantity);
                    $$totalprice = $totalprice + $price ;
                }
                echo "<li>$quantity $piece $size $arrdrinks[$i] Amounting to &#8369; $price. <br></li>";
                $i++;
            }
            while ($i < count($arrdrinks));
            echo '<b>Total Numbers of Item:</b>' . $totalnum. '<br>';
            echo '<b>Total Amount: &#8369;</b>' . $totalprice;
        }
    ?>
</body>
</html>