<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Greetings from a sample PHP app built with the Laravel framework!</title>
    <meta content='website' property='og:type'>
    <meta content='https://cdn.scalingo.com/homepage/assets/fb-33a6a93ddbf90bfdae57407481aa05a4.png' property='og:image'>
    <meta content="Deploying your own PHP/Laravel app on Scalingo is as easy as pie: JUST CLICK THIS BUTTON! It will be up in less than 2 minutes!" property='og:description'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
    <style>
      body { color: #373a3c; font-family: 'Roboto', sans-serif; font-size: 1rem; line-height: 1.5; font-weight: 300; }
      .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        color: inherit;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        margin-bottom: 1rem;
        margin-top: 0;
      }
      a { color: #0275d8; text-decoration: none; background-color: transparent; }
      a:focus, a:hover { color: #014c8c; text-decoration: underline; text-decoration: none; }
      a:focus { outline: thin dotted; outline-offset: -2px; }
      .container { margin: 0 auto; text-align: center; }
      .hero { padding: 3rem 1.5rem; }
      .love { margin-bottom: 2rem; }
      h1 { font-size: 2.5rem; margin-bottom: 2rem; }
      h2 { font-size: 1.6rem; font-weight: 300; }
      small { margin-top: 0; }
      .btn {
        overflow: visible;
        text-transform: uppercase;
        text-decoration: none;
        margin: 1em 0;
        -moz-user-select: none;
        border-radius: 0.25rem;
        cursor: pointer;
        display: inline-block;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        padding: 0.375rem 1rem;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background-color: #0275d8;
        border-color: #0275d8;
        color: #fff;
        border-radius: 0.3rem;
        font-size: 1.25rem;
        line-height: 1.33333;
        padding: 0.75rem 1.25rem;
      }
      .btn:hover, .btn:focus, .btn:active { background-color: #025aa5; border-color: #01549b; color: #fff; background-image: none; }
      .btn:active:focus, .btn:active:hover { background-color: #014682; border-color: #01315a; color: #fff; }
      .scalingo-logo { max-width: 100%; height: auto; width: 330px; }
      .heart-logo { margin: 0 20px; width:56px;position:relative; top:-18px; }
      .tech-logo { width:56px;position:relative;top:-18px; }
      @media (min-width:768px){
        .container { width: 800px; }
        .one-liner { display: block; }
      }
      @media (max-width:767px){
        .scalingo-logo, .heart-logo, .tech-logo { display: block; position: unset; margin: 0 auto; }
        .scalingo-logo, .heart-logo { margin-bottom: 1rem; }
      }
    </style>
  </head>
  <body>
    <div class="container hero">
      <div class="love">
        <img class="scalingo-logo" alt="Scalingo" src="https://scalingo.com/logo-lightgrey.svg">
        <img class="heart-logo" alt="love" src="https://cdn.scalingo.com/documentation/heart.png">
        <img class="tech-logo" alt="Laravel" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAYAAAA850oKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyNUVCMTdGOUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyNUVCMTdGQUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjI1RUIxN0Y3QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjI1RUIxN0Y4QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+g6J7EAAAEL1JREFUeNrsXQmU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">
      </div>
      <h1>Greetings from a sample PHP app <br/> built with the Laravel framework!</h1>
      <h2>
        <span style="display:block;"><span class="one-liner">Deploying your own PHP/Laravel app on Scalingo</span> is as easy as pie:</span>
        <a class="btn" href="https://my.scalingo.com/deploy?source=https://github.com/Scalingo/sample-php-laravel">Just click this button!</a>
        <span style="display:block;">It will be up in less than 2 minutes!</span>
      </h2>
      <p>The code of this sample lives <a href="/">on GitHub</a>. You can find <a href="http://samples.scalingo.com">more samples here</a>.</p>
    </div>
    <footer>
      <div class="container">
        <p>
          <span class="one-liner"><a href="https://scalingo.com">Scalingo</a> is the best Platform as a Service on the market:</span>
          no server to install, no dependencies to install, just push your code!
        </p>
      </div>
    </footer>
  </body>
</html>
