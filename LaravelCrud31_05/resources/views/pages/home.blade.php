@extends('layouts.main-layout')

@section('sectionHome')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    Home
                </h2>

                <ul>
                    @foreach ($employees as $employee)
                        <li>
                            {{ $employee -> firstname }} {{ $employee -> lastname }}
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
