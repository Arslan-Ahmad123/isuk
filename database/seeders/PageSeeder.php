<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Page::exists()) {
            return;
        }
        $data = [
            [
                'page_name' => 'header_footer',
                'section_name' => 'header_footer',
                'content' => json_encode([
                    'logo' => url('assets/images/logo%20(2).png'),
                    'firstPara' => 'We help you discover the ideal destinations to achieve your aspirations.',
                    'secondPara' => 'Partnering with over 65 countries, we guarantee a smooth journey and help you achieve your goals with excellence.',
                    'footerNumber' => '447466330705',
                    'footerEmail' => 'info@isukconsultancy.co.uk'
                ])
            ],
            [
                'page_name' => 'home',
                'section_name' => 'hero',
                'content' => json_encode([
                    'sliders' => [
                        [
                            'title' => 'Explore | Learn | Grow | Achieve',
                            'description' => 'Turning aspirations into achievements',
                            'image' => url('assets/images/slider1.jpg'),
                            'buttonText' => 'Find out More',
                            'buttonLink' => route('services')
                        ],
                        [
                            'title' => 'Pursue Education Abroad',
                            'description' => 'Unlock a world of possibilities',
                            'image' => url('assets/images/slider5.jpg'),
                            'buttonText' => 'Discover More',
                            'buttonLink' => route('country')
                        ],
                        [
                            'title' => 'Build Your Career Overseas',
                            'description' => 'Step up to global opportunities',
                            'image' => url('assets/images/slider6.jpg'),
                            'buttonText' => 'Learn More',
                            'buttonLink' => route('country')
                        ]
                    ]
                ])
            ],
            [
                'page_name' => 'home',
                'section_name' => 'about',
                'content' => json_encode([
                    'heading' => 'About ISUK',
                    'subHeading' => 'Connecting your aspirations with reality...!',
                    'firstPara' => 'Are you considering relocating abroad? That’s fantastic!',
                    'secondPara' => 'We are here to assist you. ISUK is a leading consultancy, recognized for offering exceptional guidance and support to help you achieve your dreams of living in the West.',
                    'thirdPara' => 'What sets us apart is our dedicated team and our vision. We dream big, and we empower you not just to envision your goals but to turn them into reality.',
                    'image' => url('assets/images/about-us.jpg'),
                    'buttonText' => 'Learn More',
                    'buttonLink' => route('about')
                ])
            ],
            [
                'page_name' => 'home',
                'section_name' => 'services',
                'content' => json_encode([
                    'heading' => 'Our Services',
                    'services' => [
                        [
                            'title' => 'Study Abroad',
                            'description' => 'Discover a wide range of international education opportunities. We assist you in finding your ideal course at top universities worldwide. Our knowledgeable advisors will support you from your initial free consultation all the way to your admission.',
                            'buttonText' => 'Discover More',
                            'buttonLink' => route('services')
                        ],
                        [
                            'title' => 'Travel the World',
                            'description' => 'Embark on global adventures and satisfy your wanderlust. We offer comprehensive travel assistance to help you realize all your travel aspirations. From visa support to accommodation arrangements, our travel specialists are here to ensure your journey is seamless.',
                            'buttonText' => 'Discover More',
                            'buttonLink' => route('services')
                        ],
                        [
                            'title' => 'Relocate Anywhere',
                            'description' => 'Thinking about moving abroad? We provide expert guidance on all immigration services in just a few simple steps. We manage all necessary paperwork and requirements to help you settle in your desired country. Just tell us where you want to go, and we’ll take care of the rest.',
                            'buttonText' => 'Discover More',
                            'buttonLink' => route('services')
                        ]
                    ]
                ])
            ],
            [
                'page_name' => 'home',
                'section_name' => 'counter',
                'content' => json_encode([
                    'heading' => 'The ISUK Advantages',
                    'counters' => [
                        [
                            'number' => '7500',
                            'title' => 'Students'
                        ],
                        [
                            'number' => '127',
                            'title' => 'Universities'
                        ],
                        [
                            'number' => '81',
                            'title' => 'Countries'
                        ],
                        [
                            'number' => '7500',
                            'title' => 'Immigrations'
                        ]
                    ]
                ])
            ],
            [
                'page_name' => 'home',
                'section_name' => 'country',
                'content' => json_encode([
                    'heading' => 'Top Destinations',
                    'subHeading' => 'Dreaming of an international life? The world is vast and full of opportunities. Discover the endless possibilities awaiting you.',
                    'countries' => [
                        [
                            'title' => 'USA',
                            'description' => 'The USA is renowned for its innovation and entrepreneurial spirit, making it a land of vast opportunities and global influence.',
                        ],
                        [
                            'title' => 'United Kingdom',
                            'description' => 'The UK boasts a prestigious array of educational institutions, including globally acclaimed universities such as Oxford and Cambridge.',
                        ],
                        [
                            'title' => 'Canada',
                            'description' => 'Canada is renowned for its excellent quality of life and thriving tech sector, making it a top choice for immigrants.',
                        ],
                        [
                            'title' => 'New Zealand',
                            'description' => 'New Zealand is celebrated for its excellent education system and retirement options, offering a blend of cultural richness and breathtaking landscapes.',
                        ],
                        [
                            'title' => 'Australia',
                            'description' => 'Australia is renowned for its top-tier education, excellent retirement options, and vibrant travel experiences, making it a favored destination for immigrants globally.',
                        ],
                        [
                            'title' => 'Europe',
                            'description' => 'Europe offers a unique blend of historical richness, cultural diversity, and stunning landscapes, making it an ideal destination for both travel and living.',
                        ],
                    ]
                ])
            ],
            [
                'page_name' => 'home',
                'section_name' => 'contact',
                'content' => json_encode([
                    'heading' => 'Discover the Paths, Illuminate the Paths, Guide the Paths...!',
                    'firstPara' => 'Your one-stop solution for all your international living needs and aspirations.',
                    'secondPara' => 'Your comprehensive resource for achieving your international living aspirations and dreams.',
                    'buttonText' => 'Get Consultation',
                    'buttonLink' => route('contact')
                ])
            ],
            [
                'page_name' => 'about',
                'section_name' => 'hero',
                'content' => json_encode([
                    'image' => url('assets/images/about-hero.jpg'),
                    'title' => 'Your Trusted Partner for Education & Immigration',
                    'description' => 'Empowering your dreams of studying and settling abroad with expert guidance and seamless processes.'
                ])
            ],
            [
                'page_name' => 'about',
                'section_name' => 'details',
                'content' => json_encode([
                    'details' => [
                        [
                            'title' => 'Our Mission',
                            'description' => 'To provide aspiring individuals with personalized and reliable guidance for achieving their educational and immigration goals with utmost integrity and professionalism.'
                        ],
                        [
                            'title' => 'Our Vision',
                            'description' => 'To be the most trusted consultancy worldwide, known for turning dreams into reality and creating a bridge for opportunities across borders.'
                        ]
                    ]
                ])
            ],
            [
                'page_name' => 'about',
                'section_name' => 'contact',
                'content' => json_encode([
                    'heading' => 'Ready to Start Your Journey?',
                    'subHeading' => 'Contact us today to schedule a consultation and take the first step towards your dream!',
                    'buttonText' => 'Get In Touch ',
                    'buttonLink' => route('contact')
                ])
            ],
            [
                'page_name' => 'services',
                'section_name' => 'hero',
                'content' => json_encode([
                    'image' => url('assets/images/service-bg.jpg'),
                    'title' => 'Our Services',
                    'description' => 'Explore tailored solutions to help you achieve your dreams of studying, working, and living abroad.',
                    'buttonText' => 'Explore Services'
                ])
            ],
            [
                'page_name' => 'services',
                'section_name' => 'services',
                'content' => json_encode([
                    'heading'  => 'Visa Services',
                    'services' => [
                        [
                            'image' => url('assets/images/abroad-studies.jpg'),
                            'title' => 'Abroad Studies',
                            'description' => 'Making your overseas education dream come true by assuring you a seat in your dream university.'
                        ],
                        [
                            'image' => url('assets/images/tours-travels.jpg'),
                            'title' => 'Tours & Travels',
                            'description' => 'Helps to clear all the busy & time-consuming issues including different visa processes in different countries, hotel'
                        ],
                        [
                            'image' => url('assets/images/settle-abroad.jpg'),
                            'title' => 'Settle Abroad',
                            'description' => 'Grab the job opportunities around the world & settle in your dream country.'
                        ],
                        [
                            'image' => url('assets/images/work-overseas.jpg'),
                            'title' => 'Work Overseas',
                            'description' => 'We assist skilled people who want to make their career in different countries and contribute to that country’s economy.'
                        ],
                    ]
                ])
            ],
            [
                'page_name' => 'country',
                'section_name' => 'hero',
                'content' => json_encode([
                    'image' => url('assets/images/country-hero.jpg'),
                    'title' => 'Opportunities in USA, UK, Canada, Australia, and Europe',
                    'description' => 'Unlock your potential with unmatched educational and immigration prospects in top destinations worldwide.'
                ])
            ],
            [
                'page_name' => 'country',
                'section_name' => 'destinations',
                'content' => json_encode([
                    'heading' => 'Why Choose These Destinations',
                    'subHeading' => 'Discover why the USA, UK, Canada, Australia, and Europe are top choices for education and career growth.',
                    'destinations' => [
                        [
                            'title' => 'World-Class Education',
                            'description' => 'Top-ranked universities offering diverse programs and research opportunities in these countries.',
                            'image' => url('assets/images/world-class-education.jpg')
                        ],
                        [
                            'title' => 'Immigration Pathways',
                            'description' => 'Seamless visa processes and support for permanent residency options across these regions.',
                            'image' => url('assets/images/immigration-pathways.jpg')
                        ],
                        [
                            'title' => 'Cultural Diversity',
                            'description' => 'A multicultural environment that enriches both personal and professional growth.',
                            'image' => url('assets/images/cultural-diversity.jpg')
                        ],
                    ],
                ])
            ],
            [
                'page_name' => 'country',
                'section_name' => 'opportunities',
                'content' => json_encode([
                    'heading' => 'Top Opportunities in These Countries',
                    'subHeading' => 'Explore premier institutions and immigration pathways tailored for your future in the USA, UK, Canada, Australia, and Europe.',
                    'opportunities' => [
                        [
                            'title' => 'USA: Leading the World in Education',
                            'description' => 'Renowned for cutting-edge research and top-ranked institutions.',
                            'image' => url('assets/images/usa-universities.jpg')
                        ],
                        [
                            'title' => 'UK: Excellence in Academics',
                            'description' => 'Historic universities with world-class academic programs.',
                            'image' => url('assets/images/uk-universities.jpg')
                        ],
                        [
                            'title' => 'Canada: Open Immigration Policies',
                            'description' => 'Offering work permits, PR pathways, and thriving job markets.',
                            'image' => url('assets/images/canada-universities.jpg')
                        ],
                        [
                            'title' => 'Australia: Education and Lifestyle',
                            'description' => 'Known for its quality of life and globally recognized universities.',
                            'image' => url('assets/images/australia-universities.jpg')
                        ],
                        [
                            'title' => 'Europe: A Hub of Innovation',
                            'description' => 'Home to diverse cultures and leading institutions.',
                            'image' => url('assets/images/europe-universities.jpg')
                        ],
                    ],
                ])
            ],
            [
                'page_name' => 'country',
                'section_name' => 'contact',
                'content' => json_encode([
                    'heading' => 'Start Your Journey Today',
                    'subHeading' => 'Contact us to unlock educational and immigration opportunities in the USA, UK, Canada, Australia, and Europe!',
                    'buttonText' => 'Get In Touch',
                    'buttonLink' => route('contact')
                ])
            ],
            [
                'page_name' => 'contact',
                'section_name' => 'hero',
                'content' => json_encode([
                    'image' => url('assets/images/contact-hero-section.jpg'),
                    'title' => 'Get in Touch with Us',
                    'description' => 'We are here to assist you with all your education and immigration needs.'
                ])
            ],
            [
                'page_name' => 'contact',
                'section_name' => 'contact',
                'content' => json_encode([
                    'heading' => 'Contact Information',
                    'subHeading' => 'Reach out to us through any of the following methods. We look forward to hearing from you!',
                    'number' => '447466330705',
                    'email' => 'info@isukconsultancy.co.uk'
                ])
            ]
        ];
        Page::insert($data);
    }
}
