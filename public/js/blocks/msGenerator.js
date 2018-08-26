
var MsHtmlGenerator = new Blockly.Generator('HTML');

MsHtmlGenerator.init = function(workspace) {};
MsHtmlGenerator.finish = function(code) {return code;};

MsHtmlGenerator.scrub_ = function(block, code) {
  var nextBlock = block.nextConnection && block.nextConnection.targetBlock();
  var nextCode = MsHtmlGenerator.blockToCode(nextBlock);
  return code + nextCode;
};


MsHtmlGenerator['block_angel_baseframe'] = function(block) {
  var statements_head = MsHtmlGenerator.statementToCode(block, 'head');
  var statements_body = MsHtmlGenerator.statementToCode(block, 'body');
  var code = '<!DOCTYPE HTML>\n<html>\n<head>\n  <meta charset="utf-8">\n'
    + statements_head
    + "</head>\n\n<body>\n"
    + statements_body
    + "</body>\n</html>\n";

  return code;
};


MsHtmlGenerator['title'] = function(block) {
  var text_title = block.getFieldValue('title');
  
  var code = '<title>' + text_title.trim() + '</title>\n';
  return code;
};




//style

MsHtmlGenerator['block_angel_style'] = function(block) {
  var statements_name = MsHtmlGenerator.statementToCode(block, 'NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = '<style>' + statements_name.trim() + '</style>';
  return code;
};


MsHtmlGenerator['block_angel_css_class'] = function(block) {
  var text_classname = block.getFieldValue('CLASSNAME');
  var statements_name = MsHtmlGenerator.statementToCode(block, 'NAME');
  // TODO: Assemble JavaScript into code variable.
   var code = text_classname+'{\n' + statements_name.trim() + '\n}';
  return code;
};


MsHtmlGenerator['block_angel_genericstyle'] = function(block) {
  var text_property = block.getFieldValue('property');
  var text_value = block.getFieldValue('value');
  var code = text_property + ': ' + text_value + ';';
  return code;
};

MsHtmlGenerator['block_angel_class'] = function(block) {
  var text_name = block.getFieldValue('NAME');
  var value_inputclassname = MsHtmlGenerator.valueToCode(block, 'inputClassName', MsHtmlGenerator.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var prefix = ' class="';
  var midfix = '';
  var endfix = '"';
  var parent = block.getParent();
  var child = block.getChildren()[0];
  if ((parent != null) && (parent.type=='block_angel_class')) {prefix =' ';midfix = '';endfix = '';};
  //if ((child != null) && (child.type == 'block_angel_css_id')){prefix =' class="';midfix = '"';endfix = '';};
  var code = prefix+text_name+midfix+value_inputclassname+endfix;
  
  return [code, MsHtmlGenerator.ORDER_NONE];
};


MsHtmlGenerator['block_angel_css_id'] = function(block) {
  var text_id_name = block.getFieldValue('ID_NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = ' id="'+text_id_name+'"';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, MsHtmlGenerator.ORDER_NONE];
};

MsHtmlGenerator['block_angel_css_text_align'] = function(block) {
  var dropdown_name = block.getFieldValue('NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = 'text-align:'+dropdown_name+';\n';
  return code;
};


MsHtmlGenerator['block_angel_css_color'] = function(block) {
  var dropdown_property = block.getFieldValue('property');
  var colour_color = block.getFieldValue('color');
  // TODO: Assemble JavaScript into code variable.
  var code = dropdown_property+':'+colour_color+';\n';
  return code;
};


MsHtmlGenerator['block_angel_css_fontsize'] = function(block) {
  var text_fontsize = block.getFieldValue('FONTSIZE');
  var code = `font-size : ${text_fontsize};\n`;
  return code;
};

MsHtmlGenerator['block_angel_css_link'] = function(block) {
  var text_name = block.getFieldValue('NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = `<link rel="stylesheet" type="text/css" href="${text_name}">\n`;
  return code;
};

//style son



MsHtmlGenerator['block_angel_paragraph'] = function(block) {
  var value_id_name = MsHtmlGenerator.valueToCode(block, 'ID_NAME', MsHtmlGenerator.ORDER_ATOMIC);
  var value_class_name = MsHtmlGenerator.valueToCode(block, 'CLASS_NAME', MsHtmlGenerator.ORDER_ATOMIC);
  var statements_name = MsHtmlGenerator.statementToCode(block, 'NAME');
  var code = '<p' + value_id_name + value_class_name+'>' + statements_name + '</p>\n';
  return code;
};


MsHtmlGenerator['block_angel_div_with_css'] = function(block) {
  var value_class_name = MsHtmlGenerator.valueToCode(block, 'CLASS_NAME', MsHtmlGenerator.ORDER_ATOMIC);
  var value_id_name = MsHtmlGenerator.valueToCode(block, 'ID_NAME', MsHtmlGenerator.ORDER_ATOMIC);
  var statements_content = MsHtmlGenerator.statementToCode(block, 'content');
  var code = '<div' + value_class_name +value_id_name+ '>\n' + statements_content + '</div>\n';
  return code;
};


MsHtmlGenerator['block_angel_span_with_css'] = function(block) {
  var value_id_name = MsHtmlGenerator.valueToCode(block, 'ID_NAME', MsHtmlGenerator.ORDER_ATOMIC);
  var value_class_name = MsHtmlGenerator.valueToCode(block, 'CLASS_NAME', MsHtmlGenerator.ORDER_ATOMIC);
  var statements_content = MsHtmlGenerator.statementToCode(block, 'content');
  // TODO: Assemble JavaScript into code variable.
  var code = '<span' + value_class_name +value_id_name+ '>\n' + statements_content + '</span>\n';
  return code;
};


MsHtmlGenerator['block_angel_text'] = function(block) {
  var text_name = block.getFieldValue('NAME');
  var code = text_name+ '\n';;
  return code;
};

MsHtmlGenerator['block_angel_h1'] = function(block) {
  var dropdown_heading = block.getFieldValue('HEADING');
  var text_text_name = block.getFieldValue('TEXT_NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = '<' + dropdown_heading+'>' + text_text_name+ '</'+dropdown_heading+'>\n';
  return code;
};


MsHtmlGenerator['block_angel_anchor'] = function(block) {
  var text_target = block.getFieldValue('TARGET');
  var statements_content = MsHtmlGenerator.statementToCode(block, 'content');
  var code = '<a href="' + text_target+'" target="_blank">'+statements_content+'</a>\n';
  return code;
};


MsHtmlGenerator['block_angel_image'] = function(block) {
  var text_image = block.getFieldValue('IMAGE');
  var text_alt = block.getFieldValue('ALT');
  var text_width = block.getFieldValue('width');
  var text_height = block.getFieldValue('height');
  // TODO: Assemble JavaScript into code variable.
  var code = `<img src="${text_image}" alt="${text_alt}" width="${text_width}" height="${text_height}">`;
  return code;
};


MsHtmlGenerator['glyphiconpanel'] = function(block) {

  var text_icon = block.getFieldValue('Icon');
  var colour_color = block.getFieldValue('Color');
  var text_caption = block.getFieldValue('Caption');
  var text_subtext = block.getFieldValue('SubText');

  var code =`
  <div style="text-align: center;margin: 25px 0;" >
   <span class="glyphicon ${ text_icon } logo-small" style="color: ${ colour_color }; font-size: 100px;">              </span>
   <h4>${ text_caption }</h4>
   <p>${ text_subtext }</p>
</div>`;


  return code;
};


MsHtmlGenerator['video'] = function(block) {
  var text_src = block.getFieldValue('src');
  // TODO: Assemble JavaScript into code variable.
   var code =`
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="${text_src}"></iframe>
  </div>`;
  return code;
};


MsHtmlGenerator['panel1'] = function(block) {
  var text_caption = block.getFieldValue('caption');
  var text_subtext = block.getFieldValue('subtext');

  var code = `<div class="jumbotron"><h1>${ text_caption }</h1><p>${ text_subtext }</p></div>`;
  return code;
};



