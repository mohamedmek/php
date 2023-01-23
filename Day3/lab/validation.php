
<?php
                if(isset($_POST['submit'])){
                        if(empty($_POST['name'])){
                            $nameErr= "name is required";
                        }
                        elseif (!preg_match("/^([a-zA-Z' ]+)$/",$_POST['name'])) {
                                $nameErr= "Name consist of english letters only ";
                            }
                        else{
                                $name = $_POST['name'];
                        }   
                        
                        if (empty($_POST['email'])) {
                            $emailErr = "email is required";
                        }
                        elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                                }
                        else{
                                $email=$_POST['email'];
                            }
                        if(empty($_POST['gender'])){
                                $genderErr= "gender is required";
                        }
                        else{
                            $gender=$_POST['gender'];
                        }
                        if(empty($_POST['terms'])){
                            $termsErr= "You must agree to the terms of use";
                        }
                        
                            $terms=$_POST['terms'];

                            function showData(){
                            
                            echo "<h2>Your given values are as:</h2>"; 
                            echo"<br><br>";
                            echo "Name: " . $name;
                            echo"<br>";
                            echo "E-mail: " . $email;
                            echo"<br>";
                            echo "Group #: " . $_POST['group'];
                            echo"<br>";
                            echo "Class details: " . $_POST['class_details'];
                            echo"<br>";
                            echo "Gender: " . $gender;
                            echo"<br>";
                            echo "Your courses are: " . $_POST['courses'];
                            echo"<br>"; 
                            }
                        
                        }
?>
