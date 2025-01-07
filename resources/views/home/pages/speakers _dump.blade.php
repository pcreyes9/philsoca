<?php $page='venue'; ?>
@extends('home.master')
@section('title', 'Speakers')
@section('banner-name', 'Program > Speakers')

@section('content')
@include('home.banner')
<section id="news" class="project-area">
    <div class="container" >
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="row">
            <div class="col-9">
                {{-- <h2 class="section-title">Metro Manila | Philippines</h2> --}}
                <h3 class="section-sub-title">Invited Speakers</h3>
                <table class="table table-striped-columns  table-bordered ">
                    <tbody>
                      <tr>
                        <th scope="row" style="background: rgba(242, 222, 2, .7); ">Sanjib Adhikary, MD</th>
                        <th scope="col">USA</th>
                      </tr>
                      {{-- <tr>
                        <th scope="col" style="background: rgba(242, 222, 2, .7)">Presentation file</th>
                        <th scope="row">Oct 20(Sun), 2024 11:59:59 pm in KST (GMT+9)</th>
                      </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</section>
@endsection