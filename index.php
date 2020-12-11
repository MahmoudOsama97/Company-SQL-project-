<?php
$conn=mysqli_connect('localhost', 'root', '','company');
if($conn)
   echo "You're connected to the db ";

  //if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
  //}
  
  // Create database
  //$sql = "CREATE DATABASE company";
  //if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
  //} else {
    //echo "Error creating database: " . $conn->error;
  //}

$sql1 = "CREATE TABLE person (PID INTEGER NOT NULL,
                            FNAME VARCHAR(10),
                            LNAME VARCHAR(10),
                            DOB DATE,
                            PRIMARY KEY (PID) );";
$sql2 = "CREATE TABLE Bank_Account (AccountNo INTEGER NOT NULL,
        PersonID INTEGER NOT NULL,
        BALANCE INTEGER,
        FOREIGN KEY (PersonID) REFERENCES person (PID),
        PRIMARY KEY (AccountNO, PersonID)  );";

$sql3 = "CREATE TABLE seller (S_ID INTEGER NOT NULL,
                              salary INTEGER ,
                              FOREIGN KEY (S_ID) REFERENCES person (PID),
                              PRIMARY KEY (S_ID)  );";

$sql4 =  "CREATE TABLE customer (CID INTEGER NOT NULL,
                              queueNB INTEGER ,
                              FOREIGN KEY (CID) REFERENCES person (PID),
                              PRIMARY KEY (CID)  );";

$sql5 =  "CREATE TABLE invoice (serialNB INTEGER NOT NULL,
                              PRIMARY KEY (serialNB)  );";

$sql6 =  "CREATE TABLE issue (rSerialNB INTEGER NOT NULL,
                              rCID INTEGER NOT NULL ,
                              rS_ID INTEGER NOT NULL ,
                              FOREIGN KEY (rCID) REFERENCES customer (CID),
                              FOREIGN KEY (rS_ID) REFERENCES seller (S_ID),
                              FOREIGN KEY (rSerialNB) REFERENCES invoice (serialNB),
                              PRIMARY KEY (rSerialNB,rCID,rS_ID)  );";

$sql7 =  "CREATE TABLE agreement (serial_NB INTEGER NOT NULL,
                       agree_date date ,
                       rCID INTEGER,
                       rS_ID INTEGER NOT NULL,
                       FOREIGN KEY (rS_ID) REFERENCES seller (S_ID),
                       FOREIGN KEY (rCID) REFERENCES customer (CID),
                      PRIMARY KEY (serial_NB)  );";

$sql8 =  "CREATE TABLE Service_ (ServiceID INTEGER NOT NULL,
                       rS_ID INTEGER NOT NULL ,
                       cost INTEGER,
                       rSerialNB INTEGER NOT NULL,
                       FOREIGN KEY (rS_ID) REFERENCES seller (S_ID),
                       FOREIGN KEY (rSerialNB) REFERENCES agreement (serial_NB),
                      PRIMARY KEY (ServiceID)  );";

$sql9 =  "CREATE TABLE invoice_item (code INTEGER NOT NULL,
                       serialNB INTEGER NOT NULL ,
                       FOREIGN KEY (serialNB) REFERENCES invoice (serialNB),
                       PRIMARY KEY (code)  );";

$sql10 =  "CREATE TABLE consist_of (rCode INTEGER NOT NULL,
                       rService_ID INTEGER NOT NULL,
                       FOREIGN KEY (rCode) REFERENCES invoice_item (code),
                       FOREIGN KEY (rService_ID) REFERENCES Service_ (ServiceID),
                       PRIMARY KEY (rCode,rService_ID)  );";

$query = mysqli_query($conn, $sql1);
$query1 = mysqli_query($conn, $sql2);
$query2= mysqli_query($conn, $sql3);
$query3 = mysqli_query($conn, $sql4);
$query4 = mysqli_query($conn, $sql5);
$query5 = mysqli_query($conn, $sql6);
$query6 = mysqli_query($conn, $sql7);
$query7 = mysqli_query($conn, $sql8);
$query8 = mysqli_query($conn, $sql9);
$query9 = mysqli_query($conn, $sql10);


  if($query)
   echo ".";


?>