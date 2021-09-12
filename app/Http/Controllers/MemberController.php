<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.member.index', [
            'persons' =>  Member::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'nisn' => 'required|integer|unique:members',
            'name' => 'required|string|max:255',
            'kelas' => 'required|string',
            'jabatan' => 'required|string',
            'foto' => 'image|mimes:jpg,png,jpeg|max:1024',
        ]);

        $validateData['foto'] = $validateData['foto']->storeAs('img/member', $validateData['nisn'] . "." . $validateData['foto']->extension());

        // dd($validateData);
        Member::create($validateData);
        return Redirect()->route('member.index')->with('success', 'anggota berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('dashboard.member.update', [
            'data' => $member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {

        $validateData = $request->validate([
            'nisn' => 'required|integer|unique:members,name,' . $member->id,
            'name' => 'required|string|max:255',
            'kelas' => 'required|string',
            'jabatan' => 'required|string',
            'foto' => 'image|mimes:jpg,png,jpeg|max:1024',
        ]);

        if (request('foto')) {
            Storage::delete($member->foto);
            $validateData['foto'] = request()->file('foto')->storeAs('img/member', $validateData['nisn'] . "." . $validateData['foto']->extension());
        } else {
            $validateData['foto'] = $member->foto;
        }
        // dd($validateData['foto']);
        Member::where('id', $member->id)
            ->update($validateData);
        return Redirect()->route('member.index')->with('success', 'anggota berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        if ($member->foto) {
            Storage::delete($member->foto);
        }
        Member::destroy($member->id);
        return Redirect()->route('member.index')->with('success', 'anggota berhasil dihapus');
    }
}