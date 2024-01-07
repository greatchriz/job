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

        $html = file_get_contents(public_path('jobs-linkedin.html'));
        $jobs = $this->extractJobData($html);

        foreach ($jobs as $job) {

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
            $jobLocation = $xpath->evaluate('string(.//span[@class="job-location-oo"])', $div);


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
}
