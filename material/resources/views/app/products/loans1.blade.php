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
                        <div class="nav-left">
                            <ul class="nav nav-pills nav-pills-warning nav-pills-icons" role="tablist">
<!--
color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
-->
<li class="active">
    <a href="#loans" role="tab" data-toggle="tab">
        Loans
    </a>
</li>
<li>
    <a href="#schedule-1" role="tab" data-toggle="tab">
        Pending Approval
    </a>
</li>
<li>
    <a href="#tasks-1" role="tab" data-toggle="tab">
        Awaiting Disbursement
    </a>
</li>
<li>
    <a href="#tasks-2" role="tab" data-toggle="tab">
        Declined
    </a>
</li>
<li>
    <a href="#tasks-2" role="tab" data-toggle="tab">
        Withdrawn
    </a>
</li>
<li>
    <a href="#tasks-2" role="tab" data-toggle="tab">
        Written Off Loans
    </a>
</li>
<li>
    <a href="#tasks-2" role="tab" data-toggle="tab">
        Closed
    </a>
</li>
<li>
    <a href="#tasks-2" role="tab" data-toggle="tab">
        Loan Reschedule Pending
    </a>
</li>
</ul>
</div>
<div class="tab-content">
    <div class="tab-pane active" id="loans">
        <!--      Wizard container        -->
        <div class="wizard-container">
            <div class="card wizard-card" data-color="rose" id="wizardProfile">

                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                <div class="wizard-header">
                    <h3 class="wizard-title">
                        Create Loan
                    </h3>
                </div>
                <div class="wizard-navigation">
                    <ul>
                        <li>
                            <a href="#terms" data-toggle="tab">Terms</a>
                        </li>
                        <li>
                            <a href="#settings" data-toggle="tab">Settings</a>
                        </li>
                        <li>
                            <a href="#charges" data-toggle="tab">Charges</a>
                        </li>
                        <li>
                            <a href="#collateral" data-toggle="tab">Collateral</a>
                        </li>
                        <li>
                            <a href="#guarantors" data-toggle="tab">Guarantors</a>
                        </li>
                        <li>
                            <a href="#repaymentSchedule" data-toggle="tab">Repayment Schedule</a>
                        </li>
                        <li>
                            <a href="#overview" data-toggle="tab">Overview</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane" id="terms">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-2">
                                <form id="TypeValidation" class="form-horizontal" action="#" method="">

                                    <div class="card-content">
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Size *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="number"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Term *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Repayment Every *</label>
                                            <div class="col-sm-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="number" number="true" placeholder="1" />
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option > Week(s)</option>
                                                        <option value="2">Month(s) </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Interest Rate *</label>
                                            <div class="col-sm-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="url" url="true.html" placeholder="15" />
                                                </div>
                                            </div>
                                            <label class="col-sm-3 label-on-right">
                                                % per Year
                                            </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Disbursement Date *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control datepicker" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-2">
                                <form id="TypeValidation" class="form-horizontal" action="#" method="">

                                    <div class="card-content">
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Officer *</label>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option > -- Select -- </option>
                                                        <option value="2">Codoxo </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Purpose *</label>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option > Buying Stock</option>
                                                        <option value="2">Super Bet </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Sector *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option> Urban </option>
                                                        <option value="2">Rural </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Auto Create Standing Instructions *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option > Week(s)</option>
                                                        <option value="2">Month(s) </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Linked Savings Account *</label>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <select class="form-control">
                                                        <option > --Select Linked Account --</option>
                                                        <option value="2">Month(s) </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Repayment Starting From *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control datepicker" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="charges">
                        <div class="table-responsive">
                            <table class="table stipped">
                                <thead>
                                    <tr>
                                        <th class="text-left">Name</th>
                                        <th class="text-left">Type</th>
                                        <th class="text-left">Amount</th>
                                        <th class="text-left">Collected</th>
                                        <th class="text-left">Date</th>
                                        <th class="text-left">Repayment Mode</th>
                                        <th class="text-left"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Disbursement Charge</td>
                                        <td class="text-left">Flat</td>
                                        <td class="text-left">2013</td>
                                        <td class="text-left">Disbursement</td>
                                        <td class="text-left"> date</td>
                                        <td class="text-left">Normal</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-placement="left" title="delete">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><br>
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label class="col-sm-4 label-on-left">Charges String *</label>
                                        <div class="col-sm-8">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <select class="form-control">
                                                    <option>Charge from Savings</option>
                                                    <option value="2">Month(s) </option>
                                                    <option value="3">Bucharest</option>
                                                    <option value="4">Rome</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#LoanModal"><i class="material-icons">add</i>Add To Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane" id="collateral">

                        <div class="col-md-6">
                            <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#collaModal"><i class="material-icons">add</i>Add
                            </button>
                        </div>
                        <!-- Classic Modal -->
                        <div class="modal fade" id="collaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            <i class="material-icons">clear</i>
                                        </button>
                                        <h4 class="modal-title">Client Business Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <form id="TypeValidation" class="form-group" action="#" method="">


                                                    <div class="row">
                                                        <label class="col-sm-4">Type *</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-horizontal ">
                                                                <select class="form-control">
                                                                    <option > Buying Stock</option>
                                                                    <option value="2">Super Bet </option>
                                                                    <option value="3">Bucharest</option>
                                                                    <option value="4">Rome</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <label class="col-sm-4 label-on-left">Value *</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-horizontal">

                                                                <select class="form-control">
                                                                    <option > Buying Stock</option>
                                                                    <option value="2">Super Bet </option>
                                                                    <option value="3">Bucharest</option>
                                                                    <option value="4">Rome</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <label class="col-sm-4">Description *</label>
                                                        <div class="col-sm-4">
                                                            <div class="form-horizontal ">
                                                                <div class="form-horizontal">
                                                                    <textarea class="form-horizontal"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Value</th>
                                                        <th>Description</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="guarantors">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#guarantorsModal"><i class="material-icons">add</i>Add
                            </button>
                        </div>
                        <!-- Classic Modal -->
                        <div class="modal fade" id="guarantorsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            <i class="material-icons">clear</i>
                                        </button>
                                        <h4 class="modal-title">Add Guarantor</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-content">
                                            <ul class="nav nav-pills nav-pills-warning">
                                                <li class="active">
                                                    <a href="#pill1" data-toggle="tab">Existing Client</a>
                                                </li>
                                                <li>
                                                    <a href="#pill2" data-toggle="tab">New Guarantor</a>
                                                </li>
                                                <li>
                                                    <a href="#pill3" data-toggle="tab">Group Members</a>
                                                </li>
                                            </ul>
                                            <br>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="pill1">
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <form id="TypeValidation" class="form-group" action="#" method="">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Client *</label>
                                                                            <input type="text" class="form-control" value="Codoxo">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pill2">
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <form id="TypeValidation" class="form-group" action="#" method="">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label">Relationship To Client</label>
                                                                            <select class="form-control">
                                                                                <option></option>
                                                                                <option>Kumasi</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                
                                                                    <div class="col-md-6">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">First Name</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Last Name</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                               
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Date of Birth *</label>
                                                                            <input type="text" class="form-control datepicker" value="10/11/2016">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Address *</label>
                                                                            <input type="text" class="form-control" value="">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Country </label>
                                                                            <input type="text" class="form-control" value="">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">City *</label>
                                                                            <input type="text" class="form-control" value="Accra">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Phone Number *</label>
                                                                            <input type="text" class="form-control" value="">
                                                                        </div>
                                                                    </div>

                                                                </div><br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <button type="button" class="btn btn-warning btn-round btn-sm"><i class="material-icons">add</i>Add
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pill3">
                                                    <div class="row">
                                                        <div class="col-md-10 col-md-offset-1">
                                                            <table class="table table-hover" >
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left">Client Id</th>
                                                                        <th>Client Name</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <td>2</td>
                                                                    <td>Kofi Danso</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">add</i>Add
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>2</td>
                                                                    <td>Daniel Amartey</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">add</i>Add
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>2</td>
                                                                    <td>Boakye Danso</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">add</i> Add
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>2</td>
                                                                    <td>Boakye Amoah</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">add</i> Add
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>2</td>
                                                                    <td>Yawson Boamah</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">add</i> Add
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>2</td>
                                                                    <td>Kay Danso</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">add</i> Add
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>2</td>
                                                                    <td>Kofi Danso</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="View item">
                                                                                <i class="material-icons">add</i> Add
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                   </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  End Modal -->
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Guarantor Type</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="repaymentSchedule">
                        <div class="col-md-12">
                           <div class="table-responsive">
                            <table class="table table-bordered" style="background: #f9f9f9;" >
                                <thead>
                                    <tr>
                                        <th class="text-left">#</th>
                                        <th class="text-left">Date</th>
                                        <th class="text-left"># Days</th>
                                        <th class="text-left">Disbursement</th>
                                        <th class="text-left">Principal Due</th>
                                        <th class="text-left">Principal Balance</th>
                                        <th class="text-left">Interest Due</th>
                                        <th class="text-left">Interest Due</th>
                                        <th class="text-left">Fees</th>
                                        <th class="text-left">Total Due</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">22</td>
                                        <td class="text-left">Group Loan</td>
                                        <td class="text-left">7883</td>
                                        <td class="text-left"></td>
                                        <td class="text-left"></td>
                                        <td class="text-left">22,000</td>
                                        <td class="text-left"></td>
                                        <td class="text-left">50,000</td>
                                        <td class="text-left"></td>
                                        <td class="text-left"></td>
                                    </tr>
                                     <tr>
                                        <td class="text-left">1</td>
                                        <td class="text-left">24-10-2016</td>
                                        <td class="text-left">7</td>
                                        <td class="text-left"></td>
                                        <td class="text-left">97,000</td>
                                        <td class="text-left">10,000</td>
                                        <td class="text-left">10,000</td>
                                        <td class="text-left">10,000</td>
                                        <td class="text-left">10,000</td>
                                        <td class="text-left">10,000</td>
                                    </tr>
                                    <tr class="info">
                                        <td class="text-left"></td>
                                        <td class="text-left">Total</td>
                                        <td class="text-left">88</td>
                                        <td class="text-left">100,000</td>
                                        <td class="text-left">97,000</td>
                                        <td class="text-left"></td>
                                        <td class="text-left">10,000</td>
                                        <td class="text-left">00</td>
                                        <td class="text-left">10,000</td>
                                        <td class="text-left">10,000</td>
                                    </tr>
                                   </tbody>
                            </table>
                        </div>
                    </div>
                        
                    </div>
                    <div class="tab-pane" id="overview">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card" style="background: #f9f9f9;">
                                <form id="TypeValidation" class="form-horizontal" action="#" method="">
                                    <div class="card-content">
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Size *</label>
                                            <div class="col-sm-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="url" url="true.html" value="13000" disabled />
                                                </div>
                                            </div>
                                            <label class="col-sm-3 label-on-right">
                                                Cedis
                                            </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Term</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" value="12" disabled />
                                                </div>
                                            </div>
                                             <div class="col-sm-2">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idDestination" type="text" value="week" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Repayment Every *</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" value="1" disabled />
                                                </div>
                                            </div>
                                             <div class="col-sm-2">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idDestination" type="text" value="weeks" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Interest Rate *</label>
                                            <div class="col-sm-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" type="text" name="url" url="true.html" value="13000" disabled />
                                                </div>
                                            </div>
                                            <label class="col-sm-3 label-on-right">
                                                Per Year
                                            </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Disbursement Date *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" value="10/11/2016" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Officer *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" value="Samuel" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Loan Purpose *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" value="Grow Business" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Linked Savings Account</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" value=" -- Select --" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Repayment Starting From *</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating column-sizing">
                                                    <label class="control-label"></label>
                                                    <input class="form-control" id="idSource" type="text" value="24/11/2016" disabled />
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Charges *</label>
                                            <div class="col-sm-10">
                                                <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Amount</th>
                                                        <th>Collected On</th>
                                                        <th>Date</th>
                                                        <th>Payment Mode</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Disbursement Change</td>
                                                        <td>Flat</td>
                                                        <td>100</td>
                                                        <td>20/11/2012</td>
                                                        <td></td>
                                                        <td>Normal</td>
                                                    </tr>
                                                    </tbody>
                                            </table>
                                        </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <label class="col-sm-2 label-on-left">Collateral *</label>
                                            <div class="col-sm-6">
                                                <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Value</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Livestock</td>
                                                        <td>5000</td>
                                                        <td>50 cedis</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tv</td>
                                                        <td>2000</td>
                                                        <td>Smart Tv</td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                            </div>
                                        </div><br><br>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Guarantor(s) *</label>
                                            <div class="col-sm-6">
                                                <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Guarantor Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Frank Kofi</td>
                                                        <td>Existing Client</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Samuel NanaT</td>
                                                        <td>Existing Client</td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="card-footer text-center">
                                        <button class="btn btn-sm btn-rose">
                                            <span class="btn-label">
                                                <i class="material-icons">keyboard_arrow_left</i>
                                            </span>
                                            Back
                                        </button>                                        
                                            <button type="submit" class="btn btn-warning btn-fill btn-sm">Edit</button>
                                            <button type="submit" class="btn btn-danger btn-fill btn-sm">Close</button>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="wizard-footer">
                    <div class="pull-right">
                        <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                        <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Save' />
                    </div>
                    <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-fill btn-danger btn-wd' name='previous' value='Previous' />
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        <!-- wizard container -->
    </div>
    <div class="tab-pane" id="schedule-1">
         
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">DataTables.net</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatable">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Date</th>
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>
                                       <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="Approve">
                                        <i class="material-icons">visibility</i> Approve
                                    </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>
                                        <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="Approve">
                                        <i class="material-icons">visibility</i> Approve
                                    </button>
                                    </td>
                                </tr>
                               <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>
                                         <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="Approve">
                                        <i class="material-icons">visibility</i> Approve
                                    </button>
                                    </td>
                                </tr>
                               <tr>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td>2010/02/12</td>
                                    <td>
                                        <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="Approve">
                                        <i class="material-icons">visibility</i> Approve
                                    </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Timothy Mooney</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>37</td>
                                    <td>2008/12/11</td>
                                    <td>
                                        <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="Approve">
                                        <i class="material-icons">visibility</i> Approve
                                    </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
                  
    </div>
    <div class="tab-pane" id="tasks-1">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Legal info of the product</h4>
                <p class="category">
                    More information here
                </p>
            </div>
            <div class="card-content">
                Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                <br />
                <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tasks-2">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Help center</h4>
                <p class="category">
                    More information here
                </p>
            </div>
            <div class="card-content">
                From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.
                <br />
                <br /> Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.
            </div>
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

@endsection

