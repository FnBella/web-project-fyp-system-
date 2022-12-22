<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  

  <div class="container-scroller">
  @include("admin.navbar")
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Create Project </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <form action="/add" method="POST" class="forms-sample">
                        @csrf
                      <div class="form-group">
                        <label for="InputStudID">Student ID</label>
                        <input type="text" name="studentID" class="form-control" id="InputStudID" placeholder="Student ID">
                      </div>
                      <div class="form-group">
                        <label for="InputTitle">Project Title</label>
                        <input type="text" name="projectTitle" class="form-control" id="InputTitle" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="selectProject">Project Type</label>
                        <select name="projectType" class="form-control" id="selectProject">
                          <option>Choose Project Type ...</option>
                          <option>Development Project</option>
                          <option>Research Project</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="InputStudent">Student Name</label>
                        <input type="text" name="studentName" class="form-control" id="InputStudent" placeholder="Student Name">
                      </div>
                      <!-- <div class="form-group">
                        <label for="InputSupervisor">Supervisor</label>
                        <input type="text" name="supervisor" class="form-control" id="InputSupervisor" placeholder="Supervisor">
                      </div> -->
                      <div class="form-group">
                        <label for="InputSupervisor">Supervisor</label>
                        <select name="supervisor" class="form-control" id="InputSupervisor">
                          <option>Choose Supervisor ...</option>
                          <option>Azlan Yusof</option>
                          <option>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                          <option>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                          <option>Raja Feninferina Raja Azman</option>
                          <option>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                          <option>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                          <option>Lim Kok Cheng, Ts.</option>
                          <option>Moamin A Mahmoud, Dr.</option>
                          <option>Naziffa Raha Binti Md Nasir</option>
                          <option>Ramona Binti Ramli, Ts.</option>
                          <option>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                          <option>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                          <option>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                          <option>Zailani Bte. Ibrahim, Ts.</option>
                          <option>Azhana Ahmad, Ts. Dr.</option>
                        </select>
                      </div>
                      <!-- <div class="form-group">
                        <label for="InputExaminer1">Examiner 1 </label>
                        <input type="text" name="examiner1" class="form-control" id="InputExaminer1" placeholder="Examiner 1">
                      </div>
                      <div class="form-group">
                        <label for="InputExaminer2">Examiner 2 </label>
                        <input type="text" name="examiner2" class="form-control" id="InputExaminer2" placeholder="Examiner 2">
                      </div> -->
                      <div class="form-group">
                        <label for="InputExaminer1">Examiner 1</label>
                        <select name="examiner1" class="form-control" id="InputExaminer1">
                          <option>Choose Examiner 1 ...</option>
                          <option>Azlan Yusof</option>
                          <option>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                          <option>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                          <option>Raja Feninferina Raja Azman</option>
                          <option>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                          <option>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                          <option>Lim Kok Cheng, Ts.</option>
                          <option>Moamin A Mahmoud, Dr.</option>
                          <option>Naziffa Raha Binti Md Nasir</option>
                          <option>Ramona Binti Ramli, Ts.</option>
                          <option>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                          <option>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                          <option>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                          <option>Zailani Bte. Ibrahim, Ts.</option>
                          <option>Azhana Ahmad, Ts. Dr.</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="InputExaminer2">Examiner 2</label>
                        <select name="examiner2" class="form-control" id="InputExaminer2">
                          <option>Choose Examiner 2 ...</option>
                          <option>Azlan Yusof</option>
                          <option>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                          <option>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                          <option>Raja Feninferina Raja Azman</option>
                          <option>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                          <option>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                          <option>Lim Kok Cheng, Ts.</option>
                          <option>Moamin A Mahmoud, Dr.</option>
                          <option>Naziffa Raha Binti Md Nasir</option>
                          <option>Ramona Binti Ramli, Ts.</option>
                          <option>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                          <option>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                          <option>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                          <option>Zailani Bte. Ibrahim, Ts.</option>
                          <option>Azhana Ahmad, Ts. Dr.</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="InputStartDate">Start Date </label>
                        <input type="date" name="startDate" class="form-control" id="InputStartDate">
                      </div>
                      <div class="form-group">
                        <label for="InputEndDate">End Date </label>
                        <input type="date" name="endDate" class="form-control" id="InputEndDate">
                      </div>
                      <div class="form-group">
                        <label for="InputDuration">Duration </label>
                        <input type="text" name="duration" class="form-control" id="InputDuration" placeholder="Months">
                      </div>
                      <div class="form-group">
                        <label for="InputProgress">Project Progress</label>
                        <select name="progress" class="form-control" id="InputProgress">
                          <option>Choose Project Progress ...</option>
                          <option>Milestone 1</option>
                          <option>Milestone 2</option>
                          <option>Final Report</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="InputStatus">Project Status</label>
                        <select name="status" class="form-control" id="InputStatus">
                          <option>Choose Project Status ...</option>
                          <option>On track</option>
                          <option>Delayed</option>
                          <option>Extended</option>
                          <option>Completed</option>
                        </select>
                      </div>
                      
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-dark">Cancel</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   
    

  @include("admin.adminscript");

  </body>
</html>


