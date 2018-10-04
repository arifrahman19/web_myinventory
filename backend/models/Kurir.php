<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kurir".
 *
 * @property integer $id_kurir
 * @property string $nama_kurir
 * @property string $alamat_kurir
 * @property string $telp_kurir
 * @property string $lokasi_kurir
 */
class Kurir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kurir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kurir', 'alamat_kurir', 'telp_kurir', 'lokasi_kurir'], 'required'],
            [['nama_kurir', 'alamat_kurir', 'lokasi_kurir'], 'string', 'max' => 100],
            [['telp_kurir'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kurir' => 'Id Kurir',
            'nama_kurir' => 'Nama Kurir',
            'alamat_kurir' => 'Alamat Kurir',
            'telp_kurir' => 'Telp Kurir',
            'lokasi_kurir' => 'Lokasi Kurir',
        ];
    }
}
