<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kep_gudang".
 *
 * @property integer $id_kepgudang
 * @property string $nama_kepgudang
 * @property string $alamat_kepgudang
 * @property string $telp_kepgudang
 */
class KepGudang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kep_gudang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kepgudang', 'alamat_kepgudang', 'telp_kepgudang'], 'required'],
            [['nama_kepgudang', 'alamat_kepgudang'], 'string', 'max' => 100],
            [['telp_kepgudang'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kepgudang' => 'Id Kepgudang',
            'nama_kepgudang' => 'Nama Kepgudang',
            'alamat_kepgudang' => 'Alamat Kepgudang',
            'telp_kepgudang' => 'Telp Kepgudang',
        ];
    }
}
