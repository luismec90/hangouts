$(function () {

    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });

    setInterval(loadGroups, 10000);

    loadGroups();
    $("body").on("click","#create-room,#create-room-2,#create",function () {
        $("#create-hangout").attr("href", "").attr("disabled", "disabled");
        $("#topic").val("");
        $("#modal-create-room").modal();
    });

    $("#topic").change(function () {
        if ($(this).val() != "") {
            var url = "https://plus.google.com/hangouts/_/?gid=234021961885&gd=" + $(this).val();
            $("#create-hangout").attr("href", url).removeAttr("disabled");
        } else {
            $("#create-hangout").attr("href", "").attr("disabled", "disabled");
        }
    });

    $("#create-hangout").click(function () {
        $("#modal-create-room").modal('hide');
    });
});

function loadGroups() {
    $.ajax({
        url: "https://public-hangouts.com/api/groups",
        method: "get",
        success: function (groups) {
            renderData(groups);
        }
    });
}

function renderData(groups) {
    var table = "<table class='table table-hover'><thead><td>Tema</td><td>Participantes</td><td>Opciones</td></thead>";
    if(!groups.length){
        $("#div-table").html("<h4>No hay ninguna sala de chat activa, te invitamos a <a id='create-room-2'>crear una</a>.</h4>");
    }else {
        $.each(groups, function (index, group) {
            if (group.topic === null) {
                group.topic = "Otros";
            }
            table += "<tr> <td class='col-xs-2'>" + group.topic + "</td><td class='col-xs-5'><a href='" + group.url + "?gid=234021961885' target='_blank' class='link-group'> " + renderParticipants(group.participants) + " </a></td> <td><a href='" + group.url + "?gid=514399285753' target='_blank' class='btn btn-primary'>Entrar</a></td></tr>"
        });
        table += '<table>';
        $("#div-table").html(table);
    }

}

function renderParticipants(participants) {
    var html = '';
    var i = 0;
    $.each(participants, function (index, participant) {
        html += "<img src='" + participant.image + "' width='40px' class='img-circle slot' title='" + participant.name + "'>";
        i++;
    });

    while (i < 10) {
        html += "<div class='free-slot slot' title=''></div>";
        i++;
    }

    return html;
}