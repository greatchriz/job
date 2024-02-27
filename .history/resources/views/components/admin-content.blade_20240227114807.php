@props(['users' => []])
<div class="row">
    <!-- Job Block -->
    @forelse ($users as $user)

    {{ $slot }}

    @empty
    <div class="message-box error">
        <p>You have not created any jobs</p>
    </div>

    <div class="col-12" style="display: flex; justify-content: center">
        <a href="{{ route('admin.jobs.create') }}" class="theme-btn btn-style-four large">Add Job</a>
    </div>

    @endforelse

</div>
