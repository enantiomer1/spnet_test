<?php

namespace App\Http\Controllers;


use App\Tape;
use Illuminate\Http\Request;

class TapeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tapes = Tape::orderBy('created_at', 'desc')->paginate(7);

        return view('back.tapes.index', compact('tapes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        $tape = new Tape();

        return view('back.tapes.create', compact('tape'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'speaker' => 'required|max:255',
            'title' => 'required',
            'description' => 'required',
            'file_name' => 'file|nullable|max:50000'
        ]);

        // Handle File Upload
        if ($request->hasFile('file_name')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('file_name')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file_name')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('file_name')->storeAs('public/audio_files', $fileNameToStore);
        } else {
            $fileNameToStore = 'placeholder.mp3';
        }

        $tape = Tape::create([
            'speaker' => $request->speaker,
            'title' => $request->title,
            'description' => $request->description,
            'file_name' => $fileNameToStore
        ]);

        return redirect()->back()->withFlashSuccess('Speaker tape successfully uploaded.');
    }
}
