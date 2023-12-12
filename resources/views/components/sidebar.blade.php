<div class="position-fixed" style="top: 100px; right: 20px; width: 250px;">
  <div class="bg-light p-3 rounded">
      <h5 class="mb-4 text-dark">Movies</h5>
      <div class="list-group">
          @foreach($sidebar as $movie)
          <a href="/movies/{{ $movie->id }}" class="list-group-item list-group-item-action border-0 py-2 lh-condensed">-->
              <h6 class="mb-0" style="color: white;">{{ $movie->title }}</h6>
          </a>
          @endforeach
      </div>
  </div>
</div>

