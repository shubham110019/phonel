

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


   


  @foreach($data as $main)

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

