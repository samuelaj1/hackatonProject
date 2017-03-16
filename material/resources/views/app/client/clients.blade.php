@extends('../layout/base')

@section('content')

<div class="wrapper">
    @include('inc.dashboard.sidebar')
    <div class="main-panel">
        @include('inc.dashboard.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <ul class="nav nav-pills nav-pills-warning">
                                    <li class="active">
                                        <a href="#clients" data-toggle="tab">Clients</a>
                                    </li>
                                    <li>
                                        <a href="#Pending" data-toggle="tab">Pending Approval</a>
                                    </li>
                                    <li>
                                        <a href="#closed" data-toggle="tab">Closed Clients</a>
                                    </li>
                                    <li>
                                        <a href="#rejected" data-toggle="tab">Rejected Clients</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="clients">
                                        <div class="card-content">
                                            <h3 class="card-title">Search Clients</h3>
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <div class="material-datatables">
                                                <table id="" class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Client Id</th>
                                                            <th>Display Name</th>
                                                            <th>Group Name</th>
                                                            <th>Branch</th>
                                                            <th class="disabled-sorting text-right">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Client Id</th>
                                                            <th>Display Name</th>
                                                            <th>Group Name</th>
                                                            <th>Branch</th>
                                                            <th class="text-right">Actions</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end content-->
                                    </div>
                                    <div class="tab-pane" id="Pending">
                                        <div class="material-datatables">
                                            <table id="" class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Client Id</th>
                                                        <th>Display</th>
                                                        <th>Group Name</th>
                                                        <th>Branch</th>
                                                        <th>Loan Officer</th>
                                                        <th>Registration Date</th>
                                                        <th class="disabled-sorting text-right">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Client Id</th>
                                                        <th>Display Name</th>
                                                        <th>Group Name</th>
                                                        <th>Branch</th>
                                                        <th>Loan Officer</th>
                                                        <th>Registration Date</th>
                                                        <th class="text-right">Actions</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="closed">
                                        <div class="material-datatables">
                                            <table id="" class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Client Id</th>
                                                        <th>Display Name</th>
                                                        <th>Group Name</th>
                                                        <th>Branch</th>
                                                        <th>Loan Officer</th>
                                                        <th>Registration Date</th>
                                                        <th class="disabled-sorting text-right">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Client Id</th>
                                                        <th>Display Name</th>
                                                        <th>Group Name</th>
                                                        <th>Branch</th>
                                                        <th>Loan Officer</th>
                                                        <th>Registration Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10489972</td>
                                                        <td>Kwame Otuapem</td>
                                                        <td>Edinburgh</td>
                                                        <td>Kumasi</td>
                                                        <td>Kay Pann</td>
                                                        <td>10/11/2017</td>
                                                        <td class="text-right">
                                                            <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                <i class="material-icons">visibility</i> View
                                                            </button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="rejected">
                                        <div class="card-content">
                                            <h3 class="card-title">Search Clients</h3>
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                                            <div class="material-datatables">
                                                <table id="" class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Client Id</th>
                                                            <th>Display Name</th>
                                                            <th>Group Name</th>
                                                            <th>Branch</th>
                                                            <th class="disabled-sorting text-right">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Client Id</th>
                                                            <th>Display Name</th>
                                                            <th>Group Name</th>
                                                            <th>Branch</th>
                                                            <th class="text-right">Actions</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10489972</td>
                                                            <td>Kwame Otuapem</td>
                                                            <td>Edinburgh</td>
                                                            <td>Kumasi</td>
                                                            <td class="text-right">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-xs" data-placement="left" title="View Client">
                                                                    <i class="material-icons">visibility</i> View
                                                                </button>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end content-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('inc.dashboard.footer')
    </div>
</div>

@endsection


@section('customJs')


@endsection

