<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Aurora</title>
		<link rel="stylesheet" type="text/css" href="<?php echo SOURCES_URL; ?>css/style.css" />
	</head>
	<body>
		
		<div class="wrapper">
			
			<div class="wp_navigation">

				<div id="myprofile">
					<img src="<?php echo SOURCES_URL; ?>img/_pp/medium/2.jpg" alt="" />
					<a class="fn" href="#">Anton Junaidi</a>
					<a class="edit-profile" href="#">Settings</a> |
					<a href="#" class="logout-profile">Logout</a>
				</div>

				<div id="nav_filter">
					<h3>InfoStream</h3>
					<ul id="nav">
						<li class="news current"><a href="#">News Feed</a></li>
						<li class="news"><a href="#">Top News</a></li>
						<li class="messages"><a href="#">Messages</a></li>
						<li class="friends"><a href="#">Friends</a></li>
						<li class="lists"><a href="#">Lists</a></li>
						<li class="photos"><a href="#">Media</a></li>
						<li class="adverts"><a href="#">Promotions</a></li>
						<li class="links"><a href="#">Links</a></li>
					</ul>
				</div>

				<div id="searchcontainer">
					<h3>Search</h3>
					<form id="searchForm">
						<input type="search" id="s" placeholder="Search" />
					</form>
				</div>

			</div>
			
			<div class="statuswrapper content">
				
				
				<div class="statuspostcontainer">
					<div class="formstatuspost">
						<form method="post" accept-charset="utf-8" id="StatusPost-Form" action="<?php echo BASE_URL; ?>mantis/ajaxstatus/ShareStatus/">
							<input type="hidden" name="KPUID" id="KPUID" value="<?php echo $KPUID; ?>" />
							<textarea name="KPSMessage" id="KPSMessage"></textarea>
							<button type="submit" name="statusbutton" id="ShareButton" class="uibutton confirm large">Share</button>
						</form>
					</div>
				</div>
				
				
				<div class="statuspostlist" id="statuspostlist">
					<ul id="StatusLists">
						
					</ul>
				</div>
				
			</div>
			
			<!-- DETAIL STATUS CONTAINER -->
			<div id="statuswrapperdetail" class="statuswrapperdetail content" style="left:0;"
			data-iddetailstatus=""
			data-main=""
			data-idprofile=""
			>
				<div class="paneltopbar">
					<a href="#" id="back">back</a>
					<a href="#" id="close">close</a>
				</div>

				<div class="statuspostlist commentcontainer" id="PanelDetailStatus">

				</div>

			</div>
			<!-- END DETAIL STATUS CONTAINER -->
			
			<!-- FRIENDS CONTAINER -->
			<div class="componentfriends" id="componentfriends">
				
				<div class="teman following">
					<h2><a href="#">Following <span class="userstat">40</span></a> </h2>
					<ul class="list">
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/1.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/2.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/1.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/2.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/1.jpg" /></a></li>
					</ul>
				</div>
				
				<div class="teman followers">
					<h2><a href="#">Followers <span class="userstat">40</span></a> </h2>
					<ul class="list">
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/2.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/1.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/2.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/1.jpg" /></a></li>
						<li class="userlist"><a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/2.jpg" /></a></li>
					</ul>
				</div>
				
				<hr class="spacer" />
				
				<div class="userinner">
					<h2>
					<span class="title">Who to follow</span>
					<span class="subtitle">
						<span class="dot">.</span>
						<a href="#">refresh</a>
						<span class="dot">.</span>
						<a href="#">view all</a>
					</span>
					</h2>
					<ul class="recommedlist">
						<li class="listitem">
							<a href="#" class="profilelink"><img src="<?php echo SOURCES_URL; ?>img/_pp/medium/2.jpg" width="32" height="32" /></a>
							<a href="#" class="dismiss">x</a>
							<div class="userinfo">
								<a class="screenname" href="#">WebEx</a>
								<span class="screenaction">
									<span class="screendetail">Tema WebEx</span>
									<span class="screenfollow">
										<span class="dot">.</span>
										<a href="#">Follow</a>
									</span>
								</span>
								<div class="usermeta">
									Followed by <span class="user"><a href="">@anton</a> and <a href="#">5 others</a></span>
								</div>
							</div>
						</li>
						<li class="listitem">
							<a href="#" class="profilelink"><img src="<?php echo SOURCES_URL; ?>img/_pp/medium/2.jpg" width="32" height="32" /></a>
							<a href="#" class="dismiss">x</a>
							<div class="userinfo">
								<a class="screenname" href="#">WebEx</a>
								<span class="screenaction">
									<span class="screendetail">Tema WebEx</span>
									<span class="screenfollow">
										<span class="dot">.</span>
										<a href="#">Follow</a>
									</span>
								</span>
								<div class="usermeta">
									Followed by <span class="user"><a href="">@anton</a> and <a href="#">5 others</a></span>
								</div>
							</div>
						</li>
						<li class="listitem">
							<a href="#" class="profilelink"><img src="<?php echo SOURCES_URL; ?>img/_pp/medium/2.jpg" width="32" height="32" /></a>
							<a href="#" class="dismiss">x</a>
							<div class="userinfo">
								<a class="screenname" href="#">WebEx</a>
								<span class="screenaction">
									<span class="screendetail">Tema WebEx</span>
									<span class="screenfollow">
										<span class="dot">.</span>
										<a href="#">Follow</a>
									</span>
								</span>
								<div class="usermeta">
									Followed by <span class="user"><a href="">@anton</a> and <a href="#">5 others</a></span>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
				<hr class="spacer" />
				
			</div>
			
		</div>
		
		<!-- END FRIENDS CONTAINER -->
		
		
		
		<!-- TEMPLATING SYSTEM START -->
		
		<script id="TemplateListStatus" type="text/x-jquery-tmpl">
						<li data-idstatus="${StatusId}" data-statususernameid="${StatusUsernameId}" id="status_${StatusId}" class="ItemStatus">
							<a href="#" id="AvatarLink"><img src="<?php echo SOURCES_URL; ?>img/_pp/medium/2.jpg" alt="" /></a>
							<div class="statuspostdetail">
								<div class="fn_user"><a href="#">${StatusUsername}</a> <span>${StatusName} wrote <a href="#">${StatusTime}</a></span></div>
								<div class="fn_user_status" id="DetailStatus">{{html StatusMessage}}</div>
								<div class="button-group">
									<a href="#" class="button icon comment">Reply</a>
									<a href="#" class="button icon like">Favorite</a>
									<a href="#" class="button icon loop">Repost</a>
									<a href="#" class="button icon remove">Delete</a>
								</div>
							</div>
						</li>
		</script>
		
		<script id="TemplateListDetailStatus" type="text/x-jquery-tmpl">
						<div class="mentioned" id="panel-detailstatus" data-idstatus="${StatusId}">
						<a href="#"><img src="<?php echo SOURCES_URL; ?>img/_pp/small/2.jpg" alt="" /></a>
						<div class="statuspostdetail">
							<div class="fn_user"><a href="#">${StatusUsername}</a> <span>${StatusName} wrote <a href="#">${StatusTime}</a></span></div>
							<div class="fn_user_status" id="detailstatus">{{html StatusMessage}}</div>
						</div>
						
						<div class="mediacontainer">
							{{html StatusMedia}}
						</div>
						
								<div class="button-group">
									<a href="#" class="button icon comment">Reply</a>
									<a href="#" class="button icon like">Favorite</a>
									<a href="#" class="button icon loop">Repost</a>
									<a href="#" class="button icon remove">Delete</a>
								</div>
					</div>
		</script>
		
		<script id="TemplateMedia" type="text/x-jquery-tmpl">
					<div class="livepreview attachment">
						{{html EmbedMedia}}
						<div class="attachment_data">
							<p class="name"><a href="${Embedurl}" onclick="return;" target="_blank" class="embedly">${EmbedTitle}</a></p>
							<p class="caption"><a href="${EmbedProviderURL}" onclick="return;" target="_blank">${EmbedProviderName}</a></p>
							<p class="description">${EmbedDescription}</p>
						</div>
						<div class="clear"></div>
                        <div class="embed embeding">
							{{html EmbedHTML}}
						</div>
					</div>
		</script>
		
		<script id="TemplateProfileDetail" type="text/x-jquery-tmpl">
					<div class="headeruser" data-idprofile="${StatusUsernameId}" id="profile_${StatusUsernameId}">
						<a href="#" ><img src="<?php echo SOURCES_URL; ?>img/_pp/big/2.jpg" class="userpicture" /></a>
						<div class="detailheaderuser small">
							<div class="headeruserdetails_name">
								<div class="fullname"><h2>${StatusName}</h2></div>
							</div>
							<div class="headeruserdetails_username_loc">
								<span class="screenname"><span>@${StatusUsername}</span> Earth</span>
							</div>
							<div class="bio detailuser">${StatusUsernameDetail}</div>
							<div class="url">{{html StatusUsernameWeb}}</div>
						</div>
						<div class="uibutton-toolbar toolbar">
							<a href="#" class="button icon add">Follow</a>
						</div>
					</div>	
		</script>
		
		<!-- TEMPLATING SYSTEM END -->
		
		<script type="text/javascript" src="<?php echo SOURCES_URL; ?>js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="<?php echo SOURCES_URL; ?>js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?php echo SOURCES_URL; ?>js/jquery.embedly.min.js"></script>
		<script type="text/javascript">
			$(function(){

				$.mPost = function(action, data, callback){
					$.post(action, data, callback, 'json');
				}
				
				var MantisProfile = (function(){

					var Start = 0;
					var panel1 = $('#statuswrapperdetail, #componentfriends');
					
					var Init = function(){
						InitEventHandler();
						ResizePanel();
						GetStatus();
					};

					var ResizePanel = function(){
                        panel1.css({
							'height' : $(window).height()
						});
						$(window).resize(function(){
							panel1.css({
								'height' : $(window).height()
							});
							return false;
						});
					};
					
					var InitEventHandler = function(){
						$('#ShareButton').bind('click', function(e){
							e.preventDefault();
							var el = $(this);

							var Form = $('#StatusPost-Form');
							var FormData = Form.serialize();
							var FormURL = Form.prop('action');

							var KPUID = Form.find('#KPUID').val();
							var KPSMessage = Form.find('#KPSMessage').val();

							if (
							!KPUID.length || 
							!KPSMessage.length ||
							KPSMessage.length > 300) return false;
							
							if (el.data('working')) return false;
							el.data('working', true);
							
							$.mPost(FormURL, FormData, function(ReturnDataStatus){
								if (ReturnDataStatus.Status){
									
									var statuses = {posts:[]};
									
									/*PROFILE*/
									this.StatusName = ReturnDataStatus.From.StatusName;
									this.StatusUsername = ReturnDataStatus.From.StatusUsername;
									this.StatusUsernameId = ReturnDataStatus.From.StatusUsernameId;
									this.StatusUsernameDetail = ReturnDataStatus.From.StatusUsernameDetail;
									this.StatusUsernameWeb = FormatStr(ReturnDataStatus.From.StatusUsernameWeb);
									/*END PROFILE*/
																		
									/*STATUS*/
									this.StatusId = ReturnDataStatus.StatusId;
									this.StatusMessage = FormatStr(ReturnDataStatus.StatusMessage);
									this.StatusTime = FormatTime(ReturnDataStatus.StatusTime);
									/*END STATUS*/
									
									statuses.posts.push(this);
									$('#status_'+this.StatusId).data('ReturnDataStatus', statuses.posts);									
										
									var ListStatus = $('#TemplateListStatus').tmpl(statuses.posts);
									ListStatus.hide().prependTo($('#StatusLists')).slideDown();
								}
								Form.find('#KPSMessage').val('');
								el.data('working', false);
							});

						});

						$('#statuspostlist').delegate('a#AvatarLink', 'click', function(){

							var el = $(this);
							var li = el.closest('li');
							var id = li.data('idstatus');
							var iduser = li.data('statususernameid');
							var panel = $('#statuswrapperdetail');
							var panel_width = panel.css('left');
							var data_id = panel.data('iddetailstatus');
							var data_iduser = panel.data('idprofile');

							var panelDetailStatus = $('#panel-detailstatus');

							li.siblings().removeClass('selected');
							li.addClass('selected');
							
							if (data_id == id && data_iduser == iduser){
								if (panel_width == '732px'){
									if (panel.attr('data-main') == iduser){
										panel.animate({
											left : parseInt(panel.css('left'), 0) == 0 ? '732px' : 0
										});
									}
								}else{
									panel.animate({
										left : '732px'
									});
								}
							}else{
								if (panel_width == '732px'){
								}else{
									panel.animate({
										left : parseInt(panel.css('left'), 0) == 0 ? '732px' : 0
									});
								}
							}

							panel.data('iddetailstatus', id);
							panel.data('idprofile', iduser);
							panel.attr('data-main', iduser);

							$('#PanelDetailStatus').empty();

							var ReturnDataStatus = $('#status_'+id).data(ReturnDataStatus);
							ReturnDataStatus =  ReturnDataStatus.tmplItem.data;
							var TemplateDetailStatus = $('#TemplateProfileDetail').tmpl(ReturnDataStatus);
							
							$('#PanelDetailStatus').html(TemplateDetailStatus);

							
							return false;
						});

						$('#statuspostlist').delegate('#DetailStatus', 'click', function(){
							
							var el = $(this);
							
							var li = el.closest('li');
							var id = li.data('idstatus');
							var iduser = li.data('statususernameid');
							var panel = $('#statuswrapperdetail');
							var panel_width = panel.css('left');
							var data_id = panel.data('iddetailstatus');
							var data_iduser = panel.data('idprofile');

							var panelDetailStatus = $('#panel-detailstatus');

							li.siblings().removeClass('selected');
							li.addClass('selected');
							
							if (data_id == id && data_iduser == iduser){
								if (panel_width == '732px'){
									if (panel.attr('data-main') == id){
										panel.animate({
											left : parseInt(panel.css('left'), 0) == 0 ? '732px' : 0
										});
									}
								}else{
									panel.animate({
										left : '732px'
									});
								}
							}else{
								if (panel_width == '732px'){
								}else{
									panel.animate({
										left : parseInt(panel.css('left'), 0) == 0 ? '732px' : 0
									});
								}
							}

							panel.data('iddetailstatus', id);
							panel.data('idprofile', iduser);
							panel.attr('data-main', id);

							$('#PanelDetailStatus').empty();

							var ReturnDataStatus = $('#status_'+id).data(ReturnDataStatus);
							ReturnDataStatus =  ReturnDataStatus.tmplItem.data;
							var TemplateDetailStatus = $('#TemplateListDetailStatus').tmpl(ReturnDataStatus);
							
							$('#PanelDetailStatus').html(TemplateDetailStatus);

							Embed();
							
							return false;
						});

						$('#close').click(function(){
							var panel = $('#statuswrapperdetail');
							panel.animate({
								left : parseInt(panel.css('left'), 0) == 0 ? '732px' : 0
							});
							$('#PanelDetailStatus').empty();
							return false;
						});

						$(window).scroll(function(){
                            var st = $(window).scrollTop();
                            var sdh = $(document).height();
                            var swh = $(window).height();
                            var r = sdh - swh;
                            var r2 = r - st;

                            //console.log(r2);

                            if (r2 == 1 || r2 == 0) GetStatus();

                            /*GO ERROR*/
							//if ($(window).scrollTop() == $(document).height() - $(window).height()){
								//GetStatus();
								//console.log('aaa');
							//}
							//console.log($(window).scrollTop() + "->" + ($(document).height() - $(window).height()));
                            /*END GO ERROR*/
                            
						});
						
					};

					var GetStatus = function(){

						var url = '<?php echo BASE_URL; ?>mantis/ajaxstatus/GetStatusAll';
						var data = {KPUID:'100002650013597', Start:Start, PerPage:10};
						
						$.when($.getJSON(url, data)).done(function(posts){
							var statuses = {posts:[]};
							$.each(posts, function(){
								if (this.Status){
									/*PROFILE*/
									this.StatusName = this.From.StatusName;
									this.StatusUsername = this.From.StatusUsername;
									this.StatusUsernameId = this.From.StatusUsernameId;
									this.StatusUsernameDetail = this.From.StatusUsernameDetail;
									this.StatusUsernameWeb = FormatStr(this.From.StatusUsernameWeb);
									/*END PROFILE*/
																		
									/*STATUS*/
									this.StatusId = this.StatusId;
									this.StatusMessage = FormatStr(this.StatusMessage);
									this.StatusTime = FormatTime(this.StatusTime);
									/*END STATUS*/
									
									statuses.posts.push(this);
									$('#status_'+this.StatusId).data('ReturnDataStatus', this);
									
									Start++;
								}
							});
							var ListStatus = $('#TemplateListStatus').tmpl(statuses.posts);
							ListStatus.appendTo($('#StatusLists'));
						});
						
					};
					
					var Embed = function(){
						$('#PanelDetailStatus a').embedly({
							key : '799c24ceb84d11e0bc094040d3dc5c07',
							autoplay : 'false',
							maxWidth: 320,
							method : 'after',
						}, function(oembed, dict){
							if (oembed == null){
								return;
							}

							var EmbedTitle = (oembed.title !== '' && typeof oembed.title !== 'undefined' ? oembed.title : '');
							var Embedurl = (oembed.url !== '' && typeof oembed.url !== 'undefined' ? oembed.url : '#');
							var EmbedDescription = (oembed.description !== '' && typeof oembed.description !== 'undefined' ? oembed.description : '');
							var EmbedProviderURL = (oembed.provider_url !== '' && typeof oembed.provider_url !== 'undefined' ? oembed.provider_url : '#');
							var EmbedProviderName = (oembed.provider_name !== '' && typeof oembed.provider_name !== 'undefined' ? oembed.provider_name : '');
							var EmbedHTML = (oembed.html !== '' && typeof oembed.html !== 'undefined' ? oembed.html : '');
							var EmbedPicture = EmbedMedia = '';
							if (oembed.thumbnail_url !== '' && typeof oembed.thumbnail_url !== 'undefined'){
								EmbedPicture = oembed.thumbnail_url;
								EmbedMedia = '<a href="'+Embedurl+'" onclick="return;" target="_blank"><img src="'+EmbedPicture+'" alt="'+EmbedTitle+'" class="imageattach" /></a>';
							}
					
							var DataMedia = {
									EmbedTitle : EmbedTitle,
									Embedurl : Embedurl,
									EmbedDescription : EmbedDescription,
									EmbedProviderURL : EmbedProviderURL,
									EmbedProviderName : EmbedProviderName,
									EmbedHTML : EmbedHTML,
									EmbedMedia : EmbedMedia
							};

                            $('.mediacontainer').empty();

							var TemplateMedia = $('#TemplateMedia').tmpl(DataMedia);
							
							$('.mediacontainer').append(TemplateMedia);
							
							
						});
					};

					var FormatStr = function(str){
						str=' '+str;
						str= str.replace(/\b((http|https):\/\/\S+)/g, '<a href="$1" target="_blank">$1</a>');
						str= str.replace(/([^\w])\@([\w\-]+)/gm,'$1@<a href="$2" target="_blank">$2</a>');
						str = str.replace(/([^\w])\#([\w\-]+)/gm,'$1<a href="$2" target="_blank">#$2</a>');
						return str;
					};
					var FormatTime = function(time){
						var period = new Date(time);
						var delta = new Date() - period;
						
						if (delta <= 10000){
							return 'Just now';
						}
						
						var units = null;
						
						var conversions = {
							millisecond : 1, // ms -> ms
							second : 1000, // ms -> sec
							minute : 60, // sec -> min
							hour : 60, // min -> hour
							day : 24, // hour -> day
							month : 30, // day -> month
							year : 12, // month -> year
						};
						
						for(var key in conversions){
							if (delta < conversions[key]){
								break;
							}else{
								units = key;
								delta = delta / conversions[key];
							}
						}
						
						delta = Math.floor(delta);
						if (delta !== 1) units += 's';
						
						return [delta, units, "ago"].join(' ');
					};

					return{
						Init : Init
					}
					
				})();

				MantisProfile.Init();
				
			});
		</script>
		
	</body>
</html>