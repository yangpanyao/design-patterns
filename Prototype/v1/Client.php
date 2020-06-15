<?php
namespace DesignPatterns\Prototype\V1;
require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run(){
        $resumea = new Resume("张三");
        $resumea->SetPersonalInfo('男','18');
        $resumea->SetWorkExperience('2000-2004','xx公司');

        $resumeb = new Resume("张三");
        $resumeb->SetPersonalInfo('男','18');
        $resumeb->SetWorkExperience('2000-2004','xx公司');

        $resumec = new Resume("张三");
        $resumec->SetPersonalInfo('男','18');
        $resumec->SetWorkExperience('2000-2004','xx公司');

        echo $resumea->Display();
        echo $resumeb->Display();
        echo $resumec->Display();
    }
}
$client = new Client();
$client->run();