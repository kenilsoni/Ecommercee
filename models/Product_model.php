<?php
class ProductModel
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
    public function color_data()
    {
        $sql = "SELECT * FROM product_color";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }
    public function add_colordb($color)
    {
        $sql = "INSERT INTO product_color (Product_Color) VALUES (?)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$color]);
        return $success;
    }
    public function update_color($color, $id)
    {
        $sql = "UPDATE product_color SET Product_Color=? WHERE ID=?";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$color, $id]);
        return $success;
    }
    public function delete_color($id)
    {
        $sql = "DELETE FROM product_color WHERE ID=?";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$id]);
        return $success;
    }
    // color start
    public function size_data()
    {
        $sql = "SELECT * FROM product_size";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }
    public function add_sizedb($size)
    {
        $sql = "INSERT INTO product_size (Product_Size) VALUES (?)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$size]);
        return $success;
    }
    public function update_size($size, $id)
    {
        $sql = "UPDATE product_size SET Product_Size=? WHERE ID=?";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$size, $id]);
        return $success;
    }
    public function delete_size($id)
    {
        $sql = "DELETE FROM product_size WHERE ID=?";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$id]);
        return $success;
    }
    // color start
    public function product_data()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }
    public function getimage($id)
    {
        $sql = "SELECT ID,Product_ID,Image_Path FROM product_image WHERE Product_ID=$id LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }

    public function product_databyid($id)
    {
        $sql = "SELECT * FROM product WHERE ID=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }
    public function subcategory_data($id)
    {
        $sql = "SELECT Subcategory_Name,psc.ID FROM product_subcategory as
        psc LEFT JOIN product_category as pc ON
       psc.Category_ID=pc.ID WHERE psc.Category_ID=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }
    public function add_productdb($data)
    {
        $sql = "INSERT INTO product (Product_Name,Product_Description,Product_Price,Product_Quantity,Product_Color_ID,Product_Size,Category_ID,Subcategory_ID) VALUES (:product_name,:product_desc,:price,:quantity,:color,:size,:category,:subcategory)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        $LAST_ID = $this->conn->lastInsertId();
        return $LAST_ID;
    }
    public function add_imagedb($data,$id)
    {
        $sql = "INSERT INTO product_image (Product_ID,Image_Path) VALUES (?,?)";
        $stmt = $this->conn->prepare($sql);
        $success=$stmt->execute([$id,$data]);
        return $success;
    }
}