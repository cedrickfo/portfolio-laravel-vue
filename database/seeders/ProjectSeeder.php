<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Tag;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $html = Tag::create([
        'name' => 'HTML',
        'slug' => 'html',
    ]);

    $css = Tag::create([
        'name' => 'CSS',
        'slug' => 'css',
    ]);

    $php = Tag::create([
        'name' => 'PHP',
        'slug' => 'php',
    ]);

    $laravel = Tag::create([
        'name' => 'Laravel',
        'slug' => 'laravel',
    ]);

    $blade = Tag::create([
        'name' => 'Blade',
        'slug' => 'blade',
    ]);


$photofocus = Project::create([
    'title' => 'PhotoFocus',
    'slug' => 'photofocus',
    'summary' => 'Un site vitrine consacré à la photographie, réalisé en HTML et CSS.',
    'content' => '<p>PhotoFocus est un projet de site vitrine réalisé dans le cadre de ma formation en développement web.</p>',
    'cover_path' => 'images/photofocus.png',
    'demo_url' => 'https://photofocus-onepage.vercel.app',
    'repo_url' => 'https://github.com/cedrickfo/photofocus-onepage',
    'published_at' => now(),
    'position' => 1,
]);

$photofocus->tags()->attach([$html->id, $css->id]);

$worknest = Project::create([
    'title' => 'WorkNest',
    'slug' => 'worknest',
    'summary' => 'Un site vitrine présentant un espace de travail moderne, réalisé en HTML et CSS.',
    'content' => '<p>WorkNest est un projet de site vitrine réalisé dans le cadre de ma formation en développement web.</p>',
    'cover_path' => 'images/worknest.png',
    'demo_url' => 'https://worknest-onepage.vercel.app/',
    'repo_url' => 'https://github.com/cedrickfo/worknest-onepage',
    'published_at' => now(),
    'position' => 2,
]);

$worknest->tags()->attach([$html->id, $css->id]);

$perduDeVue = Project::create([
    'title' => 'Perdu de vue',
    'slug' => 'perdu-de-vue',
    'summary' => 'Une application Laravel de gestion des objets perdus et retrouvés à la gare de Wavre.',
    'content' => '<p>Application développée dans le cadre de ma formation. Elle permet de consulter, ajouter et gérer des objets perdus, avec un système de lieux, de couleurs et de restitution.</p>',
    'cover_path' => 'images/perdu-de-vue.png',
    'demo_url' => 'https://perdu-de-vue.onrender.com/objets',
    'repo_url' => 'https://github.com/cedrickfo/perdu-de-vue',
    'published_at' => now(),
    'position' => 3,
]);

$perduDeVue->tags()->attach([
    $php->id,
    $laravel->id,
    $blade->id,
]);

}
}

