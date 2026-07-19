<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'contact_email', 'value' => 'parweshk394@gmail.com'],
            ['key' => 'contact_phone', 'value' => '078389 00306'],
            ['key' => 'contact_location', 'value' => 'Haryana, Haryana'],
            
            ['key' => 'hero_title_text', 'value' => 'I am <br class="md:hidden">
<span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3B82F6] via-[#8B5CF6] to-[#EC4899]">Prawesh</span>,<br>
a Full Stack Developer.'],
            ['key' => 'hero_description_text', 'value' => 'I build exceptional and accessible digital experiences for the web. Transforming complex problems into elegant, modern, and scalable solutions.'],
            ['key' => 'hero_cv_link', 'value' => 'https://drive.google.com/file/d/1Ig-0ADk-4MdxbcOvTikTIb7H5DL5ANjy/view?usp=drivesdk'],
            ['key' => 'hero_github_link', 'value' => 'https://github.com/Praweshkumar'],
            ['key' => 'hero_linkedin_link', 'value' => 'https://www.linkedin.com/in/prawesh-kumar-838674226/'],
            ['key' => 'hero_image', 'value' => ''],
            
            ['key' => 'about_image', 'value' => ''],
            ['key' => 'about_text_main', 'value' => '<p>Hello! I\'m <strong>Prawesh Kumar</strong>, a passionate Full Stack Developer with experience in building modern web and mobile applications. I specialize in PHP, Laravel, React.js, Next.js, React Native, Node.js, MySQL, and MongoDB, creating scalable and user-friendly digital solutions.</p>
<p>I completed my Bachelor\'s degree in <strong>Bachelor of Computer Applications (BCA)</strong> from <strong>Maharshi Dayanand University</strong>. During my academic journey and professional experience, I developed strong problem-solving skills and gained hands-on experience in developing responsive websites, REST APIs, admin dashboards, and cross-platform mobile applications.</p>
<p>Currently, I focus on writing clean, maintainable code and continuously learning new technologies to build high-performance applications that deliver real business value.</p>'],
            ['key' => 'about_degree_title', 'value' => 'Bachelor of Computer Applications (BCA)'],
            ['key' => 'about_university', 'value' => 'Maharshi Dayanand University'],
            ['key' => 'about_quote_text', 'value' => 'Passionate about building scalable web and mobile applications with modern technologies and delivering clean, efficient, and user-focused solutions.'],
        ];
        
        foreach ($settings as $setting) {
            \App\Models\Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
