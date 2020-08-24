<script>
    function routeToRuangan() {
        // event.preventDefault();
        // const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')

        // $.ajax({
        //     url:"/ruanganDeta",
        //     type:'get',
        //     data:{
        //         CSRF_TOKEN
        //     },
        //     success:function (data) {
        //         // console.log(data)
        //         $("html").html(data)
        //     }
        // })

        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("html").html(this.responseText);
            }
        };
        xhttp.open("GET", "/ruanganDeta", true);
        xhttp.send();
    }
</script>
