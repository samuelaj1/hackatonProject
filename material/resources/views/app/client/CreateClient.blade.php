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

                                
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                    <div class="wizard-header">
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li>
                                                <a href="#NewClient" data-toggle="tab">New Client</a>
                                            </li>
                                            <li>
                                                <a href="#ClientInfo" data-toggle="tab">Client Info</a>
                                            </li>
                                            <li>
                                                <a href="#ClientIdentification" data-toggle="tab">Client Identification</a>
                                            </li>
                                            <li>
                                                <a href="#BusinessDetails" data-toggle="tab">Business Details</a>
                                            </li>
                                            <li>
                                                <a href="#NextOfKin" data-toggle="tab">Next Of Kin</a>
                                            </li>
                                            <li>
                                                <a href="#overview" data-toggle="tab">Overview</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="NewClient">
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Group Name</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Registration Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Registration Date</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control datepicker">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Meeting Location</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Meeting Days</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                           
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
                                            </form>
                                            
                                        </div>
                                        <div class="tab-pane" id="ClientInfo">
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">First Name</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Middle Name</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Last Name</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Registration Date</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control datepicker" value="10/10/2016" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Phone Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Email Address</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Date of Birth</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Address</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Gender</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <select class="form-control">
                                                            <option>.....</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <label class="col-md-3 label-on-left">Region</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <select class="form-control">
                                                            <option>.....</option>
                                                            <option>Greater Accra</option>
                                                            <option>Western Region</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Date of Birth</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control datepicker" value="10/10/2016" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Marital Status</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Status</label>
                                                        <select class="form-control">
                                                            <option>.....</option>
                                                            <option>Single</option>
                                                            <option>Married</option>
                                                            <option>Divorced</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="ClientIdentification">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-rose btn-round pull-left" data-toggle="modal" data-target="#myModal"><span class="btn-label">
                                                        <i class="material-icons">add</i>
                                                    </span>Add
                                                </button>
                                                <!-- Classic Modal -->
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    <i class="material-icons">clear</i>
                                                                </button>
                                                                <h4 class="modal-title">Add Identification</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label">Document Type</label>
                                                                            <select class="form-control">
                                                                            <option></option>
                                                                                <option>Kumasi</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                 <div class="row">

                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Unique Identification address</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                 <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Description</label>
                                                                            <input type="email" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                </div><br>
                                                                <div class="row">
                                                                <div class="col-md-8">
                                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span> <input type="file" name="..." />
                                                    </span>
                                                                </div>
                                                                    
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning btn-sm">Save</button>
                                                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  End Modal -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">#</th>
                                                                        <th>Name</th>
                                                                        <th>Job Position</th>
                                                                        <th>Since</th>
                                                                        <th class="text-right">Salary</th>
                                                                        <th class="text-right">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td>Andrew Mike</td>
                                                                        <td>Develop</td>
                                                                        <td>2013</td>
                                                                        <td class="text-right">&euro; 99,225</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                                                <i class="material-icons">close</i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td>Andrew Mike</td>
                                                                        <td>Develop</td>
                                                                        <td>2013</td>
                                                                        <td class="text-right">&euro; 99,225</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                                                <i class="material-icons">close</i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="BusinessDetails">
                                       <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-rose btn-round pull-left" data-toggle="modal" data-target="#myModal2"><span class="btn-label">
                                                        <i class="material-icons">add</i>
                                                    </span>Add Now
                                                </button>
                                                <!-- Classic Modal -->
                                                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Business Name</label>
                                                                            <input type="text" class="form-control" disabled="" value="Codoxo gh">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                 <div class="row">

                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Business type</label>
                                                                            <select class="form-control">
                                                                                <option>Trader</option>
                                                                                <option>Farmer</option>
                                                                                <option>Shop Keeper</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                 <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                         <div class="form-group label-floating">
                                                                            <label class="control-label">Start Date</label>
                                                                            <input type="text" class="form-control datepicker" value="10/10/2016" />
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Address *</label>
                                                                            <input type="text" class="form-control" value="">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">City *</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Company Registration Number</label>
                                                                            <input type="text" class="form-control" value="">
                                                                        </div>
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
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left">Business Name</th>
                                                                        <th class="text-left">Business Type</th>
                                                                        <th class="text-left">Start Date</th>
                                                                        <th class="text-left">Address</th>
                                                                        <th class="text-left">City</th>
                                                                        <th class="text-left">Postal Code</th>
                                                                        <th class="text-left">Country</th>
                                                                         <th class="text-right">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-left">Codoxo</td>
                                                                        <td class="text-left">Develop</td>
                                                                        <td class="text-left">2013</td>
                                                                        <td class="text-left">Legon</td>
                                                                        <td class="text-left">Accra</td>
                                                                        <td class="text-left">+233</td>
                                                                        <td class="text-left">Ghana</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                                                <i class="material-icons">close</i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left">New Codoxo</td>
                                                                        <td class="text-left">Development</td>
                                                                        <td class="text-left">2017</td>
                                                                        <td class="text-left">Legon</td>
                                                                        <td class="text-left">Accra</td>
                                                                        <td class="text-left">+233</td>
                                                                        <td class="text-left">Ghana</td>
                                                                        <td class="td-actions text-right">
                                                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                                                <i class="material-icons">close</i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="NextOfKin">
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-rose btn-round pull-left" data-toggle="modal" data-target="#myModal3"><span class="btn-label">
                                                        <i class="material-icons">add</i>
                                                    </span>Add Now
                                                </button>
                                                <!-- Classic Modal -->
                                                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    <i class="material-icons">clear</i>
                                                                </button>
                                                                <h4 class="modal-title">Add Next Of Kin</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Name</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                 <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                         <div class="form-group label-floating">
                                                                            <label class="control-label">Date of Birth</label>
                                                                            <input type="text" class="form-control datepicker" value="10/11/2017" />
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Address</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">City</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Phone</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
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
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <div class="card-content">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left">Name</th>
                                                                        <th class="text-left">Date of Birth</th>
                                                                        <th class="text-left">Relation to client</th>
                                                                        <th class="text-left">Address</th>
                                                                        <th class="text-left">Phone Number</th>
                                                                        <th class="text-left"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="overview">
                                    <form class="form-horizontal">
                                        <div class="row">
                                                <label class="col-md-3 label-on-left">First Name</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Nana Tuga">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Middle Name</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="my name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Last Name</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Team Codoxo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Registration Date</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" placeholder="10/12/2017" disabled=""/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Phone Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="0241994733">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Town</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Legon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Address</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Legon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Gender</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Male">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">Date of Birth</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Legon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 label-on-left">District</label>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="Legon">
                                                    </div>
                                                </div>
                                            </div>
                                    </form><br><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header card-header-icon" data-background-color="purple">
                                                        <h4 class="card-title">Client Details</h4>
                                                    </div><br><br>
                                                    <div class="card-content">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left">Document Type</th>
                                                                        <th class="text-left">Unique Identification</th>
                                                                        <th class="text-left">Description</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-left">National ID Card</td>
                                                                        <td class="text-left">12342256</td>
                                                                        <td class="text-left">Granted by Government of ghana</td>
                                                                    </tr>
                                                                     <tr>
                                                                        <td class="text-left">Health Insurance</td>
                                                                        <td class="text-left">12342256</td>
                                                                        <td class="text-left">Granted by Government of ghana</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                <div class="card-header card-header-icon" data-background-color="purple">
                                                    <h4 class="card-title">Business Details</h4>
                                                </div><br><br>
                                                    <div class="card-content">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left">Business Name</th>
                                                                        <th class="text-left">Business Type</th>
                                                                        <th class="text-left">Start Date</th>
                                                                        <th class="text-left">Address</th>
                                                                        <th class="text-left">City</th>
                                                                        <th class="text-left">Postal Code</th>
                                                                        <th class="text-left">Country</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-left">Codoxo</td>
                                                                        <td class="text-left">Develop</td>
                                                                        <td class="text-left">2013</td>
                                                                        <td class="text-left">Legon</td>
                                                                        <td class="text-left">Accra</td>
                                                                        <td class="text-left">+233</td>
                                                                        <td class="text-left">Ghana</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left">New Codoxo</td>
                                                                        <td class="text-left">Development</td>
                                                                        <td class="text-left">2017</td>
                                                                        <td class="text-left">Legon</td>
                                                                        <td class="text-left">Accra</td>
                                                                        <td class="text-left">+233</td>
                                                                        <td class="text-left">Ghana</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                <div class="card-header card-header-icon" data-background-color="purple">
                                                        <h4 class="card-title">Next of Kin</h4>
                                                    </div><br><br>
                                                    <div class="card-content">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left">Relation ID</th>
                                                                        <th class="text-left">Name</th>
                                                                        <th class="text-left">Date of Birth</th>
                                                                        <th class="text-left">Address</th>
                                                                        <th class="text-left">City</th>
                                                                        <th class="text-left">Phone</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-left"></td>
                                                                        <td class="text-left">Nana Tuga</td>
                                                                        <td class="text-left">2013</td>
                                                                        <td class="text-left">Legon</td>
                                                                        <td class="text-left">Accra</td>
                                                                        <td class="text-left">+233 241994733</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left"></td>
                                                                        <td class="text-left">Development</td>
                                                                        <td class="text-left">2017</td>
                                                                        <td class="text-left">Legon</td>
                                                                        <td class="text-left">Accra</td>
                                                                        <td class="text-left">+233</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='SAVE' />
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

