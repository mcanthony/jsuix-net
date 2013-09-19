

JSUIXNet = function () {

  /************************
  * **********************
  * Class Members
  * **********************
  */


  /**
  * Internet Protocol Address
  *
  * @type {*}
  */
  var vip_address;






  /**************************
   * **********************
   * Class Methods
   * **********************
   */

  /**
   * Set or get the IP address
   *
   * @param vip
   */
  var vipAddress = function (vip) {
    if (typeof vip == 'undefined')
      return vip_address;
    vip_address = vip;
    return null;
  };




var accept = function (data) {

  var uri = data.data.uri;



  newLine();cnslWrite(uri);newLine();

};


  /**
   * Send a request
   *
   * @param env
   * @param request
   */
  var makeRequest = function (env, request) {
    var client_vip = vipAddress();
    var uri = new URI(request.uri);
    var host_vip = Router.dnsLookup(uri);
    var data = {
      host_vip: host_vip,
      client_vip: client_vip,
      data: request
    };

    Router.route(data);
  };












  /**************************
   * **********************
   * Class Construct Area
   * **********************
   */

  /**
   *
   * @type {*|jQuery}
   */
  vip_address = $('.vip-configuration .instance-address').val();
  $('html').attr('id', vip_address);
  $('.instance-title span').html('vip://' + vipAddress());

  Router.register(accept, 'vip://' + vipAddress());

  return {
    vipAddress: vipAddress,
    makeRequest: makeRequest,
    accept: accept
  }
};




var jsuixNetwork;

$(function(){
  jsuixNetwork = JSUIXNet();
});



/**
 var dns_table = {

    'com': {
      'google': '1.199'
    },

    'org': {
      'craigslist': '1.198'
    },

    'local': {
      'localhost': '0.1'
    }
  };
 */