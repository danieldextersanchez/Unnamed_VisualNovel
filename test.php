
<!-- 
Octicons
Simplemde
markdownit
highlighjs
jquery
fomantic / semantic ui
emoji-strip
 -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
        <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.5/marked.js'></script> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
        <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/markdown-it/10.0.0/markdown-it.min.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/androidstudio.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
        <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/yamljs/0.3.0/yaml.min.js'></script> -->
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/languages/yaml.min.js"></script>  -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/1.0.11/purify.min.js"></script> -->
        <script src="js/emoji-strip.min.js"></script>
        <style>
            .noselect {
                -webkit-touch-callout: none; 
                -webkit-user-select: none; 
                -khtml-user-select: none; 
                -moz-user-select: none; 
                -ms-user-select: none; 
                user-select: none; 
            }
            .steps{
                cursor: pointer;     
            }
            #preview {
                text-align:left;
                white-space: pre-wrap;
                line-height: 10px;
                background-color: #F8F8FF !important; 
                height: 100%;
            }
            .listnone{
              list-style-type: none;
              margin : 0;
              padding : 0;
            }
            .listnone li{
              margin-left : 5mm !important;
              padding : 0 !important
            }
            .tabsegment{
              height : 100% !important;
            }
            #tablepreview{
              text-align:left;
              white-space: pre-wrap;
              line-height: 10px;
            }
            .tab{
              margin-left:auto;
              margin-right:auto;
              text-align:center;
              margin-bottom: 5%;
              height:500px
              
            }
            #ParameterTab{
              margin-left:0 !important;
              margin-right:0 !important;
              text-align:left !important;
              margin-bottom: 0 !important;
              height:auto !important;
            }
            img{
              display:block
            }
            .paramtabitem{
              cursor :pointer
            }
            a .indentprev.active{
              background : #fcfcfc;
               border-color : #95a5a6;
            }
            .paramtab{
              text-align:left !important;
              padding : 20px
            }
            .editor-preview.editor-preview-active{
              text-align: left;
            }
            .checkbox{
              margin-left : 15px;
            }
            #tablelists{
              white-space: pre-wrap;
              line-height: 10px;
              text-align:left;
            }
            .CodeMirror-scroll{
              text-align:left;
            }
            body{
              background-color: #F8F8FF !important;
            }
            blockquote{
              border-left: 5px solid #31CCEC
            }
            .paramtab{
              min-height: 500px;
            }
            .stickycss{
              position: -webkit-sticky; 
              position: sticky; 
              top: 0vh; 
              z-index: 100;
              opacity: initial; 
              background-color: white;
              border-bottom: 1px solid #bbb;
            }
            .sticky{
              position : -webkit-sticky;
              position: sticky;
              top:0vh;
              z-index: 100;
            }
            div#markdowncontent table tr td{
              border : 1px solid black
            }
            div#markdowncontent table tr th{
              border : 1px solid black
            }
            div#markdowncontent hr{
              height : 1px;
              background-color:black;
            }
            .customcodevalues{
              display : inline-block;
              padding : 20px;
              cursor : pointer;
              border : 1px solid #E2DEED;
              /* color : #E2DEED; */
            }
            .selected{
              background-color:aqua !important;
              color : black !important;
            }
            .activecode{
              background-color:aqua !important;
              color : black !important;
            }
            pre{
              background-color : #282B2E;
              color : #ffffff;
            }
            .tiesspan{
              margin-left: 30px !important;
              margin-top: 20px !important;
            }
            .none{
              display : none;
            }
            .hidden{
              visibility : hidden;
            }
            .ifsd{
              display:inline-block;
              padding : 20px;
              border : 1px solid #DEDEDE;
              cursor : pointer;
            }
            .markdiv{
              margin-left:17%;margin-right:20%;width:100%;
              margin-top:50px;
            }
            .selected-data{
                background-color : #72A2D1;
                padding : 2px 0px 2px 4px;
            }
            .cursorpointer{
              cursor: pointer;
            }
            .headerlistitem{
              padding : 10px;
              border : 1px solid gray;
              cursor : pointer;
            }
            .editor-toolbar {
              position: -webkit-sticky;
              position: sticky;
              top: 0px; 
              z-index: 100;
              opacity: initial; 
              background-color: white;
              border-bottom: 1px solid #bbb;
            }

            .editor-toolbar:hover {
              opacity: initial;
            } 

            .indentpreview{
              padding: 10px;
              position: fixed;
              width: 100%;
              height: 100%;
              top: 0;
              left: 0;
              background: #fafafa;
              z-index: 7;
              overflow: auto;
              display: block;
              box-sizing: border-box;
              text-align: left;
            }

            .editor-preview-active-side{
              padding: 10px;
              position: fixed !important;
              bottom: 0;
              width: 50%;
              right: 0;
              background: #fafafa;
              z-index: 9;
              overflow: auto;
              display: block;
              box-sizing: border-box;
              border: 1px solid #ddd;
              text-align: left;
              height : 100%;
              float: right;
              max-height : 100vh;
            }
            

            /* li{
              margin-left : 0px
            } */
        </style>
    </head>
    
    <script>
      //  window.onbeforeunload = function() {
      //   return "Nice";
      //  }
    // $("#testcon").click(function(){
    //   $.post('',{
    //     username : $("#userid").val(),
    //     password : $("#password").val()
    //   },function(data){
    //     console.log
    //   })
    // })
    var markdownit = window.markdownit({
      xhtmlOut : true,
      html : true
      ,breaks: true  
    })
// .disable('list');
    // marked.setOptions({
    //   xhtml: true,
    //   breaks : true,
    //   headerIds : true,
    //   gfm : false,
    //   smartLists : true,
    //   smartypants	: true
    // });
    </script>

    <!-- hidden file uploads -->
    <input type='file' id='imgup' style='display:none' accept=".png, .jpg, .jpeg">
    <input type='file' id='uploadmd' style='display:none'>
    <input type='file' id='uploadjset' style='display:none'>
    <body style='margin-top:20px'>
    <div class="ui inverted dimmer" id='bodyloader' style='height: 100vh; width : 100vw;z-index : 1001'>
      <div class="ui loader"></div>
    </div>

    <div class="ui mini fluid steps" id='steps'>

        <!-- <div class="active step" id='1'><div class="content"><div class="title">PROJECT TITLE</div></div></div>
        <div class="step" id="2" ><div class="content"><div class="title">OVERVIEW</div></div></div>
        <div class="step" id="3"><div class="content"><div class="title">PRE-REQUISITE</div></div></div>
        <div class="step" id="4" ><div class="content"><div class="title">SYSTEM REQUIREMENTS</div></div></div>
        <div class="step" id="5" ><div class="content"><div class="title">REQUIRED DEALER EFFORT</div></div></div>
        <div class="step" id="6" ><div class="content"><div class="title">LIST OF OBJECTS</div></div></div>
        <div class="step" id="7" ><div class="content"><div class="title">SPECIAL INSTRUCTIONS</div></div></div>
        <div class="step" id="prev"><i class="angle double right icon"></i><div class="content"><div class="ui inverted dimmer" id="prevloader"><div class="ui loader"></div></div><div class="title">Preview</div></div></div> -->
        <!-- <button class='ui basic icon button' id='browseprojects'><i class='folder open icon'></i></button> -->
    </div>  
      <style>
        .frontform{
          display : none
        }
      </style>  
      <script>
        $(document).on('change',"#typedoc",function(){
          $('.frontform').hide();
          if($(this).val() == 'ins'){
            $('.insins').show();
          }else if($(this).val() == 'user'){
            $('.user').show();
          }
        })
 
      </script>
        <div class="ui grid">
            <div class="twelve wide column">
                <div>
                    <div class="ui bottom attached active tab tabsegment" data-tab="first">
                      <div class='markdiv'>
                        <form class='ui form'>
                          <div class='field'>
                            <select style='width:45%;margin-left:auto !important;margin-right :auto !important' id='typedoc'>
                              <option value=''>Select</option>
                              <option value ='ins'>Installation Instruction</option>
                              <option value ='user'>User guide</option>
                            </select>
                          </div>
                          <div class='field frontform insins'>
                              <label>Project Name</label>
                              <input type='text' id='markdown1' style='width:45%;'>
                          </div>
                          <div class='field frontform insins' >
                              <label>Project Number</label>
                              <input type='text' id='markdown2' style='width:45%;'>
                          </div>
                          <div class='field frontform insins'>
                              <label>DBSi Version</label>
                              <input type='text' id='dbsi_version' style='width:45%;'>
                          </div>
                          <div class='field frontform insins'>
                              <label>Tied with</label>
                              <input type='text' id='tiestext' style='width:45%;' autocomplete="off">
                              <div id='tieslist'></div>
                          </div>
                          <div class='field frontform user'>
                            <label>Title</label>
                            <input type='text' id='usergtitle'>
                          </div>
                        </form>  
                      </div>
                  </div>
                  <script>
                    $("#tiestext").keyup(function(e){
                      if(e.keyCode === 13){
                        $('#tieslist').append('<span class="ui teal tag label tiesspan" >'+ $("#tiestext").val() +'<i class="icon close closeties"></i> </span>');
                      } 
                    })
                    $(document).on('click', '.closeties',function(){
                      $(this).parent('span').remove();
                    })
                  </script>
                  <div class="ui bottom attached tab tabsegment" data-tab="second" >
                      <div  class='markdiv' >
                          <h4>Overview</h4>
                          <textarea id='markdown3'  class='textareas'></textarea>
                      </div>
                  </div>
                  <div class="ui bottom attached tab  tabsegment" data-tab="third">
                      <div class='markdiv'>
                          <h4>Pre-requisite</h4>
                          <textarea id='markdown4'  class='textareas'></textarea>
                      </div>
                  </div>
                  <div class="ui bottom attached tab tabsegment" data-tab="fourth">
                      <div class='markdiv'>
                          <h4>System Requirements</h4>
                          <textarea id='markdown5'  class='textareas'></textarea>
                      </div>
                  </div>
                  <div class="ui bottom attached tab  tabsegment" data-tab="fifth">
                      <div class='markdiv'>
                          <h4>Required Dealer Effort</h4>
                          <textarea id='markdown6' class='textareas'></textarea>
                      </div>
                  </div>
                  <div class="ui bottom attached tab  tabsegment" data-tab="sixth">             
                      <!-- <div style='margin-left:auto;margin-right:auto;text-align:center'>
                          <button class='ui blue button' id='addtable'>Add Table</button>
                          <button class='ui blue button' id='addlink'>Add Link</button>
                      </div> -->
                      <!-- <div id='tablelists'></div> -->
                      <div class='markdiv'>
                          <h4>List of Objects</h4>
                      <textarea id='markdown7' class='textareas'></textarea>
                      </div>
                  </div>
                  <div class="ui bottom attached tab  tabsegment" data-tab="seventh">
                      <div class='markdiv'>
                      <h4>Special Instruction after applying the project</h4>
                      <button class='ui basic blue button' id='SpecialParameterButton'>Document Paramters</button>
                      <br><br>
                      <textarea id='markdown8' class='textareas'></textarea>
                      </div>
                  </div>
                  <div class="ui tab tabsegment" data-tab="ninth">
                      <div style='margin-right:auto;margin-left:35vw;text-align:center' class='sticky'>
                        <button id='editresultbutton' class='ui teal button' style='display:none'>Edit</button>
                        <button id='upload' class='ui teal button' >Import MD</button>
                        <button id='download' class='ui teal button' >Export as MD</button>
                        <button id='downloadpdf' class='ui teal button'>Export as PDF</button>
                        
                        <button class="ui icon teal button" id='docsettings' type='button' data-html=" "><i class="wrench icon"></i></button>
                        <!-- <button id='downloadpreview' class='ui blue button' style='display:none'>Export Preview</button> -->
                        <!-- <button id='downloadhtml' class='ui olive button' >Export as HTML</button> -->
                      </div>
                      

                      <br><br><br>
                      <div id='previewtext'>
                      <div class="ui grid center">
                        <div class="column" >    
                        <div class='none'><input type='text' id='editProject2'></div>
                        </div>
                        <div class="column">                  
                        <div class='none'><input type='text' id='editNumber2'></div>
                        </div>
                        <div class=" column">         
                        <div class='none'><input type='text' id='editVersion'></div>
                        </div>                       
                      </div>
                      </div>
                      <style>
                        .h2h2{
                          text-align :left;
                        }
                      </style>
                      <div class='markdiv'>
                          <h2 id='projecth2' class='h2h2'></h2>
                          <h2 id='numberh2' class='h2h2'></h2> 
                          <h2 id='versionh2' class='h2h2'></h2> 
                        <div id='display' style='display:none'></div>      
                        <div class='none'><textarea id='markdownvalue'></textarea></div>
                        <div id='markdowncontent' style='display:block !important;text-align:left;width:595pt'></div>
                      </div>  
                  </div>           
                  </div>
            </div>
          </div>
          <!-- <div ><button class='ui blue button' id='nexttab'>NEXT</button></div> -->
<!--MODALS-->
<div class='ui tiny modal' id='templatetoolmodal'>
  <div class='header'>Templates</div>
  <div class='content'>
    <select id='templatelist'>
      <option value=''>Select A Template</option>
    </select>
  </div>
  <div class='actions'>
    <div class='ui basic blue approve button'>Confirm</div>
    <div class='ui basic red cancel button'>Close</div>
  </div>
</div>

</div>
<div class='ui tiny modal' id='headerlistmodal'>
  <div class='header'>Headers</div>
  <div class='content'>
    <div class='center'>
      <span class='headerlistitem'>H1</span><span class='headerlistitem'>H2</span><span class='headerlistitem'>H3</span>
      <span class='headerlistitem'>H4</span><span class='headerlistitem'>H5</span><span class='headerlistitem'>H6</span>
    </div>
  </div>
  <div class='actions'>
    <button class='ui basic blue approve button' id='headerlistapprove'>Confirm</button>
    <button class='ui basic red cancel button'>Close</button>
  </div>
</div>

<div class='ui fullscreen modal' id='ifsmodal'>
  <div class='header'>Browse saved sessions</div>
  <div class='content'>
    <div id='ifsmodalcontent'>
    </div>
  </div>
  <div class='actions'>
    <button class='ui inverted blue button'  id='savesession'>Save</button>
    <button class='ui inverted red cancel button'>Close</button>
  </div>
</div>

