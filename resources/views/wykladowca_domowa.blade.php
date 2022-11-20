@extends('layouts.arpas_dark')

@section('body-class', 'd-flex flex-column h-100')
@section('content')
    <div id="app">
        <test-component></test-component>
        <example-component></example-component>
    </div>

    <script>
        import TestComponent from "../js/components/TestComponent";
        import ExampleComponent from "../js/components/ExampleComponent";
        export default {
            components: {ExampleComponent, TestComponent}
        }
    </script>
@endsection
