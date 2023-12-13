
<?php if($mail == '') { ?>
    <h3>Inserire Email</h3>
<?php } else{ ?>
    <h3 class="mt-2 alert <?php echo (str_contains($mail, '@') && str_contains($mail, '.')) ? 'alert-success' : 'alert-danger' ?>">Email <?php echo (str_contains($mail, '@') && str_contains($mail, '.')) ? 'Valida' : 'non valida' ?></h3>
<?php } ?>

