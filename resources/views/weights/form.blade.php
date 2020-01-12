                        @csrf
                        <div class="form-group row">
                            <label for="berat-tanggal" class="col-md-5">Tanggal</label>
                            <div class="col-md-7 input-group">
                                <input type="hidden" name="id" value="{{ $weight->id }}">
                                <input type="date" name="tanggal" id="berat-tanggal" value="{{ old('tanggal', $weight->tanggal) }}" class="form-control {{ $errors->has('tanggal') ? 'is-invalid': '' }}">
                                @if ($errors->has('tanggal'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('tanggal') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat-min" class="col-md-5">Min</label>
                            <div class="col-md-7 input-group">
                                <input type="number" name="min" id="berat-min" value="{{ old('min', $weight->min) }}" class="form-control {{ $errors->has('min') ? 'is-invalid': '' }}">
                                @if ($errors->has('min'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('min') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat-max" class="col-md-5">Max</label>
                            <div class="col-md-7 input-group">
                                <input type="number" name="max" id="berat-max" value="{{ old('max', $weight->max) }}" class="form-control {{ $errors->has('max') ? 'is-invalid': '' }}">
                                @if ($errors->has('max'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('max') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
                        </div>
