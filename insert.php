<?php 
$server = "localhost";
$username ="root";
$password ="";
$dbname = "update";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){
    
    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['phone_number']) && !empty($_POST['college_name']) && !empty($_POST['address']) && !empty($_POST['skills']) && !empty($_POST['pc']) && !empty($_POST['wifi'])  && !empty($_POST['edu']) ){

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $college_name = $_POST['college_name'];
        $address = $_POST['address'];
        $skills = $_POST['skills'];
        $pc = $_POST['pc'];
        $wifi = $_POST['wifi'];
        $edu = $_POST['edu'];
       
        
        $query = "insert into tab(full_name,email,phone_number,college_name,address,skills,pc,wifi,edu) values('$full_name','$email', '$phone_number','$college_name', '$address','$skills','$pc','$wifi','$edu')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run){
            echo "Form Submitted Successfully";
        }
        else {
            echo "Form Not Submitted";
        }
    }
    else{
        echo "All fields required";
    }
}
?>