<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PrefersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefers = [
            ['title' => 'Persona Touch','content' => 'We take pride in our work. When you hire us, we will personally go to your location to learn about your needs, develop a customized solution, and get your cleaning services started right away. Our professional cleaning staff is dedicated to exceeding your expectations by providing prompt communication and attention to detail!'],
            ['title' => 'Friendly Staff','content' => 'Our office is staffed with experts in operations and customer service whose primary goal is ensuring the satisfaction of our clients. We conduct business in a way that instills a sense of confidence in our clients. It&#39;s something that reaches beyond CBR Cleaning&#39;s service competence; it&#39;s a sense of security. You&#39;ll know you chose wisely when you choose CBR Cleaning'],
            ['title' => 'Years of Experience','content' => 'BR Cleaning is a full service operation, providing cleaning services and more for facilities all over South Florida. We take pride in our work. When you hire us, we will personally go to your location to learn about your needs, develop a customized solution, and get your cleaning services started right away. Our professional cleaning staff is dedicated to exceeding your expectations by providing prompt communication and attention to detail'],
            ['title' => 'Cutting Edge Technology','content' => 'We take pride in our work. When you hire us, we will personally go to your location to learn about your needs, develop a customized solution, and get your cleaning services started right away. Our professional cleaning staff is dedicated to exceeding your expectations by providing prompt communication and attention to detail!'],
            ['title' => 'Passion for the Environment','content' => 'Keeping the earth clean is part of what we care about, so we take steps to be environmentally friendly. We&#39;re one of the only cleaning companies in North America to use cleaning products that are environmentally responsible or sustainable.'],
            ['title' => 'Excellent Service','content' => 'Choose us because of our reputation for excellence. For more than 25 years, we&#39;ve earned a name for quality and customer service. The homeowners we serve rely on us for detail-oriented, consistent cleaning services, every single time we clean their homes. '],
            ['title' => 'Commitment to Quality','content' => 'Our Detail-Clean Rotation System ensures that our work is always high quality. You simply can&#39;t underestimate the power of a good clean - but who has time for it? Focus on the things that matter most to you, and let us take care of the cleaning. Our Professional House Cleaning Checklist ensures we achieve a thorough clean every time. To back this up, we ensure our clients are always happy with our services. There&#39;s no risk in choosing us! Learn more about our satisfaction guarantee. Our customers keep us coming back to clean their homes because of our commitment to quality and consistent service.'],
            ['title' => 'Green Cleaning','content' => 'At The Cleaning Authority, we believe in doing our part to protect the environment. That is why we, as a company, are so committed to using products that are environmentally responsible. Specifically, each of our locations use cleaning products that are environmentally responsible or sustainable.'],           
        ];

        DB::table('prefers')->insert($prefers);


    }
}


