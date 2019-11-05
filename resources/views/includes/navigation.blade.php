<div class="nav" id="navigation">
    <div class="container">
        <ul id="aa">
            <li  class="home"><a class="active" href="{{ action('UserController@home_page')}}" id="headHome">Home</a></li>
            <li class="home"><a href="{{ action('UserController@showAllAction')}}" id="headList">Zoznam</a></li>
            <li class="about"><a href="{{ action('UserController@showUserForm')}}" id="headAdd">Pridať</a></li>
        </ul>
    </div>
</div>