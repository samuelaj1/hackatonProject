<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Recently Added Accounts</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{url('/createAccount')}}">
                            <i class="material-icons">person_add</i> Create Account
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('/services')}}">
                            <i class="material-icons">dashboard</i> Services
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>