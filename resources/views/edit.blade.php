@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 ">
                <h2>Editeaza Proiect</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}" title="Go back"> <i class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-green-white align-center">HOME</i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST" class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 ">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="flex flex-wrap mb-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $project->name }}" class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Name">
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="form-group">
                    <strong>Introduction:</strong>
                    <textarea class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" style="height:50px" name="introduction"
                        placeholder="Introduction">{{ $project->introduction }}</textarea>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="form-group">
                    <strong>Location:</strong>
                    <input type="text" name="location" class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" placeholder="{{ $project->location }}"
                        value="{{ $project->location }}">
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="form-group">
                    <strong>Cost:</strong>
                    <input type="number" name="cost" class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" placeholder="{{ $project->cost }}"
                        value="{{ $project->location }}">
                </div>
            </div>
            <div class="flex flex-wrap mb-6 text-center">
                <button type="submit" class="w-full shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </div>

    </form>
@endsection