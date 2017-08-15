$("#state").change(event=>{
	$.get("towns/"+event.target.value+"", function(data,sta){
		$("#town").empty();
		data.forEach(element=> {
			$("#town").append("<option value="+element.id+"> "+element.name+" </option>");
		});
	});
});
