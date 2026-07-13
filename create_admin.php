<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

if (!App\Models\Admin::where('email', 'admin@admin.com')->exists()) {
    App\Models\Admin::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => Illuminate\Support\Facades\Hash::make('password')
    ]);
    echo "Admin user created successfully.";
} else {
    echo "Admin user already exists.";
}
