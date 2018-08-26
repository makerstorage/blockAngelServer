Blockly.Blocks['block_angel_baseframe'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("html");
    this.appendDummyInput()
        .appendField("head");
    this.appendStatementInput("head")
        .setCheck("header");
    this.appendDummyInput()
        .appendField("body");
    this.appendStatementInput("body")
        .setCheck("html");
    this.setColour(0);
 this.setTooltip("");
 this.setHelpUrl("http://www.w3schools.com/tags/tag_html.asp");
  }
};



Blockly.Blocks['title'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Title:")
        .appendField(new Blockly.FieldTextInput("New Page Title"), "title");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(0);
 this.setTooltip("");
 this.setHelpUrl("http://www.w3schools.com/tags/tag_html.asp");
  }
};

// style

Blockly.Blocks['block_angel_style'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("style");
    this.appendStatementInput("NAME")
        .setCheck(null);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("https://www.w3schools.com/tags/tag_style.asp");
  }
};


Blockly.Blocks['block_angel_css_class'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("selector")
        .appendField(new Blockly.FieldTextInput("className"), "CLASSNAME");
    this.appendStatementInput("NAME")
        .setCheck(null);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['block_angel_genericstyle'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldTextInput("property"), "property")
        .appendField(":")
        .appendField(new Blockly.FieldTextInput("value"), "value");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['block_angel_class'] = {
  init: function() {
    this.appendValueInput("inputClassName")
        .setCheck("class")
        .appendField(new Blockly.FieldTextInput("ClassName"), "NAME");
    this.setOutput(true, "class");
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['block_angel_css_id'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("#")
        .appendField(new Blockly.FieldTextInput("idName"), "ID_NAME");
    this.setOutput(true, "id");
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['block_angel_css_text_align'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("text-align : ")
        .appendField(new Blockly.FieldDropdown([["left","left"], ["right","right"], ["center","center"], ["justify","justify"], ["initial","initial"], ["inherit","inherit"]]), "NAME");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("https://www.w3schools.com/cssref/pr_text_text-align.asp");
  }
};

Blockly.Blocks['block_angel_css_color'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldDropdown([["color","color"], ["background","background"], ["border-color","border-color"], ["caret-color","caret-color"], ["outline-color","outline-color"], ["text-decoration-color","text-decoration-color"]]), "property")
        .appendField(new Blockly.FieldColour("#ff0000"), "color");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['block_angel_css_fontsize'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("font-size:")
        .appendField(new Blockly.FieldTextInput("24px"), "FONTSIZE");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['block_angel_css_link'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Link stylesheet");
    this.appendDummyInput()
        .appendField(new Blockly.FieldTextInput("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "NAME");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(105);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


//style son

Blockly.Blocks['block_angel_paragraph'] = {
  init: function() {
    this.appendValueInput("CLASS_NAME")
        .setCheck("id")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("p")
        .appendField("#");
    this.appendValueInput("ID_NAME")
        .setCheck("class")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField(".");
    this.appendStatementInput("NAME")
        .setCheck(null);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(180);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['block_angel_div_with_css'] = {
  init: function() {
    this.appendValueInput("ID_NAME")
        .setCheck("id")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("div")
        .appendField("#");
    this.appendValueInput("CLASS_NAME")
        .setCheck("class")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField(".");
    this.appendStatementInput("content")
        .setCheck("html");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(180);
 this.setTooltip("");
 this.setHelpUrl("http://www.w3schools.com/tags/tag_html.asp");
  }
};


Blockly.Blocks['block_angel_span_with_css'] = {
  init: function() {
    this.appendValueInput("ID_NAME")
        .setCheck("id")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("span")
        .appendField("#");
    this.appendValueInput("CLASS_NAME")
        .setCheck("class")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField(".");
    this.appendStatementInput("content")
        .setCheck("html");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(180);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['block_angel_text'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldTextInput("Simple Text"), "NAME");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(180);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['block_angel_h1'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Heading")
        .appendField(new Blockly.FieldDropdown([["h1","h1"], ["h2","h2"], ["h3","h3"], ["h4","h4"], ["h5","h5"], ["h6","h6"]]), "HEADING")
        .appendField(new Blockly.FieldTextInput("Sample Heading Text"), "TEXT_NAME");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(180);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['block_angel_anchor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("a href")
        .appendField(new Blockly.FieldTextInput("target"), "TARGET");
    this.appendStatementInput("content");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(180);
 this.setTooltip("");
 this.setHelpUrl("http://www.w3schools.com/tags/tag_html.asp");
  }
};


Blockly.Blocks['block_angel_image'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("image")
        .appendField(new Blockly.FieldTextInput("URL"), "IMAGE")
        .appendField("or")
        .appendField(new Blockly.FieldTextInput("alt text"), "ALT");
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("width")
        .appendField(new Blockly.FieldTextInput(""), "width");
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("height")
        .appendField(new Blockly.FieldTextInput(""), "height");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(180);
 this.setTooltip("");
 this.setHelpUrl("http://www.w3schools.com/tags/tag_html.asp");
  }
};


Blockly.Blocks['glyphiconpanel'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Glyphicon Panel");
    this.appendDummyInput()
        .appendField("Icon")
        .appendField(new Blockly.FieldTextInput("glyphicon-off"), "Icon")
        .appendField("Icon Color")
        .appendField(new Blockly.FieldColour("#cc0000"), "Color");
    this.appendDummyInput()
        .appendField("Caption")
        .appendField(new Blockly.FieldTextInput("Power"), "Caption");
    this.appendDummyInput()
        .appendField("SubText")
        .appendField(new Blockly.FieldTextInput("Lorem ipsum dolor sit amet.."), "SubText");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['video'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("video");
    this.appendDummyInput()
        .appendField("src :")
        .appendField(new Blockly.FieldTextInput("https://www.youtube.com/embed/tgbNymZ7vqY"), "src");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['panel1'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Jumbotron")
        .appendField(new Blockly.FieldTextInput("Lorem"), "caption")
        .appendField("SubText")
        .appendField(new Blockly.FieldTextInput("Ipsum"), "subtext");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};





