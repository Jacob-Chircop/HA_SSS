<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <label for="filter_college_id" class="mr-2">Filter by College:</label>
                    <select id="filter_college_id" name="college_id" class="custom-select">
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