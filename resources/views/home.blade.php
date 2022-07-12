@extends('layouts.main')

@section('content')
    <h1>Home</h1>
    <div class="clock h2"></div>
    <script>
        setInterval(() => {
            let date = new Date()
            const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ];
            let clock = document.querySelector('.clock')
            clock.innerHTML =
                date.getDate() + " " +
                months[date.getMonth()] + " " +
                date.getFullYear() + ", " +
                date.getHours() + ":" +
                date.getMinutes() + ":" +
                date.getSeconds()
        }, 1000);
    </script>
@endsection
