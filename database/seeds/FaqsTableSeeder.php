<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            ['question' => 'Why should I hire CBR Cleaning Solutions?', 'answer' => 'Though it is often much cheaper to hire an individual under-the-table to clean your home, it&#39;s important to know that there are major differences between an individual and a professional cleaning company.'],
            ['question' => 'How long does a cleaning take?', 'answer' => 'This will be determined during your free estimate, depending on the condition of the home. '],
            ['question' => 'How do you determine the price?', 'answer' => 'Price is calculated during your free estimate and the cost is based on the size and condition of your facilities'],
            ['question' => 'How do I pay for your service?', 'answer' => 'We accept cash, check and all credit cards. Let us know your payment preference upon scheduling a cleaning. Payment should be made at the time of the cleaning.'],
            ['question' => 'Do you provide your own cleaning supplies?', 'answer' => 'es we come fully prepared to clean your home with our own quality cleaning supplies and equipment.'],
            ['question' => 'Is your company insured?', 'answer' => 'Yes. We are licensed, and insured.'],
            ['question' => 'How many people will you send to clean my home?', 'answer' => 'Its depend of the Size of the building or facilities'],
            ['question' => 'What time will the cleaning crew arrive at my home? ', 'answer' => 'Our work hours are from 7am to 9pm Monday thru Friday. You can request your time preference and we will do our best to accommodate. '],
            ['question' => 'How do you dry clean carpet?', 'answer' => 'Dry cleaning carpet is similar to dry cleaning clothing. Dry cleaning means that, primarily, solvents rather than water are used. In the case of your clothes, they are “wet” with a dry cleaning solution called perchloroethane. After cleaning, your clothing must be allowed to dry. Perchloroethane cannot be used on your carpet but other environmentally friendly solvents can be. First your carpets are thoroughly vacuumed to remove dust, sand, pet hair and other particulate soil. Then the dry cleaning solution is sprayed on your carpet a section at a time and allowed to sit for 3-6 minutes. During this time, the dry cleaning solution, Ultra Dry, emulsifies soils in preparation for their removal. A highly absorbent cleaning pad is immersed in a heated solution call Ultra Catalyst. The excess is wrung out so that the pad is damp and very hot. This hot treated pad is spun on the carpet with a floor machine to absorb the Ultra Dry and suspended soils. The Ultra Catalyst increases the attraction between the pad and the soil suspended by the Ultra Dry. The heat of the pad also increases cleaning power. Additionally Ultra Catalyst and Ultra Dry provide deodorizing action for mild odor problems.'],
            ['question' => 'Do you do background checks?', 'answer' => 'Yes, we run background checks on all prospective employees. We are very selective throughout our hiring process.'],
            ['question' => 'What is Green Cleaning?', 'answer' => 'An alternative to the traditional method used to clean your home/office. A style of cleaning that reduces the use of (VOC’s) Volatile Organic Compounds in your home/office, with the environment in mind. Using only biodegradable products to clean.'],
            ['question' => 'How do I leave special instructions for the cleaning teams', 'answer' => 'It is best to call or email your respective office and give them the special instruction. Either adding a service or canceling service please call or email our offices.'],
        ];

        DB::table('faqs')->insert($faqs);
    }
}
