<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'description' => "1978'de kurulan GÜLHAN, şu anda 10000 m² lik kapalı alana sahip tesislerinde iş ve inşaat makineleri sektörüne kauçuk ağırlıklı yedek parçalar üreten lokomotif firmalardan biridir.",
            'shops' => json_encode([
                [
                    "name_tr" => "İstanbul Satış Mağazası",
                    "name_en" => "İstanbul Store",
                    "address" => "Esenşehir Mahallesi, Necip Fazıl Bulvarı No:45, Ümraniye - Dudullu, İstanbul Türkiye",
                    "phone" => "+90 216 517 29 21",
                    "fax" => "+90 (541) 507 30 44",
                    "email_tr" => "istanbul@gulhan.com",
                    "email_en" => "export@gulhan.com",
                ],
                [
                    "name_tr" => "Ostim Satış Mağazası",
                    "name_en" => "Ostim Store",
                    "address" => "100. Yıl Bulvarı Prestij İş Merkezi No: 55-D/7 Ostim Ankara Türkiye",
                    "phone" => "+90 (312) 385 53 22",
                    "fax" => "+90 (312) 354 23 57",
                    "email_tr" => "info@gulhan.com",
                    "email_en" => "export@gulhan.com",
                ],
                [
                    "name_tr" => "Fabrika İletişim",
                    "name_en" => "Factory Contact",
                    "address" => "Başkent OSB 16. Cadde No: 5 Malıköy Ankara Türkiye",
                    "phone" => "+90 (312) 267 53 22",
                    "fax" => "+90 (312) 354 23 57",
                    "email_tr" => "fabrika@gulhan.com",
                    "email_en" => "export@gulhan.com",
                ]
            ]),
        ];

        Footer::create($data);
    }
}