<div style='display:none' id='docsettingspop'>
<div class="ui two column divided center aligned grid">
  <div class="column">
  <button class='ui blue inverted fluid button docbutton' style='height:100%;' type='button' id='displayParams'>Document Parameters</button> 
  </div>
  <!-- <div class="column"> -->
    <!-- <button class='ui blue inverted fluid button docbutton' style='height:100%;' id='extractcom'>Extract Commands</button> -->
  <!-- </div> -->
  <div class="column">
      <button id='exportsettings' class='ui blue inverted fluid button docbutton' style='height:100%;' type='button'>Export Settings</button>
  </div>
  <!-- <div class="column">
      <button class='ui inverted fluid blue button' style='height:100%;' id='savesession'>Save</button>
  </div> -->
</div>
</div>
<div class='ui inverted tiny modal' id='listtoolmodal'>
  <div class='header'>Select A Type of List</div>
  <div class='content center'>
      <div><i class='list ol icon listlist cursorpointer' data-list='ordered'></i></div>
      <div><i class='list ul icon listlist cursorpointer' data-list='unordered'></i></div>
      <div><i class='sort alphabet down icon listlist cursorpointer' data-list='ola'></i></div>
      <div><i class='text height icon listlist cursorpointer' data-list='olr'></i></div>
      <div><i class='boxes icon listlist cursorpointer' data-list='lform'></i></div>
      <!-- <select class='listlist'>
          <option value=''>Select List</option>
          <option value='ordered'>Numbered</option>
          <option value='unordered'>Bullets</option>
          <option value='ola'>Alphabet</option>
          <option value='olr'>Roman Numeral</option>
          <option value='lform'>Structured List</option>
      </select> -->
  </div>
  <div class='actions'>
    <div class='ui inverted blue approve button' id='listtoolapprove'>Confirm</div>
    <div class='ui inverted red cancel button'>Close</div>
  </div>
</div>

<div class='ui inverted modal' id='commandsmodal'>
  <div class='header'></div>
  <div class='content'>
    <div id='listofcommands'>
    </div>
  </div>
  <div class='actions'>
    <button class='ui inverted red cancel button'>Close
  </div>
</div>
<style>
.paramtabitem{
  border : 1px solid white !important;
  color : white !important;  
}
.paramtabitem.active{
  color : black !important;
}
</style>
<script>

</script>
<div class='ui inverted modal' id='SpecialParameterModal'>
  <div class='header'></div>
  <div class='content'>
    <div class='center'><div class='ui input'><input type='text' id='SpecialParameter' style='margin-right:1vw'></div><button class='ui inverted blue button' id='AddSpecialParam'>Add Parameter</button><button class='ui inverted blue button' id='uploadjsonsetting'>Upload Config</button></div>  
    <div class="ui tabular menu" id='ParameterTab' >
      <div class="active item paramtabitem" data-tab="FORMTAB">Form</div>
      <div class="item paramtabitem" data-tab="JSONTAB">JSON</div>
      <div class="item paramtabitem" data-tab="YAMLTAB">Yaml</div>
    </div>
    <div class="ui active tab paramtab" data-tab="FORMTAB">
        <div class='ui form' id='SpecialPForm'></div>                
    </div>
    <div class="ui tab paramtab" data-tab="JSONTAB">
      <pre><code id='JSONParam' class='json'></code></pre>
    </div>
    <div class='ui tab paramtab' data-tab="YAMLTAB">
      <pre><code id='YAMLTAB' class='yaml'></code></pre>
    </div>
  </div>
  <div class='actions'>
    <button class='ui blue inverted button' id='GenerateParamData' style='display:none'>Confirm</button>
    <button class='ui blue inverted button' id='downloadparamjson'>Download</button>
    <button class='ui blue inverted button docbutton' type='button' id='processdata'>Process Parameter</button>
    <button class='ui blue inverted button docbutton' id='extractcom'>Extract Commands</button>
    <button class='ui red basic cancel button'>Close</button>
  </div>
</div>

<div class='ui modal' id='settingsmodal'>
  <div class='header'>Settings</div>
  <div class='scrolling content'>
    <div class="ui checkbox" id='autogeneratemd'>
        <input type="checkbox" >
        <label>Auto Generate MD TOC?</label>
    </div>
    <div class="ui checkbox" id='autogeneratepdf'>
        <input type="checkbox" >
        <label>Auto Generate PDF TOC?</label>
    </div>
    <!-- <div class="ui checkbox" id='autogeneratehtml'>
        <input type="checkbox" >
        <label>Auto Generate HTML TOC?</label>
    </div> -->
    <h3>Generate Table of contents for:</h3>
    <div class='ui divider'></div>
    <form class='ui form'>
      <div class='fields'>
        <div class='field'>
            <div class="ui checkbox" id='topH1'>
              <input type="checkbox" >
              <label>H1</label>
            </div>
            <div class="ui checkbox" id='topH2'>
                <input type="checkbox" >
                <label>H2</label>
            </div>
            <div class="ui checkbox" id='topH3'>
                <input type="checkbox">
                <label>H3</label>
            </div>
        </div>
      </div>
    </form>
    <h3>Generate Mod Logs?<div class="ui checkbox" id='modLcb'><input type="checkbox" ><label></label></div></h3>
    <div class='ui divider'></div>
    <div class='ui form' id='ModLogFormData' style='display:none'>
    </div>
    <br>
    <div class='center'>
    <div class='ui buttons' >
        <button class='ui blue basic fluid button' id='addModRow' style='display:none'>Add Row</button>
        <button class='ui red basic fluid button' id='delModRow' style='display:none'>Delete Row</button>
    </div>
  </div>

  </div>
  <div class='actions'>
  <button class='ui basic red cancel button' id='closemodal'>Close</button>
  </div>
</div>

<div class='ui large modal' id='tablecreator'>
    <div class='header'>Insert Table</div>
    <div class='scrolling content'>
        <!-- <div class='center'>
          <button class='ui basic blue button' id='tableaddcolumn'>Add Column</button><button class='ui basic green button' id='tableaddrow'>Add Row</button><button class='ui red basic button'>Delete Column</button><button class='ui red basic button'>Delete Row</button>
        </div>
        <table id='insertablecolumndiv' class='ui very basic table center'><thead><tr></tr></thead></table> -->
        <style>
        #exceltable button{
          display : inline;
        }
        #exceltable tr td{
          /* border : 1px solid black; */
          height : 20px;
        }
        #exceltable {
          width: 100%;
          height: 100%;
        }
        
      </style>
        <div id='excelbuttongroup' class='center'><button class='ui basic button' id='exiw' >Increase Width</button><button class='ui basic button' id='exih'>Increase Height</button></div>
        <table class='ui celled table' id='exceltable'></table>

        <table id='inserttableform' class='ui very basic table center' ><tbody></tbody></table>
    </div>
    <div class='actions'>
        <button class='ui basic approve blue button' id='inserttablebutton'>Confirm</button>
        <button class='ui basic orange button' id='resetinserttablemodal'>Reset</button>
        <button class='ui basic red cancel button'>Close</button>
    </div>
</div>

<div class='ui tiny inverted modal' id='customcodemodal'>
  <div class='header'>Select A Language</div>
  <div class='content'>
    <div class='center'>
      <div class='customcodevalues sqlcodesegment' data-value='sql'>SQL</div>
      <div class='customcodevalues clcodesegment' data-value='cl'>CL</div>
      <div class='customcodevalues qshcodesegment' data-value='qsh'>QSH</div>
      <div class='customcodevalues gencodesegment' data-value='gen'>Generic</div>
    </div>
  </div>
  <div class='actions'>
      <button class='ui inverted approve blue button' id='approvecustomcode'>Confirm</button>
      <button class='ui inverted red cancel button'>Close</button>
  </div>
</div>

<div class='ui large large modal' id='editresultmodal'>
      <div class='header'>Edit</div>
      <div class='scrolling content' id='editormodalcontent'>
        <div class="ui tabular menu">
          <div class="active item" data-tab="tab-name" id='mdtab'>Markdown</div>
        </div>
        <div class="ui active tab" data-tab="tab-name">
            <textarea id='resultcontent' class='textareas'></textarea>
        </div>
      </div>
      <div class='actions'>
        <button class='ui ok blue button' id='editformbutton' style='display:none'>Confirm</button>
        <button class='ui red cancel button'>Close</button>
      </div>
</div>

<div class='ui small modal' id='tablemodal'>
    <div class='header'>Create Table</div>
    <div class='scrolling content'>
      <form class='ui form' id='tableform' >
        <div class='field'>
          <label>Name of Table</label>
          <input type='text' id='tablename'>
        </div>          
      </form>
      <form class='ui form' id='rowform' style='display:none' >
          <div class='field'>
            <label>Object</label>
            <input type='text' id='column1'>
          </div>
          <div class='field'>
            <label>Type</label>
            <input type='text' id='column2'>
          </div>          
      </form>
      <div class='ui segment' id='tablepreview' style='margin-left:20%;width:50%'></div>
    </div>
    
    <div class='actions'>
      <button class='ui teal button' id='committable' style='display:none'>Create Table</button>
      <button class='ui purple button' id='deleterow' style='display:none'>Delete Row</button>
      <button class='ui green button' id='createtable'>Create</button>
      <button class='ui blue button' id='addrowbutton' style='display:none'>Add Row</button>
      <button class='ui red cancel button'>Cancel</button>
    </div>
  </div>

<div class='ui small modal' id='createlinkmodal'>
  <div class='header'></div>
  <div class='content'>
    <form class='ui form'>
      <div class='field'>
        <label>Link Name</label>
        <input type='text' id='linkname'>
      </div>
      <div class='field'>
        <label>Link Address</label>
        <input type='text' id='linkaddress'>
      </div>
    </form>
  </div>
  <div class='actions'>
    <button class='ui blue button' id='createlink'>Create Link</button>
    <button class='ui red cancel button'>Close</button>
  </div>
</div>

<style>
.center{
  margin-right:auto !important ;margin-left:auto !important ;text-align:center !important
}
</style>

<div class='ui tiny basic modal' id='confirmmodal'>
  <div class='content center'>
    <p>Proceed to the next step?</p>
  </div>
  <div class='actions center'>
      <button class='ui blue inverted button' id='modalpreviewbutton'>Preview</button>
      <button class='ui green inverted ok button' id='confirmbutton'>Yes</button>
      <button class='ui red cancel inverted button'>No</button>
  </div>
</div>

<div class='ui tiny modal' id='savesessionmodal'>
  <div class='header'>Save Session</div>
  <div class='content'>
    <div class='ui form'>
      <div class='field'>
        <label>Session Name</label>
        <input type='text' id='sessionname'>
      </div>
    </div>
  </div>
  <div class='actions'>
    <button class='ui inverted blue approve button'>Confirm</button>
    <button class='ui inverted red cancel button'>Close</button>
  </div>
</div>

<style>
  .activeheader{
    background-color: #00FFFF;
    color : black;
  }
</style>
<!--SCRIPTS-->
<script>
  
// var titles = [
// 'I. Overview',
// 'II. Pre-Requisite',
// 'III. System Requirements',
// 'IV. Required Dealer Effort',
// 'V. List of Objects','Special Instructions'
// ];
$("#autogeneratepdf").checkbox('check'); $("#topH1").checkbox('check'); $("#modLcb").checkbox('check'); 
$("#ModLogFormData").show();
$("#addModRow").show();
$("#delModRow").show();
var titles = [
{
    title : 'I. Overview',
    tabcontent : '<div class="content"><div class="title">OVERVIEW</div></div>',
    hideTitle : false,
    tabid : 2,
    sindex : 0
  },
  {
    title : 'II. Pre-Requisite',
    tabcontent : '<div class="content"><div class="title">PRE-REQUISITE</div></div>',
    hideTitle : false,
    tabid : 3,
    sindex : 1
  },
  {
    title : 'III. System Requirements',
    tabcontent : '<div class="content"><div class="title">SYSTEM REQUIREMENTS</div></div>',
    hideTitle : false,
    tabid : 4,
    sindex : 2
  },
  { 
    title : 'IV. Required Dealer Effort',
    tabcontent : '<div class="content"><div class="title">REQUIRED DEALER EFFORT</div></div>',
    hideTitle : false,
    tabid : 5,
    sindex : 3
  },
  { 
    title : 'V. List of Objects',
    tabcontent : '<div class="content"><div class="title">LIST OF OBJECTS</div></div>',
    hideTitle : false,
    tabid : 6,
    sindex : 4
  },
  {
    title : 'Special Instructions',
    tabcontent : '<div class="content"><div class="title">SPECIAL INSTRUCTIONS</div></div>',
    hideTitle : true,
    tabid : 7,
    sindex : 5
  }
];
var SpecialInsTabs = [0,1,2,3,4,5];

var UserTabs = [5];
var stabs;
$('#steps').append('<div class="active step" id="1"><div class="content"><div class="title">PROJECT TITLE</div></div></div>');
$('#typedoc').change(function(){
  if($('#typedoc').val() ==  'ins'){
    stabs = SpecialInsTabs;
  }else if($('#typedoc').val() == 'user'){
    stabs = UserTabs;
  }
  var tabs = [];
  for(let i=0;i<stabs.length;i++){
    // console.log(titles[stabs[i]] );
    tabs.push({
      html : titles[stabs[i]]['tabcontent'],
      tab : titles[stabs[i]]['tabid']
    });
  }
  $("#steps").html('');
  var tabcontentappend = '<div class="active step" id="1"><div class="content"><div class="title">PROJECT TITLE</div></div></div>';
  for(let i=0;i<tabs.length;i++){
    tabcontentappend += '<div class="step" id="'+tabs[i]['tab']+'" >'+ tabs[i]['html']+'</div>';
  }
  tabcontentappend += '<div class="step" id="prev"><i class="angle double right icon"></i><div class="content"><div class="ui inverted dimmer" id="prevloader"><div class="ui loader"></div></div><div class="title">Preview</div></div></div>';
  tabcontentappend += "<button class='ui basic icon button' id='browseprojects'><i class='folder open icon'></i></button>";
  $('#steps').append(tabcontentappend);
})

$(document).on('click','.headerlistitem',function(){
  $('.headerlistitem').removeClass('activeheader');
  $(this).addClass('activeheader');
  $('#headerlistapprove').click();
})

$(document).on('mouseenter','.ifsd',function(){
  $(this).css('background-color','#A6E0FF');
  $(this).css('color','white');
})

