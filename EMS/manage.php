<?php

session_start();


if(!isset($_SESSION["sess_user"])) {
  header("Location: index.php");
  
} else
  
  {
    
     include('php/connect.php');
     $select_information_of_user = "SELECT * FROM `employee_info`  WHERE Username = '".$_SESSION['sess_user']."'";
     $results = mysqli_query($conn,$select_information_of_user);
     $row = mysqli_fetch_array($results);
     

       $admin_name = $row['name'];
       $admin_surname = $row['surname'];

       

    ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Employee Management System - Manage</title><!-- Adding the Title of page -->
        <link href="css/style.css" rel="stylesheet" type="text/css"><!-- Referencing the css location -->
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"><!-- Making Screen Responsive using meta-->
                <meta content="IE=edge" http-equiv="X-UA-Compatible">
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js">
                        </script>
    </head>
    <body>

        <div class="Admin_active">
            <?php echo "$admin_name $admin_surname"; ?> <img class="userName" src="assets/user.svg">
        </div>

        <div class="conatiner_double">

            <div class="side_menuContainer">

                <div id="employee" class="icon_imageContainer">
                    <img class="iconsSideMenu" src="assets/view_employeesIcon.svg"/>
                    Employees
                </div>

                <div id="Add_employee" class="icon_imageContainer">
                    <img class="iconsSideMenu" src="assets/add-user.svg"/>
                    Add
                </div>

                <div id="edit_employee" class="icon_imageContainer">
                        <img class="iconsSideMenu" src="assets/edit.svg"/>
                        edit
                    </div>

                    <div id="logoutAdmin" class="icon_imageContainer c">
                            <img class="iconsSideMenu c" src="assets/logout.svg">
                        </div>

            </div>

            <div class="menu_displayContainer">

                <div id="Search_employeeContent">

                <div class="searchInput_container">
                    <input class="searchInput" placeholder="Search for employee..." type="text" id="search_employee"/>
                </div>

                <div class="employeeList_container">
                    <div id="output"></div>
                    <div id='employee_ListView' class="employee_ListView">
                    <?php include("php/fetchUsers.php") ?>
                    </div>
                </div>
                </div>


                <div id="Add_employeeInputs" class="new_employee">
                    <img class="Digital_aLogo" src="assets/Digital-academy_Final-logo_wht.jpg">
                    <h4 class="Add_newEmployee_Header">Add new employee</h4>

                    <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Name :</div></div>
                    <input class="Add_input" type="text" id="Add_name">
                    </div>

                    <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Surname :</div></div>
                    <input class="Add_input" type="text" id="Add_surname">
                    </div>

                    <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Position :</div></div>
                    <input class="Add_input" type="text" id="Add_position">
                    </div>

                    <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Start-Date :</div></div>
                    <input class="Add_input" type="text" id="Add_startDate">
                    </div>

                    <button id="Add_new_employee" class="Add">Add</button>

                    <p id="output2"></p>
                </div>

                <div id="EditDeleteEmployee" class="newDE">

                    <img class="Digital_aLogo" src="assets/Digital-academy_Final-logo_wht.jpg">
                    <h4 id="output3" class="Add_newEmployee_Header">Edit employee</h4>

                    <select class="Add_input" id="getEmployeeToEdit" name="gender">
                         <option value="Choose">Choose an Employee</option>
                         <?php

                          $chooseEmployeeToEdit = "SELECT * FROM `employee_info` WHERE Admin!='Yes'";
                          $sql_data1  = mysqli_query($conn, $chooseEmployeeToEdit);
                       
                         while($row1 = mysqli_fetch_array($sql_data1,MYSQLI_ASSOC)) {

                             $employee_Name = ucfirst($row1['name']);
                             $employee_Surname = ucfirst($row1['surname']);
                             $employee_username = $row1['username'];
                             $employee_Positionn = ucfirst($row1['position']);
                             $employee_StartDate = $row1['start-date'];

                             echo "<option value='$employee_username'>$employee_Name  $employee_Surname</option>";
                             
                             }

                         ?>
                     </select>

                     <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Name :</div></div>
                    <input class="Add_input" type="text" id="edit_name">
                    </div>

                    <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Surname :</div></div>
                    <input class="Add_input" type="text" id="edit_surname">
                    </div>

                    <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Position :</div></div>
                    <input class="Add_input" type="text" id="edit_position">
                    </div>

                    <div class="Container_AddNewUser">
                    <div class="inputContainer">
                    <div class="label_input">Start-Date :</div></div>
                    <input class="Add_input" type="text" id="edit_startDate">
                    </div>
                    
                    <div class="rowButtons">
                        <button id="edit_new_employee" class="Add">Edit</button>
                        <button id="delete_new_employee" class="Add">Delete</button>
                    </div>

                </div>

            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {
    $('#Add_employee').click(function(e) {  
      $('#Search_employeeContent').fadeOut();
      $('#Add_employeeInputs').fadeIn(0.3);
      $('#EditDeleteEmployee').fadeOut();
    });


    $('#employee').click(function(e) {  
      $('#Search_employeeContent').fadeIn();
      $('#Add_employeeInputs').fadeOut(0.3);
      $('#EditDeleteEmployee').fadeOut();
    });

    $('#edit_employee').click(function(e) {  
      $('#Search_employeeContent').fadeOut();
      $('#Add_employeeInputs').fadeOut(0.3);
      $('#EditDeleteEmployee').fadeIn();
    });

     $('#logoutAdmin').click(function(e) {  
      window.location.replace('logout.php');
    });

   



});
            
        </script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function(){

                $('#edit_new_employee').click(function(e){ 

                    var employee_ToEdit = $('#getEmployeeToEdit').val();
                    var employee_nameToEdit = $('#edit_name').val();
                    var employee_surnameToEdit = $('#edit_surname').val();
                    var employee_positionToEdit = $('#edit_position').val();
                    var employee_startDateToEdit = $('#edit_startDate').val();

                    if (employee_nameToEdit != "" && employee_surnameToEdit != "" && employee_positionToEdit != "" && employee_startDateToEdit != "")
                    {
                        $.ajax({
                                url:"php/EditEmployeeQuery.php",
                                method:"post",
                                data:
                                {
                                    employee_ToEdit:employee_ToEdit,
                                    employee_nameToEdit:employee_nameToEdit,
                                    employee_surnameToEdit:employee_surnameToEdit,
                                    employee_positionToEdit:employee_positionToEdit,
                                    employee_startDateToEdit:employee_startDateToEdit,
                                },
                                 success:function(data)
                                {
                                     $('#output3').html(data);
                                }
                        });
                    }


                });

            });
            

        </script>
        <script type="text/javascript">

            $(document).ready(function(){

                $('#delete_new_employee').click(function(e){ 

                    var employee_ToEdit = $('#getEmployeeToEdit').val();

                    $.ajax({
                                url:"php/DeleteEmployeeQuery.php",
                                method:"post",
                                data:
                                {
                                    employee_ToEdit:employee_ToEdit,
                                },
                                 success:function(data)
                                {
                                     $('#output3').html(data);
                                }
                        });

                });

            });
            

        </script>
        <script type="text/javascript">

            $(document).ready(function(){

                $('#Add_new_employee').click(function(e){

                    var employee_name = $('#Add_name').val();
                    var employee_surname = $('#Add_surname').val();
                    var employee_position = $('#Add_position').val();
                    var employee_startDate = $('#Add_startDate').val();

                    if (employee_name != "" && employee_surname != "" && employee_position != "" && employee_startDate != "")
                    {
                        $.ajax({
                                url:"php/AddEmployeeQuery.php",
                                method:"post",
                                data:
                                {
                                    employee_name:employee_name,
                                    employee_surname:employee_surname,
                                    employee_position:employee_position,
                                    employee_startDate:employee_startDate,
                                },
                                 success:function(data)
                                {
                                     $('#output2').html(data);
                                }
                        });
                    }



                });
            });
        </script>
  <script type="text/javascript">
    
      $(document).ready(function(){

        $('#search_employee').keyup(function(){

          var txt = $(this).val();

          if (txt == '')
          {
            $('#output').html('');
            $('#employee_ListView').show();
          }
          else
          {
           $('#output').html('');
           $('#employee_ListView').hide();
            $.ajax({
                  url:"php/fetchUsersSearch.php",
                  method:"post",
                  data:{search:txt,
                  },
                  success:function(data)
                  {
                    $('#output').html(data);
                  }
            });

          }

        });

      });

  </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    
           
    </body>
</html>

<?php

}

?>