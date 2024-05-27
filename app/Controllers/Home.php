<?php

namespace App\Controllers;
use App\Models\cvmodel;


class Home extends BaseController
{
    protected $datadiri;
    public function __construct() {
        $this->datadiri = new cvmodel();
    }


    public function index(): string
    {
        $data = [
            'title' => 'CV',
        ];

        return view('body', $data);
    }


    public function about()
    {
        $selfdata = $this->datadiri->findAll();
        $data = [
            'title' => 'About Me',
            'selfdata' => $selfdata
        ];


        return view('about', $data);
    }

    public function resume()
    {
        $data = [
            'title' => 'Resume',
        ]; 

        return view('resume', $data);
    }

    public function portfolio()
    {
        $data = [
            'title' => 'Portfolio',
        ]; 

        return view('portfolio', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
        ]; 

        return view('contact', $data);
    }
}
