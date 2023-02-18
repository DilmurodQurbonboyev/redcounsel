// Language Tab
let en = document.getElementById('en');
if (typeof (en) != 'undefined' && en != null) {
    en.classList.add('active');
    en.classList.add('show');
    $(function () {
        $("a#lang-en").addClass("active");
    })
}

// select checkbox
$("#checkAll").change(function () {
    $(".checkItem").prop("checked", $(this).prop("checked"));
})
$(".checkItem").change(function () {
    if ($(this).prop("checked") == false) {
        $("#checkAll").prop("checked", false)
    }
    if ($(".checkItem:checked").length == $(".checkItem").length) {
        $("#checkAll").prop("checked", true)
    }
})

// Select2
$(".select2").select2({
    theme: 'bootstrap4',
});

$(".select2-multiple").select2({
    theme: 'bootstrap4',
    multiple: true,
});

const avatar = document.querySelectorAll(".user-avatar");

avatar.forEach(a => {
    const charCodeRed = a.dataset.label.charCodeAt(0);
    const charCodeGreen = a.dataset.label.charCodeAt(1) || charCodeRed;

    const red = Math.pow(charCodeRed, 7) % 200;
    const green = Math.pow(charCodeGreen, 7) % 200;
    const blue = (red + green) % 200;

    a.style.background = `rgb(${red}, ${green}, ${blue})`;
});

// Spinner
// $('body').delegate('.saveBtn', 'click', function (event) {
//     const submitButton = $(this);
//     if (!submitButton.hasClass('disabled')) {
//         let a = submitButton.html();
//         submitButton.addClass('disabled');
//         submitButton.html("<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> " + a);
//
//         setTimeout(() => {
//             submitButton.removeClass('disabled');
//             submitButton.html(a);
//         }, 3000);
//     } else {
//         event.preventDefault();
//     }
// });

// Tinymce editor
var editor_config = {
    path_absolute: "/"
    ,
    selector: '#content_oz'
    ,
    relative_urls: false
    ,
    plugins: [
        " advlist autolink lists link image charmap print preview hr anchor pagebreak"
        , "searchreplace wordcount visualblocks visualchars code fullscreen"
        , "insertdatetime media nonbreaking save table directionality"
        , "emoticons template paste textpattern"
    ]
    ,
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | removeformat"
    ,
    file_picker_callback: function (callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }
        tinyMCE.activeEditor.windowManager.openUrl({
            url: cmsURL
            , title: 'Filemanager'
            , width: x * 0.8
            , height: y * 1
            , resizable: "yes"
            , close_previous: "no"
            , onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
};
tinymce.init(editor_config);
var editor_config = {
    path_absolute: "/"
    ,
    selector: '#content_uz'
    ,
    relative_urls: false
    ,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak"
        , "searchreplace wordcount visualblocks visualchars code fullscreen"
        , "insertdatetime media nonbreaking save table directionality"
        , "emoticons template paste textpattern"
    ]
    ,
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | removeformat"
    ,
    file_picker_callback: function (callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }
        tinyMCE.activeEditor.windowManager.openUrl({
            url: cmsURL
            , title: 'Filemanager'
            , width: x * 0.8
            , height: y * 1
            , resizable: "yes"
            , close_previous: "no"
            , onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
};
tinymce.init(editor_config);
var editor_config = {
    path_absolute: "/"
    ,
    selector: '#content_ru'
    ,
    relative_urls: false
    ,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak"
        , "searchreplace wordcount visualblocks visualchars code fullscreen"
        , "insertdatetime media nonbreaking save table directionality"
        , "emoticons template paste textpattern"
    ]
    ,
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | removeformat"
    ,
    file_picker_callback: function (callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }
        tinyMCE.activeEditor.windowManager.openUrl({
            url: cmsURL
            , title: 'Filemanager'
            , width: x * 0.8
            , height: y * 1
            , resizable: "yes"
            , close_previous: "no"
            , onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
};
tinymce.init(editor_config);
var editor_config = {
    path_absolute: "/"
    ,
    selector: '#content_en'
    ,
    relative_urls: false
    ,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak"
        , "searchreplace wordcount visualblocks visualchars code fullscreen"
        , "insertdatetime media nonbreaking save table directionality"
        , "emoticons template paste textpattern"
    ]
    ,
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | removeformat"
    ,
    file_picker_callback: function (callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }
        tinyMCE.activeEditor.windowManager.openUrl({
            url: cmsURL
            , title: 'Filemanager'
            , width: x * 0.8
            , height: y * 1
            , resizable: "yes"
            , close_previous: "no"
            , onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
};

tinymce.init(editor_config);


