// easyconverter.org

$("#convert").on("submit", function(event){
    event.preventDefault();
    var formValues= $(this).serialize();
    $.ajax({
        url: 'ajax/converter',
        type: 'POST',
        data: {
            to: $("#to").val(),
            from: $("#from").val(),
            type: $("#type").val(),
            value: $("#Converter").val()
        },
        dataType: 'json',
        success: function(response) {
            $(".convert").show();

            if(response.status == 'error') {
                $(".convert-title").text("Error");
                $(".convert-result").text(response.result).css("color", "red");
            }
            else {
                var from = $("#from option:selected").text();
                var to = $("#to option:selected").text();
                var to2 = $("#to option:selected").val();

                $(".copybtn").show();
                $(".convert-title").text(`${from} to ${to}`);
                $(".convert-result").text(`${response.result} ${to2}`).html();
            }
        }
    })
})


$("#encode").on("submit", function(event){
    event.preventDefault();

    $.ajax({
        url: 'ajax/encoder',
        type: 'POST',
        data: {
            type: $("#type").val(),
            encode: $("#text").val(),
        },
        dataType: 'json',
        success: function(response) {
            $(".encode").show();

            if(response.status == 'error') {
                $(".encode-title").text("Error");
                $(".encode-result").text(response.result).css("color", "red");
            }
            else {
                $(".copybtn").show();
                $(".encode-title").text("Result");
                $(".encode-result").text(response.result).html();
            }

        }
    })
})

$("#decode").on("submit", function(event){
    event.preventDefault();

    $.ajax({
        url: 'ajax/decoder',
        type: 'POST',
        data: {
            type: $("#type").val(),
            decode: $("#text2").val(),
        },
        dataType: 'json',
        success: function(response) {
            $(".decode").show();

            if(response.status == 'error') {
                $(".decode-title").text("Error");
                $(".decode-result").text(response.result).css("color", "red");
            }
            else {
                $(".copybtn").show();
                $(".decode-title").text("Result");
                $(".decode-result").text(response.result).html();
            }

        }
    })
})

$("#string").on("submit", function(event){
    event.preventDefault();

    $.ajax({
        url: 'ajax/string',
        type: 'POST',
        data: {
            type: $("#type").val(),
            text: $("#text").val(),
        },
        dataType: 'json',
        success: function(response) {
            $(".string").show();

            if(response.status == 'error') {
                $(".string-title").text("Error");
                $(".string-result").text(response.result).css("color", "red");
            }
            else {
                $(".copybtn").show();
                $(".string-title").text("Result");
                $(".string-result").text(response.result).html();
            }

        }
    })
})


$("#number").on("submit", function(event){
    event.preventDefault();

    $.ajax({
        url: 'ajax/number',
        type: 'POST',
        data: {
            type: $("#type").val(),
            number: $("#num").val(),
        },
        dataType: 'json',
        success: function(response) {
            $(".number").show();

            if(response.status == 'error') {
                $(".number-title").text("Error");
                $(".number-result").text(response.result).css("color", "red");
            }
            else {
                $(".copybtn").show();
                $(".number-title").text("Result");
                $(".number-result").text(response.result).html();
            }

        }
    })
})

$("#l").on("submit", function(event){
    event.preventDefault();

    $.ajax({
        url: 'ajax/list',
        type: 'POST',
        data: {
            output: $("#output").val(),
            list: $("#list").val(),
            method: $("#method").val(),

        },
        dataType: 'json',
        success: function(response) {
            $(".list").show();

            if(response.status == 'error') {
                $(".list-title").text("Error");
                $(".list-result").text(response.result).css("color", "red");
            }
            else {
                $(".copybtn").show();
                $(".list-title").text("Result");
                $(".list-result").text(response.result).html();
            }

        }
    })
})


$('.copybtn').tooltip({
    trigger: 'click',
    placement: 'bottom'
  });

  $('.copybtn2').tooltip({
    trigger: 'click',
    placement: 'bottom'
  });


  function setTooltip(message, btn) {
    $(btn).tooltip('hide')
      .attr('data-original-title', message)
      .tooltip('show');
  }

  function hideTooltip(btn) {
    setTimeout(function() {
      $(btn).tooltip('hide');
    }, 1000);
  }


var clipboard = new ClipboardJS('.copybtn');

clipboard.on('success', function(e) {
    setTooltip('Copied!', '.copybtn');
    hideTooltip(e.trigger, '.copybtn');
});

var clipboard2 = new ClipboardJS('.copybtn2');

clipboard2.on('success', function(e2) {
    setTooltip('Copied!', '.copybtn2');
    hideTooltip(e2.trigger, '.copybtn2');
});
