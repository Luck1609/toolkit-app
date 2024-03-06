<?php

namespace App\Http\Controllers\Toolkit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Office\StoreOfficeRequest;
use App\Http\Requests\Office\UpdateContactRequest;
use App\Http\Requests\Office\UpdateDistrictRequest;
use App\Http\Requests\Office\UpdateEmailRequest;
use App\Http\Requests\Office\UpdateInitialsRequest;
use App\Http\Requests\Office\UpdateLogoRequest;
// use App\Http\Requests\ProfileUpdateRequest;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

use App\Models\Office;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class OfficeController extends Controller
{
  /**
   * Display the user's profile form.
   */
  public function initial_check(): Response|RedirectResponse
  {
    $office = Office::count();
    $users = User::count();

    if ($office > 0) {
      if ($users > 0) return Redirect::route("login");
      return Redirect::route("register");
    }

    $regions = Region::with('towns')->get();

    return Inertia::render('Auth/Office', ['regions' => $regions]);
  }


  public function store(StoreOfficeRequest $request): RedirectResponse
  {
    Office::create($request->all());

    return Redirect::route("register");
  }

  public function update_contact(UpdateContactRequest $request)
  {
    $office = $office = Office::get()[0];
    $request->validate(['contact' => ['required']]);

    $office->update($request->all());

    return $this->success('', 'Office contacts successfully updated');
  }


  public function update_district(UpdateDistrictRequest $request)
  {

    try {
      $office = $office = Office::get()[0];
      $office->update($request->all());

      return $this->success('', 'District name successfully updated');
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }
  }

  public function update_email(UpdateEmailRequest $request)
  {
    try {
      $office = $office = Office::get()[0];

      $office->update($request->all());

      return $this->success('', 'Office email successfully updated');
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }
  }


  public function update_initials(UpdateInitialsRequest $request)
  {
    try {
      $office = $office = Office::get()[0];

      $office->update($request->all());

      return $this->success('', 'District initials successfully updated');
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }
  }




  public function update_logo(UpdateLogoRequest $request)
  {
    try {
      $office = $office = Office::get()[0];

      if (!$office->email) abort(422, 'Please update your office email address first');

      $logo = $request->upload($request->logo, $office->email);

      $office->update(['logo' => $logo]);

      return $this->success('', 'Office logo successfully updated');
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }
  }


  // public function stats()
  // {
  //   $sms_balance = 'Needs internet connection';

  //   //verify whether the internet is working or not
  //   if (self::check_connection() === 'ok') {
  //     $sms_balance = Balance::getBal();
  //   }

  //   $staff = User::count();
  //   $applications = Application::whereYear('created_at', date_create()->format('Y'))->count();
  //   $notification = SmsNotification::where('status', 'Pending')->orWhere('status', 'Failed')->count();
  //   $tsc_members = CommitteeMember::where('panel', 'tsc')->count();
  //   $spc_members = CommitteeMember::where('panel', 'spc')->count();
  //   $localities = Locality::count();
  //   $sectors = Sector::count();

  //   return $this->success([
  //     'staff' => $staff,
  //     'applications' => $applications,
  //     'sms_balance' => $sms_balance,
  //     'notification' => $notification,
  //     'tsc_members' => $tsc_members,
  //     'spc_members' => $spc_members,
  //     'localities' => $localities,
  //     'sectors' => $sectors
  //   ], '');
  // }
}
