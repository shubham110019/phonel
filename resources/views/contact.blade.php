 @include('include/header')

<style type="text/css">
  .header{
    background: white;
  }
  .fas{
    color:#fe2a4d;
    margin-bottom: 10px;
  }

</style>
 <div class="map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.065513133291!2d77.25644031455737!3d28.537750495116377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce31822b0bfed%3A0x74b32874c9da40d2!2sPhonebecho%20-%20Sell%20used%20old%20second%20mobile%20phone!5e0!3m2!1sen!2sin!4v1596538879229!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
 
  <section class="contact-area section-padding bg-color2" style="padding-top:10px;">
    <div class="container">



      
     
      <div class="row">
        <div class="col-md-6">
            <div class="contact-single text-center">
              <i class="fas fa-map-marker-alt fa-3x"></i><br>
              <h4>Office Address</h4>
              <p style="margin: 0px auto;">Kalkaji New Delhi - 110019</p>
            </div>
        </div>

         <div class="col-md-6">
            <div class="contact-single text-center">
               <i class="fas fa-envelope-open fa-3x"></i><br>
              <h4>Email Address</h4>
              <p style="margin: 0px auto;">
                <a href="info@phonebecho.in">Info@phonebecho.in</a>
              </p>
        </div>

       
        </div>
      </div>
      
      
      <div class="row">
        <div class="col-md-12">
          <div class="contact-form">
            <h3>Send Your Message</h3>


            @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
          </div>
        @endif

   
     

            <form method="post" action="{{route('contactsubmit')}}">
              {{csrf_field()}}
              <fieldset>
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Name*" >
                  <p style="font-size:12px;color:red;margin:0px;">@error('name') {{$message}} @enderror</p>
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email*" >
                  <p style="font-size:12px;color:red;margin:0px;">@error('email') {{$message}} @enderror</p>
                </div>
                <div class="form-group">
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" >
                   <p style="font-size:12px;color:red;margin:0px;">@error('phone') {{$message}} @enderror</p>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="subject"  >
                  <p style="font-size:12px;color:red;margin:0px;">@error('subject') {{$message}} @enderror</p>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                  <p style="font-size:12px;color:red;margin:0px;">@error('message') {{$message}} @enderror</p>
                </div>
                <div class="form-group">
              
                  	
                  	 <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

 @include('include/footer')

 