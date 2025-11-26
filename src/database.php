<?php
// connect to the database
$connection = mysqli_connect(
    "db",
    "progearhub",
    "password",
    "ProGearHub"
);
if( !$connection ) {
    echo "database connection failed";
    exit();
}
else {
    // echo "database connection is successful";
}
?>