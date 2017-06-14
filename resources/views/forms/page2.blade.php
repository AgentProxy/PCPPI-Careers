@extends('layouts.app')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <h3> Affiliations </h3> 
        </div>
        <div class="panel-body" id="affiliations">
            <div class="col-md-3">
                <h4>Name of Organization</h4><br>
                <form action="">
                    <div class="form-group">
                        <input id="org" type="text" class="form-control" name="org" placeholder="Name of Organization"/>
                        <input id="org" type="text" class="form-control" name="org" placeholder="Name of Organization"/>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <h4>Position Held</h4><br>
                <form action="">
                    <div class="form-group">
                        <input id="position" type="text" class="form-control" name="position" placeholder="Position"/>
                        <input id="position" type="text" class="form-control" name="position" placeholder="Position"/>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <h4>Nature of Organization</h4><br>
                <form action="">
                    <div class="form-group">
                        <input id="nature" type="text" class="form-control" name="nature" placeholder="Nature of Organization"/>
                        <input id="nature" type="text" class="form-control" name="nature" placeholder="Nature of Organization"/>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h4>Membership Dates</h4>
                <form action="">
                    <div class="form-group">
                        <div class="col-md-6">
                            <small>From</small>
                            <input id="fromdate" type="date" class="form-control" name="fromdate" placeholder="Date"/>
                            <input id="fromdate" type="date" class="form-control" name="fromdate" placeholder="Date"/>
                        </div>
                        <div class="col-md-6">
                            <small>To</small>
                            <input id="todate" type="date" class="form-control" name="todate" placeholder="Date"/>
                            <input id="todate" type="date" class="form-control" name="todate" placeholder="Date"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- </div>
<div class="container"> -->
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <h3> Military Experience </h3> 
        </div>
        <div class="panel-body">
            <div class="col-md-12" id="rotc">
                <div>
                    <label class="control-label">Did you take ROTC?</label>
                </div>
                <div class="col-md-2">
                    <div class="radio">
                        <input id="yes" class="" name="rotc" value="yes" type="radio">
                        <label for="yes"> Yes </label>
                    </div>
                    <div class="radio">
                        <input id="no" class="" name="rotc" value="no" type="radio">
                        <label for="no"> No </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="radio">
                        <input id="basic" class="" name="type" value="basic" type="radio">
                        <label for="basic"> Basic </label>
                    </div>
                    <div class="radio">
                        <input id="advanced" class="" name="type" value="advanced" type="radio">
                        <label for="advanced"> Advanced </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="">
                        <div>
                            <small>Rank</small>
                        </div>
                        <div class="form-group">
                            <input id="rank" type="text" class="form-control" name="rank" placeholder="e.g. Cadet Sgt"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="col-md-6">
                            <small>From</small>
                            <input id="frdate" type="date" class="form-control" name="frdate" placeholder="Date"/>
                        </div>
                        <div class="col-md-6">
                            <small>To</small>
                            <input id="tdate" type="date" class="form-control" name="tdate" placeholder="Date"/>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-12" id="reserve">
                <div>
                    <label class="control-label">Are you a reserve officer?</label>
                </div>
                <div class="col-md-1">
                    <div class="radio">
                        <input id="yes" class="" name="reserve" value="yes" type="radio">
                        <label for="yes"> Yes </label>
                    </div>
                    <div class="radio">
                        <input id="no" class="" name="reserve" value="no" type="radio">
                        <label for="no"> No </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <form action="">
                        <div>
                            <small>Branch of Service</small>
                        </div>
                        <div class="form-group">
                            <input id="branch" type="text" class="form-control" name="branch" placeholder="Branch of Service"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form action="">
                        <div>
                            <small>Rate of Rank</small>
                        </div>
                        <div class="form-group">
                            <input id="branch" type="text" class="form-control" name="branch" placeholder="Rate of Rank"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="">
                        <div>
                            <small>Place of Training</small>
                        </div>
                        <div class="form-group">
                            <input id="branch" type="text" class="form-control" name="branch" placeholder="Place of Training"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="col-md-6">
                            <small>From</small>
                            <input id="frdate" type="date" class="form-control" name="frdate"/>
                        </div>
                        <div class="col-md-6">
                            <small>To</small>
                            <input id="tdate" type="date" class="form-control" name="tdate"/>
                        </div>
                    </div>
                </div> 
                <div class="col-md-5">
                    <form action="">
                        <div>
                            <small>What is/was your duty?</small>
                        </div>
                        <div class="form-group">
                            <input id="branch" type="text" class="form-control" name="branch" placeholder="Rate of Rank"/>
                        </div>
                    </form>
                </div>   
            </div>
        </div>    
    </div>
