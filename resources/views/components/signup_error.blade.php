@if (Session::has('error'))
    <div class="alert alert-danger fixed-top" role="alert" id="errorAlert">
        {{ session('error') }}
    </div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var errorAlert = document.getElementById('errorAlert');
            if (errorAlert) {
                errorAlert.remove();
            }
        }, 1000); // Remove after 1 second (1000 milliseconds)
    });
</script>