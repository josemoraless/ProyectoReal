<?php
		echo '<script type="text/javascript">
		var txt;
var r = confirm("¿Estas seguro de que quiere cerrar sesión?");
if (r == true) {
		  	        window.location.href="cerrar.php";
		} else {
		          window.location.href="entrarAdmin.php";
		}
</script>';
	?>
