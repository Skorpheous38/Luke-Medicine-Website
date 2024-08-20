<? php 



//Database Admin Test Sign In

$server_name = "localhost";
$username = "Joshua Esclamado";
$server_access_password = "\$cosmological12$%";
$database_name = "Luke_Medicine_Website";

//Connect to mySQL Server

$connect_server = new mysqli($server_name, $username, $server_access_password, $database_name);
if ($connect_server -> connect_error) {
    die("Connection failed: " . $connect_server -> connect_error);
}
echo "Connected to Server successfully!";
$database = "CREATE DATABASE Luke_Medicine_Pharmacy";
if ($connect_server -> query($database) === TRUE ) {
    echo "Database is created!";
} else {
    echo "Database Connection Error:" . $connect_server -> error;
}

$table1 = " 
CREATE TABLE Customer (
    Customer_ID int NOT NULL AUTO_INCREMENT,
    Firstname varchar(50) NOT NULL,
    Lastname varchar(50) NOT NULL,
    Middlename varchar(50) NOT NULL,
    Phonenumber int NOT NULL,
    Age int NOT NULL,
    Gender varchar(6) NOT NULL,
    Branch_ID int NOT NULL,
    Item_ID int NOT NULL,

    PRIMARY KEY(Customer_ID),
    FOREIGN KEY (Branch_ID) REFERENCES Pharmacy(Branch_ID),
    FOREIGN KEY (Item_ID) REFERENCES 

    UNIQUE (Customer_ID)
)
"
$table2 = "
CREAT TABLE Manager (
    Manager_ID int NOT NULL AUTO_INCREMENT,
    Firstname varchar(50) NOT NULL,
    Lastname varchar(50) NOT NULL,
    Middlename varchar(50) NOT NULL,
    Phonenumber int NOT NULL,
    Age int NOT NULL,
    Gender varchar(6) NOT NULL,
    Branch_ID int NOT NULL,
    Pharmacist_ID int NOT NULL

    PRIMARY KEY (Manager_ID),
    FOREIGN KEY (Branch_ID) REFERENCES Pharmacy(Branch_ID),
    FOREIGN KEY (Pharmacist_ID) REFERENCES Pharmacist(Pharmacist_ID)

    UNIQUE (Manager_ID)
)
"
$table3 = "
CREATE TABLE Pharmacist(
    Pharmacist_ID int NOT NULL AUTO_INCREMENT,
    Firstname varchar(50) NOT NULL,
    Lastname varchar(50) NOT NULL,
    Middlename varchar(50) NOT NULL,
    Gender varchar(6) NOT NULL,
    Age int NOT NULL,
    Branch_ID int NOT NULL,
    Manager_ID int NOT NULL,
    Item_ID int NOT NULL

    PRIMARY KEY (Pharmacist_ID),
    FOREIGN KEY (Branch_ID) REFERENCES Pharmacy(Branch_ID),
    FOREIGN KEY (Manager_ID) REFERENCES Manager(Manager_ID),
    FOREIGN KEY (Item_ID) REFERENCES Stock_House(Item_ID)

    UNIQUE (Pharmacist_ID)
)
"
$table4 = "
CREATE TABLE Pharmacy (
    Branch_ID int NOT NULL AUTO_INCREMENT,
    Manager_ID int NOT NULL,
    Pharmacist_ID int NOT NULL,
    Item_ID int NOT NULL,
    Customer_ID int NOT NULL

    PRIMARY KEY (Branch_ID),
    FOREIGN KEY (Manager_ID) REFERENCES Manager(Manager_ID),
    FOREIGN KEY (Pharmacist_ID) REFERENCES Pharmacist(Pharmacist_ID),
    FOREIGN KEY (Item_ID) REFERENCES Stock_House(Item_ID),
    FOREIGN KEY (Customer_ID) REFERENCES Customer(Customer_ID)

    UNIQUE (Branch_ID)
)
"   
$table5 = "
CREATE TABLE Stock_House(
    Item_ID int NOT NULL AUTO_INCREMENT,
    Branch_ID int NOT NULL

    PRIMARY KEY (Item_ID),
    FOREIGN KEY (Branch_ID) REFERENCES Pharmacy(Branch_ID)

    UNIQUE (Item_ID)
)
"
$table6 = "
CREATE TABLE Transaction (
    Transaction_ID int NOT NULL AUTO_INCREMENT,
    Purchase_Date_Time DATETIME NOT NULL,
    Branch_ID int NOT NULL

    PRIMARY KEY (Transaction_ID),
    FOREIGN KEY (Branch_ID) REFERENCES Pharmacy(Branch_ID)

    UNIQUE (Transaction_ID)
)
"
$array_of_tables = array($table1, $table2, $table3, $table4, $table5, $table6);



//Query the Database

foreach ($array_of_tables as $variable) {

    if ($connect_server -> query($variable) === TRUE) {
        echo "Table $variable is successfuly created. ";
    } else {
        echo "Failed to create $variable" . $connect_server -> error;
    }

}
    


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

function record_customer() {

    $customer_record = [];

    $first_name = "INSERT INTO Customer(Firstname) VALUES ($_POST['fname'])";
    $last_name = "INSERT INTO Customer(Lastname) VALUES ($_POST['lname'])";
    $middle_name = "INSERT INTO Customer(Middlename) VALUES ($_POST['midname'])";
    $user_age = "INSERT INTO Customer(Age) VALUES ($_POST['age'])";
    $user_gender = "INSERT INTO Customer(Gender) VALUES ($_POST['genderselect'])";
    $phone_number = "INSERT INTO Customer(Phonenumber) VALUES ($_POST['phonenumber'])";

    array_push($customer_record, $first_name, $last_name, $middle_name, $user_age, $user_gender, $phone_number);
    
    foreach ($customer_record as $variable) {
        if ($connect_server -> query($variable) === TRUE) {

            echo "$variable is inserted." . "\n";

        } else {

            echo "$variable is rejected." . "\n" . $connect_server -> error;

        }
    }

}

record_customer();

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


$connect_server -> close();

?>