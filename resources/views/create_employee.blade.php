@extends("includes/header")
@section("content")

    <div class="row split">
        <div class="col-sm-3">


            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="unknown2.png">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="">{!! $user->employee['name'] !!}</a>
                    </div>
                    <div class="desc"></div>
                    <div class="desc">Computer Science and Engineering Discipline</div>
                    <div class="desc">Khulna University</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm" href="https://twitter.com/">
                        <i class="fa fa-twitter" style="color: #0f0f0f"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://www.facebook.com">
                        <i class="fa fa-facebook"></i>
                    </a>

                </div>
            </div>


            <ul class="nav navbar-inverse nav-pills nav-stacked profile" style="height: 800px">
                <li class="active"><a href="#"><!--Home--></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-dashboard"></span> <!--Dashboard--></a></li>
                <li><a href="#"><!--New Task--></a></li>
                <li><a href="#"><!--Current Job--></a></li>
                <li><a href="#"><<!--Add Employee--></a></li>
            </ul>


        </div>


        <div class="col-sm-7 row jobCard">

            <div class="jobDesc col-sm-10 col-sm-offset-1">
                @if(Auth::user()->isCompany == 1)
                    <div class="row descTitle">
                        <h4 style="text-align: center">Company Owner Information</h4>
                    </div>
                @else
                    <div class="row descTitle">
                        <h4 style="text-align: center">Employee Information</h4>
                    </div>
                @endif

                {!! FORM::open(['route'=>'employee.store']) !!}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>


                    <h3>designation:</h3>
                    <select name="Select Designation">

                        @if(Auth::user()->isCompany == 1)
                            <option value="CEO">Owner</option>

                        @else

                            <option value="CEO">CEO</option>
                            <option value="Manager">Manager</option>
                            <option value="Snr. Programmer">Senior programmer</option>
                            <option value="Junior programmer">Junior programmer</option>

                        @endif

                    </select>


                   <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" id="age" name="age">
                        </div>


                        <div class="form-group col-sm-6">
                            <label for="contact">Contact Number</label>
                            <input type="text" class="form-control" id="contact" name="contact">
                        </div>

                   </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>


                    <button type="submit" class="btn btn-success">Add</button>

                {!! FORM::close() !!}
            </div>
        </div>


        </div>

@endsection