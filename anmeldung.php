<html>
	<body>
		
		<?php
			$host="127.0.0.1";
			$user="root";
			$neueZeile="\n";
			
			$con=mysqli_connect($host,$user,"");
			mysqli_select_db($con,"shs");
			$result=mysqli_query($con,"Select K_ID, Kname from klassen");
			while ( $row = mysqli_fetch_array ( $result )) {
				echo $row ["K_ID"];
				echo "  ";
				echo $row ["Kname"];
				echo "<br>";
			}
		?>
	</body>
</html>