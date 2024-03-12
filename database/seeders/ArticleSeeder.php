<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::query()->create([
            'category_id' => Category::query()->first()->id,
            'title_ua' => 'Польський клуб звільнив колишнього гравця Шахтаря',
            'title_pl' => 'Polski klub zwolnił byłego zawodnika Szachtara',
            'title_en' => 'The Polish club fired the former Shakhtar player',
            'subtitle_ua' => 'Маріуш Левандовскі залишив посаду головного тренера ФК «Брук Бет Термаліца»',
            'subtitle_pl' => 'Mariusz Lewandowski odszedł ze stanowiska głównego trenera FC „Brook Bet Thermalica”',
            'subtitle_en' => 'Mariusz Lewandowski left the position of head coach of FC "Brook Bet Thermalica"',
            'description_ua' => 'Польський клуб «Брук Бет Термаліца» офіційно оголосив про завершення співпраці з головним тренером Маріушем Левандовським. Польський фахівець працював із клубом із 16 червня 2023 року. Це був другий раз, коли він тренував «Термаліцу». Повідомляється, що разом із Левандовським клуб залишає й інший тренер-аналітик Кшиштоф Кавалко. Зазначимо, що клуб «Брук Бет Термаліца» виступає у другому за силою польському дивізіоні. Після 23 турів чемпіонату набрав 29 очок, посідаючи при цьому 12 місце з 18 команд. Українським фанатам футболу Левандовскі відомий за виступами за донецький «Шахтар» (2001 – 2010 роки) і «Севастополь» (2010 – 2013 роки).',
            'description_pl' => 'Polski klub „Bruk Beth Termalitsa” oficjalnie ogłosił zakończenie współpracy z głównym trenerem Mariuszem Lewandowskim. Polski specjalista współpracuje z klubem od 16 czerwca 2023 roku. To był drugi raz, kiedy trenował Thermalitsę. Z doniesień wynika, że ​​klub wraz z Lewandowskim odchodzi kolejny trener-analityk Krzysztof Kavalko. Warto zaznaczyć, że klub „Bruk Bet Termalitsa” gra w drugiej najsilniejszej polskiej lidze. Po 23 rundach mistrzostw zdobył 29 punktów, zajmując 12. miejsce na 18 drużyn. Lewandowski znany jest ukraińskim kibicom piłki nożnej z występów dla Szachtara Donieck (2001-2010) i Sewastopola (2010-2013).',
            'description_en' => 'The Polish club "Bruk Beth Termalitsa" officially announced the end of cooperation with the head coach Mariusz Lewandowski. The Polish specialist has been working with the club since June 16, 2023. It was the second time he coached Thermalitsa. It is reported that Krzysztof Kavalko, another coach-analyst, is leaving the club together with Lewandowski. It should be noted that the club "Bruk Bet Termalitsa" plays in the second strongest Polish division. After 23 rounds of the championship, he scored 29 points, taking 12th place out of 18 teams. Lewandowski is known to Ukrainian football fans for his performances for Shakhtar Donetsk (2001-2010) and Sevastopol (2010-2013).',
            'slug' => Str::slug('Польський клуб звільнив колишнього гравця Шахтаря'),
            'image' => 'https://pic.sport.ua/images/news/0/16/163/orig_672648.jpg',
            'is_published' => true,
            'publication_date' => now(),
        ]);
    }
}
