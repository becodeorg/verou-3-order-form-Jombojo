<?php



// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'p90', 'price' => 999],
    ['name' => 'Five-Seven', 'price' => 299],
    ['name' => 'Five-Seven MK2', 'price' => 369],
    ['name' => 'Scar-H PR', 'price' => 1299],
    ['name' => 'Scar-H TPR', 'price' => 1499],
    ['name' => 'Scar-L MK2', 'price' => 1099],
    ['name' => 'Scar-SC', 'price' => 799],
    ['name' => '40GL MK2', 'price' => 499],
    ['name' => 'P-12 Pump', 'price' => 699]
];

$totalValue = 0;

if(isset($_POST['test1'])){
    echo "checked value1"."<br>";
}

function validate()
{
    // This function will send a list of invalid fields back
    return [];
}

function handleForm() {

    // TODO: form related tasks (step 1)
    $message = 'Thanks for your order! We\'ll ship maybe';
    return $message;
    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check
$formSubmitted = !empty($_POST);
if ($formSubmitted) {
    $message = handleForm();
}

require 'form-view.php';



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);