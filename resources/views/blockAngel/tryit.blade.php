<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Block Angel</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify.js"></script>
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify-css.js"></script>
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify-html.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script src="/js/blockly_compressed.js"></script>
  <script src="/js/javascript_compressed.js"></script>

  
  <script src="/js/blocks_compressed.js"></script> 
  <script src="/js/blocks/msBlocks.js"></script>
  <script src="/js/blocks/msGenerator.js"></script>
  
  <script src="/js/w3CodeColor.js"></script>
  
  <script src="/js/msg/en.js"></script>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    body {
      background-color: #fff;
      font-family: sans-serif;
      overflow: hidden;
    }
    h1 {
      font-weight: normal;
      font-size: 140%;
    }
    table {
      height: 100%;
      width: 100%;
    }
    #toolbar {
      height: 5%;
      width: 90%;
    }
    #blocklyArea {
      height: 40%;
      width: 65%;
    }
    #webAreaCell {
      height: 60%;
      width: 100%;
    }
    #codeArea {
      height: 40%;
      width: 35%;
    }
   
  </style>
   <!-- Tab style -->
  <style>
    /* Style the tab */
    .tab {
        overflow: hidden;
       /*   border: 1px solid #ccc;
        background-color: #f1f1f1;*/
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: 1px solid #ccc;
        outline: none;
        cursor: pointer;
       /* padding: 4px 5px;*/
        transition: 0.3s;
        font-size: 14px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
       /*   padding: 6px 12px;
       border: 1px solid #ccc; */
        border-top: none;
    }
  </style>

</head>
<body>

<table border="2">
<tr>
    <td id="barTitle">
      
      <span style="margin-left:130px;"><b><a href="/home">bloackAngel</a> &nbsp;&nbsp;&nbsp; </b><b>User:</b>{{$user->name}} 
        <span style="margin: 20px;"><b>   Project Name:</b>@isset($name){{$name}}@endisset</span>
      </span>
      
      <button type="button" id = "silButton" style="float: right; display: none;">sil blockAngel Code</button>
  <!--    <input type="file" id="fileButton" style="display: none;" />
      <input type="button" style="float: right;"value="Load blockAngel Code" onclick="document.getElementById('fileButton').click();" />-->
      <button type="button" style="float: right;" disabled>Publish to Web (coming soon)</button>
      <button id = "exportButton" style="float: right;" type="button">Download HTML Code</button>
      <button type="button" id = "saveButton" style="float: right;">Save blockAngel Code</button>
    </td>
    <td id="navtoolbar">
        <!-- Tab links -->
        <div class="tab">
          <button class="tablinks" onclick="openCode(event, 'codeBoxCSS')" >CSS</button>
          <button class="tablinks" onclick="openCode(event, 'codeBoxHTML')" id="defaultOpen">HTML</button>
         
        </div>
    </td> 
 

  </tr>
  <tr>
    <td id="blocklyArea"></td>
    <td id="codeArea">
      <div style="height: 300px;white-space: pre-wrap;overflow-y: scroll" id="codeBoxHTML" class="tabcontent"></div>
      <div style="height: 300px;white-space: pre-wrap;overflow-y: scroll" id="codeBoxCSS" class="tabcontent"></div>
    </td> 
 

  </tr>
  <tr>
    

      <td colspan="2" id="webAreaCell">
        
              <iframe id="target" style="display:block;  width:100%; height: 100%; "></iframe>
       
      </td>
  </tr>
</table>

      
  

  <div id="blocklyDiv" style="position: absolute"></div>

