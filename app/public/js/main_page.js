$(document).ready(function(){
   $.ajax({
      url: '/api/main',
      method:'GET',
      success: function(data){
            if(data.code == '200'){
                data.response.forEach((item,i) =>{
                    $('.items').append(
                        `<div class="product-item" style="margin-top: 30px">
                        <img src=${item.title_image}>
                        <div class="product-list">
                        <h3>${item.title_item}</h3>
                        <span class="price">${item.price + ' ₴'} </span>
                        <a href="item/${item.alias}">Подробнее</a>
                        </div>
                        </div>`
                    );
                });
            }
      },
   });
});