<?

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Seed the companies table.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for seeding
        $companies = [
            [
                'country_id' => 1,
                'company_code' => 'COMP001',
                'name' => 'Example Company 1',
                'email' => 'company1@example.com',
                'commercial_record_number' => 'CRN001',
                'commercial_record_image' => 'image1.jpg',
                'logo' => 'logo1.jpg',
            ],
   
        ];

        // Insert data into the companies table
        Company::insert($companies);
    }
}
