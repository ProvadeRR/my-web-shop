<?php require_once 'app/views/plugins/nav_bar.php';?>

<div class="container" >
    <?php require_once 'app/views/main_add/card.php';?>
    <div class="product d-flex justify-content-between; flex-wrap">
        <?php setItems($items); ?>
    </div>
</div>


<?php

function setItems($items = []){
    extract($items);
    require_once 'app/views/main_add/card-item.php';
};
?>