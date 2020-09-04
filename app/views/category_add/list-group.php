<?php foreach ($categories as $category): ?>
<div class="list-group" style="margin-top: 30px">
    <a href="/category/<?=$category['category_alias'];?>" class="list-group-item list-group-item-action"><?=$category['category'];?></a>
</div>
<?php endforeach;
