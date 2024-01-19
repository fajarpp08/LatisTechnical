<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            $users = User::paginate(10); // 10 items per page

            return view('admin.user.index', compact('users'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'kolom nama harus diisi',
            'email.required' => 'kolom email harus berisi',
            'role.required' => 'kolom role  harus diisi',
            'password.required' => 'kolom password  harus diisi',
        ]);


        if ($validator->fails()) {
            return redirect('/useradm/create')->withErrors($validator)->withInput();
        }
        $user = $validator->valid();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/useradm')->with('pesan', 'Data berhasil dimasukkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users, $id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'kolom nama harus diisi',
            'email.required' => 'kolom email harus diisi',
            'role.required' => 'kolom role  harus diisi',
            'password.required' => 'kolom password harus diisi',

        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->role = $validatedData['role'];
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/useradm')->with('pesan', 'Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users, $id)
    {
        User::destroy($id);
        return redirect('/useradm')->with('pesan', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');


        $users = User::where(function ($query) use ($keyword) {
            $query->where('name', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->orWhere('role', 'like', "%$keyword%");
        })->paginate(10);

        return view('admin.user.index', compact('users', 'keyword'));
    }
}
