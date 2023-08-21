<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laporan</title>
	
</head>
<body>
<embed type="application/pdf" src="<?php echo base_url(). '/file_upload/'.$queryDetailFile->file?>" width="100%" height="1500"></embed>
</body>

</html>

