<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('contoh2');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->contoh2->penjumlahan($n1, $n2);

        $this->load->view('view-contoh3', $data);
    }
}
