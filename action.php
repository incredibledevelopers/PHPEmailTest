<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
include('/home/incredib/public_html/MyApps/PHPEmailTest/phpmailer/class.phpmailer.php');

$domain = "amitbhalerao.com";
$clientemailid= $_POST['email'];
$fexpirydate = "2020-04-10";
sendMail($domain,$clientemailid,$fexpirydate,"Renewal Reminder - 1");


function sendMail($domainname,$clientemailid,$fexpirydate,$subject)
        {
        	$content="
        	<fieldset>
		<table border='0' width='400' height='455'>
			<tr>
				<td height='68' width='400' colspan='2'><img src=http://incredibletechsolve.com/img/logo.png></td>
			</tr>
			<tr>
				<td height='52' width='400' colspan='2'><h2><font color=red>Your Orders are expiring soon.Renew them now to continue the services</font></h2></td>
			</tr>
			<tr>
				<td height='41' width='400' colspan='2'>
					Some of your orders are expiring soon (or have already expired.) Please renew them before they are deleted to avoid loss of data
				</td>
			</tr>
			<tr>
				<td height='122' width='400' colspan='2' align='center'>
			        <img src='http://media1.santabanta.com/full5/Indian%20%20Celebrities(F)/Poonam%20Sood/poonam-sood-0a.jpg' border='0'>
				</td>
			</tr>
			<tr>
				<td height='147' width='258'>
				<pre>
				SALES CONTACT
				
				Regards,
				Incredible Tech Solutions Sales Team
				sales@incredibletechsolve.com
				Tel No. (02188) 220 077
				</pre>
				</td>
				<td height='147' width='432'>
				<pre>
				BILLING CONTACT
				
				Regards,
				Incredible Tech Solutions Billing Team
				billing@incredibletechsolve.com
				Tel No. (02188) 220 077
				</pre>
				</td>
			</tr>
		</table>
		</fieldset>
        	";
	        $email = new PHPMailer();
	        $email->From      = 'incredib@lin6.plreseller.com';
	        $email->FromName  = 'Incredible Tech Solutions';
	        $email->Subject   = $subject;
	        $email->Body      = $content;
	        $email->IsHTML(true); 
	       // $email->AddAddress( 'incrcronmail@gmail.com' );   you can add multiple addresses
	        $email->AddAddress( $clientemailid );
	        $b=$email->Send();
	        
       	}

?>