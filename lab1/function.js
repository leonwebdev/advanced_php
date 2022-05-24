function getAll() {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "./users/index.php");
    xhr.responseType = "json";

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.response;
            console.log(response);
            showResults(response["results"]);
        }
    };

    xhr.send(null);
}

function showResults(users) {
    let html = "";

    users.forEach((user) => {
        html += `
        <div class = "border p-3 mb-3">
            <p><strong>First Name: </strong> ${user.first_name}</p>
            <p><strong>Last Name: </strong> ${user.last_name}</p>
            <p><strong>Email : </strong> ${user.email}</p>
            <p><strong>Phone : </strong> ${user.phone}</p>
        </div>
        `;
    });

    document.getElementById("all").innerHTML = html;
}
