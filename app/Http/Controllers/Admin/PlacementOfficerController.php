<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PlacementOfficer;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PlacementOfficerController extends Controller
{
    public function index()
    {
        $placementOfficers = DB::table('users')->where('usertype', '=', "po")->paginate(5);
        return view('Admin.PlacementOfficer.index', ['placementOfficers' => $placementOfficers]);
    }

    public function create()
    {
        return view('Admin.PlacementOfficer.create');
    }

    public function store()
    {
        $this->validatePlacementOfficer();

        $data['name'] = request()->name;
        $data['phone'] = request()->phone;
        $data['usertype'] = request()->usertype;
        $data['email'] = request()->email;
//        $data['usertype'] = request()->usertype;
        $data['password'] = Hash::make(request()->password);

        User::create($data);

        return redirect('admin/placement-officers');
    }

    public function show(User $placementOfficer)
    {
        //
    }

    public function edit(User $placementOfficer)
    {
        return view('Admin.PlacementOfficer.edit', compact('placementOfficer'));
    }

    public function update(User $placementOfficer)
    {
        $this->validatePlacementOfficerUpdate();

        $data['name'] = request()->name;
        $data['phone'] = request()->phone;
        $data['email'] = request()->email;
        $data['usertype'] = request()->usertype;

        $placementOfficer->update($data);
        return redirect('admin/placement-officers');
    }

    public function destroy(User $placementOfficer)
    {
        $placementOfficer->delete();
        return redirect('admin/placement-officers')->with('success', 'PlacementOfficer has been deleted!!');
    }

    public function validatePlacementOfficer()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:10|max:10',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
    }

    public function validatePlacementOfficerUpdate()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:10|max:10',
            'email' => 'required'
        ]);
    }

}
