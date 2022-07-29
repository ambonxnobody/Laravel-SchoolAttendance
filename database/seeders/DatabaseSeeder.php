<?php

namespace Database\Seeders;

use App\Models\Absensi;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Mapel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(22)->create([
            'photoProfile' => 'photoProfile.jpg',
        ]);

        User::create([
            'nik' => '3510211507010005',
            'email' => 'ambon.15072001@gmail.com',
            'phone' => '085955290636',
            'firstName' => 'Hafid Dian',
            'lastName' => 'Nurfaujan Ahat',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            'email_verified_at' => now(),
            'remember_token' => '1234567898765432',
            'is_admin' => true
        ]);

        Siswa::factory(24)->create([
            'kelas_id' => '1',
        ]);
        Siswa::factory(24)->create([
            'kelas_id' => '2',
        ]);
        Siswa::factory(22)->create([
            'kelas_id' => '3',
        ]);
        Siswa::factory(21)->create([
            'kelas_id' => '4',
        ]);
        Siswa::factory(27)->create([
            'kelas_id' => '5',
        ]);
        Siswa::factory(27)->create([
            'kelas_id' => '6',
        ]);
        Siswa::factory(27)->create([
            'kelas_id' => '7',
        ]);
        Siswa::factory(27)->create([
            'kelas_id' => '8',
        ]);
        Siswa::factory(28)->create([
            'kelas_id' => '9',
        ]);
        Siswa::factory(30)->create([
            'kelas_id' => '10',
        ]);
        Siswa::factory(30)->create([
            'kelas_id' => '11',
        ]);
        Siswa::factory(28)->create([
            'kelas_id' => '12',
        ]);
        Siswa::factory(25)->create([
            'kelas_id' => '13',
        ]);
        Siswa::factory(26)->create([
            'kelas_id' => '14',
        ]);

        Absensi::create([
            'kode' => 'A',
            'keterangan' => 'Tanpa keterangan'
        ]);
        Absensi::create([
            'kode' => 'H',
            'keterangan' => 'Hadir'
        ]);
        Absensi::create([
            'kode' => 'S1',
            'keterangan' => 'Sakit dengan keterangan dari dokter'
        ]);
        Absensi::create([
            'kode' => 'S2',
            'keterangan' => 'Sakit tanpa surat dokter'
        ]);
        Absensi::create([
            'kode' => 'I',
            'keterangan' => 'Izin dengan surat izin'
        ]);
        Absensi::create([
            'kode' => 'D1',
            'keterangan' => 'Dispensasi acara didalam sekolah'
        ]);
        Absensi::create([
            'kode' => 'D2',
            'keterangan' => 'Dispensasi acara diluar sekolah'
        ]);
        Absensi::create([
            'kode' => 'T',
            'keterangan' => 'Terlambat'
        ]);

        // KELAS
        Kelas::create([
            'kode' => '1A',
            'nama' => 'Kelas 1A'
        ]);
        Kelas::create([
            'kode' => '1B',
            'nama' => 'Kelas 1B'
        ]);
        Kelas::create([
            'kode' => '2A',
            'nama' => 'Kelas 2A'
        ]);
        Kelas::create([
            'kode' => '2B',
            'nama' => 'Kelas 2B'
        ]);
        Kelas::create([
            'kode' => '3A',
            'nama' => 'Kelas 3A'
        ]);
        Kelas::create([
            'kode' => '3B',
            'nama' => 'Kelas 3B'
        ]);
        Kelas::create([
            'kode' => '3C',
            'nama' => 'Kelas 3C'
        ]);
        Kelas::create([
            'kode' => '4A',
            'nama' => 'Kelas 4A'
        ]);
        Kelas::create([
            'kode' => '4B',
            'nama' => 'Kelas 4B'
        ]);
        Kelas::create([
            'kode' => '5A',
            'nama' => 'Kelas 5A'
        ]);
        Kelas::create([
            'kode' => '5B',
            'nama' => 'Kelas 5B'
        ]);
        Kelas::create([
            'kode' => '5C',
            'nama' => 'Kelas 5C'
        ]);
        Kelas::create([
            'kode' => '6A',
            'nama' => 'Kelas 6A'
        ]);
        Kelas::create([
            'kode' => '6B',
            'nama' => 'Kelas 6B'
        ]);

        // MAPEL START

        // MAPEL1A
        Mapel::create([
            'kode' => 'MTK1A',
            'nama' => 'Matematika',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'PKN1A',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'QH1A',
            'nama' => 'Quran Hadist',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'SBDP1A',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'AA1A',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'BINA1A',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'BJ1A',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'FQ1A',
            'nama' => 'Fiqih',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'BING1A',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'BA1A',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'PJOK1A',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);
        Mapel::create([
            'kode' => 'TIK1A',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '1',
            'guru_id' => '18'
        ]);

        // MAPEL1B
        Mapel::create([
            'kode' => 'MTK1B',
            'nama' => 'Matematika',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'PKN1B',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'QH1B',
            'nama' => 'Quran Hadist',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'SBDP1B',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'AA1B',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'BINA1B',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'BJ1B',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'FQ1B',
            'nama' => 'Fiqih',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'BING1B',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'BA1B',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'PJOK1B',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);
        Mapel::create([
            'kode' => 'TIK1B',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '2',
            'guru_id' => '21'
        ]);

        // MAPEL2A
        Mapel::create([
            'kode' => 'MTK2A',
            'nama' => 'Matematika',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'PKN2A',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'QH2A',
            'nama' => 'Quran Hadist',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'SBDP2A',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'AA2A',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'BINA2A',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'BJ2A',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'FQ2A',
            'nama' => 'Fiqih',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'BING2A',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'BA2A',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'PJOK2A',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);
        Mapel::create([
            'kode' => 'TIK2A',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '3',
            'guru_id' => '19'
        ]);

        // MAPEL2B
        Mapel::create([
            'kode' => 'MTK2B',
            'nama' => 'Matematika',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'PKN2B',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'QH2B',
            'nama' => 'Quran Hadist',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'SBDP2B',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'AA2B',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '4',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'BINA2B',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'BJ2B',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'FQ2B',
            'nama' => 'Fiqih',
            'kelas_id' => '4',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'BING2B',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'BA2B',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '4',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'PJOK2B',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);
        Mapel::create([
            'kode' => 'TIK2B',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '4',
            'guru_id' => '20'
        ]);

        // MAPEL3A
        Mapel::create([
            'kode' => 'MTK3A',
            'nama' => 'Matematika',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'PKN3A',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'QH3A',
            'nama' => 'Quran Hadist',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'SKI3A',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'AA3A',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'BINA3A',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'BJ3A',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'FQ3A',
            'nama' => 'Fiqih',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'BING3A',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'BA3A',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'SBDP3A',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);
        Mapel::create([
            'kode' => 'PJOK3A',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '5',
            'guru_id' => '5'
        ]);
        Mapel::create([
            'kode' => 'TIK3A',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '5',
            'guru_id' => '12'
        ]);

        // MAPEL3B
        Mapel::create([
            'kode' => 'MTK3B',
            'nama' => 'Matematika',
            'kelas_id' => '6',
            'guru_id' => '22'
        ]);
        Mapel::create([
            'kode' => 'PKN3B',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '6',
            'guru_id' => '22'
        ]);
        Mapel::create([
            'kode' => 'QH3B',
            'nama' => 'Quran Hadist',
            'kelas_id' => '6',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'SKI3B',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '6',
            'guru_id' => '2'
        ]);
        Mapel::create([
            'kode' => 'AA3B',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '6',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'BINA3B',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '6',
            'guru_id' => '22'
        ]);
        Mapel::create([
            'kode' => 'BJ3B',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '6',
            'guru_id' => '22'
        ]);
        Mapel::create([
            'kode' => 'FQ3B',
            'nama' => 'Fiqih',
            'kelas_id' => '6',
            'guru_id' => '2'
        ]);
        Mapel::create([
            'kode' => 'BING3B',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '6',
            'guru_id' => '22'
        ]);
        Mapel::create([
            'kode' => 'BA3B',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '6',
            'guru_id' => '2'
        ]);
        Mapel::create([
            'kode' => 'SBDP3B',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '6',
            'guru_id' => '22'
        ]);
        Mapel::create([
            'kode' => 'PJOK3B',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '6',
            'guru_id' => '5'
        ]);
        Mapel::create([
            'kode' => 'TIK3B',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '6',
            'guru_id' => '22'
        ]);

        // MAPEL3C
        Mapel::create([
            'kode' => 'MTK3C',
            'nama' => 'Matematika',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'PKN3C',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'QH3C',
            'nama' => 'Quran Hadist',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'SKI3C',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'AA3C',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'BINA3C',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'BJ3C',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'FQ3C',
            'nama' => 'Fiqih',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'BING3C',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'BA3C',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'SBDP3C',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '7',
            'guru_id' => '6'
        ]);
        Mapel::create([
            'kode' => 'PJOK3C',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '7',
            'guru_id' => '5'
        ]);
        Mapel::create([
            'kode' => 'TIK3C',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '7',
            'guru_id' => '15'
        ]);

        // MAPEL4A
        Mapel::create([
            'kode' => 'MTK4A',
            'nama' => 'Matematika',
            'kelas_id' => '8',
            'guru_id' => '14'
        ]);
        Mapel::create([
            'kode' => 'PKN4A',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '8',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'QH4A',
            'nama' => 'Quran Hadist',
            'kelas_id' => '8',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'SKI4A',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '8',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'AA4A',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '8',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'BINA4A',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '8',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'BJ4A',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '8',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'FQ4A',
            'nama' => 'Fiqih',
            'kelas_id' => '8',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'BING4A',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '8',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'BA4A',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '8',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'SBDP4A',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '8',
            'guru_id' => '3'
        ]);
        Mapel::create([
            'kode' => 'PJOK4A',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '8',
            'guru_id' => '5'
        ]);
        Mapel::create([
            'kode' => 'TIK4A',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '8',
            'guru_id' => '14'
        ]);
        Mapel::create([
            'kode' => 'IPS4A',
            'nama' => 'Ilmu Pengetahuan Sosial',
            'kelas_id' => '8',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'ASW4A',
            'nama' => 'Aswaja',
            'kelas_id' => '8',
            'guru_id' => '2'
        ]);
        Mapel::create([
            'kode' => 'IPA4A',
            'nama' => 'Ilmu Pengetahuan Alam',
            'kelas_id' => '8',
            'guru_id' => '14'
        ]);

        // MAPEL4B
        Mapel::create([
            'kode' => 'MTK4B',
            'nama' => 'Matematika',
            'kelas_id' => '9',
            'guru_id' => '14'
        ]);
        Mapel::create([
            'kode' => 'PKN4B',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'QH4B',
            'nama' => 'Quran Hadist',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'SKI4B',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'AA4B',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'BINA4B',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'BJ4B',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'FQ4B',
            'nama' => 'Fiqih',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'BING4B',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'BA4B',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'SBDP4B',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'PJOK4B',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '9',
            'guru_id' => '5'
        ]);
        Mapel::create([
            'kode' => 'TIK4B',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '9',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'IPS4B',
            'nama' => 'Ilmu Pengetahuan Sosial',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);
        Mapel::create([
            'kode' => 'ASW4B',
            'nama' => 'Aswaja',
            'kelas_id' => '9',
            'guru_id' => '2'
        ]);
        Mapel::create([
            'kode' => 'IPA4B',
            'nama' => 'Ilmu Pengetahuan Alam',
            'kelas_id' => '9',
            'guru_id' => '11'
        ]);

        // MAPEL5A
        Mapel::create([
            'kode' => 'MTK5A',
            'nama' => 'Matematika',
            'kelas_id' => '10',
            'guru_id' => '13'
        ]);
        Mapel::create([
            'kode' => 'PKN5A',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '10',
            'guru_id' => '13'
        ]);
        Mapel::create([
            'kode' => 'QH5A',
            'nama' => 'Quran Hadist',
            'kelas_id' => '10',
            'guru_id' => '10'
        ]);
        Mapel::create([
            'kode' => 'SKI5A',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '10',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'AA5A',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '10',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'BINA5A',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '10',
            'guru_id' => '13'
        ]);
        Mapel::create([
            'kode' => 'BJ5A',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '10',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'FQ5A',
            'nama' => 'Fiqih',
            'kelas_id' => '10',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'BING5A',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '10',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'BA5A',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '10',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'SBDP5A',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '10',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'PJOK5A',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '10',
            'guru_id' => '4'
        ]);
        Mapel::create([
            'kode' => 'TIK5A',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '10',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'IPS5A',
            'nama' => 'Ilmu Pengetahuan Sosial',
            'kelas_id' => '10',
            'guru_id' => '13'
        ]);
        Mapel::create([
            'kode' => 'ASW5A',
            'nama' => 'Aswaja',
            'kelas_id' => '10',
            'guru_id' => '1'
        ]);
        Mapel::create([
            'kode' => 'IPA5A',
            'nama' => 'Ilmu Pengetahuan Alam',
            'kelas_id' => '10',
            'guru_id' => '13'
        ]);

        // MAPEL5B
        Mapel::create([
            'kode' => 'MTK5B',
            'nama' => 'Matematika',
            'kelas_id' => '11',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'PKN5B',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'QH5B',
            'nama' => 'Quran Hadist',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'SKI5B',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'AA5B',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'BINA5B',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'BJ5B',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'FQ5B',
            'nama' => 'Fiqih',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'BING5B',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'BA5B',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'SBDP5B',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'PJOK5B',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '11',
            'guru_id' => '4'
        ]);
        Mapel::create([
            'kode' => 'TIK5B',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '11',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'IPS5B',
            'nama' => 'Ilmu Pengetahuan Sosial',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);
        Mapel::create([
            'kode' => 'ASW5B',
            'nama' => 'Aswaja',
            'kelas_id' => '11',
            'guru_id' => '1'
        ]);
        Mapel::create([
            'kode' => 'IPA5B',
            'nama' => 'Ilmu Pengetahuan Alam',
            'kelas_id' => '11',
            'guru_id' => '8'
        ]);

        // MAPEL5C
        Mapel::create([
            'kode' => 'MTK5C',
            'nama' => 'Matematika',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'PKN5C',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'QH5C',
            'nama' => 'Quran Hadist',
            'kelas_id' => '12',
            'guru_id' => '10'
        ]);
        Mapel::create([
            'kode' => 'SKI5C',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '12',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'AA5C',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '12',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'BINA5C',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'BJ5C',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'FQ5C',
            'nama' => 'Fiqih',
            'kelas_id' => '12',
            'guru_id' => '9'
        ]);
        Mapel::create([
            'kode' => 'BING5C',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '12',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'BA5C',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'SBDP5C',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'PJOK5C',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '12',
            'guru_id' => '4'
        ]);
        Mapel::create([
            'kode' => 'TIK5C',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '12',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'IPS5C',
            'nama' => 'Ilmu Pengetahuan Sosial',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);
        Mapel::create([
            'kode' => 'ASW5C',
            'nama' => 'Aswaja',
            'kelas_id' => '12',
            'guru_id' => '1'
        ]);
        Mapel::create([
            'kode' => 'IPA5C',
            'nama' => 'Ilmu Pengetahuan Alam',
            'kelas_id' => '12',
            'guru_id' => '17'
        ]);

        // MAPEL6A
        Mapel::create([
            'kode' => 'MTK6A',
            'nama' => 'Matematika',
            'kelas_id' => '13',
            'guru_id' => '13'
        ]);
        Mapel::create([
            'kode' => 'PKN6A',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'QH6A',
            'nama' => 'Quran Hadist',
            'kelas_id' => '13',
            'guru_id' => '10'
        ]);
        Mapel::create([
            'kode' => 'SKI6A',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '13',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'AA6A',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'BINA6A',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'BJ6A',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '13',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'FQ6A',
            'nama' => 'Fiqih',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'BING6A',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'BA6A',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'SBDP6A',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'PJOK6A',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '13',
            'guru_id' => '4'
        ]);
        Mapel::create([
            'kode' => 'TIK6A',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '13',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'IPS6A',
            'nama' => 'Ilmu Pengetahuan Sosial',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'ASW6A',
            'nama' => 'Aswaja',
            'kelas_id' => '13',
            'guru_id' => '1'
        ]);
        Mapel::create([
            'kode' => 'IPA6A',
            'nama' => 'Ilmu Pengetahuan Alam',
            'kelas_id' => '13',
            'guru_id' => '7'
        ]);

        // MAPEL6B
        Mapel::create([
            'kode' => 'MTK6B',
            'nama' => 'Matematika',
            'kelas_id' => '14',
            'guru_id' => '13'
        ]);
        Mapel::create([
            'kode' => 'PKN6B',
            'nama' => 'Pendidikan Kewarganegaraan',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'QH6B',
            'nama' => 'Quran Hadist',
            'kelas_id' => '14',
            'guru_id' => '10'
        ]);
        Mapel::create([
            'kode' => 'SKI6B',
            'nama' => 'Sejarah Kebudayaan Islam',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'AA6B',
            'nama' => 'Aqidah Akhlak',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'BINA6B',
            'nama' => 'Bahasa Indonesia',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'BJ6B',
            'nama' => 'Bahasa Jawa',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'FQ6B',
            'nama' => 'Fiqih',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'BING6B',
            'nama' => 'Bahasa Inggris',
            'kelas_id' => '14',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'BA6B',
            'nama' => 'Bahasa Arab',
            'kelas_id' => '14',
            'guru_id' => '7'
        ]);
        Mapel::create([
            'kode' => 'SBDP6B',
            'nama' => 'Seni Budaya dan Prakarya',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'PJOK6B',
            'nama' => 'Pendidikan Jasmani, Olaharga, dan Kesehatan',
            'kelas_id' => '14',
            'guru_id' => '4'
        ]);
        Mapel::create([
            'kode' => 'TIK6B',
            'nama' => 'Teknologi Informasi dan Komunikasi',
            'kelas_id' => '14',
            'guru_id' => '15'
        ]);
        Mapel::create([
            'kode' => 'IPS6B',
            'nama' => 'Ilmu Pengetahuan Sosial',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
        Mapel::create([
            'kode' => 'ASW6B',
            'nama' => 'Aswaja',
            'kelas_id' => '14',
            'guru_id' => '1'
        ]);
        Mapel::create([
            'kode' => 'IPA6B',
            'nama' => 'Ilmu Pengetahuan Alam',
            'kelas_id' => '14',
            'guru_id' => '16'
        ]);
    }
}
