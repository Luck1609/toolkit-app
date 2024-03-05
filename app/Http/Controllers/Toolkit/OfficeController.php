<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

use App\Models\Office;


class ProfileController extends Controller
{
  /**
   * Display the user's profile form.
   */
  public function initial_check(Request $request): Response
  {
    $office = Office::all();

    return Inertia::render('Profile/Edit', [
      'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
      'status' => session('status'),
    ]);

    // return Inertia::render('Profile/Edit', [
    //   'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
    //   'status' => session('status'),
    // ]);
  }
}
