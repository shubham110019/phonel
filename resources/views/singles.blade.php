 @include('include/header')
  <style>
      .bg-color{
          background-color: #F5F2EE;
      }
      .bg-white{
          background-color:white;
      }
      .h-250{
          height:250px;
      }
      .pd-20{
          padding:20px;
      }
      .bg-2{
          color:#F1633;
      }
      .bg-3{
          background-color:#F16335;color:white;
      }
      .hidden{
          display:none;
      }

       .proul{
        list-style: none;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    /* display: inline-flex; */
}
.fas{
  color:#fa5552;
}

.proul{
    padding: 0;
    margin: 10px 0 0 0;
}

.proul li{
  display: block;
    padding-right: 15px;
    margin-right: 15px;
    border-bottom: none;
    border-right: 1px solid rgba(61,66,70,.2);
}
.proul li span{
  font-size:14px;
}
.proul li .icon{
  color: #3d4246;
    font-size: 14px;
    font-weight: 700;
}

.proul li span {
    display: block;
    width: 100%;

}
.mt-15{
margin-top:20px;
}
.sellc{
  color: #777;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
}
.pricec{
  font-size: 20px;
    padding-bottom: 0px;
    margin-bottom: 0px;
}
.pricebox2{
      border: 1px solid rgba(61,66,70,.2);
    padding: 5px 10px;
    border-radius: 5px;
}
  </style>
 
 
    <section class="features bg-color2">
      <section class="faq-area section-padding pt-150" >
 
      <div class="container">
     
        <div class="row bg-white mainshow" >
       
          <div class="col-lg-12 my-auto">
            <div class="container-fluid">

                @foreach($data as $main)
               <div class="row pd-20">
                     <div class="col-md-4 p-40 text-center" >
                       
                       <img src="{{url('/')}}/public/img/tablet/{{$main->image}}" class="h-250"/>
                   </div>
                     <div class="col-md-8 pt-30">
                          <h3 class="device-name">{{$main->title}}</h3>

                          
                         <h4 class="main-color mt-15">SPECIFICATIONS</h4>

                         <ul class="proul">
                                                                                                                    <li>
                                            <span class="icon"><i class="fas fa-microchip"></i> Processor</span>
                                            <span>{{ $main->processor }}</span>
                                        </li>
                                                                                                                    <li>
                                            <span class="icon"><i class="fas fa-memory"></i> RAM</span>
                                            <span>{{ $main->ram }}</span>
                                        </li>
                                                                                                                    <li>
                                            <span class="icon"><i class="fas fa-sd-card"></i> Storage</span>
                                            <span>{{ $main->storage }} </span>
                                        </li>
                                                                                                                    <li>
                                            <span class="icon"><i class="fas fa-battery-half"></i> Battery Capacity</span>
                                            <span>{{ $main->batteryc }}</span>
                                        </li>
                                                                    </ul>
                                                 
                     
                          <h4 class="main-color mt-15">CHOOSE OPTION</h4>


                          <div class="row">

                              <div class="col-md-4">

                                <a href="calculator/{{$main->id}}">
                                <div class="pricebox2">
                                <span class="sellc"><span name="main-color"><i class="fas fa-check-circle"></i> Sell</span> &amp; get upto</span>

                                 <h3 class="text-bold pricec">₹&nbsp; {{$main->price + $main->box + $main->bill1 + $main->Charger + $main->Earphone}}   </h3>
                                                <small class="text-muted">For Power On / Working Devices</small>

                                </div>
                              </a>
                              </div>


                          </div>

                    
                           
                       </div>
                
      
              </div>
               @endforeach





            </div>
          </div>
        </div>
      </div>
    </section>
    

 
 @include('include/footer')