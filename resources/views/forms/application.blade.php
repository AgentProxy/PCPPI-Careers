@extends('layouts.app')
<div class="container">
	<form id="application" class="form-horizontal" role="form" method="POST">
		<div class="panel panel-default">
			<div class="panel-heading"> 
				<h3> Personal Information </h3> 
			</div>

			<div class="panel-body">			
				{{csrf_field()}}
				<div class="form-group">
					<!-- <h4>Full Name</h4> -->
			        <div class="col-md-4">
			        	<label class="control-label"> Last Name</label>
			            <input id="lastName" class="form-control" name="lastName" value="{{ old('lastName') }}" placeholder="Last Name" required>
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-4">
			        <label class="control-label"> First Name</label>
			            <input id="lastName" class="form-control" name="lastName" value="{{ old('lastName') }}" placeholder="First Name" required>
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-4">
			        <label class="control-label"> Middle Name</label>
			            <input id="lastName" class="form-control" name="lastName" value="{{ old('lastName') }}" placeholder="Middle Name" required>
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-3">
			         <label class="control-label">Tel</label>
			            <input id="tel" type="tel" class="form-control" name="tel" value="{{ old('tel') }}" placeholder="xxx-xxxx" required>
			            <span class="help-block"></span>
			        </div>
			        
			        <div class="col-md-3">
			         <label class="control-label">Birthdate</label>
			            <input id="bdate" class="form-control" name="bdate" value="{{ old('bdate') }}" type="date" required>
			            <span class="help-block"></span>
			        </div>
    
			        <div class="col-md-2">
			        <label class="control-label">Age</label>
			            <input id="age" class="form-control" name="age" value="{{ old('age') }}" min=0 type="number" step="1" required>
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-4">
			        	<label class="control-label">Gender </label>
			        	
			        	<div class="radio col-md-12">
			            	<input id="male" class="" name="gender" value="male" type="radio" required>
			            	<label for="male"> Male </label>
			            </div>
			            <div class="radio col-md-12">
			            	<input id="female" class="" name="gender" value="female" type="radio" required>
			            	<label for="female"> Female </label>
			            </div>
			        </div>

			        <div class="col-md-4">
			        	<label class="control-label"> Marital Status </label>
			            <input id="marital_status" class="form-control" name="marital_status" value="{{ old('marital_status') }}" type="text" required>
			        </div>

			        <div class="col-md-4">
			        	<label class="control-label"> Citizenship</label>
			            <input id="citizenship" class="form-control" name="citizenship" value="{{ old('citizenship') }}" type="text" required>
			            <span class="help-block"></span>
			        </div>
			        
			        <div class="col-md-4">
			         	<label class="control-label"> No. of Dependents </label>
			            <input id="dependents" class="form-control" name="dependents" value="{{ old('dependents') }}" type="number" step="1" min="0" required>
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-3">
			        	<label class="control-label">Tin Number</label>
			            <input id="tin" class="form-control" name="tin" value="{{ old('tin') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-3">
			        	<label class="control-label">SSS/GSIS Number</label>
			            <input id="sss_gsis" class="form-control" name="sss_gsis" value="{{ old('sss_gsis') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-3">
			        	<label class="control-label">Pag Ibig Number</label>
			            <input id="pag_ibig" class="form-control" name="pag_ibig" value="{{ old('pag_ibig') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <div class="col-md-3">
			        	<label class="control-label">Philhealth Number</label>
			            <input id="philhealth" class="form-control" name="philhealth" value="{{ old('philhealth') }}" type="text">
			            <span class="help-block"></span>
			        </div>  
			        
			        <div class="col-md-12">
			        	 <label class="control-label"> Present Address</label>
			            <input id="present_address" class="form-control" name="present_address" placeholder="Present Address" value="{{ old('present_address') }}" type="text" required>
			            <span class="help-block"></span>
			        </div>
 
			        <div class="col-md-12">
			        	<label class="control-label"> Permanent Address</label>
			            <input id="permanent_address" class="form-control" name="permanent_address" value="{{ old('permanent_address') }}" type="text" placeholder="Permanent Address" required>
			            <span class="help-block"></span>
			        </div>
				</div>
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"> 
				<h3> Application Details </h3> 
			</div>
			<div class="panel-body">			
				{{csrf_field()}}
				<div class="form-group">		
			        <div class="col-md-4">
			        <label class="control-label">Position Applied</label>
			            <input id="position_applied" class="form-control" name="position_applied" value="{{ old('position_applied') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

				    
			        <div class="col-md-4">
			        <label class="control-label">Desired Salary</label>
			            <input id="desired_salary" class="form-control" name="desired_salary" value="{{ old('desired_salary') }}" type="number" step="1">
			            <span class="help-block"></span>
			        </div> 

			        
			        <div class="col-md-4">
			        <label class="control-label">Date Available for Employment</label>
			            <input id="date_available" class="form-control" name="date_available" value="{{ old('date_available') }}" type="date">
			            <span class="help-block"></span>
			        </div>
				</div>

				<div clas="col-md-12">
					<label class="control-label" style="text-decoration: underline;"> For Experienced Applicants: </label>
				</div>

				
		        <div class="col-md-12">
		        	<label class="control-label">If employed, please state the reason why you wish to leave your current employment</label>
		            <input id="reason_current" class="form-control" name="reason_current" value="{{ old('reason_current') }}" type="text">
		            <span class="help-block"></span>
		        </div> 

		        <div class="col-md-12">
		        	<label class="control-label">If unemployed, please state the reason for leaving last position</label>
		            <input id="reason_last" class="form-control" name="reason_last" value="{{ old('reason_last') }}" type="text">
		            <span class="help-block"></span>
		        </div>
  
		        <div class="col-md-12">
			        <label class="control-label">Would you agree to transfer to other PCPPI locations in the Philippines, if required? </label>
		            <!-- <input id="transfer" class="form-control" name="transfer" value="{{ old('transfer') }}" type="text">
		            <span class="help-block"></span> -->
		            <div class="radio">
                        <input id="yes" class="" name="rotc" value="yes" type="radio">
                        <label for="yes"> Yes </label>
                    </div>
                    <div class="radio">
                        <input id="no" class="" name="rotc" value="no" type="radio">
                        <label for="no"> No </label>
                    </div>
		        </div> 
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"> 
				<h3> Educational Background </h3>
			</div>
			<div class="panel-body">
			<div class="col-md-12"><h4> Educational Attainment </h4></div>
				<div id="high school">
					<div class="col-md-12"><h5> High School </h5></div>
					<label class="col-md-3 control-label">Name of School</label>
			        <div class="col-md-3">
			            <input id="hs_school_name" class="form-control" name="hs_school_name" value="{{ old('hs_school_name') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Address</label>
			        <div class="col-md-3">
			            <input id="hs_school_address" class="form-control" name="hs_school_address" value="{{ old('hs_school_address') }}" type="text">
			            <span class="help-block"></span>
			        </div>  

			        <label class="col-md-3 control-label">Contact Number</label>
			        <div class="col-md-3">
			            <input id="hs_school_contact" class="form-control" name="hs_school_contact" value="{{ old('hs_school_contact') }}" type="number">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Years Attended</label>
			        <div class="col-md-1">
			            <input id="hs_school_year_from" class="form-control" name="hs_school_year_from" value="{{ old('hs_school_year_from') }}" type="text">

			            <span class="help-block"></span>
			        </div> 

			        <div class="col-md-1">
			        	
			            <input id="hs_school_year_to" class="form-control" name="hs_school_year_to" value="{{ old('hs_school_year_to') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

			        <label class="col-md-3 control-label">Course and Major Field of Study</label>
			        <div class="col-md-3">
			            <input id="hs_school_course" class="form-control" name="hs_school_course" value="{{ old('hs_school_course') }}" type="number">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Honors or Awards Received</label>
			        <div class="col-md-3">
			            <input id="hs_school_honors" class="form-control" name="hs_school_honors" value="{{ old('hs_school_honors') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Year Graduated</label>
			        <div class="col-md-3">
			            <input id="hs_school_year_grad" class="form-control" name="hs_school_year_grad" value="{{ old('hs_school_year_grad') }}" type="text">
			            <span class="help-block"></span>
			        </div>
			    </div>

			    <div id="college">
					<div class="col-md-12"><h5> College </h5></div>
					<label class="col-md-3 control-label">Name of School</label>
			        <div class="col-md-3">
			            <input id="college_school_name" class="form-control" name="college_school_name" value="{{ old('college_school_name') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Address</label>
			        <div class="col-md-3">
			            <input id="college_school_address" class="form-control" name="college_school_address" value="{{ old('college_school_address') }}" type="text">
			            <span class="help-block"></span>
			        </div>  

			        <label class="col-md-3 control-label">Contact Number</label>
			        <div class="col-md-3">
			            <input id="college_school_contact" class="form-control" name="college_school_contact" value="{{ old('college_school_contact') }}" type="number">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Years Attended</label>
			        <div class="col-md-1">
			            <input id="college_school_year_from" class="form-control" name="college_school_year_from" value="{{ old('college_school_year_from') }}" type="text">

			            <span class="help-block"></span>
			        </div> 

			        <div class="col-md-1">
			        	
			            <input id="college_school_year_to" class="form-control" name="college_school_year_to" value="{{ old('college_school_year_to') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

			        <label class="col-md-3 control-label">Course and Major Field of Study</label>
			        <div class="col-md-3">
			            <input id="college_school_course" class="form-control" name="college_school_course" value="{{ old('college_school_course') }}" type="number">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Honors or Awards Received</label>
			        <div class="col-md-3">
			            <input id="college_school_honors" class="form-control" name="college_school_honors" value="{{ old('college_school_honors') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Year Graduated</label>
			        <div class="col-md-3">
			            <input id="college_school_year_grad" class="form-control" name="college_school_year_grad" value="{{ old('college_school_year_grad') }}" type="text">
			            <span class="help-block"></span>
			        </div>  
				 </div> 

			    <!-- <div id="grad">
					<div class="col-md-12"><h5> Graduate </h5></div>
					<label class="col-md-3 control-label">Name of School</label>
			        <div class="col-md-3">
			            <input id="grad_school_name" class="form-control" name="grad_school_name" value="{{ old('grad_school_name') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Address</label>
			        <div class="col-md-3">
			            <input id="grad_school_address" class="form-control" name="grad_school_address" value="{{ old('grad_school_address') }}" type="text">
			            <span class="help-block"></span>
			        </div>  

			        <label class="col-md-3 control-label">Contact Number</label>
			        <div class="col-md-3">
			            <input id="grad_school_contact" class="form-control" name="grad_school_contact" value="{{ old('grad_school_contact') }}" type="tel">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Years Attended</label>
			        <div class="col-md-1">
			            <input id="grad_school_year_from" class="form-control" name="grad_school_year_from" value="{{ old('grad_school_year_from') }}" type="text">

			            <span class="help-block"></span>
			        </div> 

			        <div class="col-md-1">
			        	
			            <input id="grad_school_year_to" class="form-control" name="grad_school_year_to" value="{{ old('grad_school_year_to') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

			        <label class="col-md-3 control-label">Course and Major Field of Study</label>
			        <div class="col-md-3">
			            <input id="grad_school_course" class="form-control" name="grad_school_course" value="{{ old('grad_school_course') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Honors or Awards Received</label>
			        <div class="col-md-3">
			            <input id="grad_school_honors" class="form-control" name="grad_school_honors" value="{{ old('grad_school_honors') }}" type="text">
			            <span class="help-block"></span>
			        </div>

			        <label class="col-md-3 control-label">Year Graduated</label>
			        <div class="col-md-3">
			            <input id="grad_school_year_grad" class="form-control" name="grad_school_year_grad" value="{{ old('grad_school_year_grad') }}" type="text">
			            <span class="help-block"></span>
			        </div>
			    </div> -->
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"><h4>Employment Record</h4></div>
			<div class="panel-body"> </div>
		</div>
	</form>
