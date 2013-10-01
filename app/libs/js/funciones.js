;
	function getUserData(id){
		var valor = document.getElementById("valor").value;
		//var valor= $("#valor").value
  $.getJSON(window.path+'/index/getUserData/'+valor, function(data) {	
		$.each(data, function(key, val) {	
			//id= val.user_id;
			$("#buscar").append(val.name);	 
			});
	});
 //alert(window.path+'/index/getUserData/'+valor);
}
	
	function hola(){
		var valor = document.getElementById("valor").value;
		alert(valor);
	};