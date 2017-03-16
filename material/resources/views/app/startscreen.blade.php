@extends('../layout/base')

@section('content')
   {{--  @include('inc.presenter.navbar') --}}
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="{{asset('assets/img/bg-pricing.jpg')}}">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content" style="padding-top: 5vh;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="title text-white">Pick the best plan for you</h2>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card card-pricing card-raised">
                                    <div class="content">
                                        <h6 class="category">Create Account</h6>
                                        <div class="icon icon-primary">
                                            <i class="fa fa-user-o"></i>
                                        </div>
                                        <h3 class="card-title">$29</h3>
                                        <p class="card-description">
                                            This is good if your company size is between 2 and 10 Persons.
                                        </p>
                                        
                                        <a href="{{url('/createaccount')}}" class="btn btn-primary btn-round">Create Account </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6" data-header-animation="true"> 
                                <div class="card card-pricing card-raised">
                                    <div class="content">
                                        <h6 class="category">Services</h6>
                                        <div class="icon icon-danger">
                                            <i class="fa fa-server"></i>
                                        </div>
                                        <h3 class="card-title">$29</h3>
                                        <p class="card-description">
                                            This is good if your company size is between 2 and 10 Persons.
                                        </p>
                                        <a href="#pablo" class="btn btn-danger btn-round">Services</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card card-pricing card-raised">
                                    <div class="content">
                                        <h6 class="category">Recent Accounts</h6>
                                        <div class="icon icon-success">
                                            <i class="fa fa-history"></i>
                                        </div>
                                        <h3 class="card-title">$29</h3>
                                        <p class="card-description">
                                            This is good if your company size is between 2 and 10 Persons.
                                        </p>
                                        <a href="{{url('/history')}}" class="btn btn-success btn-round">Recent Accounts Created </a>
                                    </div>
                                </div>
                            </div>

                     </div>

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


{{-- @section('preferences')
    @include('inc.preferences')
@endsection --}}

