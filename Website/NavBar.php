<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="Index.php">Beartooth</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

  <div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav navbar-right mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="News.php">News </a> 
		</li>
		<li class="nav-item">
			<a class="nav-link" href="Albums.php">Albums</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="UKTour.php">Tour</a>
		</li>
		<?php 
			if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['Username'])){
				echo "<li class='nav-item'>";
				echo "<a class='nav-link' href='logout.php'>Log out</a>";
				echo "</li>";
			}else{
				echo "<li class='nav-item'>";
				echo "<a class='nav-link' href='Login.php'>Log In</a>";
				echo "</li>";
			}
			
			if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['AdminPriv']) && $_SESSION['AdminPriv'] == 't'){
				echo "<li class='nav-item'>";
				echo "<a class='nav-link' href='AdminPage.php'>Admin</a>";
				echo "</li>";
			}
		?>
		</ul>

    </form>
  </div>
</nav>