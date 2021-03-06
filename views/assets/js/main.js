$(document).ready(function(){
    $('#table').DataTable();
});
// ================================Transición Completar Perfil===============================//

var completar2 = document.getElementById('completar2');
var completar3 = document.getElementById('completar3');

function abrircompletar2() {
  this.completar2.style.transform = "translateX(450px)";
  this.completar2.style.transition = "0.5s";
}
function abrircompletar3() {
  this.completar3.style.transform = "translateX(450px)";
  this.completar3.style.transition = "0.5s";
}
//---------------COMPLETAR1 USUARIO
$("#frm_completar1").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()){
    var datacomp1=[$("#tipo_comp1").val(),
                   $("#docu_comp1").val(),
                   $("#dire_comp1").val(),
                   $("#tele_comp1").val(),
                   $("#fech_comp1").val()];
    $.post("completar1",{datacomp1:datacomp1},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        abrircompletar2();
      }else{
        alert(data[1]);
      }
    });
  }
});
//---------------COMPLETAR2 USUARIO
$("#frm_completar2").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()){
    var datacomp2=[$("#peso_comp2").val(),
                   $("#altu_comp2").val(),
                   $("#rh_comp2").val(),
                   $("#salu_comp2").val()];
    $.post("completar2",{datacomp2:datacomp2},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        abrircompletar3();
      }else{
        alert(data[1]);
      }
    });
  }
});
//---------------COMPLETAR3 USUARIO
$("#frm_completar3").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()){
    var datacomp3=$("#nume_comp3").val();
    if (datacomp3.length==0) {
      datacomp3="NO";
    }
    $.post("completar3",{datacomp3:datacomp3},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        document.location.href=data[1];
      }else{
        alert(data[1]);
      }
    });
  }
});
//---------------CREAR USUARIO
$("#frm_registrar").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()){
    jsonObj = [];
    $("input[name=data]").each(function(){
      structure = {}
      structure = $(this).val();
      jsonObj.push(structure);
    });
  $.post("crear",{datauser:jsonObj},function(data){
    var data = JSON.parse(data);
    if (data[0]==true) {
      document.location.href=data[1];
    }else{
      alert(data[1]);
    }
  });
  }
});
//---------------UPDATE CLINICA
$("#uclinica").click(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()){
    jsonObj = [];
    $("input[name=data]").each(function(){
      structure = {}
      structure = $(this).val();
      jsonObj.push(structure);
    });
    $.post("update-clinica",{dataclinica:jsonObj},function(data){
    var data = JSON.parse(data);
    if (data[0]==true) {
      document.location.href=data[1];
    }
  });
  }
});
//-------------------- VALIDAR QUE EL CORREO NO EXISTA EN USUARIO

$("#pas_registro").focus(function(){
  $("#ema_registro").siblings("span").remove();
  var email = $("#ema_registro").val();
  $.post("validar-email",{email:email},function(data){
          var data = JSON.parse(data);
          if(data[0] == false){
            $("#ema_registro").siblings("label").after("<span class='error'>"+data[1]+"</span>");
            $("#btn_registrar").attr("disabled",true);
          }else{
            $("#btn_registrar").attr("disabled",false);
          }
      })
});



$("#ema_registro").focus(function(){
  $(this).siblings("span").remove();
  $("#btn_registrar").attr("disabled",false);
});
//-------------------- VALIDAMOS QUE EL CORREO EXISTA PARA LOGUEARSE
$("#pas_login").focus(function(){
  $("#ema_login").siblings("span").remove();
  var email = $("#ema_login").val();
  $.post("validar-usuario",{email:email},function(data){
    var data = JSON.parse(data);
    if(data[0] == false){
      $("#ema_login").siblings("label").after("<span class='error'>"+data[1]+"</span>");
      $("#btn_login").attr("disabled",true);
    }else{
      $("#btn_login").attr("disabled",false);
    }
  })
});



