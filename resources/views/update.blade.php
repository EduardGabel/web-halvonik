<?php
?>

@include('includes/header')
@include('includes/navigation')

<div class="container">
    <form method="post" action="{{ action('UserController@editUser', ['id' => $user->id])}}">
        <div class="add-user-form">
            Meno:<br>
            <input type="text" name="firstname" value="{{ $user->meno }}">
            <br>
            Priezvisko:<br>
            <input type="text" name="lastname" value="{{ $user->priezvisko }}">
            <br>
            Email:<br>
            <input type="text" name="email" value="{{ $user->email }}">
            <br>
            Heslo:<br>
            <input type="text" name="pass" value="{{ $user->heslo }}">
            <br>
            Vek:<br>
            <input type="number" name="age" value="{{ $user->vek }}">
            <br><br>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Upraviť">
        </div>
    </form>
</div>

