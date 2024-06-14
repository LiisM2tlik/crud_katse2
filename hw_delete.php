<?php
// Kas ids on olemas ja kas see on number
if (!(isset($_GET['id']) && (int)$_GET['id'])) echo 'ID vigane!';

$db = new DB();
$db->dbConnect();
$sql = "SELECT id, name, birth, salary, height, added from simple WHERE id= " . (int)$_GET['id'];
$results = $db->dbGetArray($sql);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <h3 class="text-center">Delete - Kustuta kirje tabelist</h3>
            <?php
            // Kui toimus kustutamine (faili alguses olev if lause on tõene!)
            if ($results) {

            // Näita tulemust
            // SQL lause, päring ja if lause kas tulemust on
            
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
                        // foreach-loop algus                            
                        ?>
                            <tr>
                                <td class="text-end"><?=$results[0]['name']?></td>
                                <td><?=$results[0]['birth']?></td>
                                <td class="text-end"><?=$results[0]['salary']?></td>
                                <td class="text-end"><?=$results[0]['height']?></td>
                                <td><?=$results[0]['added']?></td>
                                <td class="text-center">
                                    <a href="" onclick="if (confirm('Kas oled kindel?')) { return true; } else { return false; }">
                                        <i class="fa-solid fa-trash-can text-danger" title="Delete"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        // foreach-loop lõpp
                        ?>
                    </tbody>
                </table>
            <?php
            }
            else {// if lause els osa
            ?>
                <p class="text-danger fs-4 text-center fw-bold">Isikuid ei leitud</p>
            <?php
            }
            // if lause lõpp
            ?>
        </div>

        <div class="col-sm-2"></div>
    </div>
</div>