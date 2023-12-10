
<div
    class="tab-content"
    id="myTabContent"
>
    {{-- Personal information --}}
    {{-- Passport information --}}
    {{-- Travel information --}}
    {{-- Employment information --}}
    {{-- Educational background --}}
    {{-- Financial information --}}
    {{-- Additional information --}}

    <div
        class="tab-pane fade show active"
        id="personal"
        role="tabpanel"
        aria-labelledby="personal-tab"
    >
        {{ $personal }}
    </div>



    <div
        class="tab-pane fade"
        id="travel"
        role="tabpanel"
        aria-labelledby="travel-tab"
    >
        {{ $travel }}

    </div>

    {{-- Employment information --}}

    <div
        class="tab-pane fade"
        id="employment"
        role="tabpanel"
        aria-labelledby="employment-tab"
    >
        {{ $employment }}
    </div>

    {{-- Educational background --}}

    <div
        class="tab-pane fade"
        id="education"
        role="tabpanel"
        aria-labelledby="education-tab"
    >
        {{ $education }}
    </div>

    {{-- Financial information --}}

    <div
        class="tab-pane fade"
        id="financial"
        role="tabpanel"
        aria-labelledby="financial-tab"
    >
        {{ $financial }}
    </div>

    {{-- Additional information --}}

    <div
        class="tab-pane fade"
        id="additional"
        role="tabpanel"
        aria-labelledby="additional-tab"
    >
        {{ $additional }}
    </div>



<ul
    class="nav nav-tabs"
    id="myTab"
    role="tablist"
>
            {{-- Personal information
            // Passport information
            // Travel information
            // Employment information
            // Educational background
            // Financial information
            // Additional information
            // Other --}}
    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link active"
            id="personal-tab"
            data-bs-toggle="tab"
            data-bs-target="#personal"
            type="button"
            role="tab"
            aria-controls="personal"
            aria-selected="true"
        ><span>
        </span>
            Personal information
        </button>
    </li>




    <li class="nav-item" role="presentation">
        <button
            class="nav-link"
            id="travel-tab"
            data-bs-toggle="tab"
            data-bs-target="#travel"
            type="button"
            role="tab"
            aria-controls="travel"
            aria-selected="false"
        ><span>
        </span>
            Travel information
        </button>
    </li>

    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="employment-tab"
            data-bs-toggle="tab"
            data-bs-target="#employment"
            type="button"
            role="tab"
            aria-controls="employment"
            aria-selected="false"
        ><span>
        </span>
            Employment information
        </button>
    </li>


    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="education-tab"
            data-bs-toggle="tab"
            data-bs-target="#education"
            type="button"
            role="tab"
            aria-controls="education"
            aria-selected="false"
        ><span>
        </span>
            Educational background
        </button>
    </li>


    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="financial-tab"
            data-bs-toggle="tab"
            data-bs-target="#financial"
            type="button"
            role="tab"
            aria-controls="financial"
            aria-selected="false"
        ><span>
        </span>
            Financial information
        </button>
    </li>


    <li
        class="nav-item"
        role="presentation"
    >
        <button
            class="nav-link"
            id="additional-tab"
            data-bs-toggle="tab"
            data-bs-target="#additional"
            type="button"
            role="tab"
            aria-controls="additional"
            aria-selected="false"
        ><span>
        </span>
            Additional information
        </button>
    </li>
</ul>


</div>


