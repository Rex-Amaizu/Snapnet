<div class="form-group">
    <label for="name">Name</label>
    <input id="name" type="text" name="name" class="form-control" value="{{ old('name', optional($citizen ?? null)->name) }}"></div>
    @error('title')

        <div class="alert alert-danger">{{ $message }}</div>
        
    @enderror

    <div class="form-group">
        <label for="gender">Gender</label>
        <input id="gender" type="text" name="gender" class="form-control" value="{{ old('gender', optional($citizen ?? null)->gender) }}"></div>
        @error('gender')

        <div class="alert alert-danger">{{ $message }}</div>
        
    @enderror

    <div class="form-group">
        <label for="address">Address</label>
        <input id="address" type="text" name="address" class="form-control" value="{{ old('address', optional($citizen ?? null)->address) }}"></div>
        @error('address')

        <div class="alert alert-danger">{{ $message }}</div>
        
    @enderror

    <div class="form-group">
        <label for="phone">Phone</label>
        <input id="phone" type="text" name="phone" class="form-control" value="{{ old('phone', optional($citizen ?? null)->phone) }}"></div>
        @error('phone')

        <div class="alert alert-danger">{{ $message }}</div>
        
    @enderror


    <div class="form-group">
        <label for="wards_id">Ward ID</label>
        <input id="wards_id" type="text" name="wards_id" class="form-control" value="{{ old('wards_id', optional($citizen ?? null)->wards_id) }}"></div>
        @error('wards_id')

        <div class="alert alert-danger">{{ $message }}</div>
        
    @enderror
    {{-- @if ($errors->any()) --}}

        {{-- <div mb-3> --}}
            {{-- <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                    
                @endforeach
            </ul>
        </div>
        
    @endif --}}