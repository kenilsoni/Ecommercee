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
        $sql = "SELECT ID,CONCAT(u.FirstName,' ',u.LastName) as Fullname,Email,Phone
        FROM user as u";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data_main=[];
        foreach ($success as $data) {
            $userid = $data['ID'];
            $sql = "SELECT Street,Country,City,State FROM user_address as uadd LEFT JOIN country as cty ON uadd.Country_ID=cty.ID LEFT JOIN city as cy ON uadd.City_ID=cy.ID LEFT JOIN state as st ON uadd.State_ID=st.ID
            WHERE uadd.User_ID=$userid";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $final=array_merge(array($data),$data2);
            array_push($data_main, $final);

        }
       
        return $data_main;
    }
}

// $sql = "SELECT Street,CONCAT(u.FirstName,' ',u.LastName) as Fullname,Email,Phone
// FROM user as u
// LEFT JOIN user_address as uadd
// ON u.ID = uadd.User_ID";
// $stmt = $this->conn->prepare($sql);
// $stmt->execute();
// $success = $stmt->fetchAll(PDO::FETCH_ASSOC);

// return $success;