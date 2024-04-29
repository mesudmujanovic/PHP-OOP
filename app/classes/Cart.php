<?php 

class Cart{

    protected $conn;

    public function __construct(){
     global $conn;
     $this->conn = $conn;
    }

    public function add_to_cart($product_id, $user_id){
     $stmt = $this->conn->prepare("INSERT INTO cart (product_id, user_id) VALUES (?,?)");
     $stmt->bind_param("ii", $product_id, $user_id);
     return $stmt->execute();
    }

    public function get_cart_items(){
        $stmt = $this->conn->prepare("SELECT p.product_id, p.name, p.price, p.size, p.image
                                      FROM cart c
                                      INNER JOIN products p
                                      ON c.product_id = p.product_id
                                      WHERE c.user_id = ? ");
    
        $user_id = $_SESSION['user_id'];
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
    
        // Provera grešaka u izvršavanju upita
        if ($stmt->error) {
            echo "Greška prilikom izvršavanja upita: " . $stmt->error;
            exit();
        }
    
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}

?>