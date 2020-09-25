 @include('include/header')

      <style>
 #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
h1 {
  text-align: center;  
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
 
  button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}




/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  float:right;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #fa5552;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

 
  h2{
padding:10px;
  }
  .list-group-item{
 margin-top:20px;
  }
 
 .hidden{
     display:none;
 }
 
  div#load_screen{
background: #000;
opacity: 1;
position: fixed;
    z-index:10;
top: 0px;
width: 100%;
height: 1600px;
}
div#load_screen > div#loading{
color:#FFF;
text-align:center
font-size:23px;
height:24px;
margin: 300px auto;
}
 .table td{
      font-size: 14px;
 }
</style>


<script>

  $(document).ready(function() {
    $('#mycheckbox10').change(function() {
        $('#mycheckboxdiv10').toggle();
    });
});


$(document).ready(function() {
    $('#mycheckbox').change(function() {
        $('#mycheckboxdiv').toggle();
    });
});
$(document).ready(function() {
    $('#mycheckbox2').change(function() {
        $('#mycheckboxdiv').toggle();
    });
});
$(document).ready(function() {
    $('#mycheckbox3').change(function() {
        $('#mycheckboxdiv').toggle();
    });
});

</script>

   


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
   
    <script>
window.addEventListener("load", function(){
var load_screen = document.getElementById("load_screen");
document.body.removeChild(load_screen);
});
</script>
 




 <section class="features" style="background-color: #f8f8f8;padding-top:60px;"><section class="faq-area section-padding">

       
      <div class="container">
      

    
        <div class="row"  >
           
            <div class="col-md-4 text-center" style="padding:0px 10px;">
              <div class="bg-white mainshow" style="padding: 10px;">
                
                <img src="{{url('/')}}/public/img/tablet/{{ $main->image }}" style="height: 150px;
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
 <form id="regiration_form"  method="post" action="{{url('/')}}/tabletactive">

  {{ csrf_field() }}


     
     
      <fieldset class="question text-center" style="padding: 40px;">
    <h2 style="margin-top:10px;margin-bottom:0px;"> Power On</h2>
       <p style="margin-left:10px;">Does your device powers on ?</p>


       <button class="btn btn-success" id="yes">YES</button>
       <button class="btn btn-success" style="background: black;" id="no">NO</button>

 <input type="checkbox" id="success" class="badgebox coupon_question1" name="coupon_question1 d-none" style="display:none;">

        <input type="checkbox" id="primary" class="badgebox coupon_question" name="coupon_question" style="display:none;" >

<br/>




  </fieldset>
 
  <fieldset class="answer1">
    <h2 class="maintitle5">Functional or Physical Problems</h2>
   
    <p class="maintext5">Please choose appropriate option(s) to get accurate quote</p>

<Div class="scroll" >
   <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Display or Touch Issue
                                <label class="switch ">
          <input type="checkbox" class="option success get_value" name="display" value="{{$main->display}}" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>

 <li class="list-group-item">
                      Screen Glass Broken
                                <label class="switch " >
          <input type="checkbox" class="option success get_value" name="Screen" value="{{$main->screen}}" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>

                      </li>


              @if($main->fingerlock == '')

                      @else

      <li class="list-group-item">Fingerprint Sensor Faulty
        <label class="switch " >
          <input type="checkbox" class="option success get_value" name="fingerlock" value="{{$main->fingerlock}}" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>

                    @endif


                   @if($main->facelock == '')

                    @else
 <li class="list-group-item"> Face ID Faulty                                                                                                                                           
        <label class="switch " >
          <input type="checkbox" class="option success get_value" name="facelock" value="{{$main->facelook}}" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>

                     @endif

 <li class="list-group-item">
                        Power/Home Button Issue
                                <label class="switch " >
          <input type="checkbox" class="option success get_value" name="Power" value="{{$main->power}}" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>

 <li class="list-group-item">
                        Charging Issue
                                <label class="switch " >
          <input type="checkbox" class="option success " name="Charging" value="{{$main->Charging}}" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>

 <li class="list-group-item">
                       Front Camera Issue
                                <label class="switch " >
          <input type="checkbox" class="option success" name="Front" value="{{$main->Front}}" onClick="test1(this);">
          <span class="slider"></span>
 
        </label>
                    </li>


 <li class="list-group-item">
                      Back Camera Issue
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->Back}}" name="Back" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>
 <li class="list-group-item">
                       Battery Issue
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->Battery}}" name="Battery" onClick="test1(this);">
          <span class="slider"></span>
 
        </label>
                    </li>
                   
    <li class="list-group-item">
                      Speaker Issue
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->Speaker}}" name="Speaker" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>
                   
    <li class="list-group-item">
                       Volume Button Issue
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->Volume}}" name="Volume" onClick="test1(this);">
          <span class="slider"></span>
 
        </label>
                    </li>
                   
    <li class="list-group-item">
                      Wifi/GPS Issue
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->Wifi}}" name="Wifi" onClick="test1(this);">
          <span class="slider"></span>

        </label>
                    </li>
                   
                   
 
   
                </ul>

