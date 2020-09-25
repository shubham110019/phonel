 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">


           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Contact</h1>
          
          </div>
        
      
     
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      
                   
                      <th>subject </th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                      <th>Name</th>
                    
                     
                      <th>subject </th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>

                  	@foreach($data as $pan)
                
                    <tr>
                      <td>{{$pan->id}}</td>
                      <td><b>{{$pan->name}}</b></td>
                      <td>{{$pan->subject}}</td>
                      <td>
                      	<a href="#exampleModal{{$pan->id}}" class="btn btn-info" data-toggle="modal" > View</a>
                        <a href="allcontact/delete/{{$pan->id}}" class="btn btn-danger"> Delete</a>
                      </td> 
                    </tr>
                    @endforeach
               

                 
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>




@foreach($data as $pick)

  <div class="modal fade" id="exampleModal{{$pick->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>{{$pick->name}}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">

  <tbody>
   
    <tr>      
      <td><b>Name</b></td>
      <td>{{$pick->name}}</td>
    </tr>
    <tr>      
      <td><b>Phone</b></td>
      <td>{{$pick->phone}}</td>
    </tr>

    <tr>      
      <td><b>Email</b></td>
      <td>{{$pick->email}}</td>
    </tr>
    
   
     <tr>      
      <td><b>subject</b></td>
      <td>{{$pick->subject}}</td>
    </tr>

     <tr>      
      <td><b>Message</b></td>
      <td>{{$pick->message}}</td>
    </tr>

     <tr>      
      <td><b>Date</b></td>
      <td>{{$pick->date}}</td>
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