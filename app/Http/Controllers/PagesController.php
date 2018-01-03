<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * GET /
     * @return View
     */
    public function home() {
        $data = [
            'page_title' => __('pages/home.page_title'),
            'page_desc' => __('pages/home.page_desc'),
        ];

        return view('pages.home', $data);
    }

    /**
     * GET /about
     * @return View
     */
    public function about() {
        $data = [
            'page_title' => __('pages/about.page_title'),
            'page_desc' => __('pages/about.page_desc'),
        ];

        return view('pages.about', $data);
    }

    /**
     * GET /contact
     * @return View
     */
    public function contact() {
        $data = [
            'page_title' => __('pages/contact.page_title'),
            'page_desc' => __('pages/contact.page_desc'),
        ];

        return view('pages.contact', $data);
    }

    /**
     * POST /contact
     *
     * @param SubmitContactFormRequest $request
     * @return View
     */
    public function postContact(SubmitContactFormRequest $request)
    {
        $input = $request->all();

        Mail::send(
            // html and plain text views
            ['emails.contact-form', 'emails.contact-form-plain'],
            ['input' => $input],
            function($message) use ($input)
            {
                $message->subject('Contact Form Message')
                    ->from('contact-form@example.com', 'Example Name')
                    ->replyTo($input['email'], $input['name'])
                    ->to(env('MAIL_TO_ADDRESS'));
            }
        );

        Session::flash('alert-success', __('pages/contact.form.success'));

        return back();
    }
}
