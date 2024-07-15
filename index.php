<?php
$file = fopen('data.csv','r');

echo "<table border = 1px>";
$frist_item = [];

while($line = fgetcsv($file)){?>
    <tr>
        <td><?= $line[0]?></td>
        <td><?= $line[1]?></td>
        <td><?= $line[2]?></td>
        <td><?= $line[3]?></td>
        <td><?= $line[4]?></td>
        <td><?= $line[5]?></td>
        <td><?= $line[6]?></td>
        <td><?= $line[7]?></td>
    </tr>
    
<?php 
$frist_item[] =  $line[5];

}
array_shift($frist_item);
$sum = number_format((float)array_sum($frist_item), 2, '.', '');
echo "<tr><td style = 'text-align: center'; colspan = '5'>Total</td><td>$sum</td></tr>";

echo "</table>";

?>