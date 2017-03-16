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
                    <div class="col-md-12">
                        <div class="card">
                            <form id="TypeValidation" class="form-horizontal" action="#" method="">
                                <div class="card-header card-header-text" data-background-color="rose">
                                    <h4 class="card-title">Client Details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Client id</label>
                                        <div class="col-sm-7 col-md-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label"></label>
                                                <input class="form-control" type="text" name="required" required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">First Name</label>
                                        <div class="col-sm-2">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idSource" type="text" placeholder="Nana t" disabled />
                                            </div>
                                        </div>
                                        <label class="col-sm-1 label-on-left">Middle Name</label>
                                        <div class="col-sm-2">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idDestination" type="text" placeholder="AJ " disabled/>
                                            </div>
                                        </div>
                                        <label class="col-sm-1 label-on-left">Last Name</label>
                                        <div class="col-sm-2">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idDestination" type="text" placeholder="Codoxo" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Registration Date</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idSource" type="text" placeholder="#idSource" />
                                            </div>
                                        </div>
                                        <label class="col-sm-2 label-on-left">Activation Code</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalTo="#idSource" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Loan Officer</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idSource" type="text" placeholder="#idSource" />
                                            </div>
                                        </div>
                                        <label class="col-sm-2 label-on-left">Branch</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalTo="#idSource" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Phone Number</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idSource" type="text" placeholder="#idSource" />
                                            </div>
                                        </div>
                                        <label class="col-sm-2 label-on-left">Groups</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalTo="#idSource" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Gender</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idSource" type="text" placeholder="#idSource" />
                                            </div>
                                        </div>
                                        <label class="col-sm-2 label-on-left">Date of Birth</label>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating column-sizing">
                                                <label class="control-label"></label>
                                                <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalTo="#idSource" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-sm btn-rose">
                                        <span class="btn-label">
                                            <i class="material-icons">keyboard_arrow_left</i>
                                        </span>
                                        Back
                                    </button>                                        
                                    <button type="submit" class="btn btn-warning btn-fill btn-sm">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-fill btn-sm">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div><br><br>
                <div class="row">
                <div class="col-md-12">
                  
                        <div class="card-content">
                            <ul class="nav nav-pills nav-pills-warning">
                                <li class="active">
                                    <a href="#accounts" data-toggle="tab">Accounts</a>
                                </li>
                                <li>
                                    <a href="#ClientIdentification" data-toggle="tab">Client Identification</a>
                                </li>
                                <li>
                                    <a href="#businessDetails" data-toggle="tab">Business Details</a>
                                </li>
                                <li>
                                    <a href="#nextOfKin" data-toggle="tab">Next of Kin</a>
                                </li>
                                <li>
                                    <a href="#documents" data-toggle="tab">Documents</a>
                                </li>
                                <li>
                                    <a href="#ppi" data-toggle="tab">PPI</a>
                                </li>
                                <li>
                                    <a href="#financial" data-toggle="tab">Financial</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="accounts">
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header card-header-icon" data-background-color="purple">
                                                    <h4 class="card-title">Loan Product</h4>
                                                </div><br><br>
                                                <div class="card-content">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover" >
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-left">Account Number</th>
                                                                    <th class="text-left">Product</th>
                                                                    <th class="text-left">Outstanding</th>
                                                                    <th class="text-left">Status</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-left">0000007</td>
                                                                    <td class="text-left">Group Loan</td>
                                                                    <td class="text-left">7883</td>
                                                                    <td class="text-left">Active</td>
                                                                    <td class="td-actions text-right">
                                                                        <button type="button" rel="tooltip" class="btn btn-success" data-placement="left" title="View item">
                                                                            <i class="material-icons">dvr</i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">0000007</td>
                                                                    <td class="text-left">Group Loan</td>
                                                                    <td class="text-left">7883</td>
                                                                    <td class="text-left">Active</td>
                                                                    <td class="td-actions text-right">
                                                                        <button type="button" rel="tooltip" class="btn btn-success" data-placement="left" title="View item">
                                                                            <i class="material-icons">dvr</i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header card-header-icon" data-background-color="purple">
                                                    <h4 class="card-title">Savings Product</h4>
                                                </div><br><br>
                                                <div class="card-content">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover" >
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-left">Account Number</th>
                                                                    <th class="text-left">Product</th>
                                                                    <th class="text-left">Outstanding</th>
                                                                    <th class="text-left">Status</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-left">0000007</td>
                                                                    <td class="text-left">Group Loan</td>
                                                                    <td class="text-left">7883</td>
                                                                    <td class="text-left">Active</td>
                                                                    <td class="td-actions text-right">
                                                                        <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                            <i class="material-icons">dvr</i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">0000007</td>
                                                                    <td class="text-left">Group Loan</td>
                                                                    <td class="text-left">7883</td>
                                                                    <td class="text-left">Active</td>
                                                                    <td class="td-actions text-right">
                                                                        <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                            <i class="material-icons">dvr</i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#LoanModal"><i class="material-icons">add</i>Add Loan Account
                                            </button>
                                            <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#SavingsModal"><i class="material-icons">add</i>Add Savings Account</button>
                                        </div>
                                        <!-- Classic Modal -->
                                        <div class="modal fade" id="LoanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                            <i class="material-icons">clear</i>
                                                        </button>
                                                        <h4 class="modal-title">Add Loan Account</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover" >
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left">Name</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Accruals Loan Product</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">visibility</i> Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Agrics</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">visibility</i> Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Banker's Monthly</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">visibility</i> Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>F3 Product</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">visibility</i> Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Future Pump</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">visibility</i> Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Group Loan</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">visibility</i> Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Group Loan Accruals</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">visibility</i> Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning btn-sm">Add</button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  End Modal -->
                                        <!-- Classic Modal -->
                                        <div class="modal fade" id="SavingsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                            <i class="material-icons">clear</i>
                                                        </button>
                                                        <h4 class="modal-title">Add Savings Account</h>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-left">Name</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Accruals Loan Product</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                    <i class="material-icons">visibility</i> Select
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Agrics</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                    <i class="material-icons">visibility</i> Select
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Banker's Monthly</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                    <i class="material-icons">visibility</i> Select
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>F3 Product</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                    <i class="material-icons">visibility</i> Select
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Future Pump</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                    <i class="material-icons">visibility</i> Select
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Group Loan</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                    <i class="material-icons">visibility</i> Select
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Group Loan Accruals</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                    <i class="material-icons">visibility</i> Select
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning btn-sm">Add</button>
                                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  End Modal -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="ClientIdentification">
                                        Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                        <br />
                                        <br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    </div>
                                    <div class="tab-pane" id="businessDetails">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br />
                                        <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                    <div class="tab-pane" id="nextOfKin">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br />
                                        <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                    <div class="tab-pane" id="documents">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br />
                                        <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                    <div class="tab-pane" id="ppi">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br />
                                        <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                    <div class="tab-pane" id="financial">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br />
                                        <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                </div>
                            </div>
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
        $('#client').addClass('active');
        $('#createclient').addClass('active');
        $('#loan').addClass('in');
    </script>

    <script type="text/javascript">
        $('.radioclick').change(function(){
            if(this.value == 'individual'){
                $('#existingform').addClass('none');
                $('#individualform').removeClass('none');
            }
            else if(this.value == 'existing'){
                $('#individualform').addClass('none');
                $('#existingform').removeClass('none');
            }
        });
    </script>
    @endsection

