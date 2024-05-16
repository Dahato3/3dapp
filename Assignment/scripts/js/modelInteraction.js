// Animation controls
var spinning = false;

function spin() {
    spinning = !spinning;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopAnimation() {
    spinning = false;
    if (document.getElementById('switcher').getAttribute('whichChoice') == '0') {
        document.getElementById('model__RotateYcosta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateYAnticosta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateXcosta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateXAnticosta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateZcosta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateZAnticosta').setAttribute('enabled', spinning.toString());
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1') {
        document.getElementById('model__RotateYoasis').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateYAntioasis').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateXoasis').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateXAntioasis').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateZoasis').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateZAntioasis').setAttribute('enabled', spinning.toString());
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2') {
        document.getElementById('model__RotateYfanta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateYAntifanta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateXfanta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateXAntifanta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateZfanta').setAttribute('enabled', spinning.toString());
        document.getElementById('model__RotateZAntifanta').setAttribute('enabled', spinning.toString());
    }

}

// Function called when a model is clicked
// Rotates on the Z axis (clockwise)
function animateModel() {
    //SAME IF STATEMENTS FOR ALL ANIMATION METHODS
    // Outer if statemement checks which model is currently displayed on the webpage
    // Inner if statememt sets the attributes so the animation plays

    if (document.getElementById('switcher').getAttribute('whichChoice') == '0')
    {
        if(document.getElementById('model__RotateZcosta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZcosta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZcosta').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1')
    {
        console.log('dd');
        if(document.getElementById('model__RotateZoasis').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZoasis').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZoasis').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2')
    {
        if(document.getElementById('model__RotateZfanta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZfanta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZfanta').setAttribute('enabled', 'false');
        }
    }
}

function rotateY() {
    stopAnimation();
    if (document.getElementById('switcher').getAttribute('whichChoice') == '0')
    {
        if(document.getElementById('model__RotateYcosta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateYcosta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateYcosta').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1')
    {
        if(document.getElementById('model__RotateYoasis').getAttribute('enabled') != 'true') {
                document.getElementById('model__RotateYoasis').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateYoasis').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2')
    {
        if(document.getElementById('model__RotateYfanta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateYfanta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateYfanta').setAttribute('enabled', 'false');
        }
    }
}
function rotateYAntiClockwise() {
    stopAnimation();
    if (document.getElementById('switcher').getAttribute('whichChoice') == '0')
    {
        if(document.getElementById('model__RotateYAnticosta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateYAnticosta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateYAnticosta').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1')
    {
        if(document.getElementById('model__RotateYAntioasis').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateYAntioasis').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateYAntioasis').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2')
    {
        if(document.getElementById('model__RotateYAntifanta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateYAntifanta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateYAntifanta').setAttribute('enabled', 'false');
        }
    }
}

function rotateX() {
    stopAnimation();
    if (document.getElementById('switcher').getAttribute('whichChoice') == '0')
    {
        if(document.getElementById('model__RotateXcosta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateXcosta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateXcosta').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1')
    {
        if(document.getElementById('model__RotateXoasis').getAttribute('enabled') != 'true') {
                document.getElementById('model__RotateXoasis').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateXoasis').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2')
    {
        if(document.getElementById('model__RotateXfanta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateXfanta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateXfanta').setAttribute('enabled', 'false');
        }
    }
}
function rotateXAntiClockwise() {
    stopAnimation();
    if (document.getElementById('switcher').getAttribute('whichChoice') == '0')
    {
        if(document.getElementById('model__RotateXAnticosta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateXAnticosta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateXAnticosta').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1')
    {
        if(document.getElementById('model__RotateXAntioasis').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateXAntioasis').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateXAntioasis').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2')
    {
        if(document.getElementById('model__RotateXAntifanta').getAttribute('enabled') != 'true') {
                document.getElementById('model__RotateXAntifanta').setAttribute('enabled', 'true');
            }
        else {
            document.getElementById('model__RotateXAntifanta').setAttribute('enabled', 'false');
        }
    }
}

function rotateZ() {
    stopAnimation();
    if (document.getElementById('switcher').getAttribute('whichChoice') == '0')
    {
        if(document.getElementById('model__RotateZcosta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZcosta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZcosta').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1')
    {
        if(document.getElementById('model__RotateZoasis').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZoasis').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZoasis').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2')
    {
        if(document.getElementById('model__RotateZfanta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZfanta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZfanta').setAttribute('enabled', 'false');
        }
    }

    
}
function rotateZAntiClockwise() {
    stopAnimation();
    if (document.getElementById('switcher').getAttribute('whichChoice') == '0')
    {
        if(document.getElementById('model__RotateZAnticosta').getAttribute('enabled') != 'true') {
             document.getElementById('model__RotateZAnticosta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZAnticosta').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '1')
    {
        if(document.getElementById('model__RotateZAntioasis').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZAntioasis').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZAntioasis').setAttribute('enabled', 'false');
        }
    }
    else if (document.getElementById('switcher').getAttribute('whichChoice') == '2')
    {
        if(document.getElementById('model__RotateZAntifanta').getAttribute('enabled') != 'true') {
            document.getElementById('model__RotateZAntifanta').setAttribute('enabled', 'true');
        }
        else {
            document.getElementById('model__RotateZAntifanta').setAttribute('enabled', 'false');
        }
    }
}

// Render controls
function wireFrame() {
    var e = document.getElementById('wire');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}
function poly() {
    var e = document.getElementById('wire');
    e.runtime.togglePoints(false);
    e.runtime.togglePoints(false);
}

var lightOn = true;

function headLight() {
    lightOn = !lightOn;
    document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
    console.log(lightOn);
}

function pointLights() {
    lightOn = !lightOn;
    document.getElementById('model__LA_Point').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_001').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_002').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_003').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_004').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_005').setAttribute('on', lightOn.toString());
}
function topPointLights() {
    lightOn = !lightOn;
    document.getElementById('model__LA_Point').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_001').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_002').setAttribute('on', lightOn.toString());
}
function bottomPointLights() {
    lightOn = !lightOn;
    document.getElementById('model__LA_Point_003').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_004').setAttribute('on', lightOn.toString());
    document.getElementById('model__LA_Point_005').setAttribute('on', lightOn.toString());
}
function sunLight() {
    lightOn = !lightOn;
    document.getElementById('model__LA_Sun').setAttribute('on', lightOn.toString());
}

function defaultLights() {
    document.getElementById('model__LA_Point').setAttribute('on', 'true');
    document.getElementById('model__LA_Point_001').setAttribute('on', 'true');
    document.getElementById('model__LA_Point_002').setAttribute('on', 'true');
    document.getElementById('model__LA_Point_003').setAttribute('on', 'true');
    document.getElementById('model__LA_Point_004').setAttribute('on', 'true');
    document.getElementById('model__LA_Point_005').setAttribute('on', 'true');
}


// Camera controls
function cameraFront() {
    console.log('front');
    document.getElementById('model__CA_FrontCamera').setAttribute('bind', 'true');
}
function cameraBack() {
    console.log('back');
    document.getElementById('model__CA_BackCamera').setAttribute('bind', 'true');
}
function cameraRight() {
    document.getElementById('model__CA_RightCamera').setAttribute('bind', 'true');
}
function cameraLeft() {
    document.getElementById('model__CA_LeftCamera').setAttribute('bind', 'true');
}
function cameraTop() {
    document.getElementById('model__CA_TopCamera').setAttribute('bind', 'true');
}
function cameraBottom() {
    document.getElementById('model__CA_BottomCamera').setAttribute('bind', 'true');
}
function cameraPerspective1() {
    document.getElementById('model__CA_Perspective1').setAttribute('bind', 'true');
}
function cameraPerspective2() {
    document.getElementById('model__CA_Perspective2').setAttribute('bind', 'true');
}
