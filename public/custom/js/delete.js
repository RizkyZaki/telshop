$(document).on("click", ".delete", function (e) {
    e.preventDefault();

    let identity = $(this).data("identity");
    let urlDel = $(this).data("url");
    let row = $(this).closest("tr");

    Swal.fire({
        title: "Apakah Anda Yakin?!",
        text: "Data Akan terhapus selamanya!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            $("div.spanner").addClass("show");
            $("div.overlay").addClass("show");
            $.ajax({
                url: `/dashboard/${urlDel}/${identity}`,
                type: "DELETE",
                data: {
                    _token: csrfToken,
                },
                success: function (response) {
                    if (response.status === "true") {
                        row.remove();
                        Swal.fire(
                            response.title,
                            response.description,
                            response.icon
                        );
                        $("div.spanner").removeClass("show");
                        $("div.overlay").removeClass("show");
                    } else {
                        Swal.fire(
                            response.title,
                            response.description,
                            response.icon
                        );
                        $("div.spanner").removeClass("show");
                        $("div.overlay").removeClass("show");
                    }
                },
            });
        }
    });
});
