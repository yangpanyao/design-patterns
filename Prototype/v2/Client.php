<?php
namespace DesignPatterns\Prototype\V2;

require dirname(__DIR__).'/../vendor/autoload.php';
class Client
{
    public function run(){
        $resumea = new Resume("张三");
        $resumea->SetPersonalInfo('男','18');
        $resumea->SetWorkExperience('2000-2004','xx公司');

        $resumeb = clone $resumea;
        $resumeb->SetPersonalInfo('男','20');
        $resumeb->SetWorkExperience('2000-2004','yy公司');

        $resumec = clone $resumea;
        $resumec->SetPersonalInfo('男','24');
        $resumec->SetWorkExperience('2004-2008','zz公司');

        echo $resumea->Display();
        echo $resumeb->Display();
        echo $resumec->Display();
    }
}
$client = new Client();
$client->run();