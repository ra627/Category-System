<!doctype html>
<html>
<head>
    <title>WYSIWYG Editor</title>
    <style>
        #editor
        {
            width: 500px;
            height: 500px;
            background-color: yellow;
        }
    </style>
</head>
<body>
    <button onclick="underline()">Underline Text</button>
    <button onclick="link()">Link</button>
    <button onclick="displayhtml()">Display HTML</button>
    <!-- Make it content editable attribute true so that we can edit inside the div tag and also enable execCommand to edit content inside it.-->  
    <div id="editor" contenteditable="true" spellcheck="false">
          sadasd
    </div>
    <br><br>
    <form method="post" action="monkey">
    <div id="demo"></div> 
    <input type="submit" value="Send">   
    </form>
</body>
<script>
    window.addEventListener("load", function(){
        //first check if execCommand and contentEditable attribute is supported or not.
        if(document.contentEditable != undefined && document.execCommand != undefined)
       {
           alert("HTML5 Document Editing API Is Not Supported");
        }
        else
        {
            document.execCommand('styleWithCSS', false, true);
        }
    }, false);
   
    //underlines the selected text
    function underline()
    {
        document.execCommand("underline", false, null);
        var x = document.getElementById("editor").innerHTML;
    	  var y = document.getElementById("demo").innerHTML = x;
    	  
    	  localStorage.setItem("mykey", y);
    }
   
    //makes the selected text as hyperlink.
    function link()
    {
        var url = prompt("Enter the URL");
        document.execCommand("createLink", false, url);
    }
   
    //displays HTML of the output
    function displayhtml()
    {
        //set textContent of pre tag to the innerHTML of editable div. textContent can take any form of text and display it as it is without browser interpreting it. It also preserves white space and new line characters.
        document.getElementsByClassName("htmloutput")[0].textContent = document.getElementsByClassName("editor")[0].innerHTML;
    }
</script>
</html>

Walkthrough the above code and read the comments to understand it. This is the simplest version of WYSIWYG HTML editor. It has two editing functionalities, i.e, adding underlin