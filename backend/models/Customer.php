<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id_customer
 * @property string $nama_customer
 * @property string $alamat_customer
 * @property string $telp_customer
 * @property string $pesanan
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_customer', 'alamat_customer', 'telp_customer', 'pesanan'], 'required'],
            [['nama_customer', 'alamat_customer', 'pesanan'], 'string', 'max' => 100],
            [['telp_customer'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_customer' => 'Id Customer',
            'nama_customer' => 'Nama Customer',
            'alamat_customer' => 'Alamat Customer',
            'telp_customer' => 'Telp Customer',
            'pesanan' => 'Pesanan',
        ];
    }
}
