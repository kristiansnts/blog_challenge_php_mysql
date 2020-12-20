	<!-- Footer -->
	<div class="footer">
		<span>Footer</span>
	</div>

<script>
	function show($id){
		if($id == false){
			document.getElementById('login').style.display= "none";
		}
	}

	function showdropdown(){
		document.getElementById("dropDown").classList.toggle("show");
	}

	window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

	

</script>

</body>
</html>