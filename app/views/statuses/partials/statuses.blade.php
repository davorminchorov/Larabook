
@forelse($statuses as $status)
    @include('statuses.partials.status')
@empty
     <p>This user hasn't posted any statuses yet.</p>
@endforelse

{{--@if($statuses->count())--}}
     {{--@foreach($statuses as $status)--}}
        {{--@include('statuses.partials.status')--}}
     {{--@endforeach--}}
{{--@else--}}
     {{--<p>This user hasn't posted any statuses yet.</p>--}}

{{--@endif--}}