var jQueryFormNotifyId = 'notify';
function sumbitWithAjaxNotify(formID,notifyID){
	var frm = $('#'+formID);
	jQueryFormNotifyId = notifyID;
	
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        cache: false,
		dataType: 'script',
        success: function (data) {
            
        },
        error: function (data) {
            alert('Maaf gagal menyimpan form');
        },
    });
    
}

function ajaxNotify(msg){
	$('#'+jQueryFormNotifyId).html(msg);
}

function auto_grow(element) {
    element.style.height = "50px";
    element.style.height = (element.scrollHeight)+"px";
}

var minRows = 1;
var maxRows = 26;
function ResizeTextarea(t) {
    if (t.scrollTop == 0)   t.scrollTop=1;
    while (t.scrollTop == 0) {
        if (t.rows > minRows)
                t.rows--; else
            break;
        t.scrollTop = 1;
        if (t.rows < maxRows)
                t.style.overflowY = "hidden";
        if (t.scrollTop > 0) {
            t.rows++;
            break;
        }
    }
    while(t.scrollTop > 0) {
        if (t.rows < maxRows) {
            t.rows++;
            if (t.scrollTop == 0) t.scrollTop=1;
        } else {
            t.style.overflowY = "auto";
            break;
        }
    }
}



function CheckAll(fmobj){
	for (var i=0;i<fmobj.elements.length;i++){
		var e = fmobj.elements[i];
		if ((e.name != 'allbox') && (e.type=='checkbox') && (!e.disabled)){
			e.checked = fmobj.allbox.checked;
			a = e.value;
		}
	}
}

function submitForm(task){
	f = document.admin_list_form;
	f.task.value = task;
	f.action = '#submit';
	f.submit();
	return false;
}

function submitForm2(task,id){
	f = document.admin_list_form;
	f.task.value = task;
	f.action = '#submit';
	$('#list-check-'+id).attr('checked','checked');
	f.submit();
	return true;
}

function goUploadFile(){
	$('notify').set('styles',{'display':'block'});
	$('notify').set('html','<div class="loading">Harap menunggu ...</div>');
}

function show_msg(msg){
	$('notify').set('html',msg);
	$('file_input').value="";
}

function popup(url) {
	newwindow=window.open(url,'name','height=600,width=1100,scrollbars=1,left=100,top=100');
	if (window.focus) {newwindow.focus()}
}
function winopen(url) {
	newwindow=window.open(url,'name','height=600,width=1100,scrollbars=1,left=50,top=50');
	if (window.focus) {newwindow.focus()}
}

function insertAtCursor(myField, myValue) {
	_to_textarea();

    //IE support
    if (document.selection) {
            $(myField).focus();
            sel = document.selection.createRange();
            sel.text = myValue;
    }
    //Mozilla/Firefox/Netscape 7+ support
    else if ($(myField).selectionStart || $(myField).selectionStart == '0'){
            var startPos = $(myField).selectionStart;
            var endPos = $(myField).selectionEnd;
            $(myField).value = $(myField).value.substring(0, startPos)+ myValue
             + $(myField).value.substring(endPos, $(myField).value.length);
	} else {
			$(myField).value += myValue;
	}
	$(myField).focus();
	SqueezeBox.close();
}

function popup_print_page(url) {
	newwindow=window.open(url,'name','height=600,width=800,scrollbars=1,left=100,top=100');
	if (window.focus) {newwindow.focus()}
}

function many_open(cid)
{
	dsp = $("submany_"+cid).style.display;
	if(dsp == 'block')
	{
		$("submany_"+cid).style.display="none";
	}
	else
	{
		$("submany_"+cid).style.display="block";
	}
	many_over(cid);
}
function many_over(cid)
{
	dsp = $("submany_"+cid).style.display;
	if(dsp == 'block')
	{
		$("manyopen_"+cid).innerHTML = "&#9660; Tutup ";
	}
	else
	{
		$("manyopen_"+cid).innerHTML = "&#9660; Buka ";
	}
}
function many_out(cid)
{
	$("manyopen_"+cid).innerHTML = "&#9660;";
}

