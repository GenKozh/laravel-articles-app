@extends('layout.default')
@section('css')
    <style>
        a, a:hover {
            color: black;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="float-right">
            <a href="{{url('/create')}}" class="btn btn-primary">New</a>
        </div>
        <h1 style="font-size: 2.2rem">Overview page</h1>
        <hr/>

        <table class="table table-bordered bg-light">
            <thead class="bg-dark" style="color: white">
            <tr>
                <th width="60px" style="vertical-align: middle;text-align: center">No</th>
                <th width="200px" style="vertical-align: middle">Author Name
                </th>
                <th style="vertical-align: middle">Title
                </th>
                <th style="vertical-align: middle">Article text
                </th>
                <th width="130px" style="vertical-align: middle">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
            @foreach($articles as $article)
                <tr>
                    <th style="vertical-align: middle;text-align: center">{{$i++}}</th>
                    <td style="vertical-align: middle">{{ $article->name }}</td>
                    <td style="vertical-align: middle"><a href="{{url('/details/'.$article->id)}}">{{ $article->title }}</a>
                    </td>
                    <td style="vertical-align: middle">{{ $article->text}}</td>
                    <td style="vertical-align: middle" align="center">
                        <form id="frm_{{$article->id}}"
                              action="{{url('/delete/'.$article->id)}}"
                              method="post" style="padding-bottom: 0px;margin-bottom: 0px">
                            <a class="btn btn-primary btn-sm" title="Edit"
                               href="{{url('/update/'.$article->id)}}">
                                Edit</a>
                            <input type="hidden" name="_method" value="delete"/>
                            {{csrf_field()}}
                            <a class="btn btn-danger btn-sm" title="Delete"
                               href="javascript:if(confirm('Are you sure want to delete?')) $('#frm_{{$article->id}}').submit()">
                                Delete
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <nav>
            <ul class="pagination justify-content-end">
                {{$articles->links('vendor.pagination.bootstrap-4')}}
            </ul>
        </nav>
    </div>
@endsection