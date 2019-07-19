<?php
// Initialize the session
session_start();
 
?>
 
<!DOCTYPE html>
<html class="js" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>HATS | Human and Technical Security</title>
<link rel="stylesheet" href="HATS_files/skeleton.css" type="text/css" media="all">
<link rel="stylesheet" href="HATS_files/bootstrap.css">
<link rel="stylesheet" href="HATS_files/nav.css" type="text/css" media="all">
<link rel="stylesheet" href="HATS_files/custom.css" type="text/css" media="all">
<link href="HATS_files/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="HATS_files/mobile.css" type="text/css" media="all">
    <script src="HATS_files/responsive-nav.js"></script>
</head>

<body class="front-page">
    <a name="#"></a>
    <div class="nav-mobile">
    <header>
      <a href="http://www.usablesecurity.net/"><img class="u-max-full-width" src="HATS_files/hatsWord2.jpg" alt="HATS" style="width:60px; margin-left:10px;"></a>
      <a href="#" class="nav-toggle" aria-hidden="true">Menu</a><nav class="nav-collapse nav-collapse-0 closed" style="transition: max-height 284ms ease 0s; position: relative;" aria-hidden="false">
        <ul>
          <li class="menu-item active"><a href="http://www.usablesecurity.net/">Home</a></li>
          <li class="menu-item"><a href="http://www.usablesecurity.net/projects/index.php">Projects</a>
          </li><li class="menu-item"><a href="http://www.usablesecurity.net/people">People</a></li>
          <li class="menu-item"><a href="http://www.usablesecurity.net/publications">Publications</a></li>
          <li class="menu-item"><a href="http://www.usablesecurity.net/USEC/index.php">USEC</a>
          </li><li class="menu-item"><a href="http://www.usablesecurity.net/?internal=2#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    </div>
    <section class="nav-mobile">
        <div class="container ">
            <div class="row ">
                <div class="twelve columns">
</div></div></div></section>    <section class="header">
        <div class="container ">
            <div class="row ">
                <div class="twelve columns">
                    <div id="menu_nav" class="row nav centered merged-five">
<table width="100%">
<?php if(isset($_SESSION["user"])){
?>
<tr>
<td rowspan="2" width=20%>
                    <a href="http://www.usablesecurity.net/"><img class="u-max-full-width" src="HATS_files/hatsWord2.jpg" alt="HATS"></a>
</td>
<td width=80%>
        <h2>Hi, <b> <?php echo htmlspecialchars($_SESSION["user"]); ?></b>. Welcome to Phishing Experiment site.</h2>
</td>
</tr>
<tr>
<td>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</td>
</tr>
<?php
}else{
?>
<tr>
<td width=20%>
                    <a href="http://www.usablesecurity.net/"><img class="u-max-full-width" src="HATS_files/hatsWord2.jpg" alt="HATS"></a>
</td>
<td width=80% valign="bottom">
        <h2>Welcome to Phishing Experiment site.</h2>
</td>
</tr>
<?php
}
?>
</table>
                      <!--
                        <ul id="menu_nav" style="margin-top:-5rem;margin-left:227px">
                        <li class="selected"><a href="http://www.usablesecurity.net/">Home</a></li>

                        <li class="p1"><a href="http://www.usablesecurity.net/projects/index.php">Projects</a>
                        <ul class="sub1" style="margin-left: -212px; display: none;">
                        <li><a href="http://www.usablesecurity.net/projects/IoT/index.php" title="IoT">IoT</a></li><li><a href="http://www.usablesecurity.net/projects/Phishing/index.php" title="Phishing">Phishing</a></li><li><a href="http://www.usablesecurity.net/projects/MUD/index.php" title="MUD">MUD</a></li><li><a href="http://www.usablesecurity.net/projects/Mobile_Privacy/index.php" title="Mobile Privacy">Mobile Privacy</a></li><li><a href="http://www.usablesecurity.net/projects/Social_Network_Privacy/index.php" title="Social Network Privacy">Social Network Privacy</a></li><li><a href="http://www.usablesecurity.net/projects/2FA/index.php" title="2FA">2FA</a></li><li><a href="http://www.usablesecurity.net/projects/BGP/index.php" title="BGP">BGP</a></li>        <li><a href="http://www.usablesecurity.net/projects/Insider_Threat/index.php" title="Insider Threat">Insider Threat</a></li><li><a href="http://www.usablesecurity.net/projects/Passwords/index.php" title="Passwords">Passwords</a></li><li><a href="http://www.usablesecurity.net/projects/PKI/index.php" title="PKI">PKI</a></li><li><a href="http://www.usablesecurity.net/projects/ECrime/index.php" title="E-Crime">E-Crime</a></li><li><a href="http://www.usablesecurity.net/projects/Aging/index.php" title="Aging">Aging</a></li><li><a href="http://www.usablesecurity.net/projects/Sustainability/index.php" title="Sustainability">Sustainability</a></li><li><a href="http://www.usablesecurity.net/projects/Mental_Models/index.php" title="Mental Models">Mental Models</a></li><li><a href="http://www.usablesecurity.net/projects/SDN/index.php" title="SDN">SDN</a></li><li><a href="http://www.usablesecurity.net/projects/CSec_CRA/index.php" title="CSec_CRA">CSec_CRA</a></li></ul>
                        </li>
                        <li><a href="http://www.usablesecurity.net/people">People</a></li>
                        <li><a href="http://www.usablesecurity.net/publications">Publications</a></li>
      <li class="p2"><a href="http://www.usablesecurity.net/USEC/index.php">USEC</a>
      
      <ul class="sub2" style="margin-left: -212px; display: none;">
      <li><a href="http://www.usablesecurity.net/USEC/usec12/">USEC12</a></li>
      <li><a href="http://www.usablesecurity.net/USEC/usec13/">USEC13</a></li>
      <li><a href="http://www.usablesecurity.net/USEC/usec14/">USEC14</a></li>
      <li><a href="http://www.usablesecurity.net/USEC/usec15/">USEC15</a></li>
      <li><a href="http://www.usablesecurity.net/USEC/usec16/">USEC16</a></li>
      <li><a href="http://www.usablesecurity.net/USEC/usec17/">USEC17</a></li>
      <li><a href="http://www.usablesecurity.net/USEC/usec18/">USEC18</a></li>
      <li><a href="https://www.ndss-symposium.org/ndss2019/cfp-usec-2019/" class="menuLink">USEC19</a></li>
      </ul>

      </li>
                        <li><a href="http://www.usablesecurity.net/?internal=2#contact">Contact</a></li>
                        </ul>
                        -->
