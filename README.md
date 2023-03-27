# preloader
-------------
you have an image loading.gif. put it into img tag and set it's id to 'loading', and then make it invisible.

< img id='loading' src='' style='visibility: hidden;' >

-------------
You have to create javascript functions to show and hide the loading image. Here's the script:

<script>

function showLoading(){

document.getElementById("loading").style = "visibility: visible";

}

function hideLoading(){

document.getElementById("loading").style = "visibility: hidden";

}

</script>

-------------
To show the loading image when you are uploading, call the showLoading() function jus before the ajax call, and then hide it when you are done uploading with hideLoading() function.
Here's the implementation :


$("#upload").click(function () {     
    //call show loading function here
    showLoading();
    $.ajax({
        type: "POST",
        url: "upload.php",
        enctype: 'multipart/form-data',
        data: {
            file: myfile
        },
        success: function () {
            //call hide function here
            hideLoading();
            alert("Data has been Uploaded: ");
        },
        error  : function (a) {//if an error occurs
            hideLoading();
            alert("An error occured while uploading data.\n error code : "+a.statusText);
        }
    });
});
-------------
Now you should have JQUERY for that. try to put the following code in the < head > part of your code, this loads the jquery library

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

Thats it !