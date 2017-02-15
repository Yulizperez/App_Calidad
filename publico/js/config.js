$(document).ready(function()
{
	$(".btn-Eliminar").click(function(e)
	{

		var padre=$(this).closest("tr");
		var id=$(this).data("id");
		var modelo=$(this).data("modelo");
		e.preventDefault;

		$("#msgDelete").modal({backdrop:'static',keyboard:'false'}).one('click',"#eliminar",function(e)
		{
				$.ajax({
					 url:modelo+"/Eliminar/"+id_empleado,
					 success:function(){
					 	$(padre.fadeIn().remove());
					 }
				})
			});
		return false;
	});
});