<x-app-layout>
    <x-dashboard-card>
        <div class="row ">

            @foreach($jobs as $job)
            <x-job-card :job="$job" />
            @endforeach


            <div class="col-lg-12 d-flex justify-content-center">
                <div class="pagination-area">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled"><a
                                    class="page-link"
                                    href="#"
                                    tabindex="-1"
                                ></a></li>
                            <li
                                class="page-item active"
                                aria-current="page"
                            ><a
                                    class="page-link"
                                    href="#"
                                >01</a></li>
                            <li class="page-item"><a
                                    class="page-link"
                                    href="#"
                                >02</a></li>
                            <li class="page-item"><a
                                    class="page-link"
                                    href="#"
                                >03</a></li>
                            <li class="page-item"><a
                                    class="page-link"
                                    href="#"
                                ></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </x-dashboard-card>
</x-app-layout>
