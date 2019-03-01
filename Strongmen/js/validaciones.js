function validar(){

	var er1 = new RegExp("^[a-zA-Záéíóú]+( [a-zA-Záéíóú]+)*$");
	var er2 = new RegExp("^[a-zA-Záéíóú]+$");
	var nombre = document.getElementById("nombre").value;
	var pass = document.getElementById("password").value;
	var rpass = document.getElementById("rpassword").value;
	var apellido_paterno = document.getElementById("ap_pat").value;
	var apellido_materno = document.getElementById("ap_mat").value;
	if(!er1.test(nombre)){
		alert("Error: verifica que el nombre del usuario no tenga numeros ni caracteres especiales (incluye espacio al final de la cadena)");
		return false;
	}else{
		if(nombre.length > 20){
			alert("Error: el nombre es muy largo");
			return false;
		}else{
			if (!er2.test(apellido_paterno) || !er2.test(apellido_materno)){
				alert("Los apellidos solo pueden contener letras, es solo una palabra por cada campo");
				return false;
			}else{
				if(apellido_materno.length >20 || apellido_paterno >20){
					alert("Los apellidos son muy largos");
					return false;
				}else{
					if (apellido_paterno.length < 3 || apellido_materno.length<3 || nombre < 3) {
						alert("Los apellidos o el nombre son muy cortos");
						return false;
					}else{
						if (pass.length < 6) {
							alert("la contraseña debe contener al menos 7 caracteres");
							return false;
						}else{
							if(pass.localeCompare(rpass) != 0){
								alert("Las contraseñas no coinciden");
								return false;
							}
						}

					}
				}
			}
		}
	}

	

	
	
}