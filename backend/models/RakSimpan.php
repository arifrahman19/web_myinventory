<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rak_simpan".
 *
 * @property integer $id_rak
 * @property string $lokasi_rak
 */
class RakSimpan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rak_simpan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lokasi_rak'], 'required'],
            [['lokasi_rak'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rak' => 'Id Rak',
            'lokasi_rak' => 'Lokasi Rak',
        ];
    }
}
