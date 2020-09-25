  @include('include/header')

  <style>
nav{
  width:100%;
}
.pagination li{
  margin:0px auto;
}

.page-link {
    position: relative;
    display: block;
    padding: 10px 15px !important;
    margin-left: -1px;
    line-height: 1.25;
    color: #fff;
    background-color: #fff;
    border: none;
    background: #fe2a4d;

}
.page-item.disabled .page-link {
    color: #fff;
    pointer-events: none;
    cursor: auto;
    background-color: black;
    border-color: #dee2e6;
}
  </style>

 <section class=" section-padding" style="background: #f8f8f8;">
    <div class="container">
      <div class="row" style="padding-top:50px;">   
      </div>
      <div class="row">
        <div class="col-md-12">
         
         <div class="row">


                @foreach($data as $blog)
              <div class="col-md-6">
            <div class="single-news ">


              <figure>
                <img src="{{url('/')}}/public/img/blog/{{$blog->image}}" alt="news" style="height:350px;">
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


<div class="row text-center">
            


<div class="col-md-12">
  {{ $data->links() }}
</div>
</div>
       
        </div>
      </div>
    </div>
  </section>

   @include('include/footer')