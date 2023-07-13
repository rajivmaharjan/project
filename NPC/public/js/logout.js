window.addEventListener("load", function() {
    swal({
        title: "Log out of NPC?",
        icon: "warning",
        text: "You can always log back in at any time.",
        dangerMode: true,
        buttons: true,
    }).then((response) => {
        if (response) {
            location.replace("registration");
        } else {
            location.replace("npcpage");
        }
    });
});