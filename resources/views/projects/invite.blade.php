<div class="card flex flex-col mt-6">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-accent-light pl-4">
        Invite a User
    </h3>

    <footer>
        <form method="POST" action="{{ $project->path() . '/invitations' }}" class="text-right">
            @csrf
            <input type="email" name="email" class="bg-card text-default selection:border-muted border rounded w-full py-2 px-3" placeholder="Email address">
            <button type="submit" class="button">Invite</button>
            <x-form.error :bag="'invitations'"/>
        </form>
    </footer>
</div>
