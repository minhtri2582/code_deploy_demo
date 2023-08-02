<?php

require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;
/**
 * Enable/Disable Instance Monitoring
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

$ec2Client = new Aws\Ec2\Ec2Client([
    'region' => 'ap-southeast-1',
    'version' => '2016-11-15',
    //'profile' => 'default'
]);

$instanceIds = array('InstanceID1', 'InstanceID2');

$monitorInstance = 'ON';

if ($monitorInstance == 'ON') {
    $result = $ec2Client->monitorInstances(array(
        'InstanceIds' => $instanceIds
    ));
} else {
    $result = $ec2Client->unmonitorInstances(array(
        'InstanceIds' => $instanceIds
    ));
}

var_dump($result);