$(document).on('mouseleave','.ifsd',function(){
  $(this).css('background-color','');
  $(this).css('color','');
})

$(document).on('click',"#browseprojects",function(){
  $("#ifsmodalcontent").html('');
  $.post(window.location.origin +'/acnmstools/commands.php',{
    type : 'browseprojects',
    btype : 'initial'
  },function(data){
    try{
      data = JSON.parse(data);
    }catch(ex){
      console.log(ex);
      return
    }                
    if(data['return'] == 0){
      var ifsd = '';
      for(let i=0;i<data['dir'].length;i++){
        if(data['dir'][i].trim() != ''){
          ifsd += '<div class="ifsd noselect">' + data['dir'][i] + '</div>';
        }
      }
      $('#ifsmodalcontent').html(ifsd);  
      $('#ifsmodal').modal({
        autofocus : false
      }).modal('show');
    }else{
      console.log(data['return']);
    }          
  })
})
$(document).on('dblclick',".ifsd",function(data){
  var dir = $(this).html().trim();
  $('#bodyloader').addClass('active');

  var mdPromise = new Promise(function(resolve,reject){
      $.get({
         url : window.location.origin +'/acnmstools/cache/'+dir + "/"+dir+".md",
         cache : false
        },function(one){      
        try{
          loadtext(one);  
        }catch(ex){
          reject(ex);
        }finally{
          resolve('ok')
        }
      })
  })
  var paramPromise = new Promise(function(resolve,reject){
      $.get({
        url : window.location.origin +'/acnmstools/cache/'+dir + "/"+dir+".json",
        cache : false
        },function(two){
            try{
              var json = two;
              var keys = Object.keys(json);
              for(let i=0;i<keys.length;i++){
                var val = json[keys[i]]['value'];
                var type = json[keys[i]]['type'];
                updateParamModal(keys[i],val,type);
              }
            }catch(ex){
              reject(ex)
            }finally{
              resolve('ok')
            }
      })        
  })

  var modPromise = new Promise(function(resolve,reject){
    try{
      $.get({
          url : window.location.origin +'/acnmstools/cache/'+dir + "/"+dir+"mod.json",
          cache : false
        },function(three){
        try{
          modrow = three;
          loadmodlogs('init',modrow);
        }catch(err){
          reject(err);
        }finally{
          resolve('ok');
        }
      })
    }catch(err){
      reject(err);
    }
  })

  var frontPromise = new Promise(function(resolve,reject){
    // try{
      $.ajax({
        url : window.location.origin + '/acnmstools/cache/'+dir +"/"+dir+"front.json",
        cache : false,
        success : function(data){
          resolve(data);
        },
        error : function(err){
          console.log(err);
          reject(err)
        }
      })
      // $.get({
      //   url : window.location.origin + 'acnmstool/cache/'+dir + "/front.json",
      //   cache : false
      // },function(four){
      //   try{
      //     console.log(four);
      //   }catch(err){
      //     reject(err);
      //   }finally{
      //     resolve('ok');
      //   }
      // })
    // }catch(err){
    //   reject(err);
    // }
  })

  $.when(mdPromise,paramPromise,modPromise,frontPromise).then(function(){
    $('#bodyloader').removeClass('active');
    $('#ifsmodal').modal('hide');
  }).catch(function(err){
    console.log(err);
    $('#bodyloader').removeClass('active');
    $('#ifsmodal').modal('hide');
  })
}) 
  $(document).on('keyup',"td",function(e){
  // console.log($(this).attr('contenteditable'))
  // console.log(e.keyCode);
    if(e.keyCode == 46 && $(this).attr('contenteditable') == "true"){
      $(this).html('');
      $(this).attr('style','');
      $(this).css('border','1px solid black');
    }
  })
    var listtype = '';
    $(document).on('click','.listlist',function(){
        $('.listlist').parent('div').removeClass('selected-data');
        $(this).parent('div').addClass('selected-data');
        listtype = $(this).attr('data-list');
        $("#listtoolapprove").click();
    })
    // $('.listlist').change(function(){
    //   listtype = $(this).val();
    // })

  document.getElementById('exceltable').addEventListener('paste', function(e){
      e.preventDefault();
      e.stopPropagation();
      var clipboardData = e.clipboardData || window.clipboardData;
      var data= clipboardData.getData('text/html');
      //  console.log(data);
      var rows = "";
      data = $(data).find('tr').each(function(){
        $(this).children('td').each(function(){
          $(this).attr('contenteditable','true');
        })
        var counttd = $(this).children('td').length;
        if(counttd < excelsize['width']){
          for(let i=counttd;i<excelsize['width'];i++){
            $(this).append('<td contenteditable="true"></td>');
          }  
        }else if(counttd > excelsize['width']){
          $("#exceltable").find('tr').each(function(){
            var count = $(this).children('td').length;
            if(count == excelsize['width']){
              //  console.log($(this).html())
              for(let i=0;i<counttd - excelsize['width'];i++){
                  $(this).append('<td contenteditable="true"></td>');
              }
            }
          })
            $("#exceltable").find('tr').each(function(){
            
              if($(this).children('td').length != 0){
                excelsize['width'] = $(this).children('td').length;
                return;
              }
            })
          
        }
        rows += "<tr>" + $(this).html() + "</tr>";
      })
      $(e.target).parent('tr').after(rows);  
  });


  $("#exiw").click(function(){
    $('#exceltable').find('tr').each(function(){
      // console.log($(this).children('td').length + "==" + excelsize['width']);
      if($(this).children('td').length == excelsize['width']){
        $(this).append('<td contenteditable="true"></td>');
      }
    })
    excelsize['width']++;
  })

  $("#exih").click(function(){
    var tr ='<tr>';
    for(let i=0;i<excelsize['width'];i++){
      tr += '<td contenteditable="true"></td>';
    }
    tr += '</tr>';
    $("#exceltable").append(tr);
    excelsize['height']++;
  })

  $("#uploadjsonsetting").click(function(){
    $('#uploadjset').click()
    $("#uploadjset").change(function(){
      var file = $(this)[0].files[0];
      readPromise(file).then(function(text){
        var json = JSON.parse(text);
        var keys = Object.keys(json);
        for(let i=0;i<keys.length;i++){
          var val = json[keys[i]]['value'];
          var type = json[keys[i]]['type'];
          updateParamModal(keys[i],val,type);
        }
      })
    })
  })

  $('#downloadparamjson').click(function(){
    saveTextAsFile(JSON.stringify(toJSONYAML(SpecialParams)['json']),'json');
  })
  $(document).on('click','.docbutton',function(){
    $(document).popup('hide all');
  })
  $("#docsettings").attr('data-html',$("#docsettingspop").html())
  $('#docsettings').popup({
    onShow : function(){
      $(this).addClass('flowing');
    },
    position : 'bottom center',
    on: 'click'
  });
  </script>
<script>
var excelsize = {
    height : 10,
    width : 10
}
$('#ParameterTab').tab();
excelsize = resetexcel(excelsize)
$("#SpecialParameterButton").click(function(){
  $("#SpecialParameterModal").modal("show"); 
})

var itablecolumns = [];
$("#tableaddcolumn").click(function(){
   itablecolumns.push("<th class='ui input two wide'><input type='text'></th>");
   refreshtable(itablecolumns,itablerows);
})
var itablerows = [];
$("#tableaddrow").click(function(){
   var row = '';
   for(let i=0;i<itablecolumns.length;i++){
     row += "<td class='ui input two wide' style='border:0px !important'><input type='text'></td>";
   }
   itablerows.push(row);

   refreshtable(itablecolumns,itablerows);
})

$("#resetinserttablemodal").click(function(){
    // $("#insertablecolumndiv").children('thead').children('tr').html('');
    // $("#inserttableform").children('tbody').html('');
    // itablecolumns = [];
    // itablerows = [];
    excelsize = resetexcel(excelsize);
})

function resetexcel(excelsize){
  var exceltable = '';
  for(let i=0;i<10;i++){
    exceltable += '<tr>';
    for(let x=0;x<10;x++){
      exceltable += "<td contenteditable=true></td>";
    }
    exceltable += '</tr>';
  } 
  excelsize['width'] = 10;
  excelsize['height'] = 10;
  $("#exceltable").html(exceltable);
  return excelsize;
}

var tableinsertmd = [];
$("#modLcb").change(function(){
    if($("#modLcb").checkbox('is checked')){
      $("#ModLogFormData").show();
      $("#addModRow").show();
      $("#delModRow").show();
    }else{
      $("#ModLogFormData").hide();
      $("#addModRow").hide();
      $("#delModRow").hide();
    }
})

var modrow = [{
  date : '',
  note : '',
  modified : ''
}];
loadmodlogs('init',modrow);
$("#addModRow").click(function(){
  loadmodlogs('push',modrow);
})
$("#delModRow").click(function(){
  loadmodlogs('pop',modrow);
})

function loadmodlogs(type,modrow){
  // console.log(modrow);
  if(type == 'init'){
    // console.log('init');
    for(let i=0;i<modrow.length;i++){
      var mod = "<div class='modlogsitem'><div class='ui divider' style='background-color:red'></div><div class='ModRows'><div class='field datefield'><label>Date</label><div class='ui calendar ModDate'><div class='ui input left icon'><i class='calendar icon'></i><input type='text' placeholder='Date/Time'></div></div></div><div class='field notefield'><label>Change Note</label><input type='text' class='change' value='"+ modrow[i]['note'] +"'></div><div class='field modfield'><label>Modified By</label><input type='text' class='modder' value='"+ modrow[i]['modified'] +"'></div></div></div>";
      $('#ModLogFormData').append(mod);
    }
  }else{
    modrow = updatemodrowarray(modrow);
  }
  if(type == 'push'){
    modrow.push({
      date : '',
      note : '',
      modified : ''
    });
  }else if(type == 'pop'){
    modrow.pop();
  }
  // console.log(modrow);

  $("#ModLogFormData").html('');
  for(let i=0;i<modrow.length;i++){
    var mod = "<div class='modlogsitem'><div class='ui divider' style='background-color:red'></div><div class='ModRows'><div class='field datefield'><label>Date</label><div class='ui calendar ModDate'><div class='ui input left icon'><i class='calendar icon'></i><input type='text' placeholder='Date/Time'></div></div></div><div class='field notefield'><label>Change Note</label><input type='text' class='change' value='"+ modrow[i]['note'] +"'></div><div class='field modfield'><label>Modified By</label><input type='text' class='modder' value='"+ modrow[i]['modified'] +"'></div></div></div>";
    $('#ModLogFormData').append(mod);
  }
  var i=0;
  $(document).find('.ModDate').each(function(){
    var thisdate = modrow[i]['date'];
    $(this).calendar("set date", thisdate);
    i++;
  })
}

function updatemodrowarray(modrow){
  var i=0;
  $('.modlogsitem').each(function(){
    modrow[i]['date'] = $(this).find('.ModDate').calendar('get date');
    modrow[i]['note'] = $(this).find('.change').val();
    modrow[i]['modified'] = $(this).find('.modder').val();
    i++;
  })
  return modrow;
}

var SpecialParams = [];
</script>
<style>
  .checkboxfield{
    text-align : center;
    margin-left : auto;
    margin-right : auto;
  }
</style>
<script>
$("#AddSpecialParam").click(function(){
  var param = $("#SpecialParameter").val().trim();
  updateParamModal(param);
})
$(document).on('change',".paramtype",function(){
  updatespecial();
})
</script>
<script>

function updateParamModal(param,value,itype){ 
  if(!inArray(param,SpecialParams)){
    var append = "";
    append += "<div class='fields'>"
    append += "<div class='field'>";
    append += "<label style='color:white'><span data-value='"+ param +"'>" + param + "</span>" + trashicon +"</label>";
    if(value != undefined && value != null && value != ''){
      append += "<input type='text' id='Generate"+param+"' value='"+value+"'>";
    }else{
      append += "<input type='text' id='Generate"+param+"'>";
    }
    append += "</div><div class='field'>";
    append += "<label><b>Type</b></label>";
    append += "<select class='paramtype'>";
    var options = [
      {text : "Replace value", val : "repval"},
      {text : "Required", val : "required"},
      {text : "Hidden", val : "hidden"},
      {text : "Disabled", val : "disabled"}
    ]
    for(let i =0;i<options.length;i++){
      // console.log(options[i]['val'] + "==" + itype);
      if(options[i]['val'] == itype){
        append += "<option value='"+itype+"' selected>"+ options[i]['text'] +"</option>";
      }else{
        append += "<option value='"+options[i]['val'] +"'>"+ options[i]['text'] +"</option>";
      }
    }
    append += "</select>"
    append += "</div>";
    // append += "<div class='field checkboxfield'><label>Replace Value</label><input type='checkbox' style='height:50%;width:50%'></div> ";
    append += "</div>";
    if(itype!= ''){
      
    }
    $("#SpecialPForm").append(append);
    updatespecial();
  }
}
function updatespecial(){
  SpecialParams = [];
  $("#SpecialPForm").children('.fields').each(function(){
    var param = {};
    // var checkbox;
    // console.log($(this).children('.checkboxfield').children('select').html());
    // if($(this).children('.checkboxfield').children('select').is(":checked")){
    //   checkbox = true;
    // }else{
    //   checkbox = false;
    // }
    param['value'] = $(this).children('.field').children('label').children('span').attr('data-value');
    param['type'] = $(this).children('.field').children('select').val();
    // param['replace'] = checkbox;
    SpecialParams.push(param);
    // hljs.initHighlighting.called = false;
    // hljs.initHighlighting();
  })
}
$("#GenerateParamData").click(function(){
  SpecialParams = [];
  updatespecial();
  var Data = toJSONYAML(SpecialParams);
  var yamlhtml = Data['yaml'];
  $("#YAMLTAB").html(yamlhtml);
  $("#JSONParam").html(JSON.stringify(Data['json'],null,4));
  // hljs.initHighlighting.called = false;
  // hljs.initHighlighting();
})

$(document).on('click',"#processdata",function(){
  $("#prev").click();
  var data = toJSONYAML(SpecialParams)['json'];
  var datakeys = Object.keys(data);
  var opening = [];
  var closing = [];
  
  var tags = {
    opening : [],
    closing : [],
    length : datakeys.length,
  }

  for(var i=0;i<datakeys.length;i++){
    tags['opening'].push("<"+ datakeys[i] +">");
    tags['closing'].push("</"+ datakeys[i] +">");
  }
  var md = markdownvalue.value();
  md = replacetags(tags,md,data);
  beforeimage = replacetags(tags,beforeimage,data);
  updateMarkdownValue(md);
})

