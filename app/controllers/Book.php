<?php
class Book extends Controller {
    public function index($pengguna = 'Anda')
    {
        $data['judul'] = 'Daftar Buku';
        $data['nama'] = 'Sylphiette';
        $data['buku'] = $this->model('Book_model')->getBooks();
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }
}
?>