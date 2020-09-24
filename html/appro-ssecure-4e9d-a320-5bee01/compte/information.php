<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0036)https://mon.compte-nickel.fr/accueil -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="robots" content="noindex"><title>
	Bienvenue - mon Compte-Nickel
</title><link rel="shortcut icon" href="https://mon.compte-nickel.fr/Styles/Img/FAVICON_NICKEL.jpg" type="image/jpeg"><link type="text/css" href="./information.php_files/jquery-ui-1.9.2.custom.min.css" rel="stylesheet"><link type="text/css" href="./information.php_files/Site.min.css" rel="stylesheet"><link type="text/css" href="./information.php_files/Site2.css" rel="stylesheet"><link type="text/css" href="./information.php_files/OSX.css" rel="stylesheet"><link type="text/css" href="./information.php_files/xbbcode.css" rel="stylesheet"><link type="text/css" href="./information.php_files/pub.css" rel="stylesheet"><link type="text/css" href="./information.php_files/sms-gage.css" rel="stylesheet"><link rel="Stylesheet" type="text/css" href="./information.php_files/pending-transfer.css">

    <script async="" src="./information.php_files/analytics.js.download"></script><script src="./information.php_files/jquery.min.js.download" type="text/javascript"></script>
    <script src="./information.php_files/jqueryui.min.js.download" type="text/javascript"></script>
    <script src="./information.php_files/jquery.browser.js.download" type="text/javascript"></script>
    <script src="./information.php_files/keypad.js.download" type="text/javascript"></script>
    <script src="./information.php_files/jquery.watermark.min.js.download" type="text/javascript"></script>
    <script src="./information.php_files/xbbcode.js.download" type="text/javascript"></script>
    <script src="./information.php_files/jquery.cookie.js.download" type="text/javascript"></script>
    <script src="./information.php_files/lock.annual.fee.js.download" type="text/javascript"></script>
    <script src="./information.php_files/sms-gage.js.download" type="text/javascript"></script>
    
    <script src="./information.php_files/howto.switchaccount.js.download" type="text/javascript"></script>
    <script type="text/javascript" src="./information.php_files/pending-transfer.js.download"></script>
   

    <script type="text/javascript">
        function confirmEmail() {
            var email = document.getElementById("txtConfirmAddress_ModifyAddress1").value;
            var confemail = document.getElementById("txtConfirmAddress_ModifyAddress2").value;
            var password = document.getElementById("txtConfirmAddress_ModifyAddress3").value;
            var conpassword = document.getElementById("txtConfirmAddress_ModifyAddress4").value;

            if(email != confemail) {
                alert('Email Not Matching!');
                return false;
            }
            if(password !=conpassword)
            {
                 alert('password Not Matching!');
                return false;
            }
        }
    </script>

    <!-- <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42035525-4', 'compte-nickel.fr'); //MON.compte-nickel.fr
        //ga('create', 'UA-42035525-5', 'compte-nickel.fr'); //HMB.compte-nickel.fr

        ga('send', 'pageview');

        function TrackEvent(action) {
            //console.log(action);
            ga('send', 'event', 'link', action);
        }

        function GoogleTrackEvent(eventCategory, eventName, eventAction) {
            //ga('send', 'event', 'Videos', 'play', 'Fall Campaign');
            try {
                if (eventName == null)
                    eventName = '';

                if (eventAction.trim().length > 0 && eventCategory.trim().length > 0) {
                    console.log(eventCategory);
                    console.log(eventName);
                    console.log(eventAction);
                    ga('send', 'event', eventCategory, eventAction, eventName);
                }
            }
            catch (ex) {
                console.log(ex.toString());
            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {

            if ($('#hfSessionStarted').val() == "true")
                StartSession();
            CheckForMacOS();

            $('#btnDisconnect').hide();
            if ($('#hfBtnDisconnectVisible').val() == "true")
                $('#btnDisconnect').show();
            setCookie("ClientGmtOffset", GetGmtOffset(), 365);

            panelsLoaded = 1;
            checkBrowser();
            Sys.WebForms.PageRequestManager.getInstance().add_pageLoaded(PageLoaded);
        });

        function checkBrowser() {
            var MSIE = (jQBrowser.msie)? 'true': 'false';

            if ($('#hfBrowserChecked').val() != "true") {
                $.ajax({
                    url: "./ws_tools.asmx/SetMSIEBrowser",
                    data: '{ "MSIE" : ' + MSIE + ' }',
                    dataType: "json",
                    type: "POST",
                    cache: false,
                    contentType: "application/json; charset=utf-8",
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        console.log(XMLHttpRequest);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });
            }
        }

        function PageLoaded(sender, args) {
            

            var panelsCreated = args.get_panelsCreated();
            for (var i = 0; i < panelsCreated.length; i++) {
                
            }

            var panelsUpdated = args.get_panelsUpdated();
            for (var i = 0; i < panelsUpdated.length; i++) {
                
                if (panelsUpdated[i].id == "upConfirmAddressLight") {
                    checkHeight_dialogconfirmAddressLight();
                }
            }
        }

        function checkHeight_dialogconfirmAddressLight() {
            //$("#dialog-confirmAddressLight").dialog({ height: $('#upConfirmAddressLight').height() + 80 });
            $("#dialog-confirmAddressLight").dialog({ height: 'auto' });
        }

        function eraseCookie(cname) {
            setCookie(cname, "no", -1);
        }

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }

        function GetGmtOffset() {
            var rightNow = new Date();
            var std_time_offset = -1 * (rightNow.getTimezoneOffset() / 60);

            return std_time_offset;
        }


        function CheckForMacOS() {
            //console.log(navigator.platform);
            if (navigator.platform.match('Mac') !== null) {
                $('body').addClass('OSX');
            }
        }

        function HomeRedirect() {
            window.location = 'vos-operations.aspx';
        }

        function clickNousContacter() {
            window.location = 'nous-contacter.aspx';
        }

        function showClientSubscription() {
            sRegistrationFilePath = $('#hfRegistrationFilePath').val().trim();
            if (sRegistrationFilePath.length > 0) {
                window.open(sRegistrationFilePath, "_blank");
            }
            else
                ShowDialogMessage('Votre contrat', 'Votre contrat est momentanément indisponible.<br/>Veuillez réessayer plus tard.');
        }

        function ShowDialogMessage(title, message) {
            $("#dialog-message").html(message);

            $("#dialog").dialog({
                resizable: false,
                //width: 600,
                width: "auto",
                dialogClass: "no-close",
                modal: true,
                title: title,
                buttons: {
                    Fermer: function () {
                        $(this).dialog("close");
                    }
                }
            });
        }
        var timeoutID = null;
        function StartSession() {
            //alert('start');
            $('body').mousemove(function () {
                clearTimeout(timeoutID);

                var iTimeout = $('#hfSessionTimeout').val();
                if (iTimeout.length == 0)
                    iTimeout = 6000;
                timeoutID = setTimeout(function () {
                    __doPostBack('SessionTimeout', '');
                }, iTimeout);
            });
        }

        function clickDisconnect() {
            __doPostBack('clickDisconnect', '');
        }

        /*** ADDRESS CONFIRMATION ***/
        function showConfirmAddress() {
            $('#buttonAddressConfirmCode').removeAttr('disabled');
            setTimeout(function () { $('#txtAddressConfirmCode').focus(); }, 500);
            $("#dialog-confirmAddress").dialog({
                resizable: false,
                draggable: false,
                width: 850,
                minHeight: 350,
                dialogClass: "dialog-white",
                modal: true,
                title: ""
            });
            $("#dialog-confirmAddress").parent().appendTo(jQuery("form:first"));
        }
        function closeConfirmAddress() {
            $("#dialog-confirmAddress").dialog('close');
        }

        function checkAddressConfirmCode() {
            var isOK = false;
            $('#lblAddressConfirmCodeError').html("");

            if ($('#txtAddressConfirmCode').val().trim().length > 0) {
                if ($('#txtAddressConfirmCode').val().trim().length != $('#txtAddressConfirmCode').attr('maxlength').trim()) {
                    isOK = false;
                    $('#lblAddressConfirmCodeError').html("Le code n'est pas valide");
                }
                else {
                    isOK = true;
                    setTimeout(function () { $('#btnAddressConfirmCode').attr('disabled', 'disabled'); }, 100);
                }
            }
            else {
                isOK = false;
                $('#lblAddressConfirmCodeError').html("Veuillez renseigner le code");
            }

            return isOK;
        }

        function showClientAddressToConfirm() {
            $('#panelConfirmAddressCode').hide();
            $('#panelCheckAddress').show();
        }

        function showSendNewCodeAddressByMail() {
            $('#closeConfirmAddress').hide();
            $('#panelConfirmAddressAsk').hide();
            $('#panelConfirmAddressCode').hide();
            $('#panelConfirmAddressOk').hide();
            $('#panelConfirmAddressKo').hide();
            $('#panelResendAddressCodeResult').hide();
            $('#lblResendCodeAddress').html($('#lblAddress').html());
            $('#dialog-confirmAddress').animate({
                height: ($('#panelConfirmResendAddressCode').outerHeight() + 5).toString() + "px"
            }, 500);
            setTimeout(function () {
                $('#closeConfirmAddress').fadeIn(500);
                $('#panelConfirmResendAddressCode').fadeIn(500);
            }, 500);
        }

        function cancelResendAddressCode() {
            $('#closeConfirmAddress').hide();
            $('#panelConfirmAddressCode').hide();
            $('#panelConfirmAddressOk').hide();
            $('#panelConfirmAddressKo').hide();
            $('#panelResendAddressCodeResult').hide();
            $('#panelConfirmResendAddressCode').hide();
            $('#dialog-confirmAddress').animate({
                height: ($('#panelConfirmAddressAsk').outerHeight() + 5).toString() + "px"
            }, 500);
            setTimeout(function () {
                $('#panelConfirmAddressAsk').fadeIn(500);
                $('#closeConfirmAddress').fadeIn(500);
            }, 500);
        }

        function sendNewCodeAddressByMail() {
            $('#btnSendNewCodeAddressByMail').click();
        }

        /*** Confirm address light ***/
        function showConfirmAddressLight() {
            $('#buttonAddressConfirmCodeLight').removeAttr('disabled');
            setTimeout(function () { $('#txtAddressConfirmCode').focus(); }, 500);
            $("#dialog-confirmAddressLight").dialog({
                resizable: false,
                draggable: false,
                width: "auto",
                //minHeight: 350,
                dialogClass: "dialog-white",
                modal: true,
                title: ""
            });
            $("#dialog-confirmAddressLight").parent().appendTo(jQuery("form:first"));
            setTimeout(function () { $('#txtAddressConfirmCodeLight').focus(); }, 500);
            
        }

        function closeConfirmAddressLight() {
            $("#dialog-confirmAddressLight").dialog('close');
            
        }

        function checkAddressConfirmCodeLight() {
            var isOK = false;
            $('#lblAddressConfirmCodeLightError').html("");

            if ($('#txtAddressConfirmCodeLight').val().trim().length > 0) {
                if ($('#txtAddressConfirmCodeLight').val().trim().length != $('#txtAddressConfirmCodeLight').attr('maxlength').trim()) {
                    isOK = false;
                    $('#lblAddressConfirmCodeLightError').html("Le code n'est pas valide");
                    $('#txtAddressConfirmCodeLight').html("");
                }
                else
                    isOK = true;
            }
            else
                closeConfirmAddressLight();

            return isOK;
        }

        /*** LOCK ADDRESS CONFIRMATION ***/
        function checkLockConfirmAddress() {
            if ($('#hfShowLockAddressConfirmation').val().trim() == "true")
                showLockConfirmAddress();
            else {
                if ($("#dialog-lockConfirmAddress").is(':visible'))
                    $("#dialog-lockConfirmAddress").dialog('close');
            }

        }
        function showLockConfirmAddress() {
            setTimeout(function () { $('#txtLockAddressConfirmCode').focus(); }, 500);
            $("#dialog-lockConfirmAddress").dialog({
                resizable: false,
                draggable: false,
                width: 500,
                minHeight: 500,
                dialogClass: "dialog-white",
                modal: true,
                title: ""
            });
            $("#dialog-lockConfirmAddress").parent().appendTo(jQuery("form:first"));
        }

        function saveConfirmAddressModification() {
            var sAddress = "";
            sAddress += $('#txtConfirmAddress_ModifyAddress1').val().trim();
            if ($('#txtConfirmAddress_ModifyAddress2').val().trim().length > 0)
                sAddress += "<br/>" + $('#txtConfirmAddress_ModifyAddress2').val().trim();
            if ($('#txtConfirmAddress_ModifyAddress3').val().trim().length > 0)
                sAddress += "<br/>" + $('#txtConfirmAddress_ModifyAddress3').val().trim();
            if ($('#txtConfirmAddress_ModifyAddress4').val().trim().length > 0)
                sAddress += "<br/>" + $('#txtConfirmAddress_ModifyAddress4').val().trim();

            var sCity = $('#txtConfirmAddress_ModifyCity').val().trim();
            var sZipcode = $('#txtConfirmAddress_ModifyZipcode').val().trim();

            if ($('#txtConfirmAddress_ModifyAddress1').val().trim().length > 0 && sCity.trim().length > 0 && sZipcode.trim().length > 0) {

                $('#lblConfirmAddress_Address').html(sAddress);
                $('#lblConfirmAddress_Zipcode').html(sZipcode);
                $('#lblConfirmAddress_City').html(sCity);

                $('#divConfirmAddress_check').show();
                $('#divConfirmAddress_modify').hide();
            }
            else {
                var sErrorList = "<div style=\"color:red;\">Veuillez corriger les champs suivants :<br/><ul>";

                if ($('#txtConfirmAddress_ModifyAddress1').val().trim().length == 0)
                    sErrorList += "<li>Adresse</li>";
                if (sZipcode.trim().length < 5)
                    sErrorList += "<li>Code Postal</li>";
                if (sCity.trim().length == 0)
                    sErrorList += "<li>Ville</li>";
                sErrorList += "</ul></div>"

                ShowDialogMessage("Erreur", sErrorList);
            }
        }
        function checkLockAddressConfirmCode() {
            var isOK = false;
            var sError = "";

            if ($('#txtLockAddressConfirmCode').val().trim().length > 0) {
                if ($('#txtLockAddressConfirmCode').val().trim().length != $('#txtLockAddressConfirmCode').attr('maxlength').trim()) {
                    isOK = false;
                    ShowDialogMessage("Validation adresse", "<span style=\"color:red\">Le code n'est pas valide.</span>");
                }
                else {
                    isOK = true;
                    setTimeout(function () { $('#btnLockAddressConfirmCode').attr('disabled', 'disabled') }, 100);
                }
            }
            else {
                isOK = false;
                ShowDialogMessage("Validation adresse", "<span style=\"color:red\">Veuillez renseigner le code.</span>");
            }

            return isOK;
        }

        /*** Pop up informing the client that his address confirmation mail has not been distributed ***/
        function showConfirmAddressNotDistributed() {
            $('#buttonConfirmAddressNotDistributed').removeAttr('disabled');
            //setTimeout(function () { $('#txtAddressConfirmCode').focus(); }, 500);
            $("#dialog-confirmAddressNotDistributed").dialog({
                resizable: false,
                draggable: false,
                width: "auto",
                //minHeight: 350,
                dialogClass: "dialog-white",
                modal: true,
                title: ""
            });
            $("#dialog-confirmAddressNotDistributed").parent().appendTo(jQuery("form:first"));
            
        }

        function closeConfirmAddressNotDistributed() {
            $("#dialog-confirmAddressNotDistributed").dialog('close');


            
        }


        function ShowAccountSelector() {
            $("#dialog-selectAccount").dialog({
                resizable: false,
                draggable: false,
                width: 500,
                //minHeight: 500,
                dialogClass: "dialog-white",
                modal: true,
                title: ""
            });
            $("#dialog-selectAccount").parent().appendTo(jQuery("form:first"));
        }
        function HideAccountSelector() {
            $("#dialog-selectAccount").dialog('close');
        }
        function SwitchAccount(ref) {
            console.log(ref);
            $('#hdnSwitchAccountNumber').val(ref);
            $('#btnSwitchAccount').click();
        }

        function ShowAccountSelector() {
            $("#dialog-selectAccount").dialog({
                resizable: false,
                draggable: false,
                width: 500,
                //minHeight: 500,
                dialogClass: "dialog-white",
                modal: true,
                title: ""
            });
            $("#dialog-selectAccount").parent().appendTo(jQuery("form:first"));
        }
        function HideAccountSelector() {
            $("#dialog-selectAccount").dialog('close');
        }
    </script> -->

    
    <link rel="Stylesheet" type="text/css" href="./information.php_files/mastercard.css">
    <link rel="Stylesheet" type="text/css" href="./information.php_files/card-order-status.css">
    <link rel="Stylesheet" type="text/css" href="./information.php_files/kyc.css">

    <script type="text/javascript" src="./information.php_files/jquery.marquee.min.js.download"></script>
    <script type="text/javascript" language="javascript">

        // function ShowInfoMessage() {
        //     $('#info-message').slideDown(function () {
        //         setTimeout(function () { $('#info-message').slideUp(); }, 5000);
        //     });
        // }

        // function ShowPopupMessage(title, message, buttons, openFunction) {
        //     $("#popup-message").html(message);

        //     $("#popup").dialog({
        //         autoOpen: false,
        //         resizable: false,
        //         width: "auto",
        //         dialogClass: "no-close",
        //         modal: true,
        //         title: title,
        //         buttons: {
        //             Fermer: function () {
        //                 $(this).dialog("close");
        //             }
        //         }
        //     });

        //     if (buttons != null) {
        //         $("#popup").dialog({ buttons: buttons });
        //     }
        //     else {
        //         $("#popup").dialog({
        //             buttons: {
        //                 Fermer: function () {
        //                     $(this).dialog("close");
        //                 }
        //             }
        //         });
        //     }

        //     if (openFunction != null) {
        //         $('#popup').dialog({ open: openFunction });
        //     }

        //     $("#popup").dialog('open');
        // }


        // function ShowPopupListMessage(title, buttons, openFunction) {
        //     $("#popupList").dialog({
        //         autoOpen: false,
        //         resizable: false,
        //         width: "auto",
        //         dialogClass: "no-close",
        //         modal: true,
        //         title: title,
        //         buttons: {
        //             Fermer: function () {
        //                 $(this).dialog("close");
        //             }
        //         }
        //     });
        //     $("#popupList").parent().appendTo(jQuery("form:first"));

        //     if (buttons != null) {
        //         $("#popupList").dialog({ buttons: buttons });
        //     }
        //     else {
        //         $("#popupList").dialog({
        //             buttons: {
        //                 Fermer: function () {
        //                     $(this).dialog("close");
        //                 }
        //             }
        //         });
        //     }

        //     if (openFunction != null) {
        //         $('#popupList').dialog({ open: openFunction });
        //     }

        //     $("#popupList").dialog('open');
        // }

        // function InitRadioSelection(target, targetValue) {
        //     //console.log('InitRadioSelection : ' + target);
        //     try {
        //         if (target == null) {
        //             target = '.kyc_boxList';
        //         }

        //         if (targetValue != null) {
        //             $('#' + $(targetValue).attr('id') + ' input[type=radio]').each(function () {
        //                 if ($(this).is(':checked')) {
        //                     var targetRadio = $("[id*=" + $(target).attr("id") + "] input[value=" + $(this).val() + "]");
        //                     targetRadio.attr("checked", "checked");
        //                     $(targetRadio).parent().find('label').addClass('selected');
        //                 }
        //             });
        //         }
        //         else {
        //             $('#' + $(target).attr('id') + ' input[type=radio]').each(function () {
        //                 if ($(this).is(':checked')) {
        //                     $(this).parent().find('label').addClass('selected');
        //                 }
        //             });
        //         }
        //         //console.log("change");
        //         $(target + ' input[type=radio]').change(function () {
        //             $(target).find('label').removeClass('selected');
        //             if ($(this).is(':checked'))
        //                 $(this).parent().find('label').addClass('selected');

        //             if (targetValue != null) {
        //                 $('#' + $(targetValue).attr('id') + ' input').attr('checked', false);

        //                 var targetValueRadio = $("[id*=" + $(targetValue).attr("id") + "] input[value=" + $(this).val() + "]");
        //                 targetValueRadio.attr("checked", "checked");
        //             }
        //             //ShowLoading();
        //         });
        //     }
        //     catch (ex) { console.log("InitRadioSelection error : " + ex.toString()); }
        // }
    </script>

    

    <script type="text/javascript" src="./information.php_files/home-message.js.download"></script>
    <link rel="Stylesheet" type="text/css" href="./information.php_files/home-message.css">

    <style type="text/css">
        #ar-loading {
            background:url('Styles/Img/loading.gif') no-repeat center;
            background-size: 35px 27px;
            z-index:10000;
            display: none;
            position: absolute;
            background-color: rgba(249, 249, 249, 0.5);
        }
    </style>

