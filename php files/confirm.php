

<?php
		$str = file_get_contents('temp.txt') or die('ERROR: Cannot find file');
		$handle = fopen("bookings.txt", "a" );
        $temp = fopen("temp.txt", "w" ); 		
		fwrite($handle, $str);
		fwrite($temp, "");
		fclose( $handle );
		fclose( $temp );
		echo "test";
		readfile("index.html");
		
?>
<script>
alert("Your booking was recored. Thank you!")
</script>