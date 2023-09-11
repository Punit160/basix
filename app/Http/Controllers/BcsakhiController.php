<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bcsakhi;
use App\Imports\BcsakhiImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class BcsakhiController extends Controller
{
      public function add_bcsakhi(Request $request){
        return view('bcsakhi.add-bcsakhi');
      }

      public function view_bcsakhi(Request $request){
        $data['bcsakhi'] = DB::table('bcsakhis')->get();
        $data['bc_district'] = DB::table('bcsakhis')->select('district')->distinct()->get();
        return view('bcsakhi.view-bcsakhi', $data);
      }

      public function bcsakhiimport(Request $request){

       $file = $request->file('bcsakhiexcel');
       Excel::import(new BcsakhiImport, 'bcsakhi.xlsx')->format('xlsx');
       return back()->with('success', 'Data imported successfully');
       }

      public function create(Request $request)
    {
            $validator = $request->validate([
            'name' => 'required|min:5|max:50|unique:bcsakhis',
        ]);
           $bcsakhi = new Bcsakhi();
           $bcsakhi->name = $request->name;
           $bcsakhi->designation  = $request->designation ;
           $bcsakhi->contact  = $request->contact;
           $bcsakhi->parent_shg = $request->parent_shg;
           $bcsakhi->village = $request->village;
           $bcsakhi->bank_name = $request->bank_name;
           $bcsakhi->branch_name = $request->branch_name;
           $bcsakhi->branch_code  = $request->branch_code ;
           $bcsakhi->block  = $request->block;
           $bcsakhi->block_type  = $request->block_type;
           $bcsakhi->district  = $request->district ;
           $bcsakhi->corporate_bc  = $request->corporate_bc ;
           $bcsakhi->agent_id  = $request->agent_id ;
           $bcsakhi->date_code_creation  = $request->date_code_creation ;
           $bcsakhi->iibf_certificate  = $request->iibf_certificate ;
           $bcsakhi->model  = $request->model ;
           $bcsakhi->machine_id  = $request->machine_id ;
           $bcsakhi->no_village  = $request->no_village ;
           $bcsakhi->no_shg  = $request->no_shg ;
           $bcsakhi->od_limit = $request->od_limit ;
           $bcsakhi->settlement_account  = $request->settlement_account ;
           $bcsakhi->created_by  = $request->created_by ;
           $bcsakhi->date = $request->date;
           $bcsakhi->save();
           return back()->with('status', 'Bcsakhi Added Successfully');
    }

}
