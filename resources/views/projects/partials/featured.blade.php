<div class="w-full lg:w-1/2 border-b border-r py-12">
    <div class="mx-auto w-3/4 flex flex-col justify-between">
        <a href="/projects/{{$project->slug}}">
            <img src="{{$project->image('cover', 'default', ['w'=>900,'fit'=>null])}}" alt="{{$project->title}}">

            <h2 class="mt-5 text-base font-bold">
                {{$project->title}}
            </h2>

            <span class="text-base">
                {{$project->headline}}
            </span>
    </div>
</div>