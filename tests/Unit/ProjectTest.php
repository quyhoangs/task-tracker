<?php

namespace Tests\Unit;

use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
   public function test_it_has_a_path()
   {
      $project = Project::factory()->create();

      //Khẳng định rằng 2 đường dẫn giống nhau
      $this->assertEquals('/projects/' . $project->id, $project->path());
   }
}
