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
    // CLIENTS
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
    public function create_new_client() 
    {

        // check if all data is available
        // Verifica se todos os dados estão disponíveis e não estão vazios
        if (
            empty($this->params['nome']) ||
            empty($this->params['email']) ||
            empty($this->params['telefone'])
        ) {
            return $this->error_response('Dados do cliente insuficientes.');
        }

        // check if the is already another client with the same: name or email
        $db = new database();
        $params = [
            ':nome' => $this->params['nome'],
            ':email' => $this->params['email']
        ];
        $results = $db->EXE_QUERY("
            SELECT id_cliente FROM clientes
            WHERE
            nome = :nome AND email = :email
        ", $params);
        
        if(count($results) != 0)
        {
            return $this->error_response('Já Existe um cliente com o mesmo nome e email');
        }



        // add new client to databas
        $params = [
            ':nome' => $this->params['nome'],
            ':email' => $this->params['email'],
            ':telefone' => $this->params['telefone']
        ];


        /*
        FEITO - Verifica se todos os dados estão presente
        FEITO - verifica se o cliente já existe
            - mesmo nome
            - mesmo email
        FEITO - guardar os dados na base de dados
        */




        $db->EXE_QUERY("
            INSERT INTO clientes VALUES(
                0,
                :nome,
                :email,
                :telefone,
                NOW(),
                NOW(),
                NULL
                )
        ", $params);

        return [
            'status' => 'SUCCESS',
            'message' => 'New client added with success.',
            'results' => []
            ];
    }




    // -------------------------------------------------------------
    // PRODUCTS
    // -------------------------------------------------------------

    public function get_all_products()
    {   
        // return all products in the database

        $db = new database();
        $results = $db->EXE_QUERY("SELECT * From produtos");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    // -------------------------------------------------------------
    public function get_all_active_products()
    {   
        // return all active products in the database

        $db = new database();
        $results = $db->EXE_QUERY("SELECT * From produtos WHERE deleted_at is NULL");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    // -------------------------------------------------------------
    public function get_all_inactive_products()
    {   
        // return all inactive products in the database

        $db = new database();
        $results = $db->EXE_QUERY("SELECT * FROM produtos WHERE deleted_at is NOT NULL");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    // -------------------------------------------------------------
    public function get_all_products_without_stock()
    {   
        // return all products with stock <= 0 in the database

        $db = new database();
        $results = $db->EXE_QUERY("SELECT id_produto, produto FROM produtos WHERE quantidade <= 0 AND deleted_at is NOT NULL");

        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
            ];
    }

    
    public function create_new_product() 
    {

        // check if all data is available
        // Verifica se todos os dados estão disponíveis e não estão vazios
        if (
            empty($this->params['produto']) ||
            empty($this->params['quantidade'])
        ) {
            return $this->error_response('Insufficient product data.');
        }

        // check if the is already another product with the same name
        $db = new database();
        $params = [
            ':produto' => $this->params['produto'],
        ];
        $results = $db->EXE_QUERY("
            SELECT id_produto FROM produtos
            WHERE produto = :produto
        ", $params);
        
        if(count($results) != 0)
        {
            return $this->error_response('There is already product with the same name');
        }



        // add new client to databas
        $params = [
            ':produto' => $this->params['produto'],
            ':quantidade' => $this->params['quantidade']
        ];


        /*
        FEITO - Verifica se todos os dados estão presente
        FEITO - verifica se o cliente já existe
            - mesmo nome
            - mesmo email
        FEITO - guardar os dados na base de dados
        */




        $db->EXE_QUERY("
            INSERT INTO produtos VALUES(
                0,
                :produto,
                :quantidade,
                NOW(),
                NOW(),
                NULL
                )
        ", $params);

        return [
            'status' => 'SUCCESS',
            'message' => 'New product added with success.',
            'results' => []
            ];
    }
    
}