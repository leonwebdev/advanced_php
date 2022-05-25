/**
 * get List View by Search
 * @param {*} e event
 * @param {*} el this
 */
function getSearch(e, el) {
    e.preventDefault();

    let search = el.value;
    console.log(search);

    $.get(
        "server.php?search=" + search,
        function (response) {
            $("#list").html(response);
        },
        "html"
    );
}

/**
 * get One Detail View by ID
 * @param {*} e event
 * @param {*} num book-id
 */
function showDetail(e, num) {
    e.preventDefault();
    $.get(
        "detail.php?id=" + num,
        function (response) {
            $("#detail").html(response);
        },
        "html"
    );
}
