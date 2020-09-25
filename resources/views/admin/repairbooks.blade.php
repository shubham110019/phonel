 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Repair Book</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Repair Book</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Model Name</th>
                     
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                      <th>Name</th>   
                      <th>Model Name</th>
                      
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach($data as $phone)
                    <tr>
                      <td>{{$phone->id}}</td>
                      <td>{{$phone->name}}</td>
                      
                      
                      <td>{{$phone->title}}</td>
                   
                      <td>{{$phone->date}}</td>
                      <td><a href="#exampleModal{{$phone->id}}" class="btn btn-info"  data-toggle="modal"><i class="fa fa-eye" aria-hidden="true"></i></a>

                        <a href="repairbooks/delete/{{$phone->id}}" class="btn btn-danger"  ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                      </td>
                    </tr>

                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>




@foreach($data as $main)

  <div class="modal fade" id="exampleModal{{$main->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>{{$main->name}}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table class="table table-bordered">
                 
                  <tbody>

                    @if($main->display == '')

                    @else

                    <tr>
                    
                      <td><b>Display</b></td>
                      <td>
                       
                        Damage</td>
                    </tr>

                     @endif



                      @if($main->Screen == '')

                    @else

                    <tr>
                    
                      <td><b>Screen</b></td>
                      <td>
                       
                        Damage</td>
                    </tr>

                     @endif


                        @if($main->fingerlock == '')

                    @else

                    <tr>
                    
                      <td><b>Figner Lock</b></td>
                      <td>
                       
                        Damage</td>
                    </tr>

                     @endif


                        @if($main->facelock == '')

                    @else

                    <tr>
                    
                      <td><b>Face lock</b></td>
                      <td>
                       
                        Damage</td>
                    </tr>

                     @endif
                    

                    @if($main->Power == '')

                    @else
                    <tr>
                       <td><b>Power</b></td>
                      <td>Damage</td>
                    </tr>
                     @endif

                     @if($main->Charging == '')

                    @else
                    <tr>
                       <td><b>Charging</b></td>
                      <td>Damage</td>
                    </tr>

                    @endif

                     @if($main->Front == '')

                    @else
                     <tr>
                       <td><b>Front Camera</b></td>
                      <td>Damage</td>
                    </tr>
                    @endif

                    @if($main->Back == '')

                    @else
                      <tr>
                       <td><b>Back Camera</b></td>
                      <td>Damage</td>
                    </tr>
                    @endif

                     @if($main->Battery == '')

                    @else
                      <tr>
                       <td><b>Battery</b></td>
                      <td>Damage</td>
                    </tr>

                    @endif

                     @if($main->Speaker == '')

                    @else

                       <tr>
                       <td><b>Speaker</b></td>
                      <td>Damage</td>
                    </tr>
                     @endif

                     @if($main->Volume == '')

                    @else
                      <tr>
                       <td><b>Volume</b></td>
                      <td>Damage</td>
                    </tr>
                    @endif

                     @if($main->Wifi == '')

                    @else

                     <tr>
                       <td><b>Wifi</b></td>
                      <td>Damage</td>
                    </tr>
                     @endif

                   

                   


                    <tr>
                       <td><b>Name</b></td>
                      <td>{{$main->name}}</td>
                    </tr>

                    <tr>
                       <td><b>Phone No.</b></td>
                      <td>{{$main->phone}}</td>
                    </tr>

                     <tr>
                       <td><b>Pickup Address</b></td>
                      <td>{{$main->address}}</td>
                    </tr>

                    <tr>
                       <td><b>Pincode</b></td>
                      <td>{{$main->pin}}</td>
                    </tr>

                    <tr>
                       <td><b>Phone Model</b></td>
                      <td>{{$main->title}}</td>
                    </tr>

                  
                    <tr>
                       <td><b>Email</b></td>
                      <td>{{$main->email}}</td>
                    </tr>

                     <tr>
                       <td><b>Book Date</b></td>
                      <td>{{$main->date}}</td>
                    </tr>



                  </tbody>
                </table>
      </div>
     
    </div>
  </div>
</div>
 @endforeach




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     @include('admin/include/footer')