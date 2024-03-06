<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Region::create([
      'id' => 'dfa279c5-f0f0-4673-ba4d-4e17fb671a0b',
      'name' => 'Ahafo',
      'lat' => '7.58213720',
      'lng' => '-2.54974630'
    ]);

    Region::create([
      'id' => '9c4829a9-5b6d-4368-9e7b-3b0ce200c2f4',
      'name' => 'Ashanti',
      'lat' => '6.74704360',
      'lng' => '-1.52086240'
    ]);

    Region::create([
      'id' => 'c75b541a-d6c9-466d-bd75-3b1dc859ea99',
      'name' => 'Bono',
      'lat' => '7.65000000',
      'lng' => '-2.50000000'
    ]);

    Region::create([
      'id' => 'ca37a70c-6181-4735-89d8-1647a50f13d8',
      'name' => 'Bono East',
      'lat' => '7.75000000',
      'lng' => '-1.05000000'
    ]);

    Region::create([
      'id' => '6ce90e31-2169-490d-90a9-b6867de98d2e',
      'name' => 'Central',
      'lat' => '5.50000000',
      'lng' => '-1.00000000'
    ]);

    Region::create([
      'id' => 'e63d8131-a65a-493a-ba6d-3a7cb35f1553',
      'name' => 'Eastern',
      'lat' => '6.50000000',
      'lng' => '-0.50000000'
    ]);

    Region::create([
      'id' => 'ca0035cd-8ac6-4854-a24e-eb79459dabf5',
      'name' => 'Greater Accra',
      'lat' => '5.81428360',
      'lng' => '0.07467670'
    ]);

    Region::create([
      'id' => 'd8218d65-b893-46c7-923d-8afb41333445',
      'name' => 'North East',
      'lat' => '10.51666700',
      'lng' => '-0.36666700'
    ]);

    Region::create([
      'id' => '0f4fc3d1-e25b-46b8-b427-2af6e53b74ee',
      'name' => 'Northern',
      'lat' => '9.50000000',
      'lng' => '-1.00000000'
    ]);

    Region::create([
      'id' => '4f5b2630-55fa-411f-b1f6-f37286254f24',
      'name' => 'Oti',
      'lat' => '7.90000000',
      'lng' => '0.30000000'
    ]);

    Region::create([
      'id' => 'db4d6821-4898-449c-8ed1-ed0470ca909e',
      'name' => 'Savannah',
      'lat' => '9.08333300',
      'lng' => '-1.81666700'
    ]);

    Region::create([
      'id' => '4f42c1d3-cb91-419a-af90-e019afb350bd',
      'name' => 'Upper East',
      'lat' => '10.70824990',
      'lng' => '-0.98206680'
    ]);

    Region::create([
      'id' => '81382914-e359-4c28-b564-c13f98ea00db',
      'name' => 'Upper West',
      'lat' => '10.25297570',
      'lng' => '-2.14502450'
    ]);

    Region::create([
      'id' => '8a8fbd46-9cd0-4534-be21-6936deb0af85',
      'name' => 'Volta',
      'lat' => '6.57813730',
      'lng' => '0.45023680'
    ]);

    Region::create([
      'id' => '9cd63cbd-830d-4c2a-95e0-ab0278c47c6e',
      'name' => 'Western',
      'lat' => '5.50000000',
      'lng' => '-2.50000000'
    ]);

    Region::create([
      'id' => 'e31757ee-e401-4e9f-8e52-54d5c4b0f639',
      'name' => 'Western North',
      'lat' => '6.30000000',
      'lng' => '-2.80000000'
    ]);
  }
}