<!--
                        <li><a class="fifths columns header-link" href="projects/CSec_CRA/csec.php">CSec CRA</a></li>
                        <li><a class="fifths columns header-link" href="projects/SDN/sdn.php">SDN</a></li>
                        <li><a class="fifths columns header-link" href="projects/Phishing/phishing_people.php">Phishing</a></li>
-->
                    </div>

                </div>
            </div>
        </div>
    </section>

  <script src="HATS_files/jquery.js"></script>
  <script src="HATS_files/bootstrap.js"></script>
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="twelve columns section-header centered">
                    <h1>Making security that fits the user &amp; the occasion</h1>
                    <!--<h6>Introducing Usable Security</h6>-->
                </div>
            </div>

            <div style="background-color:white;">
              <table align="center">
                <tr>
                  <td><a href="action2.php?country=US&typeRadios=mturk&tt=0" title="United States"><img src="Images/US.jpg" width=220px></a></td>
                  <td><a href="action2.php?country=UK&typeRadios=mturk&tt=0" title="United Kingdom"><img src="Images/UK.jpg" height=220px></a></td>
                  <td><a href="action2.php?country=AU&typeRadios=mturk&tt=0" title="Australia"><img src="Images/AU.jpg" width=220px></a></td>
                  <td><a href="action2.php?country=NZ&typeRadios=mturk&tt=0" title="New Zealand"><img src="Images/NZ.png" width=220px></a></td>
                </tr>
                <tr class="country">
                    <td>United States</td>
                    <td>United Kingdom</td>
                    <td>Australia</td>
                    <td>New Zealand</td>
                </tr>
              </table>
            </div>

<br>


            <div class="hats-row">
                    <strong>Test Your Phishing Resilience</strong>
<p>Our vision is to use a set of well-understood, well-documented, and systematically method to explore phishing resilience. Currently we are offering phishing resilience testing only to recruited participants. 
</p>
<p>
  If you have a participant code please select the nation above.
</p>
<p>
  If you a scholar who would like to participate or would like to sign up to test your resilience please select your country of residence to provide contact information.
</p>
                </div>
            </div>
        </div>
    </section>


    <section class="projects">
        <div class="container">
            <div class="hats-row">
                <div class="twelve columns centered section-header">
                    <h1><font color="black">Making security that fits the user &amp; the occasion</font></h1>
                    <br>
                    <h5>Our Projects</h5>
                </div>
            </div>
            <div class="hats-row centered">
                <div class="four columns">
                    <a href="http://www.usablesecurity.net/projects/index.php?category=understanding"><img src="HATS_files/hats_cuts_icon.png"></a>
                    <p><strong>Understanding Risk</strong></p>
                    <p>
