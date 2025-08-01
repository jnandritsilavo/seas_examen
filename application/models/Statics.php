<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Statics extends CI_Model
{
   function __construct()
   {
      parent::__construct();
   }
   function getAllRecords($table, $orderByColumn, $orderByValue = DESC, $limit = null)
   {
      if ($limit !== null) {
         $this->db->limit($limit["limit"], $limit["offset"]);
      }

      $query = $this->db
                     ->select("*")
                     ->from($table)
                     ->order_by($orderByColumn, $orderByValue)
                     ->get();

      return ($query->num_rows() > 0) ? $query->result() : [];
   }
   function getRecordsWithLike($table, $likeConditions, $orderByColumn)
   {
      $query = $this->db
                     ->select("*")
                     ->or_like($likeConditions)
                     ->from($table)
                     ->order_by($orderByColumn, ASC)
                     ->get();

      return ($query->num_rows() > 0) ? $query->result() : [];
   }
   function getRecordsWithLikeAfter($table, $column, $like, $orderByColumn)
   {
      $query = $this->db
                     ->select("*")
                     ->like($column, $like, 'after')
                     ->from($table)
                     ->order_by($orderByColumn, ASC)
                     ->get();

      return ($query->num_rows() > 0) ? $query->result() : [];
   }

   // function selectRecordsWhere($table, $conditions = array(), $orderByColumn)
   function selectRecordsWhere($table, $conditions , $orderByColumn, $limit = null)
   {

      if ($limit !== null) {
         $this->db->limit($limit["limit"], $limit["offset"]);
      }

      $query = $this->db
                     ->select("*")
                     ->from($table)
                     ->order_by($orderByColumn, ASC)
                     ->where($conditions)
                     ->get();

      return ($query->num_rows() > 0) ? $query->result() : [];
   }

   function getRecordsWhere($table, $selectColumns, $orderByColumn, $orderByValue = ASC, $conditions = array())
   {
      $query = $this->db
                     ->select($selectColumns)
                     ->from($table)
                     ->order_by($orderByColumn, $orderByValue)
                     ->where($conditions)
                     ->get();

      return ($query->num_rows() > 0) ? $query->result() : [];
   }

   function getMaxColumnValue($table, $column)
   {
      $query = $this->db
                     ->select_max($column)
                     ->get($table);

      $row = $query->row_array();
      return $row[$column];
   }

   function getSumOfColumn($table, $column, $conditions = array())
   {
      $query = $this->db
                     ->where($conditions)
                     ->select_sum($column)
                     ->get($table);

      $row = $query->row_array();
      return $row[$column];
   }

   function getSumWhereIn($table, $column, $value, $inValues, $conditions = array())
   {
      $query = $this->db
                     ->where($conditions)
                     ->where_in($value, $inValues)
                     ->select_sum($column)
                     ->get($table);

      $row = $query->row_array();
      return $row[$column];
   }

   function getColumnValueByCondition($table, $column, $whereColumn, $whereValue)
   {
      $query = $this->db
                     ->select($column)
                     ->where($whereColumn, $whereValue)
                     ->limit(1)
                     ->get($table);

      $row = $query->row_array();
      return $row[$column];
   }

   function getColumnValueByManyConditions($table, $column, $conditions = array())
   {
      $query = $this->db
                     ->select($column)
                     ->where($conditions)
                     ->limit(1)
                     ->get($table);

      $row = $query->row_array();
      return $row[$column];
   }

   function countRecords($table, $conditions = array())
   {
      return $this->db
                  ->where($conditions)
                  ->count_all_results($table);
   }


   /*
    CUD
     */
   /////////////////////////////////////////////
   /// CREATE
   /////////////////////////////////////////////
   ///

   /**
    * [add Save a data in the BDD]
    * @param [type] $table [Table name]
    * @param [type] $data  [Data]
    */
   function addRecord($table, $data)
   {
      $this->db->insert($table, $data);
   }


   function saveRecords($table, $data)
   {
      $this->db->insert_batch($table, $data);
   }

   function changeRecords($table, $data, $conditions = array())
   {
      $this->db->where($conditions);
      $this->db->update($table, $data);
   }
   /////////////////////////////////////////////
   /// update
   /////////////////////////////////////////////
   function updateRecord($table, $column, $where, $data)
   {
      $this->db->where($column, $where);
      $this->db->update($table, $data);
   }

   /**
    * Summary of cleanTable
    * @param mixed $table
    * @return void
    */
   function cleanTable($table)
   {
      $this->db->empty_table($table);
   }

   /**
    * Summary of deleteRecord
    * @param mixed $table
    * @param mixed $column
    * @param mixed $value
    * @return void
    */
   function deleteRecord($table, $column = null, $value = null)
   {
      if ($column !== null && $value !== null) {
         $this->db->where($column, $value);
      }

      $this->db->delete($table);
   }

   /**
    * Summary of drop
    * @param mixed $table
    * @param mixed $where
    * @return void
    */
   function drop(
      $table,
      $where = array()
   ) {
      $this->db->where($where);
      $this->db->delete($table);
   }



   /**
    * Summary of getByManyId
    * @param mixed $table
    * @param mixed $where
    * @return mixed
    */
   function getByManyId(
      $table,
      $where
   ) {
      $query = $this->db
         ->where($where)
         ->get($table);
      if ($query->num_rows() > 0) return $query->row();

      return false;
   }



   function getById(
      $table,
      $column,
      $value
   ) {
      $query = $this->db
         ->where($column, $value)
         ->get($table);
      if ($query->num_rows() > 0) return $query->row();

      return false;
   }
}
