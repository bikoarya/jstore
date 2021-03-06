<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models extends CI_Model
{
    function makeup($id)
    {
        $this->db->select('*');
        $this->db->where('id_kategori=', $id);
        return $this->db->get('t_barang')->num_rows();
    }
    function getRecomended()
    {
        return $this->db->query('SELECT id_barang,
        nama_barang,
        deskripsi,
        harga,
        gambar,
        stok,
        SUM(qty) FROM t_barang a LEFT OUTER JOIN t_transaksi b USING (id_barang) GROUP BY id_barang ORDER BY SUM(qty) DESC LIMIT 6')->result_array();
    }

    function get($tabel)
    {
        return $this->db->get($tabel)->result_array();
    }

    function get_where($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }

    function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    function put($tabel, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($tabel, $data);
    }

    function delete($table = null, $where = null)
    {
        $this->db->delete($table, $where);
    }

    function joins($table = null,  $join = null, $where = null)
    {
        if ($join != null) {
            foreach ($join as $keyj => $valuej) {
                $this->db->join($keyj, $valuej);
            }
        }
        if ($where != null) {
            foreach ($where as $keyw => $dataw) {
                $this->db->where($keyw, $dataw);
            }
        }
        $data = $this->db->get($table);
        return $data;
    }

    public function countBarang()
    {
        $this->db->select('*');
        return $this->db->get('t_barang')->num_rows();
    }
    public function countKategori()
    {
        $this->db->select('*');
        return $this->db->get('t_kategori')->num_rows();
    }
    public function countTransaksi()
    {
        $this->db->select('*');
        return $this->db->get('t_transaksi')->num_rows();
    }
}
