<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
      html, body{
        background-color:#D3D3D3;
        margin-right:100px;
      }
      h1 {
        font-weight:bold;
      }
      input[type=text] {
        width: 20%;
        padding: 5px 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        background-color: #191c24;
        color: white;
      }
      .btn {
        background-color:black;
        color:#fff;
      }

    </style>
  </head>

  <body>

    <h1>Update Project Details</h1>
    <form action="/edit" method="post">
        
    @csrf 
    </br>
      <div>
        <!-- <label for="InputProjectID">Project ID</label> -->
        <input type="hidden" name="studentID" class="form-control" id="InputProjectID" value="{{$disp['studentID']}}" readonly>
      </div>
      </br>
      <div>
        <label for="InputTitle">Project Title :</label>
        <input type="text" name="projectTitle" id="InputTitle" value="{{$disp['projectTitle']}}" readonly>
      </div>
      </br>
      <div>
        <label for="selectProject">Project Type :</label>
        <input type="text" name="projectType" id="selectProject" value="{{$disp['projectType']}}" readonly>
      </div>
      </br>
      <div>
        <label for="InputStudent">Student Name :</label>
        <input type="text" name="studentName" id="InputStudent" value="{{$disp['studentName']}}" readonly>
      </div>
      </br>
      <div>
        <label for="InputSupervisor">Supervisor :</label>
        <input type="text" name="supervisor" id="InputSupervisor" value="{{$disp['supervisor']}}" readonly>
      </div>
      </br>
      <div>
        <label for="InputExaminer1">Examiner 1 :</label>
        <input type="text" name="examiner1" id="InputExaminer1" value="{{$disp['examiner1']}}" readonly>
      </div>
      </br>
      <div>
        <label for="InputExaminer2">Examiner 2 :</label>
        <input type="text" name="examiner2" id="InputExaminer2" value="{{$disp['examiner2']}}" readonly>
      </div>
      </br>
      <div>
        <label for="InputStartDate">Start Date :</label>
        <input type="date" name="startDate" id="InputStartDate" value="{{$disp['startDate']}}">
      </div>
      </br>
      <div>
        <label for="InputEndDate">End Date :</label>
        <input type="date" name="endDate" id="InputEndDate" value="{{$disp['endDate']}}">
      </div>
      </br>
      <div>
        <label for="InputDuration">Duration :</label>
        <input  type="text" name="duration" id="InputDuration" value="{{$disp['duration']}}" readonly>
      </div>
      </br>
      <div>
        <label for="InputProgress">Project Progress :</label>
          <select name="progress" id="InputProgress" value="{{$disp['progress']}}">
            <option name="Milestone 1" id="1">Milestone 1</option>
            <option name="Milestone 2" id="2">Milestone 2</option>
            <option name="Final Project" id="3">Final Project</option>
          </select>
      </div>
      </br>
      <div>
        <label for="InputStatus">Project Status :</label>
          <select name="status" id="InputStatus" value="{{$disp['status']}}">
            <option name="On Track" id="1">On Track</option>
            <option name="Delayed" id="2">Delayed</option>
            <option name="Extended" id="3">Extended</option>
            <option name="Completed" id="4">Completed</option>   
          </select>
      </div>
      </br></br>
                          
        <button type="submit" class="btn">Submit</button>
        <button type="reset" class="btn">Cancel</button>


</form>
</body>
</html>