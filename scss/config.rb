# note: this should never truly be referenced since we are using relative assets
http_path = "/skin/frontend/rwd/default/"
css_dir = "../css"
sass_dir = "../scss"
images_dir = "../images"
javascripts_dir = "../js"
relative_assets = true

# This allows us to include all the previous stuff.
add_import_path "../../default/scss/"

output_style = :expanded
environment = :development