$(document).on('click','#extractcom',function(){
  var data = generatemddata()['markdown'];
  var doc = new DOMParser().parseFromString(data, "text/html");
  var commandlist = [];
  $(doc).find('required, hidden').each(function(){
    var tagname = $(this).attr('data-step');
    var commands = {
      tag : tagname,
      list : []
    }
    $(this).find('code').each(function(){
      var command = {
        html : $(this).html(),
        command : stripallHtml($(this).html()),
        status : '',
      }
      try{
        var thisclass = $(this).attr('class').split(" ");
        for(let c=0;c<thisclass.length;c++){
            if(thisclass[c].match(/language-.*/)){
              command['type'] = thisclass[c];
            }
        }
        if(command['type'] != undefined || command['type'] != null){
          // commandlist.push(command);
          commands['list'].push(command);
        }
      }catch(err){
        console.log(err);
      }
    })
    commandlist.push(commands);
  })
  // console.log(commandlist);
  var dom = '';
  for(let i=0;i<commandlist.length;i++){
    if(commandlist[i]['list'].length != 0){
      dom += "<hr style='background-color:white;height:1px'><h4>"+ commandlist[i]['tag'] +": </h4><hr style='background-color:white;height:1px'><br>";
    }
    for(let x=0;x<commandlist[i]['list'].length;x++){
      dom += commandlist[i]['list'][x]['html'] += "<br><br><br>";
    }
  }
  // console.log(commandlist);
  $("#listofcommands").html(dom);
  $("#commandsmodal").modal({
    allowMultiple : true
  }).modal('show');
})