<!-- </div>
<div class="container"> -->
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <h3> Medical History </h3> 
        </div>
        <div class="panel-body">
            <div id="pe">
                <div>
                    <label class="control-label">Physical Examination</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div>
                            <small>Date of Last Physical Examination</small>
                            <input id="phydate" type="date" class="form-control" name="phydate"/>
                        </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <form action="">
                        <div>
                            <small>Medical Institution</small>
                        </div>
                        <div class="form-group">
                            <input id="hospital" type="text" class="form-control" name="hospital"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="">
                        <div>
                            <small>Purpose</small>
                        </div>
                        <div class="form-group">
                            <input id="purpose" type="text" class="form-control" name="purpose"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="">
                        <div>
                            <small>Results</small>
                        </div>
                        <div class="form-group">
                            <input id="results" type="text" class="form-control" name="results"/>
                        </div>
                    </form>
                </div>       
            </div>
            <div id="illness">
                <div class="col-md-12">
                    <div>
                        <label class="control-label">Illnesses and Injuries</label>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <small>Have you ever had any serious illnesses/injuries?</small>
                        </div>
                        <div class="col-md-1">
                            <div class="radio">
                                <input id="yes" class="" name="injury" value="yes" type="radio">
                                <label for="yes"> Yes </label>
                            </div>
                            <div class="radio">
                                <input id="no" class="" name="injury" value="no" type="radio">
                                <label for="no"> No </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div>
                                <small>Date of Occurrence</small>
                                <input id="illdate" type="date" class="form-control" name="illdate"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="">
                            <div>
                                <small>Explain Nature of Illness/Injury</small>
                            </div>
                            <div class="form-group">
                                <input id="results" type="text" class="form-control" name="results"/>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div>
                            <small>How about any of your family members?</small>
                        </div>
                        <div class="col-md-1">
                            <div class="radio">
                                <input id="yes" class="" name="faminjury" value="yes" type="radio">
                                <label for="yes"> Yes </label>
                            </div>
                            <div class="radio">
                                <input id="no" class="" name="faminjury" value="no" type="radio">
                                <label for="no"> No </label>
                            </div>
                        </div>
                    </div>   
                    <div class="col-md-7">
                        <form action="">
                            <div>
                                <small>State family member and their illness/injury</small>
                            </div>
                            <div class="form-group">
                                <input id="results" type="text" class="form-control" name="results"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="desc">
                <div>
                    <label class="control-label">Physical Description</label>
                </div>
                <div class="col-md-2">
                    <form action="">
                        <div>
                            <small>Height (cm)</small>
                        </div>
                        <div class="form-group">
                            <input id="height" type="text" class="form-control" name="height"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form action="">
                        <div>
                            <small>Weight (kg)</small>
                        </div>
                        <div class="form-group">
                            <input id="weight" type="text" class="form-control" name="weight"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form action="">
                        <div>
                            <small>Hair Color</small>
                        </div>
                        <div class="form-group">
                            <input id="hair" type="text" class="form-control" name="hair"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form action="">
                        <div>
                            <small>Eye Color</small>
                        </div>
                        <div class="form-group">
                            <input id="eye" type="text" class="form-control" name="eye"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="">
                        <div>
                            <small>State any physical defect or identifying marks</small>
                        </div>
                        <div class="form-group">
                            <input id="defect" type="text" class="form-control" name="defect"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
