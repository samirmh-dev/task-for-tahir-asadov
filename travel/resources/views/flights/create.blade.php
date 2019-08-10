@extends('layouts.admin')

@section('title', 'Yeni ucus elave et');

@section('content')

<form action="/flights" method="POST">
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="company">Uçuşu həyata keçirən şirkətin adı: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('company') }}"  class="form-control @if ($errors->has('company')) is-invalid @endif" name="company" id="company" placeholder="Şirkətin adı">
                <div class="invalid-feedback">
                    @if ($errors->has('company')) <p style="color:red;">{{ $errors->first('company') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="plane">Təyyarənin tipi: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('plane') }}"  class="form-control @if ($errors->has('plane')) is-invalid @endif" name="plane" id="plane" placeholder="Təyyarə">
                <div class="invalid-feedback">
                    @if ($errors->has('plane')) <p style="color:red;">{{ $errors->first('plane') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->


        <div class="col-lg">
            <div class="form-group">
                <label for="arrival">Təxmini eniş tarixi: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('arrival') }}"  class="form-control @if ($errors->has('arrival')) is-invalid @endif" name="arrival" id="arrival" placeholder="Eniş tarixi">
                <div class="invalid-feedback">
                    @if ($errors->has('arrival')) <p style="color:red;">{{ $errors->first('arrival') }}</p> @endif
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
    </div><!-- row -->

    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="from">Çıxış nöqtəsi: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('from') }}"  class="form-control @if ($errors->has('from')) is-invalid @endif" name="from" id="from" placeholder="Haradan">
                <div class="invalid-feedback">
                    @if ($errors->has('from')) <p style="color:red;">{{ $errors->first('from') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="to">Təyinat nöqtəsi: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('to') }}"  class="form-control @if ($errors->has('to')) is-invalid @endif" name="to" id="to" placeholder="Haraya">
                <div class="invalid-feedback">
                    @if ($errors->has('to')) <p style="color:red;">{{ $errors->first('to') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <label for="passenger">İnsan sayı: <span class="tx-danger">*</span></label>
                <input type="text" value="{{ old('passenger') }}" class="form-control @if ($errors->has('passenger')) is-invalid @endif" name="passenger" id="passenger" placeholder="İnsan sayı">
                <div class="invalid-feedback">
                    @if ($errors->has('passenger')) <p style="color:red;">{{ $errors->first('passenger') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->
    </div><!-- row -->

    <div class="row">

        <div class="col-lg">
            <div class="form-group">
                <label for="description">Qısa məzmun: <span class="tx-danger">*</span></label>
            <textarea name="description" class="form-control @if ($errors->has('description')) is-invalid @endif" name="description" id="description" placeholder="Qısa məzmun">{{ old('description') }}</textarea>
                <div class="invalid-feedback">
                    @if ($errors->has('description')) <p style="color:red;">{{ $errors->first('description') }}</p> @endif
                </div>
            </div><!-- form-group -->
        </div><!-- col-lg -->

        <div class="col-lg">
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary mt-5" value="Elave et">
            </div><!-- form-group -->
        </div><!-- col-lg -->
    </div><!-- row -->

</form>

@endsection
