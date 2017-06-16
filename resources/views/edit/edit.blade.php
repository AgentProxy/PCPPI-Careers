@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4" >
            <div class="panel panel-default" >
                <div class="panel-heading">
                	<h1> Job Vacancies </h1>
                </div>
                <div class="panel-body">
            		<h3> Luzon </h3>
     				<ul>
     					 @forelse($luzon_positions as $luzon_position)
                            <li><a href="careers/position/{{$luzon_position->id}}"> {{$luzon_position->position}}</a></li>
                        @empty
                            <p>No Vacancies</p> 
                        @endforelse
     					<!-- <li><a href="careers/position"> Sales Manager </a></li> -->
     				</ul>

     				<h3> Visayas </h3>
     				<ul>
     					 @forelse($visayas_positions as $visayas_position)
                            <li><a href="careers/position"> {{$visayas_position->position}}</a></li>
                        @empty
                            <p>No Vacancies</p> 
                        @endforelse
     					<!-- <li><a href="careers/position"> Sales Manager </a></li> -->
     				</ul>

     				<h3> Mindanao </h3>
     				<ul>
     					 @forelse($mindanao_positions as $mindanao_position)
                            <li><a href="careers/position"> {{$mindanao_position->position}}</a></li>
                        @empty
                            <p>No Vacancies</p> 
                        @endforelse
     					<!-- <li><a href="careers/position"> Sales Manager </a></li> -->
     				</ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
	        <div class="panel panel-default" >
		        <div class="panel-body">
	        		<h3> Careers </h3>
	 				<p> Career at PCPPI
						If you have the passion to succeed, excel in what you do, professional in your dealings enjoy giving service, treasure integrity, WE NEED YOU!
					</p>
		        </div>
	        </div>
        </div>
    </div>
</div>
       
<!--     </div>
</div> -->
@endsection