<xml xmlns="http://www.w3.org/1999/xhtml" id="toolbox" style="display: none;">
  
  <category name="Base frame" colour="#a55b5b">
   
    <block type="block_angel_baseframe">
    <statement name="head">
      <block type="title">
        <field name="title">New Page Title</field>
        <next>
          <block type="block_angel_style"></block>
        </next>
      </block>
    </statement>
  </block>
    
  
  </category>

  <category name="Style" colour="#339933">
    <block type="block_angel_style"></block>
    <block type="block_angel_css_class"></block>
    <block type="block_angel_genericstyle"></block>
    <block type="block_angel_css_id"></block>
    <block type="block_angel_class"></block>
    <block type="block_angel_css_text_align"></block>
    <block type="block_angel_css_fontsize"></block>
    <block type="block_angel_css_color"></block>
  </category>
  <category name="Basic" colour="#339999">
    <block type="block_angel_text"></block>
    <block type="block_angel_h1"></block>
    <block type="block_angel_paragraph"></block>
    <block type="block_angel_div_with_css"></block>
    <block type="block_angel_span_with_css"></block>
    <block type="block_angel_anchor"></block>
    <block type="block_angel_image"></block>
  </category>
  <category name="Panels" colour="#6666CC">
    <block type="panel1">
      <field name="caption">Lorem</field>
      <field name="subtext">Ipsum</field>
    </block>
    <block type="video">
      <field name="src">https://www.youtube.com/embed/tgbNymZ7vqY</field>
    </block>
    <block type="glyphiconpanel">
      <field name="Icon">glyphicon-off</field>
      <field name="Color">#cc0000</field>
      <field name="Caption">Power</field>
      <field name="SubText">Lorem ipsum dolor sit amet..</field>
    </block>
  </category>

  
