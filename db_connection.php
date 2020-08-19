<?php

export GOOGLE_APPLICATION_CREDENTIALS="path/to/your/keyfile.json"
composer require google/cloud-firestore

use Google\Cloud\Firestore\FirestoreClient;

/**
 * Initialize Cloud Firestore with default project ID.
 * ```
 * initialize();
 * ```
 */
function initialize()
{
    // Create the Cloud Firestore client
    $db = new FirestoreClient();
    printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
}

?>