function stripHTML(dirtyString) {
  var container = document.createElement('div');
  var text = document.createTextNode(dirtyString);
  container.appendChild(text);
  return container.innerHTML;
}
function htmlEncode ( html )
{
    html = $.trim(html);
    return html.replace(/[&"'\<\>]/g, function(c) 
    {
          switch (c) 
          {
              case "&":
                return "&amp;";
              case "'":
                return "&#39;";
              case '"':
                return "&quot;";
              case "<":
                return "&lt;";
              default:
                return "&gt;";
          }
    });
};

function replacetags(tags,md,data){
  md = encodeURI(md);
  for(let i=0;i<tags['length'];i++){
    var datakey = data[tags['opening'][i].replace('<','').replace('>','').trim()];
    var key = tags['opening'][i].replace('<','').replace('>','').trim();
    // var open = tags['opening'][i].replace('<','%3C').replace('>','%3E');
    // var close = tags['closing'][i].replace('<','%3C').replace('>','%3E');
    // var openreg = RegExp(open);
    // var closereg = RegExp(close);
    // var olength = md.split('%3C'+tags[i]+'%3E');
    var clength = md.split('%3C/'+key.trim()+'%3E').length;
    for(let i=0;i<clength;i++){
      md = md.replace('%3C/'+key.trim()+'%3E','</'+key.trim()+'>')
      md = md.replace('%3C'+key.trim()+'%3E','<'+key.trim()+'>');
      // md = md.replace('%3C'+key.trim()+'/%3E','<'+key.trim()+'/>');
    }
  }
  // console.log(md);
  var doc = new DOMParser().parseFromString(md, "text/html");
  // console.log(doc);

  for(let i=0;i<tags['length'];i++){
    var datakey = data[tags['opening'][i].replace('<','').replace('>','').trim()];
    var key = tags['opening'][i].replace('<','').replace('>','').trim();
    var open = tags['opening'][i];
    var close = tags['closing'][i];
    // var keylength = $(doc).find('body').html().split(key).length;
    // console.log(keylength);
    // for(let k =0;k<keylength;k++){
        $(doc).find(key).each(function(){
          // $(this).find('code').each(function(){
            // console.log($(this).html())
              switch(datakey['type'].trim()){
              case "hidden":
                  $(this).replaceWith('<hidden data-step="'+key+'" style="display:none">\n\n'+ $(this).html()  +'\n\n</hidden>');
              break;
              case "disabled":
                  var rep = '<disabled>\n\n' + $(this).html()  + '\n\n</disabled>';
                  $(this).replaceWith(rep);
              break;
              case "required":
                  var rep = '<required data-step="'+key+'">\n\n' + $(this).html()  + '\n\n</required>';
                  $(this).replaceWith(rep);
              break;
              case "repval":
                  // console.log($(this).html())
                  $(this).replaceWith(datakey['value']);
              break;
            }
          // })

        })
    // }
  }
  md = decodeURI($(doc).find('body').html());
  return md;
}



$(".paramtabitem").click(function(){
  $("#GenerateParamData").click();
})
$(document).on('click',"#displayParams",function(){
  $("#SpecialParameterModal").modal({
    allowMultiple : true
  }).modal("show"); 
})


var trashicon = "<i class='trash icon' data-search-terms='delete, garbage, hide, remove'></i>";
$(document).on('mouseenter','.trash',function(){
  $(this).css('color','red')
})

$(document).on('mouseleave','.trash',function(){
  $(this).css('color','')
})

$(document).on('click','.trash',function(){
  var param = $(this).siblings('span').html().trim();
  // console.log(param);
  // console.log("before - " + JSON.stringify(SpecialParams));
  SpecialParams = removeThis(param,SpecialParams);
  // console.log("after- " + JSON.stringify(SpecialParams));
  refreshparameters(toJSONYAML(SpecialParams)['json']);
})

function removeThis(remove,array){
  // console.log('rem ' + remove);
  // console.log('arr ' + JSON.stringify(array));
  for(let i=0;i<array.length;i++){
    // console.log(array[i]['value']);
    if(array[i]['value'].trim() == remove.trim()){
      array.splice(i,1);
      return array;
    }
  }
  return array;
}
  $(document).on('click','a',function(e){
    e.preventDefault();
  })
  $(document).on('click',"#exportsettings",function(){
    $("#settingsmodal").modal({
      observeChanges : true,
      onShow : function(){
        $('.ModDate').calendar({type :  'date'});
      }
    }).modal('show')
  })
  var markdownvalue = new SimpleMDE({ element: $("#markdownvalue")[0], showIcons: ["table"],
    hideIcons: ["guide", "heading","bold",'italic','quote','ordered-list','unordered-list',
    'link','image','table','side-by-side','fullscreen','preview'],
      renderingConfig: {
	  	codeSyntaxHighlighting: true,
	  },
    previewRender : function(newdata,preview){
      var npoccurence = newdata.split('<%np%>').length;
      var newdata = '\n' + newdata.toString();
      newdata = processpreview(newdata);
      for(let i=0;i<npoccurence;i++){
            newdata = newdata.replace("<%np%>",'      ');
      }
      return newdata;
    }
  })
  $('#nexttab').click(function(){
    var nexttab = initial+1
    if(nexttab != 8){
      $("#"+nexttab).click()
    }else{
      $("#prev").click()
    }
  })
  $("#mdtab").click(function(){
    $("#editformbutton").hide()
  })
  $("#formtab").click(function(){
    $("#editformbutton").show();
  })
  $("#editformbutton").click(function(){
    var update = 
    "# " + $("#editname").val() + " (" + $("#editnumber").val() + ")\n\n\n" +          
    "# Overview \n \n " + $("#editoverview").val() + "\n" +
    "# Pre-Requisite \n \n " + $("#editrequisite").val() + "\n" +
    "# System Requirements \n \n" +$("#editrequirements").val() + "\n" +
    "# Required Dealer Effort \n \n" +$("#editeffort").val() + "\n" +
    "# List of Objects \n \n" +$("#editobject").val() + "\n \n" +
    "# Special Instruction After Applying The Project \n \n" +$("#editinstruction").val() + "\n"
    updateMarkdownValue(update)
    markthis = update;
    resultcontent.value(markthis);
  })
  $('.tabular.menu .item').tab({
    onVisible : function(){
      resultcontent.codemirror.refresh();
    }
  });
  $("#modalpreviewbutton").click(function(){
      $("#confirmmodal").modal('hide');
      $("#prev").click();
  })
  $("#addlink").click(function(){
    $("#createlinkmodal").modal("show"); 
  })
  $("#createlink").click(function(){
    var linkname = $("#linkname").val();
    var linkaddress = $("#linkaddress").val();
    var link = "["+linkname+"](http://"+linkaddress+") \n";
    tablelist.push(link);
    $("#createlinkmodal").modal("hide");
    $("#tablelists").append(markdownit.render(link));
  })
  $("#deleterow").click(function(){
    rowvalue.pop();
    $("#tablepreview").html(markdownit.render(tablevalues()));
  })                      
  $("#addtable").click(function(){
    $("#tablemodal").modal({observeChanges : true}).modal('show');
  })
  var table = " |    OBJECT    |    TYPE    |\n";
  var seperator = "| -------- | -------- |\n";
  var tablevalue = "";
  var rowvalue = [];
  var after = ["addrowbutton","rowform","committable","deleterow"];
  var before = ["tableform","createtable"];
  $("#createtable").click(function(){
      if($("#tablename").val() != ""){
      tablevalue += "\n**"+$("#tablename").val() + "**\n\n";
      }            
      tablevalue += table;
      tablevalue +=  seperator ;
      showafter();
      rowvalue.push("")
    $("#tablepreview").html(markdownit.render(tablevalue + rowvalue[0]));
  })
  var tablelist = [];
  $("#committable").click(function(){
    showbefore();
    $("#tablemodal").modal("hide");
    tablelist.push(tablevalues());
    $("#tablelists").append(markdownit.render(tablevalues()));
    tablevalue = "";
    rowvalue = [];
    $("#tablepreview").html('');
  })

  $("#addrowbutton").click(function(){ 
      rowvalue.push("|     " + $("#column1").val() + "     |     " + $("#column2").val() + "     |\n"); 
      var preview = tablevalues();      
      $("#tablepreview").html(markdownit.render(preview));       
  })
  var beforeimage='';
  $("#editresultbutton").click(function(){  
    if(editing){
      if($("#editname").val() == ""){
        $("#editname").val(editmark.name);
      }           
      if($("#editeffort").val() == ""){
        $("#editeffort").val(editmark["Required Dealer Effort"]);
      }
      if($("#editrequirements").val() == ""){
        $("#editrequirements").val(editmark["System Requirements"]);
      }
      if($("#editrequisite").val() == ""){
        $("#editrequisite").val(editmark["Pre-Requisite"]);
      }
      if($("#editoverview").val() == ""){
        $("#editoverview").val(editmark.Overview);
      }
      if($("#editnumber").val() == ""){
        $("#editnumber").val(editmark.number);
      }
      if($("#editinstruction").val() == ""){
        $("#editinstruction").val(editmark["Special Instruction After Applying The Project"]);
      }
      if($("#editobject").val() == ""){
        for(let i=0;i<editmark.tables.length;i++){
          var value = $("#editobject").val();
          $("#editobject").val(value+"\n"+editmark.tables[i])
          }
      }         
      $("#editresultmodal").modal({
        observeChanges : true,
        onVisible : function(){
          resultcontent.codemirror.refresh();
        },
        onHide : function(){
            markthis = resultcontent.value();
            beforeimage = markthis;
            markthis = replaceimages(markthis,imagearray,'html');
            updateMarkdownValue(markthis); 
          
        }
      }).modal('show');
    }else{
      editing = true;
      $("#OBJECT").remove();
      $("#display").hide();
      $("#editresultbutton").show();
      $("#previewtext").show();
      $("#download").show();
      $("#upload").show();
      $("#downloadpdf").show();
      // $("#downloadhtml").show();
      $("#downloadhide").hide();
      $("#exportsettings").hide();
      $("#markdowncontent").show();
      

      markdownvalue = new SimpleMDE({ element: $("#markdownvalue")[0], showIcons: ["table"],
          hideIcons: ["guide", "heading","bold",'italic','quote','ordered-list','unordered-list',
          'link','image','table','side-by-side','fullscreen','preview'],
            renderingConfig: {
            codeSyntaxHighlighting: true,
          },
          previewRender : function(newdata,preview){
            var npoccurence = newdata.split('<%np%>').length;
            var newdata = '\n' + newdata.toString();
            newdata = processpreview(newdata);
            for(let i=0;i<npoccurence;i++){
                  newdata = newdata.replace("<%np%>",'      ');
            }
            return newdata;
          }
        })
      markdownvalue.togglePreview();
    }   
    hidepreview();
  })


$("#download").click(function(){
  saveTextAsFile();
})
$("#downloadpdf").click(function(){
  $(this).addClass('loading');
  savepdf();
})

var idlist = ['markdown3','markdown4','markdown5','markdown6','markdown7','markdown8']
var simplemde = []

for(let i =0;i<idlist.length;i++){
  simplemde.push(new SimpleMDE(customtoolbar($("#"+idlist[i])[0])
  ));
}


// var special = new SimpleMDE(customtoolbar($("#markdown8")[0]));
var resultcontent = new SimpleMDE(customtoolbar($("#resultcontent")[0]));
customtoolbaricons();
var imagearray = [];
// })

// special.codemirror.on("paste", function(e,event){
//   // event.preventDefault();
//   $("#editormodalcontent").addClass('loading')
//   pastePromise(event).then(function(data){
//       imagearray.push(data);
//       var pos = special.codemirror.getCursor();
//       special.codemirror.setSelection(pos, pos);
//       var length = imagearray.length - 1; 
//       special.codemirror.replaceSelection("[imgss]"+length+"[/imgss]");
//       $("#editormodalcontent").removeClass('loading');
//     })
// })



// for(let i =0;i<idlist.length;i++){
//   simplemde.push(new SimpleMDE(customtoolbar($("#"+idlist[i])[0])
//   ));
// }
for(let i=0;i<simplemde.length;i++){
  simplemde[i].codemirror.on("paste", function(e,event){
  $("#editormodalcontent").addClass('loading')
  pastePromise(event).then(function(data){
      imagearray.push(data);
      var pos = simplemde[i].codemirror.getCursor();
      simplemde[i].codemirror.setSelection(pos, pos);
      var length = imagearray.length - 1; 
      simplemde[i].codemirror.replaceSelection("[imgss]"+length+"[/imgss]");
      $("#editormodalcontent").removeClass('loading');
      })
  })
  simplemde[i].codemirror.on('keyup',function(e,event){
    if(event.keyCode == 13){
      var pos = simplemde[i].codemirror.getCursor();
      simplemde[i].codemirror.setSelection(pos,pos);
      var line = simplemde[i].codemirror.getSelection();
      // console.log(selection);
      console.log(line);
    }
  })
}

customtoolbaricons();
$("#markdown8").siblings('.editor-toolbar').addClass('stickycss');

var check = { 
    1: "first" , 2 : "second", 3 : "third" , 4 : "fourth" , 5 : "fifth",
    6 : "sixth" , 7 : "seventh" , 8 : "eight", 9 : "ninth" 
}
var initial = 1;


$(document).on('click',".step",function(e){
  $("#preview").html('');
  if(!editing){
    $("#editresultbutton").click();
  }
  var id = $(this).attr('id');
  var thisob = $(this)[0];
  if(id == "prev"){
    $("#prevloader").addClass('active');
    $(".step").removeClass('active');
    $(this).addClass('active');
    $.tab('change tab', "ninth");
    preview();
    $("#prevloader").removeClass('active');
  }else{
    $(".step").removeClass('active');
    $(this).addClass('active');
    $.tab('change tab', check[id]);
    hidepreview();
  }
  refreshmde();
})

$("#upload").click(function(){
  $("#uploadmd").click();
})
$("#uploadmd").change(function(e){
  var file = $(this)[0].files[0];
  readPromise(file).then(function(text){
    if (file.type.match('image.*')) {
      text = "<img src='" + text + "'>";
    }
    loadtext(text);
  })
})

function loadtext(text){
  text = text.replace(/<div><\/div>/g,'');
  var images = text.match(/<img[^>]* src=['"]?data:image\/png[^>]*>/g);
  console.log(images);
  for(let i=0;i<images.length;i++){
    
    enclosedcodearray.push(images[i]);
    text = text.replace(images[i],'[enclosed]' + (enclosedcodearray.length - 1) + '[/enclosed]' );
  }
  var tabvalues = [];
  // console.log(titles);
    for(let i=0;i<titles.length;i++){
      console.log(titles[i]['title'])
      var delimiter = "[comment]: <> (MD-"+titles[i]['title']+"-DELIMITER";
      try{
        if(text.lastIndexOf(delimiter+")") + delimiter.length+1 == -1 || text.lastIndexOf(delimiter+"-END)") == -1 ){
          continue;
        }
        var value = text.substring(
          text.lastIndexOf(delimiter+")") + delimiter.length+1,
          text.lastIndexOf(delimiter+"-END)")
        );
        value = value.trimLeft().split('\n');
          if(value[0].includes("<div style='display:none' id='removeloadtext'>")){
            value[0] = '';
            value[1]='';
            value[3] = '';
          }else{  
            value[0] = value[0].replace("# " + titles[i]['title'],'');
          }
        tabvalues.push({
              title : titles[i]['title'],
              delimiter : delimiter,
              value : value.join('\n').trimLeft().trimRight()
          });
      }catch(err){
        console.log(err);
        continue;
      }
    }
    console.log(tabvalues);

    for(let i=0;i<titles.length;i++){
      for(let x =0;x<tabvalues.length;x++){
        // console.log(tabvalues[x]['title'] + "==" + titles[i]['title'])
        if(tabvalues[x]['title'] == titles[i]['title']){
          // console.log(titles[i]['sindex'])
          simplemde[titles[i]['sindex']].value(tabvalues[x]['value']);
          break;
        }
      }
    }
    // var test = encodeURI(text);
    // test = test.replace(/%3Cimg/g,'<img');
    // test = test.replace(/%3E/g,'>');
    // var doc = new DOMParser().parseFromString(test, "text/html");
    // if(tabvalues[i] != null && tabvalues[i] != undefined){
    //   special.value(tabvalues[i].trimLeft());
    // }
    updateMarkdownValue(text);
    refreshmde();
}


$(document).on('mouseenter','.customcodevalues',function(){
  $(this).addClass('selected');
})
$(document).on('mouseleave','.customcodevalues',function(){
  $(this).removeClass('selected');
})
$(document).on('click','.customcodevalues',function(){
  $(".customcodevalues").removeClass('activecode');
  $(this).addClass('activecode');    
  $("#approvecustomcode").click();
})
$(".paramtabitem").click(function(){
  $(".paramtabitem").removeClass('active');
  $(this).addClass('active');
})
$(document).on('click',"#savesession",function(e){
  e.preventDefault();
  var frontjson = {};
  $("#prev").click();
  if($("#typedoc").val() == 'ins'){
    frontjson = {
      Type : 'ins',
      ProjectName : '',
      ProjectNum : '',
      ProjectVer : '',
      Ties : []
    }
    frontjson['ProjectName'] = $("#markdown1").val();
    frontjson['ProjectNum'] = $('#markdown2').val();
    frontjson['ProjectVer'] = $('#dbsi_version').val();
    $('#tieslist').children('span').each(function(){
      frontjson['Ties'].push(stripallHtml($(this).html()));
    })
  }else if($("#typedoc").val() == 'user'){
    frontjson = {
      Type : 'user',
      Title : $("#usergtitle").val()
    }
  }
  console.log(frontjson);


  $('#savesessionmodal').modal({
    autofocus : false,
    onApprove : function(){
      $("#bodyloader").addClass('loading');
      if($("#sessionname").val() == ''){
        $('body').toast({position: 'bottom right', message: 'Session name cannot be empty' ,class : 'error'});
        return;
      }
      updatespecial();
      var Data = toJSONYAML(SpecialParams);
      modrow = updatemodrowarray(modrow);
      $.post(window.location.origin +'/acnmstools/commands.php',{
        type : 'saveproject',
        dir : $("#sessionname").val(),
        content : markdownvalue.value(),
        config : {
          parameters : Data['json'],
          exportsettings : {
            modrow : modrow
          },
          title : frontjson
        }
      },function(data){
        $("#bodyloader").removeClass('loading');
        console.log(data);
      })
    }
  }).modal('show');
})

//FUNCTIONS
var tabledata = [];
var editing = true;


function replaceimages(string,imagearray,type){
    string = string.split('\n');
    for(let i=0;i<string.length;i++){
      var noindex = true;
      var noeindex = true;
      while(noindex){
        var startindex = string[i].indexOf('[imgss]');
        var endindex;
        if(startindex != -1){
          endindex = string[i].indexOf('[/imgss]');

          var substr = string[i].substring(startindex,endindex+8);
          var imageindex = "";
          for(let x=0;x<substr.length;x++){
            if(!isNaN(substr[x])){
              imageindex += substr[x];
            }
          }
          if(type == 'html'){
            // string[i] = string[i].replace(substr,'<img src="'+imagearray[imageindex]+'"/>');
            // image  = '<div>\n\n<img src="'+imagearray[imageindex]+'"/>\n\n</div>';
            image = '\n<img src="'+imagearray[imageindex]+'" />\n';
            string[i] = string[i].replace(substr,image);
          }else if(type == 'md'){
            string[i] = string[i].replace(substr,'![]('+imagearray[imageindex]+')\n');
          }
        }else{
          noindex = false;
        }
      }

      while(noeindex){
        var startindex = string[i].indexOf('[enclosed]');
        var endindex;
        if(startindex != -1){
          endindex = string[i].indexOf('[/enclosed]');
          var substr = string[i].substring(startindex,endindex+11);
          var enclosedindex = "";
          for(let x=0;x<substr.length;x++){
            if(!isNaN(substr[x])){
              enclosedindex += substr[x];
            }
          }
            string[i] = string[i].replace(substr,enclosedcodearray[enclosedindex]);
        }else{
          noeindex = false;
        }
      }
    }
    return string.join('\n');
  }
  // [enclosed]

function inArray(string,inparray){
  for(let i =0;i<inparray.length;i++){
    if(inparray[i]['value'].trim() == string.trim()){
      return true;
    }
  }
  return false;
}

function refreshparameters(array){
  $("#SpecialPForm").html('');
  SpecialParams= [];
  var json;
  try{
    json = JSON.parse(array);
  }catch(ex){
    json = array;
  }
  var keys = Object.keys(json);
  console.log(json)
  for(let i=0;i<keys.length;i++){
    var val = json[keys[i]] ['value'];
    var type = json[keys[i]] ['type'];
    updateParamModal(keys[i],val,type);
  }
}

function toJSONYAML(array){
  console.log(array);
  var JSONOut = {};
  var YamlOut = '';
  for(let i=0;i<array.length;i++){
    JSONOut[array[i]['value']] = {
      value : $("#Generate" + array[i]['value']).val(),
      type : array[i]['type'],
      // replace : array[i]['replace']
    };
    YamlOut += array[i]['value']+': \n'  
    YamlOut += "  value: "+$("#Generate" + array[i]['value']).val() + "\n";
    YamlOut += "  type: "+ array[i]['type'] + "\n";
    // YamlOut += "  replace : " + array[i]['replace'] + "\n";
  }
  return { 
    'json' : JSONOut,
    'yaml' : YamlOut 
  }
}

function hidepreview(){
  $("#markdownvalue").parent('div').find('*').css('display','none');
}

function updateMarkdownValue(value){
  if(markdownvalue.isPreviewActive()){
    // markdownvalue.togglePreview();
  }
  markdownvalue.value(value.trimRight());
  var md = markdownvalue.value();
  // md = md.replace(/<!--[\s\S]*?-->/g,'');
  var value = processpreview(md);
  $("#markdowncontent").html(value);
  hidepreview();

  if(!markdownvalue.isPreviewActive()){
    // markdownvalue.togglePreview();
  }
  // hljs.initHighlighting.called = false;
  // hljs.initHighlighting();
  updateH2();
}

function refreshmde(){
  // special.codemirror.refresh();
  for(let i =0;i<simplemde.length;i++){
      simplemde[i].codemirror.refresh();
  }
}

function readPromise(file){
  // console.log(file.type);
  return new Promise(function(resolve,reject){
    var reader = new FileReader();
    console.log(file.type);
    if (file.type.match('image.*')) {
      reader.readAsDataURL(file);
    }else if(file.type.match('text.*')){
      reader.readAsText(file,'UTF-8');
    }else if(file.type == 'application/json'){
      reader.readAsText(file,'UTF-8')
    }else if(file.type == ''){
      reader.readAsText(file,'UTF-8');    
    }else{
      return;
    }
    reader.onload  = function(e){
      resolve(e.target.result);
    }
  })
}

function pastePromise(event){
  return new Promise(function(resolve,reject){
    var items = (event.clipboardData || event.originalEvent.clipboardData).items;
    for (index in items) {
        var item = items[index];
        if (item.kind === 'file') {
          var blob = item.getAsFile();
          var reader = new FileReader();
          reader.onload = function(event){
            resolve(event.target.result);
          };  
          reader.readAsDataURL(blob);
      }else if(item.kind === 'string'){
      }
    }
  })
}
// function chunk_split(string){
//   var stringarr = [];
//   var stringstring = '';
//   for(let i=0;i<string.length;i++){
//     stringstring += string[i];
//     if(i % 75 ==0 && i != 0){
//       console.log(i % 75)
//       stringarr.push(stringstring);
//       stringstring = ''; 
//     }else if(i>=string.length + 1){
//       console.log('last ---' +i);
//       stringarr.push(stringstring)
//       stringstring = '';
//     }
//   }
//   console.log(stringarr);
//   return stringarr.join('\r\n');
// }
function generatemddata(nbsp){
    console.log('generated')
    var markeddown = markdownvalue.value();
    // console.log(markeddown);
    var toctable = '';
    var tocdata = markeddown.split('\n');
    toctable = generateTOC(tocdata);
    if($("#modLcb").checkbox('is checked')){
      toctable += "\n- [Change History Trail](#change-history-trail)"; 
    }
    if($("#modLcb").checkbox('is checked')){
      markeddown += "\n<%np%>\n# Change History Trail\n" + generateModLogs()['md'];
    }

    var re = RegExp ('<.*>','gm');
    var tochange = markeddown.match(re);
    if(tochange != null){
      for(let i=0;i<tochange.length;i++){
        if(tochange[i] == tochange[i].replace(' ','') && tochange[i] != '<>' && tochange[i] != "<tip>" && tochange[i] != "</tip>" && tochange[i] != "<warn>" && tochange[i] != "</warn>" && tochange[i] != "<note>" && tochange[i] != "</note>" && tochange[i] != "<alert>" && tochange[i] != "</alert>"){
          markeddown = markeddown.replace(tochange[i],"\n" +tochange[i] + "\n\n");
        }   
      }
    }

    var keyarr = ['note','warn','tip'];
    var dom = encodeURI(markeddown);
    for(let i=0;i<keyarr.length;i++){
      var key = keyarr[i]; 
      var replength = dom.split('%3C/'+key.trim()+'%3E').length;
      for(let b=0;b<replength;b++){
        dom = dom.replace('%3C/'+key.trim()+'%3E','</'+key.trim()+'>');
        dom = dom.replace('%3C'+key.trim()+'%3E','<'+key.trim()+'>');
      }
      var doc = new DOMParser().parseFromString(dom, "text/html");
      $(doc).find(key).each(function(){
        $(this).html(encodeURI(decodeURI($(this).html()).replace(/\n/g,'<br>\n')));
        // console.log(decodeURI($(this).html()));
      })
      dom = $(doc).find('body').html();
    }
    markeddown = decodeURI(dom);  

    
    markeddown = markdownit.render(fmdta(markeddown));
    var doc = new DOMParser().parseFromString(markeddown, "text/html");
    // doc.querySelectorAll('pre code').forEach((block) => {
    //   hljs.highlightBlock(block);
    // })
    $(doc).find('img').each(function(){
      // var chunk = chunk_split($(this).attr('src'));
      // console.log(chunk.split('\n'))
      // $(this).attr('src',chunk)
      var img = new Image();
      img.src = $(this).attr('src');
      height = img.height;
      if(height == 0){
        height = '296px';
        // console.log($(this).attr('src'))
      }else{
        height = height + 'px'
      }
      console.log(height);
      $(this).attr('height',height);
      $(this).attr('display','block');
      // $(this).replaceWith('<img src="'+$(this).attr('src')+'"  height="'+ height+ '" />');
      $(this).after('<br><br>');

    })
    $(doc).find('#removeloadtext').each(function(){
      // console.log($(this).html());
      $(this).remove();
    })

    return {
      markdown : $(listfindtag(doc)).find('body').html().replace(/<div><\/div>/g,''),
      toc : toctable
    };
}



function getties(){
  var ties = [];
  $('#tieslist').find('span').each(function(){
    ties.push({ 
      value : stripallHtml($(this).html())
    });
  })
  return ties;
}
function tonbsp(string){
  // string = string.trimLeft();
  // string = string.trimRight();
  // string = string.replace(/ /g,'&nbsp;');
  return string;
}
function savepdf(){
  var pdfsettings = {
    toc : {
      'h1' : $("#topH1").checkbox('is checked'),
      'h2' : $("#topH2").checkbox('is checked'),
      'h3' : $("#topH3").checkbox('is checked')
    },
  }
  var data = generatemddata(true);
  var markeddown = data['markdown'];
  markeddown = tonbsp(markeddown);
  markeddown = markeddown.replace(/<p>/g,'');
  markeddown = markeddown.replace(/<\/p>/g,'\n');
  var toctable = data['toc'];
  var generate = "false";
  if($("#autogeneratepdf").checkbox('is checked')){
    generate = "true";
  }
  $.post(window.location.origin +'/acnmstools/TCPDF/index.php',{
  PDFDATA : {
    udoctype : $("#typedoc").val(), 
    markdown : btoa(unescape(encodeURIComponent(markeddown))),
    project : $('#editProject2').val(),
    toctable : { 'generate' : generate, 'markdown' : toctable, 'html' : markdownit.render(toctable) },
    number : $('#editNumber2').val(),
    version : $('#editVersion').val(),
    ugtitle : $("#usergtitle").val(),
    settings : pdfsettings,
    ties : getties()
  }
  },function(data){
    if(data.message != 'Error'){
        $("#display").css('height','1000px').show();
        markdownvalue.toTextArea(); 
        editing = false;
        $("#markdowncontent").hide();
        $("#editresultbutton").show();
        $("#previewtext").hide();
        $("#download").hide();
        $("#upload").hide();
        $("#downloadpdf").hide();
        $("#downloadhtml").hide();
        $("#downloadhide").show();
        $("#exportsettings").hide();    
        var pdf = window.location.origin + '/acnmstools/TCPDF/generated_pdf/examplee.pdf';
        pdf = pdf.replace(/\s/g, '');
        $("#display").html("<object id='OBJECT' data='"+ pdf +"'  style='width:100%;height:100%; ' type='application/pdf'></object>")
        $('body').toast({
          position: 'bottom right',
          message: 'ok'
        });
    }else{
      $('body').toast({
          class : 'error',
          position: 'bottom right',
          message: data.message
      });
    }
    $("#downloadpdf").removeClass('loading');
  }) 
}
              
function fmdta(newdata){
  var singlelength = newdata.split('"').length;
  var doublelength = newdata.split("'").length;
  var high = 0;
  if(singlelength > doublelength){
    high = singlelength;
  }else{
    high = doublelength;
  }
  for(let i=0;i<high;i++){
    newdata = newdata.replace('"',"'");
  }
  return newdata;
}

// function savepreview(){
//   console.log(strip($("#preview").html()))
// }
function strip(html)
{
  var tmp = document.createElement("DIV");
  tmp.innerHTML = html;
  return tmp.textContent || tmp.innerText || "";
}

function saveTextAsFile(textparam,ext){
    var textToWrite = '';
    if(ext != undefined && ext != ''){
      extension = ext;
    }else{
      extension = 'md'
    }
    if(textparam != undefined){
      textToWrite = textparam;
    }else{
      if($("#editProject2").val().replace(/\n/g, "\n").length != 0 || $("#editNumber2").val().replace(/\n/g, "\n").length != 0 || $("#editVersion").val().replace(/\n/g, "\n").length != 0){
      textToWrite += "# ";
      }
      if($("#editProject2").val().replace(/\n/g, "\n").length != 0){
        textToWrite +=   $("#editProject2").val() + " ";
      }
      if($("#editNumber2").val().replace(/\n/g, "\n").length != 0){
        textToWrite += $("#editNumber2").val() + "\n**";
      }
      if($("#editVersion").val().replace(/\n/g, "\n").length != 0  ){
        textToWrite += $("#editVersion").val() + '**'; 
      }
      if(textToWrite != ''){
         textToWrite += '\n\n\n';
      }
      textToWrite +=   replaceimages(beforeimage,imagearray,'md');
      textToWrite = textToWrite.replace(/\n/g, "\n");
      if($("#autogeneratemd").checkbox('is checked')){
        var tocdata = textToWrite.split('\n');
        textToWrite = generateTOC(tocdata) + textToWrite;
      }
      if($("#modLcb").checkbox('is checked')){
        textToWrite += "\n<%np%>\n## Change History Trail\n" + generateModLogs()['md'];
      }
    }



    var textFileAsBlob = new Blob([textToWrite], {type:'text'});
    var fileNameToSaveAs = 'filename.' + extension;

    var downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.innerHTML = "Download File";
    if (window.webkitURL != null)
    {
        downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
    }
    else
    {
        downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
        downloadLink.onclick = destroyClickedElement;
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
    }
    downloadLink.click();
}
function showafter(){
    for(let i=0;i<after.length;i++){
      $("#"+after[i]).show();
    }
    for(let i=0;i<before.length;i++){
    $("#"+before[i]).hide();
    }
}
function showbefore(){
  for(let i=0;i<after.length;i++){
      $("#"+after[i]).hide();
    }
    for(let i=0;i<before.length;i++){
    $("#"+before[i]).show();
    }
}
function tablevalues(){
    var preview = tablevalue;
    for(let i=0;i<rowvalue.length;i++){
      preview += rowvalue[i];
    }
    return preview;
}
var markthis="";
var editmark = [];

function preview(returnval = false){
    $("#preview").html('');
    markthis="";

    if($("#markdown1").val() != ""){
      editmark["name"] = $("#markdown1").val();
      $("#editProject2").val($("#markdown1").val());
    }
    if($("#markdown2").val() != ""){
      editmark["number"] =  $("#markdown2").val();
      $("#editNumber2").val($("#markdown2").val());
    }
    if($("#dbsi_version").val() != ''){
      $("#editVersion").val($("#dbsi_version").val());
    }
    

    // for(var i=0;i<simplemde.length;i++){
    //   try{
    //     if(titles[i]['title'] != undefined){
    //       // console.log(titles[i]);
    //       markthis += "\n[comment]: <> (MD-"+titles[i]['title']+"-DELIMITER)\n";
    //       var mdtitle = "\n# " + titles[i]['title'];
    //       if(titles[i]['hideTitle']){
    //         mdtitle = "\n<div style='display:none'>\n" + mdtitle + "\n</div>\n";   
    //       }
    //       markthis += mdtitle;
    //       markthis += '\n \n' + simplemde[i].value() + "\n";
    //       editmark[titles[i]['title']] = simplemde[i].value();       
    //       markthis += "\n[comment]: <> (MD-"+titles[i]['title']+"-DELIMITER-END)\n";   
    //     }
    //   }catch(ex){
    //     console.log(ex);
    //     continue;
    //   }
    // }
    for(var i=0;i<stabs.length;i++){
      try{
        if(titles[stabs[i]]['title'] != undefined){
          // console.log(titles[i]);
          markthis += "\n[comment]: <> (MD-"+titles[stabs[i]]['title']+"-DELIMITER)\n";
          var mdtitle = "# " + titles[stabs[i]]['title'];
          if(titles[stabs[i]]['hideTitle']){
            mdtitle = "<div style='display:none' id='removeloadtext'>\n" + mdtitle + "</div>\n";   
          }
          markthis += mdtitle;
          markthis += '\n \n' + simplemde[stabs[i]].value() + "\n";
          editmark[titles[stabs[i]]['title']] = simplemde[stabs[i]].value();       
          markthis += "\n[comment]: <> (MD-"+titles[stabs[i]]['title']+"-DELIMITER-END)\n";   
        }
      }catch(ex){
        console.log(ex);
        continue;
      }
    }
    
    // markthis += "\n[comment]: <> (MD-"+titles[i]+"-DELIMITER)\n";
    // markthis += "\n# "+titles[i] + "\n";
    // editmark["tables"] = tablelist; 
    // for(let a =0;a<tablelist.length;a++){
    //   markthis += tablelist[a] + "\n";
    // }
    // markthis += "\n[comment]: <> (MD-"+titles[i]+"-DELIMITER-END)\n";  
    // try{
    //   markthis += "\n[comment]: <> (MD-"+titles[i]['title']+"-DELIMITER)\n";  
    // }catch(ex){
    //   console.log(ex);
    // } 
    // editmark[titles[i+1]]['title'] = special.value();     
    // markthis += "\n<div style='display:none'>\n";          
    // markthis += "# "+titles[i] ; 
    // markthis += "\n</div>\n";   
    // markthis += '\n \n' + special.value() + "\n";
    // markthis += "\n[comment]: <> (MD-"+titles[i]['title']+"-DELIMITER-END)\n";  
    // console.log(markthis);

    beforeimage = markthis;
    if(returnval == true){
      return {
        md : markthis
      }
    }else{
      updateMarkdownValue(replaceimages(markthis,imagearray,'html'));
      $("#resultcontent").text(markthis);
    }

}

var highlightarr = [
  { 
    color: 'blue',
    css : 'background-color:#2185D0;color:white',
    icon :{
      datahl : "blue",
      css : "color:#2185D0;cursor:pointer"
    }
  },
  {
    color:'green',
    css : 'background-color:#21BA45;color:white',
    icon:{
      datahl : "green",
      css : "color:#21BA45;cursor:pointer"
    }
  },
  { 
    color: 'red',
    css : 'background-color:red;color:white',
    icon:{
      datahl : "red",
      css : "color:red;cursor:pointer"
    }
  },
  { 
    color: 'gray',
    css : "background-color:#767676;color:white",
    icon:{
      datahl : "gray",
      css : "color:#767676;cursor:pointer"
    }
  }];
function processpreview(data){
      var newdata = data;
      var datacss = "<style> .notify table td{ border :0px } .notify{ overflow-wrap: break-word;   } .alert table{ background-color : #f5d57d } .tip table{  background-color : #eaf7eb; } .note table{ background-color : #edf3fd; } .warn table{ background-color : #ffdbdb; } </style>";
      var hlbocc = newdata.split('<hlblue>').length;
      var hlgocc = newdata.split('<hlgreen>').length;
      var hlrocc = newdata.split('<hlred>').length;
      
      var re = RegExp ('<.*>','gm');
      var tochange = newdata.match(re);

      for(let i =0;i<highlightarr.length;i++){
        var occurence = newdata.split('<hl'+highlightarr[i]['color']+'>').length;
        for(let x=0;x<occurence;x++){
          newdata = newdata.replace('<hl'+highlightarr[i]['color'] + '>' ,'&lt;hl'+highlightarr[i]['color'] + '&gt;');
          newdata = newdata.replace('</hl' + highlightarr[i]['color'] + '>','&lt;/hl' + highlightarr[i]['color'] + '&gt;'); 
        }
      }

      if(tochange != null){
        for(let i=0;i<tochange.length;i++){
          if(tochange[i] == tochange[i].replace(' ','') && tochange[i] != '<>' && tochange[i] != "<tip>" && tochange[i] != "</tip>" && tochange[i] != "<warn>" && tochange[i] != "</warn>" && tochange[i] != "<note>" && tochange[i] != "</note>"){
            console.log(tochange[i]);
            newdata = newdata.replace(tochange[i],"\n\n" +tochange[i] + "\n\n");
          }   
        }
      }  

      for(let i =0;i<highlightarr.length;i++){
        var occurence = newdata.split('&lt;hl'+highlightarr[i]['color']+'&gt;').length;
        for(let x=0;x<occurence;x++){
          newdata = newdata.replace('&lt;hl'+highlightarr[i]['color'] + '&gt;' ,'<span style="' + highlightarr[i]['css'] + '">');
          newdata = newdata.replace('&lt;/hl' + highlightarr[i]['color'] + '&gt;','</span>'); 
        }
      }

      newdata = newdata.replace(/<warn>/g,"\n\n" + '<div class="notify warn"><table cellpadding="10" style="border-top:5px solid #ff6666"><tr><td width="10%" align="center"><div ><img src="'+window.location.origin+'/acnmstools/TCPDF/image/test.png" height="30px" width="30px"></div>Alert</td><td width="90%" style="margin-left:50px" valign="top">');
      newdata = newdata.replace(/<\/warn>/g,'</td></tr></table></div>' + "\n");
      newdata = newdata.replace(/<tip>/g,"\n\n" + '<div class="notify tip"><table cellpadding="10" style="border-top:5px solid #21BA45"><tr><td width="10%" align="center"><div ><img  src="'+window.location.origin+'/acnmstools/TCPDF/image/tip.png" height="30px" width="30px"></div>Tip</td><td width="90%" style="margin-left:50px" valign="top">');
      newdata = newdata.replace(/<\/tip>/g,'</td></tr></table></div>' + "\n");    
      newdata = newdata.replace(/<note>/g,"\n\n" + '<div class="notify note"><table cellpadding="10" style="border-top:5px solid #31CCEC"><tr><td width="10%" align="center"><div ><img  src="'+window.location.origin+'/acnmstools/TCPDF/image/info.png" height="30px" width="30px"></div>Note</td><td width="90%" style="margin-left:50px" valign="top">');
      newdata = newdata.replace(/<\/note>/g,'</td></tr></table></div>' + "\n");
      newdata = newdata.replace(/<alert>/g,"\n\n" + '<div class="notify alert"><table cellpadding="10" style="border-top:5px solid #e3a90b"><tr><td width="10%" align="center"><div ><img  src="'+window.location.origin+'/acnmstools/TCPDF/image/alert.png" height="30px" width="30px"></div>Alert</td><td width="90%" style="margin-left:50px" valign="top">');
      newdata = newdata.replace(/<\/alert>/g,'</td></tr></table></div>' + "\n");

      newdata = markdownit.render(newdata);
      data = newdata;
      var doc = new DOMParser().parseFromString(newdata, "text/html");
      $(doc).find('h1,h2,h3').each(function(){
        $(this).attr('id',$(this).text());
      })
      doc = listfindtag(doc);
      var data = $(doc).find('html').html();
      data = tonbsp(data);
      return datacss +  data ;
}
  var listtags = 
  [{
      name :'ola',
      style : 'upper-alpha'
  },
  {
    name :'olr',
    style : 'upper-roman'
  }];

function listfindtag(doc){
  for(let i=0;i<listtags.length;i++){
    $(doc).find('ul').each(function(){
      var listdata = $(this).html();
      if($(this).parent(listtags[i]['name']).length > 0 || $(this).siblings('p').children(listtags[i]['name']).length > 0){
        var newdata = '<ol data-attr="changed" style="list-style-type:'+listtags[i]['style']+';padding:0">' + $(this).html() + '</ol>';
        $(this).replaceWith(newdata);
      }
    })  
  }
  $(doc).find('lform').each(function(){
      var html = $(this).html().split("\n");
      var custom = "\n\n<ol class='listnone' style='list-style-type: none;'>\n\n\n";
      var curlevel;
      var opened = false;
      var depth = 0;
      for(var i=0;i<html.length;i++){
        var data = stripallHtml(html[i]);
        var level = getsquarebrack(data);  
        if(level === false){
          custom += html[i] + "\n";
          continue;
        } 
        opened = false;
        if(curlevel != null){
          if(level[0][1] > curlevel){
           custom += "\n<ol class='listnone' style='list-style-type: none;'><li>\n" + level[1] + "\n<br>";
           opened = true;
           depth++; 
          }else if(level[0][1] < curlevel){
            var closedepth = curlevel - level[0][1];
            for(let x=0;x<closedepth;x++){ 
              custom += '\n</ol></li>';
            }
            depth = level[0][1] - closedepth;
          }
        }
        if(!opened){
          if(curlevel != null){
           custom += "</li>";
          }
          custom += "<li>\n" + level[1] + "\n";
        }
        curlevel = level[0][1]; 
      }     
      // console.log(depth);
      for(let i=0;i<depth;i++){
        custom += "\n</ol></li>\n";
      }
      custom += "\n</ol>\n";
      $(this).replaceWith(custom);
  })

  // $(doc).find('li').each(function(){
    // console.log();
    // var html = $(this).html().trimLeft().trimRight();
    // html = html.split('\n');
    // console.log(html);
    // var htmlstring = [];
    // var opened = 0;
    // for(let i=0;i<html.length;i++){
    //   if(html[i].match(/<li>/g)){
    //     console.log(html[i]);
    //     opened++;
    //     if(html[i].match(/<li>/g)){
    //       opened--;
    //     }
    //   }else if(html[i].match(/<\/li>/g)){
    //     opened--;
    //   }
    //   if(opened > 0){
    //     opened = 0;
    //   }
      
    //   if(opened == 0){
    //     htmlstring.push(html[i].replace(/<\/p>/g,'<br>'));
    //   }else{
    //     htmlstring.push(html[i]);
    //   }
      // if(html[i] != ''){
      //   htmlstring.push(html[i].replace(/<p>/g,'<br>').replace(/<\/p>/g,'<br>') );
      // }
    // }
    // console.log(htmlstring);
    // htmlstring = html;  
    // htmlstring = htmlstring.join('\n');
    // $(this).html(htmlstring);
    // $(this).html(html.join('<br>'));
  // })


  return doc;
}

function getsquarebrack(string){
  if(string.trim()[0] != '['){
    return false;
  }
  var bracket = '';
  var opened = false;
  var closed = false;
  for(let i=0;i<string.length;i++){
    if(string[i] == '['){
      opened = true;
    }
    bracket += string[i];
    if(string[i] == ']'){
      closed = true;
    }
    if(opened && closed){
      break;
    }
  }
  if(isNaN(bracket.replace('[','').replace(']',''))){
    return false;
  }
  return [[bracket,bracket.replace('[','').replace(']','')],string.replace(bracket,'')];
}

function removetags(tag,data){
  if(tag == ''){
    var closereg = new RegExp("</.*>");
    var openreg = new RegExp("<.*>");
    data.replace(closereg,'');
  }
  var open = '<' + tag + '>';
  var close = '</' + tag + '>';
  var openlength = data.split(open).length;
  var closelength = Data.split(close).length;
  for(let i=0;i<openlength;i++){
    data.replace(open,'');
    data.replace(close,'');
  }
}
function stripallHtml(html)
{
   var tmp = document.createElement("DIV");
   tmp.innerHTML = html;
   return tmp.textContent || tmp.innerText || "";
}
function UpperArray(array){
  for(let i=0;i<array.length;i++){
    array[i] = array[i].toUpperCase();
  }
  return array;
}
function generateTOC(tocdata){
  var toc = [];
  for(let i=0;i<tocdata.length;i++){
      try{
            if(!tocdata[i].replace(/\s/g, '').length){
              continue;
            }
            var hashnumber = 0;
            for(let a=0;a<tocdata[i].length;a++){
              if(tocdata[i][a] == '#'){
                hashnumber++;
              }
            }
            if(hashnumber == 1){
                var title = tocdata[i].substring(2);
                toc.push({
                    'title' : title,
                    'child' : [],
                    'level' : 1
                })

            }else if(hashnumber == 2 && toc.length != 0){
                var title = tocdata[i].substring(3);
                toc[toc.length-1]['child'].push({
                    'title' : title,
                    'child' : [],
                    'level' : 2
                })
            }
            else if(hashnumber == 3 && toc.length != 0){
                var title = tocdata[i].substring(4);
                toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'].push({
                    'title' : title,
                    'child' : [],
                    'level' : 3
                })
            }else if(hashnumber == 4 && toc.length != 0){
                var title = tocdata[i].substring(5);
                toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'][toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'].length-1]['child'].push({
                    'title' : title,
                    'child' : [],
                    'level' : 4
                })
              }else if(hashnumber == 5 && toc.length != 0){
                var title = tocdata[i].substring(6);
                  var h4 = toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'][toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'].length-1]['child'];
                  toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'][toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'].length-1]['child'][h4.length-1]['child'].push({
                      'title' : title,
                      'child' : [],
                      'level' : 5
                  })
              }else if(hashnumber == 6 && toc.length != 0){
                var title = tocdata[i].substring(7);
                  var h5 = toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'][toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'].length-1]['child'][h4.length-1]['child'];
                  toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'][toc[toc.length-1]['child'][toc[toc.length-1]['child'].length-1]['child'].length-1]['child'][h4.length-1]['child'][h5.length-1]['child'].push({
                      'title' : title,
                      'child' : [],
                      'level' : 6
                  })
              }
            }catch(err){
              console.log('err');
              continue;
            }
        }
        var toctable = '';
        function getspace(level){
          space='';
          for(let i=0;i<level-1;i++){
            space += ' '
          }
          return space;
        }
        for(let i=0;i<toc.length;i++){
            var link = emojiStrip("(#"+ toc[i]['title'] +")" ).split(' ').join('-').split('.').join('').split('&lt;%up%&gt;').join('').split('**').join('').toLowerCase().replace(/(<([^>]+)>)/ig,"").split('/').join('');
            link = getspace(toc[i]['level']) + "[" + toc[i]['title'] +"]" + link;
            if(toc[i]['child'].length == 0){
                toctable +=  '- ' + link + "\n";
            }
            else{
                toctable += '- ' + link + "\n";
                toctable += buildtoc(toc[i]);           
            }
        }
        function buildtoc(array){
            var toctext = '';
            for(let i=0;i<array['child'].length;i++){
                var link = emojiStrip("(#"+ array['child'][i]['title'] +")" ).split(' ').join('-').split('.').join('').split('&lt;%up%&gt;').join('').split('**').join('').toLowerCase().replace(/(<([^>]+)>)/ig,"").split('/').join('');
                link = getspace(array['level']) + '- ' +  "[" + array['child'][i]['title'] +"]"+link;
                if(array['child'][i]['child'].length == 0){
                    toctext += link + "\n";
                }else{
                    toctext += link + "\n" ;
                    toctext += buildtoc(array['child'][i]);
                  
                }
            }
            return toctext;
        }
        return toctable;
}

  function customtoolbar(elem,elem2){
    return {
    element: elem, 
    renderingConfig: {
        codeSyntaxHighlighting: true,
    },
    indentWithTabs : false,
    previewRender : function(newdata){
      // $('.CodeMirror-scroll').hide();
      // $('.editor-preview').css('height',)
      var npoccurence = newdata.split('<%np%>').length;
      var newdata = '\n' + newdata.toString();
      newdata = processpreview(newdata);
      for(let i=0;i<npoccurence;i++){
            newdata = newdata.replace("<%np%>",'      ');
      }
      newdata = replaceimages(newdata,imagearray,'html');
      newdata= tonbsp(newdata);
      return newdata;
    },
    toolbar : [
      {
        name : 'newpage',
        action : function customFunction(editor){
          pos = editor.codemirror.getCursor();
          editor.codemirror.setSelection(pos, pos);
          editor.codemirror.replaceSelection('<%np%>');
        },
        className : 'newpage',
        title : 'New Page'
      },
      {
        name : 'warn',
        action : function customFunction(editor){
          posfrom = editor.codemirror.getCursor('from');
          posto = editor.codemirror.getCursor('to') ;
          editor.codemirror.setSelection(posto, posto);
          editor.codemirror.replaceSelection('\n</warn>\n');
          editor.codemirror.setSelection(posfrom,posfrom);
          editor.codemirror.replaceSelection('<warn>\n');
        },
        className : 'warntool',
        title : 'Warn'
      },
      {
        name : 'alert',
        action : function customFunction(editor){
          posfrom = editor.codemirror.getCursor('from');
          posto = editor.codemirror.getCursor('to') ;
          editor.codemirror.setSelection(posto, posto);
          editor.codemirror.replaceSelection('\n</alert>\n');
          editor.codemirror.setSelection(posfrom,posfrom);
          editor.codemirror.replaceSelection('<alert>\n');
        },
        className : 'alerttool',
        title : 'Alert'
      },
      {
        name : 'Tip',
        action : function customFunction(editor){
          posfrom = editor.codemirror.getCursor('from');
          posto = editor.codemirror.getCursor('to') ;
          editor.codemirror.setSelection(posto, posto);
          editor.codemirror.replaceSelection('\n</tip>\n');
          editor.codemirror.setSelection(posfrom,posfrom);
          editor.codemirror.replaceSelection('<tip>\n');
        },
        className : 'tiptool',
        title : 'Tip'
      },
      {
        name : 'Note',
        action : function customFunction(editor){
          posfrom = editor.codemirror.getCursor('from');
          posto = editor.codemirror.getCursor('to') ;
          editor.codemirror.setSelection(posto, posto);
          editor.codemirror.replaceSelection('\n</note>\n');
          editor.codemirror.setSelection(posfrom,posfrom);
          editor.codemirror.replaceSelection('<note>\n');
        },
        className : 'notetool',
        title : 'Note'
      },
      {
        name : 'Highlight',
        action: function customFunction(editor){
           $("#highlightmodal").modal({
             onApprove : function(){
              posfrom = editor.codemirror.getCursor('from');
              posto = editor.codemirror.getCursor('to') ;  
              editor.codemirror.setSelection(posto,posto);
              editor.codemirror.replaceSelection("</hl"+selectedhl+">");
              editor.codemirror.setSelection(posfrom,posfrom);
              editor.codemirror.replaceSelection("<hl"+selectedhl+">"); 
             }
           }).modal('show');
      
        },
        className : 'highlighttool',
        title : 'Highlight'
      },
      {
        name : 'Indent',
        action : function customFunction(editor){
          pos = editor.codemirror.getCursor();
          editor.codemirror.setSelection(pos,pos);
          editor.codemirror.replaceSelection('&nbsp;');
        },
        className : 'indenttool',
        title : 'Indent'
      },
      {
        name : 'customcode',
        action : function customFunction(editor){
          posfrom = editor.codemirror.getCursor('from');
          posto = editor.codemirror.getCursor('to');
          $("#customcodemodal").modal({
            autofocus : false,
            onApprove : function(){
               var type;
               $(".customcodevalues").each(function(){
                 if($(this).hasClass('activecode')){
                    type = $(this).attr('data-value');
                    return;
                 }
               })
               switch(type){
                 case "sql" :
                    editor.codemirror.setSelection(posto,posto);
                    editor.codemirror.replaceSelection('\n```\n');
                    editor.codemirror.setSelection(posfrom,posfrom);
                    editor.codemirror.replaceSelection('```sql\n');
                 break;
                 case "cl": 
                    editor.codemirror.setSelection(posto,posto);
                    editor.codemirror.replaceSelection('\n```\n');
                    editor.codemirror.setSelection(posfrom,posfrom);
                    editor.codemirror.replaceSelection('```cl\n');
                 break;
                 case "qsh" :
                    editor.codemirror.setSelection(posto,posto);
                    editor.codemirror.replaceSelection('\n```\n');
                    editor.codemirror.setSelection(posfrom,posfrom);
                    editor.codemirror.replaceSelection('```qsh\n');
                 break;
                 case "gen" : 
                    editor.codemirror.setSelection(posto,posto);
                    editor.codemirror.replaceSelection('\n```\n');
                    editor.codemirror.setSelection(posfrom,posfrom);
                    editor.codemirror.replaceSelection('```\n');
                 break;
                 default:
                   console.log('not valid');
                 break;
               }
            }
          });
        },
        className : 'customcode',
        title : 'customcode'
      },
      {
        name : 'headertool',
        action : function customFunction(editor){
          $("#headerlistmodal").modal({
            onApprove : function(){
              var degree = $('.activeheader').html().trim().substr(1,1);
              var toappend = '';
              for(let i=0;i<degree;i++){
                toappend += '#';
              }
              toappend += ' ';
              pos = editor.codemirror.getCursor();
              editor.codemirror.setSelection(pos,pos);
              editor.codemirror.replaceSelection(toappend);
            }
          });
        },
        className : 'headertool',
        title : 'headertool'
      },
      {
        name : 'table',
        action : function customFunction(editor){
          pos = editor.codemirror.getCursor();
          $("#tablecreator").modal({
            observeChanges : true,
            onApprove  : function(){
              var table = [];
              var firstvalue;
              var highvalue;
              var index = 0;
              var rowhigh = 0;
              var tdhigh = 0;
              var row = [];
              $("#exceltable").find('tr').each(function(){
                var td = [];
                // var re = new RegExp('(<p)[^{}]*(>)');
                // $(this).html($(this).html().replace(re,''))
                var hi =0;
                var tdi =1;
                $(this).children('td, th').each(function(){
                  if($(this).html().trim() != ''){
                    if(firstvalue == null){
                      firstvalue = index;
                    }
                    highvalue = index;
                  }
                  if($(this).html().trim() != ''){
                    hi = tdi;
                  }
                  td.push(" | " + stripallHtml($(this).html()).replace(/\n/g, "<br>") );
                  tdi++;
                })
                if(hi > tdhigh){
                    tdhigh = hi;
                }
                index++;
                if(rowhigh < row.length){
                  rowhigh = row.length;
                }
                td[td.length - 1] = td[td.length - 1] + " | " 
                row.push(td);
              })
              // console.log(tdhigh);
              for(let i=0;i<row.length;i++){
                var pre = row[i].length;
                row[i] = row[i].slice(0,tdhigh);
                if(pre != row[i].length){
                  row[i][row[i].length - 1] += " |"
                }
                table.push(row[i].join(''));
              }
              table = table.slice(firstvalue,highvalue+1);
              var delimeter = '| ';
              for(let b=0;b<tdhigh;b++){
                delimeter+= "-- | ";
              }
              table.splice(1,0,delimeter);
              editor.codemirror.setSelection(pos, pos);
              editor.codemirror.replaceSelection(table.join('\n'));
            }
          }).modal('show');
        },
        className : 'fa fa-table',
        title : 'Insert Table'
      },
      {
          name : 'imageupload',
          action : function customFunction(editor){
            $("#imgup").click();
            $("#imgup").val('');
            var triggered = false;
            $("#imgup").on('change',function(){
              if(!triggered){
                var file = $(this)[0].files[0];
                var imgthis = $(this);
                readPromise(file).then(function(text){
                  pos = editor.codemirror.getCursor();
                  editor.codemirror.setSelection(pos,pos);
                  imagearray.push(text);
                  editor.codemirror.replaceSelection("[imgss]"+ (imagearray.length - 1 ) +"[/imgss]");
                })
                triggered = true;
              }

            })
          },
          className : 'imguptool',
          title : 'Image Upload'
      },{
        name : "lists",
        action : function customFunction(editor){
          posfrom = editor.codemirror.getCursor('from');
          posto = editor.codemirror.getCursor('to');
          $("#listtoolmodal").modal({
            onApprove : function(){
              if(listtype.trim() == ''){
                $('body').toast({position: 'bottom right', message: 'Please select a list' ,class : 'error'});
                return;
              }
              if(listtype == 'ordered' || listtype == 'unordered'){
                editor.codemirror.setSelection(posfrom,posfrom);
                if(listtype == 'unordered'){
                  editor.codemirror.replaceSelection('- ');
                }else{
                  editor.codemirror.replaceSelection('1. ');
                }
                
              }else{   
                if(listtype.trim() == 'lform'){
                  itemtype = '[1] ';
                }else{
                  itemtype = '- ';
                }          
                  editor.codemirror.setSelection(posfrom,posfrom);
                  editor.codemirror.replaceSelection('<' + listtype  +'>'+ "\n" + itemtype  + "\n" + "\n" + '</' + listtype  +'>')
                  // editor.codemirror.setSelection(posto,posto);
                  // editor.codemirror.replaceSelection();
                  
              }
            }
          })
        },
        className : 'listtool',
        title : 'lists'
      },
      {
        name :'templatetool',
        action : function customFunction(editor){
          pos = editor.codemirror.getCursor();
          editor.codemirror.setSelection(pos,pos);
          $.post(window.location.origin +'/acnmstools/commands.php',{
            type : 'templatelist'
          },function(data){
            data = JSON.parse(data);
            // console.log(data['dir']);
            $('#templatelist').html("<option value=''>Select A Template</option>");
            for(let i=0;i<data['dir'].length;i++){
              if(data['dir'][i].trim() != ''){
                $('#templatelist').append("<option value='"+data['dir'][i]+"'>" + data['dir'][i] + "</option>" );
              }
            }

            $("#templatetoolmodal").modal({
            onApprove : function(){
                var tval = $('#templatelist').val().trim();
                if(tval != ''){
                  // console.log(tval);
                  $.get({
                    url : window.location.origin + '/acnmstools/mdtemplates/'+ tval,
                    cache : false
                  },function(data){
                    // console.log(data);
                    editor.codemirror.replaceSelection(data);
                  })
                }
              }
            }).modal('show');
          })
        },
        className : 'templatetool',
        title : 'templatetool' 
      },
      {
        name : 'arrayenclose',
        action : function(editor){ 
          var selectedcode = editor.codemirror.getSelection();
          enclosedcodearray.push(selectedcode)
          editor.codemirror.replaceSelection('[enclosed]' + (enclosedcodearray.length - 1) + '[/enclosed]');
        },
        className : 'arrayenclose',
        title : 'Array Enclose'
      },
      "|","bold", "italic", "heading",'strikethrough','link','image',"horizontal-rule","preview",
      {
        name : 'indentpreview',
        action : function customFunction(editor){
          var docprev = editor.value();
          var docprev = editor.value().split('\n');
          for(let i=0;i<docprev.length;i++){
            var docprev2 = docprev[i].split('');
            for(let x=0;x<docprev2.length;x++){
              if(docprev2[x] == ' '){
                docprev2[x] = "<i class='minus icon' style='font-size:3px'></i>";
              }else{
                break;
              }
            }
            docprev[i] = docprev2.join('');
          }
          docprev = docprev.join('<br>').replace(/>/g,'&gt;');
          docprev = docprev.replace(/</g,'&lt;');
          docprev = docprev.replace(/&lt;br&gt;/g,'<br>')
          docprev = docprev.replace(/&lt;i class='minus icon' style='font-size:3px'&gt;&lt;\/i&gt;/g,"<i class='minus icon' style='font-size:4px'></i>")
          $(document).find('.indentpreview').remove();
          var indentprev = "<div class='indentpreview'>"+ docprev +"</div>";
          $(editor.element).siblings('.CodeMirror-wrap').append(indentprev);
          var thiselement = $(editor.element).siblings('.editor-toolbar').children('.indentprev');
          if(thiselement.hasClass('active')){
            thiselement.removeClass('active');
            $(document).find('.indentpreview').remove();
          }else{
            $('.indentprev').removeClass('active');
            thiselement.addClass('active');
          }
        },
        className : 'indentprev',
        title : 'Indent Preview'
      }, 
      {
        name : 'side-by-side',
        action : function(editor){
          simplemdeside(editor);
          // console.log('test')
        },
        className : 'fa fa-columns no-disable no-mobile',
        title : 'side by side'
      }      
     ]
    }
  }
  var enclosedcodearray = [];
  function customtoolbaricons(){
    $('.arrayenclose').html("<i class='barcode icon'></i>");
    $('.indentprev').html("<i class='indent icon'></i>");
    $(".newpage").html("<i class='ui plus square outline icon'></i>   ");
    $(".warntool").html("<i class='exclamation triangle icon'></i> ");
    $(".alerttool").html("<i class='exclamation icon'></i> ");
    $(".tiptool").html("<i class='lightbulb icon'></i>");
    $(".notetool").html("<i class='info icon'></i>");
    $(".hlgreen").html('<i class="circle icon" style="color:#21BA45"></i>');
    $(".hlblue").html('<i class="circle icon" style="color:#2185D0"></i>');
    $('.indenttool').html('<i class="angle double right icon"></i>');
    $('.customcode').html('<i class="code icon"></i>');
    var codehtml = $('#customcodemodal').children('.content').children('.center').html();
    $('.customcode').each(function(){
      $(this).attr('data-html',codehtml);
      $(this).popup({
        onShow : function(){
          $(this).addClass('flowing');
        },
        position : 'bottom center',
        on: 'click'
      })
    })

    $('.imguptool').html('<i class="camera retro icon"></i>');
    $('.highlighttool').html('<i class="paint roller icon"></i>');
    $('.listtool').html('<i class="list alternate icon"></i>');
    $('.listtool').each(function(){
      var listhtml = $('#listtoolmodal').children('.content').html();
      // console.log(html);
      $(this).attr('data-html',listhtml);
      $(this).popup({
        onShow : function(){
          $(this).addClass('flowing');
        },
        position : 'bottom center',
        on: 'click'
      });
    })
    $('.headertool').html('<i class="h square icon"></i>');
    $('.headertool').each(function(){
      var headhtml = $('#headerlistmodal').children('.content').html();
      // console.log(html);
      $(this).attr('data-html',headhtml);
      $(this).popup({
        onShow : function(){
          $(this).addClass('flowing');
        },
        position : 'bottom center',
        on: 'click'
      });
    })
    $('.templatetool').html('<i class="icons icon"></i>');
  }

  function generateModLogs(){
  var rows = [];
  $(".ModRows").each(function(){
    var row = {}
    var date = $(this).children('.datefield').children('.ModDate').calendar('get date');
    var note = $(this).children('.notefield').children('.change').val();
    var who = $(this).children('.modfield').children('.modder').val();
    row["Date"] = date;  
    row["Note"] = note;
    row["Who"] = who;
    rows.push(row)
  })
  var modlogs = {
    html : '',
    md : '',
    message : ''
  }
  var html = '';
  var md = '';
  if(rows.length != 0){
    html += "<table>\n<thead>\n<tr><th><b>Date</b></th><th><b>Change</b></th><th><b>Modified By</b></th></tr>\n</thead>\n<tbody>\n";
    md += "| **Date** | **Change** | **Modified By** |\n| --------- | --------- | --------- |\n";
    for(let i=0;i<rows.length;i++){
      var date = new Date(rows[i]['Date']);
      html += "<tr>"+ date.toLocaleDateString() +""+rows[i]['Note']+""+rows[i]['Who']+"</tr>\n";
      md += "|"+ date.toLocaleDateString() +"|"+rows[i]['Note']+"|"+rows[i]['Who']+"|\n";
    }
    html += "</tbody></table>";
  }
  modlogs['html'] = html;
  modlogs['md'] = md;
  return modlogs;
}
  
