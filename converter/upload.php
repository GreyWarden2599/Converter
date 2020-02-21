<?php

if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	print_r($file);
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	$fileFirst = $_POST['time-first'];
	$fileLast = $_POST['time-last'];
	
	
	echo $fileName;
	echo $fileTmpName;
	echo $fileSize;
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('mp3');
	
	if (in_array($fileActualExt, $allowed)) {

		if ($fileError === 0) {
			
			if ($fileSize < 100000000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				include_once "phpmp3.php";
				$path = $fileDestination;
				$mp3 = new PHPMP3($path);
				$mp3_1 = $mp3->extract($fileFirst, $fileLast);
				$mp3_1->save('downloads/FILE.mp3');
				header("Location: index.php?uploadsuccess");
				
			} else {
				echo "File must not be bigger then 1 GB!";
			}
		} else {
			echo "We cannot upload your file !";
		}
	} else {
		header("Location: index.php?uploadsuccess");
	}
	
}

?>

