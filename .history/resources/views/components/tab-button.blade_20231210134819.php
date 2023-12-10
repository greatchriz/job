@props(['active', 'propValue'])

<li class="nav-item" role="presentation">
    <button class="nav-link ${active ? 'active' : ''}"
        id="home-tab" data-bs-toggle="tab"
        data-bs-target="#home" type="button"
        role="tab" aria-controls="home"
        aria-selected="true"><span></span>Basic
        Information:</button>
</li>