<!-- </div>
<div class="container"> -->
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <h3> Family Information </h3> 
        </div>
        <div class="panel-body">
            <div id="family">
                <div>
                    <label class="control-label">Spouse</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div>
                            <small>Name</small>
                            <input id="spousename" type="text" class="form-control" name="spousename"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div>
                            <small>Address</small>
                            <input id="spouseaddr" type="text" class="form-control" name="spouseaddr"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <div>
                            <small>Occupation</small>
                            <input id="spousejob" type="text" class="form-control" name="spousejob"/>
                        </div>
                    </div>
                </div> 
                <div class="col-md-2">
                    <div class="form-group">
                        <div>
                            <small>Company</small>
                            <input id="spousecomp" type="text" class="form-control" name="spousecomp"/>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="control-label">Father</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div>
                            <small>Name</small>
                            <input id="fathername" type="text" class="form-control" name="fathername"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div>
                            <small>Address</small>
                            <input id="fatheraddr" type="text" class="form-control" name="fatheraddr"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <div>
                            <small>Occupation</small>
                            <input id="fatherjob" type="text" class="form-control" name="fatherjob"/>
                        </div>
                    </div>
                </div> 
                <div class="col-md-2">
                    <div class="form-group">
                        <div>
                            <small>Company</small>
                            <input id="fathercomp" type="text" class="form-control" name="fathercomp"/>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="control-label">Mother</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div>
                            <small>Name</small>
                            <input id="mothername" type="text" class="form-control" name="mothername"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div>
                            <small>Address</small>
                            <input id="motheraddr" type="text" class="form-control" name="motheraddr"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <div>
                            <small>Occupation</small>
                            <input id="motherjob" type="text" class="form-control" name="motherjob"/>
                        </div>
                    </div>
                </div> 
                <div class="col-md-2">
                    <div class="form-group">
                        <div>
                            <small>Company</small>
                            <input id="mothercomp" type="text" class="form-control" name="mothercomp"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="control-label">Name/Contact Number/Relationship of Person to be called for emergencies</label>
                    <div class="form-group">
                        <div>
                            <input id="emergency" type="text" class="form-control" name="emergency"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="control-label">Any relative currently employed by PCPPI? State name and relationship.</label>
                    <div class="form-group">
                        <div>
                            <input id="relative" type="text" class="form-control" name="relative"/>
                        </div>
                    </div>
                </div> 
                <div>
                    <label class="control-label">How did you know about this vacancy?</label>
                    <form>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label><input type="checkbox" value="jobstreet">JobStreet</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="pcppi">PCPPI Website</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="linkedin">LinkedIn</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="hh">Head Hunter</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="hh">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label><input type="checkbox" value="referred">Referred by:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="referred">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label><input type="checkbox" value="others">Others:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="others">
                            </div>
                        </div>
                        <div class="col"></div>   
                    </form>
                </div>   
            </div>
        </div>
    </div>
<!-- </div>
<div class="container"> -->
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <h3> References </h3> 
        </div>
        <div class="panel-body">
            <h4>Please cite three (3) references (name and contact number)</h4>
            <div class="col-md-4">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="ref1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="ref2">
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="ref2">
                </div>
            </div>
        </div>
    </div>
<!-- </div>
<div class="container"> -->
    <div class="panel panel-default">
        <div class="panel-body">
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I hereby authorize and request this Company, Pepsi-Cola Products Philippines, Inc., along with each former employer, person, firm or corporation given above as reference, to answer and give any and all questions and information that may be asked and sought concerning my personal history and work, habits, character, skills or actions in connection with this application.<br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I assure the Company that all the data I have provided in this application are complete and accurate. I understand that any falsification or omission of information hereon which tends to mislead will be considered cause for dismissal upon discovery. I waive any rights I may have to contest dismissal resulting from withholding or falsifying information on this application or in connection therewith even though the withholding or falsifying of information may not have been within my knowledge or contemplation at the time the application was submitted. <br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I agree to submit myself, upon request, for any physical examination by the Company’s physician and understand that failing to pass said examination will negatively affect my application.<br><br> 
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I agree that, if at any time I shall make any claim against the Company for personal injuries, I will submit myself to examination by a physician/s selected by the Company as often a s may be requested, and upon my refusal or failure to do so, the claim shall be deemed waived, or if I have taken any legal action, the same shall abate.<br><br> 
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp In consideration of my application with Pepsi-Cola Products Philippines, Inc., I agree that I may be relocated, rotated, reassigned and/or transferred to any of the Company’s plants, offices, branches or other company locations within the Philippines. I understand and accept that such transfer, relocation or reassignment shall be made by the Company upon its sole judgment and discretion, taking into account operation needs and the exigencies of the service.<br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp THE FOREGOING SHALL BE CONSTRUED TO APPLY TO ALL POSITIONS I MAY HEREAFTER HOLD WITH THE COMPANY THOUGH THE PARTICULAR POSITION FOR WHICH I NOW APPLY IS: 
            <input type="text" class="form-control" name="apply">
            </p>
            <br><br>
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp SIGNED AT &nbsp&nbsp<input type="text" name="signaddr">&nbsp&nbsp on this &nbsp&nbsp<input type="text" name="signday">&nbsp&nbsp day of &nbsp&nbsp<input type="text" name="signmonth">&nbsp&nbsp 20 &nbsp&nbsp<input type="number" name="signyear" min="17"></p>
            <br><br>
            <input style="float: right;" type="text" class="col-md-3" name="name"><br><br>
            <label style="float: right;">Applicant's Name and Signature</label>
        </div>
    </div>    
</div>