</div>


					


				<!-- 
				
				<fieldset id="Educational Background">
					<legend>Educational Background</legend>
					

				   
				    <div id="grad">
						<div class="col-md-12"><h4> Graduate </h4></div>
						<label class="col-md-3 control-label">Name of School</label>
				        <div class="col-md-3">
				            <input id="grad_school_name" class="form-control" name="grad_school_name" value="{{ old('grad_school_name') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Address</label>
				        <div class="col-md-3">
				            <input id="grad_school_address" class="form-control" name="grad_school_address" value="{{ old('grad_school_address') }}" type="text">
				            <span class="help-block"></span>
				        </div>  

				        <label class="col-md-3 control-label">Contact Number</label>
				        <div class="col-md-3">
				            <input id="grad_school_contact" class="form-control" name="grad_school_contact" value="{{ old('grad_school_contact') }}" type="number">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Years Attended</label>
				        <div class="col-md-1">
				            <input id="grad_school_year_from" class="form-control" name="grad_school_year_from" value="{{ old('grad_school_year_from') }}" type="text">

				            <span class="help-block"></span>
				        </div> 

				        <div class="col-md-1">
				        	
				            <input id="grad_school_year_to" class="form-control" name="grad_school_year_to" value="{{ old('grad_school_year_to') }}" type="text">
				            <span class="help-block"></span>
				        </div> 

				        <label class="col-md-3 control-label">Course and Major Field of Study</label>
				        <div class="col-md-3">
				            <input id="grad_school_course" class="form-control" name="grad_school_course" value="{{ old('grad_school_course') }}" type="number">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Honors or Awards Received</label>
				        <div class="col-md-3">
				            <input id="grad_school_honors" class="form-control" name="grad_school_honors" value="{{ old('grad_school_honors') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Year Graduated</label>
				        <div class="col-md-3">
				            <input id="grad_school_year_grad" class="form-control" name="grad_school_year_grad" value="{{ old('grad_school_year_grad') }}" type="text">
				            <span class="help-block"></span>
				        </div>
				    </div>
				</fieldset>

				<fieldset>
					<legend>Special Studies</legend>	
					<div id="high school">
						<div class="col-md-12"><h4> High School </h4></div>
						<label class="col-md-3 control-label">Subject of the Seminar/Special Course or Study</label>
				        <div class="col-md-9" >
				            <input id="hs_school_name" class="form-control" name="hs_school_name" value="{{ old('hs_school_name') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Name of Institute </label>
				        <div class="col-md-9">
				            <input id="hs_school_address" class="form-control" name="hs_school_address" value="{{ old('hs_school_address') }}" type="text">
				            <span class="help-block"></span>
				        </div>  

				        <label class="col-md-3 control-label">Location</label>
				        <div class="col-md-9">
				            <input id="hs_school_contact" class="form-control" name="hs_school_contact" value="{{ old('hs_school_contact') }}" type="number">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Awards/Certificates Received</label>
				        <div class="col-md-9">
				            <input id="hs_school_year_from" class="form-control" name="hs_school_year_from" value="{{ old('hs_school_year_from') }}" type="text">

				            <span class="help-block"></span>
				        </div> 			      
				    </div>

				    <div id="college">
						<div class="col-md-12"><h4> College </h4></div>
						<label class="col-md-3 control-label">Subject of the Seminar/Special Course or Study</label>
				        <div class="col-md-3">
				            <input id="hs_school_name" class="form-control" name="hs_school_name" value="{{ old('hs_school_name') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Name of Institute</label>
				        <div class="col-md-3">
				            <input id="hs_school_address" class="form-control" name="hs_school_address" value="{{ old('hs_school_address') }}" type="text">
				            <span class="help-block"></span>
				        </div>  

				        <label class="col-md-3 control-label">Location</label>
				        <div class="col-md-3">
				            <input id="hs_school_contact" class="form-control" name="hs_school_contact" value="{{ old('hs_school_contact') }}" type="number">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Awards/Certificates Received</label>
				        <div class="col-md-1">
				            <input id="hs_school_year_from" class="form-control" name="hs_school_year_from" value="{{ old('hs_school_year_from') }}" type="text">

				            <span class="help-block"></span>
				        </div> 			      
				    </div>

				    <div id="grad">
						<<div class="col-md-12"><h4> Graduate </h4></div>
						<label class="col-md-3 control-label">Subject of the Seminar/Special Course or Study</label>
				        <div class="col-md-3">
				            <input id="hs_school_name" class="form-control" name="hs_school_name" value="{{ old('hs_school_name') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Name of Institute</label>
				        <div class="col-md-3">
				            <input id="hs_school_address" class="form-control" name="hs_school_address" value="{{ old('hs_school_address') }}" type="text">
				            <span class="help-block"></span>
				        </div>  

				        <label class="col-md-3 control-label">Location</label>
				        <div class="col-md-3">
				            <input id="hs_school_contact" class="form-control" name="hs_school_contact" value="{{ old('hs_school_contact') }}" type="number">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Awards/Certificates Received</label>
				        <div class="col-md-1">
				            <input id="hs_school_year_from" class="form-control" name="hs_school_year_from" value="{{ old('hs_school_year_from') }}" type="text">

				            <span class="help-block"></span>
				        </div> 		
				    </div>
				</fieldset>      

			    <fieldset id="Employment Record">
			    	<legend>Skills</legend>
			    	<div class='col-md-12'> <h2> Skills </h2> </div>
			    	<div id ="skills">
			    		<table class="table table-bordered responsive" style="width: 100%">
						    <thead>
								<tr>
									<th class="col-md-2"> Government Exams Passed </th><th> Office Machines You Can Operate </th>
									<th class="col-md-2"> Office Applications and Programs </th>
									<th class="col-md-2"> Languages </th>
									<th class="col-md-2" colspan="2"> Proficiency </th>
									<th class="col-md-2"> Other Special Skills </th>								
								</tr>
							</thead>
							<tbody>
								<tr>
									<td ><input type="text"/ style="border: none; width: 100%;"></td>
									<td><input type="text"/ style="border: none; width: 100%;"></td>
									<td><input type="text"/ style="border: none; width: 100%;"></td>
									<td><input type="text"/ style="border: none; width: 100%;"></td>
									<td><input type="text"/ style="border: none; width: 100%;"></td>
									<td><input type="text"/ style="border: none; width: 100%;"></td>
									<td><input type="text"/ style="border: none; width: 100%;"></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </fieldset> -->

