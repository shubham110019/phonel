
 @include('include/userheader')

        <!-- Begin Page Content -->
        <div class="container-fluid">

@foreach($data as $main)
          <div class="row">

            <div class="col-md-12" style="padding:10px;">
                <a href="failed/{{$main->id}}" class="btn btn-danger">Failed Deals</a>

                <a href="{{url('/')}}/phonepickup/{{$main->id}}" class="btn btn-success">Pickup Phone</a>

                  <a href="" class="btn btn-primary">change price</a>
            </div>

          </div>

          
      

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
             
              <h6 class="m-0 font-weight-bold text-primary">PhoneBook {{$main->id}}</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
             
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

                       @if($main->Charger == '')

                    @else
                     <tr>
                       <td><b>Charger</b></td>
                      <td>Yes</td>
                    </tr>

                    @endif

                    @if($main->Earphone == '')

                    @else

                     <tr>
                       <td><b>Earphone</b></td>
                      <td>Yes</td>
                    </tr>
                    @endif

                    @if($main->box == '')

                    @else
                      <tr>
                       <td><b>Phone Box</b></td>
                      <td>Yes</td>
                    </tr>

                    @endif

                   @if($main->bill1 == '')

                    @else
                      <tr>
                       <td><b>Bill Below 1 Month  </b></td>
                      <td>Yes</td>
                    </tr>
                    @endif

                    @if($main->bill2 == '')

                    @else
                     <tr>
                       <td><b>Bill 1 Month - 5 Months </b></td>
                      <td>Yes</td>
                    </tr>

                    @endif

                    @if($main->bill3 == '')

                    @else
                     <tr>
                       <td><b>Bill 5 Month - 10 Months</b></td>
                      <td>Yes</td>
                    </tr>
                    @endif

                     @if($main->bill4 == '')

                    @else
                     <tr>
                       <td><b>Bill Above 10 Months</b></td>
                      <td>Yes</td>
                    </tr>
                    @endif

                    @if($main->good == '')

                    @else
                      <tr>
                       <td><b>Condition</b></td>
                      <td>Good</td>
                    </tr>

                    @endif

                     @if($main->average == '')

                    @else
                      <tr>
                       <td><b>Condition</b></td>
                      <td>Average</td>
                    </tr>
                    @endif

                    @if($main->Belowaverage == '')

                    @else

                     <tr>
                       <td><b>Condition</b></td>
                      <td>Below average</td>
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
                       <td><b>Pickup Price</b></td>
                      <td>Rs.{{$main->a1}}</td>
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
              @endforeach
              </div>
            </div>
          </div>






        </div>
        <!-- /.container-fluid -->

      </div>

  @include('include/userfooter')
  