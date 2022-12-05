<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Person;
use Illuminate\Http\Request;

class ReadersController extends Controller
{
    public function index()
    {
        $persons = Person::query()->with('books')->get();
        return view('lesson6.readers', compact('persons'));
    }


    public function show($id, $reader_id)
    {
        $person = Person::query()->findOrFail($id);
        $book = $person->books()
            ->where('readers.id', '=', $reader_id)
            ->first();

        return view('lesson6.reader_show', compact('person', 'book'));
    }

    public function edit($id, $reader_id)
    {
        $person = Person::query()->findOrFail($id);
        $book = $person->books()
            ->where('readers.id', '=', $reader_id)
            ->first();
        return view('lesson6.reader_form', compact('person', 'book'));
    }

    public function update(Request $request)
    {
        $id        = $request->route('id');
        $reader_id = $request->route('reader_id');
        $person    = Person::query()->findOrFail($id);

        $person->books()
            ->where('readers.id', $reader_id)
            ->update([
                'name' => $request->get('book'),
                'price'=> $request->get('price'),
                'issue_date' => $request->get('issue_date'),
                'return_date' => $request->get('return_date'),
                ]);

        return redirect()->route('show', [$id, $reader_id]);
    }

}
