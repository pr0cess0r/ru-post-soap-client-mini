#!/usr/bin/env php
<?php

$client = new SoapClient("http://voh.russianpost.ru:8080/niips-operationhistory-web/OperationHistory?wsdl");

$historyRequest = new stdClass();
$historyRequest->Barcode = 'ПРОВЕРЯЕМЫЙ КОД';
$historyRequest->MessageType = 0;

$response = $client->GetOperationHistory(new SoapParam($historyRequest, 'historyRequest'));

print_r($response);
