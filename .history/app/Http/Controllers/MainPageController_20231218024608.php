<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use DOMDocument;
use DOMXPath;

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
        //get the jobs array from the extractJobData function
        $html = file_get_contents(public_path('jobs.html'));
        $jobs = $this->extractJobData($html);
        return view('main-pages.job-listing',['jobs' => $jobs]);
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
        $divs = $xpath->query('//div[contains(@class, "section-jobs-item")]');

        // Initialize an array to store the job data
        $jobs = [];

        // Loop through each div element and extract the job data
        foreach ($divs as $div) {
            // Extract the job data from the div element

            // Example code to extract the company logo URL
            // $logo = $xpath->evaluate('string(.//div[@class="card-job-avatar"]/img/@data-src)', $div);

            $logo = "https://www.jobsinnetwork.com/images/default.png";

            //card-job-body-title
            // Example code to extract the job title
            // i want to clear all whitespaces

            $title = $xpath->evaluate('string(.//h2[@class="card-job-body-title"])', $div);

            // Example code to extract the job description
            // $description = $xpath->evaluate('string(.//p)', $div);


            $description = $xpath->evaluate('string(.//p[@class="card-job-body-description"])', $div);

            $companyName = $xpath->evaluate('string(.//span[@class="card-job-name"])', $div);
            $jobLocation = $xpath->evaluate('string(.//span[@class="card-job-flag"])', $div);

            // Create an array to store the job data
            $jobData = [
                'logo' => $logo,
                'title' => $title,
                'description' => $description,
                'companyName' => $companyName,
                'jobLocation' => $jobLocation

                // Add more fields as needed
            ];

            // Add the job data to the array
            $jobs[] = $jobData;
        }

        // Return the array of job data
        return $jobs;
    }

}
