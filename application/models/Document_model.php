<?php

class Document_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_dataById($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function delete_data($table, $where)
    {
        $this->db->delete($table, $where);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
}
