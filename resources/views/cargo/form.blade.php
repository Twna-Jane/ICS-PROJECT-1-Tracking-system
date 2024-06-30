<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="awbno" class="form-label">{{ __('Awbno') }}</label>
            <input type="text" name="awbno" class="form-control @error('awbno') is-invalid @enderror" value="{{ old('awbno', $cargo?->awbno) }}" id="awbno" placeholder="Awbno">
            {!! $errors->first('awbno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="from" class="form-label">{{ __('From') }}</label>
            <input type="text" name="from" class="form-control @error('from') is-invalid @enderror" value="{{ old('from', $cargo?->from) }}" id="from" placeholder="From">
            {!! $errors->first('from', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="to" class="form-label">{{ __('To') }}</label>
            <input type="text" name="to" class="form-control @error('to') is-invalid @enderror" value="{{ old('to', $cargo?->to) }}" id="to" placeholder="To">
            {!! $errors->first('to', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="weight" class="form-label">{{ __('Weight') }}</label>
            <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ old('weight', $cargo?->weight) }}" id="weight" placeholder="Weight">
            {!! $errors->first('weight', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pieces" class="form-label">{{ __('Pieces') }}</label>
            <input type="text" name="pieces" class="form-control @error('pieces') is-invalid @enderror" value="{{ old('pieces', $cargo?->pieces) }}" id="pieces" placeholder="Pieces">
            {!! $errors->first('pieces', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>