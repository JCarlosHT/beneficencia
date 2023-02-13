  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content').toggleClass('active');
    });

    if($(window).width() < 700) {
      $('.embed-responsive').css({"height": "100%"});
      $(".modal-content").css({"height": "90vh"});
    }
  });

  function openiframe(titulo,marca){
    $('#modaltitulo').text(titulo);
    $('#iframemarca').attr("src",marca);
    $('#modaliframe').modal('show');
  }

  function openiframe2(titulo,marca){
    $('#modaltitulo2').text(titulo);
    $('#iframemarca2').attr("src",marca);
    $('#modaliframe2').modal('show');
  }

  var lenguaje = {
      "lengthMenu": "Registros por página",
      "zeroRecords": "Sin registros ",
      "info": "Página  _PAGE_ de _PAGES_",
      "infoEmpty": "Sin registros",
      "infoFiltered": "(Filtrado de _MAX_ registros)",
      'search':'Buscar ',
      paginate:{
        'next':'Siguiente',
        'previous':'Anterior'
      },
      select: {
          "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
        }
    },
        thousands: ".",
        datetime: {
          "previous": "Anterior",
          "next": "Siguiente",
          "hours": "Horas",
          "minutes": "Minutos",
          "seconds": "Segundos",
          "unknown": "-",
          "amPm": [
          "AM",
          "PM"
          ],
          months: {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
        },
        weekdays: [
        "Dom",
        "Lun",
        "Mar",
        "Mie",
        "Jue",
        "Vie",
        "Sab"
        ]
      },
          editor: {
              "close": "Cerrar",
              "create": {
                "button": "Nuevo",
                "title": "Crear nuevo",
                "submit": "Crear"
            },
            edit: {
                "button": "Editar",
                "title": "Editar fila",
                "submit": "Actualizar"
            },
            remove: {
                "button": "Eliminar",
                "title": "Eliminar fila",
                "submit": "Eliminar",
                "confirm": {
                  "_": "¿Está seguro que desea eliminar %d filas?",
                  "1": "¿Está seguro que desea eliminar 1 fila?"
              }
          },
          error: {
            "system": "Ha ocurrido un error en el sistema."
          },
          multi: {
            "title": "Múltiples Valores",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
          }
      },
  }


$(".select-checkbox, .row-add, .row-view").addClass("pointer");