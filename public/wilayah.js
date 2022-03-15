$("#kecamatan").change(function () {
    var kecID = $(this).val();
    if (kecID) {
        $.ajax({
            type: "GET",
            url: "/getdesa?kecID=" + kecID,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    $("#desa").empty();
                    $("#desa").append("<option>Kelurahan / Desa </option>");
                    $.each(res, function (nama, kode) {
                        $("#desa").append(
                            '<option value="' + nama + '">' + nama + "</option"
                        );
                    });
                } else {
                    $("#desa").empty();
                }
            },
        });
    }
});
