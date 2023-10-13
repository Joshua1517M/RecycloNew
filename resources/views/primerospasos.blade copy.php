@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <title>Animated Sidebar CSS</title>
</head>

<body>

    <div id="sidebar">
        <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </div>

    <h1>Primeros Pasos</h1>

    <section class="section-info">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="min-height: 20rem;">
                        <div class="card-body-info">


                        </div>
                    </div>
                </div>
            </div>
    </section>



    <script>
    // sidebar toggle
    const btnToggle = document.querySelector('.toggle-btn');

    btnToggle.addEventListener('click', function() {
        console.log('clik')
        document.getElementById('sidebar').classList.toggle('active');
        console.log(document.getElementById('sidebar'))
    });
    </script>


</body>

@endsection