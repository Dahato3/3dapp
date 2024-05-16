// Javascript Gallery Generator
// Create the XMLHttpRequest Object for communicating with the web server
$(document).ready(function() {
    var xmlHttp = new XMLHttpRequest();
    // Stores number of horizontal columns the gallery has, if too large it wont fit in browser
    var numberOfColums = 4;
    // Stores newly generated gallery HTML code
    var htmlCode = "";
    // Temporarily stores server response while code is generated
    var response;


    // Set up the path to the PHP function that reads the image directory to find the thumbnail file names
    var send = "../scripts/php/hook.php";
    // Opens the connection to the web server 
    xmlHttp.open("GET", send, true);
    // Tell the server that the client has no outgoing messages, ie we are sending nothing to the server
    xmlHttp.send(null);
    // Check we get a valid server response
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {

            response = xmlHttp.responseText.split("~");


            response.sort()


            htmlCode += '<table id="gallery_image_table" ><tr>';

            for (var i = 0; i < response.length; i++)
            {
                console.log(response[i]);
                        
                    htmlCode += '<td id="gallery_cell">';
                    //htmlCode += '<a href="gallery/images' + response[i] + ' ">';
                    if (i < 4) {
                        htmlCode += '<a href="gallery/images/costa' + response[i] + ' " data-fancybox data-caption="A render of my X3D model created in blender!" > ';
                        htmlCode += '<img class="card-img-top img-thumbnail" src="../gallery/images/costa' + response[i] + '"></img> ';
                        htmlCode += '</a>';
                    }
                    else if (4 <= i && i < 8) {
                        htmlCode += '<a href="gallery/images/oasis' + response[i] + ' " data-fancybox data-caption="A render of my X3D model created in blender!" > ';
                        htmlCode += '<img class="card-img-top img-thumbnail" src="../gallery/images/oasis' + response[i] + '"></img> ';
                        htmlCode += '</a>';
                    }
                    else {
                        htmlCode += '<a href="gallery/images/fanta' + response[i] + ' " data-fancybox data-caption="A render of my X3D model created in blender!" > ';
                        htmlCode += '<img class="card-img-top img-thumbnail" src="../gallery/images/fanta' + response[i] + '"></img> ';
                        htmlCode += '</a>';
                    }
                    
                    htmlCode += '</td>';

                    if (((i+1)%numberOfColums) == 0){
                        htmlCode += '</tr><tr>'
                    }
                }
                
                htmlCode += "</tr></table>";

                    
                // Write the html code into the gallery
                document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});