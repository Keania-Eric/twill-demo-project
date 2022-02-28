@extends('layouts.app')

@section('content')
    <!-- PROJECT SHOW -->
    <!-- HEADER -->
    <h1 class="mt-10 px-10 text-5xl font-normal leading-normal text-center">{{$project->title}}</h1>
    <h2 class="mt-2 px-10 text-base font-normal text-twill-grey text-center">{{$project->headline}}</h2>

    <!-- COVER -->
    <div class="my-12 mx-12  px-12 bg-twill-grey-2">
        <img class="w-10/12 lg:w-3/4 mx-auto"
             src="{{ $project->image('cover', 'default') }}"
             alt="{{$project->imageAltText('cover')}}"/>
    </div>

    <!-- CONTENT -->
    <div class="pb-16 lg:pb-40 border-b">

        <div class="w-10/12 lg:w-1/2 mt-32 mx-auto text-twill-grey-3 project_description">
            {!! $project->description !!}
        </div>

        <!-- PROJECT INFO -->
        <div class="w-10/12 lg:w-1/2 mt-32 mx-auto text-twill-grey-3">
            <h2 class="mt-10 my-10 text-xl font-normal leading-normal f-heading-5">Our Developers</h2>
            <div class="flex">
               
                <div class="w-1/2">
                    <ul>
                        @foreach($project->getRelated('developers') as $developer)
                            <li>
                               {{$developer->title}}
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

        <!-- HTML CONTENT -->
       
    </div>
@endsection

@push('additional_css')
    <style>
        .project_description p {
            margin-bottom: 1rem;
        }
    </style>
@endpush




