<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id_order
 * @property string $nama_barang
 * @property int $quantity
 * @property string $lokasi
 * @property int $stok
 * @property int $status_kirim
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'quantity', 'lokasi'], 'required'],
            [['quantity', 'stok', 'status_kirim'], 'integer'],
            [['nama_barang'], 'string', 'max' => 50],
            [['lokasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'nama_barang' => 'Nama Barang',
            'quantity' => 'Quantity',
            'lokasi' => 'Lokasi',
            'stok' => 'Stok',
            'status_kirim' => 'Status Kirim',
        ];
    }
}
