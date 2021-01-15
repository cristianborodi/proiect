@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Project Dashboard</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.create') }}" title="Create a project"> <i class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-green-white align-center">CREATE</i>
                    </a>
            </div>
        </div>
    </div>
    <br>
    <div class="align-center">
        <div class="mx-auto pull-center">
            <div class="">
                <form action="{{ route('admin.home') }}" method="GET" role="search">

                    <div class="input-group">
                        
                        <input type="text" class="tracking py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" name="term" placeholder="Search projects" id="term">
                        <a href="{{ route('admin.home') }}" class=" mt-1">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="uppercase p-3 flex items-center bg-blue-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                                <svg width="32" height="32"  viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29zM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9z" fill="currentColor"></path></svg></span>
                            </button>
                        </span>
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="uppercase p-3 flex items-center bg-yellow-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                                    <svg  width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M26 18A10 10 0 1 1 16 8h6.182l-3.584 3.585L20 13l6-6l-6-6l-1.402 1.414L22.185 6H16a12 12 0 1 0 12 12z" fill="currentColor"></path></svg></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="text-left w-full border-collapse">
        <tr class="hover:bg-grey-lighter">
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nr. Crt.</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nume</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Despre</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Locatie</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Costuri</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Data creare</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actiuni</th>
        </tr>
        @foreach ($projects as $project)
            <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light text-center">{{ ++$i }}</td>
                <td class="py-4 px-6 border-b border-grey-light text-center">{{ $project->name }}</td>
                <td class="py-4 px-6 border-b border-grey-light text-center">{{ $project->introduction }}</td>
                <td class="py-4 px-6 border-b border-grey-light text-center">{{ $project->location }}</td>
                <td class="py-4 px-6 border-b border-grey-light text-center">{{ $project->cost }}</td>
                <td class="py-4 px-6 border-b border-grey-light text-center">{{ date_format($project->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                            <i class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark">SHOW</i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}">
                            <i class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-green-white">EDIT</i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: 5px; background-color:transparent;">
                            <i class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-red hover:bg-green-white">DELETE</i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $projects->links() !!}

@endsection