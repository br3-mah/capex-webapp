<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProofOfPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        // Validate the request data
        $request->validate([
            'user_id' => 'required|exists:users,id',  // Ensure the user exists in the database
            'amount' => 'required',  // Validate the amount as a numeric value
            'method' => 'required|string',   // Validate the payment method as a string
            'proofs.*' => 'required|mimes:pdf,jpg,jpeg,png|max:2048', // Validate file types and max size per document
            'payment_details' => 'required|string',  // Ensure payment details are provided as a string
        ]);

        // Initialize array to hold file paths of uploaded documents
        $uploadedFiles = [];
        
        // Check if there are files to upload
        if($request->hasfile('proofs')) {
            foreach($request->file('proofs') as $file) {
                // Save file to storage and get the path
                $path = $file->store('payment_proofs', 'public');  // Store in 'public/payment_proofs' directory
                $uploadedFiles[] = $path;  // Append the file path to the array
            }
        }

        // Insert the payment proof data into the database using DB::table
        DB::table('payment_proofs')->insert([
            'user_id' => $request->user_id,
            'loan_id' => $request->loan_id,
            'amount' => $request->amount,
            'method' => $request->method,
            'payment_details' => $request->payment_details,
            'document_paths' => json_encode($uploadedFiles),  // Store file paths as JSON
            'created_at' => now(),  // Insert current timestamp
            'updated_at' => now(),  // Insert current timestamp
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Proof of payment uploaded successfully. Please wait for approval.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
