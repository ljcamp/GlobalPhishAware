<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
 
// Include config file
require_once "includes/config.php";
 
// Define variables and initialize with empty values
$username = $password = $verified = "";
$username_err = $password_err = $verification_err = "";

$type = isset($_GET['typeRadios'])?$_GET['typeRadios']:"";
$tt =  isset($_GET['tt'])?$_GET['tt']:"";
$country =  isset($_GET['country'])?$_GET['country']:"";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $type = isset($_POST['typeRadios'])?$_POST['typeRadios']:"";
    $tt =  isset($_POST['tt'])?$_POST['tt']:"";
    $country =  isset($_POST['country'])?$_POST['country']:"";
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password, verified FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $verified);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            //echo "VERIFIED: ". $verified;
                            if($verified == 0){
                              $verification_err = "Your email is not verified yet.";
                            }else{
                              session_start();
                              
                              // Store data in session variables
                              $_SESSION["loggedin"] = true;
                              $_SESSION["id"] = $id;
                              $_SESSION["user"] = $username;                            
                              // Redirect user to welcome page
                              header("location: action.php?country=". $country . "&typeRadios=" . $type . "&tt=" . $tt);
                            }
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<?php
if($country != ""){
  echo "<a href='index.php'><img src='Images/$country.jpg' style='margin:10px;' width='220px'></a>";
}
?>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($verification_err)) ? 'has-error' : ''; ?>">
                <input type="hidden" name="verification" class="form-control" value="<?php echo $verified; ?>">
                <span class="help-block"><?php echo $verification_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
                <input type="hidden" name="country" value="<?php echo $country; ?>" >
                <input type="hidden" name="typeRadios" value="<?php echo $type; ?>" >
                <input type="hidden" name="tt" value="<?php echo $tt; ?>" >
            </div>
            <p>Don't have an account? <a href="register.php?country=<?php echo $country?>&typeRadios=<?php echo $type; ?>&tt=<?php echo $tt; ?>">Sign up now</a>.</p>
            <p>Forgot your password? <a href="forgot_password.php?country=<?php echo $country?>&typeRadios=<?php echo $type; ?>&tt=<?php echo $tt; ?>">Reset your password</a>.</p>
        </form>
    </div>    
</body>
</html>
