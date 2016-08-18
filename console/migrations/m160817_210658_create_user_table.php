<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m160817_210658_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('phone_record', [
            'id' => $this->primaryKey(),
            'username' => $this->string(45)->unique(),
            'phone' => $this->string(45),
        ]);
        
        $this->insert('phone_record', [
            'username' => 'jenia',
            'phone' => '55341',
        
        ]);
        
        $this->insert('phone_record', [
            'username' => 'jenia1',
            'phone' => '54235',
        ]);
        
        $this->insert('phone_record', [
            'username' => 'jenia3',
            'phone' => '452345',
        ]);
        
        $this->insert('phone_record', [
            'username' => 'jenia4',
            'phone' => '123',
        ]);
        
        
    }
    
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
