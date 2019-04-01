<?php

	if( isset( $_POST['submit']) )
	{
		$file = $_FILES['file' ] ;
		
		print_r( $file ) ;
		
		$file_name = $file['name'] ;
		$file_tmpName  = $file['tmp_name'] ;
		$file_size = $file['size'] ;
		$file_error = $file['error'] ;
		$file_type = $file['type'] ;
		
		$fileExt = explode( '.', $file_name ) ;
		$fileActualExt = strtolower( end( $fileExt) ) ;
		
		$file_error = 0 ;
		$file_nameNew = uniqid( '', true ).".".$fileActualExt ;
		
		$file_dest = "files/".$file_nameNew ;
		
		move_uploaded_file( $file_tmpName, $file_dest ) ;
		header( "Location: index.php?uploadcuccess" ) ;
		
		/*if( isset( $_FILE['file']['name'] ) || 1)
		{
			$file_name = $_FILES['file']['name'] ;
			$file_type = $_FILES['file']['type'] ;
			$file_size = $_FILES['file']['size'] ;
			$file_temp_loc = $_FILES['file']['tmp_name'] ;
			$file_store = "/files/".$file_name ;
			
			move_uploaded_file( $file_temp_loc, $file_store );
			
			echo "Done" ;
		}
		else
			echo "ER" ;
		*/
	}
?>
