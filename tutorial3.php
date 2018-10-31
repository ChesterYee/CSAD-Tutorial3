<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>
    #custom td {
    border: 1px solid #BBB;
    padding: 8px;
}

</style>

</head>
<body>
    <table id="custom">
        <tr>
            <th>Number</th>
            <th>Odd/Even</th>
            <th>Prime?</th>
        </tr>

    
        <?php

            function IsPrime($n) {

                if ($n == 1) {
                    return 0;
                } else {
                    for ($x = 2; $x < $n; $x++) {
                        if ($n % $x == 0) {
                            return 0;
                        }
                    }

                    return 1;
                }
            
            }

            $i = 1;
            for ($i = 1; $i<=10; $i ++) {
                $oddEven = ($i % 2 == 0) ? "Even": "Odd";
                $prime = IsPrime($i)? "Yes" : "No";
        ?>

            <tr> 
                <td><?php echo $i; ?></td>
                <td><?php
                if ($i % 2 == 0) {
                    echo 'Even';
                } else {
                    echo 'Odd';
                }; ?></td>
                <td><?php echo $prime;?></td>

            </tr> 
            
        <?php }

        ?>
    </table>


</body>
</html>