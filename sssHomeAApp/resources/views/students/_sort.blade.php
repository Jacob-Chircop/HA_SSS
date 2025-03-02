<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <label for="filter_college_id" class="mr-2">Sort by Name:</label>
                    <button id="sort_name" class="btn btn-outline-secondary">
                        {{ request('sort') == 'asc' ? 'A to Z' : 'Z to A' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>