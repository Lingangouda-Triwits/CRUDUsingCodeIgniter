<?php
defined('BASEPATH') or exit('No direct script access allowed');

class YourModel extends CI_Model
{
    public function get_total_rows()
    {
        // Retrieve the total number of rows from your database or data source
        return $this->db->count_all('your_table');
    }

    public function get_paginated_data($limit, $offset)
    {
        // Retrieve the paginated data from your database or data source
        $this->db->limit($limit, $offset);
        return $this->db->get('your_table')->result_array();
    }
}
