<div class="row">
    <div class="col-md-6">
        <label for="sort_name" class="form-label fw-semibold">Sort by Name:</label>
        <div class="input-group mb-3">
            <button id="sort_name" class="btn btn-outline-secondary">
                {{ request('sort') == 'asc' ? 'A to Z' : 'Z to A' }}
            </button>
        </div>
    </div>
</div>
