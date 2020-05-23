@extends ("includes/header")
@section("content")

<div class ="row" id="background">
 <div class="row">
  <div class="col-sm-6" id="main_text">

  <h id=size>WHY PEOPLE Will
             USE PROJECT MANAGER</h>
  <p id=sizeofP>this software will help people to work together</p>
  </div>

<div class="col-sm-3" id="main_text_box">
<form>

    <div class="form-group">

      <input type="Name" class="form-control" id="name" placeholder="Pick a username">
    </div>
    <div class="form-group">

      <input type="email" class="form-control" id="email" placeholder="Your email address">
    </div>
    <div class="form-group" >

      <input type="password" class="form-control" id="pwd" placeholder="Create a password">
    </div>
    <div class="checkbox">
      <label id=sizeofP><input type="checkbox" > Remember me</label>
    </div>
    <button type="submit" class="btn btn-success">Sign up for Project Manager</button>

 </form>
 </div>
</div>
</div>

 </div>
 <div class = "row" id="Textbackground">
  <h id="sizeBkText" >Welcome to the workfield,folks</h>
  </div>



@endsection