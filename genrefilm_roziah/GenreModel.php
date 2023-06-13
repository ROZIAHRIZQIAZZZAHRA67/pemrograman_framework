<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table            = 'genre';   // Nama table yang ada di database
    protected $primarykey       = 'id';     // Nama kolom yang menjadi primary key
    protected $useAutoIncrement = true;     // Beri nilai true jika terdapat autoincrement
    protected $allowFields      = [];       // Digunakan untuk menentukan kolom mana saja yang dapat kita insert data
 
    public function getGenre(){
        $data = [
            [
                "nama_genre"    => "action"
            ],
            [
                "nama_genre"    => "animasi"
            ],
            [
                "nama_genre"    => "horror"
            ],
            [
                "nama_genre"    => "petualangan"
            ],
            [
                "nama_genre"    => "komedi"
            ],
            [
                "nama_genre"    => "fantasi"
            ],
            [
                "nama_genre"    => "anime"
            ],
            [
                "nama_genre"    => "misteri"
            ],
            [
                "nama_genre"    => "fiksi ilmiah"
            ],
            [
                "nama_genre"    => "drama"
            ],
            [
                "nama_genre"    => "Romantic"
            ],
            [
                "nama_genre"    => "Melodrama"
            ]
            ];
        return $data;
    }
    
    public function getAllData()
   {
    return $this->findAll();
   }
}