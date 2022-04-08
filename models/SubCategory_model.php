<?php
class SubCategoryModel
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

    public function subcategory_data()
    {
        $sql = "SELECT x.ID,x.Category_ID,x.Subcategory_Name,y.Category_Name
        FROM product_subcategory as x
        LEFT JOIN product_category as y
        ON x.Category_ID= y.ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }
    public function addsubcategory_data($data)
    {
        $sql = "INSERT INTO `product_subcategory`( `Category_ID`,`Subcategory_Name`) VALUES (:ID,:Subcategory_Name)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute($data);
        return $success;
    }
    public function delete_subcategory($id)
    {
        $sql = "DELETE FROM `product_subcategory` WHERE ID=?";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$id]);
        return $success;
    }
    public function update_subcategory($data)
    {
        $sql = "UPDATE product_subcategory SET Subcategory_Name=:Subcategory_Name,Category_ID=:Category_ID WHERE ID=:ID";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute($data);
        return $success;
    }
}
