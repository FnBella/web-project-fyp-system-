<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("supervisor.supervisorcss")
  </head>
  <body>
   
  <div class="container-scroller">
  @include("supervisor.navbar")
    
    
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Project List </h3>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                          <th> Student ID </th>
                            <th> Project Title </th>
                            <th> Project Type </th>
                            <th> Student Name </th>
                            <th> Supervisor </th>
                            <th> Examiner 1 </th>
                            <th> Examiner 2 </th>
                            <th> Start Date </th>
                            <th> End Date </th>
                            <th> Duration </th>
                            <th> Project Progress </th>
                            <th> Project Status </th>
                            <th> Operation </th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($list as $disp)

                                <tr>
                                    <td> {{$disp['studentID']}} </td>
                                    <td> {{$disp['projectTitle']}} </td>
                                    <td> {{$disp['projectType']}} </td> 
                                    <td> {{$disp['studentName']}} </td>
                                    <td> {{$disp['supervisor']}} </td>
                                    <td> {{$disp['examiner1']}} </td>
                                    <td> {{$disp['examiner2']}} </td>
                                    <td> {{$disp['startDate']}} </td>
                                    <td> {{$disp['endDate']}} </td>
                                    <td> {{$disp['duration']}} </td>
                                    <td> {{$disp['progress']}} </td>
                                    <td> {{$disp['status']}} </td>
                                    <td><a href={{"upd/".$disp["studentID"]}}>Update</a></td> 
                                </tr>

                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
 
  @include("supervisor.supervisorscript");
  

  </body>
</html>
        