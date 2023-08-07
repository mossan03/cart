<?php


class Product {
    private $db; // アクセス修飾詞　ここではprivate
    // コンストラクタ インストラクタ化したときに実行される特殊メソッド
    public function __construct() { // アクセス修飾詞　みんなに使ってもらうからpublic
        $this->db = new PDO(
            'mysql:host=localhost;dbname=cart;charset=utf8',
            'livebusiness',
            'password'
        );
    }
    public function productList() {

        $query = 'SELECT * FROM products';
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function productDetail($id) {
        $query = 'SELECT * FROM products WHERE id = ?';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function productMultiList($array) {
        $param = '';
        for($i = 0; $i < count($array); $i++) {
            if ($i != 0) {
                $param .= ',';
            }
            $param .= '?';
        }

        $arrayId = [];
        foreach($array as $key => $value) {
            $arrayId[] = $key;
        }
        $query = 'SELECT * FROM products WHERE id IN ('.$param.')';
        $stmt = $this->db->prepare($query);
        $stmt->execute($arrayId);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
