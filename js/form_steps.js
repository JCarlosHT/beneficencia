var ingresos = 0;
var ingresos_fam = 0;
var egresos = 0;
$(document).ready(function() {
	$("#dat_sol").hide();
	$("#fam").hide();
	$("#sit_eco").hide();
	$("#alimentaciondiv").hide();
	$("#viviendadiv").hide();
	$("#saluddiv").hide();
	$("#cod_pos").select2();
	$("#mun").select2();
    $("#servis1").select2();
    $("#servis2").select2();
    $( "#mun" ).change(function() {
        cambiar_cp(this.value)
    });
    $( "#mun_res" ).change(function() {
        cambiar_cp(this.value)
    });
    var mns_error = '';
    cargar_cp();
	$('#sig').click(function(e){
		if(valida1()){
            if($("#edad").val()<18){
             cargar_cp();
			 form2();
            }else{
              $("#dat_bene").hide();
              $("#nombre2").removeAttr('required');
              $("#cod_posres").removeAttr('required');
              $("#parentesco_res").removeAttr('required');
              $("#ref_res").removeAttr('required');
              $("#primerape2").removeAttr('required');
              $("#segundoape2").removeAttr('required');
              $("#telefono").removeAttr('required'); 
              $("#calle_res").removeAttr('required');
              $("#num_res").removeAttr('required');
              $("#num_extres").removeAttr('required');
              $("#mun_res").removeAttr('required');
              $("#loca_res").removeAttr('required');  
              form3();  
            }
		}
	});
	$('#sig2').click(function(e){
        if(valida2()){
		    form3();
        }
	});
	$('#sig3').click(function(e){
        if(valida3()){
            var table = document.getElementsByTagName('table')[0];
            var rows = table.rows;
            var cells, t;
            var iLen = rows.length;
            var result = [];

            for (var i=2; i<iLen; i++) {
                cells = rows[i].cells;
                console.log(cells);
                t = [];
                for (var j=0, jLen=cells.length; j<jLen; j++) {
                t.push(cells[j].textContent);
                }
                result.push(t);
            }
            console.log(result);
            arreglo = result.filter(function(n){ return n != undefined });
            let texto = "";
            arreglo.forEach(res => {
                texto = texto + res.slice(1,-1) + "|";
            });
            $("#constitucion_fam").val(texto);
            console.log($("#constitucion_fam").val());
		    form4();
        }
	});
	$('#sig4').click(function(e){
        if(valida4()){
		    form5();
        }
	});
	$('#sig5').click(function(e){
        if(valida5()){
		    form6();
        }
	});
	$('#sig6').click(function(e){
        if(valida6()){
		    form7();
        }
	});
    $('#sig7').click(function(e){
        if(valida7()){
		    form7();
        }
	});

	$("#ant2").on('click',function () {
        $('#sig').removeAttr("type").attr("type", "submit");
		$("#p2").removeClass("active");
		$("#p1").addClass("active");
		$("#dat_bene").show();
		$("#dat_sol").hide();
	});
	$("#ant3").on('click',function () {
         if($("#edad").val()<18){
            $('#sig2').removeAttr("type").attr("type", "submit");
            $("#p3").removeClass("active");
            $("#p2").addClass("active");
            $("#dat_sol").show();
            $("#fam").hide();
        }else{
            $('#sig2').removeAttr("type").attr("type", "submit");
            $("#p3").removeClass("active");
            $("#p1").addClass("active");
            $("#dat_bene").show();
            $("#fam").hide();
        }
        

	});
	$("#ant4").on('click',function () {
        $('#sig3').removeAttr("type").attr("type", "submit");
		$("#p4").removeClass("active");
		$("#p3").addClass("active");
		$("#fam").show();
		$("#sit_eco").hide();
	});
	$("#ant5").on('click',function () {
        $('#sig4').removeAttr("type").attr("type", "submit");
		$("#p5").removeClass("active");
		$("#p4").addClass("active");
		$("#sit_eco").show();
		$("#alimentaciondiv").hide();
	});
	$("#ant6").on('click',function () {
        $('#sig5').removeAttr("type").attr("type", "submit");
		$("#p6").removeClass("active");
		$("#p5").addClass("active");
		$("#alimentaciondiv").show();
		$("#viviendadiv").hide();
	});
	$("#ant7").on('click',function () {
        $('#sig6').removeAttr("type").attr("type", "submit");
		$("#p7").removeClass("active");
		$("#p6").addClass("active");
		$("#viviendadiv").show();
		$("#saluddiv").hide();
	});

    let count = 0;
    var table = document.getElementsByTagName('table')[0];
    var rows = table.rows;
    var iLen = rows.length;
    function remove() {
        $(".red").click(function(){
          count--;
          $(this).closest("tr").remove();
          count > 0 ? $("#constitucion_fam2").val("ok") : $("#constitucion_fam2").val("");
        });
      }
      remove();
      $(".green").on('click', function(e){
        e.preventDefault();
        if($("input[name=name]").val(), $("input[name=age]").val(), $("#paren").val() == null, $("input[name=job]").val(), $("input[name=mon]").val() == "", $("input[name=escolaridad]").val() == "") {
          $(".alert").addClass("active");
          $(".remove").click(function(){
            $(".alert").removeClass("active");
          });
        }else{
          count++;
          ingresos_fam = ingresos_fam + parseFloat($("input[name=mon]").val());
          var name = $("input[name=name]").val();
          var age = $("input[name=age]").val();
          var paren = $("#paren").val();
          switch(paren){
            case "1":
                var parentesco = "Padre";
                break;
            case "2":
                var parentesco = "Madre";
                break;
            case "3":
                 var parentesco = "Esposo(a)";
                 break;
           case "4":
                 var parentesco = "Hijo";
                 break;
            case "5":
                 var parentesco = "Otro";
                 break;              
          }
          var job = $("input[name=job]").val();
          var mon = $("input[name=mon]").val();
          var escolaridad = $("input[name=escolaridad2]").val();
          $(".first-tr").after('<tr><td></td><td>'+name+'</td><td>'+age+'</td><td>'+parentesco+'</td><td>'+job+'</td><td>'+mon+'</td><td>'+escolaridad+'</td><td class="static"><span class="btn btn-danger red"><i class="fa fa-times"></i></span></td></tr>');
          remove();
          $("input[name=name], input[name=age], #paren, input[name=job], input[name=mon], input[name=escolaridad]").val("");
          count >= 0 ? $("#constitucion_fam2").val("ok") : $("#constitucion_fam2").val("");
        }
      });
});
    $('#curp_doc').on('change',function(){
                var fileName = $(this).val();
                $(this).next('#label-curp').html(fileName);
     });
    $('#comprobante').on('change',function(){
                var fileName = $(this).val();
                $(this).next('#label-comprobante').html(fileName);
     });
    $('#credencial').on('change',function(){
                var fileName = $(this).val();
                $(this).next('#label-credencial').html(fileName);
     });
    $('#dictamen').on('change',function(){
                var fileName = $(this).val();
                $(this).next('#label-dictamen').html(fileName);
     });
    $('#poliza').on('change',function(){
                var fileName = $(this).val();
                $(this).next('#label-poliza').html(fileName);
     });

