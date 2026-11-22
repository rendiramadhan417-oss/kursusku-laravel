<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Menampilkan daftar kursus, pencarian, filter, dan pagination
    public function index(Request $request)
    {
        // Mengambil kata kunci pencarian
        $search = trim((string) $request->query('q'));

        // Mengambil status filter
        $status = trim((string) $request->query('status'));

        // Status yang diperbolehkan
        $allowedStatuses = ['open', 'closed', 'draft'];

        // Mengambil data kursus
        $courses = Course::query()
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                      ->orWhere('name', 'like', "%{$search}%");
                });
            })
            ->when(
                in_array($status, $allowedStatuses, true),
                fn ($query) => $query->where('status', $status)
            )
            ->orderBy('name')
            ->paginate(10)
            ->withQueryString();

        return view('courses.index', compact(
            'courses',
            'search',
            'status'
        ));
    }

    // Menampilkan form tambah kursus
    public function create()
    {
        return view('courses.create');
    }

    // Menyimpan kursus baru
    public function store(StoreCourseRequest $request)
    {
        $data = $request->validated();

        Course::create($data);

        return to_route('courses.index')
            ->with('success', 'Kursus berhasil ditambahkan.');
    }

    // Menampilkan detail kursus
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Menampilkan form edit kursus
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // Memperbarui data kursus
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $data = $request->validated();

        $course->update($data);

        return to_route('courses.index')
            ->with('success', 'Kursus berhasil diperbarui.');
    }

    // Menghapus kursus
    public function destroy(Course $course)
    {
        $course->delete();

        return to_route('courses.index')
            ->with('success', 'Kursus berhasil dihapus.');
    }
}
