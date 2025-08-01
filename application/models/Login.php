<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Model
 {
    function __construct()
     {
        parent::__construct();
    }

    function countRecords(
                  $table,
                  $where = array())
     {
        return $this->db
                      ->where($where)
                      ->count_all_results($table);
      }

    function select_by_id(
                          $table,
                          $column,
                          $value)
    {
      $query = $this->db
                      ->where($column, $value)
                      ->get($table);

      if ($query->num_rows() > 0) return $query->row();

      return false;
    }


    function select_column(
                          $table,
                          $column,
                          $column_where,
                          $column_value)
    {
      $query = $this->db
                      ->select($column)
                      ->where($column_where, $column_value)
                      ->limit(1)
                      ->get($table);
      $row = $query->row_array();

      return $row[$column];
    }

    function updateRecord(
                    $table,
                    $column,
                    $where,
                    $data)
    {
      $this->db->where($column, $where);
      $this->db->updateRecord($table, $data);
    }

    function insert(
                    $table,
                    $data)
    {
      $this->db->insert($table, $data);
    }
}


