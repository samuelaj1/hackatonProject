<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com/" class="simple-text">
                    Codoxo Gh
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="http://www.creative-tim.com/" class="simple-text">
                    CG
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{asset('assets/img/faces/avatar.jpg')}}" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            Tania Andrew
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">My Profile</a>
                                </li>
                                <li>
                                    <a href="#">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li id="dashboard">
                        <a href="{{url('/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li id="client">
                        <a data-toggle="collapse" href="#loan">
                            <i class="material-icons">face</i>
                            <p>Client
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="loan">
                            <ul class="nav">
                                <li id="createclient">
                                    <a href="{{url('/createclient')}}" id="hello">Transfer Client</a>
                                </li>
                                <li>
                                    <a href="{{url('/clients')}}">Clients</a>
                                </li>
                                <li>
                                    <a href="{{url('/createclient')}}">Register Client</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="grouping">
                        <a data-toggle="collapse" href="#group">
                            <i class="material-icons">groups</i>
                            <p>Groups
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="group">
                            <ul class="nav">
                                <li id="cgroup">
                                    <a href="{{url('/create-group')}}">Groups</a>
                                </li>
                                <li id="groups">
                                    <a href="{{url('/groups')}}">Create Group</a>
                                </li>
                                <li id="lpayment">
                                    <a  href="{{url('/loan-prepayment')}}">Transfer Group</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                     <li>
                        <a data-toggle="collapse" href="#deposit">
                            <i class="material-icons">accessibility</i>
                            <p>Products
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="deposit">
                            <ul class="nav">
                                <li>
                                    <a href="{{url('/')}}">Savings</a>
                                </li>
                                <li>
                                    <a href="{{url('/product')}}">Loans</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                     <li>
                        <a data-toggle="collapse" href="#reports">
                            <i class="material-icons">timeline</i>
                            <p>Reports
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="reports">
                            <ul class="nav">
                                <li>
                                    <a href="{{url('/deposit-payment')}}">Client Reports</a>
                                </li>
                                <li>
                                    <a href="{{url('/deposit-collection')}}">Group Reports</a>
                                </li>
                                <li>
                                    <a href="{{url('/deposit-request')}}">Savings Reports</a>
                                </li>
                                <li>
                                    <a href="{{url('/deposit-request')}}">Loans Reports</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#configuration">
                            <i class="material-icons">build</i>
                            <p>Configuration
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="configuration">
                            <ul class="nav">
                                <li>
                                    <a href="{{url('/deposit-payment')}}">Deposit Payment</a>
                                </li>
                                <li>
                                    <a href="{{url('/deposit-collection')}}">Deposit Collection</a>
                                </li>
                                <li>
                                    <a href="{{url('/deposit-request')}}">Deposit Request</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#task">
                            <i class="material-icons">cached</i>
                            <p>Task
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="task">
                            <ul class="nav">
                                <li>
                                    <a href="tables/regular.html">Pending Approval</a>
                                </li>
                                <li>
                                    <a href="tables/extended.html">My Actions</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                   {{-- <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                            <i class="material-icons">place</i>
                            <p>Maps
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="maps/google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps/fullscreen.html">Full Screen Map</a>
                                </li>
                                <li>
                                    <a href="maps/vector.html">Vector Map</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="widgets.html">
                            <i class="material-icons">widgets</i>
                            <p>Widgets</p>
                        </a>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i class="material-icons">timeline</i>
                            <p>Charts</p>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="material-icons">date_range</i>
                            <p>Calendar</p>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>