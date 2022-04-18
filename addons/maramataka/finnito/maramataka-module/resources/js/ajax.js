$(function () {

    function delay(callback, ms) {
      var timer = 0;
      return function() {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
          callback.apply(context, args);
        }, ms || 0);
      };
    }

    $('form.ajax').on('submit', function(e) {
        e.preventDefault();

        $.post($(this).attr('action'), $(this).serializeArray(), function (data) {

            if (!data.success) {

                messages = [];

                $.each(data.errors, function (field, errors) {
                    messages.push(errors.join('\n'));
                });

                alert(messages.join('\n'));
                return false;
            }

            e.target.classList.remove("flash");
            e.target.classList.add("flash");
            
            if (!data.redirect) {
                return;
            }

            if (data.redirect === window.location.href) {
                return false;
            }

            window.location = data.redirect;
        });
    });

    $('form.ajax').on("keypress", function(e) {
        if ( e.metaKey && ( e.which === 13 ) ) {
            console.log( "You pressed CMD + Return");
            $(e.target.form).trigger("submit");
        }
    });

    $('form.ajax').keyup(delay(function (e) {
        $(e.target.form).trigger("submit");
    }, 1000));
});
