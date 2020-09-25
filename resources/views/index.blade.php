 @include('include/header')
  <!-- End Header Area -->
  <style>
 .disabled {
        pointer-events: none;
        cursor: default;
    }
    .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: unset;
    outline: 0;
    box-shadow: unset;

}
.owl-nav{
      display:none;
    }
    .owl-dots{
      display:none;
    }
  </style>
  <!-- Strat Welcome Area -->
	<section class="intro-area" style="background: #f8f8f8;">

    <div class="container">
      <div class="row">
          <div class="col-md-12 col-lg-8 offset-lg-2  text-center">
              <div class="intro-content" style="padding-top:10px;">
                <h1 class="" style="max-width: 100%;">SELL OLD <span style="color:#fa5552;">MOBILE PHONES</span></h1>
    			
    			<p>Sell your old / used Mobile Phones at amazing prices in less than a minute. You can also recycle dead or bricked phones with free doorstep pickup.</p>
          <br>

                 <div class="form-group" style="position: relative;">
                  <input type="text" name="country_name" id="country_name" class="form-control input-lg serach-box" placeholder="Search your device" />
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <div id="countryList">
                  </div>
                 </div>

          
          </div>
                  
       
   {{ csrf_field() }}

    			
    			
    		  
              </div> 
          </div>

          <div class="col-md-12 col-lg-8 offset-lg-2  text-center">
            <div class="row">
              <div class="col-md-3 ">
                <a href="phones" >  
                <div class="box21">
                  <img src="{{url('/')}}/public/img/icon/smartphone.png" class="icon-img"/>
                  <br>
                   SELL MOBILE
                </div>
                </a>
              </div>

              <div class="col-md-3 ">
                 <a href="tablet"  >
                <div class="box21">
                 <img src="{{url('/')}}/public/img/icon/gadget.png" class="icon-img"/>
                  <br>

                SELL TABLET
                </div>
              </a>
              </div>

              <div class="col-md-3 ">
                 <a href="laptop">
                <div class="box21">
                <img src="{{url('/')}}/public/img/icon/laptop2.png" class="icon-img"/>
                  <br>
                  SELL LAPTOP
                </div>
              </a>
              </div>

              <div class="col-md-3 ">
                 <a href="repair">
                <div class="box21">
                   <img src="{{url('/')}}/public/img/icon/function2.png" class="icon-img"/>
                  <br>
                   REPAIR PHONE

                </div>
              </a>
              </div>


            


            </div>
          </div>
        
      </div>
    </div>
	</section>	
  <!-- End Welcome Area -->
  
  
   
  <!-- Start Services Area -->
  <section class="services-area section-padding">
    <div class="container">
      <div class="row">

        <div class="owl-carousel owl-theme">
   
            @foreach($data1 as $key)

           <div class="item">
            
          <div class="service-single" >
                <a href="phone/model/{{$key->id}}">
            <div class="service-icon">
                
              <img src="{{url('/')}}/public/img/cat/{{$key->image}}" class="h-150" alt="" style="    height:100px;width: 50%;
    margin: 0px auto;">
            </div>
            </a>
      <a href="phone/model/{{$key->id}}">
            <h3 class="f-16">{{$key->title}}</h3>
      </a>
          </div>
        
             
           </div>
           @endforeach
    
        </div>
	  
        

        
		
      </div>
    </div>
  </section>
  <!-- End Services Area -->
   <!-- Start Service Provide Area -->
  <section class="service-provide-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>How It Works ?</h2>
            <div class="section-line">
              <span></span>
            </div>
			<p>
			Sell your old / used Mobile Phone or Tablet at amazing prices in less than a minute. We even buy devices which are missing accessories, dead or bricked at great prices to offer.
			</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="service-provide-block">
            <!-- Single Service Provide -->


  @foreach($data3 as $work)
            <div class="service-provide-single" style="    background: #f8f8f8;
    padding: 20px;
-webkit-box-shadow: 0 4px 5px -2px rgba(0,0,0,.16);
    box-shadow: 0 4px 5px -2px rgba(0,0,0,.16);">
              <img src="{{url('/')}}/public/img/icon/{{$work->image}}">
              <h4>{{$work->title}}</h4>
              <p style="font-size: 14px;">{{$work->text}}</p>
            </div>
            <!-- Single Service Provide -->
         @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Provide Area -->
  <!-- Start Blog Area -->


 <section class="blog-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>BLOGS</h2>
            <div class="section-line">
              <span></span>
            </div>
            <p>Latest & Upcoming Tech Newss</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="blog-slider owl-carousel owl-theme">

    @foreach($data2 as $blog)
            <div class="single-news">
              <figure>
                <img src="{{url('/')}}/public/img/blog/{{$blog->image}}" alt="news" style="height:200px;">
              </figure>
              <div class="blog-content">
                <h4><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h4>
                <ul class="blog-meta list-style">
                  <li><a href=""><i class="far fa-user"></i>PhoneBecho</a></li>
                 
                </ul>
              </div>
            </div>
           
            @endforeach
           
             
        </div>
        </div>
      </div>
    </div>
  </section>




 @include('include/footer')