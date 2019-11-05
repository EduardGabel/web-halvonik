

@include('includes/header')
@include('includes/navigation')

<div class="container">
    <form method="post" action="{{ action('UserController@editUser', ['id' => $user->id])}}">
        <div class="add-user-form">
            <input type="text" name="firstname" value="{{ $user->meno }}" placeholder="Meno" required>
            <input type="text" name="lastname" value="{{ $user->priezvisko }}" placeholder="Priezvisko" required>
            <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" required>
            <input type="number" name="age" value="{{ $user->vek }}" placeholder="Vek" required>
            <input type="password" name="pass" value="{{ $user->heslo }}" placeholder="Heslo" required>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Upraviť">
            <button><i><-</i><a href="{{ action('UserController@showAllAction')}}"></a>Späť</button>
        </div>

    </form>


</div>

<script>
    $('#aa li a').removeClass('active');
    $('#headList').addClass('active');
</script>

