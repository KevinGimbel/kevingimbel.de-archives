<?php
  $page_title = "Kevin Gimbel - Web Development";
  $current_page = "home";

  include('./includes/header.php');

  // Loading latest blog posts from atarijunge.de

  $atarijunge_xml = file_get_contents('http://atarijunge.de/feed/');
  $a = new SimpleXmlElement($atarijunge_xml);

  $post_title = $a->channel[0]->item[0]->title;
  $post_url = $a->channel[0]->item[0]->link;
?>

<section class="module module--about">
  <aside class="module__img--left"><img src="assets/img/self_head_2.jpg" class="rounded-full img--small" ></aside>
  <div class="module__inner">
    <div class="module__content">
      <h3 class="home--headline">Hi, I'm Kevin Gimbel. You may also know me as Kevin Atari or atarijunge.</h3>
        <p class="home--subheadline">I convert coffee to code and sketches to websites.
          <span class="home--smallfont">Find out more <a href="./about">here</a>.</span></p>
          <p class="latest-blog-post">Latest Blog post: <a href="<?php print $post_url ?>"><?php print $post_title ?></a></p>
    </div><!-- module__inner -->
  </div><!-- module__content -->
</section>

<div class="my-pens"></div>
<script type="text/javascript">
  $(function() {
    $('.my-pens').pentizr({
      username: 'kevingimbel',
      type: 'owned',
      limit: 1,
      template:
        '<section class="module module--codepen">'+
          '<aside class="module__img">'+
            '<iframe src="{{urlFull}}" frameborder="0" width="400" height="300"></iframe>'+
          '</aside>'+
          '<div class="module__inner">'+
            '<header class="module__header">'+
                  '<p class="home--smallfont">Latest experiment from CodePen</p>'+
                  '<h1><a href="{{urlPen}}">{{title}}</a></h1>'+
                '</header>'+
                '<div class="module__content">'+
                  '<p>{{description}}</p>'+
                '</div>'+
                  '<footer class="module__footer">'+
                      '<p>This pen got <b>{{hearts}} hearts</b> and has been viewed <b>{{views}} times</b>. See the full Code <a href="{{urlPen}}">on Codepen</a></p>'+
                    '</footer>'+
                  '</div>'+
                '</section>'
    });
  });
</script>
<?php
  include('./includes/footer.php');
?>