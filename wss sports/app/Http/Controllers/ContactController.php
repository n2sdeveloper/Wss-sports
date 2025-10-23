<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Validate input
            $validated = $request->validate([
                'name' => 'required|string|max:45',
                'email' => 'required|email',
                'subject' => 'required|string|max:45',
                'message' => 'required|string|max:455',
            ]);

            // Save to database
            $contact = Contact::create($validated);
            Log::info('Contact form submitted successfully.', ['contact_id' => $contact->id, 'email' => $contact->email]);

            // Send email
            Mail::to('agracea22@gmail.com')->send(new ContactMail($validated));
            Log::info('Contact form email sent successfully.', ['email' => $validated['email']]);

            // Redirect to route named 'contact-us'
            return redirect('contact-us')->with('message', 'Your form submitted successfully');

        } catch (\Exception $e) {
            // Log any errors
            Log::error('Error submitting contact form: '.$e->getMessage(), [
                'request' => $request->all()
            ]);

            return redirect('contact-us')->with('error', 'Form Submision got failed');
        }
    }




}