function valida1(){
	if($("#nombre").val() != "" && $("#primerape").val() != "" && $("#segundoape").val() != "" && $("#lug_fec").val() != "" 
    && $('#loca').val() !== null && $('#loca').val() !== ""
    && $('#mun').val() !== null && $('#mun').val() !== ""
    && $('#loca').val() !== null && $('#loca').val() !== ""
    && $('#sexo').val() !== null && $('#sexo').val() !== ""
    && $('#est_civ').val() !== null && $('#est_civ').val() !== ""
    && $('#cod_pos').val() !== null && $('#cod_pos').val() !== ""
    && $('#escolaridad').val() !== null && $('#escolaridad').val() !== ""
    && $("#calle").val() != "" && $("#num").val() != "" && $("#tel").val() != "" 
    && $("#fec_nac").val() != "" && $("#edad").val() != "" && $("#canalizado").val() != ""
    && $("#curp").val() != "" && $("#correo").val() != "" 
    && $("#ocupacion").val() != "" && $("#ingreso").val() != "" ){
    var regex = new RegExp("^[a-zA-Z\ áéíóúÁÉÍÓÚñÑ ]+$"); 
        if(regex.test($("#nombre").val()) && regex.test($("#primerape").val()) && regex.test($("#segundoape").val()) && regex.test($("#lug_fec").val()) && regex.test($("#ocupacion").val())){
            $("#nombre").removeClass("form-invalid").addClass("form-gray");
            $("#primerape").removeClass("form-invalid").addClass("form-gray");
            $("#segundoape").removeClass("form-invalid").addClass("form-gray");
            $("#lug_fec").removeClass("form-invalid").addClass("form-gray");
            $("#ocupacion").removeClass("form-invalid").addClass("form-gray");
            if($("#dictamen").val()!=="" && $("#curp_doc").val()!=="" && $("#credencial").val()!=="" && $("#comprobante").val()!=="" && $("#poliza").val()!==""){
                    $("#correo").removeClass("form-invalid").addClass("form-gray");
                    if( $("#curp").val().length == 18){
                        $("#curp").removeClass("form-invalid").addClass("form-gray");
                        if( $("#tel").val().length == 10){
                            $("#tel").removeClass("form-invalid").addClass("form-gray");
                            $('#sig').removeAttr("type").attr("type", "button");
                            $(".mns_error").text("");
                            return true;
                        }else{
                            mns_error = 'Ingrese un teléfono de 10 dígitos';
                            $("#tel").removeClass("form-gray").addClass("form-invalid");
                            $(".mns_error").text(mns_error);
                        }  
                    }else{
                        mns_error = 'Longitud incorrecta de CURP';
                        $("#curp").removeClass("form-gray").addClass("form-invalid");
                        $(".mns_error").text(mns_error);
                    }    

            }else{
                if($("#dictamen").val()=="" ){
                    mns_error = 'Documentación incompleta';
                    $("#dictamen").removeClass("form-gray").addClass("form-invalid");
                    $(".mns_error").text(mns_error);
                } 
                if($("#curp_doc").val()==""){
                    mns_error = 'Documentación incompleta';
                    $("#curp_doc").removeClass("form-gray").addClass("form-invalid");
                    $(".mns_error").text(mns_error);
                }
                 if($("#credencial").val()==""){
                    mns_error = 'Documentación incompleta';
                    $("#credencial").removeClass("form-gray").addClass("form-invalid");
                    $(".mns_error").text(mns_error);
                }
                 if($("#comprobante").val()==""){
                    mns_error = 'Documentación incompleta';
                    $("#credencial").removeClass("form-gray").addClass("form-invalid");
                    $(".mns_error").text(mns_error);
                }
                 if($("#poliza").val()==""){
                    mns_error = 'Documentación incompleta';
                    $("#poliza").removeClass("form-gray").addClass("form-invalid");
                    $(".mns_error").text(mns_error);
                }
                
            }
            
        }else{
            mns_error = 'Verifique que los campos sean texto alfabético';
            if(!regex.test($("#nombre").val())){
                $("#nombre").removeClass("form-gray").addClass("form-invalid");
                $(".mns_error").text(mns_error);
            }else{
                $("#nombre").removeClass("form-invalid").addClass("form-gray");
            } 
            if(!regex.test($("#primerape").val())){
                $("#primerape").removeClass("form-gray").addClass("form-invalid");
                $(".mns_error").text(mns_error);
            }else{
                $("#primerape").removeClass("form-invalid").addClass("form-gray");
            } 
            if(!regex.test($("#segundoape").val())){
                $("#segundoape").removeClass("form-gray").addClass("form-invalid");
                $(".mns_error").text(mns_error);
            }else{
                $("#segundoape").removeClass("form-invalid").addClass("form-gray");
            } 
            if(!regex.test($("#lug_fec").val())){
                $("#lug_fec").removeClass("form-gray").addClass("form-invalid");
                $(".mns_error").text(mns_error);
            }else{
                $("#lug_fec").removeClass("form-invalid").addClass("form-gray");
            } 
            if(!regex.test($("#ocupacion").val())){
                $("#ocupacion").removeClass("form-gray").addClass("form-invalid");
                $(".mns_error").text(mns_error);
            }else{
                $("#ocupacion").removeClass("form-invalid").addClass("form-gray");
            }
        }
	}
}

