<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftaranController extends Controller
{
    public function tidakLolos($id)
    {
        $siswa = Pendaftar::findOrFail($id);
        $siswa->status = 'tidak_lolos';
        $siswa->save();

        return redirect()->back()->with('success', 'Siswa dinyatakan tidak lolos.');
    }
}
