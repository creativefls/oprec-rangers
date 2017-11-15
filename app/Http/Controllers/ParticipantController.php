<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Participant::orderBy('created_at', 'desc')->get();

        return view('admin.participant-table', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participant.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
            'university'        => 'required',
            'year'              => 'required',
            'primary_division'  => 'required',
            'primary_reason'    => 'required',
            'secondary_division'=> 'required',
            'secondary_reason'  => 'required',
            'file_cv'           => 'required|mimes:pdf',
            'portfolio_link'    => 'url',
            'email'             => 'required|unique:participants'
        ]);

        $cvFileName = str_replace(" ", "_", $request->name) . '_' . time() . '.' . $request->file_cv->getClientOriginalExtension();
        $cvFilePath = 'files/kmzway87aa';
        $request->file_cv->move(public_path($cvFilePath), $cvFileName);
        $cvLink = asset($cvFilePath) . '/' . $cvFileName;

        $participant = new Participant();

        $participant->name = $request->name;
        $participant->university = $request->university;
        $participant->year = $request->year;
        $participant->primary_division = $request->primary_division;
        $participant->primary_reason = $request->primary_reason;
        $participant->secondary_division = $request->secondary_division;
        $participant->secondary_reason = $request->secondary_reason;
        $participant->email = $request->email;
        $participant->instagram_link = $request->instagram_link;
        $participant->facebook_link = $request->facebook_link;
        $participant->twitter_link = $request->twitter_link;
        $participant->portfolio_link = $request->portfolio_link;
        $participant->cv_file = $cvLink;

        $participant->save();

        return view('participant.thankyou');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participant = Participant::findOrFail($id);

        return view('admin.participant-show', compact('participant'));
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
