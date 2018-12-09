<?php

class User extends Model
{
    private $id;
    private $name;
    private $username;
    private $password;
    private $email;

    public function __toString():string
    {
        return $this->getName();
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id=$id;
    }


    /**
     * @return int|null
     */
    public function getId():?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName():?string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username=$username;
    }

    /**
     * @param mixed $password
     * @return bool|string
     */
    public function setPassword(string $password)
    {
        if(Validation::password($password)) {
            $this->password = md5(md5( Validation::password($password) ) . md5('959269'));
            return true;
        } else {
            return 'Must be a minimum of 8 characters <br>
                    Must contain at least 1 number <br>
                    Must contain at least one uppercase character <br>
                    Must contain at least one lowercase character <br>
                    ';
        }

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email=$email;
    }


    public function insert()
    {
        $sql = "INSERT INTO 
                users(name, username, password, email)
                VALUES (:name, :username, :password, :email)";

        $data = [
            ':username' => $this->username,
            ':password' => $this->password,
            ':name' => $this->name,
            ':email' => $this->email
        ];
        $stm = self::dbh()->prepare($sql);
        if($stm->execute($data)) {
            $this->id = self::dbh()->lastInsertId();
            return $this->id;
        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }

    public function update(){
        $sql = "UPDATE users SET 
                    username=:username,
                    password=:password,
                    email = :email,
                    name=:name
                    WHERE id=:id";

        $data = [
            ':username' => $this->username,
            ':password' => $this->password,
            ':id' => $this->id,
            ':name' => $this->name,
            ':email' => $this->email
        ];
        $stm = self::dbh()->prepare($sql);
        if($stm->execute($data)) {
            return true;
        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }

    public static function delete($id){
        $sql = "DELETE FROM users WHERE id=:id";
        $data = [':id'=> $id];
        $stm = self::dbh()->prepare($sql);
        if($stm->execute($data)) {
            return $stm->rowCount();
        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }

    public static function deleteAll(){
        $sql = "DELETE FROM users";
        $stm = self::dbh()->prepare($sql);
        if($stm->execute()) {
            return true;
        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }

    /**
     * @return array|bool|string
     */
    public static function all()
    {
        $sql = "SELECT * FROM users";
        $stm = self::dbh()->prepare($sql);
        if($stm->execute()) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }

    public static function  find($id){
        $sql = "SELECT * FROM users WHERE id=:id";
        $data = [':id'=> $id];
        $stm = self::dbh()->prepare($sql);
        if($stm->execute($data)) {
            return $stm->fetch(PDO::FETCH_ASSOC);
        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }

    public static function  findBy($atte,$value){
        $sql = "SELECT * FROM users WHERE $atte=:value";
        $data = [':value'=> $value];
        $stm = self::dbh()->prepare($sql);
        if($stm->execute($data)) {
            return $stm->fetch(PDO::FETCH_ASSOC);
        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }

    public static function login($username, $password) {
        $sql = "SELECT id, username, email, name FROM users
                WHERE 
                username=:username AND 
                password=:password";

        $data = [
                ':password'=> md5($password),
                ':username'=> $username
            ];
        $stm = self::dbh()->prepare($sql);
        if($stm->execute($data)) {
            $user = $stm->fetch(PDO::FETCH_ASSOC);
            if(isset($user['username'])) {
                $_SESSION['user'] = $user;
                return true;
            } else {
                return false;
            }

        } else {
            if(ENV == 'dev') {
                return 'Error execute';
            }
            return false;
        }
    }
}