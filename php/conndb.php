<?php

	$connect = mysqli_connect('mio_dbserver','root','ciccio','demo');
	$query = "SELECT * FROM blogs";
	$result = mysqli_query($connect,$query);

	echo "<h1>SQL Content</h1>";

	while($row = mysqli_fetch_assoc($result)){
	    
	    echo '<h2>'.$row['title']. '</h2>';
	    echo '<h2>'.$row['content']. '</h2>';
	    echo '<h2>'.$row['date']. '</h2>';
	    echo '<hr>';
	}

?>
