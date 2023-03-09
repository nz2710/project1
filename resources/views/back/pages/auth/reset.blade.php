@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Reset Password')
@section('content')

<div class="page page-center">
    <div class="container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{\App\Models\Setting::find(1)->blog_logo}}" alt="" height="36"></a>
      </div>
      
      @livewire('author-reset-form')
       
    </div>
  </div>

@endsection