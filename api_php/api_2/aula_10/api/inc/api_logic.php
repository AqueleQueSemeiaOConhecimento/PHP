<?php

class api_logic
{
    private $endpoint;
    private $params;

    // -------------------------------------------------------------
    public function __construct($endpoint, $params = null)
    {
            // define the object/class properties
            $this->endpoint = $endpoint;
            $this->params = $params;
    }

    // -------------------------------------------------------------

    public function endpoint_exists()
    {
        // check if the endpoint is a valid class method
        return method_exists($this, $this->endpoint);
    }



    // -------------------------------------------------------------
    // ENDPOINTS
    // -------------------------------------------------------------
    public function status()
    {
        return [
            'status' => 'SUCCESS',
            'message' => 'API is running OK!',
            'results' => null
        ];
    }

    public function get_all_clients()
    {
        // return get all clients from out database

        $sql = "SELECT * FROM clientes WHERE 1 ";

        // check if only_active exists and is true

        if(key_exists('only_active', $this->params))
        {

            if(filter_var($this->params['only_active'], FILTER_VALIDATE_BOOLEAN) == true)
            {
                $sql .= "AND deleted_at IS NULL";
            }
            
        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    public function get_all_products()
    {
        $db = new database();
        $results = $db->EXE_QUERY("Select * From produtos");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }
}