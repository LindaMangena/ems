<?php
                     $sql_fetch = "SELECT * FROM `employee_info` WHERE Admin!='Yes'";
                     $sql_data  = mysqli_query($conn, $sql_fetch);
                     $position_num = 0;
                         while($rows = mysqli_fetch_array($sql_data,MYSQLI_ASSOC)) {

                             $employeeUser = $rows['employee_ID'];
                             $employee_Name = ucfirst($rows['name']);
                             $employee_Surname = ucfirst($rows['surname']);
                             $employee_Positionn = ucfirst($rows['position']);
                             $employee_StartDate = $rows['start-date'];
                             $employee_Number = $rows['employee_number'];
                             $firstUserCharater = substr($employee_Name, 0, 1);
                             $position_num++;

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


                    ?>