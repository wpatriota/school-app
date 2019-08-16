<?php

namespace tenda\Http\Controllers;

use Illuminate\Http\Request;
use tenda\Exports\UsersExport;
use tenda\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelUserController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('users\import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
    }
}
