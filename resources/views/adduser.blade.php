<?php
?>

@include('includes/header')
@include('includes/navigation')

<div class="container">
    <form method="post" action="{{ action('UserController@insertUser')}}">
        <div class="add-user-form">
            Meno:<br>
            <label for="inputName"></label>
            <input id="inputName" type="text" name="firstname" placeholder="Meno">
            <br>
            Priezvisko:<br>
            <input type="text" name="lastname" placeholder="Priezvisko">
            <br>
            Email:<br>
            <input type="text" name="email" placeholder="Email">
            <br>
            Vek:<br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="number" name="age" placeholder="Tel.číslo">
            <br><br>
            <input type="submit" value="Odoslať">
        </div>
    </form>
</div>

<script>
    $('#aa li a').removeClass('active');
    $('#headAdd').addClass('active');
</script>