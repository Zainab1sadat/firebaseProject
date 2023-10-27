<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public $firebase;
    public function connect()
    {
        $firebase = (new Factory)
            ->withServiceAccount(base_path(env("FIREBASE_CREDENTIALS")))
            ->withDatabaseUri(env("FIREBASE_DATABASE_URL"));

        return $firebase->createDatabase();
    }
    public function index()
    {
        $tests = $this->connect()->getReference('test')->getValue();
        return view('firebase.contact.index')->with([
            'tests' => $tests
        ]);
    }

    public function create()
    {
        return view('firebase.contact.create');
    }

    public function store(Request $request)
    {
        $this->connect()->getReference('test')->push($request->except(['_token']));
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $key = $id;
        $test = $this->connect()->getReference('test')->getChild($key)->getValue();
        return view('firebase.contact.edit')->with([
            'test' => $test,
            'key'=>$id
        ]);
    }

    public function update($id, Request $request)
    {
        $key=$id;
        $this->connect()->getReference('test/' . $key)->update($request->except(['_token']));
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $key = $id;
        $this->connect()->getReference('test/' . $key)->remove();
        return redirect()->back();
    }
}
