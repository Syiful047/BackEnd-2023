<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //property animals
    public $animals = [];

    // method untuk menampilkan semua hewan
    public function index(){
        echo"Menampilkan data animas";

        // loop property animals
        foreach($this->animals as $animal) {
            echo "- $animal <br>";
        }
    }

    // method untuk menambahkan data
    public function store(request $request) {
        echo "Menambahkan hewan baru <br>";

        // menambahkan data ke property animals
        array_push($this->animals, $request->animal);

        // panggil method index
        $this->index();
    }

    // method untuk mengedit data hewan
    public function update($id, $request){
        echo "Mengupdate data hewan id $id. <br>";

        // update di property animals
        $this->animals[$id] = $request->animals;

        // panggil methode index
        $this->index();
    }

    // method untuk menghapus data hewan
    public function destroy($id){
        echo "Menghapus date hewan id $id <br>";

        unset($this->animals[$id]);

        // panggil method index
        $this->index();
    }
}
