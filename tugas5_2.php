<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tugas5_2</title>
</head>
<body>
    <?php
        $in1_1= "Ayo";
        $in1_2= "Bersama";
        $in2_1= "Belajar";
        $in2_2= "Niomic";
    ?>
    <h2>Operator String</h2>
    <table border="1">
        <tr>
            <td>Input 1</td>
            <td>Input 2</td>
            <td>Hasil</td>
        </tr>
        <tr>
            <td><?php echo $in1_1; ?></td>
            <td><?php echo $in2_1; ?></td>
            <td><?php echo $in1_1." ".$in2_1; ?></td>
        </tr>
        <tr>
            <td><?php echo $in1_2; ?></td>
            <td><?php echo $in2_2; ?></td>
            <td><?php echo $in1_2." ".$in2_2; ?></td>
        </tr>
    </table>
    <p>Gabungan : <?php echo $in1_1." ".$in2_1." ".$in1_2." ".$in2_2; ?> :)</p>
</body>
</html>