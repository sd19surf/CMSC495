<?php

//include('session.php'); no longer required since it's hooked up to map.php

	// retrieve messages query will have to retrieve avatar image as well.
	// so query both tables and match userid to userid and get icon

	// tune this query to 
  $query = $conn->query("SELECT u.Icon, u.username , m.messages, m.lat, m.lon, m.timeposted FROM user u, messages m WHERE u.UserId=m.UserId");

	//return as JSON and provide to leaflet and process there?


	//test script

 $rows = array();
   while ($r = mysqli_fetch_assoc($query)) {
     $rows[] = $r;
   }

   $_SESSION['Messages'] = json_encode($rows);

 //print json_encode($rows);

 $close = $conn->close();

?>