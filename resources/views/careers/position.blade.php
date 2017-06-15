@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h1> Position </h1> <br/> <h4> Function </h4></div>

                <div class="panel-body">
                   <div id="role"> </div>

                   <div id="accountabilities">
                        <h4> Accountabilities </h4>
                            <ul>
                                <li> lorem ipsum </li>
                                <li> lorem ipsum </li>
                                <li> lorem ipsum </li>
                            </ul>
                   </div>
                   <hr />
                   <div id="requirements">
                        <h4> Job Requirement </h4>
                        <ul>
                            <li> lorem ipsum </li>
                            <li> lorem ipsum </li>
                            <li> lorem ipsum </li>
                        </ul>
                   </div>
                   <div id="testimonies">
                        <h4> Testimonies </h4>
                        <div id="testimonies-1">
                            <p>"lorem ipsum"</p>
                            <div id="picture"><img></div>
                            <p> Name </p>
                            <p> Position </p>
                        </div>
                        <!-- <h4> Job Requirement </h4>
                        <ul>
                            <li> lorem ipsum </li>
                            <li> lorem ipsum </li>
                            <li> lorem ipsum </li>
                        </ul> -->
                   </div>
                   <a href="/forms/application/page1" class="btn btn-success" style="margin-left: 50%; margin-right: 50%;"> Apply Now </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
