<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marketing".
 *
 * @property integer $id_marketing
 * @property string $nama_marketing
 * @property string $alamat_marketing
 * @property string $telp_marketing
 */
class Marketing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marketing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_marketing', 'alamat_marketing', 'telp_marketing'], 'required'],
            [['nama_marketing', 'alamat_marketing'], 'string', 'max' => 100],
            [['telp_marketing'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_marketing' => 'Id Marketing',
            'nama_marketing' => 'Nama Marketing',
            'alamat_marketing' => 'Alamat Marketing',
            'telp_marketing' => 'Telp Marketing',
        ];
    }
}
