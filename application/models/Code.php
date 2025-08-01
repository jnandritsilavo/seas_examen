<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Code extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        /**
         * Generate code from Exercice YEAR (à voir)
         */
    }

    function getColumnValueByCondition(
        $table,
        $column,
        $where
    ) {
        $query = $this->db
            ->select($column)
            ->where($where)
            ->limit(1)
            ->get($table);
        $row = $query->row_array();
        return $row[$column];
    }


    function updateRecord(
        $table,
        $where,
        $data
    ) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    /**
     * Generate code for SEAS
     * @param mixed $course
     * @return string
     */
    function getCode($course)
    {
        $column = 'code';
        switch ($course) {
            case 'LALS':
                $alias = 'L33LASS';
                $where = ['app' => 'L2ASS'];
                break;
            case 'LEFA':
                $alias = 'L33LEFA';
                $where = ['app' => 'L2EFA'];
                break;

            case 'ASS':
                $alias = 'M13ASS';
                $where = ['app' => 'M13ASS'];
                break;
            case 'EFA':
                $alias = 'M13EFA';
                $where = ['app' => 'M13EFA'];
                break;
            case 'TRONC_COMMUN':
                $alias = 'L1';
                $where = ['app' => 'L1'];
                break;
            default:
                $alias = '';
                $where = [''];
                break;
        }
        $i = (int) $this->getColumnValueByCondition(TABLE_CURRENT_CODES, $column, $where);
        $code = $i + 1;
        $data['code'] = $code;
        $this->updateRecord(TABLE_CURRENT_CODES, $where, $data);
        /// Format code and return it ///
        $final = 'P'.sprintf('%04d', $code).''.$alias;
        // $final = 'E'.sprintf('%07d', $code).'/'._YEAR_;
        return $final;
    }

    function getFinalCode($course)
    {
        $column = 'code';
        switch ($course) {
            case 'LALS':
                $alias = 'L33LASS';
                $where = ['app' => 'FL2ASS'];
                break;
            case 'LEFA':
                $alias = 'L33LEFA';
                $where = ['app' => 'FL2EFA'];
                break;

            case 'ASS':
                $alias = 'M13ASS';
                $where = ['app' => 'FM13ASS'];
                break;
            case 'EFA':
                $alias = 'M13EFA';
                $where = ['app' => 'FM13EFA'];
                break;
            default:
                $alias = '';
                $where = [''];
                break;
        }
        $i = (int) $this->getColumnValueByCondition(TABLE_CURRENT_CODES, $column, $where);
        $code = $i + 1;
        $data['code'] = $code;
        $this->updateRecord(TABLE_CURRENT_CODES, $where, $data);
        /// Format code and return it ///
        $final = sprintf('%04d', $code).''.$alias;
        // $final = 'E'.sprintf('%07d', $code).'/'._YEAR_;
        return $final;
    }
    // function getCode($course)
    // {
    //     $column = 'code';
    //     switch ($course) {
    //         case 'LALS':
    //             $alias = 'L2ASS';
    //             $where = ['app' => 'L2ASS'];
    //             break;
    //         case 'LEFA':
    //             $alias = 'L2EFA';
    //             $where = ['app' => 'L2EFA'];
    //             break;

    //         case 'ASS':
    //             $alias = 'M13ASS';
    //             $where = ['app' => 'M13ASS'];
    //             break;
    //         case 'EFA':
    //             $alias = 'M13EFA';
    //             $where = ['app' => 'M13EFA'];
    //             break;
    //         default:
    //             $alias = '';
    //             $where = [''];
    //             break;
    //     }
    //     $i = (int) $this->getColumnValueByCondition(TABLE_CURRENT_CODES, $column, $where);
    //     $code = $i + 1;
    //     $data['code'] = $code;
    //     $this->updateRecord(TABLE_CURRENT_CODES, $where, $data);
    //     /// Format code and return it ///
    //     $final = 'P'.sprintf('%04d', $code).''.$alias;
    //     // $final = 'E'.sprintf('%07d', $code).'/'._YEAR_;
    //     return $final;
    // }



    function getCodePayement()
    {
        $column = 'code';
        $where = ['app' => 'PAYMENT'];
        // switch ($course) {
        //     case 'LALS':
        //         $alias = 'L2ASS';
        //         $where = ['app' => 'L2ASS'];
        //         break;
        //     case 'LEFA':
        //         $alias = 'L2EFA';
        //         $where = ['app' => 'L2EFA'];
        //         break;

        //     case 'ASS':
        //         $alias = 'M13ASS';
        //         $where = ['app' => 'M13ASS'];
        //         break;
        //     case 'EFA':
        //         $alias = 'M13EFA';
        //         $where = ['app' => 'M13EFA'];
        //         break;
        //     default:
        //         $alias = '';
        //         $where = [''];
        //         break;
        // }
        $i = (int) $this->getColumnValueByCondition(TABLE_CURRENT_CODES, $column, $where);

        print_d($i);
        exit();
        $code = $i + 1;
        $data['code'] = $code;
        $this->updateRecord(TABLE_CURRENT_CODES, $where, $data);
        /// Format code and return it ///
        $final = 'PAY'.sprintf('%04d', $code).'/2023';
        // $final = 'E'.sprintf('%07d', $code).'/'._YEAR_;
        return $final;
    }
    // function out_stock()
    // {
    //     $column = 'code';
    //     $where = array( 'app' => 'ST');

    //     $i = (int) $this->getColumnValueByCondition(TABLE_CURRENT_CODES, $column, $where);
    //     $code = $i + 1;
    //     $data['code'] = $code;
    //     $this->updateRecord(TABLE_CURRENT_CODES, $where, $data);
    //     /// Format code and return it ///
    //     $final = 'ST'.sprintf('%07d', $code);
    //     return $final;
    // }

    // function cash()
    // {
    //     $column = 'code';
    //     $where = array( 'app' => 'CA');

    //     $i = (int) $this->getColumnValueByCondition(TABLE_CURRENT_CODES, $column, $where);
    //     $code = $i + 1;
    //     $data['code'] = $code;
    //     $this->updateRecord(TABLE_CURRENT_CODES, $where, $data);
    //     /// Format code and return it ///
    //     $final = 'CA'.sprintf('%07d', $code);
    //     return $final;
    // }


} //// CI_Model

/* End of file code.php */
/* Location: ./application/models/code.php */
