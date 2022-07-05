<?php

class m0003_add_status{
    
    public function up(){
        \app\core\Application::$app->db->pdo->exec("ALTER TABLE users ADD COLUMN status INT DEFAULT 0;");
    }

    public function down(){
        \app\core\Application::$app->db->pdo->exec("ALTER TABLE users DROP COLUMN status INT DEFAULT 0;");
    }
}
?>