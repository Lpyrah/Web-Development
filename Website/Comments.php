
<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
	
	<?php 
		$sql = "SELECT UserID,CommentContent FROM comments";
		$result = $con->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				
						$sql1 = "SELECT Username FROM users WHERE UserId = '$row[UserID]'";
						$result1 = $con->query($sql1);
						$row1 = $result1->fetch_assoc();
						
						echo "</br>";
						echo $row["CommentContent"];
						echo "</br>";
						echo "Comment left by: " . $row1['Username'];
						echo "</br>";
						
				}
		}
	?>
		<form action="Albums.php" method="post">
			<br>
			<div class="form-group border border-dark">
				<label for="exampleTextarea">Please leave a comment:</label>
				<textarea name="comment" class="form-control" id="exampleTextarea" rows="3"></textarea>
				<button type="submit" class="mt-3 btn btn-primary active">Submit</button>
			</div>
		</form>
	</div>
	<div class="col-lg-4"></div>
</div>