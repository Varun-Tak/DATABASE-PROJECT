<?php

$addperm="Permanent";
$addcorr="Correspondence";
$fee_coun="At COunselling";
$fee_repo="At Reporting";
$class_ten="Tenth";
$class_twelve="Twelth";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $image = $_FILES['image']['name'];
  $username_eng = $_POST['username_eng'];
  $username_hin = $_POST['username_hin'];
  $gender = $_POST['gender'];
  $bloodgroup = $_POST['bloodgroup'];
  $DOB = $_POST['DOB'];

  $phone1 = $_POST['phone1'];
  $phone2 = $_POST['phone2'];
  $email = $_POST['email'];
  $adhaar = $_POST['adhaar'];

  $fname = $_POST['fname'];
  $foccup = $_POST['foccup'];
  $mname = $_POST['mname'];
  $moccup = $_POST['moccup'];
  $Branch = $_POST['Branch'];

  $Minority_Detail = $_POST['Minority_Detail'];
  $Physically_Disabled = $_POST['Physically_Disabled'];
  $Round_of_Allotment = $_POST['Round_of_Allotment'];
  $jee_roll = $_POST['jee_roll'];
  $jee_rank = $_POST['jee_rank'];
  $jee_mark = $_POST['jee_mark'];
  $jee_year = $_POST['jee_year']; 

  $allot_cat = $_POST['allot_cat'];
  $cand_cat = $_POST['cand_cat'];
  $dd_coun = $_POST['dd_coun'];
  $date_coun = $_POST['date_coun'];
  $amt_coun = $_POST['amt_coun'];
  $dd_repo = $_POST['dd_repo'];

  $date_repo = $_POST['date_repo'];
  $amt_repo = $_POST['amt_repo'];

  $Hostel_Required = $_POST['Hostel_Required'];
  $Seat_Allotment_Letter = $_POST['Seat_Allotment_Letter'];
  $Jee_Rank_Card = $_POST['Jee_Rank_Card'];
  $Photo_Id_Proof = $_POST['Photo_Id_Proof'];
  $DOB_proof = $_POST['DOB_proof']; 

  $mark_sheet = $_POST['mark_sheet'];
  $income_Certificate = $_POST['income_Certificate'];
  $Category_Certificate = $_POST['Category_Certificate'];
  $Cast_Validity = $_POST['Cast_Validity'];
  $OBC_Cerificate = $_POST['OBC_Cerificate'];
  $Transfer_Certificate = $_POST['Transfer_Certificate'];

  $Migration_Certificate = $_POST['Migration_Certificate'];
  $Gap_Certificate = $_POST['Gap_Certificate'];
  $Scanned_Copies = $_POST['Scanned_Copies'];
  $housenumcorr = $_POST['housenumcorr'];
  $streetnamecorr = $_POST['streetnamecorr'];
  $citynamecorr = $_POST['citynamecorr'];
        $statenamecorr = $_POST['statenamecorr']; //361

        $pincodenamecorr = $_POST['pincodenamecorr'];
        $mobNocorr = $_POST['mobNocorr'];
        $housenumperm = $_POST['housenumperm'];
        $streetnameperm = $_POST['streetnameperm'];


        $citynameperm = $_POST['citynameperm'];
        $statenameperm = $_POST['statenameperm'];
        $pincodenameperm = $_POST['pincodenameperm'];
        $mobNoperm = $_POST['mobNoperm'];
        $nameofboardten = $_POST['nameofboardten'];
        $yearofpassten = $_POST['yearofpassten'];
        $marksobtainedten = $_POST['marksobtainedten'];
        $percentageten = $_POST['percentageten'];
        $nameofboardtwl = $_POST['nameofboardtwl'];
        $yearofpasstwl = $_POST['yearofpasstwl'];

        $marksobtainedtwl = $_POST['marksobtainedtwl'];
        $percentagetwl = $_POST['percentagetwl'];
        $tenth_marksheet = $_POST['tenth_marksheet'];
        $twlth_marksheet = $_POST['twlth_marksheet'];
        $Scanned_adhaar = $_POST['Scanned_adhaar'];

        $PWD_Certificate = $_POST['PWD_Certificate'];
        $EWS_Certificate = $_POST['EWS_Certificate'];

        $decl = $_POST['decl'];
        $sign = $_FILES['sign']['name'];
        
        //Migration_Certificate


      // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "finaldb";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{ 

          if(mysqli_multi_query($conn,
            "INSERT INTO REGISTRATION_DETAILS (`image`,`username_eng`, `username_hin`, `gender`, `bloodgroup`, `DOB`, `phone1`, `phone2`, `email`, `adhaar`, `fname`, `foccup`, `mname`, `moccup`, `Branch`, `Minority_Detail`, `Physically_Disabled`, `Round_of_Allotment`, `jee_roll`, `jee_rank`, `jee_mark`, `jee_year`, `allot_cat`, `cand_cat`,  `Hostel_Required`, `Seat_Allotment_Letter`, `Jee_Rank_Card`, `Photo_Id_Proof`, `DOB_proof`,`mark_sheet`, `income_Certificate`, `Category_Certificate`, `Cast_Validity`, `OBC_Cerificate`, `Transfer_Certificate`, `Migration_Certificate`, `Gap_Certificate`, `Scanned_Copies`,    `Scanned_adhaar`,  `PWD_Certificate`, `EWS_Certificate`,`decl`,`sign`) VALUES ('$image','$username_eng', '$username_hin', '$gender', '$bloodgroup',  '$phone1', '$phone2', '$email', '$adhaar', '$fname', '$foccup', '$mname', '$moccup', '$Branch', '$Minority_Detail', '$Physically_Disabled', '$Round_of_Allotment', '$jee_roll', '$jee_rank', '$jee_mark', '$jee_year', '$allot_cat', '$cand_cat',   '$Hostel_Required', '$Seat_Allotment_Letter', '$Jee_Rank_Card', '$Photo_Id_Proof', '$DOB_proof','$mark_sheet', '$income_Certificate', '$Category_Certificate', '$Cast_Validity', '$OBC_Cerificate', '$Transfer_Certificate', '$Migration_Certificate', '$Gap_Certificate', '$Scanned_Copies',      '$Scanned_adhaar', '$Category_Certificate', '$PWD_Certificate', '$EWS_Certificate','$decl','$sign');
            INSERT INTO ADDRESS (`address_type`,`jee_roll`,`HouseNo`, `Street`, `City`, `State`, `Pincode`, `MobileNo`) VALUES ('$addcorr','$jee_roll','$housenumcorr', '$streetnamecorr', '$citynamecorr', '$statenamecorr', '$pincodenamecorr', '$mobNocorr');
            INSERT INTO ADDRESS (`address_type`,`jee_roll`,`HouseNo`, `Street`, `City`, `State`, `Pincode`, `MobileNo`) VALUES ('$addperm','$jee_roll','$housenumperm', '$streetnameperm', '$citynameperm', '$statenameperm', '$pincodenameperm', '$mobNoperm');
            INSERT INTO FEE_DETAILS (`fees_type`,`jee_roll`,`dd_ecs_no`, `date`, `amount`) VALUES ('$fee_coun','$jee_roll','$dd_coun', '$date_coun', '$amt_coun');
            INSERT INTO FEE_DETAILS (`fees_type`,`jee_roll`,`dd_ecs_no`, `date`, `amount`) VALUES ('$fee_repo','$jee_roll','$dd_coun', '$date_coun', '$amt_coun');
            INSERT INTO EDUCATION (`class`,`jee_roll`,`Board`, `PassYear`, `TotalMarks`,  `Percentage`,`Marksheet`) VALUES ('$class_ten','$jee_roll','$nameofboardten', '$yearofpassten', '$marksobtainedten', '$percentageten','$tenth_marksheet');
            INSERT INTO EDUCATION (`class`,`jee_roll`,`Board`, `PassYear`, `TotalMarks`,  `Percentage`,`Marksheet`) VALUES ('$class_twelve','$jee_roll','$nameofboardtwl', '$yearofpasstwl', '$marksobtainedtwl', '$percentagetwl','$twlth_marksheet');

            "))

          {
           echo "Inserted";
         }
         else{
           echo "Not Inserted";
         }
       }

     }


     ?>

