<div class="mb-4 row">
    <label for="name" class="col-md-3 col-form-label fw-semibold">College Name:</label>
    <div class="col-md-9">
        <input type="text" id="name" name="name" value="{{ $College->name }}"
               class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-4 row">
    <label for="address" class="col-md-3 col-form-label fw-semibold">Address:</label>
    <div class="col-md-9">
        <input type="text" id="address" name="address" value="{{ $College->address }}"
               class="form-control @error('address') is-invalid @enderror">
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary w-100 mt-2">Update</button>
