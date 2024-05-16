

    selectFirstPage();

    function selectFirstPage() {

        $('#about').hide();
        $('#models').hide();
        $('#homeCosta').show();
        $('#homeOasis').hide();
        $('#homeFanta').hide();



        

        // $('#navModels').click(function() {
            
        // });
     }

    function selectCostaPage() {
        $('#about').hide();
        $('#models').hide();
        $('#homeCosta').show();
        $('#homeOasis').hide();
        $('#homeFanta').hide();

        document.getElementById('headerColor').style.backgroundColor = 'rgba(115, 7, 36, 0.716)'; 
        document.getElementById('footerColor').style.backgroundColor = 'rgba(115, 7, 36, 0.716)';
        document.getElementById('bodyColor').style.backgroundColor = 'rgb(133, 33, 60)';

        document.getElementById('costaCardC').style.border = '4px solid black';
        document.getElementById('costaCardO').style.border = 'none';
        document.getElementById('costaCardF').style.border = 'none';
    }

    function selectOasisPage() {
        $('#about').hide();
        $('#models').hide();
        $('#homeCosta').hide();
        $('#homeOasis').show();
        $('#homeFanta').hide();

        document.getElementById('headerColor').style.backgroundColor = 'rgba(33, 56, 186, 0.695)';
        document.getElementById('footerColor').style.backgroundColor = 'rgba(33, 56, 186, 0.695)';
        document.getElementById('bodyColor').style.backgroundColor = 'rgba(33, 56, 186, 0.695)';

        document.getElementById('oasisCardC').style.border = 'none';
        document.getElementById('oasisCardO').style.border = '4px solid black';
        document.getElementById('oasisCardF').style.border = 'none';
    }

    function selectFantaPage() {
        $('#about').hide();
        $('#models').hide();
        $('#homeCosta').hide();
        $('#homeOasis').hide();
        $('#homeFanta').show();

        document.getElementById('headerColor').style.backgroundColor = 'rgba(195, 153, 27, 0.7)';
        document.getElementById('footerColor').style.backgroundColor = 'rgba(195, 153, 27, 0.7)';
        document.getElementById('bodyColor').style.backgroundColor = 'rgba(213, 188, 30)';

        document.getElementById('fantaCardC').style.border = 'none';
        document.getElementById('fantaCardO').style.border = 'none';
        document.getElementById('fantaCardF').style.border = '4px solid black';
    }

    function selectModelPage() {
        $('#about').hide();
        $('#models').show();
        $('#homeCosta').hide();
        $('#homeOasis').hide();
        $('#homeFanta').hide();

        $('#x3dModelTitle_Costa').show();
        $('#costaModel1').show();
        $('#x3dCreationMethod_Costa').show();

        document.getElementById('headerColor').style.backgroundColor = 'rgb(142, 142, 142)';
        document.getElementById('footerColor').style.backgroundColor = 'rgb(142, 142, 142)';
        document.getElementById('bodyColor').style.backgroundColor = 'rgba(180, 180, 180)';

        document.getElementById('model__CA_FrontCamera').setAttribute('bind', 'true');
    }
    
