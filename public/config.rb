environment = :production
css_dir = "css"
sass_dir = "css/scss"
images_dir = "images"
output_style = (environment == :development) ? :expanded : :compact
relative_assets = true
sass_options = (environment == :production) ? {:debug_info => false} : {:always_update => true}
