<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposito_model extends CI_Model{

  public $table = 'deposito';
  public $id    = 'id_deposito';
  public $order = 'DESC';

  function get_by_user()
  {
    $this->db->select('id_deposito, user_id, jumlah, jangka_waktu, waktu_deposito, jatuh_tempo, bagi_hasil, users.name, users.nik, users.address, users.email');

    $this->db->join('users', 'deposito.user_id = users.id_users', 'left');

    $this->db->where('deposito.is_delete', '0');
    $this->db->where('deposito.user_id', $this->session->id_users);

    return $this->db->get($this->table)->row();
  }

  function get_all()
  {
    $this->db->order_by($this->id, $this->order);

    $this->db->where('is_delete_instansi', '0');

    return $this->db->get($this->table)->result();
  }

  function get_all_active()
  {
    $this->db->order_by($this->id, $this->order);

    $this->db->where('is_active', '1');
    $this->db->where('is_delete_instansi', '0');

    return $this->db->get($this->table)->result();
  }

  function get_all_front()
  {
    $this->db->order_by('instansi_name', 'ASC');

    $this->db->where('is_delete_instansi', '0');

    return $this->db->get($this->table)->result();
  }

  function get_all_combobox()
  {
    $this->db->order_by('instansi_name');
    $data = $this->db->get($this->table);

    if($data->num_rows() > 0)
    {
      foreach($data->result_array() as $row)
      {
        $result[''] = '- Silahkan Pilih Instansi -';
        $result[$row['id_instansi']] = $row['instansi_name'];
      }
      return $result;
    }
  }

  function get_all_combobox_by_instansi()
  {
    $this->db->where('id_instansi', $this->session->id_instansi);

    $this->db->order_by('instansi_name');

    $data = $this->db->get($this->table);

    if($data->num_rows() > 0)
    {
      foreach($data->result_array() as $row)
      {
        $result[''] = '- Silahkan Pilih Instansi -';
        $result[$row['id_instansi']] = $row['instansi_name'];
      }
      return $result;
    }
  }

  function get_all_deleted()
  {
    $this->db->where('is_delete_instansi', '1');

    $this->db->order_by('instansi_name', $this->order);

    return $this->db->get($this->table)->result();
  }

  function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row();
  }

  function total_rows()
  {
    return $this->db->get($this->table)->num_rows();
  }

  function insert($data)
  {
    $this->db->insert($this->table, $data);
  }

  function update($id,$data)
  {
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
  }

  function soft_delete($id,$data)
  {
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
  }

  function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
  }

}
