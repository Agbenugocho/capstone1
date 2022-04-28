<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chess Board</title>
    <style>
        table {
            /* width: 400px; */
            border: 2px solid black;
            background-color: black;
            padding: 0px;
        }
        td {
            width: 30px;
            height: 30px;
            margin: 0px;
            padding: 0px;
        }
        th {
            padding: 10px;
            color: black;
            background-color: white;
            border-bottom: 2px solid black;
        }
        .bg-white {
            background-color: white;
        }
        .bg-black {
            background-color: black;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <th colspan="8">
                THE CHESS BOARD
            </th>

            <?php
                for ($row=1; $row <= 8; $row++) { 
                    echo '<tr>';

                    for ($col=1; $col <= 8; $col++) { 
                        echo ' <td class="'; if (($row+$col)%2==0) { echo 'bg-black'; } 
                                            else { echo 'bg-white'; } echo '"></td> ';
                    }

                    echo '</tr>';
                }
            
            ?>
                
        </table>

        <sub> <i> &copy; 2022 by Group 42, PHP Side Hustle 5.0 </i></sub>
        
    </div>

</body>
</html>