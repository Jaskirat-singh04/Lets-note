//script to download the note from the database
function downloadnote(e) {
    let filename = e.parentElement.parentElement.querySelector('.filename').innerHTML;
    let filetext = e.parentElement.parentElement.querySelector('.filetext').innerHTML;

    // console.log(filename);
    // console.log(filetext);

    let opt = {
        margin: 6,
        filename: filename,
    };

    html2pdf().set(opt)
        .from(filetext)
        .save();
}

//script to delete the note form the database
function deletenote(e) {
    let filename = e.parentElement.parentElement.querySelector('.filename').innerHTML;
    console.log(filename);

    $.ajax({
        url: 'partials/_delete.php',
        method: 'POST',
        data: {
            deleteRequest: true,
            filename: filename,
        },
        success: function (data) {
            location.reload();
        }
    });
}

//script to reload function
function reload() {
    location.reload();
}

//script to save note into the database
$(document).ready(function () {
    $('.save').click(function () {
        let heading = document.querySelector('.fields input').value;
        let pdfbtn = document.querySelector('#results #final_span').innerHTML;
        let pdftext = pdfbtn.fontcolor("black");

        $.ajax({
            url: 'partials/_savefile.php',
            method: 'POST',
            data: {
                saverequest: true,
                filename: heading,
                filetext: pdftext,
            },
            success: function (data) {
                // console.log(data);
                location.reload();
            }
        });
    });
});

//button script if user already have an account
$(document).ready(function () {
    $('.loginform').click(function () {
        let loginform = $('.login');
        let signupform = $('.signup');

        loginform.show();
        signupform.hide();
    });
});

//script if user don't have any account and want to create a new account
$(document).ready(function () {
    $('.signupform').click(function () {
        let loginform = $('.login');
        let signupform = $('.signup');

        loginform.hide();
        signupform.show();
    });
});

//signup script
$(document).ready(function () {
    $('#signup-btn').click(function () {
        let username = $('#username').val();
        let email = $('input[name=email]').val();
        let password = $('input[name=password]').val();
        let cnpassword = $('input[name=cnpassword]').val();

        if (username == "" || email == "" || password == "" || cnpassword == "") {
            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "12px",
                color: "red",
                marginTop: "6px",
            });
            showPara.html("Fields should not be Empty");
            showPara.appendTo('.form-container .signup form');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else if (cnpassword != password) {
            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "12px",
                color: "red",
                marginTop: "6px",
            });
            showPara.html("Passwords don't match");
            showPara.appendTo('.form-container .signup form');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else {
            $.ajax({
                url: 'partials/_signup.php',
                method: 'POST',
                data: {
                    signupRequest: true,
                    username: username,
                    email: email,
                    password: password,
                },
                success: function (data) {
                    // console.log(data);

                    let showPara = $(document.createElement('p'));
                    if (data == 'Account Created Succesfully') {
                        showPara.css({
                            fontSize: "16px",
                            color: "#39c590",
                            marginTop: "6px",
                        });
                    }
                    else {
                        showPara.css({
                            fontSize: "12px",
                            color: "red",
                            marginTop: "6px",
                        });
                    }
                    showPara.html(data);
                    showPara.appendTo('.form-container .signup form');

                    setTimeout(function () {
                        showPara.hide();

                        if (data == 'Account Created Succesfully') {
                            location.reload();
                        }
                    }, 1000);
                }
            });
        }
    });
});

//login script
$(document).ready(function () {
    $('#login-btn').click(function () {
        let username = $('input[name=lusername]').val();
        let password = $('input[name=lpassword]').val();

        if (username == "" || password == "") {
            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "12px",
                color: "red",
                marginTop: "6px",
            });
            showPara.html("Fields should not be Empty");
            showPara.appendTo('.form-container .login form');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else {
            $.ajax({
                url: 'partials/_login.php',
                method: 'POST',
                data: {
                    loginRequest: true,
                    username: username,
                    password: password,
                },
                success: function (data) {
                    let showPara = $(document.createElement('p'));
                    if (data == 'Login Successfull') {
                        showPara.css({
                            fontSize: "16px",
                            color: "#39c590",
                            marginTop: "6px",
                        });
                    } else {
                        showPara.css({
                            fontSize: "12px",
                            color: "red",
                            marginTop: "6px",
                        });
                    }
                    showPara.html(data);
                    showPara.appendTo('.form-container .login form');

                    setTimeout(function () {
                        showPara.hide();

                        if (data == 'Login Successfull') {
                            window.location.href = "index.php";
                        }
                    }, 1000);
                }
            });
        }
    });
});

//logout script
$(document).ready(function () {
    $('.logout').click(function () {
        $.ajax({
            url: 'partials/_logout.php',
            method: 'POST',
            data: {
                logoutRequest: true,
            },
            success: function (data) {
                location.reload();
            }
        });
    });
});