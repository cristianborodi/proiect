@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $project->name }}</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.home') }}" title="Go back"> <i class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-green-white align-center">HOME</i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <strong>Name:</strong>
                {{ $project->name }}
            </div>
        </div>
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <strong>Introduction:</strong>
                {{ $project->introduction }}
            </div>
        </div>
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <strong>Location:</strong>
                {{ $project->location }}
            </div>
        </div>
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <strong >Cost:</strong>
                {{ $project->cost }}
            </div>
        </div>
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <strong>Date Created:</strong>
                {{ date_format($project->created_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection