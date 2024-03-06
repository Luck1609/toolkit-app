<?php

namespace App\Http\Controllers\Toolkit;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Locality;
use App\Models\Sector;
use App\Models\User;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MiscController extends Controller
{
  public function stats(): Response
  {
    $staff = User::count();
    $applications = Application::count();
    $localities = Locality::count();
    $sectors = Sector::count();

    return Inertia::render('dashboard/index', ['data' => ['staff' => $staff, 'apps' => $applications, 'localities' => $localities, 'sectors' => $sectors, ]]);
  }
}
