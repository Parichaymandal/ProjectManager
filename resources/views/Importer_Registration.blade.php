<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="Author" content="">
    <meta name="description" content="">

    <title></title>

    {!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('css/style.css') !!}
    {!! HTML::style('bootstrap/icons/bootstrap.icon-large.min.css') !!}
    {!! HTML::style('css/custom.css') !!}


</head>

<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="container">
    <div class="login-signup">
        <div class="row">
            <div class="col-sm-6 nav-tab-holder">
                <ul class="nav nav-tabs row" role="tablist">
                    <li role="presentation" class="active col-sm-6"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Admin</a></li>
                    <li role="presentation" class="col-sm-6"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">User</a></li>
                </ul>
            </div>

        </div>


        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">

                    <div class="col-sm-6 mobile-pull">
                        <article role="login">
                            <h3 class="text-center"><i class="fa fa-lock"></i>USER</h3>
                            <form class="signup" action="index.html" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="UserName">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Please accept the terms and conditions to proceed with your request.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block"  value="SUBMIT">
                                </div>
                            </form>



                        </article>
                    </div>



                </div>
                <!-- end of row -->
            </div>
            <!-- end of home -->

            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="row">

                    <div class="col-sm-6 mobile-pull">
                        <article role="login">
                            <h3 class="text-center"><i class="fa fa-lock"></i> Create User Account</h3>
                            <form class="signup" action="index.html" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="UserName">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Please accept the terms and conditions to proceed with your request.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block"  value="SUBMIT">
                                </div>
                            </form>


                        </article>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>