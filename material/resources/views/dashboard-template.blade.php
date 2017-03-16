@extends('../layout/base')

@section('content')

    <div class="wrapper">
        @include('inc.dashboard.sidebar')
        <div class="main-panel">
             @include('inc.dashboard.navbar')
            <div class="content">
                <div class="container-fluid">
                     @include('inc.dashboard.content')
                </div>
            </div>
            @include('inc.dashboard.footer')
        </div>
    </div>
    
@endsection


@section('customJs')

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

@endsection

