$("#t_akhir").datetimebox({  
    value: '3/4/2010 2:3',  
    required: true,  
    showSeconds: true
});

$('#savebtn').on('click', function(event){
	var data = $("#t_akhir").datetimebox('getValue');

    $.ajax({
		url	: 'action.php',
        type: 'POST',
        data: {
           dateTimeData: data
        },
        dataType: 'text',
		success: function(data, type){
			console.log("Server Message: "+data);
            //alert('Server Message:'+data);
		},
        error: function(jqx, status, err){
            console.log("Error: "+status+"\n"+err);
        }
	});
})
