	$("#btnAgrega").click(function upload_image(){//Funcion encargada de enviar el archivo via AJAX
				
				$(".upload-msg").text('Cargando...');
				var inputFileImage = document.getElementById("imageUpload");
				alert(document.getElementById("imageUpload").value);
				var file = inputFileImage.files[0];
				alert(file);
				var data = new FormData();
				data.append('imageUpload',file);
				
				/*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
					data.append('file'+i, file);
				});*/
							
				$.ajax({
					url: "uploadImage.php",        // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						alert("hola2");
					}
				});
				
			});