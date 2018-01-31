
<?php

$pdo = new PDO('mysql:host=localhost;dbname=uno', 'pedro', '79542880', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
));
 try{

  //Query 1: Attempt to insert the payment record into our database.
    $sql = "select *  from tbl_users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

}


catch(Exception $e){
    //An exception has occured, which means that one of our database queries
    //failed.
    //Print out the error message.
    echo $e->getMessage();
    //Rollback the transaction.
    
}