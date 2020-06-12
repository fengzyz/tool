<?php
namespace  test;
require __DIR__.'/../vendor/autoload.php';
use imyfone\test\Service;
class ServiceTest
{
    public function  run(){
        $service = new Service();
        return $service->hello();;
    }
}
$serviceTest  = new ServiceTest();
echo $serviceTest->run();