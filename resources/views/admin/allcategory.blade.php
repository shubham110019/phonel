 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">


           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
          
          </div>
        
      
     
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Category</h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      
                   
                      <th>Total Category</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                      <th>Title</th>
                    
                     
                      <th>Total Category</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>

                
                    <tr>
                      <td>1</td>
                      <td><b>Phones</b></td>
                      <td>{{$data1}}</td>
                      <td>
                        <a href="phonecat" class="btn btn-info">Add & View</a>
                      </td> 
                    </tr>

                    <tr>
                      <td>2</td>
                      <td><b>Tablet</b></td>
                      <td>{{$data2}}</td>
                      <td> <a href="tabletcat" class="btn btn-info">Add & View</a></td> 
                    </tr>

                    <tr>
                      <td>3</td>
                      <td><b>Laptop</b></td>
                      <td>{{$data3}}</td>
                      <td> <a href="laptopcat" class="btn btn-info">Add & View</a></td> 
                    </tr>

                 
                   
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