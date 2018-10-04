<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emp_gudang".
 *
 * @property integer $id_empgudang
 * @property string $nama_empgudang
 * @property string $alamat_empgudang
 * @property string $telp_empgudang
 * @property string $lokasi_empgudang
 */
class EmpGudang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emp_gudang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_empgudang', 'alamat_empgudang', 'telp_empgudang', 'lokasi_empgudang'], 'required'],
            [['nama_empgudang', 'alamat_empgudang', 'lokasi_empgudang'], 'string', 'max' => 100],
            [['telp_empgudang'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_empgudang' => 'Id Empgudang',
            'nama_empgudang' => 'Nama Empgudang',
            'alamat_empgudang' => 'Alamat Empgudang',
            'telp_empgudang' => 'Telp Empgudang',
            'lokasi_empgudang' => 'Lokasi Empgudang',
        ];
    }
}
