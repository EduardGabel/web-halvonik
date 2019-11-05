

@include('includes/header')
@include('includes/navigation')

<div class="container add-user-container">
    <h3>Pridať nového člena</h3>
    <form method="post" action="{{ action('UserController@insertUser')}}">
        <div class="add-user-form">
            <input id="inputName" type="text" name="firstname" placeholder="Meno" required>
            <input type="text" name="lastname" placeholder="Priezvisko" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="number" name="age" placeholder="Vek" required>
            <input type="password" name="pass" placeholder="Heslo" required>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Odoslať">
        </div>
    </form>
</div>

@include('includes/footer')

<script>
    $('#aa li a').removeClass('active');
    $('#headAdd').addClass('active');
</script>
