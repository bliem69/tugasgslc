<link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">


<h1>BeeFlix</h1>

<form action="{{route('store')}}" method="POST" class="row g-3 needs-validation"  style="margin: 80px" enctype="multipart/form-data">
    @csrf
    <label for="genre" class="form-label">Genre</label>
    <select class="genre" name="genre" aria-label="Default select example">
        @foreach ($genre as $genres)
            <option value="{{$genres->id}}">{{$genres->name}}</option>
        @endforeach
    </select>

    <div class="mb-2 form-group">
        <label class="form-label">Image</label>
        <input type="file" name="photo" class="form-control">
            @error('photo')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
    </div>

    <div class="mb-3 form-group">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title">
        @error('title')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="description">
        @error('description')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label for="publish_date" class="form-label">Publish Date</label>
        <input type="date" name="publish_date" class="form-control" id="publish_date">
        @error('publish_date')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