function valida2(){
	if($("#nombre2").val() != "" && $("#primerape2").val() != "" && $("#segundoape2").val() != "" && $("#telefono").val() != "" && $("#calle_res").val() != "" && $("#num_res").val() != "" && $("#num_extres").val() != "" && $("#mun_res").val() != "" && $("#loca_res").val() != "" && $("#cod_posres").val() != "" && $("#parentesco_res").val() != "" && $("#ref_res").val() != ""){
        var regex = new RegExp("^[a-zA-Z ]+$"); 
        if(regex.test($("#nombre2").val()) && regex.test($("#primerape2").val()) && regex.test($("#segundoape2").val())){
            $("#nombre2").removeClass("form-invalid").addClass("form-gray");
            $("#primerape2").removeClass("form-invalid").addClass("form-gray");
            $("#segundoape2").removeClass("form-invalid").addClass("form-gray");
            if( $("#telefono").val().length == 10){
                $("#telefono").removeClass("form-invalid").addClass("form-gray");
                $('#sig2').removeAttr("type").attr("type", "button");
                $(".mns_error2").text("");
                return true;
            }else{
                mns_error = 'Ingrese un teléfono de 10 dígitos';
                $("#telefono").removeClass("form-gray").addClass("form-invalid");
                $(".mns_error2").text(mns_error);
            }
        }else{
            mns_error = 'Verifique que los campos sean texto alfabético';
            $("#nombre2").removeClass("form-gray").addClass("form-invalid");
            $("#primerape2").removeClass("form-gray").addClass("form-invalid");
            $("#segundoape2").removeClass("form-gray").addClass("form-invalid");
            $(".mns_error2").text(mns_error);
        }
	}
}

