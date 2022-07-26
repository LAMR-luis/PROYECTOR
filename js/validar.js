var user=document.getElementById('Correo');
var password=document.getElementById('Pass');
var form= document.getElementById('formulario');

form.addEventListener('submit', function(evt){
    evt.preventDefault();	
        if(user.value==null|| user.value==""){
            user.style.borderColor="red";
            errorNom.style.color="red";
            document.getElementById('etiqueta_nom').style.visibility="hidden";
            errorNom.innerHTML="Este campo es obligatorio";
        }
    }
    );
    
    form.addEventListener('submit', function(evt){
    evt.preventDefault();
    if(password.value==null|| password.value==""){
            password.style.borderColor="red";
            errorPwd.style.color="red";
            document.getElementById('etiqueta_pwd').style.visibility="hidden";
            errorPwd.innerHTML="El numero de cita es obligatorio para avanzar";
        }
    });
    function RevisarNom(){
        user.style.borderColor="green";
        erruser.style.visibility="hidden";
        document.getElementById('etiqueta_nom').style.visibility="visible";
    
    
    }
    function RevisarContra(){
        password.style.borderColor="green";
        errpassword.style.visibility="hidden";
        document.getElementById('etiqueta_pwd').style.visibility="visible";
    
    
    }