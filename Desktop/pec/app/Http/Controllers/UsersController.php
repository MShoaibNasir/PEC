<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $you = auth()->user();
        $users = User::all()->sortByDesc('id');
        return view('dashboard.admin.usersList', compact('users', 'you'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.userShow', compact( 'user' ));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')
        ->leftJoin('role_hierarchy', 'roles.id', '=', 'role_hierarchy.role_id')
        ->select('roles.*', 'role_hierarchy.hierarchy')
        ->orderBy('hierarchy', 'asc')
        ->get();
        return view('dashboard.admin.userCreate', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ];
        $this->validate($request, $rules);
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'menuroles' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($request->role);
        $request->session()->flash('message', 'Successfully created user');
        return redirect()->route('users.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.userEditForm', compact('user'));
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
        $validatedData = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id.',id']
        ]);
        $user = User::find($id);
        $user->fname       = $request->input('fname');
        $user->lname       = $request->input('lname');
        $user->contact_number       = $request->input('contact_number');
        $user->email      = $request->input('email');
        $user->save();
        $request->session()->flash('message', 'Successfully updated user');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->route('users.index');
    }

    /**
     * Approve user.
     */
    public function user_approve(Request $request, $email)
    {
        $user = User::where('email', $email)->first();
        $user->is_approved = 1;
        $user->save();
        $request->session()->flash('message', 'User has been approved.');
        return redirect()->back();
    }

    /**
     * Decline user.
     */
    public function user_decline(Request $request, $email)
    {
        $user = User::where('email', $email)->first();
        $user->is_approved = 0;
        $user->save();
        $request->session()->flash('message', 'User has been declined.');
        return redirect()->back();
    }
}
