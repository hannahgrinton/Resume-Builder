@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <div class="card" style="width: 575px;">
        <div class="card-header">
            <div class="lead">Hannah Grinton</div>
            <div><a href="mailto:hannahgrinton@gmail.com?Subject=Resume%20Response" target="_blank">hannahgrinton@gmail.com</a></div>
            <div><a href="https://hannahgrinton.ca" target="_blank">hannahgrinton.ca</a></div>
        </div>
        <div class="card-body">
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">Skills</div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['skills'] as $skill)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$skill->name}}</div>
                            <div>{{$skill->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">Education</div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['education'] as $education)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$education->name}}</div>
                            <div>{{$education->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">Work</div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['work'] as $work)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$work->name}}</div>
                            <div>{{$work->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">Awards, Projects, Certifications</div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['other'] as $other)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$other->name}}</div>
                            <div>{{$other->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header">References</div>
                <div class="card-body list-group list-group-flush">
                    <div class="list-group-item">
                        <div>Sean Morrow - NSCC Instructor</div>
                        <div><a href="mailto:sean.morrow@nscc.ca">sean.morrow@nscc.ca</a></div>
                    </div>
                    <div class="list-group-item">
                        <div>Natasha Chapman - Previous Employer, Sobeys</div>
                        <div>Work #: 902-893-7891</div>
                    </div>
                    <div class="list-group-item">
                        <div>Lech Krzywonos - NSCC Principal</div>
                        <div><a href="mailto:lech.krzymonos@nscc.ca">lech.krzywonos@nscc.ca</a></div>
                    </div>
                    <div class="list-group-item">
                        <div>Bethany Martin - Senior Developer, REDspace Inc.</div>
                        <div><a href="mailto:bethany@bethanydawn.ca">bethany@bethanydawn.ca</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection