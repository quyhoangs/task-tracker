<div class="card mt-3">
    <ul class="text-xs list-reset">

        @foreach ($project->activity as $activity)
            <li class="{{ $loop->last ? '' : 'pb-2' }}">
                @if(View::exists("projects.activity.{$activity->description}"))
                    @include ("projects.activity.{$activity->description}")
                @else
                    {{ $activity->description }}
                @endif
                <span class="text-muted">{{ $activity->created_at->diffForHumans(null,null,true) }}</span>
            </li>
        @endforeach

    </ul>
</div>
