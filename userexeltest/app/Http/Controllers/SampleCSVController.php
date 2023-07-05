<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Csv\Writer;
class SampleCSVController extends Controller
{
    public function generateSampleCSV()
{
    $csvWriter = Writer::createFromFileObject(new \SplTempFileObject());
    $csvWriter->setDelimiter("\t");

    // Add header row
    $csvWriter->insertOne(['Name', 'Email', 'Password']);

    // Add sample data rows
    $csvWriter->insertOne(['John Doe', 'john@example.com', 'password123']);
    $csvWriter->insertOne(['Jane Smith', 'jane@example.com', 'p@ssw0rd']);
    $csvWriter->insertOne(['Mike Johnson', 'mike@example.com', 'secret123']);

    $response = new Response($csvWriter->toString());
    $response->header('Content-Type', 'text/csv');
    $response->header('Content-Disposition', 'attachment; filename="sample_users.csv"');

    return $response;
}
}
