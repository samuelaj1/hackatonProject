@extends('../layout/base')


@section('content')

	<div class="wrapper">
        @include('inc.dashboard.sidebar')
        <div class="main-panel">
             @include('inc.dashboard.navbar')
            <div class="content">
                <div class="container-fluid">
                   {{--  @include('inc.dashboard.content') --}}
                    {{-- starts here --}}
                        <div class="row">
                            <div class="col-sm-12">
                        <!--      Wizard container        -->
                        <div class="wizard-container">
                            <div class="card wizard-card" data-color="rose" id="wizardProfile">
                                <form action="#" method="" class="form-horizontal">
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                            Register Group
                                        </h3>
                                        <h5>This information will let us know more about you.</h5>
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li>
                                                <a href="#info" data-toggle="tab">Group Info</a>
                                            </li>
                                            <li>
                                                <a href="#clients" data-toggle="tab">Select Clients</a>
                                            </li>
                                            <li>
                                                <a href="#overview" data-toggle="tab">Overview</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="info">
                                            <div class="row">
                                                <h4 class="info-text"> REGISTER GROUP </h4>
                                                {{-- ONE --}}
                                                   <div class="row">
                                                        <label class="col-md-3 label-on-left">Group Name</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                         <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- ONE --}}
                                                {{-- TWO --}}
                                                     <div class="row">
                                            <label class="col-md-3 label-on-left">Branch Name</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option> Select Branch Name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                                {{-- TWO --}}
                                                {{-- three --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Loan Officer</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                  <select class="form-control">
                                                        <option> Select Loan Officer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                               {{-- three --}}
                                               {{-- four --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Registration Number</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                               {{-- four --}}
                                               {{-- five --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Registration Date</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control datepicker">
                                                </div>
                                            </div>
                                        </div>

                                               {{-- five --}}
                                               {{-- six --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Meeting Location</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                               {{-- six --}}
                                               {{-- seven --}}
                                                <div class="row">
                                            <label class="col-md-3 label-on-left">Meeting Days</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                               {{-- seven --}}
                                               {{-- eight --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Meeting Frequency</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option> Select Loan Officer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                               {{-- eight --}}
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="clients">
                                            <h4 class="info-text"> Select Clients For The Group </h4>
                                             {{-- one --}}
                                                    <div class="row">
                                            <label class="col-md-3 label-on-left">Clients</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                             {{-- one --}}
                                             {{-- two --}}
                                                <div class="row" style="margin-top: 40px">
                                                <center><h4>ADDED CLIENTS</h4></center>
                                                 <div class="col-sm-6 col-sm-offset-3">
                                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">156656565</td>
                                                    <td>Andrew Mike</td>
                                                    
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                                 </div>  
                                                </div>
                                             {{-- two --}}
                                        </div>
                                        <div class="tab-pane" id="overview">
                                            {{-- one --}}
                                             <div class="row">
                                             {{-- form here --}}
                                                {{-- ONE --}}
                                                   <div class="row">
                                                        <label class="col-md-3 label-on-left">Group Name</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                         <input type="text" disabled="disabled" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- ONE --}}
                                                {{-- TWO --}}
                                                     <div class="row">
                                            <label class="col-md-3 label-on-left">Branch Name</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control" disabled="disabled">
                                                        <option> Select Branch Name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                                {{-- TWO --}}
                                                {{-- three --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Loan Officer</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                  <select class="form-control" disabled="disabled">
                                                        <option> Select Loan Officer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                               {{-- three --}}
                                               {{-- four --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Registration Number</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="email" class="form-control" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
                                               {{-- four --}}
                                               {{-- five --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Registration Date</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="email" class="form-control" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                               {{-- five --}}
                                               {{-- six --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Meeting Location</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
                                               {{-- six --}}
                                               {{-- seven --}}
                                                <div class="row">
                                            <label class="col-md-3 label-on-left">Meeting Days</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
                                               {{-- seven --}}
                                               {{-- eight --}}
                                                 <div class="row">
                                            <label class="col-md-3 label-on-left">Meeting Frequency</label>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control" disabled="disabled">
                                                        <option> Select Loan Officer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                               {{-- eight --}}
                                                {{-- end of form --}}
                                                {{-- table continues --}}
                                                  <div class="row" style="margin-top: 50px">
                                                  <center><h4>ADDED CLIENTS</h4></center>
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">156656565</td>
                                                    <td>Andrew Mike</td>
                                                    
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                                 </div> 
                                                 </div>
                                                {{-- end of table --}}
                                             </div>
                                            {{-- one --}}
                                        </div>
                                    </div>
                                    <div class="wizard-footer">
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                                            <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Finish' />
                                        </div>
                                        <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- wizard container -->
                    </div>
                        </div>
                    {{-- ends here --}}
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
<script type="text/javascript">
    $('#grouping').addClass('active');
    $('#group').addClass('in');
    $('#group li a').click(function(){
        $('#group li a').prev().addClass('active');
    });
   
    
    
</script>
@endsection

