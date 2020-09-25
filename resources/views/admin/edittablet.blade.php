 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Phone</h1>
            
          </div>

          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Phone </h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
              @foreach($data as $edit)
              <form action="{{$edit->id}}" method="post" enctype="multipart/form-data" class="row">
               {{csrf_field()}}

              

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Title</b></label>
                  <input type="text" class="form-control" name="title" required value="{{$edit->title}}">
                  
                </div>

                 <div class="form-group col-md-4">
				    <label for="exampleFormControlSelect1">category</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="cat" >
				     @foreach($data2 as $cat)
				      <option value="{{$cat->id}}">{{$cat->title}}</option>
              @endforeach
				    
				    </select>
				  </div>

				   <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Image</b></label>
                  <input type="file" class="form-control" name="image" >
                  <input type="text" name="oldimg" value="{{$edit->image}}" style="display:none;">
                </div>


				  <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>main price</b></label>
                  <input type="text" class="form-control" name="price" required value="{{$edit->price}}">
                  
                </div>


                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>average</b></label>
                  <input type="text" class="form-control" name="average" required value="{{$edit->average}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>belowaverage</b></label>
                  <input type="text" class="form-control" name="belowaverage" required value="{{$edit->belowaverage}}">
                  
                </div>

                <div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Faults</b></h3>
                	<hr>
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>display price</b></label>
                  <input type="text" class="form-control" name="display" required value="{{$edit->display}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>screen price</b></label>
                  <input type="text" class="form-control" name="screen" required value="{{$edit->screen}}">
                  
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Power Button price</b></label>
                  <input type="text" class="form-control" name="Power" required value="{{$edit->power}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Charging price</b></label>
                  <input type="text" class="form-control" name="Charging" required value="{{$edit->Charging}}">
                  
                </div>

                  <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Front Camera price</b></label>
                  <input type="text" class="form-control" name="Front" required value="{{$edit->Front}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Back Camera price</b></label>
                  <input type="text" class="form-control" name="Back" required value="{{$edit->Back}}">
                  
                </div>


                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Battery price</b></label>
                  <input type="text" class="form-control" name="Battery" required value="{{$edit->Battery}}">
                  
                </div>


                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Speaker price</b></label>
                  <input type="text" class="form-control" name="Speaker" required value="{{$edit->Speaker}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Volume Button price</b></label>
                  <input type="text" class="form-control" name="Volume" required value="{{$edit->Volume}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>wifi price</b></label>
                  <input type="text" class="form-control" name="Wifi" required value="{{$edit->Wifi}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>face Lock</b></label>
                  <input type="text" class="form-control" name="facelook" required value="{{$edit->facelook}}">
                  
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>fingerprint lock</b></label>
                  <input type="text" class="form-control" name="fingerlock" required value="{{$edit->fingerlock}}">
                  
                </div>

               

                <div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Accessories</b></h3>
                	<hr>
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>box price</b></label>
                  <input type="text" class="form-control" name="box" required value="{{$edit->box}}">
                  
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Earphone price</b></label>
                  <input type="text" class="form-control" name="Earphone" required value="{{$edit->Earphone}}">
                  
                </div>


                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Charger price</b></label>
                  <input type="text" class="form-control" name="Charger" required value="{{$edit->Charger}}">
                  
                </div>

                <div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Device Age</b></h3>
                	<hr>
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>Below 1 Month Bill</b></label>
                  <input type="text" class="form-control" name="bill1" required value="{{$edit->bill1}}">
                  
                </div>


                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>1 Month - 5 Months</b></label>
                  <input type="text" class="form-control" name="bill2" required value="{{$edit->bill2}}">
                  
                </div>

                 <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><b>5 Month - 10 Months</b></label>
                  <input type="text" class="form-control" name="bill3" required value="{{$edit->bill3}}">
                  
                </div>
             
             	<div class="col-md-12 text-center">
                	<hr>
                	<h3><b>Phone details</b></h3>
                	<hr>
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>processor</b></label>
                  <input type="text" class="form-control" name="processor" required value="{{$edit->processor}}">
                  
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>ram</b></label>
                  <input type="text" class="form-control" name="ram" required value="{{$edit->ram}}">
                  
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>storage</b></label>
                  <input type="text" class="form-control" name="storage" required value="{{$edit->storage}}">
                  
                </div>

                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1"><b>batteryc</b></label>
                  <input type="text" class="form-control" name="batteryc" required value="{{$edit->batteryc}}">
                  
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
      <!-- End of Main Content -->

     @include('admin/include/footer')