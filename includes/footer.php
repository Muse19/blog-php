<!-- FOOTER -->

	<footer class="pie text-center text-md-right bg-dark text-white">
		<div class="container">
			<p class="m-0 py-3">Copyright © 2018. Todos los derechos reservados. </p>
			
		</div>
		
	</footer>



	<!-- ARCHIVOS JAVASCRIPT BOOTSTRAP 4 -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>


				

	<script>	
		$('#formulario').submit(function(ev){
		    ev.preventDefault()
		    $.ajax({
				  method: "POST",
				  url: "verificar.php",
		  		dataType: 'html',
		  		data: { name: "Pedro" }
				}).done(function(data) {
				  console.log(data); // imprimimos la respuesta
				}).fail(function() {
				  console.log("Algo salió mal");
				}).always(function() {
				  console.log("Siempre se ejecuta")
				});
		})
	</script>


  </body>
</html>