function valida3(){
        $('#sig3').removeAttr("type").attr("type", "button");
		return true;
}

function valida4(){
	if($("#ali").val() != "" && $("#salud").val() != "" && $("#vivienda").val() != "" && $("#educacion").val() != ""
    && $("#serv_pub").val() != "" && $("#transporte").val() != "" && $("#vivienda2").val() != "" && $("#luz_gasto").val() != "" && $("#agua_gasto").val() != "" && $("#tel_gasto").val() != "" && $("#gas_gasto").val() != "" && $("#gaso_gasto").val() != "" && $("#vestimenta").val() != "" && $("#otros2").val() != ""){
        if(ingresos < egresos){
            mns_error = 'Los egresos no pueden ser mayores que los ingresos';
            $(".mns_error4").text(mns_error);
        }else{
            $('#sig4').removeAttr("type").attr("type", "button");
		      return true;
        }
	}
}

function valida5(){
	if($("#desayuno").val() != "" && $("#comida").val() != "" && $("#cena").val() != ""){
        $('#sig5').removeAttr("type").attr("type", "button");
		return true;
	}
}

function valida6(){
	if($("#zona").val() != "" && $("#tipo_vi").val() != "" && $("#regimen").val() != ""
    && $("#sala").val() != "" && $("#comedor").val() != "" && $("#recamara").val() != "" 
    && $("#cocina").val() != "" && $("#banio").val() != "" && $("#otros").val() != ""
    && $("#paredes").val() != "" && $("#techo").val() != "" && $("#piso").val() != ""){
        $('#sig6').removeAttr("type").attr("type", "button");
		return true;
	}
}

