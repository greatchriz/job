<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class MainPageController extends Controller
{

    // Home
    // About Us
    // Services
    // Terms & Conditions
    // Privacy Policy
    // Blog
    // Contact Us

    //home

    public function home()
    {
        return view('main-pages.home');
    }

    //about-us

    public function aboutUs()
    {
        return view('main-pages.about-us');
    }

    //services

    public function services()
    {
        return view('main-pages.services');
    }

    //terms

    public function terms()
    {
        return view('main-pages.terms');
    }

    //privacy-policy

    public function privacyPolicy()
    {
        return view('main-pages.privacy-policy');
    }

    //blog

    public function blog()
    {
        return view('main-pages.blog');
    }

    //contact-us

    public function contactUs()
    {
        return view('main-pages.contact-us');
    }

    //jobListing
    public function jobListing()
    {
        // get all jobs and sort them by created_at and paginate them
        $jobs = Job::orderBy('created_at', 'desc')->paginate(80);
        $totalJobs = Job::count();
        return view('main-pages.job-listing', [
            'jobs' => $jobs,
            'totalJobs' => $totalJobs
        ]);
    }

    //jobs-details
    public function jobsDetails(){
        $html = file_get_contents('public/jobs.html');
        $jobData = $this->extractJobData($html);
    }

    public function extractJobData($html)
    {
        // Create a new DOMDocument object
        $dom = new DOMDocument();

        // Load the HTML content into the DOMDocument
        $dom->loadHTML($html);

        // Create an XPath object to query the DOMDocument
        $xpath = new DOMXPath($dom);

        // Query the DOMDocument to get all div elements with the class "section-jobs-item"
        $divs = $xpath->query('//div[contains(@class, "section-jobs-item")]');

        // Initialize an array to store the job data
        $jobs = [];

        // Loop through each div element and extract the job data
        foreach ($divs as $div) {
            // Extract the job data from the div element

            // Example code to extract the company logo URL
            $logo = $xpath->evaluate('string(.//div[@class="logo"]/img/@src)', $div);

            // Example code to extract the job title
            $title = $xpath->evaluate('string(.//h6/a)', $div);

            // Example code to extract the job description
            $description = $xpath->evaluate('string(.//p)', $div);

            // Create an array to store the job data
            $jobData = [
                'logo' => $logo,
                'title' => $title,
                'description' => $description,
                // Add more fields as needed
            ];

            // Add the job data to the array
            $jobs[] = $jobData;
        }

        // Return the array of job data
        return $jobs;
    }

}
