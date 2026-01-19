<?php

namespace Database\Seeders;

use App\Models\Mission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mission::create([
            "description" => "
                <p>MİSYON</p>

                <p>45 yıllık deneyimin getirdiği birikimle ve mevcut kaynaklarımızı etkin kullanarak daha kaliteli, rekabet&ccedil;i ve yenilik&ccedil;i &uuml;r&uuml;nler &uuml;retip, kendi sekt&ouml;r&uuml;nde fark yaratan &ouml;nc&uuml; bir imalat&ccedil;ı-ihracat&ccedil;ı firma olmak.</p>
                
                <p>VİZYON</p>
                
                <p>M&uuml;şterilerimizin değişken talepleri ve ihtiya&ccedil;ları doğrultusunda; mevcut kabiliyetlerimizi geliştirerek ve gerekli adımları atarak uluslararası tanınırlığa ulaşmış bir firma haline gelmek ve konusunda g&uuml;venilir markalardan biri olmaya devam etmek.</p>
            "
        ]);
    }
}
