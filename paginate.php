<?php 
// Siia tuleb suurem ports PHP koodi aga kõik on loogiline

// Tee sobilik päring tabelisse. Vaata koodi peale inlcude 'paginate.php' (näiteks homepage.php)
$db = new DB();
$db->dbConnect();

$sql = "SELECT COUNT(*) as cnt from simple";
$results = $db->dbGetArray($sql);

//lehekülje number aadressirealt
$pg = isset($_GET['pg']) ? (int)$_GET['pg'] : 1;
$category = isset($_GET['category']) ? (int)$_GET['category'] : 6;

//andmebaasist saadud kirjete arv jagatud ette antud kirjete limiidiga
$pageCount = $results[0]['cnt'] / MAXPERPAGE;

?>
<nav aria-label="Page navigation">
    <ul class="pagination pagination-color justify-content-center">
        <li class="page-item">
            <a class="page-link <?php echo($pg == 1) ? 'disabled' : null; ?>" href="index.php?category=<?=$category?>&pg=<?=($pg-1)?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php 
        // for-loop algus
            for($x = 0; $x < $pageCount; $x++) {       
            ?>
            <li class="page-item">
                <a class="page-link <?php echo (($x +1) == $pg) ? 'active' : null; ?>" href="index.php?category=<?=$category?>&pg=<?=($x+1)?>"><?=($x+1)?></a>
            </li>
            <?php
        // for-loop lõpp
            }
        ?>
        <li class="page-item">
            <a class="page-link <?php echo($pg >= $pageCount) ? 'disabled' : null; ?>" href="index.php?category=<?=$category?>&pg=<?=($pg+1)?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
