<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Author;

class AuthorsController extends Controller
{
    public function store()
    {
        // $author =
        Author::create(request()->only([
            'name', 'dob',
        ]));
        // ($this->validateRequest());

        // return redirect($author->path());
    }

    public function update(Author $author)
    {
        $author->update($this->validateRequest());

        return redirect($author->path());
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect('/authors');
    }

    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'dao' => 'required'
        ]);
    }
}
