<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Block Angel</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/mode-html.js" type="text/javascript" charset="utf-8"></script>
 
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify.js"></script>
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify-css.js"></script>
  <script src="https://cdn.rawgit.com/beautify-web/js-beautify/gh-pages/js/lib/beautify-html.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script src="/js/blockly_compressed.js"></script>
  <script src="/js/javascript_compressed.js"></script>

  
  <script src="/js/blocks_compressed.js"></script> 
  <script src="/js/blocks/msBlocks.js"></script>
  <script src="/js/blocks/msGenerator.js"></script>
  
  <script src="/js/w3CodeColor.js"></script>
  
  <script src="/js/msg/en.js"></script>

    
    <link rel="stylesheet" href="/css/Footer-Basic.css" />
    <link rel="stylesheet" href="/css/Navigation-Clean.css" />
    <link rel="stylesheet" href="/css/styles.css" />

</head>
<body>

    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding:5px;">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgb(64,97,183);">blockAngel</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1"><span class="navbar-text" style="margin-left:100px;font-size:14px;"><strong>User:</strong>{{$user->name}}</span><span class="navbar-text" style="margin-left:30px;font-size:14px;"><strong>Project Name:</strong>@isset($name){{$name}}@endisset</span>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" id = "silButton" role="presentation" href="#">Download XML</a><a class="dropdown-item" id = "saveButton" role="presentation" href="#">Save blockAngel Code</a><a class="dropdown-item" id = "exportButton" role="presentation" href="#">Download HTML Code</a><a class="dropdown-item"  role="presentation" href="#">Publish to WEB (coming soon)</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#blocklyArea">Blocks</a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#codeArea">HTML</a></li>
            </ul>
            <div class="tab-content" >
                <div class="tab-pane active" style="height:400px;" role="tabpanel" id="blocklyArea">
                    
                       
                        <div id="blocklyDiv" style="position: absolute"></div>
                    
                </div>
                <div class="tab-pane" style="height:400px;" role="tabpanel" id="codeArea">
                  
                </div>
            </div>
        </div>
    </div>
    
    <div class="container" style="height:300px;">  <iframe id="target" style="display:block;  width:100%; height:100%;" scrolling="yes"></iframe> </div>

    <div class="container footer-basic" style="height:30px;padding:5px;">
        <footer>
            <p class="copyright" style="margin-top:5px;background-color:#efeeee;">MakerStorage LLC. &nbsp;© 2018</p>
        </footer>
    </div>

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
    <block type="block_angel_css_link"></block>
   
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
      Blockly.svgResize(MakerStorageWorkspace);
    };
    window.addEventListener('resize', onresize, false);
    onresize();
    
    
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
    //editor
    var editor = ace.edit("codeArea");
    editor.setTheme("ace/theme/tomorrow");
    editor.getSession().setMode("ace/mode/html");
    editor.setReadOnly(true);
     
    function loadJson(event) {
      
      
      var rawText = MsHtmlGenerator.workspaceToCode(MakerStorageWorkspace);
      document.getElementById('target').srcdoc =rawText;
      document.getElementById("target").innerHTML = rawText;
      
      //var output = html_beautify(rawText,{ "preserve_newlines": "true", "wrap_line_length": "0","end_with_newline": "true" });
     
      
      
      //document.getElementById('codeArea').textContent = output ;

       editor.setValue(rawText,-1);

      //w3CodeColor(document.getElementById("codeBox"));
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

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>


  
</body>
</html>