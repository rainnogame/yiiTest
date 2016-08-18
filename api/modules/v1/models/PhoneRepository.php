<?php
namespace api\modules\v1\models;

use yii\db\ActiveRecord;

/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class PhoneRepository extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phone_record';
    }
    
    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['username', 'phone'], 'required'],
            [['username'], 'unique'],
            [['phone'], 'number'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'username' => 'Имя',
            'phone' => 'Телефон',
        ];
    }
    
    
}
