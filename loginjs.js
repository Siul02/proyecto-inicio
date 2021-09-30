function loginjs(){
	var nombre; 
	var contraseña;
	 
	 nombre = document.getElementById("name").value;
	 contraseña = document.getElementById("pass").value;


    if(nombre == "" || contraseña ==""){
    	alert("este campo esta vacio");
    	return false;
    }
  
   
}