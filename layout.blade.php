
<style>
  * {
    box-sizing: border-box; 
  }
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: row;
    margin: 0;
  }
  .outer-col-1 {
    background: #D7E8D4;
    flex: 1;
  }
  .outer-col-2 {
    display: flex;
    flex-direction: column;
    flex: 5;
  }
  .inner-row {
    display: flex;
    flex-direction: row;
  }
  .inner-col {
    flex: 4;
  }
  .inner-row article {
    min-height: 60vh;
  }
  .inner-row aside {
    background: beige;
    flex: 1;
  }
  header, footer {
    background: yellowgreen;
    height: 20vh;
  }
  header, footer, article, nav, aside {
    padding: 1em;
  }
</style>

  <nav class="outer-col-1">Nav</nav>
  <div class="outer-col-2">
  	<header>Header</header>
    <div class="inner-row">
      <div class="inner-col">
    	<article>Article</article>
  		<footer>Footer</footer>
      </div>
    	<aside>Aside</aside>
    </div>
  </div>
