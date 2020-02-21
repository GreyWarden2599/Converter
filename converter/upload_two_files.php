<?php

if (isset($_POST['TFsubmit'])){
	$file = $_FILES['first-file'];
	$fileName = $_FILES['first-file']['name'];
	$fileTmpName = $_FILES['first-file']['tmp_name'];
	$fileSize = $_FILES['first-file']['size'];
	$fileError = $_FILES['first-file']['error'];
	$fileType = $_FILES['first-file']['type'];
		
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$file = $_FILES['second-file'];
	$fileSecondName = $_FILES['second-file']['name'];
	$fileSecondTmpName = $_FILES['second-file']['tmp_name'];
	$fileSecondSize = $_FILES['second-file']['size'];
	$fileSecondError = $_FILES['second-file']['error'];
	$fileSecondType = $_FILES['second-file']['type'];
	
	$fileSecondExt = explode('.', $fileSecondName);
	$fileSecondActualExt = strtolower(end($fileSecondExt));
	
	$allowed = array('mp3');
	
	if (in_array($fileActualExt, $allowed)) {

		if ($fileError === 0) {
			
			if ($fileSize < 100000000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$fileSecondNameNew = uniqid('', true).".".$fileSecondActualExt;
				$fileSecondDestination = 'uploads/'.$fileSecondNameNew;
				move_uploaded_file($fileSecondTmpName, $fileSecondDestination);
				
				include_once "phpmp3.php";
				
				$path = $fileDestination;
				$path1 = $fileSecondDestination;
				$mp3 = new PHPMP3($path);

				$newpath = 'downloads/dual_file.mp3';
				$mp3->striptags();

				$mp3_1 = new PHPMP3($path1);
				$mp3->mergeBehind($mp3_1);
				$mp3->striptags();
				$mp3->setIdv3_2('01','Track Title','Artist','Album','Year','Genre','Comments','Composer','OrigArtist','Copyright','url','encodedBy');
				$mp3->save($newpath);
				
				header("Location: index.php?uploadsuccess");
				
			} else {
				echo "Oy gevalt! File must not be bigger then 1 GB!";
			}
		} else {
			echo "Oy gevalt! We cannot upload your file !";
		}
	} else {
		echo "Oy vey, we work only with .mp3 !";
	}
	
}

?>