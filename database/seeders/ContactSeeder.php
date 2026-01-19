<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'shops' => json_encode([
                [
                    "name_tr" => "OSTİM SATIŞ MAĞAZASI",
                    "name_en" => "SALES OFFICE",
                    "address" => "100. Yıl Bulvarı Prestij İş Merkezi No: 55-D/7 Ostim Ankara Türkiye",
                    "phone" => "+90 (312) 385 53 22",
                    "fax" => "+90 (312) 354 23 57",
                    "email_tr" => "info@gulhan.com",
                    "email_en" => "export@gulhan.com",
                    "map" => "",
                ],
                [
                    "name_tr" => "FABRİKA İLETİŞİM",
                    "name_en" => "CONTACT FACTORY",
                    "address" => "Başkent OSB 16. Cadde No: 5 Malıköy Ankara Türkiye",
                    "phone" => "+90 (312) 267 53 22",
                    "fax" => "+90 (312) 354 23 57",
                    "email_tr" => "fabrika@gulhan.com",
                    "email_en" => "export@gulhan.com",
                    "map" => "",
                ],
                [
                    "name_tr" => "İSTANBUL SATIŞ MAĞAZASI",
                    "name_en" => "İSTANBUL BRANCH",
                    "address" => "Esenşehir Mahallesi, Necip Fazıl Bulvarı No:45, Ümraniye - Dudullu, İstanbul Türkiye",
                    "phone" => "+90 216 517 29 21",
                    "fax" => "+90 (541) 507 30 44",
                    "email_tr" => "istanbul@gulhan.com",
                    "email_en" => "export@gulhan.com",
                    "map" => "",
                ],
                [
                    "name_tr" => "ABD SATIŞ OFİSİ",
                    "name_en" => "SALES OFFICE USA",
                    "address" => "1380 BEVERAGE DRIVE SUITE-W STONE MOUNTAIN, GA Georgia Amerika Birleşik Devletleri",
                    "phone" => "+1 (678) 628-0275",
                    "fax" => "+90 (541) 507 30 44",
                    "email_tr" => "usa@gulhan.com",
                    "email_en" => "usa@gulhan.com",
                    "map" => "",
                ]
            ]),
        ];

        Contact::create($data);
    }
}
