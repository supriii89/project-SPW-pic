<?php
require 'vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::create('/register', 'POST', [
    'name' => 'Test',
    'email' => 'test@test.com',
    'password' => '123456'
]);
$request->headers->set('Accept', 'application/json');

$response = $kernel->handle($request);
echo "Status: " . $response->getStatusCode() . "\n";
echo "Content: " . $response->getContent() . "\n";
echo "Headers:\n";
foreach ($response->headers->all() as $name => $values) {
    echo $name . ": " . implode(", ", $values) . "\n";
}
