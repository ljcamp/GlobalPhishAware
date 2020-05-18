<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log in Not Log in Study Description</title>
<style>

#studyarea {
	font-family: Arial, Helvetica, sans-serif;
}

#sis {
	font-family: Arial, Helvetica, sans-serif;
	display: none;
}

.instructions {
	width:70%;
	margin-left:auto;
	margin-right:auto;
	top:40%;
}



#bigText{
font-size:150%;
}

</style>
<script src="../JS/jquery-1.11.0.js" type="text/javascript"></script>
<script src="../JS/common.js" type="text/javascript"></script>
<script src="../JS/survey.js" type="text/javascript"></script>


</head>
<body>
      <div id="countrycode"><?= $_SESSION['country']; ?></div>
      <div id="ordergroup"><?= $_SESSION['group']; ?></div>
<?php
// if($_SESSION["country"] == ""){
//     $_SESSION["country"] = "US";
// }

  //mturk
if($_SESSION['type']=='mturk'){
    //tt = 0
    if($_SESSION['tt']==0)
    {
	echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail?</H2></center><br>
       ';
      if($_SESSION['valid_participant']){

   echo 'You will receive $2 for completing these two tasks, but you can earn up to $5 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo'

		<p>
		This study consists of two tasks: A brief experiment and a survey. In this experiment, you will be presented with a series of websites, and you will need to decide WHETHER TO SIGN-IN to each of these sites based on whether or not they are secure. As your time on the experimental task INCREASES, your bonus will DECREASE. You will be able to constantly monitor the elapsed time and bonus payout at the TOP OF THE PAGE. </p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal is to visit all the websites in the shortest possible time. If the website is SECURE, <strong>login to proceed to the next website</strong>. <br> If you decide to <strong> not login </strong> because the website is NOT SECURE, click on the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
        <OL>
		<LI>If you decide to LOGIN and the website is SECURE, you will PROCEED to the next website.</LI>
		<LI>If you decide to LOGIN and the website is NOT SECURE, you will have to WAIT 15 seconds before continuing.</LI>
		<LI>If you decide to NOT LOGIN and the website is SECURE, you will have to WAIT 15 seconds before continuing.</LI>
		<LI>If you decide to NOT LOGIN and the website is NOT SECURE, you will PROCEED to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		<p>
		<center><H3>Logging- or Signing-in to a website:</H3></center><br> All websites do not follow the same conventions for signing- or logging-in. Typically, the sign-in or log-in prompt will be found in the upper right-hand side of the web page. For a few of the websites, you will need to click on a pull-down menu titled "My Account" or something similar beginning with "My xxxxxxx".
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/loginExamples.png" alt "Login Examples" width="60%"><br>Login Examples</img>
		</center>
		</p>

		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <strong>responding as quickly and as accurately as possible.</strong></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		<p>
			Before you can begin the experimental task, you must verify that you understand the instructions. Click the <strong>"Check Understanding"</strong> button at the bottom of the page.</p>
		<p>
				<BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
		</p>
		</div>
			</DIV>';
    }
	// <p>
			// Once you click on this prompt, you will be directed to: (1) a new page with another prompt to sign-in or log-in, or (2) a pop-up window with another prompt to sign-in or login. If prompted to sign-in or log-in, click on the sign-in or log-in prompt and then you will be directed to begin the next trial. If you decide to not login, you can click the back button on the 2nd page of the website. Please note, you cannot click the back button on the 1st page of the website.
		// </p>
		// <p>
		// <center>
		// <table>
		// <tr>
		// <td><img src="../Images/imagesforscreenshots/newSiteLogin.png" alt="New Site Login" width="90%"></td>
		// <td><img src="../Images/imagesforscreenshots/popupLogin.png" alt="Popup Login" width="90%"></td>
		// </tr>
		// <tr>
		// <td><center>New Login Site</center></td><td><center>Popup Login Site</center></td></tr>
		// </tr>
		// </table>
		// </center>
		// </p>
    //tt=1
    else{
        echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail</H2></center><br>
      This study consists of two tasks. The first task is to complete a brief experiment, and the second task is to complete a survey.';
      if($_SESSION['valid_participant']){

   echo 'You will receive $2 for completing these two tasks, but you can earn up to $8 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo '
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/screenClock.png" alt="Screen Clock" width="60%"><br>Screen Clock</img>
		</center>
		</p>
		<p>
		<strong>Experimental Task:</strong> In this experiment, you will be presented with a series of websites, and you will need to decide whether or not to sign-in to each of these sites based on whether or not they are secure. All of the websites are designed to simulate real websites viewed with a Firefox browser, but just like in the real world,the Firefox browser may not be able to ensure the protection of your credentials.</p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal of this task is to visit all the websites in as short a time as possible. If the website is secure, sign-in and then you will proceed to the next website. <span id="bigText">If you decide to not login because the website is not secure, then you should not sign-in, rather you should click the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
        <OL>
		<LI>If you decide to sign-in and the website is secure, you will proceed immediately to the next website.</LI>
		<LI>If you decide to sign-in and the website is insecure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is secure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is not secure, you will proceed immediately to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		
		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <strong>RESPONDING AS QUICKLY AND ACCURATELY AS POSSIBLE</strong></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		<p>
			Before you can begin the experimental task, you must verify that you understand the instructions. Click the <strong>"Check Understanding"</strong> button at the bottom of the page.</p>
		<p>
				<BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
		</p>
		</div>
			</DIV>';
        
    }
}
//inv
else if($_SESSION['type']=='inv') {
	//TODO: Change instructions here to explain accuracy condition
    //tt = 0
    if($_SESSION['tt']==0)
    {
	echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail</H2></center><br>
      This study consists of two tasks. The first task is to complete a brief experiment, and the second task is to complete a survey.';
      if($_SESSION['valid_participant']){

   echo 'You will receive $2 for completing these two tasks, but you can earn up to $8 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo '
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/screenClock.png" alt="Screen Clock" width="60%"><br>Screen Clock</img>
		</center>
		</p>
		<p>
		<strong>Experimental Task:</strong> In this experiment, you will be presented with a series of websites, and you will need to decide whether or not to sign-in to each of these sites based on whether or not they are secure. All of the websites are designed to simulate real websites viewed with a Firefox browser, but just like in the real world,the Firefox browser may not be able to ensure the protection of your credentials.</p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal of this task is to visit all the websites in as short a time as possible. If the website is secure, sign-in and then you will proceed to the next website. <span id="bigText">If you decide to not login because the website is not secure, then you should not sign-in, rather you should click the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
        <OL>
		<LI>If you decide to sign-in and the website is secure, you will proceed immediately to the next website.</LI>
		<LI>If you decide to sign-in and the website is insecure, you will be penalized and have to wait 15 seconds before continuing.</LI>
		<LI>If you decide to not sign-in and the website is secure, you will be penalized and have to wait 15 seconds before continuing.</LI>
		<LI>If you decide to not sign-in and the website is not secure, you will proceed immediately to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		<p>
		<center><H3>Logging- or Signing-in to a website:</H3></center><br> All websites do not follow the same conventions for signing- or logging-in. Typically, the sign-in or log-in prompt will be found in the upper right-hand side of the web page. For a few of the websites, you will need to click on a pull-down menu titled "My Account" or something similar beginning with "My xxxxxxx".
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/loginExamples.png" alt "Login Examples" width="60%"><br>Login Examples</img>
		</center>
		</p>

		
		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <span id="bigText"><strong>responding as quickly and as accurately as possible.</strong></span></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		 <p>
                        Before you can begin the experimental task, you must verify that you understand the instructions. Click the <strong>"Check Understanding"</strong>
                <p>
                                <BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
                </p>
		</div>
			</DIV>';
    }
	// <p>
			// Once you click on this prompt, you will be directed to: (1) a new page with another prompt to sign-in or log-in, or (2) a pop-up window with another prompt to sign-in or login. If prompted to sign-in or log-in, click on the sign-in or log-in prompt and then you will be directed to begin the next trial. If you decide to not login, you can click the back button on the 2nd page of the website. Please note, you cannot click the back button on the 1st page of the website.
		// </p>

		// <p>
		// <center>
		// <table>
		// <tr>
		// <td><img src="../Images/imagesforscreenshots/newSiteLogin.png" alt="New Site Login" width="90%"></td>
		// <td><img src="../Images/imagesforscreenshots/popupLogin.png" alt="Popup Login" width="90%"></td>
		// </tr>
		// <tr>
		// <td><center>New Login Site</center></td><td><center>Popup Login Site</center></td></tr>
		// </tr>
		// </table>
		// </center>
		// </p>

    else
        // inv tt=1, 0.67
    {
        
        	echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail</H2></center><br>
      This study consists of two tasks. The first task is to complete a brief experiment, and the second task is to complete a survey.';
      if($_SESSION['valid_participant']){
   echo 'You will receive $2 for completing these two tasks, but you can earn up to $8 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo '
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/screenClock.png" alt="Screen Clock" width="60%"><br>Screen Clock</img>
		</center>
		</p>
		<p>
		This study consists of two tasks. The first task is to complete a brief experiment and the second task is to complete a survey.
		<strong>Experimental Task:</strong> In this experiment, you will be presented with a series of websites, and you will need to decide whether or not to sign-in to each of these sites based on whether or not they are secure. All of the websites are designed to simulate real websites viewed with a Firefox browser, but just like in the real world,the Firefox browser may not be able to ensure the protection of your credentials.</p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal of this task is to visit all the websites in as short a time as possible. If the website is secure, sign-in and then you will proceed to the next website. <span id="bigText">If you decide to not login because the website is not secure, then you should not sign-in, rather you should click the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
       <OL>
		<LI>If you decide to sign-in and the website is secure, you will proceed immediately to the next website.</LI>
		<LI>If you decide to sign-in and the website is insecure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is secure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is not secure, you will proceed immediately to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		<p>
		<center><H3>Logging- or Signing-in to a website:</H3></center><br> All websites do not follow the same conventions for signing- or logging-in. Typically, the sign-in or log-in prompt will be found in the upper right-hand side of the web page. For a few of the websites, you will need to click on a pull-down menu titled "My Account" or something similar beginning with "My xxxxxxx".
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/loginExamples.png" alt "Login Examples" width="60%"><br>Login Examples</img>
		</center>
		</p>


		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <span id="bigText"><strong>responding as quickly and as accurately as possible.</strong></span></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		 <p>
                        Before you can begin the experimental task, you must verify that you undestand the instructions. Click the <strong>"Check Understanding"</strong>
                <p>
                                <BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
                </p>
		</div>
			</DIV>';
    }
}
// <p>
			// Once you click on this prompt, you will be directed to: (1) a new page with another prompt to sign-in or log-in, or (2) a pop-up window with another prompt to sign-in or login. If prompted to sign-in or log-in, click on the sign-in or log-in prompt and then you will be directed to begin the next trial. If you decide to not login, you can click the back button on the 2nd page of the website. Please note, you cannot click the back button on the 1st page of the website.
		// </p>

		// <p>
		// <center>
		// <table>
		// <tr>
		// <td><img src="../Images/imagesforscreenshots/newSiteLogin.png" alt="New Site Login" width="90%"></td>
		// <td><img src="../Images/imagesforscreenshots/popupLogin.png" alt="Popup Login" width="90%"></td>
		// </tr>
		// <tr>
		// <td><center>New Login Site</center></td><td><center>Popup Login Site</center></td></tr>
		// </tr>
		// </table>
		// </center>
		// </p>
//<p><center><img src="../Images/imagesforscreenshots/screenClock.png" alt="Screen Clock" width="60%"><br>Screen Clock</img></center>	</p>
 //iu
 else if($_SESSION['type']=='iu') {
	//TODO: Change instructions here to explain accuracy condition
       //tt = 0
       if($_SESSION['tt']==0)
    {
	echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail</H2></center><br>
      This study consists of two tasks. The first task is to complete a brief experiment, and the second task is to complete a survey.';
      if($_SESSION['valid_participant']){
   echo 'You will receive $2 for completing these two tasks, but you can earn up to $5 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo '
		
		<p> In this experiment, you will be presented with a series of websites, and you will need to decide whether or not to sign-in to each of these sites based on whether or not they are secure. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. </p>
		<p><center><img src="../Images/imagesforscreenshots/screenClock.png" alt="Screen Clock" width="60%"><br>Screen Clock</img></center>	</p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal of this task is to visit all the websites in as short a time as possible. If the website is secure, sign-in and then you will proceed to the next website. <span id="bigText">If you decide to not login because the website is not secure, then you should not sign-in, rather you should click the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
        <OL>
		<LI>If you decide to sign-in and the website is secure, you will proceed immediately to the next website.</LI>
		<LI>If you decide to sign-in and the website is insecure, you will be penalized and have to wait 15 seconds before continuing.</LI>
		<LI>If you decide to not sign-in and the website is secure, you will be penalized and have to wait 15 seconds before continuing.</LI>
		<LI>If you decide to not sign-in and the website is not secure, you will proceed immediately to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		<p>
		<center><H3>Logging- or Signing-in to a website:</H3></center><br> All websites do not follow the same conventions for signing- or logging-in. Typically, the sign-in or log-in prompt will be found in the upper right-hand side of the web page. For a few of the websites, you will need to click on a pull-down menu titled "My Account" or something similar beginning with "My xxxxxxx".
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/loginExamples.png" alt "Login Examples" width="60%"><br>Login Examples</img>
		</center>
		</p>

		<p>
			Once you click on this prompt, you will be directed to: (1) a new page with another prompt to sign-in or log-in, or (2) a pop-up window with another prompt to sign-in or login. If prompted to sign-in or log-in, click on the sign-in or log-in prompt and then you will be directed to begin the next trial. If you decide to not login, you can click the back button on the 2nd page of the website. Please note, you cannot click the back button on the 1st page of the website.
		</p>

		<p>
		<center>
		<table>
		<tr>
		<td><img src="../Images/imagesforscreenshots/newSiteLogin.png" alt="New Site Login" width="90%"></td>
		<td><img src="../Images/imagesforscreenshots/popupLogin.png" alt="Popup Login" width="90%"></td>
		</tr>
		<tr>
		<td><center>New Login Site</center></td><td><center>Popup Login Site</center></td></tr>
		</tr>
		</table>
		</center>
		</p>

		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <span id="bigText"><strong>responding as quickly and as accurately as possible.</strong></span></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		 <p>
                        Before you can begin the experimental task, you must verify that you undestand the instructions. Click the <strong>"Check Understanding"</strong>
                <p>
                                <BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
                </p>
		</div>
			</DIV>';
       }
       else
           //iu tt-1
       {
           echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail</H2></center><br>
      This study consists of two tasks. The first task is to complete a brief experiment, and the second task is to complete a survey.';
      if($_SESSION['valid_participant']){
   echo 'You will receive $2 for completing these two tasks, but you can earn up to $8 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo '
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/screenClock.png" alt="Screen Clock" width="60%"><br>Screen Clock</img>
		</center>
		</p>
		<p>
		<strong>Experimental Task:</strong> In this experiment, you will be presented with a series of websites, and you will need to decide whether or not to sign-in to each of these sites based on whether or not they are secure. All of the websites are designed to simulate real websites viewed with a Firefox browser, but just like in the real world,the Firefox browser may not be able to ensure the protection of your credentials.</p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal of this task is to visit all the websites in as short a time as possible. If the website is secure, sign-in and then you will proceed to the next website. <span id="bigText">If you decide to not login because the website is not secure, then you should not sign-in, rather you should click the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
        <OL>
		<LI>If you decide to sign-in and the website is secure, you will proceed immediately to the next website.</LI>
		<LI>If you decide to sign-in and the website is insecure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is secure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is not secure, you will proceed immediately to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		<p>
		<center><H3>Logging- or Signing-in to a website:</H3></center><br> All websites do not follow the same conventions for signing- or logging-in. Typically, the sign-in or log-in prompt will be found in the upper right-hand side of the web page. For a few of the websites, you will need to click on a pull-down menu titled "My Account" or something similar beginning with "My xxxxxxx".
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/loginExamples.png" alt "Login Examples" width="60%"><br>Login Examples</img>
		</center>
		</p>

		<p>
			Once you click on this prompt, you will be directed to: (1) a new page with another prompt to sign-in or log-in, or (2) a pop-up window with another prompt to sign-in or login. If prompted to sign-in or log-in, click on the sign-in or log-in prompt and then you will be directed to begin the next trial. If you decide to not login, you can click the back button on the 2nd page of the website. Please note, you cannot click the back button on the 1st page of the website.
		</p>

		<p>
		<center>
		<table>
		<tr>
		<td><img src="../Images/imagesforscreenshots/newSiteLogin.png" alt="New Site Login" width="90%"></td>
		<td><img src="../Images/imagesforscreenshots/popupLogin.png" alt="Popup Login" width="90%"></td>
		</tr>
		<tr>
		<td><center>New Login Site</center></td><td><center>Popup Login Site</center></td></tr>
		</tr>
		</table>
		</center>
		</p>

		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <span id="bigText"><strong>responding as quickly and as accurately as possible.</strong></span></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		 <p>
                        Before you can begin the experimental task, you must verify that you undestand the instructions. Click the <strong>"Check Understanding"</strong>
                <p>
                                <BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
                </p>
		</div>
			</DIV>';
       }
} elseif($_SESSION['type']=='account'){
	//TODO: Change instructions here to explain accuracy condition
       //tt = 0
       if($_SESSION['tt']==0)
    {
	echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail</H2></center><br>
      This study consists of two tasks. The first task is to complete a brief experiment, and the second task is to complete a survey.';
      if($_SESSION['valid_participant']){
   echo 'You will receive $2 for completing these two tasks, but you can earn up to $8 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo '
		<p>In this experiment, you will be presented with a series of websites, and you will need to decide whether or not to sign-in to each of these sites based on whether or not they are secure.  As your time on the experimental task INCREASES, your bonus DECREASES. You will be able to constantly monitor the elapsed time and bonus payout at the TOP OF THE PAGE. </p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal of this task is to visit all the websites in as short a time as possible. If the website is secure, sign-in and then you will proceed to the next website. <span id="bigText">If you decide to not login because the website is not secure, then you should not sign-in, rather you should click the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
        <OL>
		<LI>If you decide to sign-in and the website is secure, you will proceed immediately to the next website.</LI>
		<LI>If you decide to sign-in and the website is insecure, you will be penalized and have to wait 15 seconds before continuing.</LI>
		<LI>If you decide to not sign-in and the website is secure, you will be penalized and have to wait 15 seconds before continuing.</LI>
		<LI>If you decide to not sign-in and the website is not secure, you will proceed immediately to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		<p>
		<center><H3>Logging- or Signing-in to a website:</H3></center><br> All websites do not follow the same conventions for signing- or logging-in. Typically, the sign-in or log-in prompt will be found in the upper right-hand side of the web page. For a few of the websites, you will need to click on a pull-down menu titled "My Account" or something similar beginning with "My xxxxxxx".
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/loginExamples.png" alt "Login Examples" width="60%"><br>Login Examples</img>
		</center>
		</p>

		<p>
			Once you click on this prompt, you will be directed to: (1) a new page with another prompt to sign-in or log-in, or (2) a pop-up window with another prompt to sign-in or login. If prompted to sign-in or log-in, click on the sign-in or log-in prompt and then you will be directed to begin the next trial. If you decide to not login, you can click the back button on the 2nd page of the website. Please note, you cannot click the back button on the 1st page of the website.
		</p>

		<p>
		<center>
		<table>
		<tr>
		<td><img src="../Images/imagesforscreenshots/newSiteLogin.png" alt="New Site Login" width="90%"></td>
		<td><img src="../Images/imagesforscreenshots/popupLogin.png" alt="Popup Login" width="90%"></td>
		</tr>
		<tr>
		<td><center>New Login Site</center></td><td><center>Popup Login Site</center></td></tr>
		</tr>
		</table>
		</center>
		</p>

		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <span id="bigText"><strong>responding as quickly and as accurately as possible.</strong></span></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		 <p>
                        Before you can begin the experimental task, you must verify that you undestand the instructions. Click the <strong>"Check Understanding"</strong>
                <p>
                                <BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
                </p>
		</div>
			</DIV>';
       }
       else
           //iu tt-1
       {
           echo '
		<div id="studyarea">
		<div id="jscriptwarning">You must have javascript enabled to take this study.</div>
		<div id="sis">
		<div id="thisStudy" class="instructions">
		<center><H2>What Does This Study Entail</H2></center><br>
      This study consists of two tasks. The first task is to complete a brief experiment, and the second task is to complete a survey.';
      if($_SESSION['valid_participant']){
   echo 'You will receive $2 for completing these two tasks, but you can earn up to $5 more depending on how quickly you complete the experimental task. As your time on the experimental task increases, your bonus will decrease. You will be able to constantly monitor the elapsed time and bonus payout at the top of the page. Here is a screen shot of the clock that will appear at the top of every page showing elapsed time and bonus payout. The penalty time is explained below. <p>If you manage to take this HIT multiple times <strong>You will only be paid once, for your first attempt. Thus, you are not allowed to take the survey multiple times and refreshing the page will invalidate your result. Please use mouse or touchpad to take the survey. </strong>
';
      }
    echo '
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/screenClock.png" alt="Screen Clock" width="60%"><br>Screen Clock</img>
		</center>
		</p>
		<p>
		<strong>Experimental Task:</strong> In this experiment, you will be presented with a series of websites, and you will need to decide whether or not to sign-in to each of these sites based on whether or not they are secure. All of the websites are designed to simulate real websites viewed with a Firefox browser, but just like in the real world,the Firefox browser may not be able to ensure the protection of your credentials.</p>
		<br>
		<center>
		<BUTTON onclick="$(\'#thisStudy\').hide(); $(\'#needToDo\').show();">Next Instructions</BUTTON>
				</center>
		</div>
		<div id="needToDo" class="instructions" style="display:none;">
		  <center><H3>What do you need to do?</H3></center><br> The goal of this task is to visit all the websites in as short a time as possible. If the website is secure, sign-in and then you will proceed to the next website. <span id="bigText">If you decide to not login because the website is not secure, then you should not sign-in, rather you should click the <strong>Back Button</strong> on the browser toolbar.</span> Your performance will be timed, and your final '. ($_SESSION['valid_participant']?'payout':'score') .' will depend on how much time it takes to complete the task:
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/functionalButtons.png" alt="Functional Buttons" width="60%"></center></p>
		<p>
		<B>
        <OL>
		<LI>If you decide to sign-in and the website is secure, you will proceed immediately to the next website.</LI>
		<LI>If you decide to sign-in and the website is insecure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is secure, you will be penalized $0.67 before continuing.</LI>
		<LI>If you decide to not sign-in and the website is not secure, you will proceed immediately to the next website.</LI>
		</OL>
        </B>
		</p><center>
		<BUTTON onclick="$(\'#needToDo\').hide(); $(\'#thisStudy\').show();">Previous Instructions</BUTTON> <BUTTON onclick="$(\'#needToDo\').hide(); $(\'#loggingIn\').show();">Next Instructions</BUTTON>
		</center>
		</div>
		<div id="loggingIn" class="instructions" style="display:none;">
		<p>
		<center><H3>Logging- or Signing-in to a website:</H3></center><br> All websites do not follow the same conventions for signing- or logging-in. Typically, the sign-in or log-in prompt will be found in the upper right-hand side of the web page. For a few of the websites, you will need to click on a pull-down menu titled "My Account" or something similar beginning with "My xxxxxxx".
		</p>
		<p>
		<center>
		<img src="../Images/imagesforscreenshots/loginExamples.png" alt "Login Examples" width="60%"><br>Login Examples</img>
		</center>
		</p>

		<p>
			Once you click on this prompt, you will be directed to: (1) a new page with another prompt to sign-in or log-in, or (2) a pop-up window with another prompt to sign-in or login. If prompted to sign-in or log-in, click on the sign-in or log-in prompt and then you will be directed to begin the next trial. If you decide to not login, you can click the back button on the 2nd page of the website. Please note, you cannot click the back button on the 1st page of the website.
		</p>

		<p>
		<center>
		<table>
		<tr>
		<td><img src="../Images/imagesforscreenshots/newSiteLogin.png" alt="New Site Login" width="90%"></td>
		<td><img src="../Images/imagesforscreenshots/popupLogin.png" alt="Popup Login" width="90%"></td>
		</tr>
		<tr>
		<td><center>New Login Site</center></td><td><center>Popup Login Site</center></td></tr>
		</tr>
		</table>
		</center>
		</p>

		<p>
			It is important to understand that you will maximize your '. ($_SESSION['valid_participant']?'payout':'score') .' by <span id="bigText"><strong>responding as quickly and as accurately as possible.</strong></span></p>

		<BUTTON onclick="$(\'#loggingIn\').hide(); $(\'#needToDo\').show();">Previous Instructions</BUTTON>
		 <p>
                        Before you can begin the experimental task, you must verify that you undestand the instructions. Click the <strong>"Check Understanding"</strong>
                <p>
                                <BUTTON id="checkUnderstanding">Check Understanding</BUTTON>
                </p>
		</div>
			</DIV>';
       }
}

?>


<DIV id="error">&nbsp;</DIV>

	<FORM id="surveyResults" method=POST action="dataReceiver.php">&nbsp;
	<DIV id="question" class="instructions">
	</DIV>
	<DIV id="completedquestions">
		<input type="hidden" id="workerId" value="<?php echo $_SESSION['participant'];?>"/>
		<input type="hidden" id="participantType" value="<?php echo $_SESSION['participantType'];?>"/>
		<input type="hidden" id="experimentCondition" value="<?php echo $_SESSION['experimentConditionNumber'];?>"/>
                <input type="hidden" id="assignmentId" value="<?php echo $_SESSION['assignmentId'];?>"/>
	</DIV>
	</FORM>

	<DIV id="navigation" class="instructions">&nbsp;</DIV>



</div>


</body>
</html>
