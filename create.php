<?php
// Kas submit nuppu on vajutatud
?>
<div class="row">
    <div class="col-md-8 mx-auto">
        <h2 class="text-center">Create - Tee uus sissekanne</h2>

        <?php
        // Siia tuleb kas roheline või punane teavitus kast lisamise kohta
        ?>

        <form action="#" method="post">
            <div class="row mb-2">
                <label for="name" class="col-sm-2 form-label mt-1 fw-bold">Name</label>
                <div class="col">
                    <input type="text" name="name" value="" id="name" class="form-control" required>
                </div>
            </div>

            <div class="row mb-2">
                <label for="birth" class="col-sm-2 form-label mt-1 fw-bold">Birth</label>
                <div class="col">
                    <input type="date" name="birth" value="" value="<?php echo date("Y-m-d"); ?>" id="birth" class="form-control" required>
                </div>
            </div>

            <div class="row mb-2">
                <label for="salary" class="col-sm-2 form-label mt-1 fw-bold">Salary</label>
                <div class="col">
                    <input type="number" min="0" max="9999" step="1" name="salary" value="" id="salary" class="form-control">
                </div>
            </div>

            <div class="row mb-2">
                <label for="height" class="col-sm-2 form-label mt-1 fw-bold">Height</label>
                <div class="col">
                    <input type="number" min="0.00" max="2.72" step="0.01" name="height" value="" id="height" class="form-control">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="submit" name="submit" value="Lisa isik" class="btn btn-success form-control">
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-warning form-control">Reseti vorm</button>
                </div>

            </div>
        </form>
    </div>
</div>