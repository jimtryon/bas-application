<?php

    $username='alex_brd15';
    $password='blackraindrops15';

    try {

        $dbh = new PDO('mysql:host=192.185.191.51;dbname=alex_bas', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $getUsers = $dbh->prepare("SELECT * FROM students ORDER BY id ASC"); 
              $getUsers->execute();
              $users = $getUsers->fetchAll();
              
              // print column names.. not used 
              /*
              $rs = $dbh->query('SELECT * FROM students LIMIT 0');
for ($i = 0; $i < $rs->columnCount(); $i++) {
    $col = $rs->getColumnMeta($i);
    $columns[] = $col['name'];
}
print_r($columns);
            */
             /*
              foreach ($users as $user) {
                 echo $user['fname'] . '<br />';
                }
              */
       // echo "Success";	//Comment this out once you've tested your connection
    }

    catch (PDOException $e) {

        die( "Error!: " . $e->getMessage());
    }

?>