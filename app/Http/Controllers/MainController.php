<?php

namespace App\Http\Controllers;
use App\Imports\IdsClientImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function clients()
    {
        $this->middleware("auth");
        return view('clients');
    }

    public function sales()
    {
        $this->middleware("auth");
        return view('sales');
    }

    public function inventory()
    {
        $this->middleware("auth");
        return view('inventory');
    }

    public function idProcessing()
    {
        $this->middleware("auth");
        $data = DB::table('id_datas')->orderBy('id', 'DESC')->get();
        return view('id_processing', compact('data'));
    }

    function importExcel(Request $request)
    {
     
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        // die($request->file('select_file'));
        // die($request->file('select_file'));//

        $path = $request->file('select_file')->getRealPath();
        $data = Excel::toArray(new IdsClientImport,$request->file('select_file'));
        
        $insert_data=array();
        if (count($data) > 0) {
            foreach ($data as $value) {
                $count = 0; //for headers
                foreach ($value as $row) {
                    if($count > 0){
                        // print_r($row);
                        if(!empty($row[1])){
                            $insert_data[] = array(
                                'id_no'  => $row[0],
                                'full_name'   => $row[1],
                                'position'   => $row[2],
                                'address'    => $row[3],
                                'contact_number'  => $row[4],
                                'date_of_birth'   => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5])->format('Y-m-d'),
                                'ptc_name'   => $row[6],
                                'ptc_address'   => $row[7],
                                'ptc_relationship'   => $row[8],
                                'ptc_contact_number'   => $row[9]
                            );
                        }
                    }
                    $count++;
                }
            }
            if (!empty($insert_data)) {
                DB::table('id_datas')->insert($insert_data);
            }
        }
        return back()->with('success', 'Excel Data Imported successfully.');
    }

    public function reports()
    {
        $this->middleware("auth");
        return view('reports');
    }

    public function users()
    {
        $this->middleware("auth");
        return view('users');
    }
}
