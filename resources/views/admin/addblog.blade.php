 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blog Add</h1>
            
          </div>

          
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Blog Add</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
             
              <form action="{{route('blogsubmit')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}

                 <div class="form-group">
                  <label for="exampleInputEmail1"><b>BLog Title</b></label>
                  <input type="text" class="form-control" name="title">
                  
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1"><b>image</b></label>
                  <input type="file" class="form-control" name="image">
                  
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1"><b>Blog Text</b></label>
                  <textarea class="form-control" name="text" rows="3"></textarea>
                  
                </div>

                <div class="form-group">
                    <button class="btn btn-info" type="submit" name="submit">Submit</button>
                </div>

                
              </form>

              </div>
            </div>
          </div>








        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     @include('admin/include/footer')