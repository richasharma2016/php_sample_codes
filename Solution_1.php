<?php
// Make a MySQL Connection
mysql_connect("localhost", "user", "password") or die(mysql_error());
mysql_select_db("test") or die(mysql_error());

//finding the age and corresponding count for maximum number of members
$age_with_max_count=mysql_query("select age_as_integer,count(age_as_integer) as count_age from member group by age_as_integer order by count_age desc limit 1") or die(mysql_error());
$resultant_row = mysql_fetch_array($age_with_max_count) or die(mysql_error());
$resultant_age=$resultant_row['age_as_integer'];
echo "Age with most number of members : ".$resultant_age;

?>
