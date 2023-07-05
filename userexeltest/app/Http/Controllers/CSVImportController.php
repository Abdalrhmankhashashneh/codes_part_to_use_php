<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use League\Csv\Reader;

class CSVImportController extends Controller
{
    public function importCSV(Request $request)
    {


        $file = $request->file('exel_users_file');

        // Create a reader object
        $csv = Reader::createFromPath($file->getPathname());
        // Skip the header row
        $csv->setHeaderOffset(0);

        // Get all the records
        $records = $csv->getRecords();

        $users = array();

        // Iterate over the records and save to the database
        foreach ($records as $record) {
            $user =[
                'name' => $record['name'],
                'email' => $record['email'],
                'password' => $record['password'],
            ];
            array_push($users, $user);
        }
        dd($users);
        return redirect()->back();
    }

}
