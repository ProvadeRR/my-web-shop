<h2 style="text-align: center">Совершение покупки</h2>
<h4 >Товар: <?=$title_item;?></h4>
<img src="/<?=$title_image?>" alt="" style="width: 350px;">
<form method="post" action="/accessBuy">
    <div class="form-group">
        <label for="exampleFormControlInput1">Ваша почта</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Введите номер телефона</label>
        <input type="text" class="form-control" name="phone" value="+380">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Город</label>
        <input type="text" class="form-control" name="city" value="" placeholder="Например: Днепропетровск">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Введите номер отделения</label>
        <textarea class="form-control"  name="branch" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-success float-right" name="id" value="<?=$id?>">Оформить заказ</button>
</form>