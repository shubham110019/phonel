 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">


           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Tablet</h1>
          
          </div>
        
      
     
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tablet</h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      
                   
                      
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                      <th>Title</th>
                    
                     
                     
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>

                @foreach($data as $phone)
                    <tr>
                      <td>{{$phone->id}}</td>
                      <td><b>{{$phone->title}}</b></td>
                     
                      <td>
                        <a href="edittablet/{{$phone->id}}" class="btn btn-info"  ><i class="fa fa-eye" aria-hidden="true"></i></a>

                        <a href="alltablet/delete/{{$phone->id}}" class="btn btn-danger"  ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                      </td> 
                    </tr>
                    @endforeach
                    


                 
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     @include('admin/include/footer')