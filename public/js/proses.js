

//PRODUK
function tambah_modal_produk(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Produk');
    var act = '/modal_tambah_produk';
    $.post(act, {
            _token: token
        },
        function (data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
    }

    function update_modal_produk(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html('Update Produk');
        var act = '/modal_edit_produk/' + id + '/modal_edit';
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }

    //MODAL SKU
    function update_modal_SKU(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html(' SKU');
        var act = '/modal_edit_SKU/' + id + '/modal_SKU';
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }

    //PROMO
function tambah_modal_promo(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Promo');
    var act = '/modal_tambah_promo';
    $.post(act, {
            _token: token
        },
        function (data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
    }

    function update_modal_promo(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html('Update Promo');
        var act = '/modal_edit_promo/' + id + '/modal_edit';
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }

     //GALERY
function tambah_modal_galery(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Galery');
    var act = '/modal_tambah_galery';
    $.post(act, {
            _token: token
        },
        function (data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
    }

    function update_modal_galery(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html('Update Galery');
        var act = '/modal_edit_galery/' + id + '/modal_edit';
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }

//Produk Atribut
function tambah_modal_produkatt(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Produk Att');
    var act = '/modal_tambah_produkatt';
    $.post(act, {
            _token: token
        },
        function (data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
    }

    function update_modal_produkatt(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html('Update Produk Att');
        var act = '/modal_edit_produkatt/' + id + '/modal_edit';
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }

    //Detail DTransaksi
function tambah_modal_dtransaksi(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah dtransaksi');
    var act = '/modal_tambah_dtransaksi';
    $.post(act, {
            _token: token
        },
        function (data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
    }

    function update_modal_dtransaksi(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html('Update dtransaksi');
        var act = '/modal_edit_dtransaksi/' + id + '/modal_edit';
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }

 //TRANSAKSI
function tambah_modal_transaksi(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Transaksi');
    var act = '/modal_tambah_transaksi';
    $.post(act, {
            _token: token
        },
        function (data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
    }

    function update_modal_transaksi(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html('Update Transaksi');
        var act = '/modal_edit_transaksi/' + id + '/modal_edit';
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }
    

    function update_modal_transaksi2(token, id, modal) {
        $(modal).modal('show');
        $(modal + 'Label').html('Detail Transaksi');
        var act = '/modal_edit_transaksi2/' + id + '/modal_edit2';
         
        $(modal + 'Isi').html('loading......');
        $.post(act, {
                _token: token
            },
            function (data) {
                // alert(data);
                $(modal + 'Isi').html(data);
            });
    }
