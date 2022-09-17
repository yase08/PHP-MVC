<?php
class Book_model {
    private $books = [
        [
            "judul" => "A Study In Scarlet",
            "penulis" => "Arthur Conan Doyle",
            "tanggal_selesai" => "2019-05-28"
        ],
        [
            "judul" => "The Adventure Of Sherlock Holmes",
            "penulis" => "Arthur Conan Doyle",
            "tanggal_selesai" => "2019-07-29"
        ],
        [
            "judul" => "The Hound Of The Baskervilles",
            "penulis" => "Arthur Conan Doyle",
            "tanggal_selesai" => "2019-08-28"
        ],
        [
            "judul" => "The Sign of Four",
            "penulis" => "Arthur Conan Doyle",
            "tanggal_selesai" => "2020-01-28"
        ],
        [
            "judul" => "The Red-Headed League",
            "penulis" => "Arthur Conan Doyle",
            "tanggal_selesai" => "2019-05-28"
        ],
        
    ];
    public function getBooks()
    {
        return $this->books;
    }
}
?>