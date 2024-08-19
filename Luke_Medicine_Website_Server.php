<? php 



//Server Specification

echo $_SERVER['PHP_SELF'];

echo $_SERVER['GATEWAY_INTERFACE'];

echo $_SERVER['SERVER_ADDR'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['SERVER_PROTOCOL'];
echo $_SERVER['SERVER_SOFTWARE'];

echo $_SERVER['REQUEST_METHOD'];
echo $_SERVER['REQUEST_TIME'];

echo $_SERVER['QUERY_STRING'];

echo $_SERVER['HTTP_ACCEPT'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_ACCEPT_CHARSET'];
echo $_SERVER['HTTP_REFERER'];

echo $_SERVER['HTTPS'];

echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['REMOTE_HOST'];
echo $_SERVER['REMOTE_PORT'];

echo $_SERVER['SCRIPT_FILENAME'];
echo $_SERVER['SCRIPT_URL'];
echo $_SERVER['SCRIPT_NAME'];

echo $_SERVER['SERVER_ADMIN'];
echo $_SERVER['SERVER_PORT'];
echo $_SERVER['SERVER_SIGNATURE'];

echo $_SERVER['PATH_TRANSLATED'];



//Request Form Data

$first_name = $_REQUEST['fname'];
$last_name = $_REQUEST['lname'];
$middle_name = $_REQUEST['midname'];
$user_age = $_REQUEST['age'];
$user_gender = $_REQUEST['genderselect'];
$birth_date = $_REQUEST['birthdate'];
$phone_number = $_REQUEST['phonenumber'];
$user_email = $_REQUEST['userEmail'];
$zone_purok = $_REQUEST['zone_or_purok'];
$barangay = $_REQUEST['barangay'];
$province_city = $_REQUEST['province_or_city'];
$have_medical_card = $_REQUEST['haveMedicalCard'];
$user_medical_card = $_REQUEST['medicalCard'];



//Obtain Form Data

$first_name2 = $_POST['fname'];
$last_name2 = $_POST['lname'];
$middle_name2 = $_POST['midname'];
$user_age2 = $_POST['age'];
$user_gender2 = $_POST['genderselect'];
$birth_date2 = $_POST['birthdate'];
$phone_number2 = $_POST['phonenumber'];
$user_email2 = $_POST['userEmail'];
$zone_purok2 = $_POST['zone_or_purok'];
$barangay2 = $_POST['barangay'];
$province_city2 = $_POST['province_or_city'];
$have_medical_card2 = $_POST['haveMedicalCard'];
$user_medical_card2 = $_POST['medicalCard'];
?>