<!DOCTYPE html>
    <head>
        <style type = "text/css">
            table, tr, td{
                border: 1px solid;
            }
            table th{
                background-color: red;
                width: 310px;
                height: 80px;
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <?php
            $smartphone = [2 => 'Samsung Galaxy S22', 4 => 'Samsung Galaxy S22+', 6 => 'Samsung Galaxy A03', 8 => 'Samsung Galaxy Xcover 5'];
        ?>
        <table>
        <tr> 
            <th><b>Daftar Smartphone Samsung</b></th>
        </tr>
        <tr>
            <td><?php echo $smartphone[2] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[4] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[6] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[8] ?></td>
        </tr>
    </body>
</html>