function valida7(){
	if($("#pad_act").val() != "" && $("#causa").val() != "" && $("#trab_soc").val() != ""
    && $('#aten').val() !== null && $("#aten").val() != "" && $("#dep_soc").val() != ""
    && $("#dir_soc").val() != "" && $("#tel_soc").val() != ""
    && $("#fec_soc").val() != "" && $("#lug_soc").val() != ""){
        var regex = new RegExp("^[a-zA-Z ]+$"); 
        if(regex.test($("#pad_act").val()) && regex.test($("#causa").val()) && regex.test($("#trab_soc").val())){
            $("#pad_act").removeClass("form-invalid").addClass("form-gray");
            $("#causa").removeClass("form-invalid").addClass("form-gray");
            $("#trab_soc").removeClass("form-invalid").addClass("form-gray");
            if( $("#tel_soc").val().length == 10){
                $("#tel_soc").removeClass("form-invalid").addClass("form-gray");
                $('#sig7').removeAttr("type").attr("type", "submit");
                $(".mns_error3").text("");
                return true;
            }else{
                mns_error = 'Ingrese un teléfono de 10 dígitos';
                $('#sig7').removeAttr("type").attr("type", "button");
                $("#tel_soc").removeClass("form-gray").addClass("form-invalid");
                $(".mns_error3").text(mns_error);
            }
        }else{
            mns_error = 'Verifique que los campos sean texto alfabético';
            $('#sig7').removeAttr("type").attr("type", "button");
            $("#pad_act").removeClass("form-gray").addClass("form-invalid");
            $("#causa").removeClass("form-gray").addClass("form-invalid");
            $("#trab_soc").removeClass("form-gray").addClass("form-invalid");
            $(".mns_error3").text(mns_error);
        }
	}
}
$('.suma').keyup(function() {

var importe_total = 0
  $(".suma").each(
    function(index, value) {
      if ( $.isNumeric( $(this).val() ) ){
      importe_total = importe_total + eval($(this).val());
      //console.log(importe_total);
      }
    }
  );
      $("#egr_label").text(importe_total);
      egresos = importe_total;
});
function form2() {
	$("#dat_bene").hide("fast");
	$("#p1").removeClass("active");
	$("#p2").addClass("active");
	$("#dat_sol").show("Slow");
}
function form3() {
	$("#dat_sol").hide("fast");
	$("#p1").removeClass("active");
    $("#p2").removeClass("active");
	$("#p3").addClass("active");
	$("#fam").show("Slow");
}
function form4() {
    ingresos = ingresos_fam + parseFloat($("#ingreso").val());
    $("#ing_label").text(ingresos);
	$("#fam").hide("fast");
	$("#p3").removeClass("active");
	$("#p4").addClass("active");
	$("#sit_eco").show("Slow");
}
function form5() {
	$("#sit_eco").hide("fast");
	$("#p4").removeClass("active");
	$("#p5").addClass("active");
	$("#alimentaciondiv").show("Slow");
}
function form6() {
	$("#alimentaciondiv").hide("fast");
	$("#p5").removeClass("active");
	$("#p6").addClass("active");
	$("#viviendadiv").show("Slow");
}
function form7() {
	$("#viviendadiv").hide("fast");
	$("#p6").removeClass("active");
	$("#p7").addClass("active");
	$("#saluddiv").show("Slow");
}

function cambiar_cp(mun){
    $.ajax({
        url: '/beneficencia/actualizar/cp',
        method:'POST',
        dataType: "json",
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "mun" : mun
        },
        async: false,
        success: function (respuesta) {                         
            $("#cod_posres").html("");
            $("#cod_posres").select2({ data: respuesta, theme :'bootstrap4'});
            $("#cod_pos").html("");
            $("#cod_pos").select2({ data: respuesta, theme :'bootstrap4'});
        },
    });
}
function cargar_cp(){
	$.ajax({
		url: '/beneficencia/solicitud/cps',
		method:'GET',
		dataType: "json",
		data: {
			"_token": $("meta[name='csrf-token']").attr("content"),
		},
		async: false,
		success: function (respuesta) {                         
			// $("#cod_pos").html("");
			$("#cod_pos").select2({ data: respuesta});
            $("#cod_pos").find('option').get(1).remove();
            $("#cod_posres").select2({ data: respuesta});
            $("#cod_posres").find('option').get(1).remove();
		},
	});
}


