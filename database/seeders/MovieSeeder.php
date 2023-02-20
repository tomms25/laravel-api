<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Tag;

class MovieSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Movie::factory()->count(30)->make()->each(function ($m) {

      // FK
      $genre = Genre::inRandomOrder()->first();
      $m->genre()->associate($genre);

      $m->save();

      // NaM
      $tags = Tag::inRandomOrder()->limit(rand(1, 5))->get();
      $m->tags()->attach($tags);
    });
  }
}
