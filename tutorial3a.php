<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Number</th>
            <th>Multiplier</th>
            <th>Result</th>
        </tr>

    
    
        <?php
            $i = 1;
            $multi = 3;
            for ($i = 1; $i<=10; $i ++) {
        ?>

            <tr> 
                <td><?php echo $i; ?></td>
                <td><?php echo $multi; ?></td>
                <td><?php echo $i * $multi; ?></td>
            </tr> 
            
        <?php }

        ?>
    </table>


</body>
</html>