function sendCustomerEmojiReaction( emoji_id, sku, )
{
    $('.emoji').hide();
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "/emoji/add/" + sku + "/" + emoji_id, true);
    xhttp.send();
    $(".emoji[itemprop='" + emoji_id + "']").show(500).css('transform','scale(3)');
    setTimeout(function()
    {
        $(".emoji[itemprop='" + emoji_id + "']").css('transform','scale(1)');
        $('.customer_reaction').hide();
    }, 500);

}

