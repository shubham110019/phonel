 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Phone </h1>
            
          </div>

          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Phone</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
             
              <form action="{{route('addphonepro')}}" method="post" enctype="multipart/form-data" class="row">
               {{csrf_field()}}

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Title</b></label>
                  <input type="text" class="form-control" name="title" required>
                  
                </div>

                 <div class="form-group col-md-4">
				    <label for="exampleFormControlSelect1">category</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="cat" >
				     @foreach($data5 as $cat)
				      <option value="{{$cat->id}}">{{$cat->title}}</option>
				     @endforeach
				    </select>
				  </div>

				   <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Image</b></label>
                  <input type="file" class="form-control" name="image" required>
                  
                </div>


				  <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>main price</b></label>
                  <input type="text" class="form-control" name="price" required>
                  
                </div>


                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>average</b></label>
                  <input type="text" class="form-control" name="average" required>
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>belowaverage</b></label>
                  <input type="text" class="form-control" name="belowaverage" required>
                  
                </div>

                <div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Faults</b></h3>
                	<hr>
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>display price</b></label>
                  <input type="text" class="form-control" name="display" required>
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>screen price</b></label>
                  <input type="text" class="form-control" name="screen" required>
                  
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Power Button price</b></label>
                  <input type="text" class="form-control" name="Power" required>
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Charging price</b></label>
                  <input type="text" class="form-control" name="Charging" required>
                  
                </div>

                  <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Front Camera price</b></label>
                  <input type="text" class="form-control" name="Front" required>
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Back Camera price</b></label>
                  <input type="text" class="form-control" name="Back" required>
                  
                </div>


                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Battery price</b></label>
                  <input type="text" class="form-control" name="Battery" required>
                  
                </div>


                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Speaker price</b></label>
                  <input type="text" class="form-control" name="Speaker" required>
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Volume Button price</b></label>
                  <input type="text" class="form-control" name="Volume" required>
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>wifi price</b></label>
                  <input type="text" class="form-control" name="Wifi" required>
                  
                </div>

                  <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>face Lock</b></label>
                  <input type="text" class="form-control" name="facelook" required >
                  
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>fingerprint lock</b></label>
                  <input type="text" class="form-control" name="fingerlock" required >
                  
                </div>

               

                <div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Accessories</b></h3>
                	<hr>
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>box price</b></label>
                  <input type="text" class="form-control" name="box" required>
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Earphone price</b></label>
                  <input type="text" class="form-control" name="Earphone" required>
                  
                </div>


                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Charger price</b></label>
                  <input type="text" class="form-control" name="Charger" required>
                  
                </div>

                <div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Device Age</b></h3>
                	<hr>
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Below 1 Month Bill</b></label>
                  <input type="text" class="form-control" name="bill1" required>
                  
                </div>


                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>1 Month - 5 Months</b></label>
                  <input type="text" class="form-control" name="bill2" required>
                  
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>5 Month - 10 Months</b></label>
                  <input type="text" class="form-control" name="bill3" required>
                  
                </div>
             
             	<div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Phone details</b></h3>
                	<hr>
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>processor</b></label>
                  <input type="text" class="form-control" name="processor" required>
                  
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>ram</b></label>
                  <input type="text" class="form-control" name="ram" required>
                  
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>storage</b></label>
                  <input type="text" class="form-control" name="storage" required>
                  
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>batteryc</b></label>
                  <input type="text" class="form-control" name="batteryc" required>
                  
                </div>




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
      <!-- End of Main Content -->

     @include('admin/include/footer')