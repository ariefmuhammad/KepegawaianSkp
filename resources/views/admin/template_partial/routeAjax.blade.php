<script>
    function routeToRuangan() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')

        $.ajax({
            url:"/ruanganDeta",
            type:'get',
            data:{
                CSRF_TOKEN
            },
            success:function (data) {
                $("html").html(data)
            }
        })
    }
</script>
