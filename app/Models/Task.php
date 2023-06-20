<?php

namespace App\Models;

use App\RecordsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    
    use HasFactory,RecordsActivity,SoftDeletes;

    /*1. protected $guarded = []; means that no field is guarded
      2. protected $guarded = ['*']; means that all field are guarded
      3. protected $guarded = ['field1', 'field2']; means that field1 and field2 are guarded */
    protected $guarded = [];

    //This will tell Laravel to update the updated_at field of the project when a task is added, edited or deleted.
    protected $touches  = ['project'];

    //set the completed attribute to be cast as a boolean
    //This will allow us to use $task->completed instead of $task->completed == 1
    //Khai báo này để khi lấy dữ liệu từ database, Laravel sẽ tự động chuyển đổi dữ liệu sang kiểu boolean
    //Nếu không khai báo, khi lấy dữ liệu từ database, Laravel sẽ trả về dữ liệu kiểu integer (0 hoặc 1) cho trường completed
    protected $casts = ['completed' => 'boolean'];

    /**
     * Mark the task as complete.
     */
    public function complete(){
        $this->update(['completed' => true]);
        $this->recordActivity('completed_task');
    }

    /**
     * Mark the task as incomplete.
     */
    public function incomplete(){
        $this->update(['completed' => false]);
        $this->project->recordActivity('incompleted_task');
    }

    //1 task chỉ thuộc về 1 project
    //Model Task
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function path()
    {
        return '/projects/' . $this->project->id . '/tasks/' . $this->id;
    }

    //1 task chỉ có thể thuộc về 1 trạng thái nhất định
    public function status()
    {
        return $this->belongsTo(ProjectStatus::class,'status_id');
    }
}
