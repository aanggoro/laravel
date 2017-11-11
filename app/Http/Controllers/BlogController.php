<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      return view('blog/home');
    }

    public function show($id)
    {
      $nilai = 'ini adalah linknya' . $id;
      $nama = 'hello iam eng"s';
      $users = ['ladi', 'caesar', 'sevika', 'diyale'];
      $unascaped = '<script> alert("hey") </script>';

      return view('blog/single', ['blog' => $id, 'nama' => $nama, 'users' => $users, 'unascaped' => $unascaped]);
    }
}
