 @include('include/header')
 

  <section class="contact-area section-padding" style="padding-top:150px;">
    <div class="container">
     
      <div class="row">
       <div class="col-md-12">
          <div class="section-title">
            <h2>Why you should join us ?</h2>
            
            <div class="section-line">
              <span></span>
            </div>
			<p>Phonebecho.in - we have established ourselves as a trusted online market platform servicing hundreds of customers every day. We are currently inviting applications for registered individuals / firms to associate with us as business partners and to execute order pickups on our behalf in various cities accross India.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

        	@if(session()->has('message'))
    		<div class="alert alert-success">
    		    {{ session()->get('message') }}
  			  </div>
				@endif
          <div class="contact-form">
            <h3>Send Your Message</h3>
            	<form method="post" action="{{route('Partnersubmit')}}" class="row">
            		{{csrf_field()}}
						<div class="form-group col-md-6">
							
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="name"  name="name" class="form-control" placeholder="Your Name" required>
							
						
						</div>
						
						
						<div class=" form-group col-md-6">
							
								<!-- <label for="email">Email</label> -->
								<input type="text" id="city" class="form-control"  name="city" placeholder="Your City" required>
							
						</div>

						
						<div class=" form-group col-md-6">
							
								<!-- <label for="email">Email</label> -->
								<input type="text" id="phone" class="form-control"  name="phone" placeholder="Your Phones " required>
							
						</div>

						<div class="col-md-6 form-group">
						
								<!-- <label for="email">Email</label> -->
								<input type="email" id="email" class="form-control"  name="email" placeholder="Your Email" required>
						
						</div>

					

						<div class="col-md-12 form-group" style="width:100%;">
							
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10"  class="form-control" placeholder="Say Something "></textarea>
							
						</div>
						<div class="form-group col-md-12">

							<button type="submit" name="submit" class="btn btn-primary">Send Message</button>
							
						</div>

					</form>		
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Area -->
 
 @include('include/footer')









