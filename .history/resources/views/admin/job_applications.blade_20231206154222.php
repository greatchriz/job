<x-app-layout>
    <x-dashboard-card>
        <div class="col-lg-9">
            <div class="dashboard-inner">
                <div class="author-area">
                    <div class="author-img">
                        <img
                            src="assets/images/bg/author1.png"
                            alt
                        >
                    </div>
                    <div class="author-content">
                        <span>Hello, I’m</span>
                        <h4>JACOLINE Frankly</h4>
                    </div>
                </div>
                <div class="counter-area">
                    <div class="row g-lg-4 g-md-5 gy-5 justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-single">
                                <div class="counter-icon">
                                    <img
                                        src="assets/images/icon/tt-applied.svg"
                                        alt="image"
                                    >
                                </div>
                                <div class="coundown">
                                    <p>Total Applied</p>
                                    <div class="d-flex align-items-center">
                                        <h3 class="odometer">
                                            250
                                        </h3>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-single two">
                                <div class="counter-icon">
                                    <img
                                        src="assets/images/icon/save-job.svg"
                                        alt="image"
                                    >
                                </div>
                                <div class="coundown">
                                    <p>Saved Jobs</p>
                                    <div class="d-flex align-items-center">
                                        <h3 class="odometer">
                                            150
                                        </h3>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-single three">
                                <div class="counter-icon">
                                    <img
                                        src="assets/images/icon/massage.svg"
                                        alt="image"
                                    >
                                </div>
                                <div class="coundown">
                                    <p>Message</p>
                                    <div class="d-flex align-items-center">
                                        <h3 class="odometer">
                                            120
                                        </h3>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-single four">
                                <div class="counter-icon">
                                    <img
                                        src="assets/images/icon/cv-review.svg"
                                        alt="image"
                                    >
                                </div>
                                <div class="coundown">
                                    <p>Review CV</p>
                                    <div class="d-flex align-items-center">
                                        <h3 class="odometer">
                                            500
                                        </h3>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <x-applied-jobs />
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-dashboard-card>
</x-app-layout>
