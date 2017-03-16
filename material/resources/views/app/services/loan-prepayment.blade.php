@extends('../layout/base')


@section('content')

	<div class="wrapper">
        @include('inc.dashboard.sidebar')
        <div class="main-panel">
             @include('inc.dashboard.navbar')
            <div class="content">
                <div class="container-fluid">
                   {{--  @include('inc.dashboard.content') --}}
                        <div class="card">
                                <form id="TypeValidation" class="form-horizontal" action="#" method="">
                                    <div class="card-header card-header-text" data-background-color="rose">
                                        <h4 class="card-title">Loan Disbursement</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Required Text</label>
                                            <div class="col-sm-7">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="required" required="true" />
                                                </div>
                                            </div>
                                            <label class="col-sm-3 label-on-right">
                                                <code>required</code>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Email</label>
                                            <div class="col-sm-7">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="email" email="true" />
                                                </div>
                                            </div>
                                            <label class="col-sm-3 label-on-right">
                                                <code>email="true"</code>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Number</label>
                                            <div class="col-sm-7">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="number" number="true" />
                                                </div>
                                            </div>
                                            <label class="col-sm-3 label-on-right">
                                                <code>number="true"</code>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Url</label>
                                            <div class="col-sm-7">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="url" url="true.html" />
                                                </div>
                                            </div>
                                            <label class="col-sm-3 label-on-right">
                                                <code>url="true"</code>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Equal to</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" placeholder="#idSource" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalTo="#idSource" />
                                                </div>
                                            </div>
                                            <label class="col-sm-4 label-on-right">
                                                <code>equalTo="#idSource"</code>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-rose btn-fill">Validate Inputs</button>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
            @include('inc.dashboard.footer')
        </div>
    </div>
 
@endsection



@section('customJs')

<script type="text/javascript">
    function setFormValidation(id) {
        $(id).validate({
            errorPlacement: function(error, element) {
                $(element).parent('div').addClass('has-error');
            }
        });
    }

    $(document).ready(function() {
        
        setFormValidation('#TypeValidation');
        
    });
</script>
@endsection

