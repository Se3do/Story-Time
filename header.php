<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
  <title>Home</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Css/index.css">
</head>

<body>
  <header>
    <div id="top">
      <div id="logo-search">
        <button id="logo" class="button" data-text="Awesome">
          <span class="actual-text">&nbsp;story time&nbsp;</span>
          <span aria-hidden="true" class="hover-text">&nbsp;story&nbsp;time&nbsp;</span>
        </button>
        <div class="search">
          <form class="form">
            <button>
              <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
            <input class="input" placeholder="Search" type="text">
            <button class="reset" type="reset">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
      <div id="login-cart">
        <a href="./html/final lo.html" id="login">Login</a>
        <a href="cart.php" id="cart-link"><img id="cart" src="images/shopping-cart-w.hite.png" alt="Cart"></a>
      </div>
    </div>
    <nav>
      <button class="value">
        Featured
      </button>
      <button class="value">
        Books
      </button>
      <button class="value">
        Manga
      </button>
      <button class="value">
        Novels
      </button>
      <button class="value">
        Genre1
      </button>
      <button class="value">
        Genre2
      </button>
      <button class="value">
        Genre3
      </button>
      <button class="value">
        Genre4
      </button>
    </nav>
  </header>