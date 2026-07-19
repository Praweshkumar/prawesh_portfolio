<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'HTML5', 'icon' => 'fa-brands fa-html5', 'color' => 'text-[#F16529]'],
            ['name' => 'CSS3', 'icon' => 'fa-brands fa-css3-alt', 'color' => 'text-[#2965F1]'],
            ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js', 'color' => 'text-[#F7DF1E]'],
            ['name' => 'TypeScript', 'icon' => 'fa-solid fa-code', 'color' => 'text-[#3178C6]'],
        
            ['name' => 'React.js', 'icon' => 'fa-brands fa-react', 'color' => 'text-[#61DAFB]'],
            ['name' => 'Next.js', 'icon' => 'fa-solid fa-n', 'color' => 'text-gray-900 dark:text-white'],
            ['name' => 'Redux', 'icon' => 'fa-solid fa-layer-group', 'color' => 'text-[#764ABC]'],
            ['name' => 'React Native', 'icon' => 'fa-brands fa-react', 'color' => 'text-[#61DAFB]'],
        
            ['name' => 'Node.js', 'icon' => 'fa-brands fa-node-js', 'color' => 'text-[#68A063]'],
            ['name' => 'Express.js', 'icon' => 'fa-solid fa-server', 'color' => 'text-gray-700 dark:text-gray-300'],
        
            ['name' => 'PHP', 'icon' => 'fa-brands fa-php', 'color' => 'text-[#777BB4]'],
            ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel', 'color' => 'text-[#FF2D20]'],
        
            ['name' => 'MongoDB', 'icon' => 'fa-solid fa-leaf', 'color' => 'text-[#47A248]'],
            ['name' => 'MySQL', 'icon' => 'fa-solid fa-database', 'color' => 'text-[#00758F]'],
        
            ['name' => 'Tailwind CSS', 'icon' => 'fa-solid fa-wind', 'color' => 'text-[#38B2AC]'],
            ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap', 'color' => 'text-[#7952B3]'],
        
            ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt', 'color' => 'text-[#F05032]'],
            ['name' => 'GitHub', 'icon' => 'fa-brands fa-github', 'color' => 'text-gray-900 dark:text-white'],
        
            ['name' => 'AWS', 'icon' => 'fa-brands fa-aws', 'color' => 'text-[#FF9900]'],
            ['name' => 'Postman', 'icon' => 'fa-solid fa-paper-plane', 'color' => 'text-[#FF6C37]'],
            ['name' => 'VS Code', 'icon' => 'fa-solid fa-code', 'color' => 'text-[#007ACC]'],
            ['name' => 'Figma', 'icon' => 'fa-brands fa-figma', 'color' => 'text-[#F24E1E]'],
        ];
        
        foreach ($skills as $skill) {
            \App\Models\Skill::updateOrCreate(['name' => $skill['name']], $skill);
        }
    }
}
