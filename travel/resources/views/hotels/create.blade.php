@extends('layouts.admin')

@section('title', 'Yeni otel əlavə et');

@section('content')

<form action="/hotels" method="POST">
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="title">Otelin adı: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('title') }}"  class="form-control @if ($errors->has('title')) is-invalid @endif" name="title" id="title" placeholder="Otel">
                <div class="invalid-feedback">
                    @if ($errors->has('title')) <p style="color:red;">{{ $errors->first('title') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="star">Ulduz sayı: <span class="tx-danger">*</span></label>
                <input type="number" max="5" min="1" value="{{ old('star') }}"  class="form-control @if ($errors->has('star')) is-invalid @endif" name="star" id="star" placeholder="Ulduz">
                <div class="invalid-feedback">
                    @if ($errors->has('star')) <p style="color:red;">{{ $errors->first('star') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="city">Şəhər: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('city') }}"  class="form-control @if ($errors->has('city')) is-invalid @endif" name="city" id="city" placeholder="Şəhər">
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
                <input type="text" value="{{ old('address') }}"  class="form-control @if ($errors->has('address')) is-invalid @endif" name="address" id="address" placeholder="Ünvan">
                <div class="invalid-feedback">
                    @if ($errors->has('address')) <p style="color:red;">{{ $errors->first('address') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="price">Qiymət: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('price') }}"  class="form-control @if ($errors->has('price')) is-invalid @endif" name="price" id="price" placeholder="Qiymət">
                <div class="invalid-feedback">
                    @if ($errors->has('price')) <p style="color:red;">{{ $errors->first('price') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="description">Qısa məzmun: <span class="tx-danger">*</span></label>
                <textarea name="description" class="form-control @if ($errors->has('description')) is-invalid @endif" name="description" id="description" placeholder="Qısa məzmun">{{ old('description') }}</textarea>
                <div class="invalid-feedback">
                    @if ($errors->has('description')) <p style="color:red;">{{ $errors->first('description') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        
    </div><!-- row -->
    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="image">Şəkil: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('image') }}"  class="form-control @if ($errors->has('image')) is-invalid @endif" name="image" id="image" placeholder="Şirkətin adı">
                <div class="invalid-feedback">
                    @if ($errors->has('image')) <p style="color:red;">{{ $errors->first('image') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary mt-4" value="Elave et">
            </div><!-- form-group -->
        </div><!-- col-lg -->
    </div><!-- row -->

</form>

@endsection
