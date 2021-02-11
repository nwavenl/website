<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\OfferteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OfferteController extends Controller
{
    public function __construct() {

    }

    /**
     * Validate contact form input
     *
     * @param $input
     */
    private function validateOfferteEmail($input) {
        //Checking by validation rules
        $validated = $input->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'email' => 'required|email',
            'telefoon' => 'required|phone',
            'bericht' => 'required',
            'type' => 'required'
        ]);
    }

    /**
     * Contact form send function
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sendMail(Request $request) {
        // Checking the input by validator rules
        $validatedInput = $this->validateOfferteEmail($request);

        $data = [
            'fname' => $request->voornaam,
            'lname' => $request->achternaam,
            'email' => $request->email,
            'phone' => $request->telefoon,
            'company' => $request->company,
            'budget' => $request->budget,
            'message' => $request->bericht,
            'type' => $request->type,
        ];

        Mail::to('contact@nwave.nl')->send(new OfferteMail($data));

        // Redirect after sending the email.
        if ($data['type'] === 'webshop') {
            return redirect(route('webshop'));
        } elseif ($data['type'] === 'website') {
            return redirect(route('website'));
        } elseif($data['type'] === 'maintenance') {
            return redirect(route('maintenance'));
        } else {
            return redirect(route('home'));
        }
    }
}
