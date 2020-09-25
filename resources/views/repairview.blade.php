 @include('include/header')
 

   <section class="expert-area section-padding pt-150" >
    <div class="container bg5">
  
     <div class="row">
        <div class="col-md-12">
          <div class="section-title text-left">

            <h4 class="main-color
            ">SELL YOUR LAPTOP</h4>
            
            <h3>Choose Your Model</h3>
            <br>
          
          </div>
        </div>


      </div>
      <div class="row">
    


@foreach($data as $phone)
     <div class="col-md-6 col-lg-2 col-sm-6 col-xs-6 col-xxs-6">
          <div class="service-single">
              <a href="calculator/{{$phone->id}}">
            <div class="service-icon">
              <img src="{{url('/')}}/public/img/phone/{{$phone->image}}" alt="" class="h100" >
            </div>
            </a>
            <br>
      <a href="calculator/{{$phone->id}}">
            <h5 class="f-16">{{$phone->title}}</h5>
      </a>
          </div>
        </div>
    @endforeach

      
        
      </div>
    </div>
  </section>
  
  
 


 
 @include('include/footer')
