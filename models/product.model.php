<?php

require_once "database.php";

class ProductModel {
    /* SHOW CATEGORIES */

    static public function mdlShowCategories($table, $item, $valueCategory) {

        if ($item != NULL) {

            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

            $stmt->bindParam(":" . $item, $valueCategory, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        } else {
            $stmt = Database::connect()->prepare("SELECT * FROM $table");

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = NULL;
    }

    /* SHOW SUBCATEGORIES */

    static public function mdlShowSubCategories($table, $item, $valueSubCategory) {

        if ($item != NULL) {
            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

            $stmt->bindParam(":" . $item, $valueSubCategory, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll();
        } else {
            $stmt = Database::connect()->prepare("SELECT * FROM $table");

            $stmt->bindParam(":" . $item, $valueSubCategory, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = NULL;
    }

    /* SHOW PRODUCTS */

    static public function mdlShowProducts($table, $order, $item, $valueProduct, $base, $limit, $mode) {

        if ($item != NULL) {

            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY $order $mode LIMIT $base, $limit");

            $stmt->bindParam(":" . $item, $valueProduct, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll();
        } else {
            $stmt = Database::connect()->prepare("SELECT * FROM $table ORDER BY $order $mode LIMIT $base, $limit");

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = NULL;
    }

    /* SHOW INFOPRODUCT */

    static public function mdlShowInfoProduct($table, $item, $valueProduct) {

        $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

        $stmt->bindParam(":" . $item, $valueProduct, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = NULL;
    }

    /* PRODUCTS LIST */

    static public function mdlListProducts($table, $order, $item, $valueProduct) {

        if ($item != NULL) {

            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY $order DESC");

            $stmt->bindParam(":" . $item, $valueProduct, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll();
        } else {
            $stmt = Database::connect()->prepare("SELECT * FROM $table ORDER BY $order DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = NULL;
    }

}
