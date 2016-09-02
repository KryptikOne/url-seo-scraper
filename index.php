<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get SEO Contents from URL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" />
	<link rel="stylesheet" type="text/css" href="src/css/master.css" />
</head>
<body>

	<div class="container">

		<div class="dataField">
			<h1 class="app-title">MetaScraper</h1>
			<form id="urlScrape" class="urlScrape">
				<label for="getUrl">URL To Scrape</label>
				<input type="text" id="getUrl" name="getUrl" placeholder="http://www.domain.com" />
				<input type="submit" value="Get Data" />
			</form>
		</div>

		<div class="dataField">
			<h2>Page Title</h2>
			<div id="pageTitle" class="result"></div>
		</div>

		<div class="dataField">
			<h2>Meta Description</h2>
			<div id="metaDesc" class="result"></div>
		</div>

		<div class="dataField">
			<h2>Meta Keywords</h2>
			<div id="metaKeys" class="result"></div>
		</div>

		<div class="message">
			<div class="whileLoading">Workin on it...please hang tight</div>
			<div class="onError">Sorry, there was an error. Please check the URL entered and try again.</div>
		</div>

	</div> <!-- /.container -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" integrity="sha384-fj9YEHKNa/e0CNquG4NcocjoyMATYo1k2Ff5wGB42C/9AwOlJjDoySPtNJalccfI" crossorigin="anonymous"></script>
	<script src="src/js/ajax.js"></script>

</body>
</html>
