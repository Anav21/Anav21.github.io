<?php
   $hostName = "localhost";
   $databaseName = "stream";
   $username = "coolaid2";
   $password = "itsgreat";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
