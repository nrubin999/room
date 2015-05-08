<?php

require 'vendor/autoload.php';
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;

ParseClient::initialize('rYpyvlBQJhjWTY1RaCqT7Z1fqETwmRpFv1z21E9n', 'nE7z0wOwjcHHlqStC9uwcZiWwkrF9RuGLRWRLLkg', 'Z4XkyQpyrlEZonQV5gL6ajPzZghKGjkgtGbjxLA0');

$object = new ParseObject("email");
$objectId = $object->getObjectId();

// Set values:
$object->set("subject", $_POST['subject']);
$object->set("recipient", $_POST['recipient']);
$object->set("from", $_POST['from']);
$object->set("sender", $_POST['sender']);
$object->set("body", $_POST['body-plain']);

// Save:
try {
  $object->save();
  echo 'New object created with objectId: ' . $object->getObjectId();
} catch (ParseException $ex) {  
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' + $ex->getMessage();
}	
?>
