	
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script>
		$(document).ready(function() {
			$(".eliminar-usuario").click(function (){
				$id = $(this).attr("data-id");
				if(confirm("¿Esta seguro?")){
					window.location.replace("eliminar.php?id="+$id);
				}
			});
		});
	</script>
</body>
</html>