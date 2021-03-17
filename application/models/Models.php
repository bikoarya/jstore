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

    // function kodePenawaran()
    // {
    //     $this->db->SELECT('RIGHT(t_penawaran.kode_penawaran,4) as kode', FALSE);
    //     $this->db->order_by('kode_penawaran', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('t_penawaran');
    //     if ($query->num_rows() <> 0) {
    //         // jika kodesudah ada
    //         $data = $query->row();
    //         $kode = intval($data->kode) + 1;
    //     } else {
    //         //jika kode belum ada
    //         $kode = 1;
    //     }
    //     $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
    //     $kodejadi = "PWR" . $kodemax;

    //     return $kodejadi;
    // }

    // function kode_kuitansi()
    // {
    //     $this->db->SELECT('RIGHT(t_kuitansi.kode_kuitansi,4) as kode', FALSE);
    //     $this->db->order_by('kode_kuitansi', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('t_kuitansi');
    //     if ($query->num_rows() <> 0) {
    //         // jika kodesudah ada
    //         $data = $query->row();
    //         $kode = intval($data->kode) + 1;
    //     } else {
    //         //jika kode belum ada
    //         $kode = 1;
    //     }
    //     $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
    //     $kodejadi = "KUI" . $kodemax;

    //     return $kodejadi;
    // }

    // public function kode_invoice()
    // {
    //     $this->db->SELECT('RIGHT(t_invoice.kode_invoice,4) as kode', FALSE);
    //     $this->db->order_by('kode_invoice', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('t_invoice');
    //     if ($query->num_rows() <> 0) {
    //         // jika kodesudah ada
    //         $data = $query->row();
    //         $kode = intval($data->kode) + 1;
    //     } else {
    //         //jika kode belum ada
    //         $kode = 1;
    //     }
    //     $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
    //     $kodejadi = "INV" . $kodemax;

    //     return $kodejadi;
    // }

    // function no_kuitansi()
    // {
    //     $this->db->SELECT('RIGHT(t_kuitansi.no_kuitansi,4) as kode', FALSE);
    //     $this->db->order_by('no_kuitansi', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('t_kuitansi');
    //     if ($query->num_rows() <> 0) {
    //         // jika kodesudah ada
    //         $data = $query->row();
    //         $kode = intval($data->kode) + 1;
    //     } else {
    //         //jika kode belum ada
    //         $kode = 1;
    //     }
    //     $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
    //     $kodejadi = $kodemax;

    //     return $kodejadi;
    // }

    // public function id_barang() // digunakan untuk membuat kode member
    // {
    //     $this->db->SELECT('RIGHT(t_barang.id_barang,4) as kode', FALSE);
    //     $this->db->order_by('id_barang', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('t_barang');
    //     if ($query->num_rows() <> 0) {
    //         // jika kodesudah ada
    //         $data = $query->row();
    //         $kode = intval($data->kode) + 1;
    //     } else {
    //         //jika kode belum ada
    //         $kode = 1;
    //     }
    //     $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
    //     $kodejadi = "BRG" . $kodemax;

    //     return $kodejadi;
    // }


    // var $table = 't_kuitansi';
    // var $column_order = array(null, 'no_kuitansi', 'tanggal_kuitansi', 'jumlah_uang', 'guna_pembayaran', 'terima_dari', 'id_pj'); //set column field database for datatable orderable
    // var $column_search = array('no_kuitansi', 'guna_pembayaran', 'terima_dari', 'tanggal_kuitansi', 'nama_pj'); //set column field database for datatable searchable 
    // var $order = array('id_kuitansi' => 'asc'); // default order

    // public function getdata($select = null, $tabel = null, $where = null, $join = null)
    // {
    //     if ($select != null) {
    //         # code...
    //         $this->db->select($select);
    //     } else {
    //         # code...
    //         $this->db->select();
    //     }

    //     if ($tabel != null) {
    //         # code...
    //         $this->db->from($tabel);
    //     }
    //     if ($where != null) {
    //         # code...
    //         foreach ($where as $keywer => $valuewer) {
    //             # code...
    //             $this->db->where($keywer, $valuewer);
    //         }
    //     }

    //     if ($join != null) {
    //         # code...
    //         foreach ($join as $keyjoin => $valuejoin) {
    //             # code...
    //             $this->db->join($keyjoin, $valuejoin);
    //         }
    //     }
    //     return $this->db->get();
    // }

    // private function _get_datatables_query()
    // {
    //     $this->db->select('*');
    //     $this->db->from('t_kuitansi');
    //     $this->db->join('t_penanggungjawab', 't_penanggungjawab.id_pj = t_kuitansi.id_pj');

    //     $i = 0;

    //     foreach ($this->column_search as $item) // loop column 
    //     {
    //         if ($_POST['search']['value']) // if datatable send POST for search
    //         {

    //             if ($i === 0) // first loop
    //             {
    //                 $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
    //                 $this->db->like($item, $_POST['search']['value']);
    //             } else {
    //                 $this->db->or_like($item, $_POST['search']['value']);
    //             }

    //             if (count($this->column_search) - 1 == $i) //last loop
    //                 $this->db->group_end(); //close bracket
    //         }
    //         $i++;
    //     }

    //     if (isset($_POST['order'])) // here order processing
    //     {
    //         $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } else if (isset($this->order)) {
    //         $order = $this->order;
    //         $this->db->order_by(key($order), $order[key($order)]);
    //     }
    // }

    // function get_datatables()
    // {
    //     $this->_get_datatables_query();
    //     if ($_POST['length'] != -1)
    //         $this->db->limit($_POST['length'], $_POST['start']);
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // function count_filtered()
    // {
    //     $this->_get_datatables_query();
    //     $query = $this->db->get();
    //     return $query->num_rows();
    // }

    // public function count_all()
    // {
    //     $this->db->from($this->table);
    //     return $this->db->count_all_results();
    // }
}