function refreshtable(){
  $("#inserttableform").children('tbody').html('');
   for(let i=0;i<itablerows.length;i++){
     $("#inserttableform").children('tbody').append('<tr>' + itablerows[i] + '</tr>');
   }

   $("#insertablecolumndiv").children('thead').children('tr').html('');
   for(let i =0;i<itablecolumns.length;i++){
     $("#insertablecolumndiv").children('thead').children('tr').append(itablecolumns[i]);
   }  
}
</script>
    </body>    
    
</html>

<div class='ui tiny modal' id='highlightmodal'>
  <div class='header'>Select A Color</div>
  <div class='content center' id='hlcontent'>
    <script>
      for(let i=0;i<highlightarr.length;i++){
        $("#hlcontent").append("<span><i class='circle icon hlselect' data-hl='"+highlightarr[i]['icon']['datahl']+"' style='"+highlightarr[i]['icon']['css']+"'></i></span>")
      }
    </script>
  </div>
  <div class='actions'>
    <button class='ui basic blue approve button'>Confirm</button>
    <button class='ui basic red cancel button'>Close</button>
  </div>
</div>

<script>
  var selectedhl;
  $(".hlselect").click(function(){
    $(".hlselect").parent('span').removeClass('selected-data');
    $(this).parent('span').addClass('selected-data');
    selectedhl = $(this).attr('data-hl')
  })
