<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Datatables;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::with('roles')->get();
        if ($request->ajax()) {
            $data = User::oldest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="'.url("auth/users/" . $row->id ."/edit").'" class="edit btn btn-primary btn-sm">'.trans("general.edit").'</a>';

                            return $btn;
                    })
                    ->addColumn('roles', function ($row) {
                        return $row->roles->count() ?
                        implode('
                        ', $row->roles->pluck('display_name')->toArray()) :
                        trans('general.na');
                    })
                    ->addColumn('email_verified', function ($row) {
                        $span1 = '<span class="label label-danger">'.trans('general.unverified').'</span>';
                        $span2 = '<span class="label label-success">'.trans('general.verified').'</span>';
                        return is_null($row->email_verified_at) ?$span1:$span2;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('auth.users.index');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
