<?php

class m0002_add_password{
    
    public function up(){
        \app\core\Application::$app->db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL;");
    }

    public function down(){
        \app\core\Application::$app->db->pdo->exec("ALTER TABLE users DROP COLUMN password;");
    }
}
?>