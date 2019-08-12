@extends('layouts.admin')

@section('title', 'Oteli redaktə et')

@section('content')

<form action="/hotels/{{ $hotel['id'] }}" method="POST">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="title">Otelin adı: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('title', $hotel['title']) }}"  class="form-control @if ($errors->has('title')) is-invalid @endif" name="title" id="title" placeholder="Otel">
                <div class="invalid-feedback">
                    @if ($errors->has('title')) <p style="color:red;">{{ $errors->first('title') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="star">Ulduz sayı: <span class="tx-danger">*</span></label>
                <input type="number" max="5" min="1" value="{{ old('star', $hotel['star']) }}"  class="form-control @if ($errors->has('star')) is-invalid @endif" name="star" id="star" placeholder="Ulduz">
                <div class="invalid-feedback">
                    @if ($errors->has('star')) <p style="color:red;">{{ $errors->first('star') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="city">Şəhər: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('city', $hotel['city']) }}"  class="form-control @if ($errors->has('city')) is-invalid @endif" name="city" id="city" placeholder="Şəhər">
                <div class="invalid-feedback">
                    @if ($errors->has('city')) <p style="color:red;">{{ $errors->first('city') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

    </div><!-- row -->
    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="address">Xəritədə ünvan: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('address', $hotel['address']) }}"  class="form-control @if ($errors->has('address')) is-invalid @endif" name="address" id="address" placeholder="Ünvan">
                <div class="invalid-feedback">
                    @if ($errors->has('address')) <p style="color:red;">{{ $errors->first('address') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="price">Qiymət: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('price', $hotel['price']) }}"  class="form-control @if ($errors->has('price')) is-invalid @endif" name="price" id="price" placeholder="Qiymət">
                <div class="invalid-feedback">
                    @if ($errors->has('price')) <p style="color:red;">{{ $errors->first('price') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="description">Qısa məzmun: <span class="tx-danger">*</span></label>
                <textarea name="description" class="form-control @if ($errors->has('description')) is-invalid @endif" name="description" id="description" placeholder="Qısa məzmun">{{ old('description', $hotel['description']) }}</textarea>
                <div class="invalid-feedback">
                    @if ($errors->has('description')) <p style="color:red;">{{ $errors->first('description') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        
    </div><!-- row -->
    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <div class="needsclick dropzone" id="document-dropzone">

                </div>
            </div><!-- form-group -->
            <div class="row">
                @forelse ($images as $image)
                    <div class="col-lg">
                        <img style="width: 100%;" src="{{ $image->getFullUrl() }}" alt="">
                    </div><!-- col-lg -->    
                @empty
            </div><!-- row -->
                
            @endforelse
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary mt-4" value="Yadda saxla">
            </div><!-- form-group -->
        </div><!-- col-lg -->
    </div><!-- row -->

</form>

@endsection

@section('scripts')
<script>
  var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
    url: '{{ route('medias.store') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="image[]" value="' + response.name + '">')
      uploadedDocumentMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentMap[file.name]
      }
      $('form').find('input[name="image[]"][value="' + name + '"]').remove()
    },
    init: function () {
      @if(isset($project) && $project->image)
        var files =
          {!! json_encode($project->image) !!}
        for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="image[]" value="' + file.file_name + '">')
        }
      @endif
    }
  }
</script>
@stop