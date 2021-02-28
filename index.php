<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
    
    div{
        margin:20px 0 10px 80px;
    }
    label{
        font-size:20px;
       padding-bottom:10px;
       font-weight:bolder;
    }
    input{
        width:300px;
        height:40px;
        font-size:20px;
        border-radius:10px;
    }
    select{
        width:300px;
        height:40px;
        font-size:20px;
        border-radius:10px;
        }
        button{
           width:200px;
           height:40px;
           font-size:20px;
           margin-left:40px;
           background:blue;
           border-radius:10px;
           color:white;
        }
        form{
            border:2px solid #96949121;
            width:500px;
            margin-left:60px;
            background:#96949121;
        }
        h1{
            margin-left:200px;
            color:green;
        }
        p{
            margin-left:50px;
        }
    </style>
</head>
<body>
    <main>

    <div>
    <legend><form action="index.php" method="post">
    <h1>Sign Up</h1>
    <div>
    <label for="firstname">Firstname</label><br>
    <input type="text" name="firstname" id="firstname" >
    </div>
    <div>
    <label for="lastname">Lastname</label><br>
    <input type="text" name="lastname" id="lastname">
    </div>
    <div>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email">
    </div>
    <div>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password">
    </div>
    <div>
    <label for="phonenumber">Phone Number</label><br>
    <input type="number" name="phonenumber" id="phonenumber">
    </div>
    <div>
    <label for="gender">Gender</label><br>
    <input type="radio" name="gender" value="male" style="font-size:20px; width:30px; height:30px">Male
    <input type="radio" name="gender" value="female" style="width:30px; height:30px">Female
    </div>
    <div>
    <label for="dob">Date of Birth</label><br>
    <input type="date" name="dob" id="dob">
    </div>
    <div>
    <label for="nationality">Nationality</label><br>
    <select name="nationality" id="nationality">
    <option value="">Select</option>
    <option value="Algeria">Algeria</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Ghana">Ghana</option>
    <option value="Kenya">Kenya</option>
    <option value="Nigeria">Nigeria</option>
    <option value="South Africa">South Africa</option>
    <option value="Togo">Togo</option>
    
    
    </select>
    
    </div>
    <div>
    <button type="submit" name="submit">Register</button>
    </div>
    <p>Already have an account? <a href="#">Log In</a></p>
    </form></legend>
    
    </div>
    </main>
</body>
</html>

<?php


if(isset($_POST["submit"])){
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phonenumber = $_POST["phonenumber"];
    $gender = @$_POST["gender"];
    $dob = $_POST["dob"];
    $nationality = $_POST["nationality"];
    
    echo "<div style ='margin:20px; font-size:30px; color:red'> Welcome $firstname  $lastname, </div>";
            echo"<div style ='margin:20px; font-size:20px;'> $firstname </div>";
            echo "<div style ='margin:20px; font-size:20px;'>$lastname</div>";
            echo "<div style ='margin:20px; font-size:20px;'>$email</div>" ;
            echo "<div style ='margin:20px; font-size:20px;'>$password</div>" ;
            echo "<div style ='margin:20px; font-size:20px;'>$phonenumber</div>" ;
            if(!empty($gender)){
                echo  "<div style ='margin:20px; font-size:20px;'>$gender</div>";
            }
           
            echo  "<div style ='margin:20px; font-size:20px;'>$dob</div>";
            echo  "<div style ='margin:20px; font-size:20px;'>$nationality</div>";
die;

}

?>