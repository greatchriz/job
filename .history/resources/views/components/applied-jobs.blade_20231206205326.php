@props(['jobApplication' => ''])

<tr>
    <td data-label="Job Title">
        <div class="company-info">
            <div class="logo">
                <img
                    src="{{ $jobApplication->job->company->logo }}"
                    alt
                >
            </div>
            <div class="company-details">
                <div class="top">
                    <h6><a href="job-details.html">Senior
                            UI/UX
                            Designer</a></h6>
                    <span><img
                            src="assets/images/icon/calender2.svg"
                            alt
                        > 1
                        days ago</span>
                </div>
                <ul>
                    <li><img
                            src="assets/images/icon/location.svg"
                            alt
                        >New-York,
                        USA</li>
                    <li>
                        <img
                            src="assets/images/icon/arrow2.svg"
                            alt
                        >
                        <p><span class="title">Salary:</span>
                            $60-$90
                            / <span class="time">Per
                                Hour</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </td>
    <td data-label="Apply Job">03/07/2022</td>
    <td data-label="Company"><a
            class="view-btn"
            href="company-details.html"
        >Tech.Bath
            Com... </a></td>
    <td data-label="Status"><button class="eg-btn purple-btn">Viewed</button></td>
</tr>
