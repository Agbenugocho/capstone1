<!DOCTYPE html>
<html lang="en">
<head>
    <title>Electricity Bill</title>
    <style>
        div {
            width: fit-content;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div>
    <form action="" method="post">
        <fieldset>
            <legend>Calculate Electricity Bill</legend>
            <p><label for="units">Input number of units</label></p>
            <p><input type="text" id="units" name="units"></p>
            <p><input type="submit" value="Calculate" name="submit"></p>
        
        <?php
            if (isset($_POST['submit'])) {
                $units = $_POST['units'];
                $rem = 0;
                $totalBill = 0;
                $bill1 = 3.50 * $units;
                $bill2 = 4.00 * $rem;
                $bill3 = 5.20 * $rem;
                $bill4 = 6.50 * $rem;

                if ($units <=50) {
                    $totalBill = $bill1;
                }

                elseif ($units > 50 && $units <= 150) {
                    $rem = $units - 50;
                    $bill1 = 3.5 * 50;
                    $totalBill = $bill1 + $bill2;
                    }
           
               elseif ($units > 150 && $units <= 250) {
                    $rem = $units - 150;
                    $bill1 = 3.5 * 50;
                    $bill2 = 4.0*100;
                    $totalBill = $bill1 + $bill2 + $bill3;
                    }
           
                else{
                    $rem = $units - 250;
                    $bill1 = 3.5 * 50;
                    $bill2 = 4.0 * 100;
                    $bill3 = 5.2 * 100;
                    $totalBill = $bill1 + $bill2 + $bill3 + $bill4;
                }

                echo "Your electricity Bill is <b>$totalBill NGN </b>";
            }
        ?>

        </fieldset>
    </form>
    
    <sub> <i> &copy; 2022 by Group 42, PHP Side Hustle 5.0 </i></sub>
    
    </div>
</body>
</html>