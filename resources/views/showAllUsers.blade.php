<?php
?>

@include('includes/header')
@include('includes/navigation')


<div class="container" id="showUsersTable">
    <div class="row">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Meno</th>
                <th scope="col">Priezvisko</th>
                <th scope="col">Email</th>
                <th scope="col">Vek</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>
                        {{$user->meno}}
                    </td>
                    <td>
                        {{$user->priezvisko}}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->vek }}
                    </td>
                    <td>
                        <a class="btn btn-warning"
                           href="{{ action('UserController@edit_page',['id' => $user->id])}}">Upraviť</a>
                        <a class="btn btn-danger"
                           href="{{ action('UserController@deleteUser',['id' => $user->id])}}">Vymazať</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