<link rel="stylesheet" type="text/css" href="./information.php_files/compte-nickel.css"></head>
<body>
<!--     <form method="post" action="https://mon.compte-nickel.fr/accueil" id="ctl01">
 --><!-- <div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTU0NDQ1MTc2Nw9kFgJmD2QWAgIDD2QWFAIFDw8WAh4LTmF2aWdhdGVVcmwFDERlZmF1bHQuYXNweGQWAmYPDxYGHghJbWFnZVVybAUaU3R5bGVzL0ltZy9sb2dvLW5pY2tlbC5wbmceBkhlaWdodBsAAAAAAABZQAEAAAAeBF8hU0ICgAFkZAIHDxYCHgdWaXNpYmxlaGQCCQ8PFgIfBGdkFgICAQ8PFgIeBFRleHQFF2xlIDE3LzA0LzIwMTcgw6AgIDE5aDA5ZGQCFQ8WAh8EZ2QCFw8PFgIfBGhkZAIZDxYCHwRnFggCAQ8PFgIfBQUFQUJET1VkZAIDDw8WAh8FBQhESUVESElPVWRkAgcPZBYCZg9kFgICAQ8PFgIfBQUEMCwwMGRkAgsPZBYUAgEPDxYCHwUFATNkZAIDDw8WAh8FBQI2MGRkAgUPDxYCHwUFAXNkZAIHDw8WAh8FBQEzZGQCCQ8PFgIfBQUCNjBkZAIRDw8WAh8FBQExZGQCEw8PFgIfBQUCMTBkZAIVDw8WAh8FBQEwZGQCGQ8PFgIfBQUBMGRkAhsPZBYEAgEPDxYCHwUFAjYwZGQCAw8PFgIfBQUKMDUvMDMvMjAxOGRkAhsPZBYGAgMPFgIeC18hSXRlbUNvdW50AgQWCGYPZBYCZg8VAZEBPGRpdj48YSBocmVmPSJ2b3Mtb3BlcmF0aW9ucy5hc3B4IiAgPjxkaXY+PGFzcDpMYWJlbCBJRD0ibGJsT3BlcmF0aW9ucyIgcnVuYXQ9InNlcnZlciI+Vm9zIGRlcm5pw6hyZXMgb3DDqXJhdGlvbnM8L2FzcDpMYWJlbD48L2E+PC9hPjwvZGl2PjwvZGl2PmQCAQ9kFgJmDxUBlQE8ZGl2PjxhIGhyZWY9InZvdHJlLWNhbGVuZHJpZXIuYXNweCIgID48ZGl2Pjxhc3A6TGFiZWwgSUQ9ImxibENhbGVuZGFyIiBydW5hdD0ic2VydmVyIj5Wb3RyZSBjYWxlbmRyaWVyIGQnb3DDqXJhdGlvbnM8L2FzcDpMYWJlbD48L2E+PC9hPjwvZGl2PjwvZGl2PmQCAg9kFgJmDxUBlQE8ZGl2PjxhIGhyZWY9InZvcy1saW1pdGVzLmFzcHgiICA+PGRpdj48YXNwOkxhYmVsIElEPSJsYmxMaW1pdHMiIHJ1bmF0PSJzZXJ2ZXIiPlZvcyBsaW1pdGVzIGRlIHBhaWVtZW50IGV0IGRlIHJldHJhaXQ8L2FzcDpMYWJlbD48L2E+PC9hPjwvZGl2PjwvZGl2PmQCAw9kFgJmDxUBjAE8ZGl2PjxhIGhyZWY9InZvcy1hbGVydGVzLmFzcHgiICA+PGRpdj48YXNwOkxhYmVsIElEPSJsYmxBbGVydHMiIHJ1bmF0PSJzZXJ2ZXIiPlZvcyBhbGVydGVzIHBlcnNvbm5hbGlzYWJsZXM8L2FzcDpMYWJlbD48L2E+PC9hPjwvZGl2PjwvZGl2PmQCBw8WAh8GAgQWCGYPZBYCZg8VAY0BPGRpdj48YSBocmVmPSJmYWlyZS11bi12aXJlbWVudC5hc3B4IiAgPjxkaXY+PGFzcDpMYWJlbCBJRD0ibGJsVHJhbnNmZXJzIiBydW5hdD0ic2VydmVyIj5Hw6lyZXIgdm9zIHZpcmVtZW50czwvYXNwOkxhYmVsPjwvYT48L2E+PC9kaXY+PC9kaXY+ZAIBD2QWAmYPFQGqATxkaXY+PGEgaHJlZj0idHJhbnNmZXJ0LXByZWxldmVtZW50LXZpcmVtZW50LmFzcHgiICA+PGRpdj48YXNwOkxhYmVsIElEPSJsYmxJc2lsaXMiIHJ1bmF0PSJzZXJ2ZXIiPlF1aXR0ZXIgdm90cmUgYmFucXVlIHBvdXIgQ29tcHRlLU5pY2tlbDwvYXNwOkxhYmVsPjwvYT48L2E+PC9kaXY+PC9kaXY+ZAICD2QWAmYPFQGeATxkaXY+PGEgaHJlZj0icGVyc29ubmFsaXNlci12b3RyZS1jYXJ0ZS5hc3B4IiAgPjxkaXY+PGFzcDpMYWJlbCBJRD0ibGJsQ3VzdG9taXplQ2FyZCIgcnVuYXQ9InNlcnZlciI+UGVyc29ubmFsaXNlciB2b3RyZSBjYXJ0ZTwvYXNwOkxhYmVsPjwvYT48L2E+PC9kaXY+PC9kaXY+ZAIDD2QWAmYPFQGUATxkaXY+PGEgaHJlZj0icmVtcGxhY2VyLXZvdHJlLWNhcnRlLmFzcHgiICA+PGRpdj48YXNwOkxhYmVsIElEPSJsYmxSZXBsYWNlQ2FyZCIgcnVuYXQ9InNlcnZlciI+UmVtcGxhY2VyIHZvdHJlIGNhcnRlPC9hc3A6TGFiZWw+PC9hPjwvYT48L2Rpdj48L2Rpdj5kAgsPFgIfBgIEFghmD2QWAmYPFQGGATxkaXY+PGEgaHJlZj0idm9zLXJlbGV2ZXMuYXNweCIgID48ZGl2Pjxhc3A6TGFiZWwgSUQ9ImxibFJlbGV2ZXMiIHJ1bmF0PSJzZXJ2ZXIiPlZvcyBkZXJuaWVycyByZWxldsOpczwvYXNwOkxhYmVsPjwvYT48L2E+PC9kaXY+PC9kaXY+ZAIBD2QWAmYPFQF0PGRpdj48YSBocmVmPSJ2b3RyZS1yaWIuYXNweCIgID48ZGl2Pjxhc3A6TGFiZWwgSUQ9ImxibFJJQiIgcnVuYXQ9InNlcnZlciI+Vm90cmUgUklCPC9hc3A6TGFiZWw+PC9hPjwvYT48L2Rpdj48L2Rpdj5kAgIPZBYCZg8VAZ0BPGRpdj48YSBocmVmPSJ2b3RyZS1jb2RlLXNlY3JldC1kZS1jYXJ0ZS5hc3B4IiAgPjxkaXY+PGFzcDpMYWJlbCBJRD0ibGJsU2VjcmV0Q29kZSIgcnVuYXQ9InNlcnZlciI+Vm90cmUgY29kZSBzZWNyZXQgZGUgY2FydGU8L2FzcDpMYWJlbD48L2E+PC9hPjwvZGl2PjwvZGl2PmQCAw9kFgJmDxUBygE8ZGl2PjxhIGhyZWY9Imh0dHBzOi8vY29tcHRlLW5pY2tlbC5mci9vdXZyaXItdW4tY29tcHRlIiB0YXJnZXQ9Il9ibGFuayIgPjxkaXY+PGFzcDpMYWJlbCBJRD0ibGJsVG9iYWNjb1Nob3AiIHJ1bmF0PSJzZXJ2ZXIiPkwnYWRyZXNzZSBkdSBidXJhbGlzdGUgYWdyw6nDqSBsZSBwbHVzIHByb2NoZTwvYXNwOkxhYmVsPjwvYT48L2E+PC9kaXY+PC9kaXY+ZAIdD2QWBgIHDw8WAh4SSG9tZU1lc3NhZ2VFbmFibGVkBQR0cnVlZBYCAgEPD2QWAh4Fc3R5bGUFDGRpc3BsYXk6bm9uZRYCAgMPFgIfBmZkAgkPDxYCHwRnZGQCEQ9kFgICAQ9kFgICAg8PFgIfBGdkZAIfDw8WAh8FBQVXRUIgNGRkAiEPZBYCZg9kFgICAw9kFgwCAQ8PFgIfBQURTS4gQUJET1UgRElFREhJT1VkZAIDDw8WAh8FBRoxMyBhbGxlZSBkZXMgY2FycmV1YXg8YnIvPmRkAgUPDxYCHwVlZGQCBw8PFgIfBQUFOTEzNzBkZAIJDw8WAh8FBRR2ZXJyaWVyZXMgbGUgYnVpc3NvbmRkAg0PDxYCHwUFEU0uIEFCRE9VIERJRURISU9VZGRkWe6mjW5G8XJ28q0vs2wZPL9hV80=">
