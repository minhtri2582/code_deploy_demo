<?php

require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;

/**
 * Describe Instances
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

$ec2Client = new Aws\Ec2\Ec2Client([
    'region' => 'ap-southeast-1',
    'version' => '2016-11-15',
    //'profile' => 'default'
]);
$result = $ec2Client->describeInstances();
echo "Instances: \n";
foreach ($result['Reservations'] as $reservation) {
    foreach ($reservation['Instances'] as $instance) {
        echo "InstanceId: {$instance['InstanceId']} - {$instance['State']['Name']} \n";
    }
}

