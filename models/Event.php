<?php
class EventModel
{
    function __construct()
    {

        try {
            /* Properties */
            $dsn = 'mysql:dbname=ecommerce;host=localhost';
            $user = 'root';
            $password = '';
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "";
            die();
        }
    }
    public function check_admin($admin_data)
    {
        $sql = "SELECT * FROM admin_details WHERE UserName=:UserName";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($admin_data);
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }
}
