@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to blockAngel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <iframe width='640' height='385' src="https://www.youtube.com/embed/6ugIY0-AWj0" frameborder="0" allowfullscreen></iframe>
                    <br>
                   

                  
             


                </div>
            </div>
        </div>
    </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Projects</div>

                    <div class="card-body">

                        <a href="/tryit">Start a New Project</a>    
                        <hr>
                        


                        <ul>
                        @foreach ($user->projects as $project)
                            <li><a href="/openProject/{{$project->id}}">{{ $project->name }}</a></li>
                        @endforeach
                        </ul>  


                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tutorials</div>

                     <div class="card-body">
    

                          <div><img src="blockAngel_getting_started.jpg">
                                 blockAngel Getting Started
                          </div>
                            <hr>
                          <div><img src="blockAngel_getting_started.jpg">
                                 second tutorial
                          </div>
                  
                  
                    </div>
                </div>
            </div>
        </div>

         <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sample Codes</div>

                     <div class="card-body">
    

                        <ul>
                        @foreach ($sampleProjects as $sampleProject)
                            <li><a href="/openSampleProject/{{$sampleProject->id}}">{{ $sampleProject->name }}</a></li>
                        @endforeach
                        </ul> 
                  
                  
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
