@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['resume-items'] as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>
                        @if($item->category == "1")
                            Skill
                        @elseif($item->category == "2")
                            Work
                        @elseif($item->category == "3")
                            Education
                        @elseif($item->category == "4")
                            Extra
                        @endif
                    </td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->created_at}}</td>
                    <td style="font-size: 12px;">
                        <a href="{{ route('manager.edit', $item->itemId) }}">
                            <i class="far fa-edit" style="margin-right: 2px;"></i>Edit
                        </a><br>
                        <a href="{{ route('manager.delete', $item->itemId) }}">
                            <i class="fas fa-trash-alt" style="margin-right: 2px;"></i>Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection