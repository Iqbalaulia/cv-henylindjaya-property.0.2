$(document).ready(function(){
    $("#img1").click(function(){
     $(".kotak1").fadeToggle(500);
 });
    $("#img2").click(function(){
     $(".kotak2").fadeToggle(500);
 });
    $("#img3").click(function(){
    	$(".kotak3").fadeToggle(500);
    });
    $("#img4").click(function(){
    	$(".kotak4").fadeToggle(500);
    });
    $("#img5").click(function(){
    	$(".kotak5").fadeToggle(500);
    });
    $("#img6").click(function(){
    	$(".kotak6").fadeToggle(500);
    });
    $("#img7").click(function(){
    	$(".kotak7").fadeToggle(500);
    });
    $("#img8").click(function(){
    	$(".kotak8").fadeToggle(500);
    });
    $("#img9").click(function(){
    	$(".kotak9").fadeToggle(500);
    });
    $("#img10").click(function(){
    	$(".kotak10").fadeToggle(500);
    });
    $("#img11").click(function(){
    	$(".kotak11").fadeToggle(500);
    });
    $("#img12").click(function(){
    	$(".kotak12").fadeToggle(500);
    });
    $("#img13").click(function(){
    	$(".kotak13").fadeToggle(500);
    });
    $("#img14").click(function(){
    	$(".kotak14").fadeToggle(500);
    });
    $("#img15").click(function(){
    	$(".kotak15").fadeToggle(500);
    });
    $("#img16").click(function(){
    	$(".kotak16").fadeToggle(500);
    });
    $("#img17").click(function(){
    	$(".kotak17").fadeToggle(500);
    });
    $("#img18").click(function(){
    	$(".kotak18").fadeToggle(500);
    });
    $("#img19").click(function(){
    	$(".kotak19").fadeToggle(500);
    });
    $("#img20").click(function(){
    	$(".kotak20").fadeToggle(500);
    });
    $("#img21").click(function(){
    	$(".kotak21").fadeToggle(500);
    });
});

$(document).ready(function(){
    // $("#insert").click(function(){
    // });
    $("#namanya").keyup(function() {
      var nama = $("#namanya").val();
      if(nama.length>4){
        $("#warning_nama").attr("class","form-group has-success");}

        if (nama.length ==""){
        $("#warning_nama").attr("class","form-group has-error");
    }

    else{
        return false;
    }
});



});

$(document).ready(function(){
  $("#nowanya").keyup(function(){
    var nowanya = $("#nowanya").val();
    if (nowanya.length>=11 && nowanya.length <=12) {
        $("#warning_wa").attr("class","form-group has-success");

    }if(nowanya.length==""){
        $("#warning_wa").attr("class","form-group has-error");
    }
    else{
        return false;
    }
});
});

$(document).ready(function(){
    $("#emailnya").keyup(function(){
        var emailnya = $("#emailnya").val();
        if (emailnya) {}
    });
});

function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
return true;
}