</div>
  <br>
    <input type="button" name="password" class="next btn btn-info " value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="maintitle5"> Do you have the following</h2>
       <p class="maintext5">Please select accessories which are available</p>
<Div class="scroll" >
    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                    Original Charger
                                <label class="switch ">
          <input type="checkbox" class="option success"  value="{{$main->Charger}}" name="Charger" onClick="test(this);">
          <span class="slider"></span>

        </label>
                    </li>

 <li class="list-group-item">
                    Earphone
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->Earphone}}" name="Earphone" onClick="test(this);">
          <span class="slider"></span>

        </label>
                    </li>
 <li class="list-group-item">
                    Box
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->box}}" name="box" onClick="test(this);">
          <span class="slider"></span>

        </label>
                    </li>
                   
                      <li class="list-group-item">
                    Valid Bill
                                <label class="switch " >
          <input type="checkbox" class="option success"
          id="mycheckbox10">
          <span class="slider"></span>
     
        </label>
                    </li>

</ul>



<Div class="fieldset" id="mycheckboxdiv10" style="display:none">
 
     <h2 class="maintitle5">Device Age</h2>
       <p class="maintext5">How old is your device ?</p>
  <Div class="scroll" >
    <ul class="list-group list-group-flush"    >
                    <li class="list-group-item">
                    Below 3 months
                                <label class="switch ">
          <input type="checkbox" class="option success"  value="{{$main->bill1}}" name="bill1" onClick="test(this);">
          <span class="slider"></span>
     
        </label>
                    </li><br>
         
            <li class="list-group-item">
                    3 - 6 months
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->bill2}}" name="bill2" onClick="test(this);">
          <span class="slider"></span>
     
        </label>
                    </li><br>
              <li class="list-group-item">
                    6 - 11 months
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->bill3}}" name="bill3" onClick="test(this);">
          <span class="slider"></span>
     
        </label>
                    </li><br>

                     <li class="list-group-item">
                    Out Of Warranty
                                <label class="switch " >
          <input type="checkbox" class="option success" value="0" name="bill4" onClick="test(this);">
          <span class="slider"></span>
     
        </label>
                    </li><br>
         
          </ul>
          </div>
   
  </Div>




</div>
<br>
    <input type="button" name="previous" class="previous btn btn-default " value="Previous" />
    <input type="button" name="next" class="next btn btn-info " value="Next" />
    <br>
   
  </fieldset>
 
    <fieldset>
    <h2 class="maintitle5"> Your Phone Condition</h2>
       <p class="maintext5">Please choose appropriate condition to get accurate quote</p>

  <Div class="scroll" style="">
 
 
     <li class="list-group-item">
                   Good
                   
                 
                                <label class="switch ">
          <input type="checkbox" class="option success" value="0" name="good" id="mycheckbox" onClick="test(this);"   >
          <span class="slider"></span>
       
        </label>
                    </li>

 <li class="list-group-item">
                    average
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->average}}" name="average" id="mycheckbox2" onClick="test1(this);" >
          <span class="slider"></span>
        </label>
                    </li>
 <li class="list-group-item">
                    Below Average
                                <label class="switch " >
          <input type="checkbox" class="option success" value="{{$main->belowaverage}}" name="Belowaverage" id="mycheckbox3" onClick="test1(this);"  >
          <span class="slider"></span>
        </label>
                    </li>

</ul>
<br>
</div>
 
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" class="next btn btn-info" value="Next"   />
  </fieldset>


 
  <fieldset class="">
   

   
 <h2 class="maintitle5">Your Device Price</h2>    
  <Div class="scroll" style="height:300px;">
 
 <input type="text" id="total" value="0" readonly="readonly" style="font-size: 200%;padding:20px;border:0px;background-color:none;color:green;"/>
 
 <div id="totaal"></div>
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
 $('#submit').click(function(){
 var insert = [];
 $('.get_value').each(function(){
 if($(this).is(":checked"))
 {
 insert.push($(this).val());
 }
 });
 insert = insert.toString();
 $.ajax({
 url: "action.php",
 method: "POST",
 data:{insert:insert},
 success:function(data){
 $('#result').html(data);
 }
 });
 });
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
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
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



