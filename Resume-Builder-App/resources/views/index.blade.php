@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <div class="card" style="width: 575px;">
        <div class="card-header">
            Résumé Builder
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('create') }}">
                @csrf
                <div class="card-text" style="margin-bottom: 10px;">Who is this résumé for?</div>
                <div class="form-row" style="margin-bottom: 10px; margin-left: 5px;">
                    <div class="col">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" style="width: 250px;" maxlength="150">
                    </div>
                    <div class="col">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="width: 250px;" maxlength="200">
                    </div>
                </div>
                <div class="card-text" style="margin-bottom: 10px;">What Interests You?</div>
                <div class="form-row">
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#skillsDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="skillsDropdown" style="width: 250px;">
                            Skills&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="skillsDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 250px;" name="skills[]" id="skills" required>
                                @foreach($data['skills'] as $skill)
                                        <option class="dropdown-item" value="{{$skill->itemId}}">{{$skill->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#eduDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="eduDropdown" style="width: 250px;">
                            Education&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="eduDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 250px;" name="education[]" id="education" required>
                                @foreach($data['education'] as $edu)
                                    <option class="dropdown-item" value="{{$edu->itemId}}">{{$edu->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#expDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="expDropdown" style="width: 250px;">
                            Work Experience&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="expDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 250px;" name="work[]" id="work" required>
                                @foreach($data['work'] as $work)
                                    <option class="dropdown-item" value="{{$work->itemId}}">{{$work->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#certDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="certDropdown" style="width: 250px;">
                            Awards, Projects, Certifications &nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="certDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 250px;" name="other[]" id="other" required>
                                @foreach($data['other'] as $other)
                                    <option class="dropdown-item" value="{{$other->itemId}}">{{$other->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin: 5px; margin-top: 10px;">
                    
                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Build</button>
                
                    <input type="reset" class="btn btn-danger" value="Start Over">
 
                </div>
            </form>
        </div>
    </div>
</div>
@endsection