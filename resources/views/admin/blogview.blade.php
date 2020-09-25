 @include('admin/include/header')

        <!-- Begin Page Content -->
        <div class="container-fluid">


           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blog view</h1>
            <a href="blogadd" class="btn btn-primary shadow-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Blogs</a>
          </div>
        
          @if (\Session::has('success'))
              <div class="alert alert-danger">
                  <ul class="list-group">
                      <li class="list-group-item">{!! \Session::get('success') !!}</li>
                  </ul>
              </div>
          @endif
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      
                   
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Id</th>
                      <th>Title</th>
                    
                     
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach($data as $phone)
                    <tr>
                      <td>{{$phone->id}}</td>

                     <td>
                      {{$phone->title}} </td>
                      
                    
                      <td>{{$phone->date}}</td>
                      <td><a href="#exampleModal{{$phone->id}}" class="btn btn-info"  data-toggle="modal"><i class="fa fa-eye" aria-hidden="true"></i></a>

                        <a href="blogedit/{{$phone->id}}" class="btn btn-info" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                        <a href="blogview/delete/{{$phone->id}}" class="btn btn-danger"  ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel"><b>{{$pick->title}}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>{{$pick->text}}</p>
      </div>
     
    </div>
  </div>
</div>
 @endforeach


 @foreach($data as $pick)

  <div class="modal fade" id="edit{{$pick->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>{{$pick->title}} Edit</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="admin/blogview/edit/{{$pick->id}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$pick->title}}">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Image:</label>
           <input type="file" class="form-control" name="image" >
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Text:</label>
            <textarea class="form-control" name="text">{{$pick->text}}</textarea>
          </div>

          <button type="submit" name="submit" class="btn btn-info">Edit</button>
        </form>
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