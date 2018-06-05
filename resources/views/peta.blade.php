    @extends('layouts.dashboard')

    @section('content')

<body>

@include('layouts.navbar')

<div>


    <iframe class="f_peta" src="http://localhost:81/qgiswebclient.html?map=C:\OSGeo4W\apache\htdocs\DISTANKabBdg\projects/pertanianKabBandung.qgs"></iframe>

</div>


@include('layouts.footer')


@endsection