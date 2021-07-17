<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Controllers\Controller;
use App\Models\Com\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = Auth::user();
//        $addresses = $user->addresses;
//        return view('')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
//        return $request;
        $user = Auth::user();
        $request['user_id'] = $user->id;
        $request['status'] = 1;


        $new_no = preg_replace('/\s+/', '', $request['number']);
        $new_no = preg_replace('/-/', '', $new_no);
        $new_no = preg_replace('/\)/', '', $new_no);
        $new_no = preg_replace('/\(/', '', $new_no);

            if (strpos($new_no, '0') == 0) {
                $new_no = preg_replace('/^0/', '+255', $new_no);
            }
            if(strpos($new_no, '255') == 0) {
                $new_no = preg_replace('/^255/', '+255', $new_no);
            }
            if(strpos($new_no, '6') == 0) {
                $new_no = preg_replace('/^6/', '+2556', $new_no);
            }
            if(strpos($new_no, '7') == 0) {
                $new_no = preg_replace('/^7/', '+2557', $new_no);
            }

            $request['phone'] = $new_no;

        foreach ($user->addresses as $address){
            $address->status = 0;
            $address->save();
        }
        Address::create($request->all());
        return redirect()->back();
    }


    public function setDefault($id = null)
    {
        $user = Auth::user();
        if ($id == null){
            $adre = $user->addresses->first();
            $adre->status = 1;
            $adre->save();
        }
        foreach ($user->addresses as $address){
            $address->status = 0;
            $address->save();
        }
        $def_address = Address::findOrFail($id);
        $def_address->status = 1;
        $def_address->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $user = Auth::user();
        $def_address = Address::findOrFail($id);
        if (isset($def_address->id)){
            Address::destroy($id);
            $this->setDefault();
        }else{
            Address::destroy($id);
            return redirect()->back();
        }
    }
}
