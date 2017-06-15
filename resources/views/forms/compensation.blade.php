@extends('layouts.app')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"> 
			<h1>Compensation Data Sheet</h1>
		</div>
		<div class="panel-body">
			<form id="application" class="form-horizontal" role="form" method="POST">
				{{csrf_field()}}
					 <div class="row">
					 	<div class="col-md-7">
                        <div class="well">
					 	<label class="control-label">NAME</label>		 	
					 	<div class="form-group">
                            <div class="col-md-4">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus placeholder="LASTNAME">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="FIRSTNAME">

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <input id="middle" type="text" class="form-control" name="middle" value="{{ old('middle') }}" required autofocus placeholder="MIDDLE">

                                @if ($errors->has('middle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        </div>
					 	<div class="col-md-3">
                        <div class="well">
					 	<label class="control-label">EXPECTED SALARY</label>
					 		<div class="form-group">
					 			<div class="col-md-12">
                                <input id="expected-salary" type="number" class="form-control" name="expected-salary-salary" value="{{ old('expected-salary') }}" required autofocus min="0">

                                @if ($errors->has('expected-salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('expected-salary') }}</strong>
                                    </span>
                                @endif
                            </div>
					 		</div>
					 	</div>
                        </div>
					 	<div class="col-md-2">
                            <div class="well">
					 		<label class="control-label">DATE</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autofocus >

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dates') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>
					 	</div>
					 </div>
                     <div class="well">
                     <div class="row">
                        
                        <div class="col-md-4">
                            <label class="control-label">POSITION APPLIED FOR</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                <input id="position-applied" type="text" class="form-control" name="position-applied" value="{{ old('position-applied') }}" required autofocus >

                                @if ($errors->has('position-applied'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position-applied') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">CURRENT POSITION</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                <input id="current-position-postition" type="text" class="form-control" name="current-position-position" value="{{ old('current-position-position') }}" required autofocus >

                                @if ($errors->has('current-position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-position') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">CURRENT COMPANY / EMPLOYER</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                <input id="current-company" type="text" class="form-control" name="current-company" value="{{ old('current-company') }}" required autofocus >

                                @if ($errors->has('current-company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-company') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="well" style="padding-right: 70px; padding-left: 70px;">
                    <div class="row text-center">
                        <div class="col-md-6"><h4><strong>PARTICULARS</strong></h4></div>
                        <div class="col-md-6"><h4><strong>AMOUNT</strong></h4></div>
                    </div>
                    <br />
                        <p><strong>CASH COMPENSATION</strong>&nbsp;<em>(Please state in gross figures)</em></p>
                        <div class="form-group">
                            <label for="email" class="col-md-6 control-label" style="text-align: left; clear: right;">&emsp;&emsp;Monthly Basic Salary</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="monthly-basic-salary" type="number" class="form-control" name="monthly-basic-salary" value="{{ old('monthly-basic-salary') }}" required autofocus min="0">

                                @if ($errors->has('monthly-basic-salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('monthly-basic-salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fixed-monthly-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Fixed Monthly Allowance</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="fixed-monthly-allowance" type="number" class="form-control" name="fixed-monthly-allowance" value="{{ old('fixed-monthly-allowance') }}" required autofocus min="0">

                                @if ($errors->has('fixed-monthly-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixed-monthly-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr />
                        <div class="form-group">
                            <div class="col-md-6">
                            <p><strong>NO. OF MONTHS GUARANTEED</strong>&nbsp;<em>(Please state if 13<sup>th</sup>, 14<sup>th</sup>, others)</em></p>
                            </div>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="months-guaranteed" type="number" class="form-control" name="months-guaranteed" value="{{ old('months-guaranteed') }}" required autofocus min="0">

                                @if ($errors->has('months-guaranteed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('monthly-basic-salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr />
                        <p><strong>VARIABLE COMPENSATION</strong>&nbsp;<em>(Please state in gross figures)</em></p>
                        <div class="form-group">
                            <label for="company-bonus" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Company Bonuses&nbsp;<em>(Please state what type)</em></label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="company-bonus" type="text" class="form-control" name="company-bonus" value="{{ old('avg-monthly-com') }}" required autofocus >

                                @if ($errors->has('company-bonus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company-bonus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fixed-monthly-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Average Monthly Commission</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="avg-monthly-com" type="number" class="form-control" name="avg-monthly-com" value="{{ old('avg-monthly-com') }}" required autofocus min="0">

                                @if ($errors->has('avg-monthly-com'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avg-monthly-com') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avg-monthly-incentive" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Average Monthly Incentive</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="avg-monthly-incentive" type="number" class="form-control" name="avg-monthly-incentive" value="{{ old('avg-monthly-incentive') }}" required autofocus min="0">

                                @if ($errors->has('avg-monthly-incentive'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avg-monthly-incentive') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr />
                        <p><strong>BENEFIT PROVISIONS</strong>&nbsp;<em>(*Please indicate if fixed amount is given through payroll or actual reimbursements apply)</em></p>
                        <div class="form-group">
                            <label for="transport-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;*Transport Allowance</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="transport-allowance" type="number" class="form-control" name="transport-allowance" value="{{ old('transport-allowance') }}" required autofocus min="0">

                                @if ($errors->has('transport-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transport-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meal-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;*Meal Allowance / Subsidy</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="meal-allowance" type="number" class="form-control" name="meal-allowance" value="{{ old('meal-allowance') }}" required autofocus min="0">

                                @if ($errors->has('meal-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meal-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cellphone-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;*Cellphone Allowance / Subsidy</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="cellphone-allowance" type="number" class="form-control" name="cellphone-allowance" value="{{ old('cellphone-allowance') }}" required autofocus min="0">

                                @if ($errors->has('cellphone-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cellphone-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="housing-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;*Housing Allowance</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="housing-allowance" type="number" class="form-control" name="housing-allowance" value="{{ old('housing-allowance') }}" required autofocus min="0">

                                @if ($errors->has('housing-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('housing-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rice-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;*Rice Allowance / Subsidy</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="rice-allowance" type="number" class="form-control" name="rice-allowance" value="{{ old('rice-allowance') }}" required autofocus min="0">

                                @if ($errors->has('rice-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rice-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="clothing-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Clothing Allowance / Uniform</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="clothing-allowance" type="number" class="form-control" name="clothing-allowance" value="{{ old('clothing-allowance') }}" required autofocus min="0">

                                @if ($errors->has('clothing-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('clothing-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="transfer-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Transfer / Relocation Allowance</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="transfer-allowance" type="number" class="form-control" name="transfer-allowance" value="{{ old('transfer-allowance') }}" required autofocus min="0">

                                @if ($errors->has('transfer-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transfer-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <p><strong>&emsp;&emsp;Sick Leave</strong>&nbsp;<em>(*Please indicate no. of days entitled)</em></p>
                        <div class="form-group">
                            <label for="sick-leave-ctc" class="col-md-5 col-md-offset-1 control-label" style="text-align: left;">&emsp;&emsp;Convertible to Cash</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="sick-leave-ctc" type="number" class="form-control" name="sick-leave-ctc" value="{{ old('sick-leave-ctc') }}" required autofocus min="0">

                                @if ($errors->has('sick-leave-ctc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sick-leave-ctc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sick-leave-non-ctc" class="col-md-5 col-md-offset-1 control-label" style="text-align: left;">&emsp;&emsp;Non-convertible to Cash</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="sick-leave-non-ctc" type="number" class="form-control" name="sick-leave-non-ctc" value="{{ old('sick-leave-non-ctc') }}" required autofocus min="0">

                                @if ($errors->has('sick-leave-non-ctc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sick-leave-non-ctc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <p><strong>&emsp;&emsp;Vacation Leave</strong>&nbsp;<em>(*Please indicate no. of days entitled)</em></p>
                        <div class="form-group">
                            <label for="vacation-leave-ctc" class="col-md-5 col-md-offset-1 control-label" style="text-align: left;">&emsp;&emsp;Convertible to Cash</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="vacation-leave-ctc" type="number" class="form-control" name="vacation-leave-ctc" value="{{ old('vacation-leave-ctc') }}" required autofocus min="0">

                                @if ($errors->has('vacation-leave-ctc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vacation-leave-ctc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vacation-leave-non-ctc" class="col-md-5 col-md-offset-1 control-label" style="text-align: left;">&emsp;&emsp;Non-convertible to Cash</label>

                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="vacation-leave-non-ctc" type="number" class="form-control" name="vacation-leave-non-ctc" value="{{ old('vacation-leave-non-ctc') }}" required autofocus min="0">

                                @if ($errors->has('vacation-leave-non-ctc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vacation-leave-non-ctc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company-car" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Company Car / Car Plan</label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="company-car" type="number" class="form-control" name="company-car" value="{{ old('company-car') }}" required autofocus min="0">

                                @if ($errors->has('company-car'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company-car') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="company-insurance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Company Insurance &amp; Maintainance&nbsp;<em>(Per year)</em></label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="company-insurance" type="number" class="form-control" name="company-insurance" value="{{ old('company-insurance') }}" required autofocus min="0">

                                @if ($errors->has('company-insurance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company-insurance') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="gas-allowance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Gas Allowance</label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="gas-allowance" type="number" class="form-control" name="gas-allowance" value="{{ old('gas-allowance') }}" required autofocus min="0">

                                @if ($errors->has('gas-allowance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gas-allowance') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="life-insurance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Life &amp; Accident Insurance</label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="life-insurance" type="number" class="form-control" name="life-insurance" value="{{ old('life-insurance') }}" required autofocus min="0">

                                @if ($errors->has('life-insurance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('life-insurance') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="hospitalization" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Hospitalization Plan</label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="hospitalization" type="number" class="form-control" name="hospitalization" value="{{ old('hospitalization') }}" required autofocus min="0">

                                @if ($errors->has('hospitalization'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hospitalization') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="loan-availments" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Loan Availments&nbsp;<em>(Please indicate type i.e. Education, Housing, Car, etc.)</em></label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="loan-availments" type="number" class="form-control" name="loan-availments" value="{{ old('loan-availments') }}" required autofocus min="0">

                                @if ($errors->has('hospitalization'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('loan-availments') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="stock-options" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Stock Options / Stock Grant</label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="stock-options" type="text" class="form-control" name="stock-options" value="{{ old('stock-options') }}" required autofocus >

                                @if ($errors->has('stock-options'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stock-options') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="stock-options" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Stock Options / Stock Grant</label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="stock-options" type="number" class="form-control" name="stock-options" value="{{ old('stock-options') }}" required autofocus min="0">

                                @if ($errors->has('stock-options'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stock-options') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="educ-assistance" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Educational Assistance</label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="educ-assistance" type="number" class="form-control" name="educ-assistance" value="{{ old('educ-assistance') }}" required autofocus min="0">

                                @if ($errors->has('educ-assistance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('educ-assistance') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="other-allowances" class="col-md-6 control-label" style="text-align: left;">&emsp;&emsp;Other Allowances&nbsp;<em>(Please indicate type)</em></label>
                            <div class="col-md-4 col-md-offset-1 col-md-1-offset">
                                <input id="other-allowances" type="text" class="form-control" name="other-allowances" value="{{ old('other-allowances') }}" required autofocus >

                                @if ($errors->has('other-allowances'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('other-allowances') }}</strong>
                                    </span>
                                @endif
                            </div>   
                        </div>
                    </div>
                    <div class="well">
                        <h4><strong>REMARKS / OTHER COMMENTS:</strong></h4>
                        <textarea rows="3" style="width: 100%;"></textarea>
                    </div>
			</form>
		</div>
	</div>
</div>
