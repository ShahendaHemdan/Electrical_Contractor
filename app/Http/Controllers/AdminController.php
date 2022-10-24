<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        $users =  DB::table('role_user')
            ->join('users', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->select(
                'users.id as userid',
                'users.name as username',
                'users.email as useremail',
                'roles.name as userrole',
                'users.created_at as usercat'
            )
            ->get();
        return view('admin.index', ['users' => $users]);
    }

    function show($key)
    {
        $user =  DB::table('role_user')
            ->join('users', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->select(
                'users.id as userid',
                'users.name as username',
                'users.email as useremail',
                'roles.name as userrole',
                'users.created_at as usercat',
                'users.updated_at as useruat'
            )->where('users.id', '=', $key)
            ->get();

        return view('admin.show', ['user' => $user]);
    }

    function edit($key)
    {
        $user =  DB::table('role_user')
            ->join('users', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->select(
                'users.id as userid',
                'users.name as username',
                'users.email as useremail',
                'roles.name as userrole',
                'roles.id as roleid'
            )->where('users.id', '=', $key)
            ->get();

        $roles = Role::all();
        return view('admin.edit', ['user' => $user, 'roles' => $roles]);
    }

    function update(Request $request, $key)
    {
        DB::table('role_user')->where('user_id', $key)->update(['role_id' => $request->roleid]);
        $user = User::find($key);
        $user->name = $request->username;
        $user->email = $request->useremail;
        if ($request->userpassword) {
            $user->password = Hash::make($request->userpassword);
        }
        $user->save();
        return redirect()->route('admin.index');
    }

    function create()
    {
        $roles = Role::all();
        return view('admin.create', ['roles' => $roles]);
    }

    function store(Request $request)
    {
        $timestamp = Carbon::now('GMT+2')->toDateTimeString();
        $userid = DB::table('users')->insertGetId(
            [
                'name' => $request->username, 'email' => $request->useremail, 'password' => Hash::make($request->userpassword),
                'created_at' => $timestamp, 'updated_at' => $timestamp
            ]
        );
        DB::table('role_user')->insert(
            ['role_id' => $request->roleid, 'user_id' => $userid, 'user_type' => 'App\Models\User']
        );
        return redirect()->route('admin.index');
    }

    function destroy($key)
    {
        DB::table('users')->where('id', '=', $key)->delete();
        DB::table('role_user')->where('user_id', '=', $key)->delete();
        return redirect()->route('admin.index');
    }
}
