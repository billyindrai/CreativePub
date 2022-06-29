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
        'border_calendar' : '#E5E5E5',
        'nav_bar' : '#1E1E1E',
        'content_box' : '#3D3D3D',
        'search_button': '#A4A0A0',
        'hover_text_nav' : '#E57C00',
        'waiting_job' : '#FFB302',
        'get_job' : '#048C78',
        'applied_job' : '#55AC24',
        'line_cream' : '#FFF3CD',
        'applied_job': '#55AC24',
        'waiting_job': '#FFB302',
        'cancelled_job': '#C70000',
        'amber_font': "#FFF3CD",
        'gray_font': "#C4C4C4",
        'dark_font': "#3D3D3D",

      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
