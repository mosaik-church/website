@extends('layout')

@section('content')
    <form action="{{ route('data_importer.targetselect') }}" method="post">
        {{ csrf_field() }}

        <div class="card flush">
            <div class="head">
                <h1>Your Uploaded Data</h1>


                <div class="controls">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">
                            Continue
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <p class="help-block">
                This page shows the first <strong>{{ $preview_count }}</strong> items of your data. If your data looks good, press continue. Your uploaded file contains <strong>{{ $row_count }}</strong> rows of data.
            </p>
        </div>
        @for ($i = 0; $i < $preview_count; $i++)
            <div class="card">
                <table class="dossier mt-0">
                    @foreach ($file[$i] as $key => $value)
                        <tr>
                            <th width="25%">{{ $key }}</th>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endfor
    </form>
@endsection
