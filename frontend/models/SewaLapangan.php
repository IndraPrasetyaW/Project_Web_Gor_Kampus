<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sewa_lapangan".
 *
 * @property int $id
 * @property string $nama
 * @property string $tanggal_sewa
 * @property string $jam_sewa
 * @property int $durasi
 * @property int $total_pembayaran
 */
class SewaLapangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sewa_lapangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tanggal_sewa', 'jam_sewa', 'durasi'], 'required'],
            [['tanggal_sewa', 'jam_sewa'], 'safe'],
            [['durasi', 'total_pembayaran'], 'integer'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tanggal_sewa' => 'Tanggal Sewa',
            'jam_sewa' => 'Jam Sewa',
            'durasi' => 'Durasi',
            'total_pembayaran' => 'Total Pembayaran',
        ];
    }

    /**
     * Hitung total pembayaran sebelum disimpan.
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // Format tanggal_sewa dari dd-M-yyyy ke yyyy-MM-dd
            $this->tanggal_sewa = date('Y-m-d', strtotime($this->tanggal_sewa));

            // Harga per jam (misal Rp 10000 per jam)
            $hargaPerJam = 10000;

            // Hitung total pembayaran
            $this->total_pembayaran = $this->durasi * $hargaPerJam;

            return true;
        } else {
            return false;
        }
    }
}
