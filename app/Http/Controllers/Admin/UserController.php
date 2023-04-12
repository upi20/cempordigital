<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Artikel\Artikel;
use Spatie\Permission\Models\Role;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use League\Config\Exception\ValidationException;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return User::datatable($request);
        }

        $page_attr = [
            'title' => 'Manajemen Pengguna',
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
            ],
            'navigation' => 'user.view',
        ];
        $user_role = Role::all();

        $view = path_view('pages.admin.user');
        $data = compact('page_attr', 'user_role', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function store(Request $request)
    {

        Artikel::clearCache();

        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'active' => ['required', 'int', 'in:1,0'],
                'password' => ['required', 'string', new Password]
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'active' => $request->active,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole($request->roles);

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request)
    {
        Artikel::clearCache();

        try {
            $user = User::find($request->id);
            $request->validate([
                'id' => ['required', 'int'],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
                'active' => ['required', 'int', 'in:1,0'],
                'password' => $request->password ? ['required', 'string', new Password] : ''
            ]);

            if ($request->password) {
                $user->password = Hash::make($request->password);
            }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->active = $request->active;

            $user->syncRoles($request->roles);

            $user->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Request $user)
    {
        Artikel::clearCache();

        try {
            $user = User::find($user->id);
            $user->delete();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function change_password(Request $request)
    {
        $page_attr = [
            'title' => 'Ganti Password',
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
            ],
        ];
        $view = path_view('pages.admin.change_password');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function save_password(Request $request)
    {
        try {
            $request->validate([
                'current_password' => ['required', 'string', 'max:255'],
                'new_password' => ['required', 'string', new Password]
            ]);
            $user = User::find(auth()->user()->id);
            if (Hash::check($request->current_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
                $user->save();
            } else {
                throw new Exception("Password Lama Salah. Jika anda lupa silahkan hubungi administrator.");
            }
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function excel(Request $request)
    {
        User::excel($request);
    }

    public function find(Request $request)
    {
        $user = User::with('roles', 'permissions')->find($request->id);
        return response()->json($user);
    }
}
