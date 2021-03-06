<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
  <script src="https://use.fontawesome.com/555504f4ef.js"></script>
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <style>

  .banner {
    padding: 10px 20px;
    box-shadow: 1px 1px 1px #CCC;
  }
  
  .section-1{
    <?php echo ot_get_option ( 'section_1', '' ); ?>
  }
  .section-2{
    <?php echo ot_get_option ( 'section_2', '' ); ?>
  }
  .section-3{
    <?php echo ot_get_option ( 'section_3', '' ); ?>
  }
  .section-4{
    <?php echo ot_get_option ( 'section_4', '' ); ?>
  }
  .section-5{
    <?php echo ot_get_option ( 'section_5', '' ); ?>
  }
  .section-6{
    <?php echo ot_get_option ( 'section_6', '' ); ?>
  }
  .section-7{
    <?php echo ot_get_option ( 'section_7', '' ); ?>
  }
  .section-8{
    <?php echo ot_get_option ( 'section_8', '' ); ?>
  }
  .section-9{
    <?php echo ot_get_option ( 'section_9', '' ); ?>
  }

  body {
    background-color: <?php echo ot_get_option ( 'custom_background_css', '#fff' ); ?>;
  }

  footer {
    background-color: <?php echo ot_get_option ( 'footer_color', '#e93694' ); ?>;
  }

  .service-post {
    color: <?php echo ot_get_option ( 'color_text_services', '#fff' ); ?>;
    background-color: <?php echo ot_get_option ( 'color_background_services', 'a979b7' ); ?>;
  }

  .content-103 .service-hover {
    background: <?php echo ot_get_option ( 'hover_service', '#eb7a5c' ); ?>;
  }

  .content-103 .service-icon i {
    font-size: 18px;
    color: <?php echo ot_get_option ( 'icon_color', '#eb7a5c' ); ?> !important;
  }

  .content-103 .service-icon {
    border: 2px solid <?php echo ot_get_option ( 'icon_color', '#eb7a5c' ); ?>;
  }

  h1 span {
    box-shadow:
      10px 0 0 <?php echo ot_get_option ( 'hedline_color', '#a979b7' ); ?>,
      -10px 0 0 <?php echo ot_get_option ( 'hedline_color', '#a979b7' ); ?>;
    background: <?php echo ot_get_option ( 'hedline_color', '#a979b7' ); ?>;
    color: <?php echo ot_get_option ( 'color_text_home_h1', '#fff' ); ?>;
    padding-bottom: 5px;
  }

  <?php if($font) :?>

  body{
      font-family: '<?php echo isset($families[$font['font-family']]) ? $families[$font['font-family']] : $ot_google_fonts[$font['font-family']]['family'] ;  ?>';
      font-style: <?php if($font['font-style']){echo $font['font-style'] ;} ?>;
    font-size: <?php if($font['font-size']){echo $font['font-size'] ;} ?>;
    font-variant: <?php if($font['font-variant']){echo $font['font-variant'] ;} ?>;
    font-weight: <?php if($font['font-weight']){echo $font['font-weight'] ;} ?>;
    letter-spacing: <?php if($font['letter-spacing']){echo $font['letter-spacing'] ;} ?>;
    line-height: <?php if($font['line-height']){echo $font['line-height'] ;} ?>;
    text-decoration: <?php if($font['text-decoration']){echo $font['text-decoration'] ;} ?>;
    text-transform: <?php if($font['text-transform']){echo $font['text-transform'] ;} ?>;
    color: <?php if($font['font-color']){echo $font['font-color'] ;} ?>;
  }

  <?php endif; ?>

  <?php for($i=1;$i<=6;$i++) : ?>

  <?php if( !${'font_h'.$i} ) continue; ?>

  h<?php echo $i; ?>  {
      font-family: '<?php echo isset($families[${'font_h'.$i}['font-family']]) ? $families[${'font_h'.$i}['font-family']] : $ot_google_fonts[${'font_h'.$i}['font-family']]['family'] ;  ?>';
      font-style: <?php if(${'font_h'.$i}['font-style']){echo ${'font_h'.$i}['font-style'] ;} ?>;
    font-size: <?php if(${'font_h'.$i}['font-size']){echo ${'font_h'.$i}['font-size'] ;} ?>;
    font-variant: <?php if(${'font_h'.$i}['font-variant']){echo ${'font_h'.$i}['font-variant'] ;} ?>;
    font-weight: <?php if(${'font_h'.$i}['font-weight']){echo ${'font_h'.$i}['font-weight'] ;} ?>;
    letter-spacing: <?php if(${'font_h'.$i}['letter-spacing']){echo ${'font_h'.$i}['letter-spacing'] ;} ?>;
    line-height: <?php if(${'font_h'.$i}['line-height']){echo ${'font_h'.$i}['line-height'] ;} ?>;
    text-decoration: <?php if(${'font_h'.$i}['text-decoration']){echo ${'font_h'.$i}['text-decoration'] ;} ?>;
    text-transform: <?php if(${'font_h'.$i}['text-transform']){echo ${'font_h'.$i}['text-transform'] ;} ?>;
    color: <?php if(${'font_h'.$i}['font-color']){echo ${'font_h'.$i}['font-color'] ;} ?>;
  }

  <?php endfor; ?>
  </style>
</head>
