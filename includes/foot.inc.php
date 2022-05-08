Jonas Stolt
		<script>
			var today = new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //Januari är 0.
			var yyyy = today.getFullYear();

			today = '<br />' + yyyy + '-' + mm + '-' + dd;
			document.write(today);
		</script>