$("#ema_login").focus(function(){
  $(this).siblings("span").remove();
  $("#btn_login").attr("disabled",false);
});

//-----------------------LISTA DESPEGLABE DONACION 1
$("#enf_no").focus(function(){
  $("#agileits_select1").hide();
});
$("#enf_si").focus(function(){
  $("#agileits_select1").show();
});
//-----------------------LISTA DESPEGLABE DONACION 2
$("#men_no").focus(function(){
  $("#agileits_select2").hide();
});
$("#men_si").focus(function(){
  $("#agileits_select2").show();
});
//-----------------------LISTA DESPEGLABE DONACION 3
$("#don_no").focus(function(){
  $("#agileits_select3").hide();
});
$("#don_si").focus(function(){
  $("#agileits_select3").show();
});
//-----------------------LISTA DESPEGLABE DONACION 4
$("#tip_no").focus(function(){
  $("#agileits_select4").hide();
});
$("#tip_si").focus(function(){
  $("#agileits_select4").show();
});
//------------------------ DONACION
$("#frm_don").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()){
    if (document.getElementById("enf_si").checked== true) {
        var enf=$("#agileits_select1").val();
    }else{
        var enf="NO";
    }
    if (document.getElementById("men_si").checked== true) {
        var men=$("#agileits_select2").val();
    }else{
        var men="NO";
    }
    if (document.getElementById("tat_si").checked== true) {
        var tat="SI";
    }else{
        var tat="NO";
    }
    if (document.getElementById("don_si").checked== true) {
        var don=$("#agileits_select3").val();
    }else{
        var don="NO";
    }
    if (document.getElementById("tip_si").checked== true) {
        var tip=$("#agileits_select4").val();
    }else{
        var tip="NO";
    }
    var donacion=[enf,men,tat,don,tip];
    $.post("crear-donacion",{data:donacion},function(data){
      var data = JSON.parse(data);
      if (data[0]==true) {
        alert("Donacion Enviada");
        document.location.href=data[1];
      }
    });
  }
});
//---------------------------- LOGUEO

$("#frm_login").submit(function(e){
  e.preventDefault();
  if($(this).parsley().isValid()){
    var datalogin=[$("#ema_login").val(),
    $("#pas_login").val()];
    $.post("login",{datalogin:datalogin},function(data){
      var data = JSON.parse(data);

      if(data[0] == true){
        document.location.href=data[1];
        localStorage.setItem("Esto no es un token",data[2]);
      }else{
        alert(data[1]);
      }
    });
  }
});

// $("#txtemail").keyup(function(){
//   var valor = $("#txtemail").val();
//   alert("Campo: "+valor);
//   $("#txtpass").focus(function(){
//     alert("final"+valor);
//   })
// });


//Correo existente - Registro

$("#password").focus(function(){
  var email = $("#emailRegis").val();
  $.post("valCorreo",{email:email},function(data){
    var data = JSON.parse(data);
    $("#emailRegis").after("<span class='exis'>"+data[0]+"</span>");
    if(data[1] == false){
      $("span.exis").show();
      $("btnRegister").attr("disabled",true);
    }else{
      $("span.exis").hide();
      $("btnRegister").attr("disabled",false);
    }
  })
})

// -- Fin -- //

// -- Fin -- //


// Validar contraseña (numeros, mayusculas, etc.)

$("#password").keyup(function(){
  var data = $("#password").val();
  var cant = data.length;
  if((cant<8)||(cant>16)){
    $("#password").siblings("span.error").show();
    $("#btnRegister").attr("disabled",true);
  }else{
    $("#password").siblings("span.error").hide();
    $("#btnRegister").attr("disabled",false);
  }
  $("#password").siblings(".pas").after("<span class='error'>La contraseña debe ser mayor de 8 y menor a 16 caracteres</span>").remove();
});
// -- Fin -- //

