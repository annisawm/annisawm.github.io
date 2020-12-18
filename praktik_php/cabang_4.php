<html>
	<head>
	</head>
	<body>
		<?php
			$tujuan = "Malang";
			
			echo "Mau main kemana? ".$tujuan. "<br>";
			echo "<br> Pesan : ";
			
			switch($tujuan){
				case "Batu":
					echo "<b>Jangan Lupa Bawa Jaket</b>";
					break;
				case "Bandung":
					echo "<b>Awas Kalau Belanja Laper Mata</b>";
					break;
				case "Bali":
					echo "<b>Pakai Sunblock SPF 50</b>";
					break;
				default : 
					echo "<b>Ya udah belajar aja</b>";
			}			
		?>
	</body>
</html>