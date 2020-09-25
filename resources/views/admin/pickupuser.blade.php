 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Phone Category</h1>
            
          </div>

          
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Phone Category</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
             @foreach($data as $phoneid)
              <form action="{{url('/')}}/admin/pickupuser/{{$phoneid->id}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}

               

                 <div class="form-group">
                  <label for="exampleInputEmail1"><b>phone Id</b></label>
                  <input type="text" class="form-control" Value="{{$phoneid->id}}">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1"><b>Phone Name</b></label>
                  <input type="text" class="form-control" Value="{{$phoneid->title}}">
                  
                </div>



              @endforeach

              <div class="form-group">
			    <label for="exampleFormControlSelect1">Send User Name</label>
			    <select class="form-control" id="exampleFormControlSelect1" name="usernum">
			    	@foreach($data2 as $user)
			      <option value="{{$user->id}}">{{$user->name}}</option>
			     @endforeach
			    </select>
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