<!-- additional javascript -->
<script>
    $(document).foundation();
    $(document).ready(function() {
        $('#formSignIn').submit(function(e) {
            e.preventDefault();
            //? csrf in meta head
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url     : '{{ route('auth.attempt') }}',
                type    : "POST",
                data    : $('#formSignIn').serialize(),
                dataType: "JSON",
                cache   : false,
                success: function(data) {
                    if (data == 'success') {
                        notie.alert(1, 'Login Success..!!', 2);
                        setTimeout(function(){
                            window.location.href = "{{URL::to('/belakang/dashboard')}}"
                        }, 2000);
                    }else{
                        notie.alert(3, 'Login Failed..!!', 2);
                    }
                }
            });
        });
    });
</script>