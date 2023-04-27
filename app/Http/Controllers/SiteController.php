<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function faq()
    {
        return view('site.faq');
    }

    public function blogs()
    {
        return view('site.blogs');
    }

    public function blog($id)
    {
        return view('site.blog');
    }

    public function plan($id)
    {
        return view('site.plan');
    }

    public function courses()
    {
        return view('site.courses');
    }

    public function login()
    {
        return view('site.login');
    }

    public function register()
    {
        return view('site.register');
    }

    public function forget_password()
    {
        return view('site.forget-password');
    }

    public function subscribe_course()
    {
        return view('site.subscribe-course');
    }

    public function profile()
    {
        return view('site.profile');
    }

    public function bot_transactions()
    {
        return view('site.bot-transactions');
    }

    public function notification()
    {
        return view('site.notification');
    }

    public function course($id)
    {
        return view('site.course');
    }

    public function create_bot()
    {
        return view('site.create-bot');
    }

    public function posts()
    {
        return view('site.posts');
    }

    public function clients()
    {
        return view('site.clients');
    }

    public function code_bot()
    {
        return view('site.code-bot');
    }

    public function recorded_course()
    {
        return view('site.recorded-course');
    }

    public function bot_terms()
    {
        return view('site.bot-terms');
    }

    public function privacy_policy()
    {
        return view('site.privacy-policy');
    }

    public function crypto_currencies()
    {
        return view('site.crypto-currencies');
    }

    public function plans()
    {
        return view('site.plans');
    }
}
