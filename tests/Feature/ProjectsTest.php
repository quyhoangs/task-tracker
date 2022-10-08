<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Project;

class ProjectsTest extends TestCase
{
    use WithFaker,RefreshDatabase;

    /** @test */
    public function test_a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling(); //không Xử lý Ngoại lệ để test

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

    /** @test */
    public function test_a_project_requires_a_title()
    {
        //Tạo các thuộc tính với factory, field title rỗng và không lưu vào db
        $attributes= Project::factory()->raw(['title'=>'']); //raw() trả về mảng || make() trả về 1 object || create() trả về object và save db

        //Gửi 1 yêu cầu post để lưu vào db, trường hợp nếu title chưa validate ở Controller sẻ báo lỗi
        $this->post('/projects', $attributes)->assertSessionHasErrors('title');
    }

    /** @test */
    public function test_a_project_requires_a_description()
    {
        $attributes=Project::factory()->raw(['description'=>'']);

        $this->post('/projects', $attributes)->assertSessionHasErrors('description');
    }
}
