<?php require_once 'app/views/plugins/banner.php';?>
    <?php
    if(isset($_SESSION['message'])):
    ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['message'];unset($_SESSION['message']);?>
        </div>

     </div>
    <?php endif;?>
    <div class="container">
        <div class="items">

        </div>
    </div>

<?php $class = " <link rel='stylesheet' href='/app/public/styles/main_page.css'>" ?>
<?php $script = "<script src='/app/public/js/main_page.js'></script>";?>
