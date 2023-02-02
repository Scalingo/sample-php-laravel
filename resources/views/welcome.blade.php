<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Greetings from a sample PHP Laravel app!</title>
    <meta content='website' property='og:type'>
    <meta content='https://cdn.scalingo.com/homepage/assets/fb-33a6a93ddbf90bfdae57407481aa05a4.png' property='og:image'>
    <meta content="Deploying your own Laravel app on Scalingo is as easy as pie: JUST CLICK THIS BUTTON! It will be up in less than 2 minutes!" property='og:description'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://scalingo.com/favicon.ico" type="image/vnd.microsoft.icon">
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
      .tech-logo { width:65px;height:65px; }
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
        <svg xmlns="http://www.w3.org/2000/svg" class="tech-logo" viewBox="0 0 128 128"><path fill="#6181B6" d="M64 33.039C30.26 33.039 2.906 46.901 2.906 64S30.26 94.961 64 94.961 125.094 81.099 125.094 64 97.74 33.039 64 33.039zM48.103 70.032c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34H41.7c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515a15.118 15.118 0 0 1-2.972 3.748zM69.414 73l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528L76.772 73h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zm-56.985 0h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458S41.708 54 38.934 54z"></path></svg>
      </div>
      <h1>Greetings from a sample Laravel app!</h1>
      <h2>
        <span style="display:block;"><span class="one-liner">Deploying your own PHP Laravel app on Scalingo</span> is as easy as pie:</span>
        <a class="btn"
          href="https://my.osc-fr1.scalingo.com/deploy?source=https://github.com/Scalingo/sample-php-laravel">Just click this button!</a>
        <span style="display:block;">It will be up in less than 2 minutes!</span>
      </h2>
      <p>The code of this sample lives <a
          href="https://github.com/Scalingo/sample-php-laravel">on GitHub</a>. You
        can find <a href="https://samples.scalingo.com">more samples here</a>.</p>
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