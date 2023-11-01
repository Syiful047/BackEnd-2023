<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index() {
        // mendapatkan semua data students
        $students = Student::all();

        $data = [
            "message" => "Get all resources",
            "data" => $students
        ];

        // kirim data (json) dan  response code
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        // menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        // menggunakan model Student untuk insert data
        $student = Student::create($input);

        $data = [
            'message' => 'Data berhasil ditambahkan',
            'data' => $student,
        ];

        return response()->json($data, 201);
    }

    public function update($id, Request $request)
    {
        // menangkap id dari parameter
        $student = Student::find($id);
        // cek apakah ada student dengan id tersebut
        if (!$student) {
            $data = [
                'message' => 'Data tidak ditemukan',
            ];
            return response()->json($data, 404);
        }

        $student->update($request->all());

        // // menangkap data request
        // $nama = $request->input('nama');
        // $nim = $request->input('nim');
        // $email = $request->input('email');
        // $jurusan = $request->input('jurusan');

        // // mengupdate nilai atribut pada student
        // $student->nama = $nama;
        // $student->nim = $nim;
        // $student->email = $email;
        // $student->jurusan = $jurusan;


        //Menyimpan data yang telah diubah
        $student->save();

        $data = [
            'message' => 'Data Berhasil Diubah',
            'data' => $student
        ];
        return response()->json($data, 200);
    }

    public function destroy($id)

    {
        // mencari data siswa berdasarkan id
        $student = Student::find($id);

        // mengecek apakah data tersebut ada atau tidak
        if (!$student) {
            $data = [
                'message' => 'Data tidak berhasil ditemukan',
            ];

            return response()->json($data, 404);
        }

        // menghapus data siswa 
        $student->delete();

        $data = [
            'message' => 'Data berhasil dihapus',
        ];
        return response()->json($data, 203);
    }
}
