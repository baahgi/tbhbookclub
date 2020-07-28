<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
       return view('pages.index');
    }

    public function About()
    {
        return view('pages.about');
    }

    public function ContactUs()
    {
        return view('pages.contact');
    }

    public function Projects()
    {
        return view('pages.projects');
    }

    public function Team()
    {
        return view('pages.team');
    }

    public function EventsAndGallary()
    {
        return view('pages.events-and-gallary');
    }

    public function Careers()
    {
        return view('pages.careers');
    }

    public function Clubs()
    {
        return view('pages.clubs');
    }

    public function TBHAcademy()
    {
        return view('pages.tbh-academy');
    }

    public function PartnerWithUs()
    {
        return view('pages.partner');
    }

}
