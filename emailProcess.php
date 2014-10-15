<?php

include_once('Swift/lib/swift_required.php');
 
$transport = Swift_SmtpTransport::newInstance('mail.roadmaster.com', 25)
    ->setUsername('noreply@roadmaster.com')
    ->setPassword('cptc007');
   
$mailer = Swift_Mailer::newInstance($transport);

unset($_POST['submit']);
$text = str_replace(array('array (',')','\'',','), '', var_export(array_filter($_POST), 1));
 
if(strlen($text) > 20)
{
	$message = Swift_Message::newInstance()
	    ->setSubject('ATS Inquiry')
	    ->setFrom('noreply@roadmaster.com')
	    ->setTo(array('ATSInfo@ATSTrainingSystems.com' => 'ATS'))
	    //->setTo(array('jdough@careerpathtraining.com' => 'ATS'))
	    ->setBody($text);
	    // ->addPart('The <b>quick</b> brown <b style=”color:orange”>fox</b> jumped over the <b>lazy</b> dog.', 'text/html');
	 
	$mailer->send($message);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.inc"); ?>
<title>ATS Training Systems</title>
        
</head>

<body>

<div id="main">
	<div id="interiorTop"><a href="/default.php"><img src="images/spacer.gif" border="0"></a>
    	<div id="interiorMenu"><?php include("includes/topMenu.inc"); ?></div>
    
    </div>
    

    <div id="interiorMiddle">
  
    <div id="interiorContents">
    <!-- Insert Page Contents Here -->  
    
    <h1>Contact Form Confirmation</h1>
    	<div style="width:100%; text-align:center; padding-top:20px;"><img src="/images/confirmation.gif"><br>
    	<h2>An ATS representative will be in contact shortly!</h2>
    	</div>
   
    <!--End Page Contents-->
    </div>
        </div>
    
 <div class="footerTop"></div>

    <!-- Begin Foooter Contents -->
    <div id="hpSec3"><?php include("includes/lowerMenu.inc"); ?></div>
    
    <!-- End Foooter Contents -->
       <div class="footerBottom"></div>
        
    </div>
</div>

    <div id="hpSec4"><?php include("includes/footerMenu.inc"); ?></div>

</body>
</html>
