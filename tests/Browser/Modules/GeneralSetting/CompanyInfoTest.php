<?php

namespace Tests\Browser\Modules\GeneralSetting;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CompanyInfoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_for_visit_index_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/generalsetting/company-info')
                ->assertSee('Company Information');
        });
    }

    public function test_for_update_company_info(){
        $this->test_for_visit_index_page();
        $this->browse(function (Browser $browser) {
            $browser->type('#company_name', 'Fxxk')
                    ->type('#email', 'fxxk@admin.com')
                    ->type('#phone', '0123456789')
                    ->type('#vat_number', '123456789000')
                    ->type('#address', 'Germany')
                    ->type('#country_name', 'Germany')
                    ->type('#zip_code', '1200')
                    ->type('#company_info', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley')
                    ->click('#main-content > section > div > div > div > div > form > div.col-12.mb-10.pt_15 > div > button')
                    ->assertPathIs('/generalsetting/company-info')
                    ->waitFor('.toast-message',25)
                    ->assertSeeIn('.toast-message', 'Updated Successfully');

        });
    }

    
}
