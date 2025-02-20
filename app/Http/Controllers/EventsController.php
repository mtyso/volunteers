<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $events = DB::table('events')->select(columns: '*')->get();
        $reviews = DB::table('reviews')->join('events', 'events.id', '=', 'reviews.event_id')->select('reviews.*', 'events.name as eventname')->get();
        $partners = DB::table('partners')->select('*')->get();
        
        return view('events.events', ['events' => $events, 'partners' => $partners, 'reviews'=>$reviews]);

    }

    public function show($id)
    {
        // Fetch the event from the database based on the ID
        $event = DB::table('events')->where('id', $id)->first();

        // Check if the event exists
        if (!$event) {
            // If no event is found, return a 404 error
            abort(404, 'Event not found');
        }

        // Pass the event data to the view
        return view('events.eventPage', ['event' => $event]);
    }

    public function edit(Event $event)
    {
        return view('events.editEventPage', compact('event'));
    }

    // Update the event
    public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|max:255',
        'intro' => 'required|max:255',
        'place' => 'required|max:255',
        'date' => 'required|date',
        'img' => 'image|nullable', // Only if you're uploading a new image
        'img2' => 'image|nullable', // Only if you're uploading a new second image
        'content' => 'required',
    ]);

    // Find the event by its ID
    $event = Event::findOrFail($id);

    // Update only the fields that were changed
    $event->name = $request->input('name');
    $event->intro = $request->input('intro');
    $event->place = $request->input('place');
    $event->date = $request->input('date');
    $event->content = $request->input('content');

    // If a new image is uploaded, update the image field
    if ($request->hasFile('img')) {
        // Delete the old image if needed
        if (file_exists(public_path('img/' . $event->img))) {
            unlink(public_path('img/' . $event->img));
        }
        // Save the new image
        $event->img = $request->file('img')->store('events', 'public');
    }

    // If a second image is uploaded, update the img2 field
    if ($request->hasFile('img2')) {
        // Delete the old second image if needed
        if (file_exists(public_path('img/' . $event->img2))) {
            unlink(public_path('img/' . $event->img2));
        }
        // Save the new second image
        $event->img2 = $request->file('img2')->store('events', 'public');
    }

    // Save the updated event
    $event->save();

    // Redirect to the event page or back to the events list
    return redirect()->route('events.show', $event->id)->with('success', 'Event updated successfully!');
}

    // Delete the event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }


    public function create()
    {
        return view('events.create');  // This will be the form view
    }

    // Store the newly created event in the database
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|max:255',
            'intro' => 'required|max:500',
            'place' => 'required|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle img upload
    if ($request->hasFile('img')) {
        $img = $request->file('img');
        // Move the image to public/img and get the file name
        $imgPath = $img->move(public_path('img'), $img->getClientOriginalName()); // Store in public/img folder
        $imgPath = $img->getClientOriginalName(); // Store the relative file path
    }

    // Handle img2 upload
    if ($request->hasFile('img2')) {
        $img2 = $request->file('img2');
        // Move the image to public/img and get the file name
        $img2Path = $img2->move(public_path('img'), $img2->getClientOriginalName()); // Store in public/img folder
        $img2Path =  $img2->getClientOriginalName(); // Store the relative file path
    }

    // Create the event and store the data (including the image paths)
    $event = Event::create([
        'name' => $request->name,
        'intro' => $request->intro,
        'place' => $request->place,
        'date' => $request->date,
        'content' => $request->content,
        'img' => $imgPath, // Store the relative file path for img
        'img2' => $img2Path, // Store the relative file path for img2
    ]);

        return redirect()->route('events.show', $event->id)
            ->with('success', 'Event created successfully!');
    }
}

