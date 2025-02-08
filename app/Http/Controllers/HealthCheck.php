<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HealthCheck extends Controller
{
    public function __invoke(): array
    {
        try {
            $response = "";
            DB::connection()->getPdo();
            if (DB::connection()->getDatabaseName()) {
                $response = "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
            } else {
                $response = "Could not find the database. Please check your configuration.";
            }
            return ["message" => $response];
        } catch (\Exception $exception) {
            return [
                "message" => $exception
            ];
        }
    }
}
