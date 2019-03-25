<?php

require "vendor/autoload.php";

$client = new \GuzzleHttp\Client([
    'verify' => false
]);
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

//echo $response->getStatusCode(); # 200
//echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
$users = json_decode($response->getBody()); # '{"id": 1420053, "name": "guzzle", ...}'
$collection = new App\UsersCollection($users);


print_r($collection->get());
die;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>

<body>
    <ul>
        <?php foreach ($users as $user) : ?>
        <li><?php echo $user->email ?>,
            <?php echo $user->address->street ?>,
            <?php echo $user->address->suite ?>,
            (<?php echo $user->address->zipcode; ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>

</html> 