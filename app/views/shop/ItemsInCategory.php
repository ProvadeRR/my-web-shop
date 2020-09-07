<div class="items">
    <?php foreach ($items as $item):?>
    <div class="product-item" style="margin-top: 30px">
        <img src="/<?=$item['title_image'];?>">
        <div class="product-list">
            <h3><?=$item['title_item'];?></h3>
            <span class="price"><?=$item['price'] . ' ₴';?></span>
            <a href="/item/<?=$item['alias'];?>">Подробнее</a>
        </div>
    </div>
    <?php endforeach;?>
</div>

<?php $class = " <link rel='stylesheet' href='/app/public/styles/main_page.css'>" ?>