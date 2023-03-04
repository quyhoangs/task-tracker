<div class="card flex flex-col mt-3" >
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-400 pl-4">
        Invite a User
    </h3>

    <footer>
        <form method="POST" action="{{ $project->path() . '/invitations' }}" class="text-right">
            @csrf
            <input type="email" name="email" class="border border-grey rounded w-full py-2 px-3 mb-3" placeholder="Email address">
            <button type="submit" class="button">Invite</button>
            <x-form.error :bag="'invitations'"/>
        </form>
    </footer>
</div>
