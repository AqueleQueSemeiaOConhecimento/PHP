<?php 

class database
{
    //==================================================================
    public function EXE_QUERY($query, $parameters = NULL, $close_connection = TRUE){
        //executes a query the the database (SELECT)
        $results = NULL;

        //connection
        $connection = new PDO(
            'mysql:host='.DB_SERVER.
            ';dbname='.DB_NAME.
            ';charset='.DB_CHARSET,
            DB_USERNAME,
            DB_PASSWORD,
            array(PDO::ATTR_PERSISTENT => TRUE));
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //execution
        if ($parameters != NULL) {
            $gestor = $connection->prepare($query);
            $gestor->execute($parameters);
            $results = $gestor->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $gestor = $connection->prepare($query);
            $gestor->execute();
            $results = $gestor->fetchAll(PDO::FETCH_ASSOC);
        }

        //close connection
        if ($close_connection) {
            $connection = NULL;
        }

        //returns results
        return $results;
    }

    //==================================================================
    public function EXE_NON_QUERY($query, $parameters = NULL, $close_connection = TRUE){
        //executes a query to the database (INSERT, UPDATE, DELETE)

        //connection
        $connection = new PDO(
            'mysql:host='.DB_SERVER.
            ';dbname='.DB_NAME.
            ';charset='.DB_CHARSET,
            DB_USERNAME,
            DB_PASSWORD,
            array(PDO::ATTR_PERSISTENT => TRUE));
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //execution
        $connection->beginTransaction();
        try {
            if ($parameters != NULL) {
                $gestor = $connection->prepare($query);
                $gestor->execute($parameters);
            } else {
                $gestor = $connection->prepare($query);
                $gestor->execute();
            }
            $connection->commit();
        } catch (PDOException $e) {
            echo '<p>' . $e . '</p>';
            $connection->rollBack();
        }

        //close connection
        if ($close_connection) {
            $connection = NULL;
        }
    }
}
?>