<h2 class="text-center">Avaleht - Sirvi kogu tabelit</h2>
<?php
// Lisame siia leheküljendamise
include 'paginate.php';
// sql lause, päring ja if lause

$page = isset($_GET['pg']) ? (int)$_GET['pg'] : 1;

$offset = ($page -1) * MAXPERPAGE;

$db = new DB();
$db->dbConnect();
$sql = "SELECT id, name, birth, salary, height, added from simple LIMIT $offset, " . MAXPERPAGE;
$results = $db->dbGetArray($sql);
$i=0;
?>

<table class="table table-hover table-bordered">
    <thead>
        <tr class="text-center">
        <?php if (isset($_GET['category']) && (int)$_GET['category'] == 5) {?>
                <!-- kõik mis siia jääb on ainult siis kui category on 5 ehk kodutöö -->
                <th> Jrk. </th>
                <?php } ?>
            <th>Nimi</th>
            <th>Sünniaeg</th>
            <th>Palk</th>
            <th>Pikkus</th>
            <th>Lisatud</th>
            <?php if (isset($_GET['category']) && (int)$_GET['category'] == 5) {?>
                <th> Redigeeri </th>
                <?php } ?>
        </tr>
    </thead>
    <tbody>
    <? foreach($results as $row) { 
        $i++;
        ?>
        <tr>
        <?php if (isset($_GET['category']) && (int)$_GET['category'] == 5) {?>
                <!-- kõik mis siia jääb on ainult siis kui category on 5 ehk kodutöö -->
                <td> <?=$i+$offset?> </td>
                <?php } ?>
            <td><?=$row['name']?></td>
            <td class="text-center"><?=$row['birth']?></td>
            <td class="text-end"><?=$row['salary']?></td>
            <td class="text-end"><?=$row['height']?></td>
            <td class="text-end"><?=$row['added']?></td>
            <?php if (isset($_GET['category']) && (int)$_GET['category'] == 5) {?>
                <!-- kõik mis siia jääb on ainult siis kui category on 5 ehk kodutöö -->
                <td class="text-center"> 
                <a href="index.php?category=7&id=<?=$row['id']?>"><i class="fa-solid fa-pen-to-square text-warning" title="Edit"></i></a>
                <a href="index.php?category=8&id=<?=$row['id']?>"><i class="fa-solid fa-trash-can text-danger" title="Delete"></i></a>
                </td>
                <?php } ?>
        </tr>
    <? } ?>
    </tbody>
</table>
<?PHP if (!$results) { ?>
<div class="alert alert-danger">Sobivaid kirjeid ei leitud</div>
<?PHP } ?>
