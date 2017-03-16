<div class="row">
    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
        <form method="post" action="{{url('login')}}" id="TypeValidation">
        {{csrf_field()}}
            <div class="card card-login card-hidden">
                <div class="card-header text-center" data-background-color="rose">
                    <h4 class="card-title">Login</h4>
                    <div class="social-line">
                        <a href="#btn" class="btn btn-just-icon btn-simple">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="#pablo" class="btn btn-just-icon btn-simple">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#eugen" class="btn btn-just-icon btn-simple">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <p class="category text-center">
                    Or Be Classical
                </p>
                <div class="card-content">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">User Name</label>
                            <input type="text" name="username" value="{{old('username')}}" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" required="true" minlength="6">
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="footer text-center">
                    <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Let's go</button>
                </div>
            </div>
        </form>
    </div>
</div>