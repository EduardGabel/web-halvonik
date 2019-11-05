

@include('includes/header')
@include('includes/navigation')

<div class="container">
    <form method="post" action="{{ action('UserController@editUser', ['id' => $user->id])}}">
        <div class="add-user-form">
            <input type="text" name="firstname" value="{{ $user->meno }}" placeholder="Meno">
            <input type="text" name="lastname" value="{{ $user->priezvisko }}" placeholder="Priezvisko">
            <input type="text" name="email" value="{{ $user->email }}" placeholder="Email">
            <input type="text" name="pass" value="{{ $user->heslo }}" placeholder="Heslo">
            <input type="number" name="age" value="{{ $user->vek }}" placeholder="Vek">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Upraviť">
            <button><i><-</i> Späť</button>
        </div>

    </form>


</div>

<script>
    $('#aa li a').removeClass('active');
    $('#headList').addClass('active');
</script>

