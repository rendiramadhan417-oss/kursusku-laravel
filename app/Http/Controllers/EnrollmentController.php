<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Enrollment;
use App\Models\Participant;
use App\Models\Course;

class EnrollmentController extends Controller
{
    /**
     * Menampilkan daftar pendaftaran.
     */
    public function index()
    {
        $enrollments = Enrollment::with(['participant', 'course'])
            ->latest()
            ->get();

        return view('enrollments.index', compact('enrollments'));
    }

    /**
     * Menampilkan formulir pendaftaran.
     */
    public function create()
    {
        $participants = Participant::orderBy('name')->get();

        $courses = Course::where('status', 'open')
            ->orderBy('name')
            ->get();

        return view('enrollments.create', compact('participants', 'courses'));
    }

    /**
     * Menyimpan data pendaftaran.
     */
    public function store(Request $request)
    {
        $request->validate([
            'participant_id' => [
                'required',
                'exists:participants,id',
            ],

            'course_id' => [
                'required',
                'exists:courses,id',
                Rule::unique('enrollments', 'course_id')
                    ->where(function ($query) use ($request) {
                        return $query->where(
                            'participant_id',
                            $request->participant_id
                        );
                    }),
            ],
        ]);

        Enrollment::create([
            'participant_id' => $request->participant_id,
            'course_id' => $request->course_id,
            'status' => 'registered',
        ]);

        return redirect()
            ->route('enrollments.index')
            ->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
