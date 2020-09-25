

  @include('include/userheader')



<div class="container-fluid">



    <div class="row">
  
    <div class="col-md-12 text-right">
<button onClick="window.location.reload();" class="btn btn-info">Refresh Page</button>
    </div>     

            @foreach($data as $phone )
        <div class="col-md-4 ">

            
            <div class="card">
                    <div class="card-header text-center" style="background: #4d72de;">
                      <a href="phonebookuser/{{$phone->id}}" style="color:white;">
                                <b>{{$phone->title}}</b>
                              </a>
                    </div>
                     <div class="card-body">
                                <div class="media">
                                      <i class="fas fa-mobile-alt mr-3 fa-5x"></i>
                                  <div class="media-body">
                                    {{$phone->name}}<br>
                                           {{$phone->phone}}<br>
                                           {{$phone->date}}<br>
                                            {{$phone->pin}}<br>

            
                                     </div>
                                </div>
                    </div>

                    <div class="card-footer" style="background: #4d72de;">

<a href="phonebookuser/{{$phone->id}}" class="btn btn-dark">Rs. {{$phone->a1}}</a>

<a href="tel:{{$phone->phone}}" class="btn btn-success">Call to user</a>
                    </div>

            </div>
         
        </div>
@endforeach


    </div>
</div>

</div>



  @include('include/userfooter')