//Contraseñas diferentes
$("#verify").keyup(function(){
  var pas = $("#password").val();
  var ver = $("#verify").val();
    if(ver != pas){
      var msn = "Las contraseñas no coinciden";
      $("#verify").siblings("span.error2").show();
      $("#btnRegister").attr("disabled",true);
    }else{
      $("#verify").siblings("span.error2").hide();
      $("#btnRegister").attr("disabled",false);
    }
    $("#verify").siblings(".veri").after("<span class='error2'>"+msn+"</span>").remove()
  });
  // -- Fin -- //






//Recuperar contraseña - email

// $("#btnRecover").mouseenter(function(){
//   $.post("emailreco",function(data){
//     var ver = JSON.parse(data);
//     if(ver[1] == false){
//       alert(data[0]);
//       $("#btnRecover").attr("disabled",true);
//     }else{
//       $("#btnRecover").attr("disabled",false)
//     }
//   })
// })

//email
$("#docu").focus(function(){
  var email=$("#recoveremail").val();
  $.post("recover/email",{email:email},function(data){
    $("span.error").remove();
    var verify = JSON.parse(data);
    $("#recoveremail").after("<span class='error'>"+verify[0]+"</span>");
    if(verify[1]==false){
      $("span.error").show();
      $("#btnRecover").attr("disabled",true);
    }else{
      $("span.error").hide();
      $("#btnRecover").attr("disabled",false);
    }
  })
})


//Mensaje
$("#formreco").submit(function(){
  var email = $("#recoveremail").val();
  $.post("enviar",{email:email},function(data){
    document.location.href = "login";
    alert("Hemos enviado un mensaje a: "+email+" para verificar la cuenta");
  })
})

// -- fin -- //

//documento
// $("#docu").focus(function(){
//   var email=$("#recoveremail").val();
//   var documento = $("#docu").val();
//   $.post("recover/email",{email:email,documento:documento},function(data){
//     $("span.error").remove();
//     var verify = JSON.parse(data);
//     $("#recoveremail").after("<span class='error'>"+verify[0]+"</span>");
//     if(verify[1]==false){
//       $("span.error").show();
//       $("#btnRecover").attr("disabled",true);
//     }else{
//       $("span.error").hide();
//       $("#btnRecover").attr("disabled",false);
//     }
//   })
// })
// -- fin -- //

//nueva Contraseña

$("#newpass").keyup(function(){
  var password = $("#pass").val();
  var nueva = $("#newpass").val();
  $("span.error").remove();
  if(password != nueva){
    $("span.error").show();
    $("#newpass").after("<span class='error'>Las contraseñas no coinciden</span>");
    $("#buttonnew").attr("disabled",true);
  }else{
    $("span.error").hide();
    $("#buttonnew").attr("disabled",false);
  }
});

//nueva contraseña
$("#pass").keyup(function(){
  $("span.error").remove();
  var password = $("#pass").val();
  var tamaño = password.length;
  if((tamaño<8)|(tamaño>16)){
    $("span.error").show();
    $("#pass").after("<span class='error'>La contraseña debe tener entre 8 y 16 caracteres</span>");
    $("#buttonnew").attr("disabled",true);
  }else{
    $("span.error").hide();
    $("buttonnew").attr("disabled",false);
  }
})

$(function() {
    var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}

	var accordion = new Accordion($('#accordion'), false);
});

//Verificar email
$("#pass").focus(function(){
  $("span.error").remove();
  var email = $("#emailre").val();
  $.post("change",{email:email},function(data){
    var data = JSON.parse(data);
    if(data[1] == false){
      $("span.error").show();
      $("#emailre").after("<span class='error'>"+data[0]+"</span>");
      $("#buttonnew").attr("disabled",true);
    }else{
      $("span.error").hide();
      $("#buttonnew").attr("disabled",false);
    }
  })
})




//------------------------------------PANTALLA PRINCIPAL USUARIO---------------------------------//

$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});


//-======================================Contacto========================================//

function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
