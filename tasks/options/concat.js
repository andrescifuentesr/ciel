module.exports = {
  basic: {
    src: [
      'js/libs/jquery-1.10.2.min.js',
      'js/libs/jquery.validate.js',
      'js/main.js'
    ],
    dest: 'js/build/production-home.js'
  },
  extras: {
    src: [
      'js/libs/jquery-1.10.2.min.js',
      'js/libs/classie.js',
      'js/libs/fullscreenForm.js'
    ],
    dest: 'js/build/production-test.js'    
  }
}