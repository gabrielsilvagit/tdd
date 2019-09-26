<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Author;

class AuthorsController extends Controller
{
    public function store()
    {
        Author::create($this->validateRequest());
        // ($this->validateRequest());

        // return redirect($author->path());
    }

    // public function update(Author $author)
    // {
    //     $author->update($this->validateRequest());

    //     return redirect($author->path());
    // }

    // public function destroy(Author $author)
    // {
    //     $author->delete();

    //     return redirect('/authors');
    // }

    protected function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'dob' => 'required'
        ]);
    }
}
