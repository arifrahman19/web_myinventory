<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id_request
 * @property string $nama_barang
 * @property int $quantity
 * @property string $tgl_request
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'quantity', 'tgl_request'], 'required'],
            [['quantity'], 'integer'],
            [['tgl_request'], 'safe'],
            [['nama_barang'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_request' => 'Id Request',
            'nama_barang' => 'Nama Barang',
            'quantity' => 'Quantity',
            'tgl_request' => 'Tgl Request',
        ];
    }
}
