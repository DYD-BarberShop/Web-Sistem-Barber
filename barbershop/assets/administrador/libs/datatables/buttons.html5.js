!function(t){"function"==typeof define&&define.amd?define(["jquery","datatables.net","datatables.net-buttons"],function(e){return t(e,window,document)}):"object"==typeof exports?module.exports=function(e,l,o,n){return e||(e=window),l&&l.fn.dataTable||(l=require("datatables.net")(e,l).$),l.fn.dataTable.Buttons||require("datatables.net-buttons")(e,l),t(l,e,e.document,o,n)}:t(jQuery,window,document)}(function(t,e,l,o,n,r){"use strict";var a=t.fn.dataTable;function d(){return o||e.JSZip}function p(){return n||e.pdfMake}a.Buttons.pdfMake=function(t){if(!t)return p();n=t},a.Buttons.jszip=function(t){if(!t)return d();o=t};var i=function(t){if(!(void 0===t||"undefined"!=typeof navigator&&/MSIE [1-9]\./.test(navigator.userAgent))){var e=t.document,l=function(){return t.URL||t.webkitURL||t},o=e.createElementNS("http://www.w3.org/1999/xhtml","a"),n="download"in o,a=/constructor/i.test(t.HTMLElement)||t.safari,d=/CriOS\/[\d]+/.test(navigator.userAgent),p=function(e){(t.setImmediate||t.setTimeout)(function(){throw e},0)},i=function(t){setTimeout(function(){"string"==typeof t?l().revokeObjectURL(t):t.remove()},4e4)},s=function(t){return/^\s*(?:text\/\S*|application\/xml|\S*\/\S*\+xml)\s*;.*charset\s*=\s*utf-8/i.test(t.type)?new Blob([String.fromCharCode(65279),t],{type:t.type}):t},f=function(e,f,m){m||(e=s(e));var c,u=this,y="application/octet-stream"===e.type,I=function(){!function(t,e,l){for(var o=(e=[].concat(e)).length;o--;){var n=t["on"+e[o]];if("function"==typeof n)try{n.call(t,l||t)}catch(t){p(t)}}}(u,"writestart progress write writeend".split(" "))};if(u.readyState=u.INIT,n)return c=l().createObjectURL(e),void setTimeout(function(){var t,e;o.href=c,o.download=f,t=o,e=new MouseEvent("click"),t.dispatchEvent(e),I(),i(c),u.readyState=u.DONE});!function(){if((d||y&&a)&&t.FileReader){var o=new FileReader;return o.onloadend=function(){var e=d?o.result:o.result.replace(/^data:[^;]*;/,"data:attachment/file;");t.open(e,"_blank")||(t.location.href=e),e=r,u.readyState=u.DONE,I()},o.readAsDataURL(e),void(u.readyState=u.INIT)}c||(c=l().createObjectURL(e)),y?t.location.href=c:t.open(c,"_blank")||(t.location.href=c);u.readyState=u.DONE,I(),i(c)}()},m=f.prototype;return"undefined"!=typeof navigator&&navigator.msSaveOrOpenBlob?function(t,e,l){return e=e||t.name||"download",l||(t=s(t)),navigator.msSaveOrOpenBlob(t,e)}:(m.abort=function(){},m.readyState=m.INIT=0,m.WRITING=1,m.DONE=2,m.error=m.onwritestart=m.onprogress=m.onwrite=m.onabort=m.onerror=m.onwriteend=null,function(t,e,l){return new f(t,e||t.name||"download",l)})}}("undefined"!=typeof self&&self||void 0!==e&&e||this.content);a.fileSave=i;var s=function(t){var e="Sheet1";return t.sheetName&&(e=t.sheetName.replace(/[\[\]\*\/\\\?\:]/g,"")),e},f=function(t){return t.newline?t.newline:navigator.userAgent.match(/Windows/)?"\r\n":"\n"},m=function(t,e){for(var l=f(e),o=t.buttons.exportData(e.exportOptions),n=e.fieldBoundary,a=e.fieldSeparator,d=new RegExp(n,"g"),p=e.escapeChar!==r?e.escapeChar:"\\",i=function(t){for(var e="",l=0,o=t.length;l<o;l++)l>0&&(e+=a),e+=n?n+(""+t[l]).replace(d,p+n)+n:t[l];return e},s=e.header?i(o.header)+l:"",m=e.footer&&o.footer?l+i(o.footer):"",c=[],u=0,y=o.body.length;u<y;u++)c.push(i(o.body[u]));return{str:s+c.join(l)+m,rows:c.length}},c=function(){if(!(-1!==navigator.userAgent.indexOf("Safari")&&-1===navigator.userAgent.indexOf("Chrome")&&-1===navigator.userAgent.indexOf("Opera")))return!1;var t=navigator.userAgent.match(/AppleWebKit\/(\d+\.\d+)/);return!!(t&&t.length>1&&1*t[1]<603.1)};function u(t){for(var e="A".charCodeAt(0),l="Z".charCodeAt(0)-e+1,o="";t>=0;)o=String.fromCharCode(t%l+e)+o,t=Math.floor(t/l)-1;return o}try{var y,I=new XMLSerializer}catch(t){}function h(e,l,o){var n=e.createElement(l);return o&&(o.attr&&t(n).attr(o.attr),o.children&&t.each(o.children,function(t,e){n.appendChild(e)}),null!==o.text&&o.text!==r&&n.appendChild(e.createTextNode(o.text))),n}function F(t,e){var l,o,n,a=t.header[e].length;t.footer&&t.footer[e].length>a&&(a=t.footer[e].length);for(var d=0,p=t.body.length;d<p;d++){var i=t.body[d][e];if(-1!==(n=null!==i&&i!==r?i.toString():"").indexOf("\n")?((o=n.split("\n")).sort(function(t,e){return e.length-t.length}),l=o[0].length):l=n.length,l>a&&(a=l),a>40)return 54}return(a*=1.35)>6?a:6}var x={"_rels/.rels":'<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships"><Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/officeDocument" Target="xl/workbook.xml"/></Relationships>',"xl/_rels/workbook.xml.rels":'<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships"><Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/worksheet" Target="worksheets/sheet1.xml"/><Relationship Id="rId2" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/styles" Target="styles.xml"/></Relationships>',"[Content_Types].xml":'<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Types xmlns="http://schemas.openxmlformats.org/package/2006/content-types"><Default Extension="xml" ContentType="application/xml" /><Default Extension="rels" ContentType="application/vnd.openxmlformats-package.relationships+xml" /><Default Extension="jpeg" ContentType="image/jpeg" /><Override PartName="/xl/workbook.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml" /><Override PartName="/xl/worksheets/sheet1.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml" /><Override PartName="/xl/styles.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.styles+xml" /></Types>',"xl/workbook.xml":'<?xml version="1.0" encoding="UTF-8" standalone="yes"?><workbook xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships"><fileVersion appName="xl" lastEdited="5" lowestEdited="5" rupBuild="24816"/><workbookPr showInkAnnotation="0" autoCompressPictures="0"/><bookViews><workbookView xWindow="0" yWindow="0" windowWidth="25600" windowHeight="19020" tabRatio="500"/></bookViews><sheets><sheet name="Sheet1" sheetId="1" r:id="rId1"/></sheets><definedNames/></workbook>',"xl/worksheets/sheet1.xml":'<?xml version="1.0" encoding="UTF-8" standalone="yes"?><worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" mc:Ignorable="x14ac" xmlns:x14ac="http://schemas.microsoft.com/office/spreadsheetml/2009/9/ac"><sheetData/><mergeCells count="0"/></worksheet>',"xl/styles.xml":'<?xml version="1.0" encoding="UTF-8"?><styleSheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" mc:Ignorable="x14ac" xmlns:x14ac="http://schemas.microsoft.com/office/spreadsheetml/2009/9/ac"><numFmts count="6"><numFmt numFmtId="164" formatCode="#,##0.00_- [$$-45C]"/><numFmt numFmtId="165" formatCode="&quot;£&quot;#,##0.00"/><numFmt numFmtId="166" formatCode="[$€-2] #,##0.00"/><numFmt numFmtId="167" formatCode="0.0%"/><numFmt numFmtId="168" formatCode="#,##0;(#,##0)"/><numFmt numFmtId="169" formatCode="#,##0.00;(#,##0.00)"/></numFmts><fonts count="5" x14ac:knownFonts="1"><font><sz val="11" /><name val="Calibri" /></font><font><sz val="11" /><name val="Calibri" /><color rgb="FFFFFFFF" /></font><font><sz val="11" /><name val="Calibri" /><b /></font><font><sz val="11" /><name val="Calibri" /><i /></font><font><sz val="11" /><name val="Calibri" /><u /></font></fonts><fills count="6"><fill><patternFill patternType="none" /></fill><fill><patternFill patternType="none" /></fill><fill><patternFill patternType="solid"><fgColor rgb="FFD9D9D9" /><bgColor indexed="64" /></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FFD99795" /><bgColor indexed="64" /></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="ffc6efce" /><bgColor indexed="64" /></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="ffc6cfef" /><bgColor indexed="64" /></patternFill></fill></fills><borders count="2"><border><left /><right /><top /><bottom /><diagonal /></border><border diagonalUp="false" diagonalDown="false"><left style="thin"><color auto="1" /></left><right style="thin"><color auto="1" /></right><top style="thin"><color auto="1" /></top><bottom style="thin"><color auto="1" /></bottom><diagonal /></border></borders><cellStyleXfs count="1"><xf numFmtId="0" fontId="0" fillId="0" borderId="0" /></cellStyleXfs><cellXfs count="68"><xf numFmtId="0" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="2" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="2" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="2" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="2" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="2" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="3" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="3" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="3" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="3" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="3" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="4" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="4" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="4" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="4" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="4" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="5" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="5" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="5" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="5" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="5" borderId="0" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="0" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="0" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="0" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="0" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="0" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="2" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="2" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="2" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="2" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="2" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="3" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="3" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="3" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="3" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="3" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="4" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="4" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="4" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="4" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="4" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="5" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="1" fillId="5" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="2" fillId="5" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="3" fillId="5" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="4" fillId="5" borderId="1" applyFont="1" applyFill="1" applyBorder="1"/><xf numFmtId="0" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyAlignment="1"><alignment horizontal="left"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyAlignment="1"><alignment horizontal="center"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyAlignment="1"><alignment horizontal="right"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyAlignment="1"><alignment horizontal="fill"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyAlignment="1"><alignment textRotation="90"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyAlignment="1"><alignment wrapText="1"/></xf><xf numFmtId="9"   fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="164" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="165" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="166" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="167" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="168" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="169" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="3" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="4" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="1" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="2" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/><xf numFmtId="14" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/></cellXfs><cellStyles count="1"><cellStyle name="Normal" xfId="0" builtinId="0" /></cellStyles><dxfs count="0" /><tableStyles count="0" defaultTableStyle="TableStyleMedium9" defaultPivotStyle="PivotStyleMedium4" /></styleSheet>'},b=[{match:/^\-?\d+\.\d%$/,style:60,fmt:function(t){return t/100}},{match:/^\-?\d+\.?\d*%$/,style:56,fmt:function(t){return t/100}},{match:/^\-?\$[\d,]+.?\d*$/,style:57},{match:/^\-?£[\d,]+.?\d*$/,style:58},{match:/^\-?€[\d,]+.?\d*$/,style:59},{match:/^\-?\d+$/,style:65},{match:/^\-?\d+\.\d{2}$/,style:66},{match:/^\([\d,]+\)$/,style:61,fmt:function(t){return-1*t.replace(/[\(\)]/g,"")}},{match:/^\([\d,]+\.\d{2}\)$/,style:62,fmt:function(t){return-1*t.replace(/[\(\)]/g,"")}},{match:/^\-?[\d,]+$/,style:63},{match:/^\-?[\d,]+\.\d{2}$/,style:64},{match:/^[\d]{4}\-[01][\d]\-[0123][\d]$/,style:67,fmt:function(t){return Math.round(25569+Date.parse(t)/864e5)}}];return a.ext.buttons.copyHtml5={className:"buttons-copy buttons-html5",text:function(t){return t.i18n("buttons.copy","Copy")},action:function(e,o,n,r){this.processing(!0);var a=this,d=m(o,r),p=o.buttons.exportInfo(r),i=f(r),s=d.str,c=t("<div/>").css({height:1,width:1,overflow:"hidden",position:"fixed",top:0,left:0});p.title&&(s=p.title+i+i+s),p.messageTop&&(s=p.messageTop+i+i+s),p.messageBottom&&(s=s+i+i+p.messageBottom),r.customize&&(s=r.customize(s,r,o));var u=t("<textarea readonly/>").val(s).appendTo(c);if(l.queryCommandSupported("copy")){c.appendTo(o.table().container()),u[0].focus(),u[0].select();try{var y=l.execCommand("copy");if(c.remove(),y)return o.buttons.info(o.i18n("buttons.copyTitle","Copy to clipboard"),o.i18n("buttons.copySuccess",{1:"Copied one row to clipboard",_:"Copied %d rows to clipboard"},d.rows),2e3),void this.processing(!1)}catch(t){}}var I=t("<span>"+o.i18n("buttons.copyKeys","Press <i>ctrl</i> or <i>⌘</i> + <i>C</i> to copy the table data<br>to your system clipboard.<br><br>To cancel, click this message or press escape.")+"</span>").append(c);o.buttons.info(o.i18n("buttons.copyTitle","Copy to clipboard"),I,0),u[0].focus(),u[0].select();var h=t(I).closest(".dt-button-info"),F=function(){h.off("click.buttons-copy"),t(l).off(".buttons-copy"),o.buttons.info(!1)};h.on("click.buttons-copy",F),t(l).on("keydown.buttons-copy",function(t){27===t.keyCode&&(F(),a.processing(!1))}).on("copy.buttons-copy cut.buttons-copy",function(){F(),a.processing(!1)})},exportOptions:{},fieldSeparator:"\t",fieldBoundary:"",header:!0,footer:!1,title:"*",messageTop:"*",messageBottom:"*"},a.ext.buttons.csvHtml5={bom:!1,className:"buttons-csv buttons-html5",available:function(){return e.FileReader!==r&&e.Blob},text:function(t){return t.i18n("buttons.csv","CSV")},action:function(t,e,o,n){this.processing(!0);var r=m(e,n).str,a=e.buttons.exportInfo(n),d=n.charset;n.customize&&(r=n.customize(r,n,e)),!1!==d?(d||(d=l.characterSet||l.charset),d&&(d=";charset="+d)):d="",n.bom&&(r=String.fromCharCode(65279)+r),i(new Blob([r],{type:"text/csv"+d}),a.filename,!0),this.processing(!1)},filename:"*",extension:".csv",exportOptions:{},fieldSeparator:",",fieldBoundary:'"',escapeChar:'"',charset:null,header:!0,footer:!1},a.ext.buttons.excelHtml5={className:"buttons-excel buttons-html5",available:function(){return e.FileReader!==r&&d()!==r&&!c()&&I},text:function(t){return t.i18n("buttons.excel",'<svg width="257" height="245" viewBox="0 0 257 245"><path id="Rectángulo_1" data-name="Rectángulo 1" d="M12,0H195V93H13A13,13,0,0,1,0,80V12A12,12,0,0,1,12,0Z" transform="translate(62)" fill="#33c481"/><path id="Rectángulo_5" data-name="Rectángulo 5" d="M12,0H195V87H13A13,13,0,0,1,0,74V12A12,12,0,0,1,12,0Z" transform="translate(62 158)" fill="#165c37"/><rect id="Rectángulo_3" data-name="Rectángulo 3" width="195" height="62" transform="translate(62 122)" fill="#107c42"/><rect id="Rectángulo_4" data-name="Rectángulo 4" width="195" height="62" transform="translate(62 60)" fill="#21a366"/><path id="Rectángulo_9" data-name="Rectángulo 9" d="M12,0H98V62H0V12A12,12,0,0,1,12,0Z" transform="translate(62)" fill="#22a466"/><rect id="Rectángulo_11" data-name="Rectángulo 11" width="98" height="67" transform="translate(62 117)" fill="#195d38"/><rect id="Rectángulo_10" data-name="Rectángulo 10" width="98" height="62" transform="translate(62 60)" fill="#0c7e42"/><path id="Rectángulo_7" data-name="Rectángulo 7" d="M0,0H78a8,8,0,0,1,8,8V151a8,8,0,0,1-8,8H0Z" transform="translate(62 52)" fill="rgba(0,0,0,0.16)"/><path id="Rectángulo_8" data-name="Rectángulo 8" d="M0,0H69a8,8,0,0,1,8,8V149a8,8,0,0,1-8,8H0Z" transform="translate(62 59)" fill="rgba(0,0,0,0.32)"/><path id="Rectángulo_6" data-name="Rectángulo 6" d="M0,0H69a8,8,0,0,1,8,8V138a8,8,0,0,1-8,8H0Z" transform="translate(62 60)" fill="rgba(0,0,0,0.5)"/><path id="Rectángulo_2" data-name="Rectángulo 2" d="M0,0H118a12,12,0,0,1,12,12V125a12,12,0,0,1-12,12H0Z" transform="translate(0 59)" fill="#0f743c"/><path id="Trazado_1" data-name="Trazado 1" d="M91.666,230.67l20.249,34.2L89.477,302.635H108.9l13.681-26.542,13.682,26.542h20.249l-22.164-37.761,22.164-34.2H136.268l-12.313,25.174-12.04-25.174Z" transform="translate(-59 -137)" fill="#fff"/></svg> Excel')},action:function(l,o,n,a){this.processing(!0);var p,f,m,c,g=this,v=0,w=function(e){var l=x[e];return t.parseXML(l)},B=w("xl/worksheets/sheet1.xml"),C=B.getElementsByTagName("sheetData")[0],T={_rels:{".rels":w("_rels/.rels")},xl:{_rels:{"workbook.xml.rels":w("xl/_rels/workbook.xml.rels")},"workbook.xml":w("xl/workbook.xml"),"styles.xml":w("xl/styles.xml"),worksheets:{"sheet1.xml":B}},"[Content_Types].xml":w("[Content_Types].xml")},k=o.buttons.exportData(a.exportOptions),S=function(t){c=h(B,"row",{attr:{r:m=v+1}});for(var e=0,l=t.length;e<l;e++){var o=u(e)+""+m,n=null;if(null===t[e]||t[e]===r||""===t[e]){if(!0!==a.createEmptyCells)continue;t[e]=""}var d=t[e];t[e]="function"==typeof t[e].trim?t[e].trim():t[e];for(var p=0,i=b.length;p<i;p++){var s=b[p];if(t[e].match&&!t[e].match(/^0\d+/)&&t[e].match(s.match)){var f=t[e].replace(/[^\d\.\-]/g,"");s.fmt&&(f=s.fmt(f)),n=h(B,"c",{attr:{r:o,s:s.style},children:[h(B,"v",{text:f})]});break}}if(!n)if("number"==typeof t[e]||t[e].match&&t[e].match(/^-?\d+(\.\d+)?([eE]\-?\d+)?$/)&&!t[e].match(/^0\d+/))n=h(B,"c",{attr:{t:"n",r:o},children:[h(B,"v",{text:t[e]})]});else{var y=d.replace?d.replace(/[\x00-\x09\x0B\x0C\x0E-\x1F\x7F-\x9F]/g,""):d;n=h(B,"c",{attr:{t:"inlineStr",r:o},children:{row:h(B,"is",{children:{row:h(B,"t",{text:y,attr:{"xml:space":"preserve"}})}})}})}c.appendChild(n)}C.appendChild(c),v++};a.customizeData&&a.customizeData(k);var R=function(e,l){var o=t("mergeCells",B);o[0].appendChild(h(B,"mergeCell",{attr:{ref:"A"+e+":"+u(l)+e}})),o.attr("count",parseFloat(o.attr("count"))+1),t("row:eq("+(e-1)+") c",B).attr("s","51")},N=o.buttons.exportInfo(a);N.title&&(S([N.title]),R(v,k.header.length-1)),N.messageTop&&(S([N.messageTop]),R(v,k.header.length-1)),a.header&&(S(k.header),t("row:last c",B).attr("s","2")),p=v;for(var _=0,A=k.body.length;_<A;_++)S(k.body[_]);f=v,a.footer&&k.footer&&(S(k.footer),t("row:last c",B).attr("s","2")),N.messageBottom&&(S([N.messageBottom]),R(v,k.header.length-1));var O=h(B,"cols");t("worksheet",B).prepend(O);for(var z=0,D=k.header.length;z<D;z++)O.appendChild(h(B,"col",{attr:{min:z+1,max:z+1,width:F(k,z),customWidth:1}}));var M=T.xl["workbook.xml"];t("sheets sheet",M).attr("name",s(a)),a.autoFilter&&(t("mergeCells",B).before(h(B,"autoFilter",{attr:{ref:"A"+p+":"+u(k.header.length-1)+f}})),t("definedNames",M).append(h(M,"definedName",{attr:{name:"_xlnm._FilterDatabase",localSheetId:"0",hidden:1},text:s(a)+"!$A$"+p+":"+u(k.header.length-1)+f}))),a.customize&&a.customize(T,a,o),0===t("mergeCells",B).children().length&&t("mergeCells",B).remove();var H=new(d()),E={type:"blob",mimeType:"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"};!function l(o,n){y===r&&(y=-1===I.serializeToString((new e.DOMParser).parseFromString(x["xl/worksheets/sheet1.xml"],"text/xml")).indexOf("xmlns:r")),t.each(n,function(e,n){if(t.isPlainObject(n))l(o.folder(e),n);else{if(y){var r,a,d=n.childNodes[0],p=[];for(r=d.attributes.length-1;r>=0;r--){var i=d.attributes[r].nodeName,s=d.attributes[r].nodeValue;-1!==i.indexOf(":")&&(p.push({name:i,value:s}),d.removeAttribute(i))}for(r=0,a=p.length;r<a;r++){var f=n.createAttribute(p[r].name.replace(":","_dt_b_namespace_token_"));f.value=p[r].value,d.setAttributeNode(f)}}var m=I.serializeToString(n);y&&(-1===m.indexOf("<?xml")&&(m='<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'+m),m=(m=m.replace(/_dt_b_namespace_token_/g,":")).replace(/xmlns:NS[\d]+="" NS[\d]+:/g,"")),m=m.replace(/<([^<>]*?) xmlns=""([^<>]*?)>/g,"<$1 $2>"),o.file(e,m)}})}(H,T),H.generateAsync?H.generateAsync(E).then(function(t){i(t,N.filename),g.processing(!1)}):(i(H.generate(E),N.filename),this.processing(!1))},filename:"*",extension:".xlsx",exportOptions:{},header:!0,footer:!1,title:"*",messageTop:"*",messageBottom:"*",createEmptyCells:!1,autoFilter:!1,sheetName:""},a.ext.buttons.pdfHtml5={className:"buttons-pdf buttons-html5",available:function(){return e.FileReader!==r&&p()},text:function(t){return t.i18n("buttons.pdf",'<svg width="177" height="240" viewBox="0 0 177 240"><path id="Sustracción_2" data-name="Sustracción 2" d="M-257.875,202H-355a15.9,15.9,0,0,1-11.314-4.686A15.894,15.894,0,0,1-371,186V-22a15.9,15.9,0,0,1,4.686-11.314A15.9,15.9,0,0,1-355-38h137a15.9,15.9,0,0,1,11.314,4.686A15.9,15.9,0,0,1-202-22V146.126L-257.874,202Z" transform="translate(379 38)" fill="#ee534e"/><rect id="Rectángulo_3" data-name="Rectángulo 3" width="122" height="80" rx="4" transform="translate(0 48)" fill="#c62827"/><path id="Sustracción_1" data-name="Sustracción 1" d="M-333.6,55.287v0l1.378-47.805A7.958,7.958,0,0,1-329.8,1.971,7.958,7.958,0,0,1-324.23-.29h.051l45.872.28L-333.6,55.285Z" transform="translate(454.994 184.448)" fill="#c62827"/><path id="_256" d="M70.978,49.92c-1.767-1.914-5.154-2.8-10.013-2.8a50.191,50.191,0,0,0-8.1.736,41.715,41.715,0,0,1-4.712-5.448,48.362,48.362,0,0,1-2.945-4.565,48.3,48.3,0,0,0,2.651-12.959c0-3.976-1.62-8.246-6.038-8.246a4.339,4.339,0,0,0-3.681,2.209c-1.914,3.24-1.178,9.866,1.914,16.787-1.031,3.092-2.209,6.185-3.534,9.572A55.479,55.479,0,0,1,32.4,53.6c-4.565,1.767-14.137,6.185-15.02,11.044A3.75,3.75,0,0,0,18.7,68.474,5.447,5.447,0,0,0,22.677,69.8c5.743,0,11.486-7.952,15.462-14.873,2.209-.736,4.418-1.473,6.774-2.062,2.5-.589,4.859-1.178,7.068-1.62,6.185,5.3,11.633,6.185,14.284,6.185,3.681,0,5.154-1.62,5.6-2.945A4.3,4.3,0,0,0,70.978,49.92ZM67,52.718c-.147,1.031-1.325,1.767-2.8,1.767a4.077,4.077,0,0,1-1.325-.147,21.151,21.151,0,0,1-8.1-4.123,39.655,39.655,0,0,1,5.89-.442,36.1,36.1,0,0,1,3.976.295C65.971,50.362,67.443,50.951,67,52.718ZM40.643,20.174a2.144,2.144,0,0,1,1.325-.884c1.473,0,1.767,1.62,1.767,3.092a37.557,37.557,0,0,1-1.767,9.866C39.465,25.917,39.759,21.647,40.643,20.174Zm8.246,28.273c-1.62.295-3.24.736-4.859,1.178-1.178.295-2.356.736-3.681,1.031.589-1.325,1.178-2.651,1.767-3.829.736-1.62,1.325-3.24,1.914-4.859.589.884,1.031,1.62,1.62,2.356,1.031,1.473,2.209,2.8,3.24,4.123ZM31.071,56.988c-3.681,5.89-7.363,9.719-9.424,9.719a1.579,1.579,0,0,1-.884-.295,1.188,1.188,0,0,1-.442-1.325c.295-2.209,4.565-5.3,10.75-8.1Z" transform="translate(16.278 44.769)" fill="#fff"/></svg> PDF')},action:function(e,l,o,n){this.processing(!0);var a=l.buttons.exportData(n.exportOptions),d=l.buttons.exportInfo(n),i=[];n.header&&i.push(t.map(a.header,function(t){return{text:"string"==typeof t?t:t+"",style:"tableHeader"}}));for(var s=0,f=a.body.length;s<f;s++)i.push(t.map(a.body[s],function(t){return null!==t&&t!==r||(t=""),{text:"string"==typeof t?t:t+"",style:s%2?"tableBodyEven":"tableBodyOdd"}}));n.footer&&a.footer&&i.push(t.map(a.footer,function(t){return{text:"string"==typeof t?t:t+"",style:"tableFooter"}}));var m={pageSize:n.pageSize,pageOrientation:n.orientation,content:[{table:{headerRows:1,body:i},layout:"noBorders"}],styles:{tableHeader:{bold:!0,fontSize:11,color:"white",fillColor:"#2d4154",alignment:"center"},tableBodyEven:{},tableBodyOdd:{fillColor:"#f3f3f3"},tableFooter:{bold:!0,fontSize:11,color:"white",fillColor:"#2d4154"},title:{alignment:"center",fontSize:15},message:{}},defaultStyle:{fontSize:10}};d.messageTop&&m.content.unshift({text:d.messageTop,style:"message",margin:[0,0,0,12]}),d.messageBottom&&m.content.push({text:d.messageBottom,style:"message",margin:[0,0,0,12]}),d.title&&m.content.unshift({text:d.title,style:"title",margin:[0,0,0,12]}),n.customize&&n.customize(m,n,l);var u=p().createPdf(m);"open"!==n.download||c()?u.download(d.filename):u.open(),this.processing(!1)},title:"*",filename:"*",extension:".pdf",exportOptions:{},orientation:"portrait",pageSize:"A4",header:!0,footer:!1,messageTop:"*",messageBottom:"*",customize:null,download:"download"},a.Buttons});