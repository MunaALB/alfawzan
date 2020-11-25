@extends('backend.layouts.app')
@section('title', 'المتقدمين للوظيفة')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2> المتقدمين للوظيفة</h2>
        </section>
    </div>
</div>
<div class="applications-section" id="applications-index">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المتقدم</th>
                    <th scope="col">البريد الالكتروني</th>
                    <th scope="col">السيرة الذاتية</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                <tr>
                    <th scope="row">{{ $application->id }}</th>
                    <td>{{ $application->applicant_name }}</td>
                    <td>{{ $application->applicant_email }}</td>
                    <td><a class="btn btn-primary" target="_blank"  href="{{ asset($application->applicant_cv) }}">السيرة الذاتية</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@stop
