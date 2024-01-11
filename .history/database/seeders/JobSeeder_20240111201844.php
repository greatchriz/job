<?php

namespace Database\Seeders;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DOMDocument;
use DOMXPath;
use App\Models\Location;


class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            "job" => "ember-view jobs-search-results__list-item occludable-update p0 relative scaffold-layout__list-item",
            "logo" => "ivm-view-attr__img--centered EntityPhoto-square-4 evi-image lazy-image ember-view",
            "title" => "disabled ember-view job-card-container__link job-card-list__title",
            "company" => "job-card-container__primary-description",
            "location" => "job-card-container__metadata-item",
        ];

        $html = file_get_contents(public_path('jobs-linkedin.html'));
        $jobs = $this->extractJobData($html);
        $amsterdamJobs = $this->getAmsterdamJobs($classes);
        $montrealJobs = $this->getMontrealJobs($classes);
        $utretchJobs = $this->getUtretchJobs($classes);

        foreach ($jobs as $job) {

            Job::create($job);
        }

        foreach ($amsterdamJobs as $job) {

            Job::create($job);
        }

        foreach ($montrealJobs as $job) {

            Job::create($job);
        }

        foreach ($utretchJobs as $job) {

            Job::create($job);
        }
    }

    public function extractJobData($html)
    {
        // Create a new DOMDocument object
        $dom = new DOMDocument();

        // suppress warning messages g
        libxml_use_internal_errors(true);

        // Load the HTML content into the DOMDocument
        $dom->loadHTML($html);

        // restore error handling
        libxml_use_internal_errors(false);

        // Create an XPath object to query the DOMDocument
        $xpath = new DOMXPath($dom);

        // Query the DOMDocument to get all div elements with the class "section-jobs-item"
        $divs = $xpath->query('//li[contains(@class, "scaffold-layout__list-item")]');

        // Initialize an array to store the job data
        $jobs = [];

        // Loop through each div element and extract the job data
        foreach ($divs as $div) {
            // Extract the job data from the div element

            $logo = $xpath->evaluate('string(.//div[@class="company-logo-oo"]/img/@src)', $div);
            if (!$logo) {
                $logo = "https://www.jobsinnetwork.com/images/default.png";
            }
            //card-job-body-title
            // Example code to extract the job title
            // i want to clear all whitespaces

            $title = $xpath->evaluate('string(.//a[@class="job-title-oo"])', $div);

            // Example code to extract the job description
            // $description = $xpath->evaluate('string(.//p)', $div);


            $description = $xpath->evaluate('string(.//p[@class="card-job-body-description"])', $div);

            $companyName = $xpath->evaluate('string(.//span[@class="company-name-oo"])', $div);
            $jobLocation = $xpath->evaluate('string(.//li[@class="job-location-oo"])', $div);


            $startDate = Carbon::create(2023, 12, 7);
            $endDate = Carbon::create(now());

            $deadlineStartDate = Carbon::create(2023, 12, 18);
            $deadlineEndDate = Carbon::create(2024, 3, 21);


            $fromSalaryRange = rand(5000, 40000);
            $fromSalaryRange = ceil($fromSalaryRange / 5000) * 5000;
            if ($fromSalaryRange < 25000) {
                $fromSalaryRange = 25000;
            }

            $toSalaryRange = rand($fromSalaryRange + 5000, 100000);
            $toSalaryRange = floor($toSalaryRange / 5000) * 5000;

            $fromSalaryFormatted = number_format($fromSalaryRange / 1000, 0) . 'k';
            $toSalaryFormatted = number_format($toSalaryRange / 1000, 0) . 'k';

            $salary = "$fromSalaryFormatted - $toSalaryFormatted";

            // get location where name is Greece
            $location = Location::where('name', 'Rhodes')->first();

            // Create an array to store the job data
            $jobData = [
                'location_id' => $location->id,
                'companyLogo' => $logo,
                'title' => $title,
                // 'description' => $description,
                'companyName' => $companyName,
                'jobLocation' => $jobLocation,
                'deadline' => $deadlineStartDate->copy()->addDays(rand(0, $deadlineEndDate->diffInDays($deadlineStartDate))),

                'postedDate' => $startDate->copy()->addDays(rand(0, $endDate->diffInDays($startDate))),
                'salary' => $salary,

                // Add more fields as needed
            ];

            // Add the job data to the array
            $jobs[] = $jobData;
        }

        // Return the array of job data
        return $jobs;
    }


    public function getAmsterdamJobs($jobClasses)
    {
        $html = file_get_contents(public_path('jobs/amsterdam.html'));
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        libxml_use_internal_errors(false);

        $xpath = new DOMXPath($dom);

        $jobCardClass = $jobClasses['job'];

        $jobElements = $xpath->query("//li[contains(@class, '$jobCardClass')]");

        $amsterdamJobs = [];

        foreach ($jobElements as $jobElement) {
            $logo = $xpath->evaluate('string(.//div[@class="ivm-view-attr__img-wrapper display-flex"]/img/@src)', $jobElement);
            $logo = $logo ?: "https://www.jobsinnetwork.com/images/default.png";

            $title = $xpath->evaluate('string(.//a[@class="disabled ember-view job-card-container__link job-card-list__title"])', $jobElement);
            $description = $xpath->evaluate('string(.//p[@class="card-job-body-description"])', $jobElement);
            $companyName = $xpath->evaluate('string(.//span[@class="job-card-container__primary-description"])', $jobElement);
            $jobLocation = $xpath->evaluate('string(.//li[@class="job-card-container__metadata-item"])', $jobElement);

            $startDate = Carbon::create(2023, 12, 7);
            $endDate = Carbon::create(now());
            $deadlineStartDate = Carbon::create(2023, 12, 18);
            $deadlineEndDate = Carbon::create(2024, 3, 21);
            $fromSalaryRange = rand(5000, 40000);
            $fromSalaryRange = ceil($fromSalaryRange / 5000) * 5000;
            $fromSalaryRange = $fromSalaryRange < 25000 ? 25000 : $fromSalaryRange;
            $toSalaryRange = rand($fromSalaryRange + 5000, 100000);
            $toSalaryRange = floor($toSalaryRange / 5000) * 5000;
            $fromSalaryFormatted = number_format($fromSalaryRange / 1000, 0) . 'k';
            $toSalaryFormatted = number_format($toSalaryRange / 1000, 0) . 'k';
            $salary = "$fromSalaryFormatted - $toSalaryFormatted";
            $location = Location::where('name', 'Amsterdam')->first();

            $jobData = [
                'location_id' => $location->id,
                'companyLogo' => $logo,
                'title' => $title,
                'description' => $description,
                'companyName' => $companyName,
                'jobLocation' => $jobLocation,
                'deadline' => $deadlineStartDate->copy()->addDays(rand(0, $deadlineEndDate->diffInDays($deadlineStartDate))),
                'postedDate' => $startDate->copy()->addDays(rand(0, $endDate->diffInDays($startDate))),
                'salary' => $salary,
            ];

            $amsterdamJobs[] = $jobData;
        }

        return $amsterdamJobs;
    }

    // add method for Montreal
    // file location: public/jobs/amsterdam.html
    public function getMontrealJobs($jobClasses)
    {
        // Load the HTML content into the DOMDocument
        $html = file_get_contents(public_path('jobs/montreal.html'));
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        libxml_use_internal_errors(false);

        // Create an XPath object to query the DOMDocument
        $xpath = new DOMXPath($dom);

        // Retrieve the class names for the job card and job logo
        $jobCardClass = $jobClasses['job'];
        $jobLogoClass = $jobClasses['logo'];
        $jobTitleClass = $jobClasses['title'];
        $jobCompanyClass = $jobClasses['company'];
        $jobLocationClass = $jobClasses['location'];

        // Query the DOMDocument to get all li elements with the specified job card class
        $jobElements = $xpath->query("//li[contains(@class, '$jobCardClass')]");

        // Initialize an array to store the job data
        $montrealJobs = [];

        // Loop through each job element and extract the job data
        foreach ($jobElements as $jobElement) {
            // Extract the job data from the job element
            $logo = $xpath->evaluate('string(.//div[@class="ivm-view-attr__img-wrapper display-flex"]/img/@src)', $jobElement);
            $logo = $logo ?: "https://www.jobsinnetwork.com/images/default.png";

            $title = $xpath->evaluate('string(.//a[@class="disabled ember-view job-card-container__link job-card-list__title"])', $jobElement);
            $description = $xpath->evaluate('string(.//p[@class="card-job-body-description"])', $jobElement);
            $companyName = $xpath->evaluate('string(.//span[@class="job-card-container__primary-description"])', $jobElement);
            $jobLocation = $xpath->evaluate('string(.//li[@class="job-card-container__metadata-item"])', $jobElement);

            // Perform additional data processing and formatting
            $startDate = Carbon::create(2023, 12, 7);
            $endDate = Carbon::create(now());
            $deadlineStartDate = Carbon::create(2023, 12, 18);
            $deadlineEndDate = Carbon::create(2024, 3, 21);
            $fromSalaryRange = rand(5000, 40000);
            $fromSalaryRange = ceil($fromSalaryRange / 5000) * 5000;
            $fromSalaryRange = $fromSalaryRange < 25000 ? 25000 : $fromSalaryRange;
            $toSalaryRange = rand($fromSalaryRange + 5000, 100000);
            $toSalaryRange = floor($toSalaryRange / 5000) * 5000;
            $fromSalaryFormatted = number_format($fromSalaryRange / 1000, 0) . 'k';
            $toSalaryFormatted = number_format($toSalaryRange / 1000, 0) . 'k';
            $salary = "$fromSalaryFormatted - $toSalaryFormatted";
            $location = Location::where('name', 'Montreal')->first();

            $jobData = [
                'location_id' => $location->id,
                'companyLogo' => $logo,
                'title' => $title,
                'description' => $description,
                'companyName' => $companyName,
                'jobLocation' => $jobLocation,
                'deadline' => $deadlineStartDate->copy()->addDays(rand(0, $deadlineEndDate->diffInDays($deadlineStartDate))),
                'postedDate' => $startDate->copy()->addDays(rand(0, $endDate->diffInDays($startDate))),
                'salary' => $salary,
            ];

            // Add the job data to the Montreal jobs array
            $montrealJobs[] = $jobData;
        }

        return $montrealJobs;
    }

    //Utretch
    //public/jobs/utretch.html

    public function getUtretchJobs($jobClasses)
    {

        // Load the HTML content into the DOMDocument
        $html = file_get_contents(public_path('jobs/utretch.html'));
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        libxml_use_internal_errors(false);

        // Create an XPath object to query the DOMDocument
        // Create an XPath object to query the DOMDocument
        $xpath = new DOMXPath($dom);

        // Retrieve the class names for the job card and job logo
        $jobCardClass = $jobClasses['job'];
        $jobLogoClass = $jobClasses['logo'];
        $jobTitleClass = $jobClasses['title'];
        $jobCompanyClass = $jobClasses['company'];
        $jobLocationClass = $jobClasses['location'];

        // Query the DOMDocument to get all li elements with the specified job card class
        $jobElements = $xpath->query("//li[contains(@class, '$jobCardClass')]");

        // Initialize an array to store the job data
        $utretchJobs = [];

        // Loop through each job element and extract the job data
        foreach ($jobElements as $jobElement) {
            // Extract the job data from the job element
            $logo = $xpath->evaluate('string(.//div[@class="ivm-view-attr__img-wrapper display-flex"]/img/@src)', $jobElement);
            $logo = $logo ?: "https://www.jobsinnetwork.com/images/default.png";

            $title = $xpath->evaluate('string(.//a[@class="disabled ember-view job-card-container__link job-card-list__title"])', $jobElement);
            $description = $xpath->evaluate('string(.//p[@class="card-job-body-description"])', $jobElement);
            $companyName = $xpath->evaluate('string(.//span[@class="job-card-container__primary-description"])', $jobElement);
            $jobLocation = $xpath->evaluate('string(.//li[@class="job-card-container__metadata-item"])', $jobElement);

            // Perform additional data processing and formatting
            $startDate = Carbon::create(2023, 12, 7);
            $endDate = Carbon::create(now());
            $deadlineStartDate = Carbon::create(2023, 12, 18);
            $deadlineEndDate = Carbon::create(2024, 3, 21);
            $fromSalaryRange = rand(5000, 40000);
            $fromSalaryRange = ceil($fromSalaryRange / 5000) * 5000;
            $fromSalaryRange = $fromSalaryRange < 25000 ? 25000 : $fromSalaryRange;
            $toSalaryRange = rand($fromSalaryRange + 5000, 100000);
            $toSalaryRange = floor($toSalaryRange / 5000) * 5000;
            $fromSalaryFormatted = number_format($fromSalaryRange / 1000, 0) . 'k';
            $toSalaryFormatted = number_format($toSalaryRange / 1000, 0) . 'k';
            $salary = "$fromSalaryFormatted - $toSalaryFormatted";
            $location = Location::where('name', 'Utrecht')->first();

            $jobData = [
                'location_id' => $location->id,
                'companyLogo' => $logo,
                'title' => $title,
                'description' => $description,
                'companyName' => $companyName,
                'jobLocation' => $jobLocation,
                'deadline' => $deadlineStartDate->copy()->addDays(rand(0, $deadlineEndDate->diffInDays($deadlineStartDate))),
                'postedDate' => $startDate->copy()->addDays(rand(0, $endDate->diffInDays($startDate))),
                'salary' => $salary,
            ];

            // Add the job data to the Montreal jobs array
            $utretchJobs[] = $jobData;
        }

        return $utretchJobs;

    }



}


