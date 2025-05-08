<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (!Auth::attempt($credentials)) {
        return response()->json(['message' => 'Unauthorize'], 401);
    }

    $user = Auth::user();
    /** @var \App\Models\User $user */
    $token = $user->createToken('API Token')->plainTextToken;

    return response()->json([
        'user' => $user,
        'token' => $token,
        'role' => $user->role,
    ]);
}

public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully',
        ]);
    }


public function getName(Request $request)
{
    $user = $request->user();
    return response()->json([
        'name' => $user->username,
        'role' => $user->role,
    ]);
}

public function getAllKaryawan()
{
    $karyawan = User::where('role', 'karyawan')->get();

    return response()->json([
        'karyawan' => $karyawan,
    ],200);
}
public function getAllUserCompany()
{
    $userNotAprroved =  User::where('role', 'user')->where('is_approved', 0)->get();
    $userAprroved = User::where('role', 'user')->where('is_approved', 1)->get();
    $product = Product::all()->count();

    return response()->json([
        'inactive' => $userNotAprroved,
        'active' => $userAprroved,
        'product' =>  $product,
    ]);
}
public function createKaryawan(Request $request)
{

    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    User::create([
        'company' => '-',
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'role' => 'karyawan',
        'is_approved' => true,
        'npwp' => '234341222',
        'email' => uniqid() . '@dummy.com'
    ]);

    return response()->json([
        'message' => 'seelsai',
    ], 200);
}

public function showKaryawan($id)
{
    $karyawan = User::where('id', $id)->first();
    return response()->json([
        'data' => $karyawan,
    ],200);
}
public function updateKaryawan(Request $request, $id)
{
    User::where('id', $id)->update([
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);
    return response()->json([
        'data' => 'berhasil',
    ],200);
}

public function deleteKaryawan($id)
{
    User::where('id', $id)->delete();
    return response()->json([
        'data' => 'berhasil',
    ],200);
}

public function getCompany($id)
{
    $company = User::where('id', $id)->first();
    return response()->json([
        'company' => $company,
    ]);
}
public function deleteCompany($id)
{
    $company = User::where('id', $id)->delete();
    return response()->json([
        'company' => $company,
    ]);
}
public function approveCompany($id)
{
    $company = User::where('id', $id)->update(['is_approved' => 1]);
    return response()->json([
        'company' => $company,
    ]);
}
}