<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

# [START gae_php_mysql_app]
use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Request;

// create the Silex application
$app = new Application();
$app->register(new TwigServiceProvider());
$app['twig.path'] = [ __DIR__ ];

$app->get('/', function () use ($app) {
    /** @var PDO $db */
    $db = $app['carsharedb'];
    /** @var Twig_Environment $twig */
    $twig = $app['twig'];

    // Show existing guestbook users.
    $results = $db->query('SELECT * from users');

    return $twig->render('cloudsql.html.twig', [
        'results' => $results,
    ]);
});

$app->post('/', function (Request $request) use ($app) {
    /** @var PDO $db */
    $db = $app['database'];

    $email = $request->request->get('email');
    $username = $request->request->get('username');
    $firstName = $request->request->get('firstName');
    $lastName = $request->request->get('lastName');
    $password = $request->request->get('password');
    $user_id = $request->request->get('user_id');

    if ($email && $username && $firstName && $lastName && $password && $user_id) {
        $stmt = $db->prepare('INSERT INTO users(email, username, firstName, lastName, password, user_id) values(:email, :username, :firstName, :lastName, :password, :user_id)');
        $stmt->execute([
            ':email' => $email,
            ':username' => $username,
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':password' => $password,
            ':user_id' => $user_id,
        ]);
    }

    return $app->redirect('/');
});

// function to return the PDO instance
$app['database'] = function () use ($app) {
    // Connect to CloudSQL from App Engine.
    $dsn = getenv('MYSQL_DSN');
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    if (!isset($dsn, $user) || false === $password) {
        throw new Exception('Set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
    }

    $db = new PDO($dsn, $user, $password);

    return $db;
};
# [END gae_php_mysql_app]

$app->get('create_tables', function () use ($app) {
    /** @var PDO $db */
    $db = $app['carsharedb'];
    // create the tables
    $stmt = $db->prepare('CREATE TABLE IF NOT EXISTS users ('
        . 'email VARCHAR(100) NOT NULL, '
        . 'username VARCHAR(100) NOT NULL, '
        . 'firstName VARCHAR(100) NOT NULL, '
        . 'lastName VARCHAR(100) NOT NULL, '
        . 'password VARCHAR(100) NOT NULL, '
        . 'user_id INT NOT NULL AUTO_INCREMENT, '
        . 'PRIMARY KEY ( user_id ))');
    $result = $stmt->execute();

    if (false === $result) {
        return sprintf("Error: %s\n", $stmt->errorInfo()[2]);
    } else {
        return 'Tables created';
    }
});

return $app;
