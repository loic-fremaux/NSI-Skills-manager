@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('My skills') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Skill
                                </th>
                                <th>
                                    Score
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($test as $skill)
                                <tr>
                                    <td>
                                        {{ $skill->id }}
                                    </td>
                                    <td>
                                        {{ $skill->displayed_name }}
                                    </td>
                                    <td>
                                        {{ $skill->score }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
