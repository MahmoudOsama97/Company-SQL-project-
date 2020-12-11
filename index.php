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

/*$sql1 = "CREATE TABLE person (PID INTEGER NOT NULL,
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
   echo ".";*/

//$sql = "INSERT INTO person VALUES (0,'Tasnim','Ahmed','2018-10-20');";
$sql1 = "INSERT INTO person VALUES (1,'Mahmoud','Osama','2018-11-20');";
$sql2 = "INSERT INTO person VALUES (2,'Shreef','Mohamed','2018-12-20');";
$sql3 = "INSERT INTO person VALUES (3,'Mostafa','Amgad','2018-1-20');";
$query1 = mysqli_query($conn, $sql1);
$query2 = mysqli_query($conn, $sql2);
$query3 = mysqli_query($conn, $sql3);

$sql4 = "INSERT INTO seller VALUES (0,2000);";
$sql5 = "INSERT INTO seller VALUES (1,2500);";
$sql6 = "INSERT INTO customer VALUES (2,23);";
$sql7 = "INSERT INTO customer VALUES (3,15);";
$query4 = mysqli_query($conn, $sql4);
$query5 = mysqli_query($conn, $sql5);
$query6 = mysqli_query($conn, $sql6);
$query7 = mysqli_query($conn, $sql7);

$sql8 = "INSERT INTO Bank_Account VALUES (1,0,2000);";
$sql9 = "INSERT INTO Bank_Account VALUES (2,1,2500);";
$sql10 = "INSERT INTO Bank_Account VALUES (3,2,2300);";
$sql11 = "INSERT INTO Bank_Account VALUES (4,3,1500);";
$query8 = mysqli_query($conn, $sql8);
$query9 = mysqli_query($conn, $sql9);
$query10 = mysqli_query($conn, $sql10);
$query11 = mysqli_query($conn, $sql11);

$sql12 = "ALTER TABLE agreement ADD agreement_type INTEGER ;";
$query12 = mysqli_query($conn, $sql12);

$sql13 = "INSERT INTO invoice VALUES (0);";
$sql14 = "INSERT INTO invoice VALUES (2);";
$sql15 = "INSERT INTO invoice VALUES (3);";
$sql16 = "INSERT INTO invoice VALUES (4);";
$query13 = mysqli_query($conn, $sql13);
$query14 = mysqli_query($conn, $sql14);
$query15 = mysqli_query($conn, $sql15);
$query16 = mysqli_query($conn, $sql16);

$sql17 = "INSERT INTO issue VALUES (0,2,0);"; //tasnim seller, shreef cust
$sql18 = "INSERT INTO issue VALUES (2,3,1);";

$query17 = mysqli_query($conn, $sql17);
$query18 = mysqli_query($conn, $sql18);

$sql19 = "INSERT INTO agreement VALUES (1000,'2020-1-20',2,0,0);"; 
$sql20 = "INSERT INTO agreement VALUES (2000,'2020-1-20',3,1,1);";

$query19 = mysqli_query($conn, $sql19);
$query20 = mysqli_query($conn, $sql20);

$sql21 = "INSERT INTO Service_ VALUES (0,0,2400,1000);"; 
$sql22 = "INSERT INTO Service_ VALUES (1,1,3600,2000);";

$query21 = mysqli_query($conn, $sql21);
$query22 = mysqli_query($conn, $sql22);

$sql23 = "INSERT INTO invoice_item VALUES (10,0);"; 
$sql24 = "INSERT INTO invoice_item VALUES (20,2);";

$query23 = mysqli_query($conn, $sql23);
$query24 = mysqli_query($conn, $sql24);

$sql25 = "INSERT INTO consist_of VALUES (10,0);"; 
$sql26 = "INSERT INTO consist_of VALUES (20,1);";

$query25 = mysqli_query($conn, $sql25);
$query26 = mysqli_query($conn, $sql26);

$sql27 = "DELETE FROM invoice WHERE serialNB=3;";
$sql28 = "UPDATE invoice SET serialNB=6 WHERE serialNB=4;";

$query27 = mysqli_query($conn, $sql27);
$query28 = mysqli_query($conn, $sql28);


if($query28)
  echo"done";
?>