<a href="http://www.usablesecurity.net/projects/Phishing/" style="color:black;">Phishing</a>, 
<a href="http://www.usablesecurity.net/projects/CSec_CRA/" style="color:black;">CSec CRA</a>, 
<a href="http://www.usablesecurity.net/projects/SDN/" style="color:black;">SDN</a>, 
<a href="http://www.usablesecurity.net/projects/IoT/" style="color:black;">IoT</a>, 
<a href="http://www.usablesecurity.net/projects/Aging/" style="color:black;">Aging in Place</a>, 
<a href="http://www.usablesecurity.net/projects/BGP/" style="color:black;">BGP</a>, 
<a href="http://www.usablesecurity.net/projects/ECrime/" style="color:black;">E-Crime</a>, 
<a href="http://www.usablesecurity.net/projects/Passwords/" style="color:black;">Passwords</a>,
<a href="http://www.usablesecurity.net/projects/Mobile_Privacy/" style="color:black;">Mobile Privacy</a>, 
<a href="http://www.usablesecurity.net/projects/MUD/" style="color:black;">MUD</a>
                    </p>
                    <p><a href="http://www.usablesecurity.net/projects/index.php?category=understanding">Read More</a>
                </p></div>
                <div class="four columns">
                    <a href="http://www.usablesecurity.net/projects/index.php?category=mitigating"><img src="HATS_files/hats_csec_icon.png"></a>
                    <p><strong>Mitigating Risk</strong></p>
                    <p>
<a href="http://www.usablesecurity.net/projects/IoT/" style="color:black;">IoT</a>, 
<a href="http://www.usablesecurity.net/projects/Phishing/" style="color:black;">Phishing</a>, 
<a href="http://www.usablesecurity.net/projects/Aging/" style="color:black;">Aging in Place</a>, 
<a href="http://www.usablesecurity.net/projects/PKI/" style="color:black;">PKI</a>, 
<a href="http://www.usablesecurity.net/projects/SDN/" style="color:black;">SDN</a>, 
<a href="http://www.usablesecurity.net/projects/BGP/" style="color:black;">BGP</a>, 
<a href="http://www.usablesecurity.net/projects/Insider_Threat/" style="color:black;">Insider threat</a>, 
<a href="http://www.usablesecurity.net/projects/Sustainability/" style="color:black;">Sustainability</a>,
<a href="http://www.usablesecurity.net/projects/Mobile_Privacy/" style="color:black;">Mobile Privacy</a>, 
<a href="http://www.usablesecurity.net/projects/MUD/" style="color:black;">MUD</a> 
                    </p>
                    <p><a href="http://www.usablesecurity.net/projects/index.php?category=mitigating">Read More</a>
                </p></div>
                <div class="four columns">
                    <a href="http://www.usablesecurity.net/projects/index.php?category=communicating"><img src="HATS_files/hats_sdn_icon.png"></a>
                    <p><strong>Communicating Risk</strong></p>
                    <p>
<a href="http://www.usablesecurity.net/projects/2FA/" style="color:black;">2FA</a>, 
<a href="http://www.usablesecurity.net/projects/ECrime/" style="color:black;">E-Crime</a>, 
<a href="http://www.usablesecurity.net/projects/PKI/" style="color:black;">PKI</a>, 
<a href="http://www.usablesecurity.net/projects/Social_Network_Privacy/" style="color:black;">Social Network Privacy</a>, 
<a href="http://www.usablesecurity.net/projects/Mental_Models/" style="color:black;">Mental Models</a>, 
<a href="http://www.usablesecurity.net/projects/Mobile_Privacy/" style="color:black;">Mobile Privacy</a>, 
<a href="http://www.usablesecurity.net/projects/Sustainability/" style="color:black;">Sustainability</a>, 
<a href="http://www.usablesecurity.net/projects/Phishing/" style="color:black;">Phishing</a> 
                    </p>
                    <p><a href="http://www.usablesecurity.net/projects/index.php?category=communicating">Read More</a>
                </p></div>
            </div>
        </div>
    </section>



    <!-- I'm stacking these with divs so that it will resize with the browser WITHOUT HAVING TO WRITE MORE CSS -->
    <!-- Probably not the "best way" to do it but it works fine so whatever -->
    <a name="people"></a>
    <section class="team centered">
        <div class="container">
            <div class="hats-row">
                <div class="twelve columns section-header">
                    <h1>Meet the Team</h1>
                    <h6>The minds behind the work</h6>
                </div>
            </div>
            <div class="hats-row">
                <div>
                <a href="http://www.usablesecurity.net/people/">
                        <img src="HATS_files/ieee_winning.jpg" width="900px">
                    </a>
                </div>
            </div>
        </div>
    </section>
