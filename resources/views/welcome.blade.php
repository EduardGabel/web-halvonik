@include('includes/header')

{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}
{{--                        <a href="{{ route('register') }}">Register</a>--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            </div>--}}
@include('includes/navigation')
<div class="container">
    <div class="welcome-title">
        <h2>Webová stránka pre cvičenia Laravel,<span> Eduard Gábel</span></h2>
    </div>
    <div class="welcome-body">
        <p>Pokročivé webové technológie</p>
    </div>
</div>

@include('includes/footer')


{{-----JS------}}
<script>
    $('#aa li a').removeClass('active');
    $('#headHome').addClass('active');
</script>

