<?php
?>

@include('includes/header')
@include('includes/navigation')


<div class="container container-show-user-table">
    <div class="row">
        <h3>Zoznam členov</h3>
        <table class="table table-striped" id="showUserTable">
            <thead class="show-user-table-head">
                <tr >
                    <th>ID</th>
                    <th>Meno</th>
                    <th>Priezvisko</th>
                    <th>Email</th>
                    <th>Vek</th>
                    <th>Možnosti</th>
                </tr>
            </thead>
            <tbody class="show-user-table-body">
            @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>
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

@include('includes/footer')

<script>
    $('#aa li a').removeClass('active');
    $('#headList').addClass('active');
</script>

