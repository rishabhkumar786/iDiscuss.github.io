function likes(param1, param2) {

    $.ajax({
        url: "/Login System/php/likes.php",
        type: "POST",
        data: { reg: "success", type1: param1, type2: param2 },
        success: function(data) {
            document.getElementById('l' + param1).innerHTML = param2 + 1;
        }
    });
}

function dislikes(param1, param2) {

    $.ajax({
        url: "/Login System/php/dislikes.php",
        type: "POST",
        data: { reg: "success", type1: param1, type2: param2 },
        success: function(data) {
            document.getElementById('d' + param1).innerHTML = param2 + 1;
        }
    });
}

function upvote(param1, param2) {

    $.ajax({
        url: "/Login System/php/upvote.php",
        type: "POST",
        data: { reg: "success", type1: param1, type2: param2 },
        success: function(data) {
            document.getElementById('u' + param1).innerHTML = param2 + 1;
        }
    });
}

function downvote(param1, param2) {

    $.ajax({
        url: "/Login System/php/downvote.php",
        type: "POST",
        data: { reg: "success", type1: param1, type2: param2 },
        success: function(data) {
            document.getElementById('dd' + param1).innerHTML = param2 - 1;
        }
    });
}