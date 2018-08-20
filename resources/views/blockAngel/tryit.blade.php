<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Block Angel</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>
  
 
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify.js"></script>
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify-css.js"></script>
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify-html.js"></script>


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
</head>
<body>

<table border="2">
<tr>
    <td id="barTitle">
      <button type="button" id = "saveButton" style="float: right;">Save blockAngel Code</button>
      <span style="margin-left:130px;"><b><a href="/home">bloackAngel</a> &nbsp;&nbsp;&nbsp; </b><b>User:</b>{{$user->name}} 
        <span style="margin: 20px;"><b>   Project Name:</b>@isset($name){{$name}}@endisset</span>
      </span>
      
      <button type="button" id = "silButton" style="float: right; display: none;">sil blockAngel Code</button>
  <!--    <input type="file" id="fileButton" style="display: none;" />
      <input type="button" style="float: right;"value="Load blockAngel Code" onclick="document.getElementById('fileButton').click();" />-->
    </td>
    <td id="navtoolbar"><button id = "exportButton" type="button">Download HTML Code</button><button type="button" disabled>Publish to Web (coming soon)</button></td> 
 

  </tr>
  <tr>
    <td id="blocklyArea"></td>
    <td id="codeArea"><div style="height: 300px;white-space: pre-wrap;overflow-y: scroll" id="codeBox"></div></td> 
 

  </tr>
  <tr>
    

      <td colspan="2" id="webAreaCell"><div style="width:100%; max-height:100%; overflow:auto">
              <!DOCTYPE HTML><html>
              <head>
                <title>Block Angle</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           
              </head>
              <body ><div id="target">Loading...</div>
              </body></html>
            </div>
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
    
     

    function loadJson(event) {

      
      
      var rawText = MsHtmlGenerator.workspaceToCode(MakerStorageWorkspace);

      console.log(rawText);
       
      var inComming = rawText.split('***');

      var code = inComming[0];
      
      var style = inComming[1];


      document.getElementById("target").innerHTML = code;

     var output = html_beautify(code,{ "preserve_newlines": "true", "wrap_line_length": "0","end_with_newline": "true" });

      


      
      document.getElementById('codeBox').textContent = output ;

      w3CodeColor(document.getElementById("codeBox"));

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