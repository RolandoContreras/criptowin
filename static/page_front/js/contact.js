function send_messages(){
    name = $("#name").val();    
    email = $("#email").val();     
    message = $("#message").val();
    subject = $("#subject").val();
    
    if(name != "" && email != "" && message != "" && subject != ""){
        $.ajax({
        type: "post",
        url: "contact/send_messages",
        dataType: "json",
        data: {name : name, email:email, message:message,subject:subject},
        success:function(data){            
            if (data.message == "false"){                         
               no_enviado();
            }else{
                enviado_correcto();
            }
        }            
        });
    }else{
        llene_campos();
    }
}

function enviado_correcto(){
    w2popup.open({
        title: 'Felicidades',
        body: '<div class="w2ui-centered">Mensaje enviado correctamente</div>'
    });
}function no_enviado() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">El Mensaje no pudo enviarse.</div>'
    });
}function no_login() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">Usuario y/o contraseña incorrecta.</div>'
    });
}
function llene_campos() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">Debe llenar todos los campos.</div>'
    });
}
function mensaje_home(){
    w2popup.open({
        title: 'Mensaje Importante',
        body: '<div class="w2ui-centered">Buenos días nuevos asociados de CRIPWOTIN (CW) la fecha del lanzamiento de la compañía se dará a cabo el día viernes 01 de septiembre, en donde se abrirá la sección de registros para que puedas asociarte a nuestra empresa. Los pre registros para líderes principales o códigos master se están manejando directamente con las personas encargas del proyecto, si tú eres uno de ellos comunícate con la persona que te dio la información y sé parte de los primeros códigos de CW. \n\ Para mayor información puedes comunicarte con nosotros en la sección de contacto gracias. GERENCIA CRIPWOTIN</div>'
    });
}
