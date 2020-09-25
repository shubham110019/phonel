  @include('include/header')
  
  <section class="contact-area section-padding">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
          <div class="faq-title">            
            <h2>Feedback</h2>
          </div>
        </div>
      </div>
   
      <div class="row">
        <div class="col-md-12">
          <div class="contact-form">
            <h3>Send Your Message</h3>
            <form action="" method="post" enctype="multipart/form-data">
<div class="row form-group">
<div class="col-md-12">
<!-- <label for="fname">First Name</label> -->
<input type="text" id="fname"  name="name" class="form-control" placeholder="Your firstname" required>
</div>
</div>



<div class="row form-group">
<div class="col-md-12">
<!-- <label for="email">Email</label> -->
<input type="text" id="phone" class="form-control"  name="phone" placeholder="Your Phones Number" required>
</div>
</div>

<div class="row form-group">
<div class="col-md-12">
<!-- <label for="email">Email</label> -->
<input type="email" id="email" class="form-control"  name="email" placeholder="Your email address" required>
</div>
</div>



<div class="row form-group">
<div class="col-md-12">
<!-- <label for="message">Message</label> -->
<textarea name="mess" id="message" cols="30" rows="10"  class="form-control" placeholder="Say something about us"></textarea>
</div>
</div>
<div class="form-group">
<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
</div>

</form>
          </div>
        </div>
      </div>
    </div>
  </section>
 

    @include('include/footer')