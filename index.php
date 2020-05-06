<?php
include("includes/header.php");
?>
  <script src="HATS_files/jquery.js"></script>
  <script src="HATS_files/bootstrap.js"></script>
    <section class="verfication">
        <div class="container">
            <div class="row">
<?php
if(isset($_GET['verified']) && $_GET['verified'] == "1"){
  echo "<font color='red'>Welcome! <strong>" . $_SESSION['username'] . "</strong>, your email (". $_SESSION['email'] . ") is successully verified.</font>";
  echo "<br/>";
}
if(isset($_GET['action']) && $_GET['action'] == "updated"){
  echo "<font color='red'>Your password is successully updated.</font>";
  echo "<br/>";
}
?>
                </div>
            </div>
        </div>
    </section>

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
                  <td><a href="action.php?country=US&typeRadios=mturk&tt=0" title="United States"><img src="Images/US.jpg" width=270px></a></td>
                  <td><a href="action.php?country=UK&typeRadios=mturk&tt=0" title="United Kingdom"><img src="Images/UK.jpg" height=270px></a></td>
                  <td><a href="action.php?country=AU&typeRadios=mturk&tt=0" title="Australia"><img src="Images/AU.jpg" width=270px></a></td>
                  <td><a href="action.php?country=NZ&typeRadios=mturk&tt=0" title="New Zealand"><img src="Images/NZ.jpg" height=270px></a></td>
                  <td><a href="action.php?country=CA&typeRadios=mturk&tt=0" title="Canada"><img src="Images/NZ.jpg" height=270px></a></td>
                </tr>
                <tr class="country">
                    <td>United States</td>
                    <td>United Kingdom</td>
                    <td>Australia</td>
                    <td>New Zealand</td>
                    <td>Canada</td>
                </tr>
              </table>
            </div>

<br>


            <div class="hats-row">
                    <strong>Test Your Phishing Resilience</strong>
<p>Our vision is to use a set of well-understood, well-documented, and systematic method to explore phishing resilience. Currently we are offering phishing resilience testing only to recruited participants. 
</p>
<p>
  If you have a participant code please select the nation above.
</p>
<p>
  If you are a scholar who would like to participate or would like to sign up to test your resilience please select your country of residence to provide contact information.
</p>
                </div>
            </div>
        </div>
    </section>


    <section class="copyright">
        <div class="container ">
            <div class="row">
                <div class="twelve columns centered">&copy; 2015-<?php echo date("Y"); ?> <a href="http://usablesecurity.net/">HATS</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </section>


</body></html>
