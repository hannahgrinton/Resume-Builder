@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <div class="card" style="width: 575px;">
        <div class="card-header">
            Résumé Builder
        </div>
        <div class="card-body">
            <form>
                <div class="card-text" style="margin-bottom: 10px;">Who is this résumé for?</div>
                <div class="form-row" style="margin-bottom: 10px; margin-left: 5px;">
                    <div class="col">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" style="width: 250px;">
                    </div>
                    <div class="col">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="width: 250px;">
                    </div>
                </div>
                <div class="card-text" style="margin-bottom: 10px;">What Interests You?</div>
                <div class="form-row">
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#skillsDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="skillsDropdown" style="width: 250px;">
                            Skills&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="skillsDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 270px; width: 250px;">
                                <option class="dropdown-item" value="1">Front End Development</option>
                                <option class="dropdown-item" value="2">Back End Development</option>
                                <option class="dropdown-item" value="3">Content Management Systems</option>
                                <option class="dropdown-item" value="4">Web App Security</option>
                                <option class="dropdown-item" value="5">Database Administration</option>
                            </select>
                        </div>
                    </div>
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#eduDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="eduDropdown" style="width: 250px;">
                            Education&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="eduDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 270px; width: 250px;">
                                <option class="dropdown-item" value="1">IT Web Programming Diploma</option>
                                <option class="dropdown-item" value="2">High School Diploma</option>
                            </select>
                        </div>
                    </div>
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#expDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="expDropdown" style="width: 250px;">
                            Work Experience&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="expDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 270px; width: 250px;">
                                <option class="dropdown-item" value="1">Greenhorn Solutions Dev</option>
                                <option class="dropdown-item" value="2">NSCC Java/Javascript Tutor</option>
                                <option value="3" class="dropdown-item">Sobeys Deli Clerk/Cashier</option>
                            </select>
                        </div>
                    </div>
                    <div style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#certDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="certDropdown" style="width: 250px;">
                            Awards, Projects, Certifications &nbsp;&nbsp;<i class="fas fa-caret-down"></i>
                        </button>
                        <div class="collapse" id="certDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 270px; width: 250px;">
                                <option class="dropdown-item" value="1">DELF B1 Exam</option>
                                <option class="dropdown-item" value="2">Halisi Travel & Adventure</option>
                                <option value="3" class="dropdown-item">NSCC Entrance Award</option>
                                <option value="4" class="dropdown-item">Dr. Regis Callaghan Memorial</option>
                                <option value="5" class="dropdown-item">Portfolio Site</option>
                                <option value="6" class="dropdown-item">TMF Revenue Manager</option>
                                <option value="7" class="dropdown-item">Programming Instructor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin: 5px; margin-top: 10px;">
                    
                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Build</button>
                
                    <button class="btn btn-danger">Start Over</button>
 
                </div>
            </form>
        </div>
    </div>
</div>

@endsection