<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Artificial Intelligence (AI) & Machine Learning (ML)',
                'slug' => 'artificial-intelligence-ai-machine-learning-ml',
                'description' => 'Latest developments in AI, machine learning tools, ethical implications, and automation trends'
            ],
            [
                'name' => 'Web Development & Design',
                'slug' => 'web-development-design',
                'description' => 'Programming languages, frameworks, UI/UX design principles, and modern web technologies'
            ],
            [
                'name' => 'Business & Entrepreneurship',
                'slug' => 'business-entrepreneurship',
                'description' => 'Startup funding, business strategies, marketing, leadership, and growth tactics'
            ],
            [
                'name' => 'Cybersecurity & Privacy',
                'slug' => 'cybersecurity-privacy',
                'description' => 'Data protection, online privacy, threat analysis, and secure business practices'
            ],
            [
                'name' => 'Cloud Computing & Big Data',
                'slug' => 'cloud-computing-big-data',
                'description' => 'Cloud services, data analytics, infrastructure, and modern data management'
            ],
            [
                'name' => 'Digital Marketing',
                'slug' => 'digital-marketing',
                'description' => 'SEO, content marketing, social media strategy, email campaigns, and paid advertising'
            ],
            [
                'name' => 'Productivity & Future of Work',
                'slug' => 'productivity-future-of-work',
                'description' => 'Remote work tools, workplace automation, productivity hacks, and work-life balance'
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
