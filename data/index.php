<?php

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
new \Wsdl2PhpGenerator\Config(array(
    'inputFile' => 'http://www.webservicex.net/CurrencyConvertor.asmx?WSDL',
    'outputDir' => '/tmp/CurrencyConverter'
))
);

require '/tmp/CurrencyConverter/autoload.php';

// A class will generated representing the service.
// It is named after the element in the WSDL and has a method for each operation.
$service = new \CurrencyConvertor();
$request = new \ConversionRate(\Currency::USD, \Currency::EUR);
$response = $service->ConversionRate($request);

echo $response->getConversionRateResult();

?>
http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl

php wsdl2phpgenerator-2.3.0.phar -i http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl -o tmp/my/directory/wsdl
