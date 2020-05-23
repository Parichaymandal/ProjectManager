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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/project"><span class="glyphicon glyphicon-dashboard"></span>create project</a></li>
                <li><a href="/submit">Submit Project</a></li>
                <li><a href="#"></a></li>
            </ul>


        </div>


            <div class="col-sm-7 row jobCard">

                <div class="jobDesc col-sm-10 col-sm-offset-1">
                    <div class="row descTitle">
                        <h4 style="text-align: center">Team</h4>
                    </div>

                    <form>
                        <h3>Designation:</h3>
                        <select name="Select Designation">
                            <option value="CEO">CEO</option>
                            <option value="Manager">Manager</option>
                            <option value="Snr. Programmer">Senior programmer</option>
                            <option value="Junior programmer">Junior programmer</option>
                        </select>
                        <h3>Name:</h3>
                        <select name="Select name">
                            <option value="Noman">Noman</option>
                            <option value="Kazi">Kazi</option>
                            <option value="Riyan">Riyan</option>
                            <option value="Sujit">Sujit</option>
                        </select>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                        <label style="" for="desc">Description</label>
                        <div class="form-group">

                            <textarea rows="4" cols="50">
                        </textarea>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="weight">Weight</label>
                                <input type="text" class="form-control" id="weight">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="deadLine">Dead Line</label>
                                <input type="date" class="form-control" id="deadLine">
                            </div>


                        </div>

                        <button type="submit" class="btn btn-success">Split</button>

                    </form>
                </div>
            </div>




    </div>






@endsection