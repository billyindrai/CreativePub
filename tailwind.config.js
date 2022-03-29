module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      'sans':['Barlow']
    },
    extend: {
      colors: {
        'background':'#262626',
        'register_orange' : '#FF8A00',
        'cream_line' : '#FFF3CD',
        'bg_calendar' :'#1D1D1F',
        'border_calendar' : '#E5E5E5'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
