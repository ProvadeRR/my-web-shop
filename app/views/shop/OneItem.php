<div style="display: flex;justify-content: space-between;margin: 50px 20px 50px 0">
    <div class="left-column" >
        <img src="/<?=$item['title_image'];?>" alt="">
    </div>
    <!-- Right Column --></pre>
    <div class="right-column"><!-- Product Description -->
        <div class="product-description">
            <h3><?= 'Категория: ' . $item['category'];?></h3>
            <h3><?='Модель:' . $item['title_item'];?></h3>
            <h3 class="product-price"> <?='Cтоимость: '. $item['price'] . ' ₴';?></h3>
            <h2>
                <form action="/buyProduct" method="post">
                    <button type="submit" class="btn btn-outline-success" name="id" style="width: 100%; height: 40px" value="<?=$item['id'];?>">Купить</button>
                </form>
            </h2>
        </div>
    </div>
</div>
<div>
    <?=$item['description'];?>
</div>


<?php $class = " <link rel='stylesheet' href='/app/public/styles/one_item.css'>" ?>