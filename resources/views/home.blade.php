@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div>
    @csrf
    <table class="table table-responsive table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Expertise Area</th>
                <th>Partner</th>
                <th>Employee Type</th>
                <th>Managerial Capacity</th>
                <th>SBU</th>
                <th>HR</th>
                <th>Joining Date</th>
                <th>Confirmation Date</th>
                <th>Career Start Date</th>
                <th>Employee Category</th>
                <th>Designation</th>
                <th>Blood Group</th>
                <th>Level</th>
            </tr>
        </thead>
        {{-- <div class="card card-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-warning">
              <div class="widget-user-image">
                @php
                    $path = public_path("images/profile.jpg");
                @endphp
                <img class="img-circle elevation-2" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Nadia Carmichael</h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Projects <span class="float-right badge bg-primary">31</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Tasks <span class="float-right badge bg-info">5</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Completed Projects <span class="float-right badge bg-success">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Followers <span class="float-right badge bg-danger">842</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> --}}
        <livewire:users />
    </table>
</div>  
{{-- <input class="form-control-md" list="users" />
<datalist id="users">
    @foreach ($users as $user)
        <option>{{ $user->name }}</option>
    @endforeach
</datalist>
<button theme="dark">
    <i class="fas fa-search"></i>
</button> --}}
@stop

@section('css')
    <style>
        input::-webkit-calendar-picker-indicator {
        display: none !important;
        }
    </style>
    <livewire:styles />
@stop

@section('js')
    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
@stop