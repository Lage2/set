$(function() {
    $('#bs-example-navbar-collapse-1 ul li a[href="' + document.body.getAttribute("id") + '.php"]').parent().addClass('active');
        $(document).ready ( function(){
                $("input[id^=vermais]").popover('hide');
        });

    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
                $(this).val("Ver mais >>");
            }
        });
    });
});

function buttonToggle(where,pval,nval) {
    where.value = (where.value == pval) ? nval : pval;
}

function checkSize(max_img_size) {
    var input = document.getElementById("fileselect");
    // check for browser support (may need to be modified)
    if(input.files && input.files.length == 1) {
        if (input.files[0].size > max_img_size) {
            alert("O ficheiro deve ser inferior a " + (max_img_size/1024/1024) + "MB.");
            return false;
        }
    }
    return true;
}

function showSendButton() {
    $('#sendButton').show();
}