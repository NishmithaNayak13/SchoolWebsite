<?php
$db = new mysqli("localhost","root", "","school");
if ($db->connect_error) {
  die("Connection failure: " 
      . $db->connect_error);
}
?>

    <script>
  function confirmdel()
  {
    if(confirm("Are you sure want to delete this record?(Delected record cannot ge recovered)") == true)
    {
        return true;
    }
    else
    {
        return false;
    }
  }
  </script>
