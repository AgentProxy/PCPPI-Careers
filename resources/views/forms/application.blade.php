@extends('layouts.app')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"> 
			<h1> Application Form </h1> 
		</div>

		<div class="panel-body">
			<form id="application" class="form-horizontal" role="form" method="POST">
				<fieldset id ="Personal">
					<legend>Personal Information <sub> fields with * are required </sub> </legend>
					{{csrf_field()}}
					<div class="form-group">
						<label class="col-md-3 control-label">Full Name</label>
				        <div class="col-md-3">
				            <input id="lastName" class="form-control" name="lastName" value="{{ old('lastName') }}" placeholder="Last Name" required>
				            <span class="help-block"></span>
				        </div>

				        <div class="col-md-3">
				            <input id="lastName" class="form-control" name="lastName" value="{{ old('lastName') }}" placeholder="First Name" required>
				            <span class="help-block"></span>
				        </div>

				        <div class="col-md-3">
				            <input id="lastName" class="form-control" name="lastName" value="{{ old('lastName') }}" placeholder="Middle Name" required>
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Tel. No.</label>
				        <div class="col-md-3">
				            <input id="tel" type="tel" class="form-control" name="tel" value="{{ old('tel') }}" placeholder="xxx-xxxx" required>
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Date of Birth</label>
				        <div class="col-md-3">
				            <input id="bdate" class="form-control" name="bdate" value="{{ old('bdate') }}" type="date" required>
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Age</label>
				        <div class="col-md-3">
				            <input id="age" class="form-control" name="age" value="{{ old('bdate') }}" type="num" step="1" required>
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Gender</label>
				        <div class="col-md-3">
				        	<label for="male"> Male </label>
				            <input id="male" class="" name="gender" value="male" type="radio" required>
				            <label for="female"> Female </label>
				             <input id="female" class="" name="gender" value="female" type="radio" required>
				            <span class="help-block"></span>
				        </div>
					
						<label class="col-md-3 control-label"> Present Address</label>
				        <div class="col-md-3">
				            <input id="present_address" class="form-control" name="present_address" value="{{ old('present_address') }}" type="text" required>
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label"> Permanent Address</label>
				        <div class="col-md-3">
				            <input id="permanent_address" class="form-control" name="permanent_address" value="{{ old('permanent_address') }}" type="text" required>
				            <span class="help-block"></span>
				        </div>

				         <label class="col-md-3 control-label"> Citizenship</label>
				        <div class="col-md-3">
				            <input id="citizenship" class="form-control" name="citizenship" value="{{ old('citizenship') }}" type="text" required>
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label"> Marital Status </label>
				        <div class="col-md-3">
				            <input id="marital_status" class="form-control" name="marital_status" value="{{ old('marital_status') }}" type="text" required>
				            <span class="help-block"></span>
				        </div>

				         <label class="col-md-3 control-label"> No. of Dependents </label>
				        <div class="col-md-3">
				            <input id="dependents" class="form-control" name="dependents" value="{{ old('dependents') }}" type="number" step="1" required>
				            <span class="help-block"></span>
				        </div>

				         <label class="col-md-3 control-label">Tin Number</label>
				        <div class="col-md-3">
				            <input id="tin" class="form-control" name="tin" value="{{ old('tin') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">SSS/GSIS Number</label>
				        <div class="col-md-3">
				            <input id="sss_gsis" class="form-control" name="sss_gsis" value="{{ old('sss_gsis') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Pag Ibig Number</label>
				        <div class="col-md-3">
				            <input id="pag_ibig" class="form-control" name="pag_ibig" value="{{ old('pag_ibig') }}" type="text">
				            <span class="help-block"></span>
				        </div>

				        <label class="col-md-3 control-label">Philhealth Number</label>
				        <div class="col-md-3">
				            <input id="philhealth" class="form-control" name="philhealth" value="{{ old('philhealth') }}" type="text">
				            <span class="help-block"></span>
				        </div> 
					</div>
				</fieldset>

				<fieldset id="Application Details">
					<legend>Application Details</legend>

					 <label class="col-md-3 control-label">Position Applied</label>
			        <div class="col-md-3">
			            <input id="position_applied" class="form-control" name="position_applied" value="{{ old('position_applied') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

				    <label class="col-md-3 control-label">Desired Salary</label>
			        <div class="col-md-3">
			            <input id="desired_salary" class="form-control" name="desired_salary" value="{{ old('desired_salary') }}" type="number" step="1">
			            <span class="help-block"></span>
			        </div> 

			        <label class="col-md-3 control-label">Date Available for Employment</label>
			        <div class="col-md-9">
			            <input id="date_available" class="form-control" name="date_available" value="{{ old('date_available') }}" type="date">
			            <span class="help-block"></span>
			        </div> 


			    	<h3> For Experienced Applicants: </h3>

			    	<label class="col-md-6 control-label">If employed, please state the reason why you wish to leave your current employment</label>
			        <div class="col-md-6">
			            <input id="reason_current" class="form-control" name="reason_current" value="{{ old('reason_current') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

			        <label class="col-md-7 control-label">If unemployed, please state the reason for leaving last position</label>
			        <div class="col-md-5">
			            <input id="reason_last" class="form-control" name="reason_last" value="{{ old('reason_last') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

			        <label class="col-md-8 control-label">Would you agree to transfer to other PCPPI locations in the Philippines, if required? </label>
			        <div class="col-md-4">
			            <input id="transfer" class="form-control" name="transfer" value="{{ old('transfer') }}" type="text">
			            <span class="help-block"></span>
			        </div> 

			        </fieldset>

				
				<fieldset id="Educational Background">
					<legend>Educational Background</legend>
					<div class="col-md-12"><h2> Educational Attainment </h2></div>
					<div id="high school">
						<div class="col-md-12"><h4> High School </h4></div>
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
						<div class="col-md-12"><h4> College </h4></div>
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
			    </fieldset>

			</form>
		</div>

	</div>
</div>
</panel>