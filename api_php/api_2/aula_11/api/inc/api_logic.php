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
    public function error_response($message) {
        // returns an error from the API
        return [
            'status' => 'ERROR',
            'message' => $message,
            'results' => []
            ];
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

    // -------------------------------------------------------------

    // public function get_all_clients()
    // {
    //     // return get all clients from out database, active or inactive

    //     $sql = "SELECT * FROM clientes WHERE 1 ";

    //     // check if only_active exists and is true

    //     if(key_exists('only_active', $this->params))
    //     {

    //         if(filter_var($this->params['only_active'], FILTER_VALIDATE_BOOLEAN) == true)
    //         {
    //             $sql .= "AND deleted_at IS NULL";
    //         }
            
    //     }

    //     $db = new database();
    //     $results = $db->EXE_QUERY($sql);

    //     return [
    //         'status' => 'SUCCESS',
    //         'message' => '',
    //         'results' => $results
    //         ];
    // }


    // -------------------------------------------------------------
    public function get_all_clients()
    {
        // return get all clients from out database
        $db = new database();
        $results = $db->EXE_QUERY("SELECT * FROM clientes");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    // -------------------------------------------------------------
    public function get_all_active_clients()
    {
        // return get all clients from out database
        $db = new database();
        $results = $db->EXE_QUERY("SELECT * FROM clientes WHERE deleted_at IS NULL");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }
    
    // -------------------------------------------------------------
    public function get_all_inactive_clients()
    {
        // return get all clients from out database
        $db = new database();
        $results = $db->EXE_QUERY("SELECT * FROM clientes WHERE deleted_at IS NOT NULL");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    // -------------------------------------------------------------
    public function get_client()
    {
        // return of all data from a certain client
        $sql = "SELECT * FROM clientes WHERE 1 ";

        // check if id exists and is true
        if(key_exists('id', $this->params))
        {
            if(filter_var($this->params['id'], FILTER_VALIDATE_INT))
                {
                    $sql .= "AND id_cliente = " . intval($this->params['id']);
                }
        }
        else {

            return $this->error_response('ID client not specified');

        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    // -------------------------------------------------------------
    public function get_all_products()
    {
        $db = new database();
        $results = $db->EXE_QUERY("SELECT * From produtos");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }
}