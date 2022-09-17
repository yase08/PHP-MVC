<?php
class Home extends Controller {
    
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = 'Sylphiette';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = 'sylph.jpg';
        $data['nama'] = 'Sylphiette';
        $data['pekerjaan'] = 'Magician';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}