<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.index",[
            "title" => "Dashboard Admin",
        ]);
    }

    public function kamar(){
        return view("admin.kamar",[
            "title" => "Data Kamar"
        ]);
    }

    public function aktif(){
        return view("admin.penyewa-aktif",[
            "title" => "Penyewa Aktif"
        ]);
    }

    public function riwayat(){
        return view("admin.riwayat",[
            "title" => "Riwayat Penyewa"
        ]);
    }

    public function tambah(){
        return view("admin.tambah",[
            "title" => "Tambah Data Penyewa"
        ]);
    }

    public function laporan(){
        return view("admin.laporan",[
            "title" => "Laporan"
        ]);
    }
}
