<?php
class UserModel
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
    public function user_data()
    {
        $sql = "SELECT Street,CONCAT(u.FirstName,' ',u.LastName) as Fullname,Email,Phone
        FROM user as u
        LEFT JOIN user_address as uadd
        ON u.ID = uadd.User_ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        return $success;
    }
}

