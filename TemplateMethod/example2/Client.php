<?php
namespace DesignPatterns\TemplateMethod\example2;
require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * Class Client
 * @package DesignPatterns\TemplateMethod\example2
 */
class Client
{
    public function run()
    {
        echo "Username: \n";
        $username = readline();
        echo "Password: \n";
        $password = readline();
        echo "Message: \n";
        $message = readline();

        echo "\nChoose the social network to post the message:\n" .
            "1 - Facebook\n" .
            "2 - zhihu\n";
        $choice = readline();

    // Now, let's create a proper social network object and send the message.
        if ($choice == 1) {
            $network = new Facebook($username, $password);
        } elseif ($choice == 2) {
            $network = new ZhiHu($username, $password);
        } else {
            die("Sorry, I'm not sure what you mean by that.\n");
        }
        $network->post($message);
    }
}
$worker = new  Client();
$worker->run();