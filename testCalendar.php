
<?php

 /* require_once 'google-api-php-client/src/Google/autoload.php'; // or wherever autoload.php is located
  $client = new Google_Client();
  //$client->setAuthConfigFile('client_secrets.json');
  $client->addScope(Google_Service_Calendar::CALENDAR);
  $client->addScope("https://www.googleapis.com/auth/calendar");
  */
 session_start();
 
/*  include('/google-api-php-client/src/Google/autoload.php'); 
//TELL GOOGLE WHAT WE'RE DOING
$client = new Google_Client();
$client->setApplicationName("Coach Zbra"); //DON'T THINK THIS MATTERS
$client->setDeveloperKey('AIzaSyDZX2DLhYwiaEB3eFODZDMd4LnrdrFhmrM'); //GET AT AT DEVELOPERS.GOOGLE.COM
 $client->setClientId('923274585287-p3qus7hhi1palt6up1votqecdfejusl7.apps.googleusercontent.com');
 $client->setClientSecret('6YoCTUD6-UQq97jXwDorWXit');
 //$client->setAuthConfig('client_secret_923274585287-p3qus7hhi1palt6up1votqecdfejusl7.apps.googleusercontent.com.json');
*/
$client = getClient();
if(isset($_SESSION['oauth_access_token'])) 
{
    $client->setAccessToken($_SESSION['oauth_access_token']);
} 
else 
{
    $token = $client->authenticate('6YoCTUD6-UQq97jXwDorWXit');
    $_SESSION['oauth_access_token'] = $token;
}
print_r($_SESSION['oauth_access_token']);
$client->setAccessToken($_SESSION['oauth_access_token']);
$service = new Google_Service_Calendar($client);
 
  //$client = getClient();

  //$service = new Google_Service_Calendar_Events($client);
  
  $calendarId = 'rbgotppg5135h7gouaa79orj1k@group.calendar.google.com';

  $event = new Google_Service_Calendar_Event(array(
  'summary' => 'Cours de guitare',
  'location' => '800 Howard St., San Francisco, CA 94103',
  'description' => 'Nicolas Dupont 0601020304',
  'start' => array(
    'dateTime' => '2016-09-21T16:00:00-07:00',
    'timeZone' => 'America/Los_Angeles',
  ),
  'end' => array(
    'dateTime' => '2016-09-21T17:00:00-07:00',
    'timeZone' => 'America/Los_Angeles',
  ),
  'recurrence' => array(
    'RRULE:FREQ=DAILY;COUNT=2'
  ),
  'attendees' => array(
    array('email' => 'lpage@example.com'),
    array('email' => 'sbrin@example.com'),
  ),
  'reminders' => array(
    'useDefault' => FALSE,
    'overrides' => array(
      array('method' => 'email', 'minutes' => 24 * 60),
      array('method' => 'popup', 'minutes' => 10),
    ),
  ),
));

$eventCreated = $service->events->insert($calendarId, $event);
printf('Event created: %s\n', $eventCreated->htmlLink);

function getClient() {
    include('/google-api-php-client/src/Google/autoload.php'); 
//TELL GOOGLE WHAT WE'RE DOING
$client = new Google_Client();
$client->setApplicationName("Coach Zbra"); //DON'T THINK THIS MATTERS
$client->setDeveloperKey('AIzaSyDZX2DLhYwiaEB3eFODZDMd4LnrdrFhmrM'); //GET AT AT DEVELOPERS.GOOGLE.COM
 $client->setClientId('923274585287-p3qus7hhi1palt6up1votqecdfejusl7.apps.googleusercontent.com');
 $client->setClientSecret('6YoCTUD6-UQq97jXwDorWXit');
 //$client->setAuthConfig('client_secret_923274585287-p3qus7hhi1palt6up1votqecdfejusl7.apps.googleusercontent.com.json');

  // Load previously authorized credentials from a file.
  //$credentialsPath = expandHomeDirectory("https://www.googleapis.com/auth/calendar");
  if (file_exists($credentialsPath)) {
    $accessToken = json_decode(file_get_contents($credentialsPath), true);
  } else {
    // Request authorization from the user.
    $authUrl = $client->createAuthUrl();
    printf("Open the following link in your browser:\n%s\n", $authUrl);
    print 'Enter verification code: ';
    $authCode = trim(fgets(STDIN));

    // Exchange authorization code for an access token.
    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

    // Store the credentials to disk.
    if(!file_exists(dirname($credentialsPath))) {
      mkdir(dirname($credentialsPath), 0700, true);
    }
    file_put_contents($credentialsPath, json_encode($accessToken));
    printf("Credentials saved to %s\n", $credentialsPath);
  }
  $client->setAccessToken($accessToken);

  // Refresh the token if it's expired.
  if ($client->isAccessTokenExpired()) {
    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
    file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
  }
  return $client;
}
