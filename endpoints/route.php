<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$field_username = $_POST['username'];

# Instantiate the client.
$mgClient = new Mailgun('key-1aa034ffab247f23faa5ee5e9161f76f');

# Issue the call to the client.
$result = $mgClient->post("routes", array(
    'priority'    => 0,
    'expression'  => 'match_recipient("' . $field_username . '@sandbox711e01faa23e44a39a531b0d5a469dbf.mailgun.org")',
    'action'      => 'forward("http://nicholasrub.in/testing/room/email.php")',
    'description' => 'A user route'
));

?>