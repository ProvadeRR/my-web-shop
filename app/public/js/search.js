let search = [];
function my_search(){

    if(search.length === 0){
        $.ajax({
            url: '/api/main',
            method:'GET',
            success: function(data){
                console.log(data.response)
                data.response.forEach((response,i) =>{
                    search.push({
                        title: response.title_item,
                        category: response.category,
                        categoryalias:response.category_alias,
                        aliasitem: response.alias,
                    })
                });
            }

        })

    }
}
$('#inputSearch').on('input',function(e){
    $('#list').html('');
    console.log(search)
    let res = [];
    for (let i in search){
        let input = new RegExp(e.target.value,'gi');
        if(search[i].title.search(input) != -1 ){
            res.push(search[i].title);
        }
        else if(search[i].category.search(input) != -1){
           if(res[0] != search[i].category){
               res.push(search[i].category);
           }
        }
    }

    res.forEach((item,i) => {
            $('#list').append(`<option id="resultSearch" name="search" value="${item}">${item}</option>`)
    });
})

