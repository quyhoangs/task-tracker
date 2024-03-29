<?php

namespace App;

use App\Models\Activity;
use App\Models\Project;
use Illuminate\Support\Arr;

trait RecordsActivity
{
  /**
   * The project's old attributes.
   *
   * @var array
   */
  public $oldAttributes = [];
  /**
   * Record activity for a project.
   *
   * @param string $description
   */
  public function recordActivity($description)
  {
    $this->activity()->create([
      'user_id' =>  ($this->project ?? $this)->owner->id,
      'description' => $description,
      'changes' => $this->activityChanges(),
      'project_id' => class_basename($this) === 'Project' ? $this->id : $this->project_id,
    ]);
  }

  /**
   * The activity feed for the project.
   *
   * @return \Illuminate\Database\Eloquent\Relations\MorphMany
   */
  public function activity()
  {

    if (get_class($this) === Project::class) {
      return $this->hasMany(Activity::class)->latest();
    }

    return $this->morphMany(Activity::class, 'subject')->latest();
  }

  /**
   * Fetch the changes to the model.
   *
   * @return array|null
   */
  protected function activityChanges()
  {
    //wasChanged kiểm tra xem có thay đổi data ở Model hiện tại hay không (nếu có thay đổi thì trả về true)
    // logic cũ sẻ kiểm tra $description === 'updated_project' thay vì $this->wasChanged()
    if ($this->wasChanged()) {
      return [
        'before' => Arr::except(array_diff($this->oldAttributes, $this->getAttributes()), 'updated_at'),
        'after' => Arr::except($this->getChanges(), 'updated_at'),
      ];
    }
  }
}
