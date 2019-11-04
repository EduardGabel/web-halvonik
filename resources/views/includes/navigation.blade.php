<div class="container">
    <div class="nav">
        <ul>
            <li class="home"><a class="active" href="#">Home</a></li>
            <li class="home"><a href="{{ action('UserController@showAllAction')}}">Zoznam</a></li>
            <li class="about"><a href="{{ action('UserController@showUserForm')}}">Pridať</a></li>
        </ul>
    </div>
</div>