function setCookie(cname, cvalue) {
	var d = new Date();
	d.setTime(d.getTime() + (1*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires+"; path=/";
}

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	return "";
}

function modalSBoxOpen(url){
	$('#modalSBOXContent').load(url,function(){
		$('#modalSBOX').modal('show'); 
	});
}

function page_thumbnail_select(page_id,image){
    $.post(  '/nsystem/page/thumbnail-select/', 
            { 'page_id' : page_id, 'image' : image}, 
            function(data) {
				$('#modalSBOX').modal('hide'); 
				document.location.reload();
            }
    );
}

function page_thumbnail_search(){
    var v = $('#media_keyword').val();
    setCookie('media_keyword',v);
    pagination_ajax_load(media_url,media_id);
}


/**
 * Created by Austen.Liao on 2018/1/31.
 */
$bsAlert = {
    confirmTitle:"Konfirmasi",
    closeDisplay:"Batal",
	sureDisplay:"OK",
	confirmClass: 'danger',
	footer:true,
    init:function(w){
        this.width = w;
    },
    createModal:function (msg) {
        var $h1 = "";
        $h1 += "<div class='modal' id='bsAlertModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
        $h1 += "    <div class='modal-dialog modal-"+this.confirmClass+" modal-dialog-centered' role='document'>";
		$h1 += "        <div class='modal-content'>";
        $h1 += "            <div class='modal-header'>";
        $h1 += "                <h5 class='modal-title' id='myModalLabel'>"+this.confirmTitle+"</h5>";
        $h1 += "                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        $h1 += "                <span aria-hidden='true'>&times;</span>";
        $h1 += "                <span class='sr-only'>Close</span>";
        $h1 += "                </button>";
		$h1 += "            </div>";
        $h1 += "            <div class='modal-body'>";
        $h1 += "                <h6>"+msg+"</h6>";
		$h1 += "            </div>";
		if(this.footer){
			$h1 += "            <div class='modal-footer'>";
			$h1 += "                <button type='button' id='bsCancelBtn' class='btn btn-secondary' data-dismiss='modal'>"+this.closeDisplay+"</button>";
			$h1 += "                <button type='button' id='bsSaveBtn' class='btn btn-"+this.confirmClass+"'>"+this.sureDisplay+"</button>";
			$h1 += "            </div>";
		}
        $h1 += "        </div>";
        $h1 += "    </div>";
        $h1 += "</div>";
        $("body").append($h1);
    },
    confirm:function(msg,fun){
		this.footer = true;
		this.confirmTitle = "Konfirmasi";
		this.confirmClass = "danger";

        $bsAlert.createModal(msg);
        $('#bsAlertModal').modal('show');
        $("#bsSaveBtn").click(function(){
            fun();
            $('#bsAlertModal').modal('hide');
        });
	},
	alert:function(msg){
		this.footer = true;
		this.confirmTitle = "Peringatan";	
		this.confirmClass = "danger";
        $bsAlert.createModal(msg);
		$('#bsAlertModal').modal('show');
		$('#bsCancelBtn').hide();
		$("#bsSaveBtn").click(function(){
			$('#bsCancelBtn').show();
            $('#bsAlertModal').modal('hide');
        });
    },
	success:function(msg){
		this.footer = true;
		this.confirmTitle = "Selamat";	
		this.confirmClass = "success";
        $bsAlert.createModal(msg);
		$('#bsAlertModal').modal('show');
		$('#bsCancelBtn').hide();
		$("#bsSaveBtn").click(function(){
			$('#bsCancelBtn').show();
            $('#bsAlertModal').modal('hide');
        });
    }
}
$(document).on("hidden.bs.modal", function(e) {
	$('#bsAlertModal').remove();
});

function modalSBoxConfirm(text,fx) {
	$bsAlert.confirm(text,function(){
		eval(fx);
	});
}
function modalSBoxAlert(text) {
	$bsAlert.alert(text);
}
function modalSBoxSuccess(text) {
	$bsAlert.success(text);
}
function modalSBoxDelete() {
	modalSBoxConfirm('Apakah anda ingin menghapus data ini?','submitForm(\'delete\')');
}
function modalSoftDelete() {
	modalSBoxConfirm('Apakah anda ingin menghapus data ini?','submitForm(\'softdelete\')');
}
function modalSBoxOpenImage(url){
	html = '<div class="modal-body">';
	html += '<img src="'+url+'" class="img-fluid mx-auto w-100" alt="" />';
	html += '</div>';
	$('#modalSBOXContent').html(html);
	$('#modalSBOX').modal('show'); 
}

function modalSBoxSetup(){
	$("[type='sbox']").click(function(){
		href = this.href;
		hrefO = href.split('?')[0];
		ext = hrefO.substr( (href.lastIndexOf('.') +1) );
		imageExt = ['webp','jpg','jpeg','png','gif','bmp'];
		if ($.inArray(ext, imageExt)>=0){
			modalSBoxOpenImage(href);
		}
		else {
			$('#modalSBOXContent').load(this.href,function(){
				$('#modalSBOX').modal('show'); 
			});
		}
		return false;
	});
}

function pagination_ajax_load(url,id){
    $('#'+id).load(url,function(){});
}

function social_dolike(id,type,component_id){
	if(type=='feedback'){
		url = '/feedback/like/'+id+'/';
		$('#feedback-like-'+component_id+'_'+id).load(url,function(){});
	}
}