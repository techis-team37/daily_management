$(function () {
    // アップロードするファイルを選択
    $('input[type=file]').on("change", function () {
        var file = $(this).prop('files')[0];

        // 画像以外は処理を停止
        if (!file.type.match('image.*')) {
            // クリア
            $(this).val('');
            $('span').html('');
            return;
        }

        // 画像表示
        var reader = new FileReader();
        reader.onload = function () {
            $('.change-image').attr('src', reader.result);
            // $('.file-area').html(img_src);
        }
        reader.readAsDataURL(file);
    });

    $(".best_by_date").prop("disabled", true);
    $('.best_by_date').css('opacity', '0.5');
    $('.best_by_date').css('pointer-events', 'none');

    var text = $('[name=category] option:selected').text();
    if(text === "食品","飲料"){
        $(".best_by_date").prop("disabled", false);
        $('.best_by_date').css('opacity', '1');
        $('.best_by_date').css('pointer-events', 'all');
    }else{
        $(".best_by_date").prop("disabled", true);
        $('.best_by_date').css('opacity', '0.5');
        $('.best_by_date').css('pointer-events', 'none');
    }


    $('[name=category]').on('change', function() {
        var text = $('[name=category] option:selected').text();
        if(text === "食品","飲料"){
            $(".best_by_date").prop("disabled", false);
            $('.best_by_date').css('opacity', '1');
            $('.best_by_date').css('pointer-events', 'all');
        }else{
            $(".best_by_date").prop("disabled", true);
            $('.best_by_date').css('opacity', '0.5');
            $('.best_by_date').css('pointer-events', 'none');
        }
    });

    var count = 0;

    $(".graph-item").each(function(){

        var val = $(".graph-item").eq(count).css('height');
        val = parseInt(val);

        if(val <= 60){

            $(".graph-item").eq(count).css("background-color", "#FFA2A2");
            $(".graph-item").eq(count).css('height', val);

        }else if(val <= 150){

            $(".graph-item").eq(count).css("background-color", "#F8FFA8");
            $(".graph-item").eq(count).css('height', val);

        }else{

            $(".graph-item").eq(count).css("background-color", "#AFFFAF");
            $(".graph-item").eq(count).css('height', val);
        }
        count++;
    })

    if($('.graph-content').length > 10){
        $(".graph-container").css('justify-content', 'flex-start');
        $(".graph-container").css('overflow-x', 'scroll');
    }

});
