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
<!-- </div> -->
<!-- <div class="container"> -->
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
<!-- </div> -->
<!-- <div class="container"> -->
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
 --><!-- s -->
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <h3> Family Information </h3> 
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
</div>