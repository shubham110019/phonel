 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tablet Category</h1>
            
          </div>

          
        
<div class="row">
  <div class="col-md-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tablet Category</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
             
              <form action="{{route('tabletcatsub')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}

                 <div class="form-group">
                  <label for="exampleInputEmail1"><b>Title</b></label>
                  <input type="text" class="form-control" name="title" required>
                  
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1"><b>image</b></label>
                  <input type="file" class="form-control" name="image" required>
                  
                </div>

             

                <div class="form-group">
                    <button class="btn btn-info" type="submit" name="submit">Submit</button>
                </div>

                
              </form>

              </div>
            </div>
          </div>

</div>
<div class="col-md-8">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View Tablet Category</h6>
              
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

                @foreach($data as $phonecat)

                    <tr>
                      <td>{{$phonecat->id}}</td>
                      <td><b>{{$phonecat->title}}</b></td>
                      
                      <td>
                       

                        <a href="tabletcat/delete/{{$phonecat->id}}" class="btn btn-danger"  ><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </td> 
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     @include('admin/include/footer')