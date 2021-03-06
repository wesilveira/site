window.mobileAndTabletCheck = function() {
    let check = false;
    (function(a) {
        if (
            /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(
                a
            ) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                a.substr(0, 4)
            )
        )
            check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};

window.mobileCheck = function() {
    let check = false;
    (function(a) {
        if (
            /(android|ipad|iphone|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
                a
            ) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                a.substr(0, 4)
            )
        )
            check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};

$(document).ready(function() {
    var fullUrl = window.location.href;
    var pathname = window.location.pathname;
    var entidade_aberta = false;
    var profissoes_entidades_abertas = [];
    var Base64 = {
        _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
        encode: function(e) {
            var t = "";
            var n, r, i, s, o, u, a;
            var f = 0;
            e = Base64._utf8_encode(e);
            while (f < e.length) {
                n = e.charCodeAt(f++);
                r = e.charCodeAt(f++);
                i = e.charCodeAt(f++);
                s = n >> 2;
                o = ((n & 3) << 4) | (r >> 4);
                u = ((r & 15) << 2) | (i >> 6);
                a = i & 63;
                if (isNaN(r)) {
                    u = a = 64;
                } else if (isNaN(i)) {
                    a = 64;
                }
                t =
                    t +
                    this._keyStr.charAt(s) +
                    this._keyStr.charAt(o) +
                    this._keyStr.charAt(u) +
                    this._keyStr.charAt(a);
            }
            return t;
        },
        decode: function(e) {
            var t = "";
            var n, r, i;
            var s, o, u, a;
            var f = 0;
            e = e.replace(/[^A-Za-z0-9\+\/\=]/g, "");
            while (f < e.length) {
                s = this._keyStr.indexOf(e.charAt(f++));
                o = this._keyStr.indexOf(e.charAt(f++));
                u = this._keyStr.indexOf(e.charAt(f++));
                a = this._keyStr.indexOf(e.charAt(f++));
                n = (s << 2) | (o >> 4);
                r = ((o & 15) << 4) | (u >> 2);
                i = ((u & 3) << 6) | a;
                t = t + String.fromCharCode(n);
                if (u != 64) {
                    t = t + String.fromCharCode(r);
                }
                if (a != 64) {
                    t = t + String.fromCharCode(i);
                }
            }
            t = Base64._utf8_decode(t);
            return t;
        },
        _utf8_encode: function(e) {
            e = e.replace(/\r\n/g, "\n");
            var t = "";
            for (var n = 0; n < e.length; n++) {
                var r = e.charCodeAt(n);
                if (r < 128) {
                    t += String.fromCharCode(r);
                } else if (r > 127 && r < 2048) {
                    t += String.fromCharCode((r >> 6) | 192);
                    t += String.fromCharCode((r & 63) | 128);
                } else {
                    t += String.fromCharCode((r >> 12) | 224);
                    t += String.fromCharCode(((r >> 6) & 63) | 128);
                    t += String.fromCharCode((r & 63) | 128);
                }
            }
            return t;
        },
        _utf8_decode: function(e) {
            var t = "";
            var n = 0;
            var r = (c1 = c2 = 0);
            while (n < e.length) {
                r = e.charCodeAt(n);
                if (r < 128) {
                    t += String.fromCharCode(r);
                    n++;
                } else if (r > 191 && r < 224) {
                    c2 = e.charCodeAt(n + 1);
                    t += String.fromCharCode(((r & 31) << 6) | (c2 & 63));
                    n += 2;
                } else {
                    c2 = e.charCodeAt(n + 1);
                    c3 = e.charCodeAt(n + 2);
                    t += String.fromCharCode(
                        ((r & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63)
                    );
                    n += 3;
                }
            }
            return t;
        }
    };

    $("#orderPriceLow").click(function() {
        var $tbody = $("#planosToShow");
        $tbody
            .find(".gallery_product")
            .sort(function(a, b) {
                console.log(a);
                console.log(b);
                var tda = parseFloat($(a).attr("data-price")); // target order attribute
                var tdb = parseFloat($(b).attr("data-price")); // target order attribute
                // if a < b return 1
                return tda > tdb ?
                    1 : // else if a > b return -1
                    tda < tdb ?
                    -1 : // else they are equal - return 0
                    0;
            })
            .appendTo($tbody);
    });

    $("#orderPriceHigh").click(function() {
        var $tbody = $("#planosToShow");
        $tbody
            .find(".gallery_product")
            .sort(function(a, b) {
                var tda = parseFloat($(a).attr("data-price")); // target order attribute
                var tdb = parseFloat($(b).attr("data-price")); // target order attribute
                // if a < b return 1
                return tda < tdb ?
                    1 : // else if a > b return -1
                    tda > tdb ?
                    -1 : // else they are equal - return 0
                    0;
            })
            .appendTo($tbody);
    });

    function resetOrderPlanos() {
        var $tbody = $("#planosToShow");
        $tbody
            .find(".gallery_product")
            .sort(function(a, b) {
                console.log(a);
                console.log(b);
                var tda = parseFloat($(a).attr("data-order")); // target order attribute
                var tdb = parseFloat($(b).attr("data-order")); // target order attribute
                // if a < b return 1
                return tda > tdb ?
                    1 : // else if a > b return -1
                    tda < tdb ?
                    -1 : // else they are equal - return 0
                    0;
            })
            .appendTo($tbody);
    }
    var operadoraAtual = "";
    var filterTopAtual = "";
    $(".dropOpe").on("click", ".filterOperadora", function() {
        var operadoraID = $(this).attr("data-operadora");
        operadoraAtual = operadoraID;
        $(".filter:not([data-operadoraid=" + operadoraID + "])").addClass("hide");
        if (filterTopAtual == "") {
            $(".filter[data-operadoraid=" + operadoraID + "]").removeClass("hide");
        } else {
            $(".filter[data-operadoraid=" + operadoraID + "]")
                .filter("." + filterTopAtual)
                .removeClass("hide");
        }
    });

    $(".filter-button").click(function() {
        var value = $(this).attr("data-filter");
        var type = $(this).attr("data-tipo");

        if (value == "price" || value == "operadora") return;

        if (type == "top") {
            if (value == "all") {
                resetOrderPlanos();
                $(".filter").removeClass("hide");
                $('.filter-button[data-tipo="sub"]').addClass("hide");
                $('.filter-button[data-tipo="top"]').removeAttr("disabled");
                $(".filter").show("1000");
                filterTopAtual = "";
                operadoraAtual = "";
            } else {
                filterTopAtual = value;
                if (operadoraAtual != "") {
                    $(".filter")
                        .not("." + value)
                        .addClass("hide");
                    // .hide("3000");
                    $(".filter[data-operadoraid=" + operadoraAtual + "]")
                        .filter("." + value)
                        .removeClass("hide");
                } else {
                    $(".filter")
                        .not("." + value)
                        .addClass("hide");
                    // .hide("3000");
                    $(".filter")
                        .filter("." + value)
                        .removeClass("hide");
                    // .show("3000");
                }

                $.each($('.filter-button[data-tipo="sub"]'), function() {
                    var parent = JSON.parse($(this).attr("data-parent"));
                    if (parent.includes(value)) {
                        $(this).removeClass("hide");
                        $('.filter-button[data-tipo="top"]').attr("disabled", "disabled");
                        $('.filter-button[data-tipo="top"][data-filter="all"]').removeAttr(
                            "disabled",
                            "disabled"
                        );
                    } else {
                        $(this).addClass("hide");
                    }
                });
            }
        } else {
            if (operadoraAtual != "") {
                $(".filter").addClass("hide");
                $(".filter[data-operadoraid=" + operadoraAtual + "]")
                    .filter("." + value + "." + filterTopAtual)
                    .removeClass("hide");
            } else {
                $(".filter").addClass("hide");
                $(".filter")
                    .filter("." + value + "." + filterTopAtual)
                    .removeClass("hide");
            }
        }
    });

    (function($) {
        $.fn.inputFilter = function(inputFilter) {
            return this.on(
                "input keydown keyup mousedown mouseup select contextmenu drop",
                function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(
                            this.oldSelectionStart,
                            this.oldSelectionEnd
                        );
                    } else {
                        this.value = "";
                    }
                }
            );
        };
    })(jQuery);

    const date = new Date();
    const dateTimeFormat = new Intl.DateTimeFormat("en", {
        year: "numeric",
        month: "short",
        day: "2-digit"
    });
    const [
        { value: month }, ,
        { value: day }, ,
        { value: year }
    ] = dateTimeFormat.formatToParts(date);
    $("input").attr("autocomplete", day + "" + month + "" + year + "_input");
    $("input").attr("required", "required");
    $("select").attr("required", "required");
    $('[data-toggle="tooltip"]').tooltip();

    var pages = {
        index: "simulacao_pme.php",
        beneficiario: "beneficiario",
        empresa: "empresa",
        consultaCnpjFunc: "funcionario_consulta_cnpj",
        simulacao_pme: "simulacao_pme",
        finalizar_simulacao: "finalizar_simulacao",
        cadastrar_empresa: "cadastrar_empresa",
        ficha_empresa: "ficha_empresa",
        cadastrar_f1: "cadastrar_f1",
        2: "2_escolha_seu_plano",
        3: "3_mps",
        4: "4_incluir_dependentes",
        5: "5_ficha_titular",
        6: "6_resumo",
        7: "7_validacao",
        8: "8_ficha_dependentes",
        9: "9_fichas_anexos",
        10: "10_fichas_enviadas",
        11: "11_ds",
        12: "12_ds_enviada",
        13: "13_rascunho",
        14: "14_gerar_proposta",
        15: "15_finalizar",
        16: "16_fim"
    };

    $("#btnCancelaCart").click(function() {
        $.confirm({
            title: "Tem certeza?",
            theme: "modern",
            content: "Você deseja cancelar este processo?",
            buttons: {
                Sim: function() {
                    localStorage.clear();
                    setTimeout(() => {
                        window.location.href = "../index_mob.php";
                    }, 500);
                },
                Não: function() {}
            }
        });
    });

    /**
     * focus scroll to element
     */
    $("input[type='text'],select").focus(function(e) {
        if ($(this).not(":visible")) {
            // console.log($("html, body"));
            // var offH = e.currentTarget.offsetHeight;
            // var offW = e.currentTarget.offsetWidth;
            // var ScrH = e.currentTarget.scrollHeight;
            // var ScrW = e.currentTarget.scrollWidth;
            // if (offH < ScrH || offW < ScrW) {
            var scroll = $(this).offset().top - 170;
            $("html, body").animate({
                    scrollTop: scroll + "px"
                },
                "fast"
            );
        }
    });

    /**
     * safari trick
     */
    $(".btn").mouseup(function(e) {
        e.preventDefault();
    });

    var availableProfissoes = [];

    //seta pagina atual
    if (fullUrl.indexOf("2_") != -1) {
        localStorage.setItem("currentPage", 2);
    } else if (
        fullUrl.indexOf("index") != -1 ||
        pathname[pathname.length - 1] === "/"
    ) {
        localStorage.setItem("currentPage", "index");
        //localStorage.clear();
        // $("#profissao").select2({
        //   data: availableTags,
        //   dropdownAutoWidth: true
        // });
        // $(".select2").addClass("form-control");
    } else if (fullUrl.indexOf("3_mps") != -1) {
        localStorage.setItem("currentPage", 3);
    } else if (fullUrl.indexOf("beneficiario") != -1) {
        localStorage.setItem("currentPage", "beneficiario");
        //localStorage.setItem("fluxo", "beneficiario");
    } else if (fullUrl.indexOf("/empresa") != -1) {
        localStorage.setItem("currentPage", "empresa");
        //localStorage.setItem("fluxo", "empresa");
    } else if (fullUrl.indexOf("simulacao_pme") != -1) {
        localStorage.setItem("currentPage", "simulacao_pme");
        $("#cnpj").inputFilter(function(value) {
            return /^\d*$/.test(value); // Allow digits only, using a RegExp
        });
        //localStorage.setItem("fluxo", "empresa");
    } else if (fullUrl.indexOf("finalizar_simulacao") != -1) {
        localStorage.setItem("currentPage", "finalizar_simulacao");
    } else if (fullUrl.indexOf("funcionario_consulta_cnpj") != -1) {
        localStorage.setItem("currentPage", "consultaCnpjFunc");
        //localStorage.setItem("fluxo", "empresa");
    } else if (fullUrl.indexOf("cadastrar_empresa") != -1) {
        localStorage.setItem("currentPage", "cadastrar_empresa");
        //localStorage.setItem("fluxo", "empresa");
    //else if com a pagina que tu quer adicionar
	}else if (fullUrl.indexOf("cadastrar_f1") != -1) {
        localStorage.setItem("currentPage", "cadastrar_f1");
        //localStorage.setItem("fluxo", "empresa");
	//fim else if com a pagina que tu quer adicionar
    } else if (fullUrl.indexOf("ficha_empresa") != -1) {
        localStorage.setItem("currentPage", "ficha_empresa");
        //localStorage.setItem("fluxo", "empresa");
    } else if (fullUrl.indexOf("4_incluir") != -1) {
        localStorage.setItem("currentPage", 4);
    } else if (fullUrl.indexOf("5_ficha") != -1) {
        localStorage.setItem("currentPage", 5);
    } else if (fullUrl.indexOf("6_resumo") != -1) {
        localStorage.setItem("currentPage", 6);
    } else if (fullUrl.indexOf("7_") != -1) {
        localStorage.setItem("currentPage", 7);
    } else if (fullUrl.indexOf("8_") != -1) {
        localStorage.setItem("currentPage", 8);
    } else if (fullUrl.indexOf("9_") != -1) {
        localStorage.setItem("currentPage", 9);
    } else if (fullUrl.indexOf("10_") != -1) {
        localStorage.setItem("currentPage", 10);
    } else if (fullUrl.indexOf("11_") != -1) {
        localStorage.setItem("currentPage", 11);
    } else if (fullUrl.indexOf("12_") != -1) {
        localStorage.setItem("currentPage", 12);
    } else if (fullUrl.indexOf("13_") != -1) {
        localStorage.setItem("currentPage", 13);
    } else if (fullUrl.indexOf("14_") != -1) {
        localStorage.setItem("currentPage", 14);
    } else if (fullUrl.indexOf("15_") != -1) {
        localStorage.setItem("currentPage", 15);
    } else if (fullUrl.indexOf("16_") != -1) {
        localStorage.setItem("currentPage", 16);
    }
    //fim seta pagina

    //checa se tem processo
    if (localStorage.getItem("currentStep") !== null) {
        if (
            localStorage.getItem("currentStep") != localStorage.getItem("currentPage")
        ) {
            // if (
            //     localStorage.getItem("currentStep") == "empresa" ||
            //     localStorage.getItem("currentStep") == "beneficiario"
            // ) {
            //     //nothing
            // } else {
            //     $.confirm({
            //         title: "Alerta!",
            //         theme: "modern",
            //         content: "Vi que você já tem um processo em andamento, deseja continuar de onde parou?",
            //         buttons: {
            //             Sim: function() {
            //                 window.location.href =
            //                     pages[localStorage.getItem("currentStep")] + ".php";
            //             },
            //             Não: function() {
            //                 $.confirm({
            //                     title: "Tem certeza?",
            //                     theme: "modern",
            //                     content: "Você deseja apagar todo o processo?",
            //                     buttons: {
            //                         Sim: function() {
            //                             localStorage.clear();
            //                             setTimeout(() => {
            //                                 window.location.href = "../index_mob.php";
            //                             }, 500);
            //                         },
            //                         Não: function() {
            //                             window.location.href =
            //                                 pages[localStorage.getItem("currentStep")] + ".php";
            //                         }
            //                     }
            //                 });
            //             }
            //         }
            //     });
            // }
        }
    } else {
        if (localStorage.getItem("currentPage") !== "index") {
            localStorage.clear();
            window.location.href = "simulacao_pme.php";
        }
    }
    //fim checa

    //btnFluxoEmpresa
    $("#btnFluxoSimulacao").click(function() {
        localStorage.setItem("currentStep", "simulacao_pme");
        localStorage.setItem("fluxo", "simulacao");
        window.location.href = pages["simulacao_pme"] + ".php";
    });

    //btnFluxoFuncionario
    $("#btnFluxoFuncionario").click(function() {
        localStorage.setItem("currentStep", "beneficiario");
        localStorage.setItem("fluxo", "beneficiario");
        window.location.href = pages["beneficiario"] + ".php";
    });

    //actions etapa 1
    $("#btnE1").click(function(e) {
        $(".erro-msg").text("");
        if ($(this).hasClass("able")) {
            e.stopPropagation();
            return;
        }
        $(".erro-msg").addClass("loader");
        var available = [
            "al",
            "am",
            "ba",
            "ce",
            "ma",
            "pa",
            "pb",
            "pi",
            "rn",
            "pe",
            "sc",
            "se"
        ];
        var valida = validaCamposE1();

        if (valida.continua !== false) {
            if (available.includes(valida.continua.uf.toLowerCase())) {
                setTimeout(() => {
                    var add_lead = geraLead();
                    if (!add_lead) {
                        alert("Houve um erro, você será redirecionado.");
                        window.location.href = "simulacao_pme.php";
                    }
                    $(".erro-msg").removeClass("loader");
                }, 500);
                localStorage.setItem("currentStep", 2);
                setTimeout(() => {
                    window.location.href = "2_escolha_seu_plano.php";
                }, 500);
            } else {
                //alert("No momento não estamos com planos para a sua cidade.");
                $(".erro-msg").removeClass("loader");

                $("#btnE1").hide();
                $("#enviaForaAbragencia").show();

                $(".erro-msg").text(
                    "No momento, não temos opções para sua região. 😔 \nVocê deseja enviar os dados já preenchidos para que na abertura de pontos em sua região, possamos avisá-lo?"
                );
            }
        } else {
            $.alert({
                title: "Alerta!",
                theme: "modern",
                content: `<div style="color:red" align="left">${valida.msgErro}</div>`
            });
            $(".erro-msg").removeClass("loader");
            $(".erro-msg").text("Verifique e preencha os campos corretamente.");
        }
        //console.log("click: " + valida);
        /* if (valida === false) {
          //alert("Por favor, preencha os campos corretamente");
        } else {
          //alert($.trim($("#data_nascimento").val()));
        } */
    });

    function validaCamposE1() {
        var nome = $.trim($("#nome").val().toUpperCase());
        var cep = $.trim($("#cep").val());
        var data_nascimento = $.trim($("#data_nascimento").val());
        var cel = $("#cel").val();
        //var profissao = $.trim($("#profissao").val());
        var email = $.trim($("#email").val());
        var utm_source = $("#utm_source").val();
        var utm_medium = $("#utm_medium").val();
        var utm_campaign = $("#utm_campaign").val();
        var utm_content = $("#utm_content").val();
        var utm_term = $("#utm_term").val();

        var retorno = new Object();
        var msgErro = "Verifique os seguintes campos:<br>";
        var continua = true;
        if (isEmpty(nome) || isBlank(nome)) {
            continua = false;
            msgErro += "- Nome<br>";
        }
        if (isEmpty(cep) || isBlank(cep) || cep.length !== 8) {
            continua = false;
            msgErro += "- CEP<br>";
        }
        if (
            isEmpty(data_nascimento) ||
            isBlank(data_nascimento) ||
            data_nascimento.length !== 10
        ) {
            continua = false;
            msgErro += "- Data de Nascimento<br>";
        }
        if (isEmpty(cel) || isBlank(cel) || cel.length !== 15) {
            continua = false;
            msgErro += "- Celular<br>";
        }
        //if (isEmpty(profissao) || profissao === "false" || isBlank(profissao))
        //continua = false;
        if (isEmpty(email) || isBlank(email) || !isEmail(email)) {
            continua = false;
            msgErro += "- E-mail<br>";
        }

        if (localStorage.getItem("fluxo") === "simulacao") {
            var cnpj = $.trim($("#cnpj").val());
            if (isEmpty(cnpj) || isBlank(cnpj) || !validarCNPJ(cnpj)) {
                continua = false;
                msgErro += "- CNPJ Inválido<br>";
            }
        }

        //console.log("ini: " + continua);

        var retornoCep = null;
        if (continua) {
            //if continua busca cep
            var data = new FormData();
            data.append("frmType", "buscaCep");
            data.append("frmCep", cep);
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    retornoCep = result;
                }
            });
        }

        //infoCustomer object
        var infoCustomer = new Object();

        if (retornoCep != null) {
            if (retornoCep.error === "true") {
                $(".erro-cep").text("Verifique o cep.");
                continua = false;
            } else {
                $(".erro-cep").text("");
                continua = retornoCep;
                //append dados localidade
                infoCustomer.UF_CRM_1578511012 = retornoCep.localidade.toUpperCase();
                infoCustomer.UF_CRM_1582805357 = retornoCep.uf.toUpperCase();
                infoCustomer.UF_CRM_1578510989 = retornoCep.bairro.toUpperCase();
                infoCustomer.UF_CRM_1578510781 = retornoCep.logradouro.toUpperCase();
            }
        }

        //salva tmp
        infoCustomer.NAME = nome;

        if (localStorage.getItem("fluxo") === "simulacao") infoCustomer.CNPJ = cnpj;
        infoCustomer.UF_CRM_1578521856 = data_nascimento;
        infoCustomer.UF_CRM_1578510751 = cep;
        infoCustomer.PHONE = cel;
        //infoCustomer.UF_CRM_1578521646 = profissao.toUpperCase();
        infoCustomer.EMAIL = email;
        infoCustomer.UTM_SOURCE = utm_source;
        infoCustomer.UTM_MEDIUM = utm_medium;
        infoCustomer.UTM_CAMPAIGN = utm_campaign;
        infoCustomer.UTM_CONTENT = utm_content;
        infoCustomer.UTM_TERM = utm_term;
        //calcula idade
        infoCustomer.IDADE = CalcularIdade(data_nascimento);

        localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
        //salva tmp
        retorno.continua = continua;
        retorno.msgErro = msgErro;
        return retorno;
    }
    //fim etapa 1

    //actions sem cobertura
    $("#enviaForaAbragencia").click(function() {
        $(".erro-msg").text("");
        $(".erro-msg").addClass("loader");
        var data = new FormData();
        data.append("frmType", "gravaLead");
        data.append("cobertura", "n");
        data.append("payload", localStorage.getItem("infoCustomer"));
        $.ajax({
            type: "POST",
            enctype: "multipart/form-data",
            url: "api.php",
            data: data,
            async: false,
            processData: false, // impedir que o jQuery tranforma a "data" em querystring
            contentType: false, // desabilitar o cabeçalho "Content-Type"
            cache: false, // desabilitar o "cache"
            dataType: "json",
            success: function(result) {
                $(".erro-msg").removeClass("loader");
                $(".success-msg").text("Obrigado! Seu contato foi enviado.");
                $("#enviaForaAbragencia").hide();
                localStorage.clear();
                setTimeout(() => {
                    window.location.reload();
                }, 4000);
            }
        });
    });
    //fim actions sem cobertura

    //gera lead fluxo
    function geraLead() {
        var data = new FormData();
        var retorno = true;
        data.append("frmType", "gravaLead");
        data.append("cobertura", "s");
        data.append("payload", localStorage.getItem("infoCustomer"));
        $.ajax({
            type: "POST",
            enctype: "multipart/form-data",
            url: "api.php",
            data: data,
            async: false,
            processData: false, // impedir que o jQuery tranforma a "data" em querystring
            contentType: false, // desabilitar o cabeçalho "Content-Type"
            cache: false, // desabilitar o "cache"
            dataType: "json",
            success: function(result) {
                if (result.error === "false") {
                    //console.log(result);
                    var lead_id = result.lead_id;
                    localStorage.setItem("lead_id", lead_id);
                } else {
                    retorno = false;
                }
            }
        });
        return retorno;
    }
    //fim gera lead fluxo
 function carregaPlanos2() {

        console.log("chamou")

        // if (!(
        //         localStorage.getItem("currentStep") !== null &&
        //         localStorage.getItem("currentStep") === "2" &&
        //         localStorage.getItem("infoCustomer") !== null
        //     )) {
        //     console.log("erro");
        //     alert(
        //         "Há algo errado com sua solicitação! Vou redirecionar você para a página inicial."
        //     );
        //     window.location.href = "simulacao_pme.php";
        // }

        // var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
        // $(".nomeTit").text(infoCustomer.NAME);

        var data = new FormData();
        var retorno = true;
        data.append("frmType", "buscaPlanos2");
        data.append("payload", localStorage.getItem("infoCustomer"));
        $.ajax({
            type: "POST",
            enctype: "multipart/form-data",
            url: "api.php",
            data: data,
            async: false,
            processData: false, // impedir que o jQuery tranforma a "data" em querystring
            contentType: false, // desabilitar o cabeçalho "Content-Type"
            cache: false, // desabilitar o "cache"
            dataType: "json",
            success: function(result) {
                if (result.error === "false") {
                    // console.log(result.data);
                    // console.log("");
                    // console.log(JSON.parse(result.payloadUsed));
                    var operadoras_venda = result.operadoras_venda;
                    $.each(operadoras_venda, function(i) {
                        $(".dropOpe").append(
                            '<a class="dropdown-item filterOperadora" data-operadora="' +
                            i +
                            '">' +
                            operadoras_venda[i] +
                            "</a>"
                        );
                    });

                    $("#planosToShow").html(result.data);

                    if (result.entidades !== "false") {
                        var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                        infoCustomer.ENTIDADES = result.entidades;
                        localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
                    }
                    //mostrar();
                } else {
                    retorno = false;
                }
            }
        });
        $("#loading").hide();
    }
    //carrega planos
    function carregaPlanos() {

        console.log("chamou")

        if (!(
                localStorage.getItem("currentStep") !== null &&
                localStorage.getItem("currentStep") === "2" &&
                localStorage.getItem("infoCustomer") !== null
            )) {
            console.log("erro");
            alert(
                "Há algo errado com sua solicitação! Vou redirecionar você para a página inicial."
            );
            window.location.href = "simulacao_pme.php";
        }

        var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
        $(".nomeTit").text(infoCustomer.NAME);

        var data = new FormData();
        var retorno = true;
        data.append("frmType", "buscaPlanos");
        data.append("payload", localStorage.getItem("infoCustomer"));
        $.ajax({
            type: "POST",
            enctype: "multipart/form-data",
            url: "api.php",
            data: data,
            async: false,
            processData: false, // impedir que o jQuery tranforma a "data" em querystring
            contentType: false, // desabilitar o cabeçalho "Content-Type"
            cache: false, // desabilitar o "cache"
            dataType: "json",
            success: function(result) {
                if (result.error === "false") {
                    // console.log(result.data);
                    // console.log("");
                    // console.log(JSON.parse(result.payloadUsed));
                    var operadoras_venda = result.operadoras_venda;
                    $.each(operadoras_venda, function(i) {
                        $(".dropOpe").append(
                            '<a class="dropdown-item filterOperadora" data-operadora="' +
                            i +
                            '">' +
                            operadoras_venda[i] +
                            "</a>"
                        );
                    });

                    $("#planosToShow").html(result.data);

                    if (result.entidades !== "false") {
                        var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                        infoCustomer.ENTIDADES = result.entidades;
                        localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
                    }
                    //mostrar();
                } else {
                    retorno = false;
                }
            }
        });
        $("#loading").hide();
    }
    //fim carrega planos

    //funções
    function isEmpty(str) {
        return !str || 0 === str.length;
    }

    function validaCpf(cpf) {
        cpf = cpf.replace(/\D/g, "");
        if (cpf.toString().length != 11 || /^(\d)\1{10}$/.test(cpf)) return false;
        var result = true;
        [9, 10].forEach(function(j) {
            var soma = 0,
                r;
            cpf
                .split(/(?=)/)
                .splice(0, j)
                .forEach(function(e, i) {
                    soma += parseInt(e) * (j + 2 - (i + 1));
                });
            r = soma % 11;
            r = r < 2 ? 0 : 11 - r;
            if (r != cpf.substring(j, j + 1)) result = false;
        });
        return result;
    }

    function validarCNPJ(cnpj) {
        cnpj = cnpj.replace(/[^\d]+/g, "");

        if (cnpj == "") return false;

        if (cnpj.length != 14) return false;

        // Elimina CNPJs invalidos conhecidos
        if (
            cnpj == "00000000000000" ||
            cnpj == "11111111111111" ||
            cnpj == "22222222222222" ||
            cnpj == "33333333333333" ||
            cnpj == "44444444444444" ||
            cnpj == "55555555555555" ||
            cnpj == "66666666666666" ||
            cnpj == "77777777777777" ||
            cnpj == "88888888888888" ||
            cnpj == "99999999999999"
        )
            return false;

        // Valida DVs
        tamanho = cnpj.length - 2;
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
        if (resultado != digitos.charAt(0)) return false;

        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
        if (resultado != digitos.charAt(1)) return false;

        return true;
    }

    function getBase64(file) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            //console.log(reader.result);
            localStorage.setItem("proofEntityAttachment", reader.result);
        };
        reader.onerror = function(error) {
            //console.log("Error: ", error);
            localStorage.setItem("proofEntityAttachment", false);
        };
    }

    function getBase64Prof(file) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            //console.log(reader.result);
            localStorage.setItem("proofProfessionAttachment", reader.result);
        };
        reader.onerror = function(error) {
            //console.log("Error: ", error);
            localStorage.setItem("proofProfessionAttachment", false);
        };
    }

    function isBlank(str) {
        return !str || /^\s*$/.test(str);
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function CalcularIdade(dataNasc) {
        var dataAtual = new Date();
        var anoAtual = dataAtual.getFullYear();
        var anoNascParts = dataNasc.split("-");
        var diaNasc = anoNascParts[2];
        var mesNasc = anoNascParts[1];
        var anoNasc = anoNascParts[0];
        var idade = anoAtual - anoNasc;
        var mesAtual = dataAtual.getMonth() + 1;

        if (mesAtual < mesNasc) {
            idade--;
        } else {
            if (mesAtual == mesNasc) {
                if (dataAtual.getDate() < diaNasc) {
                    idade--;
                }
            }
        }
        return idade;
    }

    function montaFileUploadDeps(dep) {
        var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
        var inputNames = {
            cnhDep1: "UF_CRM_1595339828",
            certidaoDep1: "UF_CRM_1589308735",
            casamentoDep1: "UF_CRM_1589308754",
            rgfDep1: "UF_CRM_1589308664",
            rgvDep1: "UF_CRM_1589308681",
            cpffDep1: "UF_CRM_1589308705",
            cpfvDep1: "UF_CRM_1589308718",
            cnhDep2: "UF_CRM_1589308815",
            certidaoDep2: "UF_CRM_1589308901",
            casamentoDep2: "UF_CRM_1589308918",
            rgfDep2: "UF_CRM_1589308830",
            rgvDep2: "UF_CRM_1589308841",
            cpffDep2: "UF_CRM_1589308861",
            cpfvDep2: "UF_CRM_1589308876",
            cnhDep3: "UF_CRM_1589309362",
            certidaoDep3: "UF_CRM_1589309385",
            casamentoDep3: "UF_CRM_1589309407",
            rgfDep3: "UF_CRM_1589309429",
            rgvDep3: "UF_CRM_1589309446",
            cpffDep3: "UF_CRM_1589309469",
            cpfvDep3: "UF_CRM_1589309486",
            cnhDep4: "UF_CRM_1589309521",
            certidaoDep4: "UF_CRM_1589309565",
            casamentoDep4: "UF_CRM_1589309550",
            rgfDep4: "UF_CRM_1589309581",
            rgvDep4: "UF_CRM_1589309606",
            cpffDep4: "UF_CRM_1589309637",
            cpfvDep4: "UF_CRM_1589309651",
            cnhDep5: "UF_CRM_1589309766",
            certidaoDep5: "UF_CRM_1589309806",
            casamentoDep5: "UF_CRM_1589309825",
            rgfDep5: "UF_CRM_1589309847",
            rgvDep5: "UF_CRM_1589309868",
            cpffDep5: "UF_CRM_1589309881",
            cpfvDep5: "UF_CRM_1589309898"
        };

        var arrConjuge = [394, 416, 438, 460, 482];
        var retorno = new Object();
        retorno.needed = 1;
        if (arrConjuge.includes(parseInt(infoCustomer.dependentes[dep].GRAU)))
            retorno.needed = 2;

        var html_output = `
      <div class="card">
      <div class="card-header" id="headingOne${dep}">
        <h5 class="mb-0">
          <button type="button" class="btn btn-link collapsed acdDep${dep}" data-toggle="collapse" data-target="#collapseOne${dep}" aria-expanded="true" aria-controls="collapseOne${dep}">
            Documentação Dependente ${dep} - ${
      infoCustomer.dependentes[dep].NAME
    }
          </button>
        </h5>
      </div>

      <div id="collapseOne${dep}" class="collapse" aria-labelledby="headingOne${dep}" data-parent="#accordion">
        <div class="card-body docsDep${dep}">
          <div class="row col-md-12">
            <div class="col-md-12" ${
              infoCustomer.dependentes[dep].idade < 18
                ? 'style="display:none"'
                : ""
            }>
              <div class="form-group">
                <label for="cnh">CNH</label>
                <input type="file" class="form-control-file" name="${
                  inputNames["cnhDep" + dep.toString()]
                }" id="cnhDep${dep}" ${
      infoCustomer.dependentes[dep].idade < 18 ? "disabled" : ""
    }>
              </div>
            </div>
            <div class="col-md-12" ${
              infoCustomer.dependentes[dep].idade <= 12
                ? ""
                : 'style="display:none"'
            }>
              <div class="form-group">
                <label for="comprovante">Certidão de Nascimento(Apenas para até 12 anos)</label>
                <input type="file" class="form-control-file" name="${
                  inputNames["certidaoDep" + dep.toString()]
                }" id="certidaoDep${dep}" ${
      infoCustomer.dependentes[dep].idade <= 12 ? "" : "disabled"
    } >
              </div>
            </div>
            <div class="col-md-12" ${
              arrConjuge.includes(parseInt(infoCustomer.dependentes[dep].GRAU))
                ? ""
                : 'style="display:none"'
            }>
              <div class="form-group">
                <label for="comprovante">Certidão de Casamento (Se Cônjuge)</label>
                <input type="file" class="form-control-file" name="${
                  inputNames["casamentoDep" + dep.toString()]
                }" id="casamentoDep${dep}" ${
      arrConjuge.includes(parseInt(infoCustomer.dependentes[dep].GRAU))
        ? ""
        : "disabled"
    } >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="rgf">RG Frente</label>
                <input type="file" class="form-control-file" name="${
                  inputNames["rgfDep" + dep.toString()]
                }" id="rgfDep${dep}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="rgv">RG Verso</label>
                <input type="file" class="form-control-file" name="${
                  inputNames["rgvDep" + dep.toString()]
                }" id="rgvDep${dep}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="cpff">CPF Frente</label>
                <input type="file" class="form-control-file" name="${
                  inputNames["cpffDep" + dep.toString()]
                }" id="cpffDep${dep}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="cpfv">CPF Verso</label>
                <input type="file" class="form-control-file" name="${
                  inputNames["cpfvDep" + dep.toString()]
                }" id="cpfvDep${dep}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    `;
        retorno.html_output = html_output;
        return retorno;
    }
    //fim funções

    //funções etapa consulta cnpj funcionario
    if (localStorage.getItem("currentPage") === "consultaCnpjFunc") {
        $("#cnpj").inputFilter(function(value) {
            return /^\d*$/.test(value); // Allow digits only, using a RegExp
        });

        $("#msform").submit(function(e) {
            e.preventDefault();
            $("#btnConsultaCnpjFunc").click();
        });

        $("#msform").on("click", "#btnCancelaCart", function() {
            $.confirm({
                title: "Tem certeza?",
                theme: "modern",
                content: "Você deseja cancelar este processo?",
                buttons: {
                    Sim: function() {
                        localStorage.clear();
                        setTimeout(() => {
                            window.location.href = "simulacao_pme.php";
                        }, 500);
                    },
                    Não: function() {}
                }
            });
        });

        $("#btnConsultaCnpjFunc").click(function() {
            $("#loading").show();
            var cnpj = $("#cnpj").val();
            if (!validarCNPJ(cnpj)) {
                $.alert({
                    title: "Alerta!",
                    theme: "modern",
                    content: "Informe um cnpj válido."
                });
                $("#loading").hide();
            } else {
                cnpj = MascaraCNPJ(cnpj);
                var data = new FormData();
                data.append("frmType", "buscaEmpresa");
                data.append("cnpj", cnpj);

                $.ajax({
                    type: "POST",
                    enctype: "multipart/form-data",
                    url: "api.php",
                    data: data,
                    async: false,
                    processData: false, // impedir que o jQuery tranforma a "data" em querystring
                    contentType: false, // desabilitar o cabeçalho "Content-Type"
                    cache: false, // desabilitar o "cache"
                    dataType: "json",
                    success: function(result) {
                        if (result.error === "false") {
                            if (result.hasCompany > 0) {
                                var infoCustomer = JSON.parse(
                                    localStorage.getItem("infoCustomer")
                                );
                                infoCustomer.company_id = result.id_company;
                                infoCustomer.company_name = result.nome_company;
                                infoCustomer.company_cnpj = cnpj;
                                localStorage.setItem(
                                    "infoCustomer",
                                    JSON.stringify(infoCustomer)
                                );
                                localStorage.setItem("currentStep", "3");
                                window.location.href = "3_mps.php";
                            } else {
                                $("#msformBody").hide(500);
                                var infoCustomer = JSON.parse(
                                    localStorage.getItem("infoCustomer")
                                );
                                var html = `<p class="texto1">Olá, <strong>${infoCustomer.NAME}</strong>.</p>

                <p class="texto1">Infelizmente sua empresa ainda não tem cadastro na <strong>Way Digital</strong>.</p>
                
                <p class="texto1">Para contratar o plano escolhido, solicite ao setor responsável da empresa
                para que efetue o cadastro em nosso sistema.</p>
                
                <p class="texto1">Assim, você e todos os funcionários poderão ter acesso aos benefícios exclusivos dos
                planos <strong>Way Digital</strong>.</p>
                
                <p class="texto1">Clique abaixo para visualizar uma cartilha passo a passo de como cadastrar a empresa.</p>
                
                <fieldset style="padding-bottom:200px">
                  <input type="button" name="next" class="next action-button" value="Como cadastrar Empresa" />
                  <input type="button" id="btnCancelaCart" class="previous action-button-previous" value="Cancelar">
                </fieldset>
                `;
                                $("#msgEmpresaNaoCadastrada").html(html);
                                $("#msgEmpresaNaoCadastrada").show(500);
                                $("#loading").hide();
                            }
                        }
                    }
                });
            }
        });

        function MascaraCNPJ(valorDoTextBox) {
            valorDoTextBox = valorDoTextBox.replace(
                /^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/,
                "$1.$2.$3/$4-$5"
            );
            return valorDoTextBox;
        }
    }
    //fim etapa consulta

    //funções etapa 2
    if (localStorage.getItem("currentStep") === "escolher_plano") {

        console.log("carregando planos");
            carregaPlanos2();


        //escolha plano
        $("#planosToShow").on("click", ".choosePlan", function(e) {
            var plano = JSON.parse($(this).attr("data-plano"));

            $(".nomePlan").text(plano.NAME);
            $(".precoPlan").text(plano.PRICE);
            $(".picture-plan").attr("src", plano.imgSrc);

            localStorage.setItem("plano", JSON.stringify(plano));

            $(this).removeClass("btn-primary");
            setTimeout(() => {
                $(this).addClass("btn-success");

                window.location.href = "ficha_empresa.php";
            }, 500);
            $("#btnE2").removeAttr("disabled");
            if (window.mobileCheck) {
                $("#planos").hide(500);
                $(".corpo2").show(500)
            }
        });

        $("#alteraPlano").click(function() {
            localStorage.removeItem("plano");
            $("#planos2").hide(500);
            $(".corpo2").hide(500);
            $("#btnE2").attr("disabled", "disabled");
            $("#loading").show();
            setTimeout(() => {
                carregaPlanos();
            }, 200);
            if (window.mobileCheck) {
                $("#planos").show();
            }
        });

        $("#btnE2").click(function() {
            var plano = JSON.parse(localStorage.getItem("plano"));
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var tipoFluxo = localStorage.getItem("fluxo");
            infoCustomer.PLANO_ESCOLHIDO = plano;
            localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
            if (tipoFluxo == "beneficiario") {
                localStorage.setItem("currentStep", "consultaCnpjFunc");
                window.location.href = "funcionario_consulta_cnpj.php";
            } else {
                localStorage.setItem("currentStep", "3");
                window.location.href = "3_mps.php";
            }
            localStorage.removeItem("plano");
        });
    }


    //funções etapa 2
    if (localStorage.getItem("currentPage") === "2") {
        $("#loading").show(function() {
            carregaPlanos();
        });

        //escolha plano
        $("#planosToShow").on("click", ".choosePlan", function(e) {
            var plano = JSON.parse($(this).attr("data-plano"));

            $(".nomePlan").text(plano.NAME);
            $(".precoPlan").text(plano.PRICE);
            $(".picture-plan").attr("src", plano.imgSrc);

            localStorage.setItem("plano", JSON.stringify(plano));

            $(this).removeClass("btn-primary");
            setTimeout(() => {
                $(this).addClass("btn-success");
                mostrar2();
            }, 500);
            $("#btnE2").removeAttr("disabled");
            if (window.mobileCheck) {
                $("#planos").hide(500);
                $(".corpo2").show(500)
            }
        });

        $("#alteraPlano").click(function() {
            localStorage.removeItem("plano");
            $("#planos2").hide(500);
            $(".corpo2").hide(500);
            $("#btnE2").attr("disabled", "disabled");
            $("#loading").show();
            setTimeout(() => {
                carregaPlanos();
            }, 200);
            if (window.mobileCheck) {
                $("#planos").show();
            }
        });

        $("#btnE2").click(function() {
            var plano = JSON.parse(localStorage.getItem("plano"));
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var tipoFluxo = localStorage.getItem("fluxo");
            infoCustomer.PLANO_ESCOLHIDO = plano;
            localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
            if (tipoFluxo == "beneficiario") {
                localStorage.setItem("currentStep", "consultaCnpjFunc");
                window.location.href = "funcionario_consulta_cnpj.php";
            } else {
                localStorage.setItem("currentStep", "3");
                window.location.href = "3_mps.php";
            }
            localStorage.removeItem("plano");
        });
    }
    //fim etapa 2

    //funções etapa 3
    if (localStorage.getItem("currentPage") === "3") {
        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomePlan").text(plano.NAME);
            $(".nomeTit").text(infoCustomer.NAME);
            $(".precoPlan").text(plano.PRICE);
            $(".picture-plan").attr("src", plano.imgSrc);

            $("#iframeMPS").attr(
                "src",
                "https://drive.google.com/viewerng/viewer?embedded=true&url=https://way.digital/Documents/mpspadrao/MPS_PADRAO.pdf"
            );

            setTimeout(() => {
                $("#loading").hide();
            }, 800);
        }

        $("#btnE2").click(function() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            delete infoCustomer.PLANO_ESCOLHIDO;
            localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
            localStorage.setItem("currentStep", "2");

            window.location.href = "2_escolha_seu_plano.php";
        });

        $("#btnE3").click(function() {
            if ($("#declaraMPS").is(":checked")) {
                var id_operadora = $("#idOperadora").val();
                var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
                localStorage.setItem("currentStep", "4");

                window.location.href = "4_incluir_dependentes.php";
            } else {
                $.alert({
                    title: "Alerta!",
                    theme: "modern",
                    content: "É necessário marcar a caixa de seleção informando que leu e está ciente."
                });
            }
        });

        // $("#declaraMPS").change(function () {
        //   if ($(this).is(":checked")) {
        //     $("#btnE3").removeAttr("disabled");
        //   } else {
        //     $("#btnE3").addAttr("disabled", "disabled");
        //   }
        // });

        carregaPlano();
    }
    //fim etapa 3

    //funções etapa finaliza simulação
    if (localStorage.getItem("currentPage") === "finalizar_simulacao") {
        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomeTit").text(infoCustomer.NAME);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);
            setTimeout(() => {
                $("#loading").hide();
            }, 500);
        }

        carregaPlano();

        $("#btnCancelaSimulacao").click(function() {
            localStorage.clear();
            setTimeout(() => {
                window.location.href = "simulacao_pme.php";
            }, 500);
        });

        $("#btnCadastrarEmpresa").click(function() {
            localStorage.setItem("fluxo", "cadastraEmpresa");
            localStorage.setItem("currentStep", "cadastrar_empresa");
            setTimeout(() => {
                window.location.href = "cadastrar_empresa.php";
            }, 500);
        });
    }

    //funcoes pagina cadastrar empresa
    if (localStorage.getItem("currentPage") === "cadastrar_empresa") {
        if (localStorage.getItem("infoCustomer") !== null) {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            $("#cnpj").val(infoCustomer.CNPJ);
            setTimeout(() => {
                $("#loading").hide();
            }, 500);
        }

        $("#btnCancelaCadastro").click(function() {
            localStorage.clear();
            setTimeout(() => {
                window.location.href = "simulacao_pme.php";
            }, 500);
        });

        $("#btnContinuaCadastro").click(function() {
            if ($("#empresa6meses").is(":checked")) {
                localStorage.setItem("currentStep", "escolher_plano");
                window.location.href = "ficha_empresa.php";
            } else {
                $.alert({
                    title: "Alerta!",
                    theme: "modern",
                    content: "Sua empresa deve ter mais de 6 meses de abertura para prosseguir com o cadastro."
                });
            }
        });
    }


    $("#btnCadastraEmpresa").click(function() {  


               
        const cnpj = $("#cnpj").val();
        const razao_social = $("#razao_social").val();
        const nome_fantasia = $("#nome_fantasia").val();
        const cep = $("#cep").val();
        const endereco = $("#end").val();
        const numTit = $("#numTit").val();
        const compTit = $("#compTit").val();
        const inc_est = $("#inc_est").val();
        const inc_muni = $("#inc_muni").val();
        const tel = $("#tel").val();
        const emailTit = $("#emailTit").val();
        const nome_soc = $("#nome_soc").val();
        const cpf_soc = $("#cpf_soc").val();


        if(!razao_social || !nome_fantasia ){
            alert("Razão Social é obrigatório");
            return;
        }


     function persisteDados() {
            if (
                localStorage.getItem("deal_id") !== null ||
                localStorage.getItem("contact_id") !== null
            ) {
                // carregaPlano();
                return;
            } else {
                if (localStorage.getItem("currentStep") === null) return;
            }

            let infoCompany = { cnpj: cnpj, email: emailTit, razao_social: razao_social };
            localStorage.setItem('infoCompany', JSON.stringify(infoCompany));
            var data = new FormData();
            data.append("frmType", "addDeal");
            data.append("payload", { cnpj: cnpj, email: emailTit, razao_social: razao_social });
            data.append("lead_id", localStorage.getItem("lead_id"));

            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(data) {
                    // if(data.result){
                    //     const response = data.result[0];

                    //     if(response["ID"]){

                    //         localStorage.setItem("deal_id", response["ID"]);

                    //     }
                    // }
                    // if (result.error === "false") {
                    //     localStorage.setItem("contact_id", result.contact_id);
                    //     localStorage.setItem("deal_id", result.deal_id);
                    //     var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                    //     delete infoCustomer.password;
                    //     localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));

                    //     localStorage.setItem("currentStep", "8");
                    //     window.location.href = "8_ficha_dependentes.php";
                    //     //carregaPlano();
                    //     //$("#loading").hide();
                    // } else {
                    //     alert("erro");
                    //     $("#loading").hide();
                    // }
                }
            });
        }




        var data = new FormData();

        data.append("frmType", "cadastrarEmpresa");
        data.append("cnpj", cnpj);
        data.append("razao_social", razao_social);
        data.append("nome_fantasia", nome_fantasia);
        data.append("cep", cep);
        data.append("endereco", endereco);
        data.append("numTit", numTit);
        data.append("compTit", compTit);
        data.append("inc_est", inc_est);
        data.append("inc_muni", inc_muni);
        data.append("tel", tel);
        data.append("emailTit", emailTit);
        data.append("nome_soc", nome_soc);
        data.append("cpf_soc", cpf_soc);

         setTimeout(() => {
                $.ajax({
                    type: "POST",
                    enctype: "multipart/form-data",
                    url: "api.php",
                    data: data,
                    async: false,
                    processData: false, // impedir que o jQuery tranforma a "data" em querystring
                    contentType: false, // desabilitar o cabeçalho "Content-Type"
                    cache: false, // desabilitar o "cache"
                    dataType: "json",
                    success: function(result) {
                        console.log(result);
                        if (result.error) {
                            alert("erro, tente novamente.");
                            $("#loading").hide();
                        } else {

                            persisteDados();

                            localStorage.setItem("currentStep", "envio_documentos");
                            localStorage.setItem("cnpjCadastrado", cnpj);
                            window.location.href = "envia_documentos.php";
                            $("#loading").hide();
                        }
                    }
                });
            }, 500);

        // console.log("cnpj");
        // // if ($("#empresa6meses").is(":checked")) {
        // //     localStorage.setItem("currentStep", "ficha_empresa");
        // //     window.location.href = "ficha_empresa.php";
        // // } else {
        // //     $.alert({
        // //         title: "Alerta!",
        // //         theme: "modern",
        // //         content: "Sua empresa deve ter mais de 6 meses de abertura para prosseguir com o cadastro."
        // //     });
        // // }
    });

    function buscaCnpj(cnpj) {

            var hasCompany = false;

            var data = new FormData();
            data.append("frmType", "buscaEmpresa");
            data.append("cnpj", cnpj);

            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                   
                    if(result.error === "false"){

                        if(result.hasCompany){

                            localStorage.setItem("currentStep", "empresa_cadastrada");
                            localStorage.setItem("cnpj", cnpj);

                            window.location.href = "empresa_cadastrada.php";       

                        }else{

                        localStorage.setItem("currentStep", "cadastro_empresa_f1");
                        localStorage.setItem("cnpj", cnpj);

                        window.location.href = "cadastrar_empresa_f1.php";            

                        }
                    }else{
                        
                        localStorage.setItem("currentStep", "cadastro_empresa_f1");
                        localStorage.setItem("cnpj", cnpj);

                        window.location.href = "cadastrar_empresa_f1.php";  
                    }

                }
            });

            
            return hasCompany;

    }



    $("#btnContinuaCadastroCNPJ").click(function() {  


  
            const cnpj = $("#cnpj").val();
            const cnpjCadastrado = buscaCnpj(cnpj);

    });

    if (localStorage.getItem("currentStep") === "cadastro_empresa_f1") {
       
       const cnpj = localStorage.getItem("cnpj");
       $("#cnpj").val(cnpj);
       // window.location.href = "cadastrar_empresa_f1.php";


    }


    if (localStorage.getItem("currentPage") === "ficha_empresa") {
       
       const cnpj = localStorage.getItem("cnpj");
       $("#cnpj").val(cnpj);


    }

    //funções etapa 4
    if (localStorage.getItem("currentPage") === "4") {
        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomePlan").text(plano.NAME);
            $(".somaPlanos").text(plano.PRICE);
            $(".picture-plan").attr("src", plano.imgSrc);
            setTimeout(() => {
                $("#loading").hide();
            }, 500);
        }

        $("#btnE4").click(function() {
            var qtDep = parseInt($(".qtDep").text());
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            infoCustomer.UF_CRM_1580318169 = qtDep > 0 ? "1" : "0";
            localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
            localStorage.setItem("qtDep", $(".qtDep").text());

            if (localStorage.getItem("fluxo") === "simulacao") {
                localStorage.setItem("currentStep", "finalizar_simulacao");
                window.location.href = "finalizar_simulacao.php";
            } else {
                localStorage.setItem("currentStep", "5");
                window.location.href = "5_ficha_titular.php";
            }
        });

        $("#btnSemDependente").click(function() {
            $.confirm({
                title: "Confirmação.",
                content: "Tem certeza?",
                theme: "modern",
                buttons: {
                    Sim: function() {
                        var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                        infoCustomer.UF_CRM_1580318169 = "0";
                        var somaPlanos = parseFloat($(".somaPlanos").text()).toFixed(2);
                        infoCustomer.SUBTOTAL = somaPlanos;
                        localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
                        localStorage.setItem("qtDep", "0");
                        if (localStorage.getItem("fluxo") === "simulacao") {
                            localStorage.setItem("currentStep", "finalizar_simulacao");
                            window.location.href = "finalizar_simulacao.php";
                        } else {
                            localStorage.setItem("currentStep", "5");
                            window.location.href = "5_ficha_titular.php";
                        }
                    },
                    Não: function() {
                        //nothing
                    }
                }
            });
        });

        $("#btnAddDep").click(function() {
            var qtdep = parseInt($(".qtDep").text());
            var dataToAdd = $("#data_nasc").val();

            if (qtdep >= 5) {
                alert("Você já adicionou o máximo permitido de 5 dependentes.");
                return false;
            }

            if (dataToAdd == "") return false;

            //
            $.confirm({
                title: "Inclusão Dependente",
                theme: "modern",
                content: "" +
                    '<form action="" class="formNameK">' +
                    '<div class="form-group">' +
                    "<label>Informe o nome do Dependente</label>" +
                    '<input type="text" placeholder="Nome Dependente" class="nameDepAdd form-control" required />' +
                    "</div>" +
                    "</form>",
                buttons: {
                    formSubmit: {
                        text: "Salvar",
                        btnClass: "btn-blue",
                        action: function() {
                            var name = this.$content.find(".nameDepAdd").val().toUpperCase();
                            if (!name) {
                                $.alert("Informe um nome.");
                                return false;
                            }
                            doAddDep(name);
                        }
                    },
                    Cancelar: function() {
                        $("#data_nasc").val("");
                    }
                },
                onContentReady: function() {
                    // bind to events
                    this.$content.find(".nameDepAdd").focus();
                    var jc = this;
                    this.$content.find(".formNameK").on("submit", function(e) {
                        // if the user submits the form by pressing enter in the field.
                        e.preventDefault();
                        jc.$$formSubmit.trigger("click"); // reference the button and click it
                    });
                }
            });
            //

            function doAddDep(nome) {
                if (dataToAdd != "") {
                    dataToShow = dataToAdd.split("-");
                    dataToShow =
                        dataToShow[2] + "/" + dataToShow[1] + "/" + dataToShow[0];
                    var elem =
                        '<tr class="tdDep_' +
                        (qtdep + 1) +
                        '">\
                        <td scope="row">' +
                        dataToShow +
                        "</td>\
                    <td>" +
                        nome +
                        '</td><td><img width="24" class="delDep" src="assets/img/b_drop.png" /></td>\
                    <input type="hidden" name="data_nasc[]" value="' +
                        dataToAdd +
                        '" />\
                    <input type="hidden" name="nome_dep[]" value="' +
                        nome +
                        '" />\
                      </tr>';
                    $(".datas_deps").append(elem);
                    qtdep++;
                    $("#data_nasc").val("");
                    $(".qtDep").text(qtdep);

                    if (qtDep == 5) $("#data_nasc").attr("disabled", "disabled");

                    //troca botão
                    $("#btnSemDependente").hide();
                    $("#btnEncerraAddDep").show();
                }
            }
        });

        function encerraAddDep() {
            $("#loading").show();
            setTimeout(() => {
                var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                var plano = infoCustomer.PLANO_ESCOLHIDO;
                var qtdep = $(".qtDep").text();
                var resumoPlano = `
        <hr />
        <p class="texto1">Resumo Titular</p>
        Titular: R$ ${new Intl.NumberFormat("de-DE", {
          currency: "EUR"
        }).format(parseFloat(plano.PRICE))}
        <hr />
        <p class="texto1">Resumo Dependentes</p>
        `;
                infoCustomer.UF_CRM_1580318169 = qtdep;

                infoCustomer.dependentes = new Object();

                //iterate deps, call api, get id produto e price
                var dep_i = 1;
                var somaPlanos = parseFloat(plano.PRICE);
                $('input[name^="data_nasc[]"]').each(function() {
                    var dataNasc = $(this).val();
                    var nomeDep = $(this)
                        .closest("tr")
                        .find('input[name^="nome_dep[]"]')
                        .val();
                    var idade = CalcularIdade(dataNasc);
                    var data = new FormData();
                    data.append("frmType", "buscaPlanoDep");
                    data.append("uf", infoCustomer.UF_CRM_1582805357);
                    data.append("plano_escolhido", JSON.stringify(plano));
                    data.append("idade", idade);

                    $.ajax({
                        type: "POST",
                        enctype: "multipart/form-data",
                        url: "api.php",
                        data: data,
                        async: false,
                        processData: false, // impedir que o jQuery tranforma a "data" em querystring
                        contentType: false, // desabilitar o cabeçalho "Content-Type"
                        cache: false, // desabilitar o "cache"
                        dataType: "json",
                        success: function(result) {
                            if (result.error === "false") {
                                var dependente = new Object();
                                dependente.nome = nomeDep;
                                dependente.data_nasc = dataNasc;
                                dependente.id_plano = result.plano.ID;
                                dependente.price_plano = result.plano.PRICE;
                                dependente.idade = idade;

                                resumoPlano += `<span data-dep="${dep_i}" >Dependente ${dep_i} <i style="color:#006da8" class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="${nomeDep}"></i>: R$ ${new Intl.NumberFormat(
                  "de-DE",
                  {
                    currency: "EUR"
                  }
                ).format(
                  parseFloat(result.plano.PRICE)
                )} <img width="20" class="delDepAdded pointer" data-dep="${dep_i}" data-depNome="${nomeDep}" src="assets/img/b_drop.png" /><br></span>`;

                                somaPlanos += parseFloat(result.plano.PRICE);

                                infoCustomer.dependentes[dep_i] = dependente;
                            } else {
                                alert("Erro, recarregando página.");
                                window.location.reload();
                            }
                        }
                    });
                    dep_i++;
                });

                infoCustomer.SUBTOTAL = somaPlanos;
                $(".somaPlanos").text(
                    " R$ " +
                    new Intl.NumberFormat("de-DE", { currency: "EUR" }).format(
                        somaPlanos
                    )
                );

                $(".resumoPlanos").html(resumoPlano + "<hr />");
                $('[data-toggle="tooltip"]').tooltip();

                $("#btnEncerraAddDep").hide();
                $("#btnE4").removeAttr("disabled");
                $("#btnE4").show();

                //altera texto
                $(".msgIncDep").html(
                    `<strong>${infoCustomer.NAME}</strong>, segue os valores atualizados, totalizando os planos a serem contratados.`
                );

                setTimeout(() => {
                    localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
                    $(".delDep").remove();
                    $(".AddDepTR").html("");
                    $("#loading").hide();
                }, 500);
            }, 500);

            // localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
            // localStorage.setItem("qtDep", qtdep);
            // localStorage.setItem("currentStep", "5");
            // window.location.href = "5_resumo.php";
        }

        $(".resumoPlanos").on("click", ".delDepAdded", function() {
            var dep = $(this).attr("data-dep");
            $.confirm({
                title: "Confirmação.",
                theme: "modern",
                content: `Tem certeza que deseja remover o dependente ${$(this).attr(
          "data-depNome"
        )}?`,
                buttons: {
                    Sim: function() {
                        delAndUpdateDep(dep);
                    },
                    Não: function() {}
                }
            });
        });

        function delAndUpdateDep(dep) {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var somaPlanos = parseFloat(infoCustomer.SUBTOTAL);
            somaPlanos -= parseFloat(infoCustomer.dependentes[dep].price_plano);

            $('span[data-dep="' + dep + '"]').remove();
            $(".tdDep_" + dep).remove();

            infoCustomer.SUBTOTAL = somaPlanos;
            $(".somaPlanos").text(
                " R$ " +
                new Intl.NumberFormat("de-DE", { currency: "EUR" }).format(somaPlanos)
            );
            delete infoCustomer.dependentes[dep];

            //realoca array dep
            // infoCustomer.dependentes = new Object();
            var dependentes_new = new Object();
            var dep_new = 1;
            $.each(infoCustomer.dependentes, function() {
                var dependente = new Object();
                dependente.nome = this.nome;
                dependente.data_nasc = this.data_nasc;
                dependente.id_plano = this.id_plano;
                dependente.price_plano = this.price_plano;
                dependente.idade = this.idade;
                dependentes_new[dep_new] = dependente;
                dep_new++;
            });
            delete infoCustomer.dependentes;
            infoCustomer.dependentes = dependentes_new;

            var qtdep = parseInt($(".qtDep").text());
            qtdep--;
            $(".qtDep").text(qtdep);

            localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
        }

        $("#btnEncerraAddDep").click(function() {
            $.confirm({
                title: "Confirmação.",
                theme: "modern",
                content: "Tem certeza?",
                buttons: {
                    Sim: function() {
                        encerraAddDep();
                    },
                    Não: function() {}
                }
            });
        });

        $(".datas_deps").on("click", ".delDep", function(e) {
            var qtdep = parseInt($(".qtDep").text());
            $(this).closest("tr").remove();
            qtdep--;
            $(".qtDep").text(qtdep);
            $("#data_nasc").val("");
            if (qtdep == 0) {
                //troca botão
                $("#btnEncerraAddDep").hide();
                $("#btnSemDependente").show();
            }
        });

        // carregaPlano();
        //if (localStorage.getItem("deal_id") === null) persisteDados();
        carregaPlano();
    }
    //fim etapa 4

    //funções etapa 5
    if (localStorage.getItem("currentPage") === "5") {
        $("#btnE5").click(function() {
            //todo
        });

        //inputs numericos
        $("#numTit,#cpfTit,#rgTit,#cardSusTit").inputFilter(function(value) {
            return /^\d*$/.test(value); // Allow digits only, using a RegExp
        });
        //fim input

        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomeTit").text(infoCustomer.NAME);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);

            /**
             * inicializa form com campos ja coletados
             */
            $("#ufTit").html(
                "<option selected value=" +
                infoCustomer.UF_CRM_1582805357 +
                ">" +
                infoCustomer.UF_CRM_1582805357 +
                "</option"
            );
            //  $("#ufTit option[value=" + infoCustomer.UF_CRM_1582805357 + "]").attr(
            //   "selected",
            //   "selected"
            // );
            $("input#nomeTit").val(infoCustomer.NAME);
            $("input#emailTit").val(infoCustomer.EMAIL);
            $("input#profissaoTit").val(infoCustomer.UF_CRM_1578521646);
            $("input#dataNascTit").val(infoCustomer.UF_CRM_1578521856);
            $("input#cepTit").val(infoCustomer.UF_CRM_1578510751);
            $("input#endTit").val(infoCustomer.UF_CRM_1578510781);
            /**
             * fim inicialização
             */

            setTimeout(() => {
                $("#loading").hide();
            }, 500);
        }

        carregaPlano();
        //fim carregamento pagina

        /**
         * Eventos
         */
        //forma pagamento
        $("#formaPgto").on("change", function(e) {
            var opcao = $(this).val();
            if (opcao === "") {
                $(".divPgto").hide();
                $(".dadosBanco").html("");
                $(".boletoDigitalDados").html("");
            } else if (opcao === "1") {
                /* Boleto */
                $(".dadosBanco").html("");
                $(".boletoDigitalDados").html("");
                var htmlBoleto =
                    '\
        <div class="form-check form-check-inline">\
          <input class="form-check-input" type="checkbox" id="aceitaCobDigital" value="1">\
          <label class="form-check-label" for="aceitaCobDigital">Autorizo o envio do boleto por E-mail e SMS em substituição do envio pelos correios.</label>\
        </div>';
                $(".boletoDigital").html(htmlBoleto);
                $(".divPgto").show();
            } else if (opcao === "2") {
                /* Débito em conta */
                $(".dadosBanco").html("");
                $(".boletoDigitalDados").html("");
                $(".boletoDigital").html("");
                var htmlDebito =
                    '\
          <div class="form-row">\
            <div class="form-group col-md-12">\
            <label for="bancoDebito">Banco</label>\
            <select id="bancoDebito" class="form-control" required>\
                <option value="">Escolha</option>\
                <option value="001">BANCO DO BRASIL</option>\
                <option value="341">ITAÚ</option>\
                <option value="033">SANTANDER</option>\
            </select>\
            <small class="form-text text-muted">Se o seu banco não está nessa lista, por gentileza utilize boleto como forma de pagamento.</small>\
            </div>\
            <div class="form-group col-md-6">\
              <label for="bancoAg">Agência</label>\
              <input type="text" max-length="4" class="form-control" id="bancoAg" placeholder="Agência sem dígito" required>\
            </div>\
            <div class="form-group col-md-6">\
              <label for="bancoDigAg">Digito Agência</label>\
              <input type="text" max-length="1" class="form-control" id="bancoDigAg" placeholder="Dígito Agência" required>\
            </div>\
            <div class="form-group col-md-6">\
              <label for="bancoConta">Conta</label>\
              <input type="text" class="form-control" id="bancoConta" placeholder="Conta sem dígito" required>\
            </div>\
            <div class="form-group col-md-6">\
              <label for="bancoDigConta">Digito Conta</label>\
              <input type="text" max-length="1" class="form-control" id="bancoDigConta" placeholder="Dígito Conta" required>\
            </div>\
          </div>';
                $(".dadosBanco").html(htmlDebito);
                $(".divPgto").show();
            }
        });

        $("#frmFichaTit").on("click", "#aceitaCobDigital", function() {
            if ($(this).is(":checked")) {
                $(".boletoDigitalDados").hide(500);
                $(".boletoDigitalDados").html(
                    `<div class="row">
            <div class="form-group col-md-6">
              <label for="bancoConta">E-mail cobrança</label>
              <input type="email" class="form-control" id="emailCob" placeholder="E-MAIL COBRANÇA" required>
            </div>
            <div class="form-group col-md-6">
              <label for="bancoConta">Celular cobrança SMS</label>
              <input type="text" class="form-control" id="celCob" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="Celular Cobrança SMS" required>
            </div>
           </div>
          `
                );
                $(".boletoDigitalDados").show(500);
            } else {
                $(".boletoDigitalDados").hide(500);
                $(".boletoDigitalDados").html("");
            }
        });

        $("#cpfTit").blur(function() {
            var cpf = $(this).val();

            if (validaCpf(cpf) === false) {
                return;
            }

            var data = new FormData();
            data.append("frmType", "checkUserExists");
            data.append("cpf", cpf);

            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    if (result.error === "false") {
                        if (result.hasAccount > 0) {
                            $(".infoAreaCliente").text(
                                "Vi que já existe uma conta para o seu cpf, ao término desse processo, você poderá acessar os dados dessa proposta entrando com seu cpf e senha previamente cadastrada, ou clique em esqueci minha senha na página de login."
                            );
                            $(".areaClientePwd").html("");
                            $("#hasAccount").val("1");
                        }
                    }
                }
            });
        });

        //submit form
        $("#frmFichaTit").submit(function(e) {
            e.preventDefault();
            var continua = true;
            //checa se é boleto, se for, lembrete cobdigital
            var formaPgto = $("#formaPgto").val();
            var bypassCobDigital =
                $("#naoAceitaCobDigital").length > 0 ? true : false;
            if (formaPgto === "1" && bypassCobDigital === false) {
                continua = false;
                if ($("#aceitaCobDigital").prop("checked") == false) {
                    $.confirm({
                        title: "Lembrete.",
                        theme: "modern",
                        content: "Deseja substituir a cobrança impressa por envio do boleto por E-mail e SMS?",
                        buttons: {
                            Sim: function() {
                                $("#aceitaCobDigital").trigger("click");
                                this.close();
                                return false;
                            },
                            Não: function() {
                                $(".boletoDigital").append(
                                    '<input type="hidden" name="naoAceitaCobDigital" id="naoAceitaCobDigital" value="true" />'
                                );
                                setTimeout(() => {
                                    $("#frmFichaTit").submit();
                                }, 500);
                            }
                        }
                    });
                } else {
                    continua = true;
                }
            }

            if (!continua) return false;
            //fim checa boleto digital

            $("#loading").show();
            var nome = $.trim($("#nomeTit").val().toUpperCase());
            var arrNome = nome.split(" ");
            var cep = $.trim($("#cepTit").val());
            var data_nascimento = $.trim($("#dataNascTit").val());
            var email = $.trim($("#emailTit").val());
            //var uf = $.trim($("#ufTit").val());
            var endTit = $.trim($("#endTit").val().toUpperCase());
            var numTit = $.trim($("#numTit").val());
            var compTit = $.trim($("#compTit").val().toUpperCase());
            var cpfTit = $.trim($("#cpfTit").val());
            var rgTit = $.trim($("#rgTit").val());
            var sexoTit = $.trim($("#sexoTit").val());
            var estCivilTit = $.trim($("#estCivilTit").val());
            var munNascTit = $.trim($("#munNascTit").val().toUpperCase());
            var nomeMaeTit = $.trim($("#nomeMaeTit").val().toUpperCase());
            var cardSusTit = $.trim($("#cardSusTit").val());
            var hasAccount = $("#hasAccount").val();
            if (hasAccount == "0") {
                var senhaTit = $("#senhaTit").val();
                var confirmaSenhaTit = $("#confirmaSenhaTit").val();
            }

            var msgErro = "Verifique os seguintes campos:<br>";

            //inicializa formaPgto
            var cobBoleto = "0";
            var cobDigital = "0";
            var codigoBanco = "";
            var nomeBanco = "";
            var agencia = "";
            var digAgencia = "";
            var conta = "";
            var digConta = "";
            var cobDebito = "0";
            var emailCob = "";
            var celCob = "";

            //formaPgto
            if (formaPgto === "") {
                continua = false;
                msgErro += "\nForma de pagamento.";
            } else if (formaPgto === "1") {
                cobBoleto = "1";
                if ($("#aceitaCobDigital").is(":checked")) {
                    cobDigital = 1;
                    emailCob = $.trim($("#emailCob").val());
                    if (isEmpty(emailCob) || isBlank(emailCob) || !isEmail(emailCob))
                        continua = false;
                    celCob = $.trim($("#celCob").val());
                    if (isEmpty(celCob) || isBlank(celCob) || celCob.length !== 15)
                        continua = false;
                }
            } else if (formaPgto === "2") {
                cobBoleto = "0";
                cobDigital = "0";
                cobDebito = "1";

                var bancoEscolhido = $("#bancoDebito").val();
                if (bancoEscolhido === "") {
                    continua = false;
                    msgErro += "\nBanco.<br>";
                } else {
                    codigoBanco = bancoEscolhido;
                    nomeBanco = $("#bancoDebito option:selected").text();
                }

                agencia = $("#bancoAg").val();
                if (agencia === "" || agencia.toString().length > 4) {
                    continua = false;
                    msgErro += "\nAgência.<br>";
                }

                digAgencia = $("#bancoDigAg").val();
                if (digAgencia === "" || digAgencia.toString().length > 1) {
                    continua = false;
                    msgErro += "\nDígito Agência.<br>";
                }

                conta = $("#bancoConta").val();
                if (conta === "") {
                    continua = false;
                    msgErro += "\nConta.<br>";
                }

                digConta = $("#bancoDigConta").val();
                if (digConta === "" || digConta.toString().length > 1) {
                    continua = false;
                    msgErro += "\nDígito Conta.<br>";
                }
            }

            if (hasAccount == "0") {
                if (
                    senhaTit !== confirmaSenhaTit ||
                    isBlank(senhaTit) ||
                    isEmpty(senhaTit) ||
                    isBlank(confirmaSenhaTit) ||
                    isEmpty(confirmaSenhaTit)
                ) {
                    continua = false;
                    msgErro += "Senhas não conferem.<br>";
                }
            }
            if (isEmpty(nome) || isBlank(nome)) {
                continua = false;
                msgErro += "Nome.<br>";
            }
            if (arrNome.length < 2) {
                continua = false;
                msgErro += "Deve informar nome e sobrenome.<br>";
            }
            if (isEmpty(cep) || isBlank(cep) || cep.length !== 8) {
                continua = false;
            }
            if (
                isEmpty(data_nascimento) ||
                isBlank(data_nascimento) ||
                data_nascimento.length !== 10
            )
                continua = false;
            if (isEmpty(email) || isBlank(email) || !isEmail(email)) {
                continua = false;
                msgErro += "\nEmail.<br>";
            }
            if (isEmpty(endTit) || isBlank(endTit)) {
                continua = false;
                msgErro += "\nEndereço.<br>";
            }
            if (isEmpty(compTit) || isBlank(compTit)) {
                continua = false;
                msgErro += "\nComplemento/Ponto de Referência.<br>";
            }
            if (isEmpty(cpfTit) || isBlank(cpfTit) || validaCpf(cpfTit) === false) {
                continua = false;
                msgErro += "\nCPF.<br>";
            }
            if (isEmpty(rgTit) || isBlank(rgTit)) {
                continua = false;
                msgErro += "\nRG.<br>";
            }
            if (isEmpty(munNascTit) || isBlank(munNascTit)) {
                continua = false;
                msgErro += "\nMunicipio Nascimento.<br>";
            }
            if (isEmpty(nomeMaeTit) || isBlank(nomeMaeTit)) {
                continua = false;
                msgErro += "\nNome Mãe.";
            }
            if (isEmpty(cardSusTit) || isBlank(cardSusTit)) {
                continua = false;
                msgErro += "\nCartão SUS.";
            }

            //continua = false;

            if (!continua) {
                $("#loading").hide();
                $.alert({
                    title: "Alerta!",
                    theme: "modern",
                    content: `<div style="color:red" align="left">${msgErro}</div>`
                });
            } else {
                var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                infoCustomer.NAME = nome.toUpperCase();
                infoCustomer.EMAIL = email;
                infoCustomer.UF_CRM_1578510751 = cep;
                infoCustomer.UF_CRM_1578510781 = endTit;
                infoCustomer.UF_CRM_1578510927 = numTit;
                infoCustomer.UF_CRM_1578510945 = compTit.toUpperCase();
                infoCustomer.UF_CRM_1578521943 = munNascTit.toUpperCase();
                infoCustomer.UF_CRM_1578521726 = nomeMaeTit.toUpperCase();
                infoCustomer.UF_CRM_1578521887 = sexoTit;
                infoCustomer.UF_CRM_1578521815 = estCivilTit;
                infoCustomer.UF_CRM_1583766955763 = cardSusTit;
                infoCustomer.UF_CRM_1578521601 = cpfTit;
                infoCustomer.UF_CRM_1583444098092 = rgTit;

                //info pgto
                infoCustomer.UF_CRM_1581529436 = cobBoleto;
                infoCustomer.UF_CRM_1581529045 = cobDigital;
                infoCustomer.UF_CRM_1581529498 = cobDebito;
                infoCustomer.UF_CRM_1581529934 = codigoBanco;
                infoCustomer.UF_CRM_1581529962 = nomeBanco;
                infoCustomer.UF_CRM_1581530003 = agencia;
                infoCustomer.UF_CRM_1581530045 = digAgencia;
                infoCustomer.UF_CRM_1581530083 = conta;
                infoCustomer.UF_CRM_1581530136 = digConta;
                infoCustomer.UF_CRM_1581529316 = celCob;
                infoCustomer.UF_CRM_1581529333 = emailCob;

                //info Password
                if (hasAccount == 0) infoCustomer.password = Base64.encode(senhaTit);

                localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));

                $.dialog({
                    title: "Aguarde!",
                    content: "Estamos processando as informações!"
                });

                localStorage.setItem("currentStep", "6");
                window.location.href = "6_resumo.php";
            }
        });
    }
    //fim etapa 5

    //funções etapa 6
    if (localStorage.getItem("currentPage") === "6") {
        //inputs numericos
        $("#numEnt").inputFilter(function(value) {
            return /^\d*$/.test(value); // Allow digits only, using a RegExp
        });
        //fim input

        function persisteDados() {
            if (
                localStorage.getItem("deal_id") !== null ||
                localStorage.getItem("contact_id") !== null
            ) {
                carregaPlano();
                return;
            } else {
                if (localStorage.getItem("currentStep") === null) return;
            }

            var data = new FormData();
            data.append("frmType", "converteLead");
            data.append("payload", localStorage.getItem("infoCustomer"));
            data.append("lead_id", localStorage.getItem("lead_id"));

            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    if (result.error === "false") {
                        localStorage.setItem("contact_id", result.contact_id);
                        localStorage.setItem("deal_id", result.deal_id);
                        var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                        delete infoCustomer.password;
                        localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));

                        localStorage.setItem("currentStep", "8");
                        window.location.href = "8_ficha_dependentes.php";
                        //carregaPlano();
                        //$("#loading").hide();
                    } else {
                        alert("erro");
                        $("#loading").hide();
                    }
                }
            });
        }

        function base64ToBlob(base64) {
            var mime = mime || "";
            var file_parts = base64.split(";");
            mime = file_parts[0].split(":");
            mime = mime[1];
            localStorage.setItem("proofEntityAttachmentMime", mime);
            base64 = file_parts[1].split(",");
            base64 = base64[1];
            var sliceSize = 1024;
            var byteChars = window.atob(base64);
            var byteArrays = [];

            for (
                var offset = 0, len = byteChars.length; offset < len; offset += sliceSize
            ) {
                var slice = byteChars.slice(offset, offset + sliceSize);

                var byteNumbers = new Array(slice.length);
                for (var i = 0; i < slice.length; i++) {
                    byteNumbers[i] = slice.charCodeAt(i);
                }

                var byteArray = new Uint8Array(byteNumbers);

                byteArrays.push(byteArray);
            }

            return new Blob(byteArrays, { type: mime });
        }

        $("#btnE6").click(function() {
            $("#loading").show();
            var data = new FormData();
            data.append("frmType", "uploadFicha");
            data.append("payload", localStorage.getItem("infoCustomer"));
            data.append("deal_id", localStorage.getItem("deal_id"));
            data.append(
                "proofEntityAttachment",
                localStorage.getItem("proofEntityAttachment")
            );
            setTimeout(() => {
                $.ajax({
                    type: "POST",
                    enctype: "multipart/form-data",
                    url: "api.php",
                    data: data,
                    async: false,
                    processData: false, // impedir que o jQuery tranforma a "data" em querystring
                    contentType: false, // desabilitar o cabeçalho "Content-Type"
                    cache: false, // desabilitar o "cache"
                    dataType: "json",
                    success: function(result) {
                        if (result.error === "false") {
                            localStorage.setItem("currentStep", "8");
                            window.location.href = "8_ficha_dependentes.php";
                            $("#loading").hide();
                        } else {
                            alert("erro, tente novamente.");
                            $("#loading").hide();
                        }
                    }
                });
            }, 500);
        });

        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));

            var plano = infoCustomer.PLANO_ESCOLHIDO;
            var profissao = infoCustomer.PROFISSAO;

            var entidades_abertas = "";
            if (profissao === false) {
                $(".entidadeFechada").addClass("hide");
                $(".entidadeAberta").removeClass("hide");
                $.each(infoCustomer.ENTIDADES, function() {
                    if (this.operadora === plano.operadoraID) {
                        if (entidades_abertas == "") {
                            entidades_abertas = "(" + this.name;
                        } else {
                            entidades_abertas += "," + this.name;
                        }
                    }
                });
                entidades_abertas += ")";
                $(".entidadesAbertas").text(entidades_abertas);
            } else {
                var nome_entidade_fechada = "";
                if (profissao.PROPERTY_372 === null) {
                    nome_entidade_fechada = profissao.PROPERTY_368.value;
                } else {
                    nome_entidade_fechada = profissao.PROPERTY_376.value;
                }
                $(".nomeEntidadeFechada").text(nome_entidade_fechada);
            }
            $(".nomeTit").text(infoCustomer.NAME);
            $(".profissaoTit").text(infoCustomer.UF_CRM_1578521646);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);

            localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));

            setTimeout(() => {
                $("#loading").hide();
            }, 500);
        }

        //carregaPlano();
        persisteDados();
        //fim carregamento pagina

        //event listeners
        $(".btnTemVinculo").click(function() {
            $(".btnTemVinculo").removeClass("btn-danger");
            $(".btnTemVinculo").removeClass("btn-success");
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            if ($(this).val() == "Sim") {
                //$(".btnTemVinculo").attr("disabled", "disabled");
                $(this).addClass("btn-success");
                if (infoCustomer.PROFISSAO !== false) {
                    localStorage.setItem("hasEntity", true);
                    //
                    if (infoCustomer.PROFISSAO.PROPERTY_372 === null) {
                        infoCustomer.UF_CRM_1583411966 =
                            infoCustomer.PROFISSAO.PROPERTY_324.value;
                        infoCustomer.UF_CRM_1591131187 =
                            infoCustomer.PROFISSAO.PROPERTY_324.value;
                        infoCustomer.UF_CRM_1582823504 =
                            infoCustomer.PROFISSAO.PROPERTY_324.value;
                    } else {
                        infoCustomer.UF_CRM_1583411966 =
                            infoCustomer.PROFISSAO.PROPERTY_372.value;
                        infoCustomer.UF_CRM_1591131187 =
                            infoCustomer.PROFISSAO.PROPERTY_372.value;
                        infoCustomer.UF_CRM_1582823504 =
                            infoCustomer.PROFISSAO.PROPERTY_372.value;
                    }
                    //
                    localStorage.setItem("proofEntityAttached", false);
                    $("#temVinculo").show(500);
                    $("#associarEntidade").hide(500);
                    $("#vinculaEntidade").hide(500);
                } else {
                    var optionsEnt = null;
                    $.each(infoCustomer.ENTIDADES, function() {
                        if (this.operadora === infoCustomer.PLANO_ESCOLHIDO.operadoraID) {
                            var valEnt = JSON.stringify(this);
                            optionsEnt +=
                                "<option value='" + valEnt + "'>" + this.name + "</option>";
                        }
                    });

                    $.confirm({
                        title: "Confirmação Entidade.",
                        content: "" +
                            '<form action="" class="formName">' +
                            '<div class="form-group">' +
                            "<label>Confirme a entidade a qual você já possui vínculo.</label>" +
                            '<select class="form-control mVinculo">' +
                            '<option value="">Escolha uma opção</option>' +
                            optionsEnt +
                            "</select>" +
                            "</div>" +
                            "</form>",
                        buttons: {
                            formSubmit: {
                                text: "Salvar",
                                btnClass: "btn-blue",
                                action: function() {
                                    var entidade = this.$content.find(".mVinculo").val();
                                    if (!entidade) {
                                        $.alert("Escolha uma opção");
                                        return false;
                                    }

                                    entidade = JSON.parse(entidade);
                                    $(".nomeEntidadeEscolhida").text(entidade.name);
                                    infoCustomer.UF_CRM_1583411966 = entidade.entidade_id;
                                    infoCustomer.UF_CRM_1591131187 = entidade.entidade_id;
                                    infoCustomer.UF_CRM_1582823504 = entidade.entidade_id;
                                    $(this).addClass("btn-success");
                                    localStorage.setItem("hasEntity", true);
                                    localStorage.setItem("proofEntityAttached", false);
                                    localStorage.setItem(
                                        "infoCustomer",
                                        JSON.stringify(infoCustomer)
                                    );
                                    $("#temVinculo").show(500);
                                    $("#associarEntidade").hide(500);
                                    $("#vinculaEntidade").hide(500);
                                }
                            },
                            Cancelar: function() {}
                        },
                        onContentReady: function() {
                            // bind to events
                            var jc = this;
                            this.$content.find("form").on("submit", function(e) {
                                // if the user submits the form by pressing enter in the field.
                                e.preventDefault();
                                jc.$$formSubmit.trigger("click"); // reference the button and click it
                            });
                        }
                    });
                }
            } else {
                //$(".btnTemVinculo").attr("disabled", "disabled");
                $(this).addClass("btn-danger");
                localStorage.setItem("hasEntity", false);
                if (infoCustomer.PROFISSAO !== false) {
                    infoCustomer.UF_CRM_1583411966 =
                        infoCustomer.PROFISSAO.PROPERTY_324.value;
                    infoCustomer.UF_CRM_1591131187 =
                        infoCustomer.PROFISSAO.PROPERTY_324.value;
                    infoCustomer.UF_CRM_1582823504 =
                        infoCustomer.PROFISSAO.PROPERTY_324.value;
                    infoCustomer.COD_DOC_ENTIDADE =
                        infoCustomer.PROFISSAO.PROPERTY_326.value;
                    infoCustomer.NOME_ENTIDADE =
                        infoCustomer.PROFISSAO.PROPERTY_368.value;
                    infoCustomer.UF_CRM_1582822611 =
                        infoCustomer.PROFISSAO.PROPERTY_368.value;
                    $(".nomeEntidade").text(infoCustomer.NOME_ENTIDADE);

                    $("#associarEntidade").show(500);
                    $("#temVinculo").hide(500);
                    $("#vinculaEntidade").hide(500);
                } else {
                    $("#associarEntidade").show(500);
                    $("#temVinculo").hide(500);
                    $("#vinculaEntidade").hide(500);
                }
            }
            localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
        });

        $(".btnDesfazEscolhas").click(function() {
            localStorage.removeItem("hasEntity");
            localStorage.removeItem("proofEntityAttachment");
            localStorage.removeItem("proofEntityAttached");
            localStorage.removeItem("acceptAssoc");
            window.location.reload();
        });

        function uploadProofEntity() {
            var files = document.getElementById("fileVinculo").files;
            if (files.length > 0) {
                getBase64(files[0]);
                setTimeout(() => {
                    if (localStorage.getItem("proofEntityAttachment") === false) {
                        alert("Ocorreu um erro, tente anexar novamente");
                        localStorage.removeItem("hasEntity");
                        localStorage.removeItem("proofEntityAttachment");
                        localStorage.removeItem("proofEntityAttached");
                        window.location.reload();
                    } else {
                        localStorage.setItem("proofEntityAttached", true);
                        $(".uploadProofEntity").hide();
                        $(".uploadProofEntityOK").show();
                        $("#btnE6").removeAttr("disabled");
                        $("#btnE6").focus();
                    }
                }, 500);
            }
        }

        $("#btnDoUploadFilevinculo").click(function() {
            $.confirm({
                title: "Confirmação.",
                theme: "modern",
                content: "Tem certeza?",
                buttons: {
                    Sim: function() {
                        uploadProofEntity();
                    },
                    Não: function() {}
                }
            });
        });

        $(".btnContinuaAssocEntidade").click(function() {
            $(".btnContinuaAssocEntidade").removeClass("btn-danger");
            $(".btnContinuaAssocEntidade").removeClass("btn-success");
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            if ($(this).val() == "Sim") {
                //$(".btnContinuaAssocEntidade").attr("disabled", "disabled");

                if (infoCustomer.PROFISSAO !== false) {
                    localStorage.setItem("acceptAssoc", true);
                    $(this).addClass("btn-success");
                    $("#vinculaEntidade").show(500);
                } else {
                    //escolhe entidade
                    var optionsEnt = null;
                    $.each(infoCustomer.ENTIDADES, function() {
                        if (this.operadora === infoCustomer.PLANO_ESCOLHIDO.operadoraID) {
                            var valEnt = JSON.stringify(this);
                            optionsEnt +=
                                "<option value='" + valEnt + "'>" + this.name + "</option>";
                        }
                    });

                    $.confirm({
                        title: "Escolha Entidade.",
                        content: "" +
                            '<form action="" class="formName">' +
                            '<div class="form-group">' +
                            "<label>Escolha a qual entidade você deseja se vincular.</label>" +
                            '<select class="form-control mVinculo">' +
                            '<option value="">Escolha uma opção</option>' +
                            optionsEnt +
                            "</select>" +
                            "</div>" +
                            "</form>",
                        buttons: {
                            formSubmit: {
                                text: "Salvar",
                                btnClass: "btn-blue",
                                action: function() {
                                    var entidade = this.$content.find(".mVinculo").val();
                                    if (!entidade) {
                                        $.alert("Escolha uma opção");
                                        return false;
                                    }

                                    entidade = JSON.parse(entidade);
                                    $(".nomeEntidadeEscolhida").text(entidade.name);
                                    infoCustomer.UF_CRM_1583411966 = entidade.entidade_id;
                                    infoCustomer.UF_CRM_1591131187 = entidade.entidade_id;
                                    infoCustomer.UF_CRM_1582823504 = entidade.entidade_id;
                                    infoCustomer.UF_CRM_1582822611 = entidade.desc;
                                    infoCustomer.COD_DOC_ENTIDADE = entidade.doc_id;
                                    infoCustomer.NOME_ENTIDADE = entidade.desc;
                                    localStorage.setItem(
                                        "infoCustomer",
                                        JSON.stringify(infoCustomer)
                                    );
                                    localStorage.setItem("acceptAssoc", true);
                                    $(this).addClass("btn-success");
                                    $("#vinculaEntidade").show(500);
                                }
                            },
                            Cancelar: function() {}
                        },
                        onContentReady: function() {
                            // bind to events
                            var jc = this;
                            this.$content.find("form").on("submit", function(e) {
                                // if the user submits the form by pressing enter in the field.
                                e.preventDefault();
                                jc.$$formSubmit.trigger("click"); // reference the button and click it
                            });
                        }
                    });
                }
            } else {
                $.confirm({
                    title: "Alerta!",
                    theme: "modern",
                    content: "Para ter direito a estas condições exclusivas, é necessário que você comprove seu vinculo com uma entidade.",
                    type: "red",
                    buttons: {
                        Fechar: function() {}
                    }
                });
            }
        });

        $("#fileProfissao").change(function() {
            var fileProfissao = document.getElementById("fileProfissao").files;
            if (fileProfissao.length > 0) getBase64Prof(fileProfissao[0]);
        });

        $("#cepEnt").blur(function() {
            if ($(this).val() !== "" && $(this).val().length === 8) {
                var data = new FormData();
                var retorno = null;
                data.append("frmType", "buscaCep");
                data.append("frmCep", $(this).val());
                $.ajax({
                    type: "POST",
                    enctype: "multipart/form-data",
                    url: "api.php",
                    data: data,
                    async: false,
                    processData: false, // impedir que o jQuery tranforma a "data" em querystring
                    contentType: false, // desabilitar o cabeçalho "Content-Type"
                    cache: false, // desabilitar o "cache"
                    dataType: "json",
                    success: function(result) {
                        retorno = result;
                        $("#compEnt").removeAttr("required");
                    }
                });

                if (retorno.error === "true") {
                    $.alert({
                        title: "Alerta!",
                        theme: "modern",
                        content: "Cep inválido ou não localizado!"
                    });
                } else {
                    $("#endEnt").val(retorno.logradouro);
                    $("#localidadeEnt").val(retorno.localidade);
                    $("#bairroEnt").val(retorno.bairro);
                    $("#ufEnt").val(retorno.uf);
                    $(".btnEnviaDadosVinculo").removeAttr("disabled");
                    $("#numEnt").focus();
                }
            }
        });

        function geraFichaAssociacao() {
            $(".loading-text").html(
                '<p style="text-align: justify; text-justify: inter-word;">Para que você possa vincular-se a esta entidade de classe, <br>vou te enviar uma ficha de associação. <br>O documento é em formato digital, onde você vai assinar rapidamente, pelo computador ou celular. <br>A assinatura digital tem o mesmo valor jurídico da assinatura tradicional.</p>'
            );
            $("#loading").show();

            if (localStorage.getItem("id_ficha") !== null) {
                if (
                    localStorage.getItem("ficha_download") === null ||
                    localStorage.getItem("ficha_download") === "false"
                ) {
                    //nothing
                } else {
                    localStorage.setItem("currentStep", "7");
                    $("#loading").hide();
                    setTimeout(() => {
                        window.location.href = "7_validacao.php";
                    }, 500);
                }
            }

            setTimeout(() => {
                var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                infoCustomer.UF_CRM_1583447214343 = $("#cepEnt").val();
                infoCustomer.UF_CRM_1583453003241 = $("#bairroEnt").val();
                infoCustomer.UF_CRM_1583453318705 = $("#localidadeEnt").val();
                infoCustomer.UF_CRM_1583453300308 = $("#ufEnt").val();
                infoCustomer.UF_CRM_1583451688644 = $("#endEnt").val();
                infoCustomer.UF_CRM_1583451717890 = $("#numEnt").val();

                localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));
            }, 500);

            setTimeout(() => {
                var data = new FormData();
                data.append("frmType", "fichaAssociacao");
                data.append("payload", localStorage.getItem("infoCustomer"));
                data.append("contact_id", localStorage.getItem("contact_id"));
                data.append("lead_id", localStorage.getItem("lead_id"));
                data.append("deal_id", localStorage.getItem("deal_id"));
                data.append(
                    "proofProfessionAttachment",
                    localStorage.getItem("proofProfessionAttachment")
                );

                fetch("api.php", {
                        method: "POST",
                        body: data
                    })
                    .then(function(response) {
                        response.json().then(function(result) {
                            var retorno = result;
                            if (retorno.error === "true") {
                                $.alert({
                                    title: "Alerta!",
                                    theme: "modern",
                                    content: "Erro!"
                                });
                                $("#loading").hide();
                            } else {
                                //todo
                                localStorage.setItem("id_ficha", retorno.id_ficha);
                                setTimeout(() => {
                                    getFichaAssociacao(retorno.id_ficha);
                                }, 10000);
                            }
                        });
                    })
                    .catch(function(err) {
                        console.error("Failed retrieving information", err);
                    });
            }, 1500);
        }

        function getFichaAssociacao(id_ficha) {
            var data = new FormData();
            data.append("frmType", "getFichaAssociacao");
            data.append("ficha_id", id_ficha);
            data.append("payload", localStorage.getItem("infoCustomer"));
            data.append("deal_id", localStorage.getItem("deal_id"));

            fetch("api.php", {
                    method: "POST",
                    body: data
                })
                .then(function(response) {
                    response.json().then(function(result) {
                        if (result.error === "true") {
                            localStorage.setItem("ficha_download", "true");
                            setTimeout(() => {
                                getFichaAssociacao(id_ficha);
                            }, 5000);
                        } else {
                            localStorage.setItem("id_ficha", result.id_ficha);
                            localStorage.setItem("ficha_download", "true");
                            localStorage.setItem("key_doc", result.key_doc);
                            localStorage.setItem("currentStep", "7");
                            $(".loading-text").html(
                                "<p>Enviamos um e-mail com sua ficha associativa.<br> Por favor, conclua a assinatura digital deste documento para que possamos continuar.</p>"
                            );
                            setTimeout(() => {}, 4000);
                            $("#loading").hide();
                            setTimeout(() => {
                                window.location.href = "7_validacao.php";
                            }, 500);
                        }
                    });
                })
                .catch(function(err) {
                    console.error("Failed retrieving information", err);
                });
        }

        //$(".btnEnviaDadosVinculo").click(function () {
        $("#frmAssocia").submit(function(e) {
            e.preventDefault();
            var valida = true;

            if ($("#cepEnt").val() === "" || $("#cepEnt").val().length !== 8)
                valida = false;
            if ($("#endEnt").val() === "") valida = false;
            if ($("#numEnt").val() === "" || $("#numEnt").val() === 0) valida = false;

            if (localStorage.getItem("proofProfessionAttachment") === null) {
                valida = false;
            } else {
                if (localStorage.getItem("proofProfessionAttachment") === false) {
                    valida = false;
                }
            }

            // $("#loading").hide();
            if (valida) {
                geraFichaAssociacao();
            } else {
                $.alert({
                    title: "Alerta!",
                    theme: "modern",
                    content: "Preencha os campos corretamente"
                });
            }
        });
    }
    //fim etapa 6

    //etapa 7
    if (localStorage.getItem("currentPage") === "7") {
        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomeTit").text(infoCustomer.NAME);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);

            setTimeout(() => {
                $("#loading").hide();
            }, 500);
        }

        //inicializa pagina
        carregaPlano();

        //eventos
        $("#btnE7").click(function() {
            $.confirm({
                title: "Tem certeza?",
                theme: "modern",
                content: "Você confirma a assinatura da ficha de associação?",
                buttons: {
                    Sim: function() {
                        localStorage.setItem("currentStep", "8");
                        setTimeout(() => {
                            window.location.href = "8_ficha_dependentes.php";
                        }, 500);
                    },
                    Não: function() {}
                }
            });
        });
    }
    //fim etapa 7

    //etapa 8
    if (localStorage.getItem("currentPage") === "8") {
        var qtDep = parseInt(localStorage.getItem("qtDep"));
        if (qtDep == 0) {
            localStorage.setItem("currentStep", "9");
            window.location.href = "9_fichas_anexos.php";
        } else {
            if (localStorage.getItem("fichaDep") === null) {
                localStorage.setItem("fichaDep", 1);
            }
        }

        //inputs numericos
        $("#cpfDep,#rgDep,#cardSusDit,#nascidoVivoDep").inputFilter(function(
            value
        ) {
            return /^\d*$/.test(value); // Allow digits only, using a RegExp
        });
        //fim input

        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomeTit").text(infoCustomer.NAME);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);

            // var imagem =
            //   infoCustomer.UF_CRM_1587331426 === "294"
            //     ? "assets/img/logo-unimed-natal.png"
            //     : "assets/img/logo-unimed-recife.png";
            // $(".nomeTit").text(infoCustomer.NAME);
            // $(".nomePlan").text(infoCustomer.NOME_PRODUTO);
            // $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            // $(".qtDep").text(localStorage.getItem("qtDep"));
            // $(".picture-plan").attr("src", plano.imgSrc);

            /**
             * inicializa form com campos ja coletados
             */
            var depAtual = parseInt(localStorage.getItem("fichaDep"));

            if (depAtual == 2) {
                $("#estCivilDep").html(
                    '<option value="">não selecionada</option>\
            <option value="400">Solteiro(a)</option>\
            <option value="402">Casado(a)</option>\
            <option value="404">Separado(a)</option>\
            <option value="406">Viúvo(a)</option>\
            <option value="408">Divorciado(a)</option>\
            <option value="410">Outros</option>'
                );
                $("#sexoDep").html(
                    '<option value="">não selecionada</option>\
              <option value="412">Masculino</option>\
              <option value="414">Feminino</option>'
                );
                $("#grauDep").html(
                    '<option value="">não selecionada</option>\
              <option value="416">Cônjuge</option>\
              <option value="418">Filho/Filha</option>\
              <option value="420">Outros</option>'
                );
            } else if (depAtual == 3) {
                $("#estCivilDep").html(
                    '<option value="">não selecionada</option>\
              <option value="422">Solteiro(a)</option>\
              <option value="424">Casado(a)</option>\
              <option value="426">Separado(a)</option>\
              <option value="428">Viúvo(a)</option>\
              <option value="430">Divorciado(a)</option>\
              <option value="432">Outros</option>'
                );
                $("#sexoDep").html(
                    '<option value="">não selecionada</option>\
              <option value="434">Masculino</option>\
              <option value="436">Feminino</option>'
                );
                $("#grauDep").html(
                    '<option value="">não selecionada</option>\
              <option value="438">Cônjuge</option>\
              <option value="440">Filho/Filha</option>\
              <option value="442">Outros</option>'
                );
            } else if (depAtual == 4) {
                $("#estCivilDep").html(
                    '<option value="">não selecionada</option>\
              <option value="444">Solteiro(a)</option>\
              <option value="446">Casado(a)</option>\
              <option value="448">Separado(a)</option>\
              <option value="450">Viúvo(a)</option>\
              <option value="452">Divorciado(a)</option>\
              <option value="454">Outros</option>'
                );
                $("#sexoDep").html(
                    '<option value="">não selecionada</option>\
              <option value="456">Masculino</option>\
              <option value="458">Feminino</option>'
                );
                $("#grauDep").html(
                    '<option value="">não selecionada</option>\
              <option value="460">Cônjuge</option>\
              <option value="462">Filho/Filha</option>\
              <option value="464">Outros</option>'
                );
            } else if (depAtual == 5) {
                $("#estCivilDep").html(
                    '<option value="">não selecionada</option>\
              <option value="466">Solteiro(a)</option>\
              <option value="468">Casado(a)</option>\
              <option value="470">Separado(a)</option>\
              <option value="472">Viúvo(a)</option>\
              <option value="474">Divorciado(a)</option>\
              <option value="476">Outros</option>'
                );
                $("#sexoDep").html(
                    '<option value="">não selecionada</option>\
              <option value="478">Masculino</option>\
              <option value="480">Feminino</option>'
                );
                $("#grauDep").html(
                    '<option value="">não selecionada</option>\
              <option value="482">Cônjuge</option>\
              <option value="484">Filho/Filha</option>\
              <option value="486">Outros</option>'
                );
            }

            var dadosDep = JSON.parse(localStorage.getItem("infoCustomer"));
            dadosDep = dadosDep.dependentes;

            $("input#dataNascDep").val(dadosDep[depAtual].data_nasc);
            $("input#nomeDep").val(dadosDep[depAtual].nome);
            $(".depAtual").text(depAtual);
            var _dataDep = dadosDep[depAtual].data_nasc.split("-");
            if (parseInt(_dataDep[0]) >= 2010) {
                $("#nascidoVivoDep").removeAttr("readonly");
            } else {
                $(".inputNascidoVivo").hide();
            }

            if (dadosDep[depAtual].idade <= 12) {
                $("#cpfDep,#rgDep").removeAttr("required");
            }

            /**
             * fim inicialização
             */

            setTimeout(() => {
                $("#loading").hide();
            }, 500);
        }

        carregaPlano();

        //events
        $("#frmFichaDep").submit(function(e) {
            e.preventDefault();
            $("#loading").show();
            var depAtual = parseInt(localStorage.getItem("fichaDep"));
            var qtDep = parseInt(localStorage.getItem("qtDep"));
            var nome = $.trim($("#nomeDep").val().toUpperCase());
            var arrNome = nome.split(" ");
            var data_nascimento = $.trim($("#dataNascDep").val());
            var cpfDep = $.trim($("#cpfDep").val());
            var rgDep = $.trim($("#rgDep").val());
            var sexoDep = $.trim($("#sexoDep").val());
            var estCivilDep = $.trim($("#estCivilDep").val());
            var grauDep = $.trim($("#grauDep").val());
            var munNascDep = $.trim($("#munNascDep").val().toUpperCase());
            var nomeMaeDep = $.trim($("#nomeMaeDep").val().toUpperCase());
            var cardSusDep = $.trim($("#cardSusDep").val());
            var nascidoVivoDep = $.trim($("#nascidoVivoDep").val());

            var dadosDep = JSON.parse(localStorage.getItem("infoCustomer"));
            dadosDep = dadosDep.dependentes[depAtual];

            var continua = true;
            var msgErro = "Verifique os seguintes campos:";
            if (isEmpty(nome) || isBlank(nome)) {
                continua = false;
                msgErro += "<br>Nome.";
            }
            if (
                isEmpty(data_nascimento) ||
                isBlank(data_nascimento) ||
                data_nascimento.length !== 10
            )
                continua = false;
            if (isEmpty(cpfDep) || isBlank(cpfDep) || validaCpf(cpfDep) === false) {
                if (dadosDep.idade > 12) {
                    continua = false;
                    msgErro += "<br>CPF.";
                }
            }
            if (isEmpty(rgDep) || isBlank(rgDep)) {
                if (dadosDep.idade > 12) {
                    continua = false;
                    msgErro += "<br>RG.";
                }
            }
            if (arrNome.length < 2) {
                continua = false;
                msgErro += "<br>Deve informar nome e sobrenome.";
            }
            if (isEmpty(munNascDep) || isBlank(munNascDep)) {
                continua = false;
                msgErro += "<br>Municipio Nascimento.";
            }
            if (isEmpty(nomeMaeDep) || isBlank(nomeMaeDep)) {
                continua = false;
                msgErro += "<br>Nome Mãe.";
            }
            if (isEmpty(cardSusDep) || isBlank(cardSusDep)) {
                continua = false;
                msgErro += "<br>Cartão SUS.";
            }

            if (!continua) {
                $("#loading").hide();
                $.alert({
                    title: "Alerta!",
                    theme: "modern",
                    content: msgErro
                });
            } else {
                var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                infoCustomer.dependentes[depAtual].NAME = nome;
                infoCustomer.dependentes[depAtual].CPF = cpfDep;
                infoCustomer.dependentes[depAtual].RG = rgDep;
                infoCustomer.dependentes[depAtual].SEXO = sexoDep;
                infoCustomer.dependentes[depAtual].ESTCIVIL = estCivilDep;
                infoCustomer.dependentes[depAtual].GRAU = grauDep;
                infoCustomer.dependentes[depAtual].MUNNASC = munNascDep;
                infoCustomer.dependentes[depAtual].NOMMAE = nomeMaeDep;
                infoCustomer.dependentes[depAtual].CARDSUS = cardSusDep;
                infoCustomer.dependentes[depAtual].NASCVIVO = nascidoVivoDep;
                localStorage.setItem("infoCustomer", JSON.stringify(infoCustomer));

                if (qtDep > depAtual) {
                    depAtual++;
                    localStorage.setItem("fichaDep", depAtual);
                    window.location.href = "8_ficha_dependentes.php";
                } else {
                    localStorage.setItem("currentStep", "9");
                    window.location.href = "9_fichas_anexos.php";
                }
            }
        });
    }
    //fim etapa 8


    //asesao aqui

    if (localStorage.getItem("currentStep") === "proposta_final" ) {

        $(".carrega-doc").show();
        $("#resumo").hide();


        function carregaPlano() {
    

            var data = new FormData();
            data.append("frmType", "gerarAdesao");
            data.append("cnpj", localStorage.getItem("cnpj"));
            data.append("deal_id", localStorage.getItem("deal_id"));
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    console.log(result, "result");
                    localStorage.setItem('proposta_id', result.proposta_id);
                }
            });

            setTimeout(() => {
                $("#loading").hide();
                setTimeout(() => {
                    if (
                        localStorage.getItem("rascunho_id") !== null &&
                        localStorage.getItem("rascunho_download") === "true" &&
                        localStorage.getItem("proposta_id") === null
                    ) {

                         $.ajax({
                                type: "POST",
                                enctype: "multipart/form-data",
                                url: "api.php",
                                data: data,
                                async: false,
                                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                                contentType: false, // desabilitar o cabeçalho "Content-Type"
                                cache: false, // desabilitar o "cache"
                                dataType: "json",
                                success: function(result) {
                                    console.log(result, "result");
                                    localStorage.setItem('proposta_id', result.proposta_id);
                                }
                            });
                    } else {
                        if (
                            localStorage.getItem("proposta_id") !== null &&
                            localStorage.getItem("proposta_download") === null
                        ) {

                            console.log("esset daqui", localStorage.getItem("proposta_id"))

                            getProposta(localStorage.getItem("proposta_id"));
                        } else {
                            $("#btnE14").removeAttr("disabled");
                            $(".carrega-doc").hide();
                            $(".card-body").hide(500);
                            $(".card-body").html(
                                `<center>
                <p class="texto1" style="text-align: justify; text-justify: inter-word;"><strong class="nomeTit">teste</strong>, sua proposta digital foi gerada e enviada por e-mail para sua assinatura.</p>
                <p class="texto1" style="text-align: justify; text-justify: inter-word;">
                  ATENÇÃO: A proposta só é válida após a sua assinatura digital.
                  Verifique sua caixa de e-mails. Caso ela não esteja lá, verifique também na sua caixa de spam.
                  Se a proposta não chegar em alguns minutos, entre em contato.
                </p>
                <p class="texto1" style="text-align: justify; text-justify: inter-word;">
                  A assinatura digital tem a mesma validade jurídica da convencional, ainda que seja estabelecida com a assinatura eletrônica ou certificação fora dos padrões ICP-BRASIL, conforme disposto pelo Art. 10 da Medida Provisória nº 2.200-2/2001 em vigor no Brasil. <strong>Após assinatura, clique em continuar.</strong>
                </p>
                </center>`
                            );
                            $(".card-body").show(500);
                        }
                    }
                }, 3000);
            }, 2000);
        }

        carregaPlano();

        //eventos
        $("#btnE14").click(function() {
            $.confirm({
                title: "Tem certeza?",
                theme: "modern",
                content: "Você confirma a assinatura da proposta?",
                buttons: {
                    Sim: function() {
                        localStorage.setItem("currentStep", "16");
                        setTimeout(() => {
                            window.location.href = "proposta_enviada.php";
                        }, 500);
                    },
                    Não: function() {}
                }
            });
        });

  

        function esperaProposta(proposta_id) {
            setTimeout(() => {
                if (localStorage.getItem("rascunho_download") !== "true") {
                    $(".btnAbrePdfErro").html(
                        '<center>Clique no botão se sua proposta não carregou... <a target="_blank" href="https://way.digital/waystore_dev_valida/proposta_final_' +
                        proposta_id +
                        '.pdf"><button type="button" class="btn btn-sm btn-success">Visualizar</button></a></center>'
                    );
                    $(".btnAbrePdfErro").show();
                }
            }, 60000);
        }

        function getProposta(proposta_id) {


            let company = JSON.parse(localStorage.getItem("infoCompany"));
            var data = new FormData();
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            data.append("frmType", "baixaProposta");
            data.append("proposta_id", proposta_id);
            data.append("payload", localStorage.getItem("infoCompany"));
            data.append("deal_id", localStorage.getItem("deal_id"));
            fetch("api.php", {
                    method: "POST",
                    body: data
                })
                .then(function(response) {
                    response.json().then(function(result) {
                        if (result.error === "true") {
                            setTimeout(() => {
                                getProposta(proposta_id);
                            }, 5000);
                        } else {
                            localStorage.setItem("proposta_id", result.proposta_id);
                            $("#resumo").show();

                            localStorage.setItem("proposta_download", "true");
                            $("#btnE14").removeAttr("disabled");
                            $(".carrega-doc").hide();
                            $(".card-body").hide(500);
                            $(".card-body").html(
                                `<center>
                <p class="texto1" style="text-align: justify; text-justify: inter-word;"><strong class="nomeTit">${infoCustomer.NAME}</strong>, sua proposta digital foi gerada e enviada por e-mail para sua assinatura.</p>
                <p class="texto1" style="text-align: justify; text-justify: inter-word;">
                  ATENÇÃO: A proposta só é válida após a sua assinatura digital.
                  Verifique sua caixa de e-mails. Caso ela não esteja lá, verifique também na sua caixa de spam.
                  Se a proposta não chegar em alguns minutos, entre em contato.
                </p>
                <p class="texto1" style="text-align: justify; text-justify: inter-word;">
                  A assinatura digital tem a mesma validade jurídica da convencional, ainda que seja estabelecida com a assinatura eletrônica ou certificação fora dos padrões ICP-BRASIL, conforme disposto pelo Art. 10 da Medida Provisória nº 2.200-2/2001 em vigor no Brasil. <strong>Após assinatura, clique em continuar.</strong>
                </p>
                </center>`
                            );
                            $(".card-body").show(500);
                        }
                    });
                })
                .catch(function(err) {
                    console.error("Failed retrieving information", err);
                });
        }
    }

    //etapa 9

    if (localStorage.getItem("currentStep") === "envio_documentos" ) {
        console.log("enavio de documentos");
        //$("input").removeAttr("required");
        //$("select").removeAttr("required");
        var qtDep = parseInt(localStorage.getItem("qtDep"));
        var checkUpload = new Object();
        // if (localStorage.getItem("dataDep") === null && qtDep > 0) {
        //     var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
        //     var data = new FormData();
        //     var retorno = null;
        //     data.append("frmType", "gravaDadosDep");
        //     data.append("payload", JSON.stringify(infoCustomer.dependentes));
        //     data.append("qtDep", localStorage.getItem("qtDep"));
        //     data.append("deal_id", localStorage.getItem("deal_id"));
        //     $.ajax({
        //         type: "POST",
        //         enctype: "multipart/form-data",
        //         url: "api.php",
        //         data: data,
        //         async: false,
        //         processData: false, // impedir que o jQuery tranforma a "data" em querystring
        //         contentType: false, // desabilitar o cabeçalho "Content-Type"
        //         cache: false, // desabilitar o "cache"
        //         dataType: "json",
        //         success: function(result) {
        //             if (result.error === "true") {
        //                 console.log("Error: failed to persist data.");
        //             } else {
        //                 localStorage.setItem("dataDep", "OK");
        //             }
        //         }
        //     });
        // } else {
        //     var data = new FormData();
        //     data.append("frmType", "avancaParaDocumentacao");
        //     data.append("deal_id", localStorage.getItem("deal_id"));
        //     $.ajax({
        //         type: "POST",
        //         enctype: "multipart/form-data",
        //         url: "api.php",
        //         data: data,
        //         async: false,
        //         processData: false, // impedir que o jQuery tranforma a "data" em querystring
        //         contentType: false, // desabilitar o cabeçalho "Content-Type"
        //         cache: false, // desabilitar o "cache"
        //         dataType: "json",
        //         success: function(result) {
        //             //nothing
        //         }
        //     });
        // }

        // function carregaPlano() {
        //     var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
        //     var plano = infoCustomer.PLANO_ESCOLHIDO;

        //     $(".nomeTit").text(infoCustomer.NAME);
        //     $(".nomePlan").text(plano.NAME);
        //     $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
        //     $(".qtDep").text(localStorage.getItem("qtDep"));
        //     $(".picture-plan").attr("src", plano.imgSrc);

        //     // var imagem =
        //     //   infoCustomer.UF_CRM_1587331426 === "294"
        //     //     ? "assets/img/logo-unimed-natal.png"
        //     //     : "assets/img/logo-unimed-recife.png";
        //     // $(".nomeTit").text(infoCustomer.NAME);
        //     // $(".nomePlan").text(infoCustomer.NOME_PRODUTO);
        //     // $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
        //     // $(".qtDep").text(localStorage.getItem("qtDep"));
        //     // $(".picture-plan").attr("src", plano.imgSrc);

        //     //mudalabel acordeao
        //     // if (infoCustomer.dependentes[1] !== null) {
        //     //   $(".acdDep_1").text(
        //     //     "Documentação Dependente 1 - " + infoCustomer.dependentes[1].NAME
        //     //   );
        //     // }

        //     //inicia objeto checa upload
        //     checkUpload.tit = {
        //         needed: 3,
        //         selected: 0
        //     };
        //     //montagem upload dependentes
        //     for (var q = 1; q <= qtDep; q++) {
        //         var htmltoAdd = montaFileUploadDeps(q);
        //         checkUpload[q] = {
        //             needed: htmltoAdd.needed,
        //             selected: 0
        //         };
        //         $("#accordion").append(htmltoAdd.html_output);
        //     }
        //     /**
        //      * fim inicialização
        //      */

        //     setTimeout(() => {
        //         $("#loading").hide();
        //     }, 500);

        //     $(".acdTit").trigger("click");
        // }

        // carregaPlano();

        //eventos

             checkUpload.tit = {
                needed: 3,
                selected: 0
            };
        // $('input[type="file"]').on("change", function(e) {
        //     // console.log($(this).attr("id"));
        //     // console.log(e.target.files.length);
        //     if ($(this).attr("id").indexOf("Tit") !== -1) {
        //         var selected = 0;
        //         var inputFiles = $(".docsTit input[type='file']");
        //         $.each(inputFiles, function() {
        //             selected += this.files.length;
        //         });
        //         var inputFiles = $(".docsEmp input[type='file']");
        //         $.each(inputFiles, function() {
        //             selected += this.files.length;
        //         });
        //         checkUpload.tit.selected = selected;
        //     } else {
        //         var selected = 0;
        //         var dep = $(this).attr("id").match(/\d+/);
        //         var inputFiles = $(`.docsDep${dep} input[type='file']`);
        //         $.each(inputFiles, function() {
        //             selected += this.files.length;
        //         });
        //         // checkUpload[parseInt(dep)].selected = selected;
        //     }

        //     var btnDisabled = false;
        //     $.each(checkUpload, function() {
        //         if (parseInt(this.selected) < parseInt(this.needed)) btnDisabled = true;
        //     });

        //     if (btnDisabled === true) {
        //         $("input[type='submit']").attr("disabled", "disabled");
        //     } else {
        //         $("input[type='submit']").removeAttr("disabled");
        //     }
        // });

        $(".docsEmp input[type='file']").removeAttr("required");

        $("#frmAnexos").submit(function(e) {



        const cnpj = $("#cnpjEmp").val();
        const cont = $("#contractEmp").val();
    
        if(!cont || !cont ){
            alert("Os documentos  Cartão CNPJ e Contrato São requeridos ");
            return;
        }


            $("#loading").show();
            $(".loading-text").text("Fazendo upload, aguarde...");
            setTimeout(() => {}, 1000);
            e.preventDefault();
            var data = new FormData($("#frmAnexos")[0]);
            var inputs = $('input[type="file"]');
            
               for (var i = 0, f; f = inputs[i]; i++) {
                    if(f.files[0]){
                       data.append(f.name, f.files[0]);

                    }
                }


            data.append("cnpj", localStorage.getItem('cnpj'));
            data.append("frmType", "AtualizarEmpresa");
            // data.append("qtDep", localStorage.getItem("qtDep"));
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();

                    // Upload progress
                    xhr.upload.addEventListener(
                        "progress",
                        function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                //Do something with upload progress
                                //console.log(percentComplete);
                                if (percentComplete < 100) {
                                    $(".loading-text").text(
                                        "Fazendo upload, aguarde... " +
                                        percentComplete.toFixed(2) +
                                        "%"
                                    );
                                } else {
                                    $(".loading-text").text("Processando arquivos, aguarde...");
                                }
                            }
                        },
                        false
                    );

                    return xhr;
                },
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: true,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    $("#loading").hide();
                    setTimeout(() => {}, 500);
                    if (result.error === "true") {
                            alert("erro, tente novamente!!");
                    } else {
                        localStorage.setItem("currentStep", 'gera_proposta');
                        window.location.href = "proposta.php";
                        //console.log(result.debug);
                    }
                }
            });
            // localStorage.setItem("currentStep", 11);
            // window.location.href = "11_ds.php";
        });

        //funções
        $('input[name^="radioDocTit"]').on("change", function(e) {
            var escolha = $(this).val();
            if (qtDep == 0) $('input[type="submit"]').removeAttr("disabled");
            if (escolha === "cnh") {
                $('.docsTit input[type="file"]').attr("disabled", "disabled");
                $("#cnhTit").removeAttr("disabled");
                $("#comprovanteTit").removeAttr("disabled");
            } else if (escolha === "rgcom") {
                $('.docsTit input[type="file"]').attr("disabled", "disabled");
                $("#comprovanteTit").removeAttr("disabled");
                $("#rgfTit").removeAttr("disabled");
                $("#rgvTit").removeAttr("disabled");
            } else {
                $('.docsTit input[type="file"]').attr("disabled", "disabled");
                $("#comprovanteTit").removeAttr("disabled");
                $("#rgfTit").removeAttr("disabled");
                $("#rgvTit").removeAttr("disabled");
                $("#cpffTit").removeAttr("disabled");
                $("#cpfvTit").removeAttr("disabled");
            }
        });
    }
    if (localStorage.getItem("currentPage") === "9") {
        console.log("enavio de documentos");
        //$("input").removeAttr("required");
        //$("select").removeAttr("required");
        var qtDep = parseInt(localStorage.getItem("qtDep"));
        var checkUpload = new Object();
        if (localStorage.getItem("dataDep") === null && qtDep > 0) {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var data = new FormData();
            var retorno = null;
            data.append("frmType", "gravaDadosDep");
            data.append("payload", JSON.stringify(infoCustomer.dependentes));
            data.append("qtDep", localStorage.getItem("qtDep"));
            data.append("deal_id", localStorage.getItem("deal_id"));
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    if (result.error === "true") {
                        console.log("Error: failed to persist data.");
                    } else {
                        localStorage.setItem("dataDep", "OK");
                    }
                }
            });
        } else {
            var data = new FormData();
            data.append("frmType", "avancaParaDocumentacao");
            data.append("deal_id", localStorage.getItem("deal_id"));
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    //nothing
                }
            });
        }

        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomeTit").text(infoCustomer.NAME);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);

            // var imagem =
            //   infoCustomer.UF_CRM_1587331426 === "294"
            //     ? "assets/img/logo-unimed-natal.png"
            //     : "assets/img/logo-unimed-recife.png";
            // $(".nomeTit").text(infoCustomer.NAME);
            // $(".nomePlan").text(infoCustomer.NOME_PRODUTO);
            // $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            // $(".qtDep").text(localStorage.getItem("qtDep"));
            // $(".picture-plan").attr("src", plano.imgSrc);

            //mudalabel acordeao
            // if (infoCustomer.dependentes[1] !== null) {
            //   $(".acdDep_1").text(
            //     "Documentação Dependente 1 - " + infoCustomer.dependentes[1].NAME
            //   );
            // }

            //inicia objeto checa upload
            checkUpload.tit = {
                needed: 3,
                selected: 0
            };
            //montagem upload dependentes
            for (var q = 1; q <= qtDep; q++) {
                var htmltoAdd = montaFileUploadDeps(q);
                checkUpload[q] = {
                    needed: htmltoAdd.needed,
                    selected: 0
                };
                $("#accordion").append(htmltoAdd.html_output);
            }
            /**
             * fim inicialização
             */

            setTimeout(() => {
                $("#loading").hide();
            }, 500);

            $(".acdTit").trigger("click");
        }

        carregaPlano();

        //eventos
        $('input[type="file"]').on("change", function(e) {
            // console.log($(this).attr("id"));
            // console.log(e.target.files.length);
            if ($(this).attr("id").indexOf("Tit") !== -1) {
                var selected = 0;
                var inputFiles = $(".docsTit input[type='file']");
                $.each(inputFiles, function() {
                    selected += this.files.length;
                });
                var inputFiles = $(".docsEmp input[type='file']");
                $.each(inputFiles, function() {
                    selected += this.files.length;
                });
                checkUpload.tit.selected = selected;
            } else {
                var selected = 0;
                var dep = $(this).attr("id").match(/\d+/);
                var inputFiles = $(`.docsDep${dep} input[type='file']`);
                $.each(inputFiles, function() {
                    selected += this.files.length;
                });
                checkUpload[parseInt(dep)].selected = selected;
            }

            var btnDisabled = false;
            $.each(checkUpload, function() {
                if (parseInt(this.selected) < parseInt(this.needed)) btnDisabled = true;
            });

            if (btnDisabled === true) {
                $("input[type='submit']").attr("disabled", "disabled");
            } else {
                $("input[type='submit']").removeAttr("disabled");
            }
        });

        $(".docsEmp input[type='file']").removeAttr("required");

        $("#frmAnexos").submit(function(e) {
            $("#loading").show();
            $(".loading-text").text("Fazendo upload, aguarde...");
            setTimeout(() => {}, 1000);
            e.preventDefault();
            var data = new FormData($("#frmAnexos")[0]);
            // data.append("frmType", "uploadAnexos");
            data.append("deal_id", localStorage.getItem("deal_id"));
            data.append("qtDep", localStorage.getItem("qtDep"));
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();

                    // Upload progress
                    xhr.upload.addEventListener(
                        "progress",
                        function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                //Do something with upload progress
                                //console.log(percentComplete);
                                if (percentComplete < 100) {
                                    $(".loading-text").text(
                                        "Fazendo upload, aguarde... " +
                                        percentComplete.toFixed(2) +
                                        "%"
                                    );
                                } else {
                                    $(".loading-text").text("Processando arquivos, aguarde...");
                                }
                            }
                        },
                        false
                    );

                    return xhr;
                },
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: true,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    $("#loading").hide();
                    setTimeout(() => {}, 500);
                    if (result.error === "true") {
                        alert("Erro, tente novamente");
                        window.location.reload();
                    } else {
                        localStorage.setItem("currentStep", 11);
                        window.location.href = "11_ds.php";
                        //console.log(result.debug);
                    }
                }
            });
            // localStorage.setItem("currentStep", 11);
            // window.location.href = "11_ds.php";
        });

        //funções
        $('input[name^="radioDocTit"]').on("change", function(e) {
            var escolha = $(this).val();
            if (qtDep == 0) $('input[type="submit"]').removeAttr("disabled");
            if (escolha === "cnh") {
                $('.docsTit input[type="file"]').attr("disabled", "disabled");
                $("#cnhTit").removeAttr("disabled");
                $("#comprovanteTit").removeAttr("disabled");
            } else if (escolha === "rgcom") {
                $('.docsTit input[type="file"]').attr("disabled", "disabled");
                $("#comprovanteTit").removeAttr("disabled");
                $("#rgfTit").removeAttr("disabled");
                $("#rgvTit").removeAttr("disabled");
            } else {
                $('.docsTit input[type="file"]').attr("disabled", "disabled");
                $("#comprovanteTit").removeAttr("disabled");
                $("#rgfTit").removeAttr("disabled");
                $("#rgvTit").removeAttr("disabled");
                $("#cpffTit").removeAttr("disabled");
                $("#cpfvTit").removeAttr("disabled");
            }
        });
    }
    //fim etapa 9

    //etapa 11
    if (localStorage.getItem("currentPage") === "11") {
        var ds = "";

        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;
            var ds_operadoras = {
                6410: "ds",
                6412: "ds2",
                7058: "ds3",
                7357: "dscnu",
                7221: "ds4",
                8347: "dshapvidaPME"
            };
            ds = ds_operadoras[plano.operadoraID];
            $(".nomeTit").text(infoCustomer.NAME);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);

            var data = new FormData();
            data.append("frmType", "avancaParaDS");
            data.append("deal_id", localStorage.getItem("deal_id"));
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {}
            });

            var paramsDS = new Object();
            paramsDS.nome = infoCustomer.NAME;
            paramsDS.email = infoCustomer.EMAIL;
            paramsDS.telefone = infoCustomer.PHONE;
            paramsDS.qtdep = localStorage.getItem("qtDep");
            paramsDS.dep = [];

            var qtdeptods = parseInt(localStorage.getItem("qtDep"));
            if (qtdeptods > 0) {
                for (var i = 1; i <= qtdeptods; i++) {
                    paramsDS.dep[i] = infoCustomer.dependentes[i].nome;
                }
            }

            var paramsDSParsed = JSON.stringify(paramsDS);
            var url_ds =
                "ds_hom/ds_oauth.php?form=" +
                ds +
                "&deal_id=" +
                localStorage.getItem("deal_id") +
                "&embed&params=" +
                paramsDSParsed;
            $("#dsFrame").attr("src", url_ds);

            //mudalabel acordeao
            // if (infoCustomer.dependentes[1] !== null) {
            //   $(".acdDep_1").text(
            //     "Documentação Dependente 1 - " + infoCustomer.dependentes[1].NAME
            //   );
            // }

            /**
             * fim inicialização
             */

            setTimeout(() => {
                $("#loading").hide();
            }, 1000);
        }

        carregaPlano();

        //eventos
        $("#btnE11").click(function() {
            localStorage.setItem("currentStep", 13);
            window.location.href = "13_rascunho.php";
        });
    }
    //fim etapa 11


    if (localStorage.getItem("currentStep") === "gera_proposta") {
       
        console.log("aquuiii");

        function carregaPlano() {

            var data = new FormData();
            data.append("frmType", "avancaParaRascunho");
            data.append("deal_id", localStorage.getItem("deal_id"));
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    setTimeout(() => {
                        $("#loading").hide();
                    }, 500);
                }
            });
        }

        // carregaPlano();

        //eventos
        $("#btnE13").click(function() {
            $.confirm({
                title: "Tem certeza?",
                theme: "modern",
                content: "Você confirma a aprovação da proposta?",
                buttons: {
                    Sim: function() {
                        localStorage.setItem("currentStep", "proposta_final");
                        setTimeout(() => {
                            window.location.href = "proposta_final.php";
                        }, 500);
                    },
                    Não: function() {}
                }
            });
        });





        $("#btnGerarRascunho").click(function() {


            $(".carrega-doc").show();
            $(this).attr("disabled", "disabled");

            setTimeout(() => {
                if (localStorage.getItem("rascunho_id") === null) {
                    var data = new FormData();
                    //   infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"] ===
                    //     null ||
                    //   infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"] ===
                    //     undefined
                    //     ? infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf[_uf].rascunho
                    //     : infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"]
 
                    data.append("frmType", "geraRascunho");
                    data.append("deal_id", localStorage.getItem("deal_id"));
                    data.append("template", '949');
                    data.append("cnpj", localStorage.getItem("cnpj"));
                    
                    fetch("api.php", {
                            method: "POST",
                            body: data
                        })
                        .then(function(response) {
                            response.json().then(function(result) {
                                if (result.error === "true") {
                                    alert("Erro.");
                                    $(".carrega-doc").hide();
                                } else {
                                    localStorage.setItem("rascunho_id", result.rascunho_id);
                                    setTimeout(() => {
                                        getRascunho(result.rascunho_id);
                                        esperaRascunho(result.rascunho_id);
                                    }, 5000);
                                }
                            });
                        })
                        .catch(function(err) {
                            console.error("Failed retrieving information", err);
                        });
                } else {
                    if (localStorage.getItem("rascunho_download") === null) {
                        getRascunho(localStorage.getItem("rascunho_id"));
                    } else {
                        $(".carrega-doc").hide();
                        $("#btnGerarRascunho").hide();
                        $(".btnAbrePdf").html(
                            '<a target="_blank" href="https://way.digital/waystore_dev_valida/proposta_rascunho_' +
                            localStorage.getItem("rascunho_id") +
                            '.pdf"><button type="button" class="btn btn-success">Visualizar</button></a>'
                        );
                        $(".btnAbrePdf").show();
                        esperaRascunho(localStorage.getItem("rascunho_id"));
                        // $("#accordion").hide();
                        // $("#btnE13").removeAttr("disabled");
                        // $("#rascunhoFrame").attr(
                        //   "src",
                        //   "https://drive.google.com/viewerng/viewer?embedded=true&url=http://way.digital/waystore_dev_valida/proposta_rascunho_" +
                        //     localStorage.getItem("rascunho_id") +
                        //     ".pdf"
                        // );
                        // $("#rascunhoFrame").show();
                        $("#btnE13").removeAttr("disabled");
                        $.alert({
                            title: "Alerta!",
                            theme: "modern",
                            content: "O rascunho da sua proposta foi gerado, clique no botão visualizar, leia com calma e após isso clique no botão Ok para finalizarmos sua proposta."
                        });
                    }
                }
            }, 1500);
        });

        function esperaRascunho(rascunho_id) {
            setTimeout(() => {
                if (localStorage.getItem("rascunho_download") !== "true") {
                    $(".btnAbrePdfErro").html(
                        '<center>Clique no botão se seu rascunho não carregou... <a target="_blank" href="https://way.digital/waystore_dev_valida/proposta_rascunho_' +
                        rascunho_id +
                        '.pdf"><button type="button" class="btn btn-sm btn-success">Visualizar</button></a></center>'
                    );
                    $(".btnAbrePdfErro").show();
                }
            }, 60000);
        }

        function getRascunho(rascunho_id) {
            var data = new FormData();
            data.append("frmType", "baixaRascunho");
            data.append("rascunho_id", rascunho_id);

            fetch("api.php", {
                    method: "POST",
                    body: data
                })
                .then(function(response) {
                    response.json().then(function(result) {
                        if (result.error === "true") {
                            setTimeout(() => {
                                getRascunho(rascunho_id);
                            }, 5000);
                        } else {
                            localStorage.setItem("rascunho_id", result.rascunho_id);
                            localStorage.setItem("rascunho_download", "true");
                            $("#btnGerarRascunho").hide();
                            $(".carrega-doc").hide();
                            $(".btnAbrePdf").html(
                                '<a target="_blank" href="https://way.digital/waystore_dev_valida/proposta_rascunho_' +
                                result.rascunho_id +
                                '.pdf"><button type="button" class="btn btn-lg btn-success">Visualizar</button></a>'
                            );
                            $(".btnAbrePdf").show();
                            $("#btnE13").removeAttr("disabled");
                            $.alert({
                                title: "Alerta!",
                                theme: "modern",
                                content: "Pronto, o rascunho da sua proposta foi gerado, clique no botão visualizar, leia com calma e após isso clique no botão Ok para finalizarmos sua proposta."
                            });
                        }
                    });
                })
                .catch(function(err) {
                    console.error("Failed retrieving information", err);
                });
        }
    }

    //etapa 13
    if (localStorage.getItem("currentPage") === "13") {
        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;

            $(".nomeTit").text(infoCustomer.NAME);
            $(".nomePlan").text(plano.NAME);
            $(".subTotal").text(parseFloat(infoCustomer.SUBTOTAL).toFixed(2));
            $(".qtDep").text(localStorage.getItem("qtDep"));
            $(".picture-plan").attr("src", plano.imgSrc);

            // if (localStorage.getItem("rascunho_id") !== null) {
            //   $("#btnGerarRascunho").text("Ver");
            //   $("#btnGerarRascunho").removeAttr("disabled");
            // }
            /**
             * fim inicialização
             */

            var data = new FormData();
            data.append("frmType", "avancaParaRascunho");
            data.append("deal_id", localStorage.getItem("deal_id"));
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {
                    setTimeout(() => {
                        $("#loading").hide();
                    }, 500);
                }
            });
        }

        carregaPlano();

        //eventos
        $("#btnE13").click(function() {
            $.confirm({
                title: "Tem certeza?",
                theme: "modern",
                content: "Você confirma a aprovação da proposta?",
                buttons: {
                    Sim: function() {
                        localStorage.setItem("currentStep", 14);
                        setTimeout(() => {
                            window.location.href = "14_gerar_proposta.php";
                        }, 500);
                    },
                    Não: function() {}
                }
            });
        });

        $("#btnGerarRascunho").click(function() {


            $(".carrega-doc").show();
            $(this).attr("disabled", "disabled");

            setTimeout(() => {
                if (localStorage.getItem("rascunho_id") === null) {
                    var data = new FormData();
                    var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
                    var _uf = infoCustomer.UF_CRM_1582805357.toLowerCase();
                    var rascunho_template = null;
                    //   infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"] ===
                    //     null ||
                    //   infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"] ===
                    //     undefined
                    //     ? infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf[_uf].rascunho
                    //     : infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"]
                    //         .rascunho;
                    if (
                        localStorage.getItem("fluxo") === "beneficiario" ||
                        localStorage.getItem("fluxo") === "incBeneficiario"
                    ) {
                        rascunho_template =
                            infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"]["pf"]
                            .rascunho;
                    } else {
                        rascunho_template =
                            infoCustomer.PLANO_ESCOLHIDO.templates_docs.uf["default"]["pj"]
                            .rascunho;
                    }
                    data.append("frmType", "geraRascunho");
                    data.append("deal_id", localStorage.getItem("deal_id"));
                    data.append("template", rascunho_template);
                    fetch("api.php", {
                            method: "POST",
                            body: data
                        })
                        .then(function(response) {
                            response.json().then(function(result) {
                                if (result.error === "true") {
                                    alert("Erro.");
                                    $(".carrega-doc").hide();
                                } else {
                                    localStorage.setItem("rascunho_id", result.rascunho_id);
                                    setTimeout(() => {
                                        getRascunho(result.rascunho_id);
                                        esperaRascunho(result.rascunho_id);
                                    }, 5000);
                                }
                            });
                        })
                        .catch(function(err) {
                            console.error("Failed retrieving information", err);
                        });
                } else {
                    if (localStorage.getItem("rascunho_download") === null) {
                        getRascunho(localStorage.getItem("rascunho_id"));
                    } else {
                        $(".carrega-doc").hide();
                        $("#btnGerarRascunho").hide();
                        $(".btnAbrePdf").html(
                            '<a target="_blank" href="https://way.digital/waystore_dev_valida/proposta_rascunho_' +
                            localStorage.getItem("rascunho_id") +
                            '.pdf"><button type="button" class="btn btn-success">Visualizar</button></a>'
                        );
                        $(".btnAbrePdf").show();
                        esperaRascunho(localStorage.getItem("rascunho_id"));
                        // $("#accordion").hide();
                        // $("#btnE13").removeAttr("disabled");
                        // $("#rascunhoFrame").attr(
                        //   "src",
                        //   "https://drive.google.com/viewerng/viewer?embedded=true&url=http://way.digital/waystore_dev_valida/proposta_rascunho_" +
                        //     localStorage.getItem("rascunho_id") +
                        //     ".pdf"
                        // );
                        // $("#rascunhoFrame").show();
                        $("#btnE13").removeAttr("disabled");
                        $.alert({
                            title: "Alerta!",
                            theme: "modern",
                            content: "O rascunho da sua proposta foi gerado, clique no botão visualizar, leia com calma e após isso clique no botão Ok para finalizarmos sua proposta."
                        });
                    }
                }
            }, 1500);
        });

        function esperaRascunho(rascunho_id) {
            setTimeout(() => {
                if (localStorage.getItem("rascunho_download") !== "true") {
                    $(".btnAbrePdfErro").html(
                        '<center>Clique no botão se seu rascunho não carregou... <a target="_blank" href="https://way.digital/waystore_dev_valida/proposta_rascunho_' +
                        rascunho_id +
                        '.pdf"><button type="button" class="btn btn-sm btn-success">Visualizar</button></a></center>'
                    );
                    $(".btnAbrePdfErro").show();
                }
            }, 60000);
        }

        function getRascunho(rascunho_id) {
            var data = new FormData();
            data.append("frmType", "baixaRascunho");
            data.append("rascunho_id", rascunho_id);

            fetch("api.php", {
                    method: "POST",
                    body: data
                })
                .then(function(response) {
                    response.json().then(function(result) {
                        if (result.error === "true") {
                            setTimeout(() => {
                                getRascunho(rascunho_id);
                            }, 5000);
                        } else {
                            localStorage.setItem("rascunho_id", result.rascunho_id);
                            localStorage.setItem("rascunho_download", "true");
                            $("#btnGerarRascunho").hide();
                            $(".carrega-doc").hide();
                            $(".btnAbrePdf").html(
                                '<a target="_blank" href="https://way.digital/waystore_dev_valida/proposta_rascunho_' +
                                result.rascunho_id +
                                '.pdf"><button type="button" class="btn btn-lg btn-success">Visualizar</button></a>'
                            );
                            $(".btnAbrePdf").show();
                            $("#btnE13").removeAttr("disabled");
                            $.alert({
                                title: "Alerta!",
                                theme: "modern",
                                content: "Pronto, o rascunho da sua proposta foi gerado, clique no botão visualizar, leia com calma e após isso clique no botão Ok para finalizarmos sua proposta."
                            });
                        }
                    });
                })
                .catch(function(err) {
                    console.error("Failed retrieving information", err);
                });
        }
    }
    //fim etapa 13

    //etapa 14

    //fim etapa 14

    if (localStorage.getItem("currentPage") === "16") {
        function carregaPlano() {
            var infoCustomer = JSON.parse(localStorage.getItem("infoCustomer"));
            var plano = infoCustomer.PLANO_ESCOLHIDO;
            $(".nomeTit").text(infoCustomer.NAME);
            $(".picture-plan").attr("src", plano.imgSrc);

            var data = new FormData();
            data.append("frmType", "avancaNegocioGanho");
            data.append("deal_id", localStorage.getItem("deal_id"));
            data.append("payload", localStorage.getItem("infoCustomer"));
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "api.php",
                data: data,
                async: false,
                processData: false, // impedir que o jQuery tranforma a "data" em querystring
                contentType: false, // desabilitar o cabeçalho "Content-Type"
                cache: false, // desabilitar o "cache"
                dataType: "json",
                success: function(result) {}
            });

            $("#loading").hide();

            setTimeout(() => {
                localStorage.clear();
            }, 2000);
        }

        carregaPlano();
    }
});