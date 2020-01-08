@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Welcome to Kgothatso's clothing fashion sensation</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="mensW.jpg">
                </div>
            </div>
        </div>
    </div>
</div><br><hr>

<div class style="position: absolute; left: 70px; color: blue;">
Click on one of the pictures below to access Men, Women and Kids pages
</div><br><hr>

<div class="container" style="position: absolute;top: 874px;"><br>
    <div class style="position: absolute; left: 70px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Men's wear</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <a href="\men"><img src="men.jpeg"></a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container"><br>
    <div class style="position: absolute; right: 560px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Women's wear</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="\women"><img src="ladiesW.jpeg"></a>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class style="position: absolute; right: 50px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kid's wear</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="\kids"><img src="kidsW.jpeg"></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
