@extends("template.index")
@section('content')
    @include("partials.contact.header")
    @include("partials.contact.section")
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="js/google_map.js"></script>
@endsection
