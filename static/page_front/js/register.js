function send_register(){
    alert("hola");
    
    $('#register-form').validate({ // initialize the plugin
            rules: {
                usuario: {
                    required: true
                },
                clave: {
                    required: true
                },
                usuario: {
                    required: true
                },
                usuario: {
                    required: true
                },
                usuario: {
                    required: true
                },
//                email: {
//                    required: true,
//                    email: true
//                },
                message: {
                    required: true
                },
                subject: {
                    required: true
                }
            },
            submitHandler: function(form) {
                // sending value with ajax request
                $.post($(form).attr('action'), $(form).serialize(), function(response) {
                    $(form).parent('div').append(response);
                    $(form).find('input[type="text"]').val('');
                    $(form).find('input[type="email"]').val('');
                    $(form).find('input[type="usuario"]').val('');
                    $(form).find('textarea').val('');
                });
                return false;
            }
        });
}
    
        






function validate_username(username){
        $.ajax({
        type: "post",
        url: "register/validate_username",
        dataType: "json",
        data: {username: username},
        success:function(data){            
                if(data.message == "true"){         
                $(".alert-0").removeClass('text-danger').addClass('text-danger').html(data.print)
                
            }else{
                $(".alert-0").removeClass('text-success').addClass('text-success').html(data.print);
            }
        }            
    });
}

function validate_2passwordr(password2) {
        var password1 = document.getElementById("clave").value;
        var password2 = document.getElementById("repita_clave").value;
        if(password1 == password2){
            $(".alert-1").removeClass('text-danger').addClass('text-success').html("las contrase&ntilde;as coinciden");
        }else{
            $(".alert-1").removeClass('text-danger').addClass('text-danger').html("las contrase&ntilde;as no coinciden");
        }
}

function validate_region(id) {
        $.ajax({
        type: "post",
        url: "register/validate_region",
        dataType: "json",
        data: {id: id},
        success:function(data){            
                if(data.message == "true"){         
                    obj_region = data.print;
                    var texto = "";
                    texto = texto+'<option value="">Seleccionar  Regi&oacuten</option>';
                    var x = 0;               
                    $.each(obj_region, function(){
                        texto = texto+'<option value="'+obj_region[x]['id']+'">'+obj_region[x]['nombre']+'</option>';
                        x++; 
                    });
                    $("#region").html(texto);
            }else{
                    var texto = "";
                    texto = texto+'<option value="">Seleccionar País</option>';
                    $("#region").html(texto);
            }
        }            
    });
}

function crear_registro() {
        var opts = {
    lines: 13 // The number of lines to draw
    , length: 28 // The length of each line
    , width: 14 // The line thickness
    , radius: 42 // The radius of the inner circle
    , scale: 1 // Scales overall size of the spinner
    , corners: 1 // Corner roundness (0..1)
    , color: '#000' // #rgb or #rrggbb or array of colors
    , opacity: 0.25 // Opacity of the lines
    , rotate: 0 // The rotation offset
    , direction: 1 // 1: clockwise, -1: counterclockwise
    , speed: 1 // Rounds per second
    , trail: 60 // Afterglow percentage
    , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
    , zIndex: 2e9 // The z-index (defaults to 2000000000)
    , className: 'spinner' // The CSS class to assign to the spinner
    , top: '50%' // Top position relative to parent
    , left: '50%' // Left position relative to parent
    , shadow: false // Whether to render a shadow
    , hwaccel: false // Whether to use hardware acceleration
    , position: 'absolute' // Element positioning
    }
    var target = document.getElementById('spinner');
    var spinner = new Spinner(opts).spin(target);
        
     var clave = document.getElementByName("clave").value;
     var repita_clave = document.getElementByName("repita_clave").value;
     
    var customer_id = document.getElementByName("customer_id").value;
    var pierna_customer = document.getElementByName("pierna_customer").value;
    var usuario = document.getElementByName("usuario").value;
    var name = document.getElementByName("name").value;
    var last_name = document.getElementByName("last_name").value;
    var address = document.getElementByName("address").value;
    var telefono = document.getElementByName("telefono").value;
    var dni = document.getElementByName("dni").value;
    var email = document.getElementByName("email").value;
        
    
    var dia = document.getElementByName("dia").value;
    var mes = document.getElementByName("mes").value;
    var ano = document.getElementByName("ano").value;
    
//    var dia = document.getElementsByName("dia")[0].value;
//    var mes = document.getElementsByName("mes")[0].value;
//    var ano = document.getElementsByName("ano")[0].value;
    
        //ver si son iguales
            if(clave == repita_clave){
                
                $.ajax({
                       type: "post",
                       url: "register/crear_registro",
                       dataType: "json",
                       data: {customer_id: customer_id,
                              pierna_customer: pierna_customer,
                              usuario: usuario,
                              clave: clave, 
                              name: name,
                              last_name: last_name,
                              address: address,
                              telefono: telefono,
                              dni: dni,
                              email: email,
                              dia: dia,
                              mes: mes,
                              ano: ano,
                              pais: pais,
                              region: region,
                              city: city},
                          
                       success:function(data){            
                               if(data.message == "true"){         
                                   enviado_correcto();
                                   $(location).attr('href',data.url);  
                           }else{
                               spinner.stop(); 
                                llene_campos();   
                           }
                       }            
                   });
                
            }else{
               spinner.stop(); 
               contraseñas();
            }
}
function llene_campos() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">Debe llenar todos los campos.</div>'
    });
}
function enviado_correcto() {
    w2popup.open({
        title: 'Felicidades',
        body: '<div class="w2ui-centered">Registro creado con éxito</div>'
    });
}
function contraseñas() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">Las contraseñas no coinciden.</div>'
    });
}
