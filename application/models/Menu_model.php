<?php 
use GuzzleHttp\Client;

class Menu_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/restful-server/api/',
            'auth' => ['admin', 'admin']
        ]);
    }

    public function getAllMenu()
    {
        //return $this->db->get('mahasiswa')->result_array();
        $response = $this->_client->request('GET', 'menu');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getMenuById($id)
    {
        //return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        $response = $this->_client->request('GET', 'menu', [
            'query' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    // public function tambahDataMenu()
    // {
    //     $data = [
    //         "kategori" => $this->input->post('kategori', true),
    //         "nama" => $this->input->post('nama', true),
    //         "deskripsi" => $this->input->post('deskripsi', true),
    //         "harga" => $this->input->post('harga', true)
    //     ];

    //     ///$this->db->insert('mahasiswa', $data);
    //     $response = $this->_client->request('POST', 'menu', [
    //         'form-params' => $data
    //     ]);

    //     $result = json_decode($response->getBody()->getContents(), true);

    //     return $result;
    // }

    // public function hapusDataMenu($id)
    // {
    //     // $this->db->where('id', $id);
    //     //$this->db->delete('mahasiswa', ['id' => $id]);
    //     $response = $this->_client->request('DELETE', 'menu', [
    //         'form-params' => [
    //             'id' => $id
    //         ]
    //     ]);

    //     $result = json_decode($response->getBody()->getContents(), true);

    //     return $result;
    // }

    // public function ubahDataMenu()
    // {
    //     $data = [
    //         "kategori" => $this->input->post('kategori', true),
    //         "nama" => $this->input->post('nama', true),
    //         "deskripsi" => $this->input->post('deskripsi', true),
    //         "harga" => $this->input->post('harga', true),
    //         "id" => $this->input->post('id', true)
    //     ];

    //     //$this->db->where('id', $this->input->post('id'));
    //     //$this->db->update('mahasiswa', $data);
    //     $response = $this->_client->request('PUT', 'menu', [
    //         'form-params' => $data
    //     ]);

    //     $result = json_decode($response->getBody()->getContents(), true);

    //     return $result;
    // }

    // public function cariDataMahasiswa()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('nama', $keyword);
    //     $this->db->or_like('jurusan', $keyword);
    //     $this->db->or_like('nrp', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('mahasiswa')->result_array();
    // }
}

