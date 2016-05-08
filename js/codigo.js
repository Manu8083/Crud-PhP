// funcion para mostar la ventana emergente de nuevos usuarios
var accion;
var idP;
function Nuevo(){
	accion = 'N';
	document.frmClientes.nombres.value = "";
	document.frmClientes.apellidos.value = "";
	document.frmClientes.edad.value = "";
	document.frmClientes.email.value = "";
	$('#modal').modal('show');
}
function Editar(id,nombres,apellidos,edad,email){
	accion = 'E';
	idP = id;
	document.frmClientes.nombres.value = nombres;
	document.frmClientes.apellidos.value = apellidos;
	document.frmClientes.edad.value = edad;
	document.frmClientes.email.value = email;
	$('#modal').modal('show')
}
