<?php


namespace Stsewa\Contact;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ContactController
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('contact::contact');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function sendMail(Request $request)
    {
        Contact::create($request->all());

        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }
}
