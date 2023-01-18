<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Image</title>
	<link rel="stylesheet" href="">
	<style>
		#result{
			display: flex;
			gap: 10px;
			padding: 10px 0;
		}
		.thumbnail{
			height: 192px;
		}

	</style>
</head>
<body>
	<label for="Files">Select Multiple Files</label>
	<input type="file" id ="files" multiple = "multiple" accept="image/jpeg, image/png, image/jpg">
	<output id = "result"></output>
	<script>
		document.querySelector("#files").addEventListener("change", (e)=>{
			if(window.File && window.FileReader && window.FileList && window.Blob){
				const files = e.target.files;
				const output = document.querySelector("#result");

				for(let i=0; i<files.length; i++){
					if(!files[i].type.match("image")) continue;
					const picReader = new FileReader();

					picReader.addEventListener("load", function(event){

						const picFile = event.target;
						const div = document.createElement("div");
						div.innerHTML = '<img class = "thumbnail" src =" ${picFile.result}" title = "${picFile.name}"/>';
						output.appendChild(div);
					})
					picReader.readAsDataURL(files[i]);
				}
			}
			else{
				alert("Your Browser dose not support the File API")
			}
		})
	</script>
</body>
</html>