<?php


	
          session_start();
	if(isset($_session["1234"])) {

	echo "Bienvenido ".$_session["usuario"];
}
	else{
		echo "Bienvenido";
        }
	

?>
  
          

 