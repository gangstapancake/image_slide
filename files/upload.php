
<?php
// connect and login to FTP server
require("ftpconnect.php");

$file = "localfile.txt";

// upload file
if (ftp_put($ftp_conn, "serverfile.txt", $file, FTP_ASCII))
  {
  echo "Successfully uploaded $file.";
  }
else
  {
  echo "Error uploading $file.";
  }

// close connection
ftp_close($ftp_conn);
?>