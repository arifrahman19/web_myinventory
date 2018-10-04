<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id_barang
 * @property string $nama_barang
 * @property integer $jml_barang
 * @property integer $harga_barang
 * @property string $lokasi_simpan
 * @property string $tgl_masuk
 * @property string $tgl_keluar
 * @property string $status_barang
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_barang', 'jml_barang', 'harga_barang', 'lokasi_simpan', 'tgl_masuk', 'tgl_keluar', 'status_barang'], 'required'],
            [['jml_barang', 'harga_barang'], 'integer'],
            [['tgl_masuk', 'tgl_keluar'], 'safe'],
            [['nama_barang', 'lokasi_simpan'], 'string', 'max' => 100],
            [['status_barang'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'jml_barang' => 'Jml Barang',
            'harga_barang' => 'Harga Barang',
            'lokasi_simpan' => 'Lokasi Simpan',
            'tgl_masuk' => 'Tgl Masuk',
            'tgl_keluar' => 'Tgl Keluar',
            'status_barang' => 'Status Barang',
        ];
    }
}
