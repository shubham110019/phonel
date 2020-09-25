
 @include('include/header')


  <section class="faq-area section-padding" style="padding-top:150px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="faq-title">            
            <h2>Some Common Question</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
          <div class="faq-info">
            <div class="accordion" id="accordionLavala">
              <!-- Single Faq -->





 @foreach($data as $i)
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">


                    <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#{{ $i->class }}" aria-expanded="true" aria-controls="  {{ $i->title }}">
                    {{ $i->title }}
                    </button>
                  </h5>
                </div>
                <div id="{{ $i->class }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionLavala">
                  <div class="card-body">
                 {{ $i->text }}
                  </div>
                </div>
              </div>
          

         
          
          @endforeach

              <!-- Single Faq -->
            
              
            </div>
            <!-- End Accordion -->
          </div>
        </div>
       
      </div>
    </div>
  </section>
  

   @include('include/footer')

