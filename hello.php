<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	
	$str = $_REQUEST['Body'];
	$sender = strtolower($str); 
	
	if ($sender == 'hello') {
		$message = "hello from cs6432015 from Enrique Paz";
	} else {
		$message = "A hello would have been nice";
	}
?>
<Response>
    <Message><?php echo $message ?></Message>
</Response>