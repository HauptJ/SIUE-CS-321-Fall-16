<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=Zurg', 'ZurgUser', 'Dr4g0n!3');
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?> 
