@extends('../layout/base')

@section('content')

    <div class="wrapper">
        @include('inc.sidebar')
        <div class="main-panel">
             @include('inc.navbar')
            <div class="content">
                <div class="container-fluid">
                    @include('inc.content')
                </div>
            </div>
            @include('inc.footer')
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