</script>


<script>

function updateH2(){
  if($("#typedoc").val() == 'user'){
    var title = $("#usergtitle").val();
  }else{
    var title = $('#editProject2').val() + "(" + $('#editNumber2').val() + ") " + $('#editVersion').val();
  }
  $('#versionh2').html(title);
}

function simplemdeside(editor){
  var cm = editor.codemirror;
	var wrapper = cm.getWrapperElement();
	var preview = wrapper.nextSibling;
	var toolbarButton = editor.toolbarElements["side-by-side"];
	var useSideBySideListener = false;
  // console.log(editor.element);
  var offset = editor.gui.toolbar.offsetTop;
  offset = window.pageYOffset;
  // console.log(offset)
  var offsetleft = editor.gui.toolbar.offsetLeft;
  // console.log(offsetright);
  // $(editor.gui.sideBySide).css('top',offset+130);
  
  // $(editor.gui.sideBySide).css('top',offset+30);
  // $(editor.gui.sideBySide).css('left',offsetleft);
  // $(editor.gui.sideBySide).css('margin-left','48%');
  // .editor-preview-active-side
	if(/editor-preview-active-side/.test(preview.className)) {
		preview.className = preview.className.replace(
			/\s*editor-preview-active-side\s*/g, ""
		);
		toolbarButton.className = toolbarButton.className.replace(/\s*active\s*/g, "");
		wrapper.className = wrapper.className.replace(/\s*CodeMirror-sided\s*/g, " ");
	} else {
		// When the preview button is clicked for the first time,
		// give some time for the transition from editor.css to fire and the view to slide from right to left,
		// instead of just appearing.
		setTimeout(function() {
			if(!cm.getOption("fullScreen"))
				// editor.toggleFullScreen(editor);
			preview.className += " editor-preview-active-side";
		}, 1);
		toolbarButton.className += " active";
		wrapper.className += " CodeMirror-sided";
		useSideBySideListener = true;
	}

	// Hide normal preview if active
	var previewNormal = wrapper.lastChild;
	if(/editor-preview-active/.test(previewNormal.className)) {
		previewNormal.className = previewNormal.className.replace(
			/\s*editor-preview-active\s*/g, ""
		);
		var toolbar = editor.toolbarElements.preview;
		var toolbar_div = wrapper.previousSibling;
		toolbar.className = toolbar.className.replace(/\s*active\s*/g, "");
		toolbar_div.className = toolbar_div.className.replace(/\s*disabled-for-preview*/g, "");
	}

	var sideBySideRenderingFunction = function() {
		preview.innerHTML = editor.options.previewRender(editor.value(), preview);
	};

	if(!cm.sideBySideRenderingFunction) {
		cm.sideBySideRenderingFunction = sideBySideRenderingFunction;
	}

	if(useSideBySideListener) {
		preview.innerHTML = editor.options.previewRender(editor.value(), preview);
		cm.on("update", cm.sideBySideRenderingFunction);
	} else {
		cm.off("update", cm.sideBySideRenderingFunction);
	}

	// Refresh to fix selection being off (#309)
	cm.refresh();
}
</script>

