<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbdumping", $con);

$sql="INSERT INTO maklumat (m_tarikh, m_masa, m_taman, m_jalan, m_lokasi, m_ulasan)
VALUES
('$_POST[tarikh]','$_POST[masa]','$_POST[tmn]', '$_POST[jalan]', '$_POST[lokasi]','$_POST[ulasan]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
