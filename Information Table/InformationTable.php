<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Information Table</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php

        function InformationTable($name, $phone, $age, $adress) {
            ?>
            <table>
                <tr>
                    <td>Name</td>
                    <td><?=$name?></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td><?=$phone?></td>    
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?=$age?></td>    
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?=$adress?></td>    
                </tr>
            </table><br />
            <?php
        }

        echo InformationTable('Gosho', '0882-321-423', 24, 'Hadji Dimitar');
        echo InformationTable('Pesho', '0884-888-888', 67, 'Suhata Reka');
        ?>
    </body>
</html>
