<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tugas5_1</title>
</head>
<body>
    <?php
        $log1_1= (false and false);
        $log1_2= (false or false);
        $log2_1= (false and true);
        $log2_2= (false or true);
        $log3_1= (true and false);
        $log3_2= (true or false);
        $log4_1= (true and true);
        $log4_2= (true or true);
    ?>
    <p>Tugas Logika 1111</p>
    <table border="1">
        <tr>
            <td>Input true</td>
            <td>Input 2</td>
            <td>AND</td>
            <td>OR</td>
        </tr>
        <tr>
            <td>false</td>
            <td>false</td>
            <td><?php printf("%b",$log1_1); ?></td>
            <td><?php printf("%b",$log1_2); ?></td>
        </tr>
        <tr>
            <td>false</td>
            <td>true</td>
            <td><?php printf("%b",$log2_1); ?></td>
            <td><?php printf("%b",$log2_2); ?></td>
        </tr>
        <tr>
            <td>true</td>
            <td>false</td>
            <td><?php printf("%b",$log3_1); ?></td>
            <td><?php printf("%b",$log3_2); ?></td>
        </tr>
        <tr>
            <td>true</td>
            <td>true</td>
            <td><?php printf("%b",$log4_1); ?></td>
            <td><?php printf("%b",$log4_2); ?></td>
        </tr>
    </table>
</body>
</html>