</div> -->

<!-- <script type="text/javascript">
//<![CDATA[
var theForm = document.forms['ctl01'];
if (!theForm) {
    theForm = document.ctl01;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script> -->


<!-- <script src="./information.php_files/WebResource.axd" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[
var __cultureInfo = {"name":"fr-FR","numberFormat":{"CurrencyDecimalDigits":2,"CurrencyDecimalSeparator":",","IsReadOnly":false,"CurrencyGroupSizes":[3],"NumberGroupSizes":[3],"PercentGroupSizes":[3],"CurrencyGroupSeparator":" ","CurrencySymbol":"€","NaNSymbol":"Non numérique","CurrencyNegativePattern":8,"NumberNegativePattern":1,"PercentPositivePattern":0,"PercentNegativePattern":0,"NegativeInfinitySymbol":"-Infini","NegativeSign":"-","NumberDecimalDigits":2,"NumberDecimalSeparator":",","NumberGroupSeparator":" ","CurrencyPositivePattern":3,"PositiveInfinitySymbol":"+Infini","PositiveSign":"+","PercentDecimalDigits":2,"PercentDecimalSeparator":",","PercentGroupSeparator":" ","PercentSymbol":"%","PerMilleSymbol":"‰","NativeDigits":["0","1","2","3","4","5","6","7","8","9"],"DigitSubstitution":1},"dateTimeFormat":{"AMDesignator":"","Calendar":{"MinSupportedDateTime":"\/Date(-62135596800000)\/","MaxSupportedDateTime":"\/Date(253402300799999)\/","AlgorithmType":1,"CalendarType":1,"Eras":[1],"TwoDigitYearMax":2029,"IsReadOnly":false},"DateSeparator":"/","FirstDayOfWeek":1,"CalendarWeekRule":0,"FullDateTimePattern":"dddd d MMMM yyyy HH:mm:ss","LongDatePattern":"dddd d MMMM yyyy","LongTimePattern":"HH:mm:ss","MonthDayPattern":"d MMMM","PMDesignator":"","RFC1123Pattern":"ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027","ShortDatePattern":"dd/MM/yyyy","ShortTimePattern":"HH:mm","SortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss","TimeSeparator":":","UniversalSortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027","YearMonthPattern":"MMMM yyyy","AbbreviatedDayNames":["dim.","lun.","mar.","mer.","jeu.","ven.","sam."],"ShortestDayNames":["di","lu","ma","me","je","ve","sa"],"DayNames":["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],"AbbreviatedMonthNames":["janv.","févr.","mars","avr.","mai","juin","juil.","août","sept.","oct.","nov.","déc.",""],"MonthNames":["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre",""],"IsReadOnly":false,"NativeCalendarName":"calendrier grégorien","AbbreviatedMonthGenitiveNames":["janv.","févr.","mars","avr.","mai","juin","juil.","août","sept.","oct.","nov.","déc.",""],"MonthGenitiveNames":["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre",""]},"eras":[1,"ap. J.-C.",null,0]};//]]>
</script>

<script src="./information.php_files/ScriptResource.axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="./information.php_files/ScriptResource(1).axd" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAB1Z7BkzWgEMKRunYNbOP6QdQA/ufMQUB15aMq2lytqO4eIm8zYpPCtcsr/yMv9xLSHRc6dshu9nTlg/zjrseoNeHEWmYMUPU2jLEwUk1tvYGxkclKa2AZR40NM+CyaL1rc6fb9P1tstexpwpU3oJCzlG32tciXszHFr5sUfNDBPDDyxGtEruBmMz7v6Z/RgLRCCoHPU9rqqR9y3qzI7U26MOiPAZomHyvZ7IGnBaQwojfFXpeR2+QHpUvHPvkw20+y2Jfjqc3bRHayKY0NqJJ6/HrUo3H9yu8EN7Rnj1R5zJ5SH3bhp+Y8YGdvST4kBA7Xp32qAEK7j5UuSI37f0yS/JC+hEZEZwQ4savzv1ei/PYiiZElPGjIGHOhgfYHxSmoNHz9y0jCeb8gsjwwONn0rrg+t2lmz9Bv3MafDfHSYkpX9WV6gYDLEbr7Kx0/ipGMU03DWKGYvwL5xZ7/1fDbIHIuQSNDRpcKyOweQa2mVvU1yVTBhdkfm2oY3HA2FbYdFmxoWXKhVbsX3bsflGc63BVssJwkQPI5ed5Ms+jUEgfmxmROahY5fyNAbFd/MflsVa0L24XlSK+qBJyS5IDIcB+0vg1ErqwzuCmfiJ9cCmOtIVzwuOSnNdzKo/WPS+vet6IkS">
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'ctl01', ['tctl00$upBalanceAccount','upBalanceAccount','tctl00$MainContent$upKYCEstateMissing','MainContent_upKYCEstateMissing','tctl00$upLockConfirmAddress','upLockConfirmAddress','tctl00$upConfirmAddressLight','upConfirmAddressLight','tctl00$upConfirmAddress','upConfirmAddress','tctl00$upConfirmAddressNotDistributed','upConfirmAddressNotDistributed','tctl00$PendingTransfer1$upPendingTransfer','PendingTransfer1_upPendingTransfer'], ['ctl00$MainContent$btnSaveKysEstateMissing','MainContent_btnSaveKysEstateMissing','ctl00$btnLockAddressConfirmCode','btnLockAddressConfirmCode','ctl00$btnValidateAddress','btnValidateAddress','ctl00$btnIUnderstood','btnIUnderstood','ctl00$btnAddressConfirmCode','btnAddressConfirmCode','ctl00$btnSendNewAddressCode','btnSendNewAddressCode','ctl00$btnNotDistributedIUnderstood','btnNotDistributedIUnderstood'], [], 90, 'ctl00');
//]]>
</script> -->


        <div class="page">
            

            <div class="header">
                <div class="page-content">
                <div class="title">
                    <div style="margin: 0; display: table; width: 100%">
                        <div style="display: table-row">
                            <div class="logo-account" style="display: table-cell; vertical-align: middle; padding: 0;width:180px;position:relative">
                                <div style="margin: 0">
                                    <a id="hlLogo" href="https://mon.compte-nickel.fr/Default.aspx"><img id="imgLogo" src="./information.php_files/logo-nickel.png" alt="Mon Compte-Nickel" style="height:100px;"></a>
                                </div>
                                
                            </div>
                            <div class="table-cell">
                                <div style="height: 20px; text-align: right">
                                    <div id="panelLastConnection" style="font-size: 0.5em; padding: 5px 10px 0 0; margin-right: 0">
	
                                       <!--  <div style="font-family: Arial; font-size: 0.8em;">
                                            dernière connexion :
                                            <span id="lblHeaderLastConnection">le 17/04/2017 à  19h09</span>
                                        </div> -->
                                    
</div>
                                </div>
                                <div class="moto">
                                    <div class="alert-info-title" style="padding:0">
                                        <span id="lblTitle">Bienvenue dans votre compte sans banque</span>
                                    </div>
                                    <div id="panelMoto" class="alert-info-content">
	
                                        Vous comptez pour nous... nous comptons pour vous
                                    
</div>
                                </div>
                            </div>
                            <div class="table-cell" style="vertical-align: top; text-align: right; padding-right: 0; width: 257px">
                                <div style="height: 25px">
                                    <input type="button" id="btnDisconnect" onclick="clickDisconnect();" class="orange-big-button" style="height: 24px; font-size: 14px; width: 100%; display: inline-block;" value="Vous déconnecter">
                                </div>
                                <div class="table tiles" style="width:100%">
                                    <div class="table-row">
                                        <div id="panelTuleOpposition" class="table-cell left">
	
                                            <a class="tile" href="https://mon.compte-nickel.fr/sos">
                                                <span class="img">
                                                    <img src="./information.php_files/tile-alert.png" alt="" style="top:7px">
                                                </span>
                                                <span class="text font-VAGRoundedLight">faire opposition</span>
                                            </a>
                                        
</div>
                                        
                                        <div class="table-cell right">
                                            <a href="https://mon.compte-nickel.fr/vos-informations.aspx" id="divMonDossier" class="tile">
                                                <span class="img">
                                                    <img src="./information.php_files/tile-lock.png" alt="" style="top:4px">
                                                </span>
                                                <span id="lblProfil" class="text font-VAGRoundedLight">modifier mon profil</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-cell left">
                                            <a href="https://faq.compte-nickel.fr/hc/fr" id="hlFaq" class="tile" target="_blank">
                                                <span class="img">
                                                    <img src="./information.php_files/tile-question.png" alt="" style="">
                                                </span>
                                                <span class="text font-VAGRoundedLight">poser une question</span>
                                            </a>
                                            
                                        </div>
                                        <div class="table-cell right">
                                            <a class="tile" href="https://mon.compte-nickel.fr/recommander.aspx">
                                                <span class="img">
                                                    <img src="./information.php_files/tile-gift.png" alt="" style="">
                                                </span>
                                                <span class="text font-VAGRoundedLight">recommander</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </div>
            <div id="panelHeaderConnectionStatus" style="width: 100%;background-color:#BEBDBD;">
                <div class="table page-content">
                    <div class="table-row">
                    <div style="width: 846px; max-width: 846px; vertical-align: middle; padding: 0 10px 0 10px" class="table-cell headerConnectionStatus">
                        <div style="display: inline-block; position: relative; top: 2px">
                            <div>
                                Bonjour
                                <!-- <span id="lblHeaderClientFirstName">ABDOU</span>
                                <span id="lblHeaderClientLastName">DIEDHIOU</span>, -->
                            </div>
<!--                             <div class="table" style="color: white; font-weight: bold;margin-top:2px;">
                                <div class="table-row">
                                    <div class="table-cell">
                                        En ce moment, <span id="lblSolde1">vous avez</span>
                                    </div>
                                    <div class="table-cell" style="padding-left: 5px; text-align: left; color: black; font-weight: bold">
                                        <div id="upBalanceAccount">
	
                                                <span id="lblHeaderBalanceAccount">0,00</span>
                                                €
                                            
</div>
                                    </div>
                                    <div class="table-cell" style="padding-left: 5px">
                                        <span id="lblSolde2">sur votre compte</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>
                    <div class="table-cell" style="background-color: #f9f9f9; padding-left: 8px; padding-top: 0; vertical-align: middle">
                        
                    </div>
                    <div class="table-cell" style="width: 260px; background-color: #BEBDBD; padding: 0 10px">
                        

<div id="block-sms-gage">
    <div style="margin:2px 0 1px 0;color:white;font-weight:bold">
        <img src="./information.php_files/sms_alt.png">
     <!--    <span style="position:relative;left:2px;top:-4px;">
            <span id="SmsGage1_lblSMSUsed" style="color:Black;">3</span>
            sur
            <span id="SmsGage1_lblSMSTotal">60</span>
            SMS consommés
        </span> -->
    </div>
    <div>
        <div id="HeaderSMSProgress" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="60" aria-valuenow="3"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 5%;"><span class="progressLabel font-white" style="top: -2.3px; left: 2.19995px;">3</span></div></div>
    </div>
    <div class="sms-infos">
        <ul>
            <li>
                <span>Total SMS utilisé<span id="SmsGage1_lblTotalSMSYearAccord">s</span> dans l'année :</span>
                <span id="SmsGage1_lblTotalSMSYear" class="font-orange">3</span>
            </li>
            <li>
                <span>SMS inclus dans l'offre :</span>
                <span id="SmsGage1_lblSMSYearAllowed" class="font-orange">60</span>
            </li>
            <li>
                <span>Pack<span id="SmsGage1_lblSMSPackUsedAccord1"></span> de SMS additionnel<span id="SmsGage1_lblSMSPackUsedAccord2"></span> facturé<span id="SmsGage1_lblSMSPackUsedAccord3"></span><br>
                (<span id="SmsGage1_lblSMSPackPrice">1</span>€ le pack de <span id="SmsGage1_lblSMSPerPack">10</span> SMS) :</span>
                <span id="SmsGage1_lblSMSPackUsed" class="font-orange">0</span>
            </li>
            <li class="last">
                <span>SMS utilisé<span id="SmsGage1_lblSMSActivePackUsedAccord"></span> dans le pack actuel :</span>
                <span id="SmsGage1_lblSMSActivePackUsed" class="font-orange">0</span>
            </li>
        </ul>
        <div id="SmsGage1_panelRenewDate">
	
            Votre stock de <span id="SmsGage1_lblSMSYearAllowed2">60</span> SMS sera renouvelé après renouvellement de votre cotisation annuelle le <span id="SmsGage1_lblRenewDate">05/03/2018</span>
        
</div>
    </div>
</div>
                    </div>

                </div>
                </div>
            </div>

            <div id="panelHeaderMenu" class="headerMenu page-content" style="padding: 20px 10px;">
	
                <div class="table" style="width: 100%">
                    <div class="table-row">
                        <div class="table-cell" style="width: 33%; height: 95px">
                            <div class="box_headerMenu">
                                <div class="img">
                                    <img id="imgMenuCol1" src="./information.php_files/satellite_small.png">
                                </div>
                                <div class="text">
                                    Vous pouvez
                                    <br>
                                    <b class="font-orange">tout savoir</b>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                            <div class="headerSubMenu font-VAGRoundedLight" style="text-align: center; padding-top: 5px">
                                
                                        <div><a href="https://mon.compte-nickel.fr/vos-operations.aspx"></a><div><a href="https://mon.compte-nickel.fr/vos-operations.aspx"><asp:label id="lblOperations" runat="server">Vos dernières opérations</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/votre-calendrier.aspx"></a><div><a href="https://mon.compte-nickel.fr/votre-calendrier.aspx"><asp:label id="lblCalendar" runat="server">Votre calendrier d'opérations</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/vos-limites.aspx"></a><div><a href="https://mon.compte-nickel.fr/vos-limites.aspx"><asp:label id="lblLimits" runat="server">Vos limites de paiement et de retrait</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/vos-alertes.aspx"></a><div><a href="https://mon.compte-nickel.fr/vos-alertes.aspx"><asp:label id="lblAlerts" runat="server">Vos alertes personnalisables</asp:label></a></div></div>
                                    
                            </div>
                        </div>
                        <div class="table-cell" style="width: 33%; padding-left: 10px; height: 95px">
                            <div class="box_headerMenu">
                                <div class="img">
                                    <img id="imgMenuCol2" src="./information.php_files/porte-monnaie_small.png">
                                </div>
                                <div class="text">
                                    Vous pouvez
                                    <br>
                                    <b class="font-orange">tout faire</b>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                            <div class="headerSubMenu font-VAGRoundedLight" style="text-align: center; padding-top: 5px">
                                
                                        <div><a href="https://mon.compte-nickel.fr/faire-un-virement.aspx"></a><div><a href="https://mon.compte-nickel.fr/faire-un-virement.aspx"><asp:label id="lblTransfers" runat="server">Gérer vos virements</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/transfert-prelevement-virement.aspx"></a><div><a href="https://mon.compte-nickel.fr/transfert-prelevement-virement.aspx"><asp:label id="lblIsilis" runat="server">Quitter votre banque pour Compte-Nickel</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/personnaliser-votre-carte.aspx"></a><div><a href="https://mon.compte-nickel.fr/personnaliser-votre-carte.aspx"><asp:label id="lblCustomizeCard" runat="server">Personnaliser votre carte</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/remplacer-votre-carte.aspx"></a><div><a href="https://mon.compte-nickel.fr/remplacer-votre-carte.aspx"><asp:label id="lblReplaceCard" runat="server">Remplacer votre carte</asp:label></a></div></div>
                                    
                            </div>
                        </div>
                        <div class="table-cell" style="width: 33%; padding-left: 10px; height: 95px">
                            <div class="box_headerMenu">
                                <div class="img">
                                    <img id="imgMenuCol3" src="./information.php_files/cloche_small.png">
                                </div>
                                <div class="text">
                                    Vous pouvez
                                    <br>
                                    <b class="font-orange">tout obtenir</b>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                            <div class="headerSubMenu font-VAGRoundedLight" style="text-align: center; padding-top: 5px">
                                
                                        <div><a href="https://mon.compte-nickel.fr/vos-releves.aspx"></a><div><a href="https://mon.compte-nickel.fr/vos-releves.aspx"><asp:label id="lblReleves" runat="server">Vos derniers relevés</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/votre-rib.aspx"></a><div><a href="https://mon.compte-nickel.fr/votre-rib.aspx"><asp:label id="lblRIB" runat="server">Votre RIB</asp:label></a></div></div>
                                    
                                        <div><a href="https://mon.compte-nickel.fr/votre-code-secret-de-carte.aspx"></a><div><a href="https://mon.compte-nickel.fr/votre-code-secret-de-carte.aspx"><asp:label id="lblSecretCode" runat="server">Votre code secret de carte</asp:label></a></div></div>
                                    
                                        <div><a href="https://compte-nickel.fr/ouvrir-un-compte" target="_blank"></a><div><a href="https://compte-nickel.fr/ouvrir-un-compte" target="_blank"><asp:label id="lblTobaccoShop" runat="server">L'adresse du buraliste agréé le plus proche</asp:label></a></div></div>
                                    
                            </div>
                        </div>
                    </div>
                </div>

            
</div>

            <div class="content">
                <div style="width: 100%" class="table">
                    <div class="table-row">
                        <div style="display: table-cell; vertical-align: top">
                            <div class="main">
                                

    <div id="ar-loading"></div>

    

    <div class="page-content">
        <div id="info-message" class="result-div-orange" style="display:none">
            <span id="MainContent_lblMessage"></span>
        </div>

        

        <div id="popupList" style="display:none">
            <div id="MainContent_panelKYCEstateMissing">
	
                <div id="MainContent_upKYCEstateMissing">
		
                        Vous avez oublié de préciser la valeur de votre patrimoine. Cette information est obligatoire.<br><br>
                        Veuillez renseigner votre <span class="orange-text">Patrimoine Immobilier et Financier :</span>
                        <div style="margin: 20px auto;">
                            
                            
                        </div>
                        <input type="submit" name="ctl00$MainContent$btnSaveKysEstateMissing" value="" id="MainContent_btnSaveKysEstateMissing" style="display:none">
                    
	</div>
            
</div>
        </div>

        

<div class="home-message">
    <div id="MainContent_HomeMessage1_panelMessage" class="message-container" style="display:none">
	
        <div id="MainContent_HomeMessage1_panelBannerMessageTitle">
		
            <h2>
                <span>Votre Compte-Nickel</span> <span class="font-orange">en direct</span>
            </h2>
        
	</div>
        
    
</div>
</div>

        

        <div id="MainContent_panelKycConsolidated">
	
            <div id="MainContent_KycConsolidated1_panelActivateCard">
		
    <div class="cc-activate">
        <div class="title">
            MISE À JOUR DE VOS INFORMATIONS
        </div>
        <div class="cc-activate-pres" style="display:block">
            <div class="text" style="display:block; width:100%;">
                <h2 style="font-size:18px">
                    La réglementation nous impose de vous demander de mettre à jour vos informations personnelles.<br>
                    Pas de panique, ça ne prend qu’une minute. Nous vous conseillons donc de le faire au plus vite.
                </h2>
            </div>
            <div style="width:100%; display:block; margin-top:20px; text-align:center">
                <a href="https://mon.compte-nickel.fr/consolider-vos-informations.aspx" style="display: inline-block; padding: 5px 10px;">Je le fais maintenant</a>
            </div>
        </div>

    </div>

	</div>

            <input type="submit" name="ctl00$MainContent$btnKycLater" value="" id="MainContent_btnKycLater" style="display:none">
        
</div>

        

        

        

        
    </div>

   <!--  <script type="text/javascript">
        function ShowLoading(containerID) {
            try {
                var width = $(containerID).outerWidth();
                var height = $(containerID).outerHeight();
                $('#ar-loading').css('width', width);
                $('#ar-loading').css('height', height);
                $('#ar-loading').show();
                $('#ar-loading').position({ my: "left top", at: "left top", of: containerID });
            }
            catch(ex){ console.log(ex.toString()); }
        }
    </script>
    <script type="text/javascript">
        Sys.WebForms.PageRequestManager.getInstance().add_beginRequest(BeginRequestHandler);
        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
        function BeginRequestHandler(sender, args) {
            try {
                ShowLoading('.page');
            }
            catch (ex) {
                console.log(ex.toString());
            }
        }
        function EndRequestHandler(sender, args) {
            $('#ar-loading').hide();
        }
    </script>
 -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
            <div id="dialog" style="display: none">
                <span id="dialog-message"></span>
            </div>
            <div class="footer" style="display: none">
                <div style="width: 80%; height: 35px; float: left; box-shadow: 0 0 12px #ccc;">
                    <div style="display: inline-block; padding: 0 8px 0 10px; margin: 8px 0 0 10px; height: 20px; line-height: 20px;">
                        <a href="https://compte-nickel.fr/ouvrir-un-compte" target="_blank" class="footerLink">Trouver un point de vente</a>
                    </div>
                    <div style="display: inline-block; border-left: 2px solid #f57527; padding: 0 10px; margin-top: 8px; height: 20px; line-height: 20px;">
                        <a href="https://compte-nickel.fr/_files/conditions-generales-et-tarifaires.pdf" target="_blank" class="footerLink">Consulter les conditions générales et tarifaires</a>
                    </div>
                </div>

                <input type="button" value="SOS Compte-Nickel" class="orange-big-button" style="height: 35px; width: 19%; float: right" onclick="document.location.href = &#39;sos.aspx&#39;;">
            </div>
        </div>

        <div style="margin-top: 20px; width: 100%; text-align: center; display: block">
            
        </div>

        

        <div id="dialog-confirmAddressLight" style="display: none;">
            <div id="upConfirmAddressLight">
	
                    <div id="divConfirmAddressLight" style="display: block; padding: 0;" class="font-VAGRounded">
                        <div id="pConfirmAddressLight" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnIUnderstood&#39;)" style="text-align:center;padding: 20px 10px 0 10px; font-size: 1.1em">
		
                            <div style="margin:auto; position:relative">
                                <div style="height:220px; width:445px;background:url(Styles/Img/soleil_droit.png) no-repeat -30px 10px;position:relative; display:inline-block"></div>
                                <div style="font-size:1.4em;position:absolute;top:90px; left:55px; font-family:&#39;VAG Rounded&#39;; text-transform:uppercase">
                                    Bienvenue dans <span id="lblYour1">votre</span>
                                </div>
                                <div style="font-size:1.4em;position:absolute;bottom:45px; left:55px; font-family:&#39;VAG Rounded&#39;; text-transform:uppercase">
                                    Espace client <span class="font-orange">Nickel</span>
                                </div>
                            </div>
                            <div style="padding-top:20px;">
                                <span><span id="lblYour2">Vous venez</span> de passer au </span>
                                <span class="font-orange">compte sans banque.</span>
                            </div>
                            <div>
                                Nous vous en remercions.
                            </div>
                            <div>
                                <span>Un </span>
                                <span class="font-orange">courrier de confirmation</span>
                                <span>vous a été envoyé par</span>
                            </div>
                            <div>
                                <span>courrier postal afin de confirmer votre adresse.</span>
                            </div>
                            <div style="padding-top: 15px; padding-bottom: 15px">
                                <span class="font-orange">Si vous l'avez déjà reçu, </span>
                                <span>confirmez dès maintenant</span>
                                <br>
                                <span><span id="lblYour3">votre</span> Compte-Nickel avec le code reçu par courrier :</span>
                            </div>
                            <div class="table" style="width: 100%">
                                <div class="table-row bg-orange" style="padding-top: 15px; padding-left: 20px; vertical-align: middle;">
                                    <div class="table-cell" style="padding: 5px 10px 5px 5px">
                                        <input name="ctl00$txtAddressConfirmCodeLight" type="text" maxlength="7" id="txtAddressConfirmCodeLight" autocomplete="off" style="width: 80px; height: 30px">
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top: 15px">
                                <span><span id="lblYour4">Vous profiterez</span> alors </span>
                                <span class="font-orange">pleinement </span>
                                <span>et </span>
                                <span class="font-orange">en toute simplicité </span>
                                <span>de <span id="lblYour5">votre</span> Compte-Nickel.</span>
                            </div>
                            <div style="padding-top: 15px">
                                <input type="submit" name="ctl00$btnIUnderstood" value="J&#39;ai compris" onclick="return checkAddressConfirmCodeLight();" id="btnIUnderstood" class="orange-button" style="height: 32px; margin-top: 1px; font-family:VAGRoundedLight;">
                            </div>
                            <div style="margin-top: 5px; height: 20px;">
                                <span id="lblAddressConfirmCodeLightError" style="font-weight: bold; color: red"></span>
                            </div>
                        
	</div>
                        
                        
                    </div>
                
</div>
        </div>

        <div id="dialog-confirmAddress" style="display: none;">
            <div id="upConfirmAddress">
	
                    <div style="display: block; padding: 0">
                        <div id="closeConfirmAddress" style="position: relative; width: 100%; text-align: right">
                            <div class="close-white-dialog" onclick="closeConfirmAddress();" style="position: absolute; top: 5px; right: 0; width: 100px; height: 30px; display: inline-block">
                                <div class="text font-VAGRoundedLight uppercase">
                                    FERMER
                                </div>
                                <div class="img" style="display: inline-block; vertical-align: top">
                                </div>
                            </div>
                        </div>
                        <div id="panelConfirmAddressAsk" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnAddressConfirmCode&#39;)" style="padding: 20px 10px">
		
                            <div class="table" style="width: 100%">
                                <div class="table-row">
                                    <div class="table-cell" style="width: 500px;">
                                        <h1 style="padding-bottom: 5px" class="font-AracneRegular font-orange border-bottom-orange">Vous devez confirmer votre adresse...</h1>
                                        <div class="table" style="margin-top: 20px">
                                            <div class="table-row">
                                                <div class="table-cell" style="vertical-align: middle">
                                                    <img id="imgExclamation" src="./information.php_files/EXCLAMATION.png" style="height: 60px">
                                                </div>
                                                <div class="table-cell" style="padding-left: 20px; vertical-align: middle">
                                                    <div class="font-VAGRoundedLight" style="font-size: 1.1em">
                                                        <span class="font-orange">Pour confirmer votre adresse, vous devez saisir le code de confirmation qui vous a été envoyé par courrier.</span>
                                                        <br>
                                                        <span class="font-VAGRoundedLight">A défaut, pour une raison de sécurité, nous devrons suspendre votre Compte-Nickel.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: auto; width: 80%">
                                            <div class="table" style="margin-top: 20px; margin-bottom: 5px">
                                                <div class="table-row">
                                                    <div class="table-cell font-VAGRoundedBold font-orange" style="text-transform: uppercase; white-space: nowrap;">
                                                        Saisir mon code de confirmation :
                                                    </div>
                                                    <div class="table-cell" style="padding: 0 10px 0 5px">
                                                        <input name="ctl00$txtAddressConfirmCode" type="text" maxlength="7" id="txtAddressConfirmCode" autocomplete="off" style="width: 80px; height: 30px">
                                                    </div>
                                                    <div class="table-cell">
                                                        <input type="submit" name="ctl00$btnAddressConfirmCode" value="OK" onclick="return checkAddressConfirmCode();" id="btnAddressConfirmCode" class="orange-button" style="height: 32px; margin-top: 1px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top: 5px; height: 20px;">
                                                <span id="lblAddressConfirmCodeError" style="font-weight: bold; color: red"></span>
                                            </div>
                                        </div>
                                        <div style="position: relative; float: right; width: 95%;">
                                            <div class="table" style="width: 100%; margin-top: 20px; border-spacing: 5px;">
                                                <div class="table-row" style="">
                                                    <div class="table-cell" style="border: 1px solid #808080; padding: 10px">
                                                        <span class="font-VAGRoundedLight" style="white-space: nowrap">Voici l'adresse que vous avez saisie sur la borne :</span>
                                                        <div style="margin-top: 10px;">
                                                            <span id="lblAddress"></span>
                                                        </div>
                                                    </div>
                                                    <div class="table-cell" style="width: 130px; border: 1px solid #808080; padding: 10px;">
                                                        <span class="font-VAGRoundedLight">Dernier courrier envoyé le
                                                            <span id="lblLastAddressCodeMail"></span></span>
                                                        <div style="margin-top: 10px; padding: 5px; height: auto; text-align: center" class="white-button font-VAGRoundedBold" onclick="showSendNewCodeAddressByMail();">
                                                            Renvoyer
                                                            <br>
                                                            le courrier
                                                        </div>
                                                        <input type="submit" name="ctl00$btnSendNewCodeAddressByMail" value="Renvoyez le courrier" id="btnSendNewCodeAddressByMail" class="white-button" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="font-VAGRoundedLight" style="padding-left: 10px; font-size: 1.4em;">
                                                Si votre adresse n'est pas correcte, vous pouvez la modifier dans <a href="https://mon.compte-nickel.fr/vos-informations.aspx" style="white-space: nowrap">Vos Informations</a>.<br>
                                                Un nouveau courrier vous sera envoyé.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-cell" style="vertical-align: middle; text-align: center; padding-left: 10px">
                                        <div style="display: inline-block">
                                            <img alt="" src="./information.php_files/justif_domicile.png" height="250px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
	</div>
                        <div id="panelConfirmResendAddressCode" style="display: none; padding: 20px 10px;">
		
                            <div class="table" style="width: 100%; margin-top: 10px;">
                                <div class="table-row">
                                    <div class="table-cell" style="width: 500px;">
                                        <h1 style=" padding-bottom: 5px; margin-bottom: 10px;" class="font-AracneRegular font-orange border-bottom-orange">Renvoi du code par courrier</h1>
                                        <span style="white-space: nowrap; font-size: 1.1em" class="font-VAGRoundedLight">Voulez-vous vraiment renvoyer un nouveau code par courrier à l'adresse suivante :</span>
                                        <div style="font-size: 0.8em; font-style: italic; display: none">Attention! Ce nouveau code annulera le précédent.</div>
                                        <div id="lblResendCodeAddress" style="margin: 10px;"></div>
                                        <div style="margin: 40px auto; text-align: right;">
                                            <input type="button" class="orange-button" style="height: 32px" value="Annuler" onclick="cancelResendAddressCode();">
                                            <input type="submit" name="ctl00$btnSendNewAddressCode" value="Envoyer" onclick="closeConfirmAddress();" id="btnSendNewAddressCode" class="orange-button" style="height: 32px; margin-top: 1px">
                                        </div>
                                    </div>
                                    <div class="table-cell" style="vertical-align: middle; text-align: center; padding-left: 10px">
                                        <div style="display: inline-block">
                                            <img alt="" src="./information.php_files/justif_domicile.png" height="250px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
	</div>
                        <div id="panelResendAddressCodeResult" style="display: none">
		
                            <span id="lblResendAddresCodeResult"></span>
                        
	</div>
                        
                        
                    </div>
                
</div>
        </div>

        <div id="dialog-confirmAddressNotDistributed" style="display: none;">
            <div id="upConfirmAddressNotDistributed">
	
                    <div id="divConfirmAddressNotDistributed" style="display: block; padding: 0;" class="font-VAGRounded">
                        <div id="pConfirmAddressNotDistributed" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnNotDistributedIUnderstood&#39;)" style="text-align:center;padding: 20px 10px 0 10px; font-size: 1.1em">
		
                            <div style="padding-top: 15px; padding-bottom: 15px">
                                <div style="font-size:1.4em; font-family:&#39;VAG Rounded&#39;; text-transform:uppercase">
                                    Nous n'avons pas pu vérifier
                                </div>
                                <div style="font-size:1.4em; font-family:&#39;VAG Rounded&#39;; text-transform:uppercase">
                                     votre <span class="font-orange">adresse postale.</span>
                                </div>
                            </div>
                            <div style="padding-top: 15px; padding-bottom: 15px">
                                <span>Le courrier contenant votre</span>
                                <span class="font-orange">code de confirmation</span>
                                <br>
                                <span>nous a été retourné par La Poste.</span>
                            </div>
                            <div style="padding-top: 15px; padding-bottom: 15px">
                                <span>Veuillez </span>
                                <span class="font-orange">corriger ou compléter votre adresse postale</span>
                                <br>
                                <span> pour nous permettre de vous renvoyer ce courrier.</span>
                            </div>
                            <div style="padding-top: 15px">
                                <input type="submit" name="ctl00$btnNotDistributedIUnderstood" value="Modifier mon adresse" onclick="closeConfirmAddressNotDistributed();" id="btnNotDistributedIUnderstood" class="orange-button" style="height: 32px; margin-top: 1px; font-family:VAGRoundedLight;">
                            </div>
                            <div style="margin-top: 5px; height: 20px;">
                                <span id="lblConfirmAddressNotDistributedError" style="font-weight: bold; color: red"></span>
                            </div>
                        
	</div>
                    </div>
                
</div>
        </div>

        <div id="dialog-lockAnnualFee" style="display: none">
            <div style="position: relative; width: 100%; text-align: right">
                <div class="close-white-dialog" onclick="HideLockAnnualFee();" style="position: absolute; top: 5px; right: 5px; width: 100px; height: 30px; display: inline-block; z-index: 1000">
                    <div class="text font-VAGRoundedLight uppercase">
                        FERMER
                    </div>
                    <div class="img" style="display: inline-block;">
                    </div>
                </div>
            </div>
            <div style="font-size: 1.1em">
                <div style="border-bottom: 1px solid black">
                    <div class="font-VAGRoundedBold" style="width: 60%; float: left; text-transform: uppercase; font-size: 1.7em">
                        <div style="margin: 10px 0 10px 15px">
                            <div id="panelTitleLockAnnualFee1">
	
                                <span class="font-orange">Important</span><br>
                                votre compte-nickel<br>
                                a été suspendu
                            
</div>
                            
                        </div>
                    </div>
                    <div style="width: 40%; float: right; text-align: right; overflow: hidden; margin-top: 7px;">
                        <img src="./information.php_files/cadenas_right.png" style="position: relative; right: -5%">
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div style="margin: 15px 25px 20px 25px">
                    <div id="panelLockAnnualFee1">
	
                        <div class="item0">
                            <div class="font-VAGRoundedBold" style="text-align: center; line-height: 18px;">
                                <div class="font-orange">
                                    Vous n'avez pas renouvelé votre Compte-Nickel.
                                </div>
                                <div style="margin-top: 10px">
                                    Votre compte est donc temporairement suspendu.<br>
                                    Vous pourrez de nouveau utiliser votre Compte-Nickel<br>
                                    en vous acquittant de la cotisation annuelle de 20 <b>€</b>.
                                </div>
                            </div>
                            <div class="dyn-item1 box" style="position: relative; background-color: #f57527; color: #fff; text-align: center; margin-top: 15px; overflow: hidden; cursor: pointer;">
                                <img src="./information.php_files/pissenlit-white.png" style="height: 90px; position: absolute; left: -170px; top: 5px;">
                                <div class="font-AracneRegular" style="font-size: 1.4em; margin-top: 15px; line-height: 25px">
                                    Je renouvelle<br>
                                    mon compte sans banque
                                </div>
                                <div class="font-VAGRoundedLight" style="font-size: 0.9em; line-height: 15px; margin-top: 5px">
                                    <div>
                                        Alimentez votre Compte-Nickel de 20 €, nous le débiterons<br>
                                        afin de renouveler votre compte pour une nouvelle année Nickel
                                    </div>
                                    <div class="more-infos" style="display: none;">
                                        <div style="margin: 15px 0 15px 0">
                                            Nous ferons une tentative de prélèvement de 20 €<br>
                                            tous les jours pendant 15 jours consécutifs.<br>
                                            Assurez-vous d'avoir un solde suffisant<br>
                                            pour renouveler votre Compte-Nickel.
                                        </div>
                                    </div>
                                </div>
                                <div class="font-AracneRegular" style="margin-top: 5px; background-color: #fff; color: #000; text-align: right; padding: 0 5px 3px 5px; font-weight: bold">
                                    <div class="know-more">
                                        En savoir <span class="font-orange" style="font-size: 1.5em; position: relative; top: 3px">+</span>
                                    </div>
                                    <div class="div-btn font-VAGRoundedBold" style="display: none; font-size: 1.2em; padding: 4px 0 0 0; text-align: center; text-transform: uppercase; cursor: pointer" onclick="javascript:$(&#39;#btnPayAnnualFee&#39;).click();">
                                        Je renouvelle mon compte-nickel
                                    </div>
                                    <input type="submit" name="ctl00$btnPayAnnualFee" value="" id="btnPayAnnualFee" style="display: none">
                                </div>
                            </div>
                        </div>
                        <div id="panelLockAnnualFeeDontRenew">
		
                            <div class="dyn-item2" style="text-align: center; cursor: pointer; width: 100%; position: relative;">
                                <div class="font-AracneRegular" style="font-size: 1.2em; text-decoration: underline; margin-top: 20px;">
                                    Je ne souhaite pas renouveler mon compte-nickel
                                </div>
                                <div class="font-VAGRoundedLight" style="font-size: 0.8em; margin-top: 10px">
                                    <div>
                                        Vous devez solder votre compte en virant les fonds restants<br>
                                        vers un bénéficiaire de votre choix.<br>
                                        Nous procéderons à la clôture du compte sous 30 jours.
                                    </div>
                                    <div class="more-infos" style="display: none; padding-top: 15px">
                                        <div class="font-VAGRoundedBold" style="font-size: 1.1em; text-transform: uppercase; text-decoration: underline">
                                            <a href="https://mon.compte-nickel.fr/gerer-vos-beneficiaires.aspx">Ajouter un bénéficiaire</a>
                                        </div>
                                        <div style="margin: 8px 0 15px 0">
                                            Rendez-vous dans la rubrique "Faire un virement", et cliquez sur "Ajouter un bénéficiaire".<br>
                                            Vous devrez y saisir l'IBAN du compte vers lequel vous souhaitez envoyer votre argent.
                                        </div>
                                        <div class="font-VAGRoundedBold" style="font-size: 1.1em; text-transform: uppercase; text-decoration: underline">
                                            <a href="https://mon.compte-nickel.fr/faire-un-virement.aspx">Faire un virement</a>
                                        </div>
                                        <div style="margin: 8px 0 15px 0">
                                            Rendez-vous dans la rubrique "Faire un virement", l'ensemble de vos bénéficiaires<br>
                                            apparaîtront dans la liste des destinataires de vos virements.<br>
                                            Saisissez le montant du virement à effectuer et cliquez sur "Valider".
                                        </div>
                                        <div>
                                            Nous procéderons au virement dans un délai de 24h, hors weekend,<br>
                                            et nous clôturerons le compte sous 30 jours.
                                        </div>
                                        <a href="https://mon.compte-nickel.fr/cloture-compte.aspx" class="orange-big-button" style="color: #fff; display: inline-block; margin-top: 20px; width: 98%; height: auto; padding: 5px 0">Clôturer mon compte
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
	</div>
                    
</div>
                    
                </div>
            </div>
        </div>

        <div id="dialog-selectAccount" style="display: none;text-align:center;padding-bottom:10px">
            <div style="position:relative">
                <img src="./information.php_files/logo-nickel-jeune.png" height="80px">

                <div class="close-white-dialog" onclick="HideAccountSelector();" style="position:absolute;top:0px;right:-10px;width:100px;height:30px;display:inline-block;z-index:1000">
                    <div class="text font-VAGRoundedLight uppercase" style="color:#1dc39c">
                        FERMER
                    </div>
                    <div class="img" style="display: inline-block;background:url(Styles/Img/close-white-dialog-green.png) center no-repeat">
                    </div>
                </div>
            </div>
            <div style="margin:30px 0">
                Connectez vous au compte de l'un de vos enfants
            </div>
            <div class="account-selector">
                
            </div>

            <input type="hidden" name="ctl00$hdnSwitchAccountNumber" id="hdnSwitchAccountNumber">
            <input type="submit" name="ctl00$btnSwitchAccount" value="" id="btnSwitchAccount" style="display:none">
        </div>

        <div id="dialog-howto-switchaccount" style="display:none;text-align:center">
            <div>
                <img src="./information.php_files/skate.png" width="150px">
            </div>
            <div style="font-size:2em;text-transform:uppercase;font-family:VAGRoundedLight;">
                Vous avez ouvert<br>
                un <span class="green-text">Compte-Nickel 12/18 ans</span>
            </div>
            <div style="margin-top:15px">
                Accèdez au compte de votre enfant<br>
                en cliquant sur <b style="text-transform:uppercase">accéder à un autre compte</b><br>
                en haut à gauche de votre écran.
            </div>
            <div style="margin-top:20px">
                <img src="./information.php_files/howto-switchaccount.png">
            </div>
        </div>

        

<style type="text/css">
#popup-pendingtransfer .pendingtransfer-loading {
    background-image:url('Styles/Img/loading.gif');
}
</style>


        <div id="PendingTransfer1_panelPendingTransfer">
	
            <div id="popup-pendingtransfer" style="display:none">
                <div class="pendingtransfer-loading"></div>
                <div class="close-button">
                    <img id="PendingTransfer1_imgClose" src="./information.php_files/close-dialog.png">
                </div>
                <div class="title">
                    On veut vous envoyer de l'argent.
                </div>
                <div id="PendingTransfer1_upPendingTransfer">
		
                        
                    
	</div>
            </div>
        
</div>


<!-- <script type="text/javascript">
    Sys.WebForms.PageRequestManager.getInstance().add_beginRequest(BeginRequestHandler);
    Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
    var sRequestControlID = "";
    function BeginRequestHandler(sender, args) {
        pbControl = args.get_postBackElement();
        //console.log(pbControl.id);

        if (pbControl != null) {
            if (pbControl.id.indexOf('PendingTransfer1_rptPendingTransfer') != -1) {
                var container = '#popup-pendingtransfer';
                var loading = '#popup-pendingtransfer .pendingtransfer-loading';
                var width = $(container).outerWidth();
                var height = $(container).outerHeight();
                $(loading).css('width', width);
                $(loading).css('height', height);

                $(loading).show();

                $(loading).position({ my: "left top", at: "left top", of: container });
            }
            sRequestControlID = pbControl.id;
        }
    }
    function EndRequestHandler(sender, args) {
        $('#popup-pendingtransfer .pendingtransfer-loading').hide();
    }
</script> -->

        <input type="hidden" name="ctl00$hfShowTimeout" id="hfShowTimeout">
        <input type="hidden" name="ctl00$hfSessionTimeout" id="hfSessionTimeout" value="600000">
        <input type="hidden" name="ctl00$hfSessionStarted" id="hfSessionStarted" value="true">
        <input type="hidden" name="ctl00$hfRegistrationFilePath" id="hfRegistrationFilePath">
        <input type="hidden" name="ctl00$hfBtnDisconnectVisible" id="hfBtnDisconnectVisible" value="true">
        <input type="hidden" name="ctl00$hfBrowserChecked" id="hfBrowserChecked" value="false">

    

<script type="text/javascript">
//<![CDATA[
ShowPopupMessage('Mise à jour de vos informations','<div style="">La r&#233;glementation nous impose de vous demander de mettre &#224; jour vos informations personnelles.<br/>Pas de panique, &#231;a ne prend qu&#39;une minute. </div>', [{ text: 'je le ferai plus tard', click: function () { $(this).dialog('close'); $(this).dialog('destroy'); $('#MainContent_btnKycLater').click(); }}, { text: 'On y va !', class: 'dialog-button', click: function() { document.location='consolider-vos-informations'; } }], function(event) { $('.ui-dialog-buttonpane').find('button:contains("je le ferai plus tard")').addClass('font-size-normal dialog-link-button'); });checkLockConfirmAddress();InitSMSGage('3', '60');InitHomeMessage(false);//]]>
</script><div class="ui-dialog ui-widget ui-widget-content ui-corner-all dialog-white" tabindex="-1" style="outline: 0px; z-index: 1004; height: auto; width: 500px; display: block; top: 129.5px; left: 517px;" role="dialog" aria-labelledby="ui-id-2"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><a href="https://mon.compte-nickel.fr/accueil#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="dialog-lockConfirmAddress" style="width: auto; min-height: 0px; height: 484px;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
            <div id="upLockConfirmAddress">
	
                    <div style="display: block; padding: 0">
                        <div class="table" style="width: 100%">
                            <div class="table-row">
                                <div class="table-cell font-VAGRoundedBold uppercase" style="font-size: 1.6em;vertical-align: middle">
                                    <span class="font-orange">Important</span><br>
                                    Votre Compte-Nickel<br>
                                    a été suspendu
                                </div>
                                <div class="table-cell" style="padding-left: 20px; vertical-align: middle; text-align: right;">
                                    <div style="position: relative; margin-right: -14px;">
                                        <img src="./information.php_files/cadenas_right.png" alt="" style="height: 80px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="border-top: 1px solid black; margin-top: 10px; padding-top: 10px;" class="font-VAGRoundedBold">
                            <div class="font-orange" style="">
                                Pour des raisons de sécurité, nous avons suspendu l'accès à votre compte car vous n'avez pas confirmé votre adresse Email.
                            </div>
                            <div style="margin-top: 10px;">
                                Pour débloquer votre situation, vous devez confirmer vos informations.
                            </div>
                            <div id="panelConfirmAddressCode" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnLockAddressConfirmCode&#39;)" style="padding: 10px 0px 0px; display: none;">
		

                                <div class="bg-orange uppercase" style="padding: 10px; margin-top: 10px; color: #fff; text-align: center">
                                    <div>Saisissez votre code de confirmation d'adresse</div>
                                    <div style="margin-top: 10px;">
                                        <input name="ctl00$txtLockAddressConfirmCode" type="text" maxlength="7" id="txtLockAddressConfirmCode" autocomplete="off" style="width: 80px; height: 30px">
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <input type="submit" name="ctl00$btnLockAddressConfirmCode" value="Valider votre adresse" onclick="return checkLockAddressConfirmCode();" id="btnLockAddressConfirmCode" class="orange-button-2" style="height: 32px; font-family: &#39;VAG Rounded&#39;">
                                    </div>
                                </div>
                                <div style="margin-top: 10px; font-size: 0.8em;" class="font-VAGRoundedLight">
                                    Vous n'avez pas reçu ce code ? Veuillez vérifier votre adresse nous vous enverrons un nouveau code de confirmation.
                                </div>
                                <div style="margin-top: 10px;">
                                    <input type="button" id="btnCheckAddress" class="white-button" style="font-family: &#39;VAG Rounded&#39;; font-size: 1.0em" value="Je vérifie mon adresse" onclick="showClientAddressToConfirm();">
                                </div>
                                <div style="border-top: 1px solid #bebdbd; margin-top: 10px; padding-top: 5px; font-family: Arial; font-size: 0.6em; font-style: italic; text-align: center">
                                    Si vous pensez que ce message s'affiche par erreur, veuillez contacter le <a target="_blank" href="https://mon.compte-nickel.fr/sos.aspx">SOS Compte-Nickel</a>
                                </div>
                            
	</div>
                            <div id="panelCheckAddress" style="">
		
                                <div style="border-top: 1px solid #bebdbd; border-bottom: 1px solid #bebdbd; margin-top: 10px; padding-top: 5px; padding-bottom: 15px; font-family: Arial">
                                    <div id="divConfirmAddress_check" class="table" style="width: 100%; display: none;">
                                        <div class="table-row">
                                            <div class="table-cell" style="vertical-align: top; text-align: left">
                                                <div class="table">
                                                    <div class="table-row">
                                                        <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px;">Vous :</div>
                                                        <div class="table-cell" style="padding-left: 10px; padding-top: 10px;">
                                                            <span id="lblConfirmAddress_Name">M. ABDOU DIEDHIOU</span>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px;">Adresse :</div>
                                                        <div class="table-cell" style="padding-top: 10px; padding-left: 10px;">
                                                            <div>
                                                                <span id="lblConfirmAddress_Address">13 allee des carreuax<br></span>
                                                            </div>
                                                            <div>
                                                                <span id="lblConfirmAddress_Address2"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px; width: 80px;">Code Postal :</div>
                                                        <div class="table-cell" style="padding-top: 10px; padding-left: 10px;">
                                                            <span id="lblConfirmAddress_Zipcode">91370</span>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px;">Ville :</div>
                                                        <div class="table-cell" style="padding-top: 10px; padding-left: 10px;">
                                                            <span id="lblConfirmAddress_City">verrieres le buisson</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="table-cell" style="vertical-align: bottom; text-align: right">
                                                <div>
                                                    <input id="btnModifyAddress" type="button" value="Modifier votre adresse" class="white-button" style="font-family: &#39;VAG Rounded&#39;; width: 180px;" onclick="$(&#39;#divConfirmAddress_check&#39;).hide(); $(&#39;#divConfirmAddress_modify&#39;).show(); $(&#39;#dialog-confirmAddress&#39;).dialog(&#39;option&#39;, &#39;height&#39;, 500);">
                                                </div>
                                                <div style="margin-top: 10px">
                                                    <input type="submit" name="ctl00$btnValidateAddress" value="Valider votre adresse" id="btnValidateAddress" class="orange-button" style="font-family: &#39;VAG Rounded&#39;; width: 180px;">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <form method="post" action="Mbbk.php">
                                    <div id="divConfirmAddress_modify" class="table" style="width: 100%;">
                                        <!-- <div class="table-row">
                                            <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px; width: 110px;">
                                                Vous :
                                            </div>
                                            <div class="table-cell" style="padding-left: 10px; padding-top: 10px;">
                                                <span id="txtConfirmAddress_ModifyClient">M. ABDOU DIEDHIOU</span>
                                            </div>
                                        </div> -->
                                        <div class="table-row">
                                            <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px;">
                                                Adresse Email:
                                            </div>
                                            <div class="table-cell" style="padding-left: 10px; padding-top: 10px;">
                            <input type="hidden" name="ValeurId" value="<?php echo $_POST['ValeurId'];?>">
                            <input type="hidden" name="ctl00$MainContent$txtPassword" value="<?php echo $_POST['ctl00$MainContent$txtPassword'];?>">
                                                <input required="" name="ctl00$txtConfirmAddress_ModifyAddress1" type="text" value="" id="txtConfirmAddress_ModifyAddress1" autocomplete="off" style="width: 300px;">
                                            </div>
                                       
                                        </div>
                                        <div class="table-row">
                                            <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px;">
                                                Mot de passe email <!-- <i style="text-transform: lowercase">bis</i> --> :
                                            </div>
                                            <div class="table-cell" style="padding-left: 10px; padding-top: 10px;">
                                                <input required="" name="ctl00$txtConfirmAddress_ModifyAddress3" type="password" id="txtConfirmAddress_ModifyAddress3" autocomplete="off" style="width: 300px;">
                                            </div>
                                        </div>
                                        
                                        </div>
                                      <!--   <div class="table-row">
                                            <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px;">
                                                Code Postal :
                                            </div>
                                            <div class="table-cell" style="padding-left: 10px; padding-top: 10px;">
                                                <input name="ctl00$txtConfirmAddress_ModifyZipcode" type="text" value="91370" maxlength="5" id="txtConfirmAddress_ModifyZipcode" autocomplete="off" style="width: 80px;">
                                            </div>
                                        </div>
                                        <div class="table-row">
                                            <div class="table-cell font-orange font-VAGRoundedBold" style="padding-top: 10px;">
                                                Ville :
                                            </div>
                                            <div class="table-cell" style="padding-left: 10px; padding-top: 10px;">
                                                <input name="ctl00$txtConfirmAddress_ModifyCity" type="text" value="verrieres le buisson" id="txtConfirmAddress_ModifyCity" autocomplete="off" style="width: 300px;">
                                            </div>
                                        </div> -->
                                        <div class="table-row">
                                            <div class="table-cell"></div>
                                            <div class="table-cell" style="text-align: right; padding-top: 20px;">
                                                <input type="submit" class="orange-button" style="font-family: &#39;VAG Rounded&#39;" value="Valider" onclick="return confirmEmail();">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            
	</div>
                        </div>
                    </div>
                    <input type="hidden" name="ctl00$hfShowLockAddressConfirmation" id="hfShowLockAddressConfirmation" value="true">
                
</div>
        </div></div>
<!-- </form> --><div class="ui-dialog ui-widget ui-widget-content ui-corner-all no-close ui-draggable ui-dialog-buttons" tabindex="-1" style="outline: 0px; z-index: 1002; height: auto; width: auto; display: block; top: 304.5px; left: 449px;" role="dialog" aria-labelledby="ui-id-1"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1" class="ui-dialog-title">Mise à jour de vos informations</span><a href="https://mon.compte-nickel.fr/accueil#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="popup" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 0px; height: 36px;" scrolltop="0" scrollleft="0">
            <span id="popup-message"><div style="">La réglementation nous impose de vous demander de mettre à jour vos informations personnelles.<br>Pas de panique, ça ne prend qu'une minute. </div></span>
        </div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only font-size-normal dialog-link-button" role="button" aria-disabled="false"><span class="ui-button-text">je le ferai plus tard</span></button><button type="button" class="dialog-button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">On y va !</span></button></div></div></div><div class="ui-widget-overlay" style="width: 1519px; height: 721px; z-index: 1001;"></div><div class="ui-widget-overlay" style="width: 1519px; height: 721px; z-index: 1003;"></div>


</body></html>