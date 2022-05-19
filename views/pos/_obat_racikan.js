let onFocusSelectRacikan = data => {
    $(data).select()
}


let inputJumlahHargaJualRacikan = data => {
    $(data).trigger('change')
    let index = $(data).closest("tr").index()
    let index_luar = $(".dynamicform_wrapper1 .form-options-item-racikan").length - 1

    let jumlah = parseFloat($(`#racikandetail-${index_luar}-${index}-jumlah`).val())
    let harga_jual = parseFloat($(`#racikandetail-${index_luar}-${index}-harga_jual`).val())
    let subtotal = jumlah * harga_jual
    $(`#racikandetail-${index_luar}-${index}-subtotal-disp`).val(subtotal).trigger('change')
}


let onChangeSubtotalRacikan = _ => {
    let totalSubtotal = 0
    $(".dynamicform_wrapper1 .form-options-item-racikan").each(function (index) {
        totalSubtotal = parseFloat($(this).find("input[name*='[subtotal]']").val()) + totalSubtotal
    })
}


let enterNewRowRacikan = (data, key) => {
    let index = $(data).closest("tr").index()
    let index_luar = $(".dynamicform_wrapper1 .form-options-item-racikan").length - 1

    if (key === 13) {
        const banyakBaris = $(".dynamicform_wrapper1 .form-options-item-racikanform-options-item").length
        if (banyakBaris === index + 1) {
            $('.add-item').click()
            $(data).trigger('change')
        } else {
            $(`#racikandetail-${index_luar}-${index + 1}-id_racikan_detail`).select2('open')
            $(data).trigger('change')
        }
    }
}


hotkeys.filter = ({
    target
}) => {
    return true
    // console.log(target.tagName);
    // return target.tagName === 'INPUT' || target.tagName === 'DIV' || target.tagName === 'BODY';
    // return !(target.tagName === 'INPUT' && target.type !== 'radio') ;
}

hotkeys('alt+u,alt+y', function (event, handler) {
    event.preventDefault();
    switch (handler.key) {
        case 'alt+r':
            $(`#resep-no_rm`).select2('open')
            break;
        case 'alt+y':
            $('.add-item-racikan').click()
            return false;
            break;
        case 'alt+u':
            $('.add-item-obat-racikan-detail').click()
            return false;
            break;
        case 'alt+d':
            $('#resep-diskon_persen-disp').focus()
            return false;
            break;
        case 'alt+s':
            $('.btn-simpan-form-obat').click()
            return false;
            break;
        default:
            alert(event);
    }
});