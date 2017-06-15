@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h1> {{$position->position}} </h1> <br/> <h4> {{$position->function}} </h4></div>

                <div class="panel-body">
                    <div id="role"> 
                        <p>{{$position->role}}</p>
                    </div>
                    <hr />
                    <div id="location">
                    <h4> Location:</h4><p>{{$position->location}}</p> 
                    </div>
                    <hr />
                   <div id="accountabilities">
                        <h4> Accountabilities </h4>
                            @forelse($accountabilities as $accountability)
                                <li> {{$accountability->accountability}} </li>
                            @empty
                                <p>None</p> 
                            @endforelse
                   </div>
                   <hr />
                   <div id="requirements">
                        <h4> Job Requirement </h4>
                        <ul>
                            @forelse($requirements as $requirement)
                                <li> {{$requirement->requirement}} </li>
                            @empty
                                <p>None</p> 
                            @endforelse
                        </ul>
                   </div>
                   <div id="testimonies">
                        
                   </div>
                   <a href="/forms/application/page1" class="btn btn-success" style="margin-left: 50%; margin-right: 50%;"> Apply Now </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
