<?php

namespace Database\Seeders;

use App\Models\prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::insert([
            ['id' => '1', 'prodi' => 'D3 Teknik Mesin', 'fakultas_id' => '1'],
            ['id' => '2', 'prodi' => 'D3 Teknik Sipil', 'fakultas_id' => '1'],
            ['id' => '3', 'prodi' => 'D3 Teknik Survey dan Pemetaan', 'fakultas_id' => '1'],
            ['id' => '4', 'prodi' => 'S1 Teknik Elektro', 'fakultas_id' => '1'],
            ['id' => '5', 'prodi' => 'S1 Teknik Geodesi', 'fakultas_id' => '1'],
            ['id' => '6', 'prodi' => 'S1 Teknik Geofisika', 'fakultas_id' => '1'],
            ['id' => '7', 'prodi' => 'S1 Teknik Informatika', 'fakultas_id' => '1'],
            ['id' => '8', 'prodi' => 'S1 Teknik Kimia', 'fakultas_id' => '1'],
            ['id' => '9', 'prodi' => 'S1 Teknik Mesin', 'fakultas_id' => '1'],
            ['id' => '10', 'prodi' => 'S1 Teknik Sipil', 'fakultas_id' => '1'],
            ['id' => '11', 'prodi' => 'S1 Teknik Lingkungan', 'fakultas_id' => '1'],
            ['id' => '12', 'prodi' => 'S1 Arsitektur', 'fakultas_id' => '1'],
            ['id' => '13', 'prodi' => 'S2 Teknik Mesin', 'fakultas_id' => '1'],
            ['id' => '14', 'prodi' => 'S2 Teknik Sipil', 'fakultas_id' => '1'],
            ['id' => '15', 'prodi' => 'Profesi Insinyur', 'fakultas_id' => '1'],
            ['id' => '16', 'prodi' => 'S2 Teknik Elektro', 'fakultas_id' => '1'],
            ['id' => '17', 'prodi' => 'D3 Perkebunan', 'fakultas_id' => '2'],
            ['id' => '18', 'prodi' => 'S1 Agronomi', 'fakultas_id' => '2'],
            ['id' => '19', 'prodi' => 'S1 Agroteknologi', 'fakultas_id' => '2'],
            ['id' => '20', 'prodi' => 'S1 Budidaya Perairan', 'fakultas_id' => '2'],
            ['id' => '21', 'prodi' => 'S1 Ilmu Kelautan', 'fakultas_id' => '2'],
            ['id' => '22', 'prodi' => 'S1 Ilmu Tanah', 'fakultas_id' => '2'],
            ['id' => '23', 'prodi' => 'S1 Kehutanan', 'fakultas_id' => '2'],
            ['id' => '24', 'prodi' => 'S1 Nutrisi dan Teknologi Pakan Ternak', 'fakultas_id' => '2'],
            ['id' => '25', 'prodi' => 'S1 Penyuluhan Pertanian', 'fakultas_id' => '2'],
            ['id' => '26', 'prodi' => 'S1 Peternakan', 'fakultas_id' => '2'],
            ['id' => '27', 'prodi' => 'S1 Proteksi Tanaman', 'fakultas_id' => '2'],
            ['id' => '28', 'prodi' => 'S1 Sumber Daya Akuatik', 'fakultas_id' => '2'],
            ['id' => '29', 'prodi' => 'S1 Teknik Pertanian', 'fakultas_id' => '2'],
            ['id' => '30', 'prodi' => 'S1 Teknologi Hasil Pertanian', 'fakultas_id' => '2'],
            ['id' => '31', 'prodi' => 'S1 Teknologi Industri Pertanian', 'fakultas_id' => '2'],
            ['id' => '32', 'prodi' => 'S2 Agribisnis', 'fakultas_id' => '2'],
            ['id' => '33', 'prodi' => 'S2 Agronomi', 'fakultas_id' => '2'],
            ['id' => '34', 'prodi' => 'S2 Ilmu Kehutanan', 'fakultas_id' => '2'],
            ['id' => '35', 'prodi' => 'S2 Penyuluhan dan Komunikasi Pertanian', 'fakultas_id' => '2'],
            ['id' => '36', 'prodi' => 'S2 Teknologi Industri Pertanian', 'fakultas_id' => '2'],
            ['id' => '37', 'prodi' => 'S3 Ilmu Pertanian', 'fakultas_id' => '2'],
            ['id' => '38', 'prodi' => 'Profesi Dokter', 'fakultas_id' => '3'],
            ['id' => '39', 'prodi' => 'S1 Farmasi', 'fakultas_id' => '3'],
            ['id' => '40', 'prodi' => 'S1 Pendidikan Dokter', 'fakultas_id' => '3'],
            ['id' => '41', 'prodi' => 'S2 Kesehatan Masyarakat', 'fakultas_id' => '3'],
            ['id' => '42', 'prodi' => 'Spesialis 1 Pulmonologi dan Ilmu Kedokteran Respirasi', 'fakultas_id' => '3'],
            ['id' => '43', 'prodi' => 'D3 Manajemen Informatika', 'fakultas_id' => '4'],
            ['id' => '44', 'prodi' => 'S1 Biologi', 'fakultas_id' => '4'],
            ['id' => '45', 'prodi' => 'S1 Fisika', 'fakultas_id' => '4'],
            ['id' => '46', 'prodi' => 'S1 Ilmu Komputer', 'fakultas_id' => '4'],
            ['id' => '47', 'prodi' => 'S1 Kimia', 'fakultas_id' => '4'],
            ['id' => '48', 'prodi' => 'S1 Matematika', 'fakultas_id' => '4'],
            ['id' => '49', 'prodi' => 'S1 Biologi Terapan', 'fakultas_id' => '4'],
            ['id' => '50', 'prodi' => 'S2 Biologi', 'fakultas_id' => '4'],
            ['id' => '51', 'prodi' => 'S2 Fisika', 'fakultas_id' => '4'],
            ['id' => '52', 'prodi' => 'S2 Kimia', 'fakultas_id' => '4'],
            ['id' => '53', 'prodi' => 'S2 Matematika', 'fakultas_id' => '4'],
            ['id' => '54', 'prodi' => 'S3 Matematika dan Ilmu Pengetahuan Alam', 'fakultas_id' => '4'],
            ['id' => '55', 'prodi' => 'S3 Ilmu Hukum', 'fakultas_id' => '5'],
            ['id' => '56', 'prodi' => 'S2 Ilmu Hukum', 'fakultas_id' => '5'],
            ['id' => '57', 'prodi' => 'S1 Ilmu Hukum', 'fakultas_id' => '5'],
            ['id' => '58', 'prodi' => 'D3 Administrasi Perkantoran', 'fakultas_id' => '6'],
            ['id' => '59', 'prodi' => 'D3 Hubungan Masyarakat', 'fakultas_id' => '6'],
            ['id' => '60', 'prodi' => 'D3 Perpustakaan', 'fakultas_id' => '6'],
            ['id' => '61', 'prodi' => 'S1 Hubungan Internasional', 'fakultas_id' => '6'],
            ['id' => '62', 'prodi' => 'S1 Ilmu Administrasi Bisnis', 'fakultas_id' => '6'],
            ['id' => '63', 'prodi' => 'S1 Ilmu Administrasi Negara', 'fakultas_id' => '6'],
            ['id' => '64', 'prodi' => 'S1 Ilmu Komunikasi', 'fakultas_id' => '6'],
            ['id' => '65', 'prodi' => 'S1 Ilmu Pemerintahan', 'fakultas_id' => '6'],
            ['id' => '66', 'prodi' => 'S1 Sosiologi', 'fakultas_id' => '6'],
            ['id' => '67', 'prodi' => 'S2 Ilmu Administrasi', 'fakultas_id' => '6'],
            ['id' => '68', 'prodi' => 'S2 Ilmu Komunikasi', 'fakultas_id' => '6'],
            ['id' => '69', 'prodi' => 'S2 Ilmu Pemerintahan', 'fakultas_id' => '6'],
            ['id' => '70', 'prodi' => 'S3 Pembangunan', 'fakultas_id' => '6'],
            ['id' => '71', 'prodi' => 'Profesi Pendidikan Profesi Guru', 'fakultas_id' => '7'],
            ['id' => '72', 'prodi' => 'S1 Bimbingan dan Konseling', 'fakultas_id' => '7'],
            ['id' => '73', 'prodi' => 'S1 Pendidikan Bahasa dan Sastra Indonesia', 'fakultas_id' => '7'],
            ['id' => '74', 'prodi' => 'S1 Pendidikan Bahasa Inggris', 'fakultas_id' => '7'],
            ['id' => '75', 'prodi' => 'S1 Pendidikan Bahasa Lampung', 'fakultas_id' => '7'],
            ['id' => '76', 'prodi' => 'S1 Pendidikan Bahasa Perancis', 'fakultas_id' => '7'],
            ['id' => '77', 'prodi' => 'S1 Pendidikan Biologi', 'fakultas_id' => '7'],
            ['id' => '78', 'prodi' => 'S1 Pendidikan Ekonomi', 'fakultas_id' => '7'],
            ['id' => '79', 'prodi' => 'S1 Pendidikan Fisika', 'fakultas_id' => '7'],
            ['id' => '80', 'prodi' => 'S1 Pendidikan Geografi', 'fakultas_id' => '7'],
            ['id' => '81', 'prodi' => 'S1 Pendidikan Guru Pendidikan Anak Usia Dini', 'fakultas_id' => '7'],
            ['id' => '82', 'prodi' => 'S1 Pendidikan Guru Sekolah Dasar', 'fakultas_id' => '7'],
            ['id' => '83', 'prodi' => 'S1 Pendidikan Jasmani', 'fakultas_id' => '7'],
            ['id' => '84', 'prodi' => 'S1 Pendidikan Kimia', 'fakultas_id' => '7'],
            ['id' => '85', 'prodi' => 'S1 Pendidikan Matematika', 'fakultas_id' => '7'],
            ['id' => '86', 'prodi' => 'S1 Pendidikan Musik', 'fakultas_id' => '7'],
            ['id' => '87', 'prodi' => 'S1 Pendidikan Pancasila dan Kewarganegaraan', 'fakultas_id' => '7'],
            ['id' => '88', 'prodi' => 'S1 Pendidikan Sejarah', 'fakultas_id' => '7'],
            ['id' => '89', 'prodi' => 'S1 Pendidikan Tari', 'fakultas_id' => '7'],
            ['id' => '90', 'prodi' => 'S1 Pendidikan Teknologi Informasi', 'fakultas_id' => '7'],
            ['id' => '91', 'prodi' => 'S2 Administrasi Pendidikan', 'fakultas_id' => '7'],
            ['id' => '92', 'prodi' => 'S2 Keguruan Guru SD', 'fakultas_id' => '7'],
            ['id' => '93', 'prodi' => 'S2 Pendidikan Ilmu Pengetahuan Alam', 'fakultas_id' => '7'],
            ['id' => '94', 'prodi' => 'S2 Pendidikan Bahasa dan Kebudayaan Lampung', 'fakultas_id' => '7'],
            ['id' => '95', 'prodi' => 'S2 Pendidikan Bahasa dan Sastra Indonesia', 'fakultas_id' => '7'],
            ['id' => '96', 'prodi' => 'S2 Pendidikan Bahasa Inggris', 'fakultas_id' => '7'],
            ['id' => '97', 'prodi' => 'S2 Pendidikan Fisika', 'fakultas_id' => '7'],
            ['id' => '98', 'prodi' => 'S2 Pendidikan Ilmu Pengetahuan Sosial', 'fakultas_id' => '7'],
            ['id' => '99', 'prodi' => 'S2 Pendidikan Matematika', 'fakultas_id' => '7'],
            ['id' => '100', 'prodi' => 'S2 Teknologi Pendidikan', 'fakultas_id' => '7'],
            ['id' => '101', 'prodi' => 'S3 Pendidikan', 'fakultas_id' => '7'],
            ['id' => '102', 'prodi' => 'D3 Akuntansi', 'fakultas_id' => '8'],
            ['id' => '103', 'prodi' => 'D3 Keuangan dan Perbankan', 'fakultas_id' => '8'],
            ['id' => '104', 'prodi' => 'D3 Manajemen Pemasaran', 'fakultas_id' => '8'],
            ['id' => '105', 'prodi' => 'D3 Perpajakan', 'fakultas_id' => '8'],
            ['id' => '106', 'prodi' => 'S1 Akuntansi', 'fakultas_id' => '8'],
            ['id' => '107', 'prodi' => 'S1 Ekonomi Pembangunan', 'fakultas_id' => '8'],
            ['id' => '108', 'prodi' => 'S1 Manajemen', 'fakultas_id' => '8'],
            ['id' => '109', 'prodi' => 'S2 Ilmu Akuntansi', 'fakultas_id' => '8'],
            ['id' => '110', 'prodi' => 'S2 Ilmu Ekonomi', 'fakultas_id' => '8'],
            ['id' => '111', 'prodi' => 'S2 Manajemen', 'fakultas_id' => '8'],
            ['id' => '112', 'prodi' => 'S3 Ilmu Ekonomi', 'fakultas_id' => '8']


            // ['id' => '1', 'prodi' => 'Teknik Informatika', 'fakultas_id' => '1'],
            // ['id' => '2', 'prodi' => 'Teknik Sipil', 'fakultas_id' => '1'],
            // ['id' => '3', 'prodi' => 'Teknik Pertanian', 'fakultas_id' => '2']
        ]);
    }
}
