<?php

			$target_dir = "img-usuario/"; // MUDA DIRETÓRIO
			$target_file = $target_dir . basename($_FILES["imagem"]["name"]); // PEGA O ARQUIVO
			$uploadOk = 1; // 1 QUER DIZER OK
			$extension = strtolower(pathinfo($_FILES["imagem"]["name"] ,PATHINFO_EXTENSION)); // PEGA EXTENSÃO
			//$newName = md5(uniqid("")).".".$extension; // GERA NOME ALEATORIO COM A EXTENSÃO
			$newName = $id.'.'.$extension;
			
			// VERIFICA SE IMAGEM É JPG
			if($extension != "jpg") {
					$uploadOk = 0;
			}
			
			// SE estiver ok, $uploadOk =1, move o arquivo
			if ($uploadOk == 0) {
				$m = "Error de Upload";
			} else {
				if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_dir.$newName)) {
                   // header("location: lista-clientes.php");
				} else {
					$m = "Error de Upload";
				}
			}

	?>