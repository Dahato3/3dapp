function swap(selected) {
    if (selected == 'fanta') {
            $('#x3dModelTitle_Costa').hide();
            $('#x3dModelTitle_Oasis').hide();
            $('#x3dModelTitle_Fanta').show();

            $('#costaModel1').hide();
            $('#oasisModel1').hide();
            $('#fantaModel1').show();

            $('#x3dCreationMethod_Costa').hide();
            $('#x3dCreationMethod_Oasis').hide();
            $('#x3dCreationMethod_Fanta').show();
    }
    else if (selected == 'oasis') {
        $('#x3dModelTitle_Costa').hide();
        $('#x3dModelTitle_Oasis').show();
        $('#x3dModelTitle_Fanta').hide();

        $('#costaModel1').hide();
        $('#oasisModel1').show();
        $('#fantaModel1').hide();

        $('#x3dCreationMethod_Costa').hide();
        $('#x3dCreationMethod_Oasis').show();
        $('#x3dCreationMethod_Fanta').hide();

    }
    else if (selected == 'costa') {
        $('#x3dModelTitle_Costa').show();
        $('#x3dModelTitle_Oasis').hide();
        $('#x3dModelTitle_Fanta').hide();

        $('#costaModel1').show();
        $('#oasisModel1').hide();
        $('#fantaModel1').hide();

        $('#x3dCreationMethod_Costa').show();
        $('#x3dCreationMethod_Oasis').hide();
        $('#x3dCreationMethod_Fanta').hide();
    }
}

function changeVisibleNode(NodeId) {
    document.getElementById("switcher").setAttribute("whichChoice", NodeId);
    if (NodeId == 0) {
        costaDisplay();
    }
    else if (NodeId == 1) {
        oasisDisplay();
    }
    else if (NodeId == 2) {
        fantaDisplay();
    }
}

function costaDisplay() {

        $('#x3dModelTitle_Costa').show();
        $('#x3dModelTitle_Oasis').hide();
        $('#x3dModelTitle_Fanta').hide();

        $('#x3dCreationMethod_Costa').show();
        $('#x3dCreationMethod_Oasis').hide();
        $('#x3dCreationMethod_Fanta').hide();

}
function oasisDisplay() {

        $('#x3dModelTitle_Costa').hide();
        $('#x3dModelTitle_Oasis').show();
        $('#x3dModelTitle_Fanta').hide();
        
        $('#x3dCreationMethod_Costa').hide();
        $('#x3dCreationMethod_Oasis').show();
        $('#x3dCreationMethod_Fanta').hide();

}
function fantaDisplay() {

        $('#x3dModelTitle_Costa').hide();
        $('#x3dModelTitle_Oasis').hide();
        $('#x3dModelTitle_Fanta').show();

        $('#x3dCreationMethod_Costa').hide();
        $('#x3dCreationMethod_Oasis').hide();
        $('#x3dCreationMethod_Fanta').show();

}

// function costaScene() {
//     nSwitch = 0;
//     document.getElementById("switcher").setAttribute("whichChoice", nSwitch);
// }
// function oasisScene() {
//     nSwitch = 1;
//     document.getElementById("switcher").setAttribute("whichChoice", nSwitch);
// }
// function fantaScene() {
//     nSwitch = 2;
//     document.getElementById("switcher").setAttribute("whichChoice", nSwitch);
// }


// function versionOne() {
//     isSelectedCosta = document.getElementById('x3dModelTitle_Costa').getAttribute('style');
//     isSelectedOasis = document.getElementById('x3dModelTitle_Oasis').getAttribute('style');
//     isSelectedFanta = document.getElementById('x3dModelTitle_Fanta').getAttribute('style');

//     if (isSelectedCosta == "") {
//         document.getElementById('costaModel1').setAttribute('style', '')
//         document.getElementById('costaModel2').setAttribute('style', 'display: none;')
//         document.getElementById('costaModel3').setAttribute('style', 'display: none;')
//     }
//     else if (isSelectedOasis == "") {
//         document.getElementById('oasisModel1').setAttribute('style', '')
//         document.getElementById('oasisModel2').setAttribute('style', 'display: none;')
//         document.getElementById('oasisModel3').setAttribute('style', 'display: none;')
//     }
//     else if (isSelectedFanta == "") {
//         document.getElementById('fantaModel1').setAttribute('style', '')
//         document.getElementById('fantaModel2').setAttribute('style', 'display: none;')
//         document.getElementById('fantaModel3').setAttribute('style', 'display: none;')
//     }
// }

// function versionTwo() {
//     isSelectedCosta = document.getElementById('x3dModelTitle_Costa').getAttribute('style');
//     isSelectedOasis = document.getElementById('x3dModelTitle_Oasis').getAttribute('style');
//     isSelectedFanta = document.getElementById('x3dModelTitle_Fanta').getAttribute('style');

//     if (isSelectedCosta == "") {
//         document.getElementById('costaModel1').setAttribute('style', 'display: none;')
//         document.getElementById('costaModel2').setAttribute('style', '')
//         document.getElementById('costaModel3').setAttribute('style', 'display: none;')
//     }
//     else if (isSelectedOasis == "") {
//         document.getElementById('oasisModel1').setAttribute('style', 'display: none;')
//         document.getElementById('oasisModel2').setAttribute('style', '')
//         document.getElementById('oasisModel3').setAttribute('style', 'display: none;')
//     }
//     else if (isSelectedFanta == "") {
//         document.getElementById('fantaModel1').setAttribute('style', 'display: none;')
//         document.getElementById('fantaModel2').setAttribute('style', '')
//         document.getElementById('fantaModel3').setAttribute('style', 'display: none;')
//     }
// }

// function versionThree() {
//     isSelectedCosta = document.getElementById('x3dModelTitle_Costa').getAttribute('style');
//     isSelectedOasis = document.getElementById('x3dModelTitle_Oasis').getAttribute('style');
//     isSelectedFanta = document.getElementById('x3dModelTitle_Fanta').getAttribute('style');

//     if (isSelectedCosta == "") {
//         document.getElementById('costaModel1').setAttribute('style', 'display: none;')
//         document.getElementById('costaModel2').setAttribute('style', 'display: none;')
//         document.getElementById('costaModel3').setAttribute('style', '')
//     }
//     else if (isSelectedOasis == "") {
//         document.getElementById('oasisModel1').setAttribute('style', 'display: none;')
//         document.getElementById('oasisModel2').setAttribute('style', 'display: none;')
//         document.getElementById('oasisModel3').setAttribute('style', '')
//     }
//     else if (isSelectedFanta == "") {
//         document.getElementById('fantaModel1').setAttribute('style', 'display: none;')
//         document.getElementById('fantaModel2').setAttribute('style', 'display: none;')
//         document.getElementById('fantaModel3').setAttribute('style', '')
//     }
// }