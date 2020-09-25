 @include('include/userheader')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pick Phone Add</h1>
            
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pick Phone</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
              @foreach($data as $pick)
              <form action="picksubmit/{{$pick->id}}" method="post" class="row" enctype="multipart/form-data">
               {{csrf_field()}}


              

                 <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Model Name</b></label>
                  <input type="text" class="form-control" name="pmodel" required value="{{$pick->title}}">                  
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Name	</b></label>
                  <input type="text" class="form-control" name="name" required value="{{$pick->name}}" >                  
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Phone</b></label>
                  <input type="text" class="form-control" name="phone" required value="{{$pick->phone}}">                  
                </div>


                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Email</b></label>
                  <input type="text" class="form-control" name="email" required value="{{$pick->email}}">                  
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Address</b></label>
                  <input type="text" class="form-control" name="address" required value="{{$pick->address}}">                  
                </div>

                 <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Phone EMI	</b></label>
                  <input type="text" class="form-control" name="emi" required>                  
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Pick Price	</b></label>
                  <input type="text" class="form-control" name="price" required value="{{$pick->a1}}">                  
                </div>

                 <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><b>Id Profe </b></label>
                  <input type="file" class="form-control" name="image" >                  
                </div>

                @endforeach


                <div class="form-group col-md-12">
                    <button class="btn btn-info" type="submit" name="submit">Submit</button>
                </div>

                
              </form>

              </div>
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>


 @include('include/userfooter')
  