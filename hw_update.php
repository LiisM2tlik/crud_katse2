<?php
if (isset($_POST['sid'])) {
    //siia sql lause
    
}
// Kas submit nuppu on vajutatud
else if (!(isset($_GET['id']) && (int)$_GET['id'])) echo 'ID vigane!';
else {
$db = new DB();
$db->dbConnect();
$sql = "SELECT id, name, birth, salary, height, added from simple WHERE id= " . (int)$_GET['id'];
$results = $db->dbGetArray($sql);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <h3 class="text-center">Update - Kliki muutmis ikoonil muutmiseks</h3>
            <?php
            // Kui toimus uuendamine (faili alguses olev if lause on tõene!)
            if ($results) {
            
            // sql lause, päring ja if lause
            ?>
                <table class="table table-bordered table-striped table-hover mt-2">
                    <thead class="text-center">
                        <tr>
                            <th>Nimi</th>
                            <th>Sünniaeg</th>
                            <th>Palk</th>
                            <th>Pikkus</th>
                            <th>Lisatud</th>
                            <th>Tegevus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // foreach-loop algab
                        ?>
                            <tr>
                            <td class="text-end"><?=$results[0]['name']?></td>
                                <td><?=$results[0]['birth']?></td>
                                <td class="text-end"><?=$results[0]['salary']?></td>
                                <td class="text-end"><?=$results[0]['height']?></td>
                                <td><?=$results[0]['added']?></td>
                                <td class="text-center">
                                    <a href="index.php?category=9&id=<?=$results[0]['id']?>"><i class="fa-solid fa-pen-to-square text-warning" title="Edit"></i></a>
                                </td>
                            </tr>
                        <?php
                        // foreach-loop lõppeb
                        ?>
                    </tbody>
                </table>
            <?php
            }
            else {// if lause else
            ?>
                <p class="text-danger fs-4 text-center fw-bold">Isikuid ei leitud</p>
            <?php
            }
            // if lause lõppeb
        }
            ?>
        </div>

        <div class="col-sm-2"></div>
    </div>
</div>