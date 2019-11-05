<?php
?>

@include('includes/header')
@include('includes/navigation')

<div class="container add-user-container">
    <h3>Pridať nového člena</h3>
    <form method="post" action="{{ action('UserController@insertUser')}}">
        <div class="add-user-form">
            <input id="inputName" type="text" name="firstname" placeholder="Meno">
            <input type="text" name="lastname" placeholder="Priezvisko">
            <input type="text" name="email" placeholder="Email">
            <input type="number" name="age" placeholder="Tel.číslo">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Odoslať">
        </div>
    </form>
</div>

<script>
    $('#aa li a').removeClass('active');
    $('#headAdd').addClass('active');
</script>