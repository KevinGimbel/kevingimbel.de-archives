<?php
  $page_title = "Lists";
  $current_page = "lists";

  include('./includes/header.php');
?>

<script type="text/javascript">
	window.onload=function getCurrentHash() {
		var hash = window.location.hash.replace('#',''); 
		
		ol = new XMLHttpRequest();
		ol.open("GET", "content/"+ hash +".php",false); 
		ol.send(); // sending the data
		if(!hash) {
			document.getElementById('content').innerHTML = 'Select a list to view and enjoy my love for documenting things.';
		} else {
		document.getElementById('content').innerHTML = ol.responseText;
		}
	};

	function loadContent(file) {
		var d = document;
		var c = new XMLHttpRequest();
		c.open("GET","content/"+ file +".php",false);
	  c.send();
		
		if(c.readyState == 4 && c.status == "200") {
			d.getElementById('content').innerHTML = c.responseText;
		} else {
			var progress = "Fetching content for " + file + ".";
			d.getElementById('content').innerHTML = progress;
		}
	};
</script>	
<nav class="sub-menu">
	<a href="#books" onclick="loadContent('books')" class="submenu-item">Books</a>
	<a href="#concerts" onclick="loadContent('concerts')" class="submenu-item">Concerts</a>
	<a href="#games" onclick="loadContent('games')" class="submenu-item">Games</a>
	<a href="#music" onclick="loadContent('music')" class="submenu-item">Music</a>
</nav>
<section id="content">
	<p>Select a list to view and enjoy my love to document things.</p>
</section>
<?php include('./includes/footer.php'); ?>