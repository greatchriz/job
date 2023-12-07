<x-app-layout>
    <x-dashboard-card>

                <div class="table-wrapper">
                    <h5 class="title">Current Applied Jobs:</h5>
                    <div class="scroll-table">
                        <table class="eg-table table category-table mb-0">
                            <thead>
                                <tr>
                                    <th>Job Tittle</th>
                                    <th>Apply Date</th>
                                    <th>Company</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobApplications as $jobApplication)
                                    <x-applied-jobs :jobApplication="$jobApplication" />
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

    </x-dashboard-card>
</x-app-layout>
