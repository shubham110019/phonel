 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Phone Book</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Phone Book</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Model Name</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                      <th>Name</th>   
                      <th>Model Name</th>
                      <th>Price</th>
                      <th>Status</th>
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
                      <td><b>Rs.{{$phone->a1}}</b></td>

                      <td>
                        @if($phone->status == '1')
                        <a href="" class="btn btn-warning">Pedding</a>
                        @elseif($phone->status == '2')
                        <a href="" class="btn btn-success">Pickup</a>
                        @else
                        <a href="" class="btn btn-danger">cancel</a>
                        @endif
                      </td>
                      <td>{{$phone->date}}</td>
                      <td><a href="phonebookview/{{$phone->id}}" class="btn btn-info"  ><i class="fa fa-eye" aria-hidden="true"></i></a>

                        <a href="phonebooks/delete/{{$phone->id}}" class="btn btn-danger"  ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                      </td>
                    </tr>

                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>




@foreach($data as $phone)

  <div class="modal fade" id="exampleModal{{$phone->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>{{$phone->name}}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">

  <tbody>
    <tr>
      <td><b>Model Name</b></td>
      <td>{{$phone->model_name}}</td>
    </tr>
    <tr>      
      <td><b>Name</b></td>
      <td>{{$phone->name}}</td>
    </tr>
    <tr>      
      <td><b>Phone</b></td>
      <td>{{$phone->phone}}</td>
    </tr>

    <tr>      
      <td><b>Email</b></td>
      <td>{{$phone->email}}</td>
    </tr>
    
     <tr>      
      <td><b>Address</b></td>
      <td>{{$phone->address}}</td>
    </tr>

     <tr>      
      <td><b>Phone EMI</b></td>
      <td>{{$phone->emi}}</td>
    </tr>

     <tr>      
      <td><b>Price</b></td>
      <td>{{$phone->price}}</td>
    </tr>

     <tr>      
      <td><b>Date</b></td>
      <td>{{$phone->date}}</td>
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