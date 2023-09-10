<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessCsvFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {

        return view('upload');
    }

    public function store(Request $request)
    {
        $csv = ($request->file('csv'));

        $chunks = array_chunk(file($request->csv), 50);


        $header = [];

        foreach ($chunks as $key => $chunk) {
            $data = array_map('str_getcsv', $chunk);

            if ($key === 0) {
                $header = $data[0];
                unset($data[0]);
            }
            ProcessCsvFile::dispatch($header, $data);
        }
        foreach ($chunks as $k => $chunk) {
            dd($chunk);
        }
    }
}
