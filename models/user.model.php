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
    static public function mdlUpdatePictureUser($table, $data) {

        $stmt = Database::connect()->prepare("UPDATE $table SET picture = :picture WHERE id = :id");

        $stmt->bindParam(":picture", $data["picture"], PDO::PARAM_STR);

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

}
