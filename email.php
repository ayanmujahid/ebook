<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Recipient Emails
$to = 'info@bookauthorworld.com, ayanmujahid1234@gmail.com, masoodum123@gmail.com, abdulqadirkhimani136@gmail.com';

// Sender Email
$from = "leads@bookauthorworld.com";

// Database Connection
$con = mysqli_connect("localhost", "nohfilco_bookauthorworld", "@Dm!n0307", "nohfilco_bookauthorworld");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// --- Capture Form Fields ---
$name        = $_POST['name'] ?? '';
$email       = $_POST['email'] ?? '';
$phone       = $_POST['phone_number'] ?? '';
$message     = $_POST['message'] ?? '';

// Hidden tracking fields
$ip2loc_ip       = $_POST['ip2loc_ip'] ?? $_SERVER['REMOTE_ADDR'];
$ip2loc_isp      = $_POST['ip2loc_isp'] ?? '';
$ip2loc_org      = $_POST['ip2loc_org'] ?? '';
$ip2loc_country  = $_POST['ip2loc_country'] ?? '';
$ip2loc_region   = $_POST['ip2loc_region'] ?? '';
$ip2loc_city     = $_POST['ip2loc_city'] ?? '';
$landing_page    = $_POST['landing_page'] ?? '';
$server_ip       = $_POST['server_ip'] ?? '';
$referrer_url    = $_POST['referrer_url'] ?? '';
$campaign_name   = $_POST['campaign_name'] ?? '';
$campaign_email  = $_POST['campaign_email'] ?? '';
$source          = $_POST['source'] ?? '';
$campaign_category = $_POST['campaign_category'] ?? '';
$campaign_country  = $_POST['campaign_country'] ?? '';
$campaign_phone    = $_POST['campaign_phone'] ?? '';
$campaign_offer    = $_POST['campaign_offer'] ?? '';
$package_name    = $_POST['package_name'] ?? '';
$lead_amount     = $_POST['lead_amount'] ?? '';

// --- Save to DB ---
$sql = "INSERT INTO leads (
    name, email, phone, message, ip2loc_ip, ip2loc_isp, ip2loc_org, ip2loc_country, ip2loc_region, ip2loc_city,
    landing_page, server_ip, referrer_url, campaign_name, campaign_email, source, campaign_category, campaign_country,
    campaign_phone, campaign_offer, package_name, lead_amount, created_at
) VALUES (
    '".mysqli_real_escape_string($con,$name)."',
    '".mysqli_real_escape_string($con,$email)."',
    '".mysqli_real_escape_string($con,$phone)."',
    '".mysqli_real_escape_string($con,$message)."',
    '".mysqli_real_escape_string($con,$ip2loc_ip)."',
    '".mysqli_real_escape_string($con,$ip2loc_isp)."',
    '".mysqli_real_escape_string($con,$ip2loc_org)."',
    '".mysqli_real_escape_string($con,$ip2loc_country)."',
    '".mysqli_real_escape_string($con,$ip2loc_region)."',
    '".mysqli_real_escape_string($con,$ip2loc_city)."',
    '".mysqli_real_escape_string($con,$landing_page)."',
    '".mysqli_real_escape_string($con,$server_ip)."',
    '".mysqli_real_escape_string($con,$referrer_url)."',
    '".mysqli_real_escape_string($con,$campaign_name)."',
    '".mysqli_real_escape_string($con,$campaign_email)."',
    '".mysqli_real_escape_string($con,$source)."',
    '".mysqli_real_escape_string($con,$campaign_category)."',
    '".mysqli_real_escape_string($con,$campaign_country)."',
    '".mysqli_real_escape_string($con,$campaign_phone)."',
    '".mysqli_real_escape_string($con,$campaign_offer)."',
    '".mysqli_real_escape_string($con,$package_name)."',
    '".mysqli_real_escape_string($con,$lead_amount)."',
    NOW()
)";
mysqli_query($con, $sql);

// --- Build Email ---
$subject = "New Inquiry from Book Author World Website";
$body  = "<html><body>";
$body .= "<h3>New Inquiry</h3>";
$body .= "<b>Name:</b> $name<br/>";
$body .= "<b>Email:</b> $email<br/>";
$body .= "<b>Phone:</b> $phone<br/>";
$body .= "<b>Message:</b> $message<br/><br/>";

$body .= "<h4>Tracking Info</h4>";
$body .= "<b>IP Address:</b> $ip2loc_ip<br/>";
if (!empty($ip2loc_country)) $body .= "<b>Country:</b> $ip2loc_country<br/>";
if (!empty($ip2loc_region))  $body .= "<b>Region:</b> $ip2loc_region<br/>";
if (!empty($ip2loc_city))    $body .= "<b>City:</b> $ip2loc_city<br/>";
if (!empty($referrer_url))   $body .= "<b>Referrer:</b> $referrer_url<br/>";
if (!empty($package_name))   $body .= "<b>Package:</b> $package_name<br/>";
if (!empty($lead_amount))    $body .= "<b>Lead Amount:</b> $lead_amount<br/>";
$body .= "</body></html>";

// Headers
$headers  = "From: Book Author World <$from>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send Email
if (mail($to, $subject, $body, $headers)) {
    header('Location: https://bookauthorworld.com/thank-you.php?name='.$name.'&email='.$email.'&phone='.$phone);
    exit;
} else {
    echo "Message saved in DB but sending email failed.";
}
?>
