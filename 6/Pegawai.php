<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok;
        }
        return $gapok;
    }
    public function setTunjanganJabatan($gapok){
        $tunj_jab = $gapok * 20 / 100;
        return $tunj_jab;
    }
    public function setTunjanganKeluarga($gapok, $status){
        $tunj_kel = $status == 'Menikah' ? $gapok * 10 / 100 : 0;
        return $tunj_kel;
    }
    public function setZakatProfesi($gapok, $agama){
        $gaji_kotor = $gapok + $this->setTunjanganJabatan($gapok) + $this->setTunjanganKeluarga($gapok, $this->status);
        $zakat = $agama == 'Islam' && $gaji_kotor >= 6000000 ? $gaji_kotor * 2.5 / 100 : 0;
        return $zakat;
    }
    public function cetak(){
        $gapok = $this->setGajiPokok($this->jabatan);
        $tunj_jab = $this->setTunjanganJabatan($gapok);
        $tunj_kel = $this->setTunjanganKeluarga($gapok, $this->status);
        $zakat = $this->setZakatProfesi($gapok, $this->agama);
        $gaji_bersih = $gapok + $tunj_jab + $tunj_kel - $zakat;
        
        echo '<table cellpadding=10>';
        echo 
            '<tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Agama</th>
                <th>Status</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan Jabatan</th>
                <th>Tunjangan Keluarga</th>
                <th>Zakat Profesi</th>
                <th>Gaji Bersih</th>
            </tr>';

        echo '<tr>';
        echo '<td>'.$this->nip.'</td>';
        echo '<td>'.$this->nama.'</td>';
        echo '<td>'. $this->jabatan.'</td>';
        echo '<td>'.$this->agama.'</td>';
        echo '<td>'.$this->status.'</td>';
        echo '<td>Rp. '.number_format($gapok,0,',','.').'</td>';
        echo '<td>Rp. '.number_format($tunj_jab,0,',','.').'</td>';
        echo '<td>Rp. '.number_format($tunj_kel,0,',','.').'</td>';
        echo '<td>Rp. '.number_format($zakat,0,',','.').'</td>';
        echo '<td>Rp. '.number_format($gaji_bersih,0,',','.').'</td>';
        echo '</tr>';

        echo '</table>';

    }
}