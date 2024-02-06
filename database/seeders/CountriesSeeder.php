<?


// File: database/seeders/CountriesSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Seed the countries table.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for seeding
        $countries = [
            ['name' => 'INDIA', 'code' => 'IN'],
            ['name' => 'SAUDI', 'code' => 'SA'],
            ['name' => 'DUBAI', 'code' => 'DU'],
            // Add more countries as needed
        ];

        // Insert data into the countries table
        Country::insert($countries);
    }
}
