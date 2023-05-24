@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center" style="background: #d1d1d1">
                            <th width="2%">S/L</th>
                            <th width="10%">Title</th>
                            <th width="10%">Description</th>
                            <th width="10%">Excerpt</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($posts as $key => $post)
                        <tr class="text-center">
                            <td class="pt-5">{{ $key+1 }}</td>
                            <td class="pt-50">{{$post->title}}</td>
                            <td class="pt-50">{{$post->description}}</td>
                            <td class="pt-50">{{$post->excerpt}}</td>
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
