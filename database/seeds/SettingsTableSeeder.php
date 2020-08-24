<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                [
                    'settings_description' => 'Başlık',
                    'settings_key' => 'title',
                    'settings_value' => 'Laravel CMS',
                    'settings_type' => 'text',
                    'settings_queue' => 0,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Açıklama',
                    'settings_key' => 'description',
                    'settings_value' => 'Laravel CMS Description',
                    'settings_type' => 'text',
                    'settings_queue' => 1,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Logo',
                    'settings_key' => 'logo',
                    'settings_value' => 'logo.png',
                    'settings_type' => 'file',
                    'settings_queue' => 2,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Icon',
                    'settings_key' => 'icon',
                    'settings_value' => 'icon.ico',
                    'settings_type' => 'file',
                    'settings_queue' => 3,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Anahtar Kelimeler',
                    'settings_key' => 'keywords',
                    'settings_value' => 'laravel,cms,php',
                    'settings_type' => 'text',
                    'settings_queue' => 4,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Sabit Telefon',
                    'settings_key' => 'phone_sabit',
                    'settings_value' => '0534 298 61 89',
                    'settings_type' => 'text',
                    'settings_queue' => 5,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'GSM',
                    'settings_key' => 'phone_gsm',
                    'settings_value' => '0534 298 61 89',
                    'settings_type' => 'text',
                    'settings_queue' => 6,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Mail',
                    'settings_key' => 'mail',
                    'settings_value' => 'gungor.bilal@galatasaray.net',
                    'settings_type' => 'text',
                    'settings_queue' => 7,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'İlçe',
                    'settings_key' => 'ilce',
                    'settings_value' => 'Izmit',
                    'settings_type' => 'text',
                    'settings_queue' => 8,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'İl',
                    'settings_key' => 'il',
                    'settings_value' => 'Kocaeli',
                    'settings_type' => 'text',
                    'settings_queue' => 9,

                    'settings_status' => '1',
                ],
                [
                    'settings_description' => 'Açık Adres',
                    'settings_key' => 'adres',
                    'settings_value' => 'Izmit Caddesi',
                    'settings_type' => 'text',
                    'settings_queue' => 10,

                    'settings_status' => '1',
                ]
            ]
        );
    }

}
