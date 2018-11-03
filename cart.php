<?php

session_start();

require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <p>Pecan Nuts : <?= $_SESSION['pecan_nuts']; ?> </p>
        <p>Chocolat Chips : <?= $_SESSION['chocolate_chips']; ?> </p>
        <p>Chocolat cookies : <?= $_SESSION['chocolate_cookie']; ?> </p>
        <p>M&M's Cookies : <?= $_SESSION['mms_cookie']; ?> </p>
        
    </div>
</section>
<?php require 'inc/foot.php'; ?>
