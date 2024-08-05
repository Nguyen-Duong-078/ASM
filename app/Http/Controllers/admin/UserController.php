<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::query()->get();
        return view('admin.members.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::query()->findOrFail($id);
        return view('admin.members.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $datas = $request->all();
        $data = User::query()->findOrFail($id);
        $data->update($datas);
        return back()->with('success', 'Cập nhật thành công');
    }
}
