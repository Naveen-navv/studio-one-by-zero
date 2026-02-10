<?php
extract($_POST);
$FromEmail='mathiking13032023@gmail.com';
$admin_mail = "jbasim96@gmail.com";
$site_title = "Navilu";
$admin_email_address = "jbasim96@gmail.com";
$admin_subject_mail = "New enquiry from Navilu!!!";
$user_email_address = $email_address;
// $user_email_address = "shamlashermin10@gmail.com";
$user_subject_mail = "Thank you for your patience - Navilu!!!";
$logo = "https://godigitell.co.in/dev/navilu/images/logo.webp"; 
$base_url = "https://godigitell.co.in/dev/navilu/";
if($_POST)
{

$admin_mail_content = '<table border="0" width="100%" cellspacing="0" cellpadding="0"><!-- LOGO -->
<tbody>
<tr>
<td align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 40px 10px 40px 10px;" align="center" valign="top"> </td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;" align="center" valign="top" bgcolor="#383D50">
<a href="'.$base_url.'" target="_blank" style="text-decoration: none;" >
<img style="display: block; border: 0px; padding-top: 25px;color:#000000;text-decoration: none;" src="'.$logo.'" alt="'.$site_title.'" width="" height="" />
</a>
<h1 style="font-size: 34px; font-weight: 400; margin: 2;color: #fff;">Hello Admin,</h1>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#f4f4f4">  
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 20px 30px 0 30px; color: #666666; font-size: 18px !important; font-weight: 400; line-height: 25px;" align="left" bgcolor="#ffffff">
<p style="margin: 0; font-size: 18px !important;"></p>
<p>Name : '.$name.'</p>
<p>Last Name : '.$last_name.'</p>
<p>Email : '.$email_address.'</p>
<p>Phone Number : '.$contact_no.'</p>
<p>Message : '.$text_message.'</p>
<p style="margin: 0; font-size: 18px !important;"> </p>
</td>
</tr>
<tr>
<td style="padding: 0px 30px 20px 30px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;" align="left" bgcolor="#ffffff">
<p style="margin: 0; font-size: 18px !important;">If you have any questions, just reply to this email—we are always happy to help out.</p>
</td>
</tr>
<tr>
<td style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;" align="left" bgcolor="#ffffff">
<p style="margin: 0; font-size: 18px !important;">Regards,<br />Team - '.$site_title.'</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 0px 30px 30px 30px; color: #666666; font-size: 14px; font-weight: 400; line-height: 18px;" align="center" bgcolor="#f4f4f4"><br />
<p>2022 © <a style="color: #111111; font-weight: bold;" href="'.$base_url.'" target="_blank" rel="noopener">'.$site_title.'</a> ALL Rights Reserved.</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>';

if($admin_subject_mail!="" AND $admin_mail!="" AND $admin_mail_content!="")
	{
		$url = 'https://api.elasticemail.com/v2/email/send';
		try{
			$post = array('from' => $FromEmail,
				'fromName' => 'Navilu',
				'apikey' => '705CADBCB12D33342DB254712973C99F5EDDA0114D2FA6EA9CDD0DC27F327E610E0D131B260D920F2DC90CEB41A5C59A',
				'subject' => $admin_subject_mail,
				'to' => $admin_mail,
				'bodyHtml' => $admin_mail_content,
				'isTransactional' => false);
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $post,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HEADER => false,
				CURLOPT_SSL_VERIFYPEER => false
			));
			$result=curl_exec ($ch);
			curl_close ($ch);
			echo $result;	
		}
		catch(Exception $ex){
			echo $result=$ex->getMessage();
		}
	}




$user_mail_content = '<table border="0" width="100%" cellspacing="0" cellpadding="0"><!-- LOGO -->
<tbody>
<tr>
<td align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 40px 10px 40px 10px;" align="center" valign="top"> </td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;" align="center" valign="top" bgcolor="#383D50">
<a href="'.$base_url.'" target="_blank" >
<img style="display: block; border: 0px; padding-top: 25px;" src="'.$logo.'" alt="'.$site_title.'" width="" height="" />
</a>
<h1 style="font-size: 34px; font-weight: 400; margin: 2;color: #fff;">Hello '.$name.',</h1>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 20px 30px 0 30px; color: #666666; font-size: 18px !important; font-weight: 400; line-height: 25px;" align="left" bgcolor="#ffffff">
<!--p style="margin: 0; font-size: 18px !important;">Dear '.$name.',</p-->
<p style="margin: 0; font-size: 18px !important;"> </p>
<p>Thanks for your interest with us, Our executives will get in touch with your shortly</p>
</p>
<p style="margin: 0; font-size: 18px !important;"> </p>
</td>
</tr>
<tr>
<td style="padding: 0px 30px 20px 30px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;" align="left" bgcolor="#ffffff">
<p style="margin: 0; font-size: 18px !important;">If you have any questions, just reply to this email—we are always happy to help out.</p>
</td>
</tr>
<tr>
<td style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;" align="left" bgcolor="#ffffff">
<p style="margin: 0; font-size: 18px !important;">Regards,<br />Team - '.$site_title.'</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 0px 10px 0px 10px;" align="center" bgcolor="#f4f4f4">
<table style="max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 0px 30px 30px 30px; color: #666666; font-size: 14px; font-weight: 400; line-height: 18px;" align="center" bgcolor="#f4f4f4"><br />
<p>2022 © <a style="color: #111111; font-weight: bold;" href="'.$base_url.'" target="_blank" rel="noopener">'.$site_title.'</a> ALL Rights Reserved.</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>';

if($user_subject_mail!="" AND $user_email_address !="" AND $user_mail_content!="")
	{
		$url = 'https://api.elasticemail.com/v2/email/send';
		try{
			$post = array('from' => $FromEmail,
				'fromName' => 'Navilu',
				'apikey' => '705CADBCB12D33342DB254712973C99F5EDDA0114D2FA6EA9CDD0DC27F327E610E0D131B260D920F2DC90CEB41A5C59A',
				'subject' => $user_subject_mail,
				'to' => $user_email_address,
				'bodyHtml' => $user_mail_content,
				'isTransactional' => false);
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $post,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HEADER => false,
				CURLOPT_SSL_VERIFYPEER => false
			));
			$result=curl_exec ($ch);
			curl_close ($ch);
			echo $result;	
		}
		catch(Exception $ex){
			echo $result=$ex->getMessage();
		}
	}

}
else
{
	echo "I got your ip address";
}
?>