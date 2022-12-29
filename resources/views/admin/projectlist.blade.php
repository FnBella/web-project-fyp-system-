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
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($list as $x)

                                <tr>
                                    <td> {{$x['studentID']}} </td>
                                    <td> {{$x['projectTitle']}} </td>
                                    <td> {{$x['projectType']}} </td> 
                                    <td> {{$x['studentName']}} </td>
                                    <td> {{$x['supervisor']}} </td>
                                    <td> {{$x['examiner1']}} </td>
                                    <td> {{$x['examiner2']}} </td>
                                    <td> {{$x['startDate']}} </td>
                                    <td> {{$x['endDate']}} </td>
                                    <td> {{$x['duration']}} </td>
                                    <td> {{$x['progress']}} </td>
                                    <td> {{$x['status']}} </td>
                                </tr>

                            @endforeach
                        </tbody>
                      </table>
                      <span>
                          {{$list->links()}}
                        </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
 
  @include("admin.adminscript");
  

  </body>
</html>
        