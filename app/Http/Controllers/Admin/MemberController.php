<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{
    public function index(){
        return view('admin.member.all');
    }

    public function create(){
        return view('admin.member.create');
    }

    public function edit(){
        return view('admin.member.edit');
    }

    public function store(Request $request){
        $role = $request->role;

        //TODO :: five เพิ่มการเช็ค validate หาก user มี position มากกว่า 1 ตำแหน่ง

        if($role){
            if($role == 'user'){
                $this->validate($request, [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required',
                    'birth_date' => 'required',
                    'active_since' => 'required',
                    'expired_date' => 'required',
                    'status' => 'required',
                    'company1' => 'required',
                    'input_position_1' => 'required',
                    'phone' => 'required',
                    'personal_email' => 'required',
                    'address' => 'required',
                    'image' => 'required',
                ], [
                    'first_name.required' => 'Please Insert First Name',
                    'last_name.required' => 'Please Insert Last Name',
                    'email.required' => 'Please Insert Email',
                    'birth_date.required' => 'Please Select Birth Date',
                    'active_since.required' => 'Please Select Active Since',
                    'expired_date.required' => 'Please Select Expired Date',
                    'status.required' => 'Please Select Status',
                    'company1.required' => 'Please Select Company',
                    'input_position_1.required' => 'Please Select Position',
                    'phone.required' => 'Please Insert Phone',
                    'personal_email.required' => 'Please Insert Personal Email',
                    'address.required' => 'Please Insert Address',
                    'image.required' => 'Please Insert Image',
                ]);
            }else{
                // admin , manager, staff
                $this->validate($request, [
                    'first_name' => 'required',
                    'middle_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required',
                ], [
                    'first_name.required' => 'Please Insert First Name',
                    'middle_name.required' => 'Please Insert Middle Name',
                    'last_name.required' => 'Please Insert Last Name',
                    'email.required' => 'Please Insert Email',
                ]);
            }
        }else{
            $this->validate($request, [
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'role' => 'required',
                'email' => 'required',
            ], [
                'first_name.required' => 'Please Insert First Name',
                'middle_name.required' => 'Please Insert Middle Name',
                'last_name.required' => 'Please Insert Last Name',
                'role.required' => 'Please Select Role',
                'email.required' => 'Please Insert Email',
            ]);
        }

        DB::beginTransaction();
        try {
            $data = new DB();
            $data->save();

            DB::commit();

            return response()->json(['success' => true,]);
        } catch (\Exception $e) {
            Log::error('add member' . $e->getMessage() . "\n" . $e->getTraceAsString());
            DB::rollback();

            return response()->json(['error' => 'Something Wrong.']);
        }

    }
}
