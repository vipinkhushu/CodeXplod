$(document).ready(function(){
	$('#usersCode').submit(function(e){
			e.preventDefault();
			var $toastContent = $('<span style="color:green;">Code Sent For Comilation,Please Wait</span>');
			var $toastContent0 = $('<span style="color:green;">Code successfully compiled</span>');
			var $toastContent1 = $('<span style="color:red;">Comilation error, Please try again</span>');
			
			
  			Materialize.toast($toastContent, 4000);
			$("div#divLoading").addClass('show');
			var language = $("[name=language]").val();
			var code = editor.getValue();
			console.log(language);
			console.log(code);
			$.ajax({
					type: "POST",
					url: "sdk/index.php",
					data: { language:language,code:code },
					success: function(data)
						{
									console.log("AJAX DONE SUCCESSFULLY");
									console.log(data);
									var jsonparsed = JSON.parse(data);
									if(jsonparsed.compile_status=="OK"){
										Materialize.toast($toastContent0, 4000);
										$("#outputScreen").html('<b>YOUR OUTPUT</b><br>');
										$("#outputScreen").append(jsonparsed.run_status.output_html);
									}else{
										Materialize.toast($toastContent1, 4000);
										$("#outputScreen").html('<b>YOUR OUTPUT</b><br>');
										$("#outputScreen").append('<span style="color:red;">'+jsonparsed.run_status.status_detail+'</span><br>');
										$("#outputScreen").append('<span style="color:red;">'+jsonparsed.compile_status+'</span>');	
									}
									$("div#divLoading").removeClass('show');
									
									
						}	
			
				});	
			});	
	});