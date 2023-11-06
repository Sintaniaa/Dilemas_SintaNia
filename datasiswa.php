<?php
class Datasiswa extends CI_Controller
{
public function get_hooks() {
    return $this->get_hooks();
}
    public function index()
    {

        $this->load->view('view-form-datasiswa');
    }

    public function cetak()
    {

        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', [
            'required' => 'Nama Siswa Harus Diisi'
        ]);

        $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
            'required' => 'NIS Harus Diisi',
            'min_length' => 'NIS Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[1]', [
            'required' => 'Kelas Harus Diisi',
            'min_length' => 'Kelas Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Harus Diisi'
        ]);

        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Harus Diisi'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Harus Diisi'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus Diisi'
        ]);

        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Harus Diisi'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-datasiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tmpt_lahir' => $this->input->post('tmpt_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama')
        ];

        $this->load->view('view-data-datasiswa', $data);
        }
    }
}