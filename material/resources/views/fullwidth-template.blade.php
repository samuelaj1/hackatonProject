@extends('../layout/base')

@section('content')
    @include('inc.presenter.navbar')
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="{{asset('assets/img/login.jpg')}}">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                     @include('inc.presenter.content')
                </div>

            </div>

            @include('inc.presenter.footer')
        </div>
    </div>
@endsection

@section('customJs')
    <script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
@endsection


@section('preferences')
    @include('inc.preferences')
@endsection

