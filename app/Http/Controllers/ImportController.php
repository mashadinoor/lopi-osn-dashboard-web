<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportCsvRequest;
use App\Services\CsvImportService;

class ImportController extends Controller
{
    public function index()
    {
        return inertia('Imports/Index');
    }

    public function store(
        ImportCsvRequest $request,
        CsvImportService $service
    ) {
        dd($request->file('file'));
    }
}
