<script>
    const success = '{{ Session::has('success') }}';
    const info = '{{ Session::has('info') }}';
    const danger = '{{ Session::get('danger') }}';
    const msgSuccess = '{{ Session::get('success') }}';
    const msgInfo = '{{ Session::get('info') }}';
    const msgDanger = '{{ Session::get('danger') }}';
    if (success) {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: msgSuccess,
            showConfirmButton: false,
            timer: 1500
        });
    }
    if (info) {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: msgInfo,
            showConfirmButton: false,
            timer: 1500
        });
    }
    if (danger) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: msgDanger,
        });
    }
</script>
