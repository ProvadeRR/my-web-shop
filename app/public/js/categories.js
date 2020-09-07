$(document).ready(function(){
    $.ajax({
        url: '/api/categories',
        method:'GET',
        success: function(data){
            if(data.code == '200'){
                data.response.forEach((category , i ) => {
                    $('.list-group').append(
                        `<a style="margin-bottom: 20px" href="/category/${category.category_alias}" class="list-group-item list-group-item-action">${category.category}</a>`
                    );
                })
            }
        },
    });
});