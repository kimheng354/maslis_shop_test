@if (Session::has('success'))
    <div class="alert alert-success" role="alert" id="successAlert">
        {{ session('success') }}
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert" id="errorAlert">
        {{ session('error') }}
    </div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var successAlert = document.getElementById('successAlert');
            // var errorAlert = document.getElementById('errorAlert')
            if (successAlert) {
                successAlert.remove();
            } // Remove errorAlert if it exists and handle potential errors
            var errorAlert = document.getElementById('errorAlert');
            if (errorAlert) {
                try {
                    errorAlert.remove();
                } catch (error) {
                    console.error("Error removing errorAlert:", error);
                    // Optional: Add a fallback action if removal fails (e.g., hide it)
                }
            }
        }, 1000); // Remove after 1 second (1000 milliseconds)
    });
</script>
