<?php
  $page_title = "Work";
  $current_page = "work";

  include('./includes/header.php');
?>

 <section class="module module--showcase">
  <div class="module__inner">
    <header class="module__header">
      <h1>Recent Works</h1>
    </header>
    <div class="module__content">
      <p>Below you can see some of my recent works and snippets from CodePen. For some more examples you can view the <a href="./projects">Project Page</a>.</p>
      <p>Pens fetched from <a href="http://codepen.io">CodePen</a> with <a href="https://github.com/TimPietrusky/pentizr">Pentizr</a> by <a href="http://timpietrusky.com">Tim Pietrusky</a></p>
      <p>I'm also available for work. <a href="mailto:hallo@kevingimbel.de">Drop me a line</a>.</p>
    </div>
  </div>
</section>

<div class="my-pens"></div>
<script type="text/javascript">
  $(function() {
    $('.my-pens').pentizr({
      username: 'kevingimbel',
      type: 'owned',
      limit: 6,
      template:
        '<section class="module module--codepen">'+
          '<aside class="module__img">'+
            '<iframe src="{{urlFull}}" frameborder="0"></iframe>'+
          '</aside>'+
          '<div class="module__inner">'+
            '<header class="module__header">'+
                  '<h1><a href="{{urlPen}}">{{title}}</a></h1>'+
                '</header>'+
                '<div class="module__content">'+
                  '<p>{{description}}</p>'+
                '</div>'+
                  '<footer class="module__footer">'+
                      '<p>This pen got <b>{{hearts}} hearts</b> and has been viewed <b>{{views}} times</b>. See the full Code <a href="{{urlPen}}">on Codepen</a>.</p>'+
                    '</footer>'+
                  '</div>'+
                '</section>'
    });
  });
</script>
<?php 

/*

Module Markup (Emmet)

section.module.module--showcase>(aside.module__img>img)>(div.module__inner>(header.module__header>h1)>(div.module__content>p)>(footer.module__footer>p))				

*/
?>

<?php
  include('./includes/footer.php');
?>
