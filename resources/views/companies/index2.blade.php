@extends('layouts.app')

@section('content')
<div class="panel panel-primary col-lg-12">
    <div class="list-group">
        
            <a class="list-group-item active">
            <div class="panel-heading">SITES<a class="pull-right btn btn-sm"  href="{{ route('companies.create') }}">Add a New Site</a></div>
              <!-- <div class="panel-heading">Companies<a class="pull-right btn btn-primary"  href="/companies/create">Create new Company</a></div>
                -->
                <div class="panel-body">
                
                <ul class="list-group">
                    @foreach($companies as $company)
                    <li class="list-group-item"> <a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
                    @endforeach
               
                </ul>
            
                </div> 
    </div>
</div>
@endsection