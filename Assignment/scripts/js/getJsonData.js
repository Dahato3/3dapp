$(document).ready(function(){

    $.getJSON('../data.json', function(jsonObj) {

        $('#costaCardTitleC').html('<h3>' + jsonObj.pageTextData[0].cardTitleCosta + '</h3>');
        $('#oasisCardTitleC').html('<h3>' + jsonObj.pageTextData[0].cardTitleOasis + '</h3>');
        $('#fantaCardTitleC').html('<h3>' + jsonObj.pageTextData[0].cardTitleFanta + '</h3>');

        $('#costaCardTitleO').html('<h3>' + jsonObj.pageTextData[0].cardTitleCosta + '</h3>');
        $('#oasisCardTitleO').html('<h3>' + jsonObj.pageTextData[0].cardTitleOasis + '</h3>');
        $('#fantaCardTitleO').html('<h3>' + jsonObj.pageTextData[0].cardTitleFanta + '</h3>');

        $('#costaCardTitleF').html('<h3>' + jsonObj.pageTextData[0].cardTitleCosta + '</h3>');
        $('#oasisCardTitleF').html('<h3>' + jsonObj.pageTextData[0].cardTitleOasis + '</h3>');
        $('#fantaCardTitleF').html('<h3>' + jsonObj.pageTextData[0].cardTitleFanta + '</h3>');


        $('#mainCardSubtitleCC').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');
        $('#mainCardSubtitleCO').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');
        $('#mainCardSubtitleCF').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');

        $('#mainCardSubtitleOC').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');
        $('#mainCardSubtitleOO').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');
        $('#mainCardSubtitleOF').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');

        $('#mainCardSubtitleFC').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');
        $('#mainCardSubtitleFO').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');
        $('#mainCardSubtitleFF').html('<p>' + jsonObj.pageTextData[0].swapHome + '</p>');


        $('#costaOneTitle').html('<p>' + jsonObj.pageTextData[1].title + '</p>');
        $('#costaOneDescription').html('<p>' + jsonObj.pageTextData[1].description + '</p>');
        $('#costaTwoTitle').html('<p>' + jsonObj.pageTextData[2].title + '</p>');
        $('#costaTwoDescription').html('<p>' + jsonObj.pageTextData[2].description + '</p>');
        $('#costaThreeTitle').html('<p>' + jsonObj.pageTextData[3].title + '</p>');
        $('#costaThreeDescription').html('<p>' + jsonObj.pageTextData[3].description + '</p>');

        $('#oasisOneTitle').html('<p>' + jsonObj.pageTextData[4].title + '</p>');
        $('#oasisOneDescription').html('<p>' + jsonObj.pageTextData[4].description + '</p>');
        $('#oasisTwoTitle').html('<p>' + jsonObj.pageTextData[5].title + '</p>');
        $('#oasisTwoDescription').html('<p>' + jsonObj.pageTextData[5].description + '</p>');
        $('#oasisThreeTitle').html('<p>' + jsonObj.pageTextData[6].title + '</p>');
        $('#oasisThreeDescription').html('<p>' + jsonObj.pageTextData[6].description + '</p>');

        $('#fantaOneTitle').html('<p>' + jsonObj.pageTextData[7].title + '</p>');
        $('#fantaOneDescription').html('<p>' + jsonObj.pageTextData[7].description + '</p>');
        $('#fantaTwoTitle').html('<p>' + jsonObj.pageTextData[8].title + '</p>');
        $('#fantaTwoDescription').html('<p>' + jsonObj.pageTextData[8].description + '</p>');
        $('#fantaThreeTitle').html('<p>' + jsonObj.pageTextData[9].title + '</p>');
        $('#fantaThreeDescription').html('<p>' + jsonObj.pageTextData[9].description + '</p>')

        $('#cameraViewsTitle').html('<h3>' + jsonObj.pageTextData[10].cameraTitle + '</h3>');
        

        $('#animationTitle').html('<h3>' + jsonObj.pageTextData[11].animationTitle + '</h3>');


        $('#renderTitle').html('<h3>' + jsonObj.pageTextData[12].renderTitle + '</h3>');


        $('#galleryTitle').html('<h3>' + jsonObj.pageTextData[16].galleryTitle + '</h3>');
        $('#galleryDescription').html('<p>' + jsonObj.pageTextData[16].galleryDescription + '</p>');


        $('#x3dModelTitle_Costa').html('<h2>' + jsonObj.pageTextData[13].x3dModelTitleCosta + '</h2>');
        $('#x3dModelTitle_Oasis').html('<h2>' + jsonObj.pageTextData[14].x3dModelTitleOasis + '</h2>');
        $('#x3dModelTitle_Fanta').html('<h2>' + jsonObj.pageTextData[15].x3dModelTitleFanta + '</h2>');

        $('#x3dCreationMethod_Costa').html('<p>' + jsonObj.pageTextData[13].x3dCreationMethodCosta + '</p>');
        $('#x3dCreationMethod_Oasis').html('<p>' + jsonObj.pageTextData[14].x3dCreationMethodOasis + '</p>');
        $('#x3dCreationMethod_Fanta').html('<p>' + jsonObj.pageTextData[15].x3dCreationMethodFanta + '</p>');


        $('#costaImageOne').html('<a href="' + jsonObj.pageTextData[17].costaImagePathOne + '" data-fancybox data-caption="A render of my costa smooth frappé X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].costaImagePathOne + '"/></a>');
        $('#costaImageTwo').html('<a href="' + jsonObj.pageTextData[17].costaImagePathTwo + '" data-fancybox data-caption="A render of my costa choc fudge frappé X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].costaImagePathTwo + '"/></a>');
        $('#costaImageThree').html('<a href="' + jsonObj.pageTextData[17].costaImagePathThree + '" data-fancybox data-caption="A render of my costa caramel swirl frappé X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].costaImagePathThree + '"/></a>');

        $('#oasisImageOne').html('<a href="' + jsonObj.pageTextData[17].oasisImagePathOne + '" data-fancybox data-caption="A render of my oasis summer fruits X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].oasisImagePathOne + '"/></a>');
        $('#oasisImageTwo').html('<a href="' + jsonObj.pageTextData[17].oasisImagePathTwo + '" data-fancybox data-caption="A render of my oasis citrus punch X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].oasisImagePathTwo + '"/></a>');
        $('#oasisImageThree').html('<a href="' + jsonObj.pageTextData[17].oasisImagePathThree + '" data-fancybox data-caption="A render of my oasis exotic fruits zero sugar X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].oasisImagePathThree + '"/></a>');

        $('#fantaImageOne').html('<a href="' + jsonObj.pageTextData[17].fantaImagePathOne + '" data-fancybox data-caption="A render of my fanta orange can X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].fantaImagePathOne + '"/></a>');
        $('#fantaImageTwo').html('<a href="' + jsonObj.pageTextData[17].fantaImagePathTwo + '" data-fancybox data-caption="A render of my fanta fruit twist can X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].fantaImagePathTwo + '"/></a>');
        $('#fantaImageThree').html('<a href="' + jsonObj.pageTextData[17].fantaImagePathThree + '" data-fancybox data-caption="A render of my fanta lemon can X3D model created in blender!"><img class="card-img-top" src="' + jsonObj.pageTextData[17].fantaImagePathThree + '"/></a>');


        $('#costaPlaceholderC').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].costaLogoPath + '"></img>');
        $('#oasisPlaceholderC').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].oasisLogoPath + '"></img>');
        $('#fantaPlaceholderC').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].fantaLogoPath + '"></img>');

        $('#costaPlaceholderO').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].costaLogoPath + '"></img>');
        $('#oasisPlaceholderO').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].oasisLogoPath + '"></img>');
        $('#fantaPlaceholderO').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].fantaLogoPath + '"></img>');

        $('#costaPlaceholderF').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].costaLogoPath + '"></img>');
        $('#oasisPlaceholderF').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].oasisLogoPath + '"></img>');
        $('#fantaPlaceholderF').html('<img class="card-image-top image-fluid placeholder" src="' + jsonObj.pageTextData[18].fantaLogoPath + '"></img>');


        


        
    });

   
});