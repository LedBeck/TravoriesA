var tools = {
	notificacion: function(layout, msg, type) {
		var n = noty({
			text: msg,
			type: 'alert',
			// dismissQueue: true,
			timeout: '2000',
			layout: 'top',
			theme: 'defaultTheme'
		});
		console.log('html: ' + n.options.id);
	},
	createLoader : function(div,append){
		if(append)
			$(div).append('<div class="loader"><i class="fa fa-spinner fa-pulse"></i></div>');
		else
			$(div).html('<div class="loader"><i class="fa fa-spinner fa-pulse"></i></div>');
	},
	removeLoader : function(div){
		$(div).find('.loader').remove();
	},
	cargarPrincipal : function(params){
		// params maximos { url , params, append, callback, json,elemento}
		if(!params.params)
			params.params = {};
		if(!params.append)
			params.append = false;
		if(!params.json)
			params.json = false;
		if(!params.elemento)
			params.elemento = '.mainSection';
		tools.createLoader(params.elemento);
		$.post(params.url,params.params, function(data, textStatus, xhr) {
			tools.removeLoader(params.elemento);
			if(params.json === false ){
				if(params.append){
					$(params.elemento).append(data);
				}else{
					$(params.elemento).html(data);
				}
			}
			if(typeof(params.callback) == 'function' ){
				params.callback(data,textStatus,xhr);
			}
		});
	}
}
/*TEST of tools*/
tools.cargarPrincipal({
	url: base_url+'admin/register'
});
// tools.createLoader('.mainSection');
// setTimeout(function(){tools.removeLoader('.mainSection')},3000);