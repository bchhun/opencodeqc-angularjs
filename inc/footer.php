    <script>
    var slideshow = new SlideShow();

    var snippets = document.querySelectorAll('.snippet');
    for(var i=0; i<snippets.length; i++) {
        new CSSSnippet(snippets[i]);
    }

    var cssControls = document.querySelectorAll('.css-control');
    for(var i=0; i<cssControls.length; i++) {
        new CSSControl(cssControls[i]);
    }
    </script>
</body>
</html>