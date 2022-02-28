@extends('layouts.app')

@section('content')

    <section id="hero-bg" class="min-h-screen bg-black flex justify-center items-center">

        <h1 class="mt-10 px-10 text-5xl font-normal leading-normal text-center text-white f-heading-5">Our Amazing projects done</h1>

    </section>

    <section>

            <h1 class="mt-10 px-10 text-5xl font-normal leading-normal text-center f-heading-5">Explore our Project List</h1>
        

        <!-- PROJECTS LIST -->
        <div class="mt-12 flex flex-wrap border-t">

            @forelse($projects as $project)
                @include('projects.partials.featured', ['project'=> $project])
            @empty
                <h2>There is currently nothing to display from our amazing collection</h2>
            @endforelse

        </div>
    </section>


@endsection
