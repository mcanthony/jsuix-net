

$(document).ready(function(){

  var object_template = $('<div class="object"></div>');
  var application_stage = $('<div class="application-stage"></div>');

  application_stage
    .css('height', '500px')
    .css('width', '80%')
    .css('margin-top', '5%')
    .css('margin-left', '10%')
    .css('border', '1px solid green')
    .css('position', 'relative');

  object_template
    .css('height', '10px')
    .css('width', '10px')
    .css('background-color', 'red')
    .css('position', 'absolute')
    .css('left', '0px')
    .css('top', '0px');

  /**
   *
   * @returns {*}
   */
  object_template.deepclone = function () {
    var clone = $(this).clone();

    var new_methods = {


      /**
       * Set pixels from top to value
       *
       * @param value
       * @returns {*|jQuery|HTMLElement}
       */
      setTop: function(value) {
        $(this).css('top', parseInt(value) + 'px');
        return $(this);
      },


      /**
       * Set pixels from left to value
       *
       * @param value
       * @returns {*|jQuery|HTMLElement}
       */
      setLeft: function(value) {
        $(this).css('left', parseInt(value) + 'px');
        return $(this);
      }
    };
    clone = jQuery.extend(true, clone, new_methods);
    return clone;
  };

  application_stage.appendTo('body');


  // Example

  objects = [];

  objects[0] = object_template.deepclone();
  objects[1] = object_template.deepclone();

  objects[0]
    .css('background-color', 'blue');

  objects[0].appendTo(application_stage);


});