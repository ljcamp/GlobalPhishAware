<?php
  //check to see if they are using Firefox
session_start();

  $agent = $_SERVER['HTTP_USER_AGENT'];


$_SESSION['firefox'] = '/Firefox/';


$isFirefox = preg_match($_SESSION['firefox'],$agent);

?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>

#studyarea {
    font-family: Arial, Helvetica, sans-serif;
}

#sis {
	font-family: Arial, Helvetica, sans-serif;
	display: none;
}

.ease{
width:70%;
margin-left:auto;
margin-right:auto;
top:50px;
}
</style>
<script>
function validateForm() {
  var x = document.forms["startForm"]["country"].value;
  var y = document.forms["startForm"]["typeRadios"].value;
  if (x == "") {
    alert("Country must be selected");
    return false;
  }

  if (x != "US" && y == "iu"){
    alert("Indiana University participant must run this experiment in United States");
    return false;
  }
}
</script>
</head>
<body>
<?php
$group = 0;
if($isFirefox){
?>
<div id="studyarea" class="ease">
  <h2>Step 1</h2>
  <h4>Select the contry where your experiment runs</h4>
  <form action="action.php" name="startForm" onsubmit="return validateForm()" method="POST">
  <select name="country">
      <option value="">Country</option>
      <option value="AU">Australia (AU)</option>
      <option value="GB">United Kingdom (GB)</option>
      <option value="US">United States (US)</option>
      <option value="ZA">South Africa (ZA)</option>
  </select>

  <h2>Step 2</h2>
  <h4>Do you have an Indiana University account?</h4>
  <input type="radio" name="typeRadios" value="iu" checked >Yes
  <input type="radio" name="typeRadios" value="mturk">No

  <div id="non_iu">
    <h2>Step 3</h2>
    <h4>If you are a paid participant, please enter your access code at the below text box. Otherwise leave it blank and just click on the submit button</h4>

<!--
    <p>
      <ul>
      <li>If you are a paid participant, please enter your access code and then click on the submit button<br/>
      <li>If you are a self-test user, please leave the access code blank and just click on the submit button</li>
      </ul>
    </p>
-->
      Access code: <input type="textbox" name="access_code" /></li>
  </div>
  <br/>
  <br/>
  <input type="hidden" name="tt" value="0" />  
  <input type="submit" value="Submit" />
  </form>
</div>
<?php
}
else{
  echo 'It appears that you are not using a recognized version of Firefox. Please return to view this HIT using Firefox, as we have some functionality that requires Firefox, and we want to make sure you do not have further problems with this HIT.';
}
//
//if(empty($_SESSION))
//{
//    echo "<!DOCTYPE html>";
//    echo "<p>There is no session</p>";
//}else{
//    echo "<!DOCTYPE html>";
//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";
//}
?>
<script>
var rad = document.startForm.typeRadios;
var prev = null;
var x = document.getElementById("non_iu");
$("#non_iu").hide();
rad[0].addEventListener('change', function() {
  x.style.display = "none";
});
rad[1].addEventListener('change', function() {
  x.style.display = "block";
});
</script>
</body>
</html>
