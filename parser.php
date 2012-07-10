<?php
	set_time_limit(210000);
	$link = mysql_connect('localhost', 'sdsprac', 'sdslabstest');
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
	$db = mysql_select_db('jcop');
	$query = "select * from alloted";
	$result = mysql_query($query);
	while($r = mysql_fetch_assoc($result)){
		echo "<tr><td>".$r["cml"]."</td><td>".$r["category"]."</td><td>".$r["category_rank"]."</td><td>".$r["name"]."</td><td>".$r["alloted"]."</td><td>".$r["alloted2"]."</td><td>".$r["alloted3"]."</td></tr>";
	}
	mysql_close($link);
?>
<tr><td>CML Rank</td><td>Category</td><td>Category Rank</td><td>Name</td><td>Alloted 1</td><td>Alloted 2</td><td>Alloted 3</td>