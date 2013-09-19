$(function(){

  var frame_ids = {};
  var dns_table = {};

  var i = 0;

  $('iframe').each(function(){
    frame_ids[i++] = $(this).attr('id');
  });

  for (var key in frame_ids) {
    var frame_id = frame_ids[key];
    //alert (frame_id);
    var frame = document.getElementById(frame_id);
    frame.contentWindow.Router = Router;
    //frame.contentWindow.console = console;

  }


  dns_table = {

    'localhost': '0.1',

    'com': {
      'google': '3.2',
      'bajabound': '3.3'
    },

    'org': {
      'craigslist': '4.2'
    }

  };
});


Router = {
  registrant: {},

  /**
   * Do some majick
   *
   * @param data
   */
  route: function (data) {
    $('.blink').css('background-color', 'red');
    setTimeout(function(){$('.blink').css('background-color', 'grey');}, 100);

    var iframe_id = 'vip://' + data.host_vip;

    console.log('router: routing packet from ' + data.client_vip + ' to ' + data.host_vip);

    //console.log(data);

    Router.registrant[iframe_id](data);
  },


  register: function(accept_callback, id) {
    console.log('router: registering new at ' + id);
    Router.registrant[id] = accept_callback;
  },


  /**
   * Elaborate later...
   *
   * @param uri
   * @returns {*}
   */
  dnsLookup: function (uri) {
    if (uri.domain() == 'rightscreen.com')
      host_vip =  '2.1';

    if (uri.domain() == 'leftscreen.org')
      host_vip = '1.1';
    else
      var host_vip = uri.domain();
    console.log('router: resolving request uri \'' + uri.toString() + '\' to \'' + host_vip + '\'');
    return host_vip;
  }
};