<?php

namespace Database\Seeders;

use App\Models\setting;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setting::create([
            'title' => 'Healing is an art, begin your masterpiece.',
            'sub_title' => 'Taking the first step toward therapy is a power move—one that leads to healing, growth, and self-discovery. You don’t have to figure it all out alone; here, your story is heard, your struggles are met with care, and your path forward becomes clearer. Ready to start? We’re with you every step of the way.',
            'banner_img' => 'assets/images/bg_1.jpg',
            'banner_video_link' => '',
            'banner_content1' => 'We provide 100% confidential services in a safe and supportive environment, ensuring your privacy and trust are always respected.',
            'banner_content2' => 'We am committed to making therapy accessible by offering affordable services without compromising quality care.',
            'banner_content3' => 'We take a client-centered approach, prioritizing your unique needs and fostering a space of trust and collaboration.',
            'work_title' => 'How It Works',
            'getin_touch_title' => 'Get in Touch',
            'first_session_title' => 'First Session',
            'beginyour_path_title' => 'Begin Your Path',
            'getin_touch_content' => 'Reach out through the website or book a free consultation to share your needs and learn how I can support you.',
            'first_session_content' => 'We’ll dive into your goals, concerns, and any questions to create a personalized plan for your journey.',
            'beginyour_path_content' => 'Start the process of growth, healing, and self-discovery, with support and guidance every step of the way.',
            'therapy_title' => 'Virtual Therapy',
            'therapy_heading' => 'Virtual Therapy, Real Transformation',
            'therapy_content' => 'At Nirvana Counseling, we understand life’s challenges can feel overwhelming. Sometimes, the best way to reset is by seeking compassionate support. That’s why we offer virtual therapy tailored to the needs and lifestyles of our clients. We provide secure, evidence-based online counseling that ensures accessible, confidential, and effective care from the comfort of your home.

Whether you seek clarity, healing, or growth, we’re here to guide you every step. Explore our policies to learn more about consent, confidentiality, and electronic communication. Your well-being is our top priority—let’s embark on this transformative journey together.',
            'phone' => '+1 5875809055',
            'email' => 'gofornirvana@gmail.com',
            'footer_content' => 'Providing expert counseling and personalized support to help you achieve your mental wellness goals. Reach out today to start your journey.',
            'logo' => 'assets/logo/blackBG.png',
            'insta_link' => 'https://www.instagram.com/nirvana_counseling/',
            'linkedin_link' => 'https://www.linkedin.com/in/arpi-parikh-5b346096/',
            'website_link' => '',
            'contact_link' => ''
        ]);
    }
}
