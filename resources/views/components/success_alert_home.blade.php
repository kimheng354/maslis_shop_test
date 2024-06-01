<style>
    .fixed-top {
        position: fixed;
        /* width: 50%; */
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1030;
    }
</style>
@if (Session::has('success'))
    <div class="alert alert-success fixed-top" role="alert" id="successAlert">
        {{ session('success') }}
    </div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var successAlert = document.getElementById('successAlert');
            
            if (successAlert) {
                successAlert.remove();
            }
        }, 1000); // Remove after 1 second (1000 milliseconds)
    });
</script>
