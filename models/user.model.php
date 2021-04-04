<?php

require_once "database.php";

class UserModel {

    /** User Register * */
    static public function mdlRegisterUser($table, $data) {

        $stmt = Database::connect()->prepare("INSERT INTO $table(name, email, password, mode, picture, email_verification, encrypted_email) VALUES (:name, :email, :password, :mode, :picture, :email_verification, :encrypted_email)");

        $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
        $stmt->bindParam(":mode", $data["mode"], PDO::PARAM_STR);
        $stmt->bindParam(":picture", $data["picture"], PDO::PARAM_STR);
        $stmt->bindParam(":email_verification", $data["email_verification"], PDO::PARAM_INT);
        $stmt->bindParam(":encrypted_email", $data["encrypted_email"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt = NULL;
    }

    /** Show User * */
    static public function mdlShowUser($table, $item, $valueUser) {

        $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

        $stmt->bindParam(":" . $item, $valueUser, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = NULL;
    }

    /** Update User * */
    static public function mdlUpdateUser($table, $id, $item, $valueUser) {

        $stmt = Database::connect()->prepare("UPDATE $table SET $item = :$item WHERE id = :id");

        $stmt->bindParam(":" . $item, $valueUser, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = NULL;
    }

    /** Update User Picture * */
    static public function mdlUpdatePicture($table, $data) {

        $stmt = Database::connect()->prepare("UPDATE $table SET picture = :picture WHERE id = :id");

        $stmt->bindParam(":picture", $data["picture"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = NULL;
    }

    /** Update User Picture * */
    static public function mdlUpdateProfile($table, $data) {

        $stmt = Database::connect()->prepare("UPDATE $table SET name = :name, email = :email, password = :password WHERE id = :id");

        $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = NULL;
    }

    /** Show Shopping from User * */
    static public function mdlShowShopping($table, $item, $valueUser) {

        $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

        $stmt->bindParam(":" . $item, $valueUser, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = NULL;
    }

    /** Show Comments to Profile * */
    static public function mdlShowProfileComments($table, $data) {

        if ($data["idUser"] != "") {

            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE user_id = :user_id AND product_id = :product_id");

            $stmt->bindParam(":user_id", $data["idUser"], PDO::PARAM_INT);
            $stmt->bindParam(":product_id", $data["idProduct"], PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetch();
        } else {

            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE product_id = :product_id ORDER BY Rand()");

            $stmt->bindParam(":product_id", $data["idProduct"], PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = NULL;
    }

    /** Update Rating Comment * */
    static public function mdlUpdateComment($table, $data) {

        $stmt = Database::connect()->prepare("UPDATE $table SET rating = :rating, comment = :comment WHERE id = :id");

        $stmt->bindParam(":rating", $data["rating"], PDO::PARAM_STR);
        $stmt->bindParam(":comment", $data["comment"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = NULL;
    }

    /** Add Product To Wish List * */
    static public function mdlAddToWishList($table, $data) {

        $stmt = Database::connect()->prepare("SELECT COUNT(*) total FROM $table WHERE user_id = :user_id AND product_id = :product_id");

        $stmt->bindParam(":user_id", $data["idUser"], PDO::PARAM_INT);
        $stmt->bindParam(":product_id", $data["idProduct"], PDO::PARAM_INT);
        
        $stmt->execute();
        $total = $stmt->fetchColumn();

        if ($total > 0) {
            return "existe";
        } else {

            $stmt1 = Database::connect()->prepare("INSERT INTO $table (user_id, product_id) VALUES (:user_id, :product_id)");

            $stmt1->bindParam(":user_id", $data["idUser"], PDO::PARAM_INT);
            $stmt1->bindParam(":product_id", $data["idProduct"], PDO::PARAM_INT);

            if ($stmt1->execute()) {
                return "ok";
            } else {
                return "error";
            }
            
            $stmt1->close();

            $stmt1 = NULL;
        }
        
        $stmt->close();

        $stmt = NULL;
    }

    /** Show Wish List * */
    static public function mdlShowWishList($table, $item) {

        $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE user_id = :user_id ORDER BY id DESC");

        $stmt->bindParam(":user_id", $item, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = NULL;
    }

    /** Remove Product To Wish List * */
    static public function mdlRemoveToWishList($table, $data) {

        $stmt = Database::connect()->prepare("DELETE FROM $table WHERE id = :id");

        $stmt->bindParam(":id", $data, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();

        $stmt = NULL;
    }
    
    /** Insert comments on change purchase **/    
    static public function mdlInsertComments($table, $data) {
        
        $stmt = Database::connect()->prepare("INSERT INTO $table (user_id, product_id) VALUES (:user_id, :product_id)");
        
        $stmt->bindParam(":user_id", $data["idUser"], PDO::PARAM_INT);
        $stmt->bindParam(":product_id", $data["idProduct"], PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            
            return "ok";
        } else {
            
            return "error";
        }
        
        $stmt->close();

        $stmt = NULL;
    }

}
