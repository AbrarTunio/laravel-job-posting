<div class="col-md-5">
    <div class="card mb-3" style="max-width: 600px;">
        <div class="row g-0">
            <div class="col-md-4 position-relative overflow-hidden" >
                <img src="https://picsum.photos/250" class="rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><a href="/jobs/{{$job->id}}">{{$job->title}}</a></h5>
                    <p class="card-text">
                    @php
                        $tags = $job->tags;
                        $arrayOfTags = explode( ', ' , $tags);
                    @endphp
                    @foreach( $arrayOfTags as $tag )
                    <a href="/?tag={{$tag}}" class="badge bg-primary rounded-pill">{{$tag}}</a>
                    @endforeach 
                    </p>
                    <p class="card-text">Email: <small class="text-muted">{{$job->email}}</small></p>
                    <p class="card-text">Website: <small class="text-muted">{{$job->website}}</small></p>
                    <p class="card-text">Location: <small class="text-muted">{{$job->location}}</small></p>
                    
                </div>
            </div>
        </div>
    </div>
</div>


