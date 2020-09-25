 @include('include/header')

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/price.css">



  @foreach($data as $main)
 <script type="text/javascript">
 var main = {{$main->price}};



   var total = main;
   
   

    function test(item){
        if(item.checked){
           total+= parseInt(item.value);
        }
            else{
           total-= parseInt(item.value);
       }
        //alert(total);
   $('#total').val("Rs." + total);
    $('#total1').val(total);

       // document.getElementById('Totalcost').innerHTML = total + " /-";
    }


  function test1(item){
        if(item.checked){
           total-= parseInt(item.value);
        }
       
        else{
         total+= parseInt(item.value);
        }
        //alert(total);
        if(total < 500)
        {
            $('#total').hide();
            $('#h2p').hide();
            $('#p1').hide();
            $('#nextp1').hide();
            var html = '';
            html += '<h1>We re Sorry.</h1>';
            html +='<p>As per your selection, the device seems to have a bit lower value.</p>';
            $('#totaal').html(html);
        }
   $('#total').val("Rs." + total);
     $('#total1').val(total);

       // document.getElementById('Totalcost').innerHTML = total + " /-";
    }


    </script>
   


 <section class="features" style="background-color: #f8f8f8;padding-top:60px;"><section class="faq-area section-padding">

       
      <div class="container">
      

    
        <div class="row"  >
           
            <div class="col-md-4 text-center" style="padding:0px 10px;">
              <div class="bg-white mainshow" style="padding: 10px;">
                
                <img src="{{url('/')}}/public/img/phone/{{ $main->image }}" style="height: 150px;
    padding: 10px;">

                <p class=""><b > {{ $main->title }} </b></p>
               
                <table class="table">
                
                  <tbody>
                    <tr>
                    
                      <td class="text-left">
                        <i class="fas fa-microchip main-color"></i>
                        <b>Processor</b></td>
                      <td class="text-right"> {{ $main->processor }} </td>
                    </tr>
                    <tr>
                    
                      <td class="text-left">
                        <i class="fas fa-memory main-color"></i>
                        <b>RAM</b></td>
                      <td class="text-right">{{ $main->ram }} </td>
                    </tr>
                    <tr>
                     
                      <td class="text-left">
                        <i class="fas fa-sd-card main-color"></i>
                        <b>Storage</b></td>
                      <td class="text-right">{{ $main->storage }} </td>
                    </tr>

                      <tr>
                     
                      <td class="text-left">
                        <i class="fas fa-battery-half main-color"></i>
                        <b>Battery Capacity</b></td>
                      <td class="text-right">{{ $main->batteryc }} </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
       
          <div class="col-lg-8 " style="padding:0px 20px;">
            <div class="bg-white mainshow" style=" padding: 10px; ">
            <div class="container-fluid">
               <div class="row" >
       
         
                     <div class="col-md-12">
 <form id="regiration_form"  method="post" action="{{url('/')}}/phoneactive">

  {{ csrf_field() }}



  <fieldset class="question">
   

   
 <h2 class="maintitle5">Your Device Price</h2>    
  <Div class="scroll" style="height:300px;">

 <input type="text" id="total" value="0" readonly="readonly" style="font-size: 200%;padding-top:20px;padding-bottom:20px;border:0px;background-color:none;color:green;    text-align: center;"/>
 

 <p style="color:#EA9215;" id="p1">Hurry! Special offer, price drops in few days</p>

 
 </div>
 
 
 
 
 
 
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
 <input type="button" name="next" class="next btn btn-info" value="Next" id="nextp1"/>
  </fieldset>
 
 
   <fieldset>
    <h2 class="maintitle5"> ENTER YOUR DETAILS
</h2>
 <Div class="scroll row" >
 
  <input type="hidden" id="total1" value="0" readonly="readonly"  name="a1" />


    <div class="form-group col-md-6">
    <label for="mob"></label>
    <input type="text" class="form-control input25" id="mob" placeholder="Name" name="name" required >
    </div>
  <div class="form-group col-md-6">
    <label for="mob"></label>
    <input type="text" class="form-control input25" step="10" id="mob" placeholder="Mobile Number" name="phone" required maxlength=
            "10" size="10" minlength="10" onkeypress="return isNumberKey(event)">
    </div>
      <div class="form-group col-md-6">
    <label for="mob"></label>
    <input type="email" class="form-control input25" id="mob" placeholder="Email" name="email" required>
    </div>
   
    <div class="form-group col-md-6">
    <label for="mob"></label>
    <input type="text" class="form-control input25" id="pin" placeholder="Pin Code" name="pin" required onkeypress="return isNumberKey(event)" >
    </div>

   <div class="form-group col-md-12">
    <label for="mob"></label>
    <input type="text" class="form-control input25" id="search1" placeholder="Address" name="address" required  >
    </div>
    
<div class="form-group">
   
    <input type="hidden" class="form-control"  name="title" value="{{ $main->title }}">
    </div>

</div>

<br>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
   <!-- <input type="submit" name="submit" class="submit btn btn-success" value="submit" />-->
   
   
   
    <input type="submit" name="submit" value="Submit" class="submit btn btn-successy">
   
  </fieldset>
 
 
   
      <fieldset  class="answer" >
 

  <div class="row">

  <div class="col-md-12" style="padding:40px 0px;">
  <h1>We're Sorry.</h1>
<p class="text-center">As per your selection, the device seems to have a bit lower value. </p>
<p class="text-center"> <a href="{{url('/')}}" class="next btn btn-info" >Back</a></p>
 ` </div>
</div>
  </fieldset>
 
  </form>
                     
                         
                     </div>
                   
               
   
                   
       </div>     
      @endforeach 
               

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   
    



@include('include/footer')


<script type="text/javascript">
  
  $(document).ready(function(){
$('.slectOne').on('change', function() {
   $('.slectOne').not(this).prop('checked', false);
   $('#result').html($(this).data( "id" ));
   if($(this).is(":checked"))
    $('#result').html($(this).data( "id" ));
   else
    $('#result').html('Empty...!');
});
});
</script>


<script type="text/javascript">

  
  $(document).ready(function(){
  $("#yes").click(function(){
    $('#success').click();

  });

   $("#no").click(function(){
    $('#primary').click();

  });
});

</script>


 <script>
  $(".answer1").hide();
$(".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show();
$(".question").hide();
    } else {
$("..answer1").show();
        $(".answer").hide();

    }
});

  $(".answer1").hide();
$(".coupon_question1").click(function() {
    if($(this).is(":checked")) {
        $(".answer1").show();
$(".question").hide();
    } else {

        $(".answer1").hide();


    }
});


  </script>


 <script>
  $(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");  
  }
});
 
 
  </script>


 
 <SCRIPT language=Javascript>
      <!--
      function isNumberKey1(evt1)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
         function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>



