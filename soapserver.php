<?php
    function sayHello($name){
        $salutation = "You, $name, aaaa be delighted to know I am working!";
        return $salutation;
    }

    $server = new SoapServer ("greetings.wsdl");
    $server->addFunction("sayHello");
    $server->handle();
?>
