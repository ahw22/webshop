<?php
include "DatabaseClass.php";


class User extends Database {

    public function signUpUser($data) {
        $uid = $this->generateUID();
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$data["username"], $data["email"]]);
        
        if($stmt->rowCount() == 0) {
            $pw_hash = password_hash($data["pw"], PASSWORD_DEFAULT);
            $stmt = $this->connect()->prepare("INSERT INTO users (username, uid, email, password_hash) VALUES (?, ?, ?, ?)");
            $stmt->execute([$data["username"], $uid, $data["email"], $pw_hash]);
        }
    }

    private function generateUID() {
        $id = uniqid("u_");
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE uid = ?");
        $stmt->execute([$id]);

        if ($stmt->rowCount() == 0) {
            return $id;
        } else {
            return $this->generateUID();
        }
    }

}