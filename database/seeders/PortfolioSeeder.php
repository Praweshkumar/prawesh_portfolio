<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Education;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'company' => 'Abhhyam Ventures Pvt. Ltd.',
            'role' => 'Laravel Backend Developer',
            'type' => 'Internship',
            'location' => 'Noida',
            'start_date' => 'Jan 2024',
            'end_date' => 'Jun 2024',
            'description' => 'Focuses on creating and deploying RESTful APIs and optimizing backend logic.',
            'logo_path' => 'images/abhhyam-logo.png',
            'theme_color' => 'blue',
            'technologies' => ['Laravel', 'API Development', 'MySQL', 'AWS'],
        ]);

        Experience::create([
            'company' => 'Codegraphi Technology Pvt. Ltd.',
            'role' => 'Web Developer',
            'type' => 'Internship',
            'location' => 'Noida',
            'start_date' => 'Aug 2023',
            'end_date' => 'Oct 2023',
            'description' => 'Developed responsive frontend interfaces and integrated robust backend solutions.',
            'logo_path' => 'images/codegraphi-logo.jpg',
            'theme_color' => 'purple',
            'technologies' => ['HTML/CSS', 'JavaScript', 'PHP', 'Tailwind'],
        ]);
        
        Project::create([
            'title' => 'E-Commerce Platform',
            'description' => 'A full-stack e-commerce platform built with Laravel and React.',
            'tags' => ['Laravel', 'React', 'MySQL'],
            'demo_link' => '#',
            'github_link' => '#',
            'image_path' => null,
        ]);
    }
}
