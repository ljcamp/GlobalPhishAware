# DCNLabStudy
This a website for running an MTurk study examining real-world decision making
 in relationship to potential website manipulations.
 
 The current goals are: 
 replace the survey buttons with card sorting; 
 display the results in a visualization based on the current data as a function of demographics and expertise, etc. That is, identify what variable would have to change to improve phishing score: expertise,  risk perception, risk posture
 automate the addition of a site
 
 An example is currently running at https://global.cognitivesecurity.net/

## Specifiying Testing Type and login type
You can use the query string identifier 'tt' (Testing Type) and
'type' (login type) to specify whether you want time or accuracy
and the type of login.

### Time
[Server Location]/index.php?tt=0

### Accuracy
[Server Location]/index.php?tt=1

### IU Login
[Server Location]/index.php?type=iu

### MTurk
[Server Location]/index.php?type=mturk

### Example Testing URL
[Server Location]/index?tt=0&type=mturk (Time test on MTurk)
