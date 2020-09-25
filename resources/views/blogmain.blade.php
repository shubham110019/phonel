  @include('include/header')



 <section class=" section-padding" style="background: #f8f8f8;">
    <div class="container">
      <div class="row" style="padding-top:50px;">
     <!--   <div class="col-md-12">
          <div class="section-title">
            <h2>BLOGS</h2>
            <div class="section-line">
              <span></span>
            </div>
            <p>Latest & Upcoming Tech Newss</p>
          </div>
        </div>-->
      </div>
      <div class="row">
        <div class="col-md-12">
         
         <div class="row">


                @foreach($data as $blog)
              <div class="col-md-12">
            <div class="single-news ">


              <figure>
                <img src="{{url('/')}}/public/img/blog/{{$blog->image}}" alt="news" style="height:400px;">
              </figure>
              <div class="blog-content">
                 <h4><a href="blog/view/{{$blog->id}}">{{$blog->title}}</a></h4>

                 <p>
                   

                  {{ substr($blog->text, 0,  200) }}..                </p>

                <ul class="blog-meta list-style">
                  <li><a href=""><i class="far fa-user"></i>PhoneBecho</a></li>
                 
                </ul>
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