<!--
    <a name="people"></a><section class="team centered">
        <div class="container">
            <div class="row">
                <div class="twelve columns section-header">
                    <h1>Meet the Team</h1>
                    <h6>The minds behind the work</h6>
                </div>
            </div>
            <div class="row">
                <div class="three columns person">
                    <a href="http://ljean.com/index.php">
                        <img src="images/jean2.png"/>
                    </a>
                    <p>Professor Jean Camp</p>
                    <p>Principal Investigator</p>
                </div>
                <div class="three columns person">
                    <a href="https://www.linkedin.com/in/timothykelley">
                        <img src="images/headshots/tim5.png"/>
                    </a>
                    <p>Tim Kelley</p>
                    <p>Postdoctoral Researcher</p>
                </div>
                <div class="three columns person">
                    <a href="https://www.linkedin.com/pub/prashanth-rajivan/30/470/480">
                        <img src="images/headshots/prashanth4.png"/>
                    </a>
                    <p>Prashanth Rajivan</p>
                    <p>Postdoctoral Researcher</p>
                </div>
                <div class="three columns person">
                    <a href="http://www.zhdong.net/">
                        <img src="images/zheng.png"/>
                    </a>
                    <p>Zheng Dong</p>
                    <p>Doctoral Researcher</p>
                </div>
            </div>
        </div>
    </section>
-->
        <a name="contact"></a>
    <section class="contact">
        <div class="container">
            <div class="hats-row">
                <div class="twelve columns centered section-header">
                    <h1>Contact Us</h1>
                    <h6>Call, email, or use the form to contact us. </h6>
                </div>
            </div>
            <div class="hats-row">
                <div class="six columns">
                    <p>☎ 1 (812) 856-1865</p>
                    <p>✉ <a style="color: #FFF;" href="mailto:spice@indiana.edu">spice@indiana.edu</a></p>
                    <p>⌂ Informatics West, 901 E. 10th Street, Bloomintgton, IN 47408</p>
                </div>
                <div class="six columns">
                    <form class="contact-form" action="mail.php" method="POST">
                        <div class="row">
                            <div class="six columns">
                                <label>Name</label><br>
                                <input class="u-full-width" placeholder="Name" id="name" name="name" required="" type="name">
                            </div>
                            <div class="six columns">
                                <label>Email</label><br>
                                <input class="u-full-width" placeholder="email@domain.com" id="email" name="email" required="" type="email">
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea class="u-full-width" rows="25" placeholder="Type your message here..." type="text" name="message" id="message" required=""></textarea>
                        <input class="button-primary" value="Submit" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright">
        <div class="container ">
            <div class="row">
                <div class="twelve columns centered">© 2015-2019 <a href="http://usablesecurity.net/">HATS</a>. All Rights Reserved.
                </div>
                <br><br>
                <div class="twelve columns right"><a href="http://www.usablesecurity.net/#">Back to top</a>
                </div>
            </div>
        </div>
    </section><script src="HATS_files/jquery.js"></script>
<script>
var DEBUG = false;
$(document).ready(function(){
    addDropdown();
    swapMenu();
    var w = $(".tablink").width();
    //console.log("W: " + w);
    if(w < 100){
        var tableVal= [];
        $('.tab button').each (function () {
        tableVal[this.id] = $(this).text();
        //console.log($(this).text());
        var t = $(this).text();
        //console.log("T: " + t.substring(0,8) + "...");
        //if(t.length > 8){
        //    $(this).attr('title', t);
        //    $(this).text(t.substring(0,8) + "...");
        //}
        });
    }
});
var resizeTimer;
$( window ).resize(function() {
    //console.log("Hello");
    gval = false;
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
       // Run code here, resizing has "stopped"
       gval = true;
       //console.log("Haha");
    }, 250);
});


var topvar = ".";
</script>
<script src="HATS_files/navigation.js" type="text/javascript"></script>
<script src="HATS_files/fastclick.js"></script>
<script src="HATS_files/scroll.js"></script>
<script src="HATS_files/fixed-responsive-nav.js"></script><div class="mask"></div>



</body></html>
