<div>
    <h1>Activities</h1>
        @foreach($activities as $activity)
            <ol>
                <p>{{$activity->type}} - {{$activity->satisfaction}}</p>
            </ol>
        @endforeach
</div>
