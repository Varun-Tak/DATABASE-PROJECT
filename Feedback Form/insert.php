<?php


$Registration_no =$_POST['Registration_no'];
$Academic_year =$_POST['Academic_year'];
$Semester =$_POST['Semester'];
$Date =$_POST['Date'];
$Branch =$_POST['Branch'];


$SyDBMS =$_POST['SyDBMS'];
$SyCN =$_POST['SyCN'];
$SyDSA =$_POST['SyDSA'];
$SyTIS =$_POST['SyTIS'];
$SyMI =$_POST['SyMI'];

$E1DBMS =$_POST['E1DBMS'];
$E1CN =$_POST['E1CN'];
$E1DSA =$_POST['E1DSA'];
$E1TIS =$_POST['E1TIS'];
$E1MI =$_POST['E1MI'];

$E2DBMS =$_POST['E2DBMS'];
$E2CN =$_POST['E2CN'];
$E2DSA =$_POST['E2DSA'];
$E2TIS =$_POST['E2TIS'];
$E2MI =$_POST['E2MI'];

$E3DBMS =$_POST['E3DBMS'];
$E3CN =$_POST['E3CN'];
$E3DSA =$_POST['E3DSA'];
$E3TIS =$_POST['E3TIS'];
$E3MI =$_POST['E3MI'];

$E4DBMS =$_POST['E4DBMS'];
$E4CN =$_POST['E4CN'];
$E4DSA =$_POST['E4DSA'];
$E4TIS =$_POST['E4TIS'];
$E4MI =$_POST['E4MI'];

$E5DBMS =$_POST['E5DBMS'];
$E5CN =$_POST['E5CN'];
$E5DSA =$_POST['E5DSA'];
$E5TIS =$_POST['E5TIS'];
$E5MI =$_POST['E5MI'];

$CRDBMS =$_POST['CRDBMS'];
$CRCN =$_POST['CRCN'];
$CRDSA =$_POST['CRDSA'];
$CRTIS =$_POST['CRTIS'];
$CRMI =$_POST['CRMI'];

$LRDBMS =$_POST['LRDBMS'];
$LRCN =$_POST['LRCN'];
$LRDSA =$_POST['LRDSA'];
$LRTIS =$_POST['LRTIS'];
$LRMI =$_POST['LRMI'];


$REMARKS =$_POST['REMARKS'];

$CGPA =$_POST['CGPA'];

$ATTENDANCE =$_POST['ATTENDANCE'];

$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "feedback";
        $conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
        if (!$conn) {
            die('Could not connect to the database.');
        }
        else
        {   
           
            $sql = "INSERT INTO `student` (`Registration_no`, `Academic_year`, `Semester` ,`Date`,`Branch`) VALUES ('$Registration_no', '$Academic_year', '$Semester','$Date','$Branch')";
            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `Coursse_complete` (`Course_id`,`Sy`,`Un_id`) VALUES ('DBMS','$SyDBMS','NULL')";
            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `Coursse_complete` (`Course_id`,`Sy`,`Un_id`) VALUES ('MI','$SyMI','NULL')";
            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `Coursse_complete` (`Course_id`,`Sy`,`Un_id`) VALUES ('CN','$SyCN','NULL')";
            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `Coursse_complete` (`Course_id`,`Sy`,`Un_id`) VALUES ('DSA','$SyDSA','NULL')";
            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `Coursse_complete` (`Course_id`,`Sy`,`Un_id`) VALUES ('TIS','$SyTIS','NULL')";
            $result = mysqli_query($conn, $sql);
            
            $sql = "INSERT INTO `connection` (`Registration_no`, `U_id`) VALUES ('$Registration_no','NULL')";
            $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO `connection` (`Registration_no`, `U_id`) VALUES ('$Registration_no','NULL')";
            $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO `connection` (`Registration_no`, `U_id`) VALUES ('$Registration_no','NULL')";
            $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO `connection` (`Registration_no`, `U_id`) VALUES ('$Registration_no','NULL')";
            $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO `connection` (`Registration_no`, `U_id`) VALUES ('$Registration_no','NULL')";
            $result = mysqli_query($conn, $sql);

             
            $sql = "INSERT INTO `rating` ( `U_id`,`Course_id`,`E1`,`E2`,`E3`,`E4`,`E5`,`CR`,`LR`) VALUES ('NULL','DBMS','$E1DBMS','$E2DBMS','$E3DBMS','$E4DBMS','$E5DBMS','$CRDBMS','$LRDBMS')";
            $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO `rating` ( `U_id`,`Course_id`,`E1`,`E2`,`E3`,`E4`,`E5`,`CR`,`LR`) VALUES ('NULL','MI','$E1MI','$E2MI','$E3MI','$E4MI','$E5MI','$CRMI','$LRMI')";
            $result = mysqli_query($conn, $sql);


            $sql = "INSERT INTO `rating` ( `U_id`,`Course_id`,`E1`,`E2`,`E3`,`E4`,`E5`,`CR`,`LR`) VALUES ('NULL','CN','$E1CN','$E2CN','$E3CN','$E4CN','$E5CN','$CRCN','$LRCN')";
            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `rating` ( `U_id`,`Course_id`,`E1`,`E2`,`E3`,`E4`,`E5`,`CR`,`LR`) VALUES ('NULL','DSA','$E1DSA','$E2DSA','$E3DSA','$E4DSA','$E5DSA','$CRDSA','$LRDSA')";
            $result = mysqli_query($conn, $sql);

            
            $sql = "INSERT INTO `rating` ( `U_id`,`Course_id`,`E1`,`E2`,`E3`,`E4`,`E5`,`CR`,`LR`) VALUES ('NULL','TIS','$E1TIS','$E2TIS','$E3TIS','$E4TIS','$E5TIS','$CRTIS','$LRTIS')";
            $result = mysqli_query($conn, $sql);


            $sql = "INSERT INTO `remarks` (`U_id`, `Attendance`,`CGPA`,`Remarks`) VALUES ('NULL','$ATTENDANCE','$CGPA','$REMARKS')";
            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `connection2` (`U_id`, `Registration_no`) VALUES ('NULL','$Registration_no')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "FeedBack Completed";
              }
              else{
                  // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                  echo "connection failed";
              }
      
            }
      
          
      
          
      ?>








            
            



        




