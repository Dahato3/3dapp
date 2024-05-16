// Javascript Gallery Generator
// Create the XMLHttpRequest Object for communicating with the web server
$(document).ready(function() {
    var xmlHttp = new XMLHttpRequest();
    // Stores number of horizontal columns the gallery has, if too large it wont fit in browser
    //var numberOfColums = 4;
    // Stores newly generated gallery HTML code
    var htmlCode = "";
    // Temporarily stores server response while code is generated
    var response;

    // Set up the path to the PHP function that reads the image directory to find the thumbnail file names
    var send = "scripts/php/hook.php";
    // Opens the connection to the web server 
    xmlHttp.open("GET", send, true);
    // Tell the server that the client has no outgoing messages, ie we are sending nothing to the server
    xmlHttp.send(null);
    // Check we get a valid server response
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {
            // Response handler code
            //alert(xmlHttp.responseText);
            // Tokenise the response
            response = xmlHttp.responseText.split("~");
            // Start to write the HTML code into the htmlcode string

            // Loop round the response array of tokens, which are the image names ...
            for (var i = 0; i < response.length; i++)
            {
                // And continur to build the HTML code for the gallery
                htmlCode += '<a href="assets/images/gallery_images' + response[i] + ' ">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="assets/images/gallery_images' + response[i] + '"/> ';
                htmlCode += '</a>';
                // Control then column layout for the gallery thumbnails
                // CAN BE REMOVED LATER FOR ASSIGNMENT
                
            }
            console.log("GFGF");
            // Write the html code into the gallery
            document.getElementById('gallery').innerHTML = htmlCode;
            // document.getElementById('gallery_sprite').innerHTML = htmlCode;
            // document.getElementById('gallery_pepper').innerHTML = htmlCode;
            // document.getElementById('gallery_coke_can').innerHTML = htmlCode;
        }
    }
});