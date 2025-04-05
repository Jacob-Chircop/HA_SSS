<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col">
                <label for="filter_college_id" class="form-label fw-semibold">Filter by College:</label>
                <div class="input-group mb-3">
                    <select id="filter_college_id" name="college_id" class="form-select">
                        @foreach($colleges as $id => $name)
                            <option value="{{ $id }}" {{ request('college_id') == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
