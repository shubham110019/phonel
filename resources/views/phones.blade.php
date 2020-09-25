 @include('include/header')
 
 <style>
 


 </style>
   <section class="expert-area section-padding pt-150" >
    <div class="container bg5">
	
	   <div class="row">
        <div class="col-md-12">
          <div class="section-title text-left" >
            <h4 class="main-color
            ">SELL YOUR MOBILE</h4>
            <h3>Choose Device Brand</h3>
            <br>            
          </div>
        </div>
      </div>
      <div class="row">
    
 @foreach($data as $i)
        <div class="col-md-6 col-lg-2 col-sm-6 col-xs-6 col-xxs-6">
          <div class="service-single">
              <a href="phone/model/{{ $i->id }}">
            <div class="service-icon">
              <img src="{{url('/')}}/public/img/cat/{{ $i->image }}" alt="" class="h100" >
            </div>
            </a>
			<a href="phone/model/{{ $i->id }}">
            <h3 class="f-16">{{ $i->title }}</h3>
			</a>
          </div>
        </div>
		
 @endforeach
      
        
      </div>
    </div>
  </section>
  
  
    <div class="hidden" >
         <h2>sell used mobile phone</h2>
         <h2>old mobile phones for sale</h2>
         <h2>sell my mobile for best price</h2>
         <h2>best place to sell phone</h2>
         <h3>old motorola phone</h3>
         <h3> old mobile phone</h3>
         <h3> old mobile sell</h3>
         <h3>sell mobile in delhi</h3>
         <h4>sell mobile phone online</h4>
                <p>sell used mobile phone, old mobile phones for sale, sell my mobile for best price, best place to sell phone, cashify buy mobile, mobile resale value calculator,
                
                sell damaged phone, recycle device, sell mobile phone, sell mobile online, sell mobile online india, sell mobile online in delhi, sell mobiles, sell mobile on amazon,
                
                sell mobile india, sell mobile in delhi, sell mobile app, sell mobile phone online, sell mobile phone india, sell mobile phone on amazon, sell mobile phone near me,
                
                sell mobile phone at best price, sell mobile phone in mumbai, sell mobile phone for cash, sell mobile phone chennai, sell mobile phone instantly, old mobile phones for sale,
                
                old mobile sell, old mobile phone, old motorola phone
                </p>
            </div>
 


 
 @include('include/footer')