</xml>

  <script>
    var blocklyArea = document.getElementById('blocklyArea');
    var toolbox = document.getElementById("toolbox");
    var options = { 
      toolbox : toolbox, 
      collapse : true, 
      comments : true, 
      disable : true, 
      maxBlocks : Infinity, 
      trashcan : true, 
      horizontalLayout : false, 
      toolboxPosition : 'start', 
      css : true, 
      media : 'https://blockly-demo.appspot.com/static/media/', 
      rtl : false, 
      scrollbars : true, 
      sounds : true, 
      oneBasedIndex : true, 
      grid : {
        spacing : 20, 
        length : 1, 
        colour : '#888', 
        snap : false
      }, 
      zoom : {
        controls : true, 
        wheel : true, 
        startScale : 1, 
        maxScale : 3, 
        minScale : 0.3, 
        scaleSpeed : 1.2
      }
    };
    var blocklyDiv = document.getElementById('blocklyDiv');
    
    var MakerStorageWorkspace = Blockly.inject(blocklyDiv,options);
    var onresize = function(e) {
      // Compute the absolute coordinates and dimensions of blocklyArea.
      var element = blocklyArea;
      var x = 0;
      var y = 0;
      do {
        x += element.offsetLeft;
        y += element.offsetTop;
        element = element.offsetParent;
      } while (element);
      // Position blocklyDiv over blocklyArea.
      blocklyDiv.style.left = x + 'px';
      blocklyDiv.style.top = y + 'px';
      blocklyDiv.style.width = blocklyArea.offsetWidth + 'px';
      blocklyDiv.style.height = blocklyArea.offsetHeight + 'px';
    };
    window.addEventListener('resize', onresize, false);
    onresize();
    Blockly.svgResize(MakerStorageWorkspace);


    
    var myCode = '{!! $code !!}';

    var myXml = Blockly.Xml.textToDom(myCode);

    // alert(myCode);

    Blockly.Xml.domToWorkspace(myXml, MakerStorageWorkspace);
    
    

  /*  var xml_text = localStorage.getItem('blockly-html-code');
      if (xml_text) {
        var xml = Blockly.Xml.textToDom(xml_text);
        Blockly.Xml.domToWorkspace(xml, MakerStorageWorkspace);
      }

  */
    //tab open fuction
    function openCode(evt, myName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(myName).style.display = "block";
      evt.currentTarget.className += " active";
    }  

    document.getElementById("defaultOpen").click(); //open html as default

    
    function getHTMLCode(allCode){
      
         
      var inComming = allCode.split('<style>');
      var code1 = inComming[0];
      inComming = allCode.split('</style>');
      var code2 = inComming[1];

      if (code1==null){
        code1='';
      }
      if (code2==null){
        code2='';
      }
      return code1 + code2;

    }

    function getCSSCode(allCode){
         
      
      var inComming = allCode.split('<style>');
      code1 = inComming[1];
      if (code1!=null){
        inComming = code1.split('</style>');
      }
      
      if (inComming[0]==null){
        inComming[0]='';
      }
      return inComming[0];

    }



    function loadJson(event) {
      code='...';
      style='...';
      var rawText = MsHtmlGenerator.workspaceToCode(MakerStorageWorkspace);
      var style = getCSSCode(rawText);
      var code = getHTMLCode(rawText);
      

 
 //    console.log('code: '+code);
//     console.log('style: '+style);
            

      // append HTML to real purpose to target
      document.getElementById('target').srcdoc =rawText;
     //  document.getElementById("target").innerHTML = code;
  


        // apply style on the fly to the document
    //  var myDocumentStyle = document.createElement('style');
    //  myDocumentStyle.type = 'text/css';
    //  myDocumentStyle.innerHTML = outputCSS;
    //  document.getElementById("target").setAttribute("style",'style="'+style+'"');

      // make it beauitfull
      var outputHTML = html_beautify(code,{ "preserve_newlines": "true", "wrap_line_length": "0","end_with_newline": "true" });
      var outputCSS = css_beautify(style,{ "preserve_newlines": "true", "wrap_line_length": "0","end_with_newline": "true" });

      // append to divs
      document.getElementById('codeBoxHTML').textContent = outputHTML ;
      document.getElementById('codeBoxCSS').textContent = outputCSS;
      
      // make it colorful
      w3CodeColor(document.getElementById("codeBoxHTML"),'html');
      w3CodeColor(document.getElementById("codeBoxCSS"),'css');

     // local storage to continue where you left
     // var xml = Blockly.Xml.workspaceToDom(MakerStorageWorkspace);
     // var xml_text = Blockly.Xml.domToText(xml);
     // localStorage.setItem('blockly-html-code', xml_text);



      
    }





    function saveWorkspaceToDownload() {
        var xml = Blockly.Xml.workspaceToDom(MakerStorageWorkspace);
        var xml_text = Blockly.Xml.domToText(xml);
        //download to local
   //     newWindow = window.open("data:application/octet-stream," + encodeURIComponent(xml_text), 'website.blockly.xml');
         //save to cloud
        var projectName = prompt("Please enter the Project name", "{{$name}}");
    
        if (projectName == "") { //empty box return handle
           alert('Project name can not be empty');
           return;
        } 
        if (projectName == null) { //cancel button handle
           return;
        } 
  
 
        var data = JSON.parse('{ "projectName":"'+projectName+'", "code":"'+escape(xml_text)+'"}');
      
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "get",
          url: '/saveProject',
          data: data, //, code:xml_text }),
          dataType: 'JSON',
          
          success: function (data) {
            alert('Project Saved Successfully');
            window.location.replace('/openProject/'+data.projectId); // inorder to refresh the page
          },
          error: function (data, textStatus, errorThrown) {
            alert('error'+ errorThrown);

          },
        });


    }
    
    document.getElementById("saveButton").onclick = saveWorkspaceToDownload;  



    function silWorkspaceToDownload() {
        var xml = Blockly.Xml.workspaceToDom(MakerStorageWorkspace);
        var xml_text = Blockly.Xml.domToText(xml);
        //download to local
        newWindow = window.open("data:application/octet-stream," + encodeURIComponent(xml_text), 'website.blockly.xml');
   

    }
    
    document.getElementById("silButton").onclick = silWorkspaceToDownload;  



    function saveHtmlToDownload() {
        var code = MsHtmlGenerator.workspaceToCode(MakerStorageWorkspace);
        newWindow = window.open("data:application/octet-stream," + encodeURIComponent(code), 'website.html');
      


    }


    
    document.getElementById("exportButton").onclick = saveHtmlToDownload;

/*
    function loadWorkspaceFromUpload(e) {
        var file = e.target.files[0];
        if (!file) {
          return;
        }
        var reader = new FileReader();
        reader.onload = function(e) {
          var xml_text = e.target.result;
          if (xml_text) {
            var xml = Blockly.Xml.textToDom(xml_text);
            Blockly.Xml.domToWorkspace(xml, MakerStorageWorkspace);
          }
        };
        reader.readAsText(file);
    }
    
    document.getElementById('fileButton').addEventListener('change', loadWorkspaceFromUpload, false);

  */

    MakerStorageWorkspace.addChangeListener(loadJson);

 


  </script>

  
</body>
</html>