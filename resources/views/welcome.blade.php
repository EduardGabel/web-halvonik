

    @include('includes/header')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            </div>
    @include('includes/navigation') {{--navigation header--}}


    <div>
        <div class="container welcome-title">
            <h2>Webová stránka pre cvičenia s laravelom</h2>
        </div>
    </div>

    @include('includes/footer')

    <script>
        $('#aa li a').removeClass('active');
        $('#headHome').addClass('active');
    </script>

