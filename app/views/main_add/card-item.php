<?php foreach($items as $item): ?>

<div class="product-item" style="margin-top: 30px">
    <img src="/<?=$item['title_image'];?>">
    <div class="product-list">
        <h3><?=$item['title_item']?></h3>
        <span class="price"><?= $item['price'] . ' ₴'?></span>
        <a href="/categories/<?=$item['category_alias'] . '/' . $item['alias'];?>" class="button">Подробнее</a>
    </div>
</div>


<?php endforeach; ?>
<style>
    * {box-sizing: border-box;}
    .product-item {
        float:left;
        width: 250px;
        text-align: center;
        margin: 0 auto;
        border-bottom: 2px solid #F5F5F5;
        background: white;
        font-family: "Open Sans";
        transition: .3s ease-in;
    }

    .product-item:hover {border-bottom: 2px solid skyblue}
    .product-item img {
        display: block;
        width: 100%;
        height: 180px;
    }
    .product-list {
        background: #fafafa;
        padding: 15px 0;
    }
    .product-list h3 {
        font-size: 18px;
        font-weight: 400;
        color: #444444;
        margin: 0 0 10px 0;
    }
    .price {
        font-size: 16px;
        color: #fc5a5a;
        display: block;
        margin-bottom: 12px;
    }
    .button {
        text-decoration: none!important;
        display: inline-block;
        padding: 0 12px;
        background: #cccccc;
        color: white;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 28px;
        transition: .3s ease-in;
    }
    .product-item:hover .button {background: skyblue;}
</style>