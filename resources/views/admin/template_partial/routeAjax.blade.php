<script>
    function routeToRuangan() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')

        $.ajax({
            url:"/test",
            type:'get',
            data:{
                CSRF_TOKEN
            },
            success:function (data) {
                consol.log(data)
            }
        })
    }
</script>
