@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h4> Position </h4> <h1> <input type="text" id="position" name="position" placeholder="position" /> </h1> <br/><h4> Function </h4> <h4> <input type="text" id="position" name="position" placeholder="function" /> </h4></div>

                <div class="panel-body">
                    <div id="role"> 
                        <h4> Role </h4>
                        <p><textarea placeholder="Role"> </textarea></p>
                    </div>
                    <hr />
                    <div id="location">
                    <h4> Location:</h4><p><input type="text" id="position" name="position" placeholder="location" /></p> 
                    </div>
                    <hr />
                   <div id="accountabilities">
                        <h4> Accountabilities </h4>

                              <li id="acc-list-0" style="display: none;"><input type="text" id="accountability-0" " name="requirements-0" class="accountabilities" /></li>
                            
                              <li><input type="text" id="accountability-1" name="accountability-1" placeholder="accountabilities" /></li>
                              <button id="accountability-btn" class ="btn btn-primary">+</button>
                                <!-- <p>None</p>  -->
                                
                            
                   <hr />
                   <div id="requirements">
                        <h4> Job Requirement </h4>
                        <ul>
                                <li id="req-list-0" style="display: none;"><input type="text" id="requirements-0" " name="requirements-0" placeholder="requirements" class="requirements" /></li>

                                <li id="req-list-1"><input type="text" id="requirements-1" name="requirements-1" placeholder="requirements" class="requirements" /></li><button id="requirements-btn" class ="btn requirements-btn btn-primary">+</button>
                                
                                <!-- <p>None</p> --> 
                           
                        </ul>
                   </div>
                   <div id="testimonies">
                        
                   </div>
                   <a href="/forms/application/page1" class="btn btn-success" style="margin-left: 50%; margin-right: 50%;"> Add Position </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
