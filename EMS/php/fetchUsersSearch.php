<?php

include('connect.php');
$inputed_get = $_POST['search'];


                    $fetch = "SELECT * FROM `employee_info` WHERE `username` LIKE '%$inputed_get%' OR `name` LIKE '%$inputed_get%' OR `surname`LIKE '%$inputed_get%' ";
                    $results  = mysqli_query($conn, $fetch);
                    

                    if (mysqli_fetch_array($results) > 0){

                        while($rows = mysqli_fetch_array($results,MYSQLI_ASSOC)) {

                             $employeeUser = $rows['employee_ID'];
                             $employee_Name = ucfirst($rows['name']);
                             $employee_Surname = ucfirst($rows['surname']);
                             $employee_Positionn = ucfirst($rows['position']);
                             $employee_StartDate = $rows['start-date'];
                             $employee_Number = $rows['employee_number'];
                             $firstUserCharater = substr($employee_Name, 0, 1);


                             echo 
                             "
                    <div id='scroll2' class='employeeConatiner'>
                        <div class='employeeFirstLetter'>
                            $firstUserCharater
                        </div>
                        <div class='employeeName'>
                            <b>$employee_Name $employee_Surname <span class='employee_number'>
                            $employee_Number</span></b>
                            <br>
                            <span><img src='assets/position.svg'>
                                $employee_Positionn</span>
                            <br>
                            <span><img src='assets/start-date.svg'>
                                $employee_StartDate</span> 
                        </div>
                    </div>

                             ";

                         }
                    }
                    else{
                        echo "<div class='user_not'>Username or Name not found... <br> <img class='user_notFound' src='assets/404-stone-age-man-small.gif'</div>";
                    }

                    ?>