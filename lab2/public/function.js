function getSearch(e, el) {
    e.preventDefault();

    let search = el.value;
    console.log(search);
    $("#list").load("server.php?search=" + search);
    $.get(
        "server.php?search=" + search,
        function (response) {
            $("#list").html(response);
        },
        "html"
    );
}
