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
            'telefoon' => 'required',
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

        switch ($data['budget']) {
            case '0':
                $data['budget'] = '€ 5.000 - € 10.000';
                break;
            case '1':
                $data['budget'] = '€ 10.000 - € 15.000';
                break;
            case '2':
                $data['budget'] = '€ 15.000+';
                break;
            case '3':
                $data['budget'] = 'Nog onbekend';
                break;
            default:
                $data['budget'] = 'Budget value is invalid!';
                break;
        }

        Mail::to('forward@nwave.nl')->send(new OfferteMail($data));

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
