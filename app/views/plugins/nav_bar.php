<nav class="navbar navbar-dark bg-dark" style="margin-bottom: 50px">
    <h3 class="text-white text-right"><a href="/" style="color:white;text-decoration: none">My IT-Shop</a></h3>
    <form  class="form-inline mt-2 mt-md-0" action="/search" method="get">
        <h5 class="text-white text-right"><a href="/categories" style="color:white;text-decoration: none;margin-right: 20px">Категории</a></h5>
        <input class="form-control mr-sm-2" name="search" id="inputSearch"  onclick="my_search()" type="text" list="list"  placeholder="Search" aria-label="Search">
        <datalist id="list"></datalist>
        <button class="btn btn-outline-success my-2 my-sm-0" id="toSearch" type="submit">Search</button>
    </form>
</nav>

