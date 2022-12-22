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
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h1>Welcome Supervisor</h1>
                    <h2>to the system</h2>
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

  

  @include("supervisor.supervisorscript")

  </body>
</html>
        

     
