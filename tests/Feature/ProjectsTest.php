<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker,RefreshDatabase;

    /** @test */
    public function test_a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();
        $attributes=[
            'title'=>$this->faker->sentence,
            'description'=>$this->faker->paragraph
        ];
        //Kiểm tra có thể gửi 1 yêu cầu post tới url localhost/project và insert các cột vào db không (tạo Modal Project trước khi test khai báo route)
        $this->post('/projects', $attributes)->assertRedirect('/projects');

        //khẳng định rằng cơ sở dữ liệu có một project bao gồm các thuộc tính là $attributes
        $this->assertDatabaseHas('projects', $attributes);

        // //Khẳng định có thể gửi 1 yêu cầu get và thấy các thuộc tính đã tạo trên
        $this->get('/projects')->assertSee($attributes['title']);
    }
}
