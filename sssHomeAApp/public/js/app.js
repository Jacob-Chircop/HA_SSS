document.getElementById('filter_college_id').addEventListener('change',
    function () {
        let collegeId = this.value || this.options[this.selectedIndex].value
        let url = new URL(window.location.href)
        url.searchParams.set('college_id', collegeId)
        window.location.href = url.toString()
    }
)

document.getElementById('sort_name').addEventListener('click',
    function () {
        let url = new URL(window.location.href)
        let currentSort = url.searchParams.get('sort')
        let newSort = currentSort === 'desc' ? 'asc' : 'desc'
        url.searchParams.set('sort', newSort)
        window.location.href = url.toString()
    }
)