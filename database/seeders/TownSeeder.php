<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Rfc4122\UuidV4;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Ahafo
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Asunafo North',
          'region_id' => 'dfa279c5-f0f0-4673-ba4d-4e17fb671a0b',
          'lat' => '6.81968910',
          'lng' => '-2.80770500'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Asunafo South',
          'region_id' => 'dfa279c5-f0f0-4673-ba4d-4e17fb671a0b',
          'lat' => '6.64801380',
          'lng' => '-2.68874370'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Asutifi North',
          'region_id' => 'dfa279c5-f0f0-4673-ba4d-4e17fb671a0b',
          'lat' => '6.94774860',
          'lng' => '-2.76757160'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Asutifi South',
          'region_id' => 'dfa279c5-f0f0-4673-ba4d-4e17fb671a0b',
          'lat' => '6.64801380',
          'lng' => '-2.68874370'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Tano North',
          'region_id' => 'dfa279c5-f0f0-4673-ba4d-4e17fb671a0b',
          'lat' => '7.22603010',
          'lng' => '-2.30456560'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Tano South',
          'region_id' => 'dfa279c5-f0f0-4673-ba4d-4e17fb671a0b',
          'lat' => '7.19537930',
          'lng' => '-2.12586610'
        ]);


      // Northern
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kpandae',
          'region_id' => '0f4fc3d1-e25b-46b8-b427-2af6e53b74ee',
          'lat' => '8.46885000',
          'lng' => '-0.01127000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Salaga',
          'region_id' => '0f4fc3d1-e25b-46b8-b427-2af6e53b74ee',
          'lat' => '8.55083000',
          'lng' => '-0.51875000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Savelugu',
          'region_id' => '0f4fc3d1-e25b-46b8-b427-2af6e53b74ee',
          'lat' => '9.62441000',
          'lng' => '-0.82530000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Tamale',
          'region_id' => '0f4fc3d1-e25b-46b8-b427-2af6e53b74ee',
          'lat' => '9.40079000',
          'lng' => '-0.83930000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Yendi',
          'region_id' => '0f4fc3d1-e25b-46b8-b427-2af6e53b74ee',
          'lat' => '9.44272000',
          'lng' => '-0.00991000'
        ]);


      // Upper east
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bawku',
          'region_id' => '4f42c1d3-cb91-419a-af90-e019afb350bd',
          'lat' => '11.06160000',
          'lng' => '-0.24169000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bolgatanga',
          'region_id' => '4f42c1d3-cb91-419a-af90-e019afb350bd',
          'lat' => '10.78556000',
          'lng' => '-0.85139000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Navrongo',
          'region_id' => '4f42c1d3-cb91-419a-af90-e019afb350bd',
          'lat' => '10.89557000',
          'lng' => '-1.09210000'
        ]);


      // Oti
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Biakoye',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '7.11698690',
          'lng' => '0.32324300'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Jasikan',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '7.40940880',
          'lng' => '0.44301500'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kadjebi',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '7.52631920',
          'lng' => '0.46704770'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Krachi East',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '7.77196980',
          'lng' => '-0.07763760'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Krachi Nchumuru',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '8.14849800',
          'lng' => '-0.16349880'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Krachi West',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '7.98282160',
          'lng' => '-0.34886270'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Nkwanta North',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '8.35180760',
          'lng' => '0.12217620'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Nkwanta South',
          'region_id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
          'lat' => '8.25931340',
          'lng' => '0.50185190'
        ]);


      // Central
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Apam',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.28483000',
          'lng' => '-0.73711000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Cape Coast',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.10535000',
          'lng' => '-1.24660000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Dunkwa',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.95996000',
          'lng' => '-1.77792000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Elmina',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.08470000',
          'lng' => '-1.35093000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Foso',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.70119000',
          'lng' => '-1.28657000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kasoa',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.53449000',
          'lng' => '-0.41679000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Mumford',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.26176000',
          'lng' => '-0.75897000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Saltpond',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.20913000',
          'lng' => '-1.06058000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Swedru',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.53711000',
          'lng' => '-0.69984000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Winneba',
          'region_id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
          'lat' => '5.35113000',
          'lng' => '-0.62313000'
        ]);


      // Upper west
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Wa',
          'region_id' => '81382914-e359-4c28-b564-c13f98ea00db',
          'lat' => '10.06069000',
          'lng' => '-2.50192000'
        ]);


      // Volta
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Aflao',
          'region_id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
          'lat' => '6.11982000',
          'lng' => '1.19012000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Anloga',
          'region_id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
          'lat' => '5.79473000',
          'lng' => '0.89728000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Ho',
          'region_id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
          'lat' => '6.60084000',
          'lng' => '0.47130000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Hohoe',
          'region_id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
          'lat' => '7.15181000',
          'lng' => '0.47362000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Keta',
          'region_id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
          'lat' => '5.91793000',
          'lng' => '0.98789000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kete Krachi',
          'region_id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
          'lat' => '7.79391000',
          'lng' => '-0.04980000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kpandu',
          'region_id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
          'lat' => '6.99536000',
          'lng' => '0.29306000'
        ]);


      // Ashanti
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Agogo',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '6.80004000',
          'lng' => '-1.08193000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bekwai',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '6.45195000',
          'lng' => '-1.57866000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Ejura',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '7.38558000',
          'lng' => '-1.35617000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Konongo',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '6.61667000',
          'lng' => '-1.21667000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kumasi',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '6.68848000',
          'lng' => '-1.62443000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Mampong',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '7.06273000',
          'lng' => '-1.40010000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Obuase',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '6.20228000',
          'lng' => '-1.66796000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Tafo',
          'region_id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
          'lat' => '6.73156000',
          'lng' => '-1.61370000'
        ]);


      // Western
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Aboso',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '5.36073000',
          'lng' => '-1.94856000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Axim',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '4.86641000',
          'lng' => '-2.24181000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bibiani',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '6.46346000',
          'lng' => '-2.31938000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Prestea',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '5.43385000',
          'lng' => '-2.14295000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sekondi-Takoradi',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '4.92678000',
          'lng' => '-1.75773000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Shama Junction',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '5.01806000',
          'lng' => '-1.66437000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Takoradi',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '4.89816000',
          'lng' => '-1.76029000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Tarkwa',
          'region_id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
          'lat' => '5.30383000',
          'lng' => '-1.98956000'
        ]);


      // Bono
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Banda',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '8.14956710',
          'lng' => '-2.36639500'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Berekum East',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.51117580',
          'lng' => '-2.75998310'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Berekum West',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.51117580',
          'lng' => '-2.75998310'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Dormaa Central',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.27750000',
          'lng' => '-2.87833300'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Dormaa East',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.30000000',
          'lng' => '-2.70000000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Dormaa West',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.01666700',
          'lng' => '-3.05000000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Jaman North',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.98832340',
          'lng' => '-2.96858690'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Jaman South',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.70843750',
          'lng' => '-3.07501700'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sunyani',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.33803320',
          'lng' => '-2.34871460'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sunyani West',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.35660520',
          'lng' => '-2.44618620'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Tain',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '8.18114110',
          'lng' => '-2.86487620'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Wenchi',
          'region_id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
          'lat' => '7.74059920',
          'lng' => '-2.12267880'
        ]);


      // Greater accra
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Accra',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.55602000',
          'lng' => '-0.19690000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Atsiaman',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.69775000',
          'lng' => '-0.32824000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Dome',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.65003000',
          'lng' => '-0.23610000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Gbawe',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.57692000',
          'lng' => '-0.31038000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Medina Estates',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.66580000',
          'lng' => '-0.16307000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Nungua',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.60105000',
          'lng' => '-0.07713000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Tema',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.66980000',
          'lng' => '-0.01657000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Teshi Old Town',
          'region_id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
          'lat' => '5.58365000',
          'lng' => '-0.10722000'
        ]);


      // Bono East
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Atebubu-Amantin',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.70237000',
          'lng' => '-1.21979430'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kintampo North',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '8.39635790',
          'lng' => '-1.82000070'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kintampo South',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.98971320',
          'lng' => '-2.00711150'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Nkoranza North',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.56603310',
          'lng' => '-1.72365200'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Nkoranza South',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.62405120',
          'lng' => '-1.79974460'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Pru East',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '8.22620000',
          'lng' => '-0.65360000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Pru West',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '8.07359930',
          'lng' => '-1.29055410'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sene East',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.78300000',
          'lng' => '-0.21700000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sene West',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.73420000',
          'lng' => '-0.68180000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Techiman',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.58968560',
          'lng' => '-1.95122140'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Techiman North',
          'region_id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
          'lat' => '7.70428020',
          'lng' => '-2.08140570'
        ]);


      // North East
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bunkpurugu-Nyakpanduri',
          'region_id' => 'd8218d65-b893-46c7-923d-8afb41333445',
          'lat' => '10.46609170',
          'lng' => '-0.22711950'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Chereponi',
          'region_id' => 'd8218d65-b893-46c7-923d-8afb41333445',
          'lat' => '10.13827720',
          'lng' => '0.28242580'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'East Mamprusi',
          'region_id' => 'd8218d65-b893-46c7-923d-8afb41333445',
          'lat' => '10.42931860',
          'lng' => '-0.53078850'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Mamprugu-Moagduri',
          'region_id' => 'd8218d65-b893-46c7-923d-8afb41333445',
          'lat' => '10.23290000',
          'lng' => '-1.28360000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'West Mamprusi',
          'region_id' => 'd8218d65-b893-46c7-923d-8afb41333445',
          'lat' => '10.29906060',
          'lng' => '-1.36750100'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Yunyoo-Nasuan',
          'region_id' => 'd8218d65-b893-46c7-923d-8afb41333445',
          'lat' => '10.48400000',
          'lng' => '-0.00900000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kpandae',
          'region_id' => 'd8218d65-b893-46c7-923d-8afb41333445',
          'lat' => '8.46885000',
          'lng' => '-0.01127000'
        ]);


      // Savannah
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bole',
          'region_id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
          'lat' => '9.02996640',
          'lng' => '-2.50694300'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Central Gonja',
          'region_id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
          'lat' => '8.92784320',
          'lng' => '-1.95369720'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'East Gonja',
          'region_id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
          'lat' => '8.72568400',
          'lng' => '-1.07135790'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'North East Gonja',
          'region_id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
          'lat' => '9.11746690',
          'lng' => '-0.55579360'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'North Gonja',
          'region_id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
          'lat' => '9.54130850',
          'lng' => '-1.39766920'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sawla-Tuna-Kalba',
          'region_id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
          'lat' => '9.39114570',
          'lng' => '-2.70611660'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'West Gonja',
          'region_id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
          'lat' => '9.57513170',
          'lng' => '-2.26440410'
        ]);


      // Western North
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Aowin',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '5.75309280',
          'lng' => '-3.07518870'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bia East',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '6.76860400',
          'lng' => '-3.33302410'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bia West',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '6.76860400',
          'lng' => '-3.33302410'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bibiani-Anhwiaso-Bekwai',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '6.30210040',
          'lng' => '-2.35675070'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Bodi',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '6.22240910',
          'lng' => '-2.76615150'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Juaboso',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '6.33331570',
          'lng' => '-2.84206140'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sefwi-Akontombra',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '6.04285480',
          'lng' => '-2.88133620'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Sefwi-Wiawso',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '6.21965670',
          'lng' => '-2.50059150'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Suaman',
          'region_id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
          'lat' => '5.75309280',
          'lng' => '-3.07518870'
        ]);


      // Eastern
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Aburi',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '5.84802000',
          'lng' => '-0.17449000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Akim Oda',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '5.92665000',
          'lng' => '-0.98577000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Akim Swedru',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '5.89380000',
          'lng' => '-1.01636000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Akropong',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '5.97462000',
          'lng' => '-0.08542000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Akwatia',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '6.04024000',
          'lng' => '-0.80876000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Asamankese',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '5.86006000',
          'lng' => '-0.66350000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Begoro',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '6.38706000',
          'lng' => '-0.37738000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Kibi',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '6.16494000',
          'lng' => '-0.55376000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Koforidua',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '6.09408000',
          'lng' => '-0.25913000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Mpraeso',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '6.59321000',
          'lng' => '-0.73462000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Nsawam',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '5.80893000',
          'lng' => '-0.35026000'
        ]);
        Town::create([
          'id' => UuidV4::uuid4()->toString(),
          'name' => 'Suhum',
          'region_id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
          'lat' => '6.04089000',
          'lng' => '-0.45004000'
        ]);
    }
}
