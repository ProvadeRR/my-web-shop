<?php require_once 'app/views/plugins/nav_bar.php';?>

<div class="container">
    <div class="product d-flex justify-content-between flex-wrap" style="margin-top: 100px;"><?php setItems($vars); ?> </div>
</div>


<?php

function setItems($items = []){
    extract($items);
    require_once 'app/views/main_add/card-item.php';
};
?>


<?php

?>

