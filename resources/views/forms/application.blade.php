@extends('layouts.app')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"> 
			<h1> Application Form </h1> 
		</div>

		<div class="panel-body">
			<form id="application" class="form-horizontal" role="form" method="POST">
				<fieldset>
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

				<fieldset>
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
			        <div class="col-md-3">
			            <input id="date_available" class="form-control" name="date_available" value="{{ old('date_available') }}" type="date">
			            <span class="help-block"></span>
			        </div> 

			    	<h3> For Experienced Applicants: </h3>

			    	 <label class="col-md-3 control-label">If employed, please state the reason why you wish to leave your current employment</label>
			        <div class="col-md-3">
			            <input id="desired_salary" class="form-control" name="date_available" value="{{ old('date_available') }}" type="date">
			            <span class="help-block"></span>
			        </div> 

			         <label class="col-md-3 control-label">If unemployed, please state the reason for leaving last position</label>
			        <div class="col-md-3">
			            <input id="desired_salary" class="form-control" name="date_available" value="{{ old('date_available') }}" type="date">
			            <span class="help-block"></span>
			        </div> 

			         <label class="col-md-3 control-label">Would you agree to transfer to other PCPPI locations in the Philippines, if required? </label>
			        <div class="col-md-3">
			            <input id="desired_salary" class="form-control" name="date_available" value="{{ old('date_available') }}" type="date">
			            <span class="help-block"></span>
			        </div> 
				</fieldset>
			</form>
		</div>

	</div>
</div>
</panel>