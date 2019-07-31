@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row justify-content-center">
                @foreach($fragen as $frage)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{$frage->frage}}</div>

                        <div class="card-body">
                            <p><strong>Indikator: </strong>{{$frage->i_id}}</p>
                            <p><strong>Element: </strong>{{$frage->e_id}}</p>
                            <p><strong>Bereich: </strong>{{$frage->b_id}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
